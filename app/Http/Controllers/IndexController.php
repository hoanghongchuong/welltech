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
use App\GioiThieu;
use Cache;
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
		$biendich = DB::table('langs')->orderBy('stt', 'asc')->get();
		Cache::forever('setting', $setting);

		Cache::forever('dichvu', $dichvu);

		Cache::forever('about', $about);
		
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
		$tuyendung = Recruitment::orderBy('id','desc')->take(4)->get()->toArray();
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
		return view('templates.index_tpl', compact('sliders', 'com', 'about', 'news', 'keyword', 'description', 'title', 'img_share', 'tuyendung', 'slider', 'partners', 'projects', 'lang', 'about_video', 'feedbacks','about_home','hot_news'));
	}

	public function getAbout() {
		$about = DB::table('about')->select()->where('com', 'gioi-thieu')->first();
		$members = DB::table('members')->orderBy('id', 'desc')->get();
		$com = 'gioi-thieu';
		$lang = Session::get('locale');
		$setting = Cache::get('setting');

		// Cấu hình SEO
		if ($lang == 'vi') {
			if (!empty($about->title)) {
				$title = $about->title;
			} else {
				$title = $about->name;
			}
			$keyword = $about->keyword;
			$description = $about->description;
		}
		if ($lang == 'en') {
			if (!empty($about->title_en)) {
				$title = $about->title_en;
			} else {
				$title = $about->name_en;
			}
			$keyword_en = $about->keyword_en;
			$description_en = $about->description_en;
		}
		// $img_share = asset('upload/hinhanh/'.$about->photo);
		//Cấu hình SEO
		if (!empty($about->title)) {
			$title = $about->title;
		} else {
			$title = $about->name;
		}
		$keyword = $about->keyword;
		$description = $about->description;
		// End cấu hình SEO

		return view('templates.about_tpl', compact('about', 'news', 'slider_about', 'members', 'keyword', 'description', 'title', 'img_share', 'com'));
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
	
	public function gallery() {

		// $data = DB::table('lienket')->where('com', 'thu-vien')->paginate(30);
		$data = DB::table('news')->where('com', 'thu-vien')->first();
		$album_images = DB::table('images')->where('service_id', $data->id)->paginate(20);
		
		$com = 'gallery';
		// Cấu hình SEO
		$title = "Gallery";
		$keyword = "Gallery";
		$description = "Gallery";
		$img_share = '';
		// End cấu hình SEO
		return view('templates.thuvienanh_tpl', compact('data', 'com', 'keyword', 'description', 'title', 'img_share','album_images'));
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
	public function getProject() {	
		$cateNews = NewsCate::where('com', 'du-an')->where('status',1)->where('parent_id',0)->get()->toArray();	
		$news = News::where('com','du-an')->where('status',1)->get()->toArray();
		$lang = Session::get('locale');
		$com = 'du-an';
		// Cấu hình SEO		
		if ($lang == 'vi') {
			$title = "Dự án";
			$keyword = "Dự án";
			$description = "Dự án";
		}
		if ($lang == 'en') {
			$title = "Project";
			$keyword = "Project";
			$description = "Project";
		}
		$img_share = '';
		// End cấu hình SEO
		return view('templates.project', compact('news', 'banner_danhmuc', 'lang', 'keyword', 'description', 'title', 'img_share', 'com', 'news','cateNews'));
	}

	public function getListProject($alias)
	{
		$lang = Session::get('locale');
		$data = NewsCate::where('status', 1)->where('com','du-an')->where('alias_vi', $alias)->first()->toArray();
		$cateChilds = NewsCate::where('parent_id',$data["id"])->get();
		$ids = [];
		$ids[] = $data["id"];
		foreach($cateChilds as $child){
			$ids[] = $child->id;
		}
		$news = News::where('com','du-an')->where('status',1)->whereIn('cate_id',$ids)->get()->toArray();
		$title = $data["title_".$lang] ? $data["title_".$lang] : $data["name_".$lang];
		$description = $data["description_".$lang] ? $data["description_".$lang] : $data["name_".$lang];
		$keyword = $data["keyword_".$lang] ? $data["keyword_".$lang] : $data["name_".$lang];
		return view('templates.project_list', compact('lang','data','com','title','description','keyword','cateNews','news'));
	}
	public function getProjectDetail($alias)
	{
		$lang = Session::get('locale');
		$data = News::where('alias_vi', $alias)->where('com','du-an')->first()->toArray();
		$cateNews = NewsCate::where('com', 'du-an')->where('status',1)->where('parent_id',0)->get()->toArray();
		$category = NewsCate::where('id', $data["cate_id"])->first()->toArray();
		$news_same_cate = News::where('status',1)->where('cate_id',$data["cate_id"])->get()->toArray();
		$title = $data["title_".$lang] ? $data["title_".$lang] : $data["name_".$lang];
		$description = $data["description_".$lang] ? $data["description_".$lang] : $data["name_".$lang];
		$keyword = $data["keyword_".$lang] ? $data["keyword_".$lang] : $data["name_".$lang];
		return view('templates.project_detail', compact('lang','data','category','title','description','keyword','cateNews','news_same_cate'));		
	}

	public function getLinhVuc()
	{
		$lang = Session::get('locale');
		$categories = NewsCate::where('com','linh-vuc')->where('status',1)->where('parent_id', 0)->get()->toArray();
		$data = News::where('com', 'linh-vuc')->where('status',1)->orderBy('id','desc')->paginate(15)->toArray();
		// dd($data);
		$data_paginate = News::select('id')->where('status',1)->where('com','linh-vuc')->orderby('created_at','desc')->paginate(15);
		if($lang == 'vi'){
			$title = 'Lĩnh vực kinh doanh';
		}
		return view('templates.linhvuc', compact('categories','lang','com','title','data','data_paginate'));
	}
	public function listLinhVuc($alias)
	{
		$lang = Session::get('locale');
		$cate = NewsCate::where('com','linh-vuc')->where('status',1)->where('alias_vi', $alias)->first()->toArray();
		$categories = NewsCate::where('com','linh-vuc')->where('status',1)->where('parent_id', 0)->get()->toArray();
		$ids = [];
		$ids[] = $cate['id'];
		$cateChilds = NewsCate::where('parent_id',$cate['id'])->where('status',1)->get();
		foreach($cateChilds as $child){
			$ids[] = $child->id;
		}
		$data = News::where('com', 'linh-vuc')->where('status',1)->whereIn('cate_id',$ids)->orderBy('id','desc')->get()->toArray();

		$com = 'linh-vuc';
		$title = $cate['title_'.$lang] ? $cate['title_'.$lang] : $cate['name_'.$lang];
		$description = $cate['description_'.$lang] ? $cate['description_'.$lang] : $cate['name_'.$lang];
		$keyword = $cate['keyword_'.$lang] ? $cate['keyword_'.$lang] : $cate['name_'.$lang];
		return view('templates.list_linhvuc', compact('data','title','description','keyword','cate','lang','categories'));
	}
	public function detaiLinhVuc($alias)
	{
		$lang = Session::get('locale');
		$data = News::where('status',1)->where('com','linh-vuc')->where('alias_vi',$alias)->first()->toArray();
		$categories = NewsCate::where('com','linh-vuc')->where('status',1)->where('parent_id', 0)->get()->toArray();
		$cate = NewsCate::where('id',$data['cate_id'])->first()->toArray();
		$postSam = News::where('status',1)->where('com','linh-vuc')->where('cate_id',$data['cate_id'])->get();
		$title = $data['title_'.$lang] ? $data['title_'.$lang] : $data['name_'.$lang];
		$description = $data['description_'.$lang] ? $data['description_'.$lang] : $data['name_'.$lang];
		$keyword = $data['keyword_'.$lang] ? $data['keyword_'.$lang] : $data['name_'.$lang];
		return view('templates.detail_linhvuc', compact('title','description','keyword', 'data','cate','categories','lang','postSam'));
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

	public function getTuyenDung() {
		$com = 'tuyen-dung';
		$lang = Session::get('locale');
		$data = Recruitment::orderBy('id','desc')->get()->toArray();
		if ($lang == 'vi') {			
			$title = 'Tuyển dụng';
		}else{
			$title = 'Recruitment';
		}
		return view('templates.tuyendung_tpl', compact('com', 'data', 'title','lang'));
	}
	
	public function video() {
		$videos = DB::table('video')->orderBy('id', 'desc')->paginate(10);
		$title = "Video";
		$keyword = "Video";
		$description = "Video";
		$com = 'gallery';
		return view('templates.video', compact('videos', 'title', 'keyword', 'description', 'com'));
	}

	public function getDetailAjaxProduct(Request $request) {
		$id = $request->all();
		$data = Products::where('id', $id)->first();
		$data->images = $data->pimg->pluck('photo')->map(function ($item) {
			return asset('upload/hasp/' . $item);
		})->toArray();
		return response()->json($data);
	}

}
