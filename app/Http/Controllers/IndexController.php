<?php
namespace App\Http\Controllers;
use App\Contact;
use App\NewsCate;
use App\News;
use App\NewsLetter;
use App\Recruitment;
use App\Products;
use App\ProductCate;
use App\Feedback;
use App\About;
use App\Slider;
use App\Images;
use App\GioiThieu;
use Cache;
use Cart;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;

class IndexController extends Controller {
	protected $setting = NULL;

	/*
		|--------------------------------------------------------------------------
		| Welcome Controller
		|--------------------------------------------------------------------------
		|
		| This controller renders the "marketing page" for the application and
		| is configured to only allow guests. Like most of the other sample
		| controllers, you are free to modify or remove it as you desire.
		|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

		$setting = DB::table('setting')->select()->where('id', 1)->get()->first();

		$dichvu = DB::table('news')->select()->where('status', 1)->where('com', 'dich-vu')->orderBy('stt', 'asc')->get();

		$about = DB::table('about')->where('com', 'gioi-thieu')->get();
		
		Cache::forever('setting', $setting);

		
		session_start();
		// App::setLocale(Session::get('locale'));
		if (Session::has('locale')) {
			App::setLocale(Session::get('locale'));
		}

	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getLangs(Request $request) {

		// App::setLocale($request->id);
		//Session::set('locale', $request->id);
		Session::put('locale', $request->slug);
		// dd(Session::get('locale'));
		return redirect()->back();
	}
	public function index() {
		$lang = Session::get('locale');
		$projects = News::where('status',1)->where('com','du-an')->orderBy('id','desc')->take(8)->get()->toArray();
		$news = News::where('status',1)->where('com','tin-tuc')->orderBy('id','desc')->take(5)->get()->toArray();
		$hot_news = News::where('status',1)->where('com','tin-tuc')->where('noibat',1)->orderBy('id','desc')->take(4)->get()->toArray();
		$hotProducts = Products::where('noibat',1)->where('status',1)->take(20)->orderBy('id','desc')->get()->toArray();
		$partners = DB::table('lienket')->where('com','doitac')->orWhere('com','khachhang')->get();
		$about_home = About::where('status',1)->where('com','gioi-thieu')->first()->toArray();
		$feedbacks = Feedback::get()->toArray();
		// Cấu hình SEO
		$setting = Cache::get('setting');
		$sliders = Slider::where('com','gioi-thieu')->where('status',1)->get()->toArray();
		$title = $setting->title_vi;
		$keyword = $setting->keyword_vi;
		$description = $setting->description_vi;
		// End cấu hình SEO
		$img_share = asset('upload/hinhanh/' . $setting->photo);
		return view('templates.index_tpl', compact('sliders', 'com', 'about', 'news', 'keyword', 'description', 'title', 'img_share', 'hotProducts', 'slider', 'partners', 'projects', 'lang', 'about_video', 'feedbacks','about_home','hot_news'));
	}

	public function getAbout() {
		$data = About::select()->where('com', 'gioi-thieu')->first()->toArray();
		$com = 'gioi-thieu';
		$lang = Session::get('locale');
		$setting = Cache::get('setting');

		// Cấu hình SEO
		$title = $data["title_".$lang] ? $data["title_".$lang] : $data["name_".$lang];
		$description = $data["description_".$lang] ? $data["description_".$lang] : $data["name_".$lang];
		$keyword = $data["keyword_".$lang] ? $data["keyword_".$lang] : $data["name_".$lang];
		// $img_share = asset('upload/hinhanh/'.$about->photo);
		return view('templates.about_tpl', compact('data', 'news', 'keyword', 'description', 'title', 'img_share', 'com','lang'));
	}
	public function getGioiThieu($alias)
	{
		$lang = Session::get('locale');
		$data = GioiThieu::where('alias_vi', $alias)->first()->toArray();	
		$com = 'gioi-thieu';
		$title = $data["title_".$lang] ? $data["title_".$lang] : $data["name_".$lang];
		return view('templates.gioithieu',compact('title','com','data','lang'));
	}
	public function partner()
	{
		$lang = Session::get('locale');
		$partners = DB::table('lienket')->where('com','doitac')->where('status',1)->get();
		$customers = DB::table('lienket')->where('com','khachhang')->where('status',1)->get();
		$categories_about = \App\GioiThieu::all()->toArray();
		$com = 'gioithieu';
		if($lang =='vi'){
			$title = 'Đối tác - khách hàng';
		}
		
		return view('templates.doitac', compact('partners','title','lang','categories_about','customers'));
	}
	public function search(Request $request) {
		$search = $request->txtSearch;
		$lang = Session::get('locale');
		// Cấu hình SEO
		$title = "Search: " . $search;
		$description = "Search: " . $search;
		$img_share = '';
		$com = 'search';
		$value = ['tin-tuc', 'du-an','linh-vuc'];
		$data = News::whereIn('com', $value)->where('name_'.$lang, 'LIKE', '%' . $search . '%')->orderBy('id', 'DESC')->get()->toArray();		

		return view('templates.search_tpl', compact('data', 'description', 'title', 'img_share', 'search', 'com','lang'));
	}

	public function getNews() {
		$cateNews = NewsCate::where('com', 'tin-tuc')->where('status',1)->get()->toArray();
		// $news = News::where('com','tin-tuc')->where('status',1)->orderBy('id','desc')->get()->toArray();
		$news = News::where('com', 'tin-tuc')->where('status',1)->orderBy('id','desc')->paginate(8)->toArray();
		// dd($news);
		$data_paginate = News::where('status',1)->where('com','tin-tuc')->orderby('created_at','desc')->paginate(8);
		$hots = News::where('com','tin-tuc')->where('status',1)->where('noibat',1)->take(8)->orderBy('id','desc')->get()->toArray();
		$lang = Session::get('locale');
		$com = 'tin-tuc';
		// Cấu hình SEO
		
		if ($lang == 'vi') {
			$title = "Tin tức";
			$keyword = "Tin tức";
			$description = "Tin tức";
		}
		if ($lang == 'en') {
			$title = "News";
			$keyword = "News";
			$description = "News";
		}
		$img_share = '';
		// End cấu hình SEO
		return view('templates.news_tpl', compact('tintuc', 'news', 'banner_danhmuc', 'lang', 'keyword', 'description', 'title', 'img_share', 'com', 'cateNews', 'news','hots','data_paginate'));
	}
	public function getListNews($alias) {
		$cateNews = NewsCate::where('com', 'tin-tuc')->where('status',1)->get()->toArray();
		$lang = Session::get('locale');
		$data = NewsCate::where('status', 1)->where('alias_vi', $alias)->first()->toArray();
		$cateChilds = NewsCate::where('parent_id',$data["id"])->get();
		$ids = [];
		$ids[] = $data["id"];
		foreach($cateChilds as $child){
			$ids[] = $child->id;
		}
		$news = News::where('com','tin-tuc')->where('status',1)->whereIn('cate_id',$ids)->get()->toArray();
		$title = $data["title_".$lang] ? $data["title_".$lang] : $data["name_".$lang];
		$description = $data["description_".$lang] ? $data["description_".$lang] : $data["name_".$lang];
		$keyword = $data["keyword_".$lang] ? $data["keyword_".$lang] : $data["name_".$lang];
		return view('templates.news_list', compact('lang','data','com','title','description','keyword','cateNews','news'));
	}
	
	public function getNewsDetail($alias) {

		$lang = Session::get('locale');
		$data = News::where('alias_vi', $alias)->first()->toArray();
		$cateNews = NewsCate::where('com', 'tin-tuc')->where('status',1)->get()->toArray();
		$hots = News::where('com','tin-tuc')->where('status',1)->where('noibat',1)->take(8)->orderBy('id','desc')->get()->toArray();
		// $category = NewsCate::where('id', $data["cate_id"])->first()->toArray();
		// $news_same_cate = News::where('status',1)->where('cate_id',$data["cate_id"])->get()->toArray();
		$title = $data["title_".$lang] ? $data["title_".$lang] : $data["name_".$lang];
		$description = $data["description_".$lang] ? $data["description_".$lang] : $data["name_".$lang];
		$keyword = $data["keyword_".$lang] ? $data["keyword_".$lang] : $data["name_".$lang];
		return view('templates.news_detail_tpl', compact('lang','data','title','description','keyword','cateNews','hots'));
	}
	public function getProduct(Request $req)
	{
		$cate_pro = ProductCate::where('status',1)->where('parent_id',0)->orderby('stt','asc')->get();
		$partners = DB::table('partner')->get();
		$products = DB::table('products')->where('status',1)->where('com','san-pham')->paginate(18);
		$com='san-pham';		
		$title = "Sản phẩm";
		$keyword = "Sản phẩm";
		$description = "Sản phẩm";
		// $img_share = asset('upload/hinhanh/'.$banner_danhmuc->photo);
		
		return view('templates.product_tpl', compact('title','keyword','description','products', 'com','cate_pro','partners'));
	}


	public function getProductList($alias, Request $req)
	{		
		$lang = Session::get('locale');
		$cate_pro = ProductCate::where('status',1)->where('parent_id',0)->where('com','san-pham')->orderby('id','asc')->get()->toArray();
        $com = 'san-pham';
        $product_cate = ProductCate::select('*')->where('status', 1)->where('alias_vi', $alias)->where('com','san-pham')->first()->toArray();

        if (!empty($product_cate)) {            
        	// $cate_parent = ProductCate::where('parent_id', $product_cate['parent_id'])->first()->toArray();
        	
        	$cateChilds = ProductCate::where('parent_id', $product_cate['id'])->get()->toArray();
        	
        	$array_cate[] = $product_cate['id'];
        	if($cateChilds){
        		foreach($cateChilds as $cate){
        			$array_cate[] = $cate['id'];
        		}
        	}
        	
        	$products = Products::whereIn('cate_id', $array_cate)->orderBy('id','desc')->paginate(12)->toArray();
        	$data_paginate = Products::whereIn('cate_id', $array_cate)->orderBy('id','desc')->paginate(12);
            
            $title = $product_cate["title_".$lang] ? $product_cate["title_".$lang] : $product_cate["name_".$lang];
			$description = $product_cate["description_".$lang] ? $product_cate["description_".$lang] : $product_cate["name_".$lang];
			$keyword = $product_cate["keyword_".$lang] ? $product_cate["keyword_".$lang] : $product_cate["name_".$lang];
            $img_share = asset('upload/product/' . $product_cate['photo']);

            return view('templates.productlist_tpl', compact('products', 'product_cate', 'keyword', 'description', 'title', 'img_share', 'cate_pro', 'cate_parent', 'com','lang','data_paginate'));
        } else {
            return redirect()->route('getErrorNotFount');
        }
	}
	public function getProductDetail($alias)
	{
		$lang = Session::get('locale');
		$data = Products::where('alias_vi',$alias)->first()->toArray();
		$albums = Images::where('product_id', $data['id'])->get()->toArray();
		$relatedProducts = Products::where('status',1)->where('cate_id',$data["cate_id"])->get()->toArray();
		$com = 'san-pham';
		return view('templates.product_detail_tpl', compact('lang','data','title','description','keyword','com','albums','relatedProducts'));
	}
	public function getContact() {
		$lang = Session::get('locale');
		$title = "Contact";
		$keyword = "Contact";
		$description = "Contact";
		$img_share = '';
		$com = 'lien-he';
		// End cấu hình SEO
		return view('templates.contact_tpl', compact('lang', 'keyword', 'description', 'title', 'com'));
	}

	/**
	 * post contact action
	 * @param  Request $request
	 * @return redirect
	 */
	

	public function postNewsLetter(Request $request) {
		$this->validate($request,
			["txtEmail" => "required"],
			["txtEmail.required" => "Bạn chưa nhập email"]
		);
		$kiemtra_mail = DB::table('newsletter')->select()->where('status', 1)->where('com', 'newsletter')->where('email', $request->txtEmail)->get()->first();
		if (empty($kiemtra_mail)) {
			$data = new NewsLetter();
			$data->name = $request->txtName;
			$data->email = $request->txtEmail;
			$data->phone = $request->txtPhone;
			$data->content = $request->txtContent;
			$data->status = 1;
			$data->com = 'newsletter';
			$data->save();

			echo "<script type='text/javascript'>
				alert('Bạn đã đăng kí nhận tin tức thành công !');
				window.location = '" . url('/') . "' </script>";
		} else {
			echo "<script type='text/javascript'>
				alert('Email này đã đăng ký !');
				window.location = '" . url('/') . "' </script>";
		}
	}
	public function getErrorNotFount() {
		$banner_danhmuc = DB::table('lienket')->select()->where('status', 1)->where('com', 'chuyen-muc')->where('link', 'san-pham')->get()->first();
		return view('templates.404_tpl', compact('banner_danhmuc'));
	}

	public function getDetailAjaxProduct(Request $request) {
		$id = $request->all();
		$data = Products::where('id', $id)->first();
		$data->images = $data->pimg->pluck('photo')->map(function ($item) {
			return asset('upload/hasp/' . $item);
		})->toArray();
		return response()->json($data);
	}
	public function addCart(Request $req)
	{
		$lang = Session::get('locale');
		$data = $req->only('product_id','product_numb');		
		$product = Products::where('status',1)->where('id',$data['product_id'])->first();
		// dd($product->photo);
		if (!$product) {
			die('Product not found');
		}
		if($lang =='vi'){
			Cart::add(
				array(
					'id'=>$product->id,
					'name'=>$product->name_vi,
					'qty'=>$data['product_numb'],
					'price'=>$product->price_vi,
					'options'=>array('photo'=>$product->photo)
				)
			);
		}
		elseif($lang =='en'){
			Cart::add(
				array(
					'id'=>$product->id,
					'name'=>$product->name_en,
					'qty'=>$data['product_numb'],
					'price'=>$product->price_en,
					'options'=>array('photo'=>$product->photo)
				)
			);
		}

		return redirect(route('getCart'));
	}
	public function getCart()
	{
		$lang = Session::get('locale');
		$product_cart= Cart::content()->toArray();
		// dd($product_cart);
		// $bank = DB::table('bank_account')->get();
		$total = $this->getTotalPrice();
		// $province = DB::table('province')->get();
		// $district = DB::table('district')->get();
		$setting = Cache::get('setting');
		// Cấu hình SEO
		$title = "Giỏ hàng";
		$keyword = "Giỏ hàng";
		$description = "Giỏ hàng";
		$img_share = '';
		// End cấu hình SEO
		return view('templates.giohang_tpl', compact('product_cart','keyword','description','title','img_share','total','lang'));
	}

	protected function getTotalPrice() 
    {
    	$cart = Cart::content();
    	$total = 0;
    	foreach ($cart as $key) {
    		$total += $key->price * $key->qty;
    	}
    	return $total;
    }
    public function updateCart(Request $req){
		$data = $req->numb;
		// dd($data);
		if($data>0){
			foreach($data as $key=>$item){
				Cart::update($key, $item);
			}
		}		
		return redirect(route('getCart'));
	}
    public function thanhtoan(){
    	$lang = Session::get('locale');
    	// $bank = DB::table('bank_account')->get();
    	$product_cart= Cart::content()->toArray();
    	// dd($product_cart);
    	$total = $this->getTotalPrice();
		return view('templates.thanhtoan_tpl',compact('bank','product_cart','total','lang'));
	}
	public function deleteCart($id){
        Cart::remove($id);
        return redirect('gio-hang');
    }
}
