<?php 
namespace App\Http\Controllers;
use App\Contact;
use App\CV;
use Cart;
use App\Bill;
use Illuminate\Http\Request as Requests;
use DB,Cache,Mail,Request,File;
use Session;

class ContactController extends Controller {
	protected $setting = NULL;

	public function __construct()
	{
	
	}

	public function getContact()
    {
        // Cấu hình SEO
		$title = "Liên hệ";
		$keyword = "Liên hệ";
		$description = "Liên hệ";
		$img_share = '';
		$com='lien-he';
		$chinhanhx = DB::table('chinhanh')->select()->get();
		$about_lienhe = DB::table('about')->select()->where('com','lien-he')->get()->first();
		$banner_danhmuc = DB::table('lienket')->select()->where('status',1)->where('com','chuyen-muc')->where('link','lien-he')->get()->first();
		// $chinhanh = DB::table('lienket')->select()->where('status',1)->where('com','chi-nhanh')->orderBy('stt','asc')->get();
		// End cấu hình SEO
        return view('templates.contact_tpl', compact('banner_danhmuc','lien-he','chinhanh','about_lienhe','keyword','description','title','img_share','com','chinhanhx'));
    }

    /**
     * post contact action
     * @param  Request $request
     * @return redirect
     */
    public function postContact(Requests $request) {
		$setting = DB::table('setting')->select()->where('id',1)->get()->first();
		$this->validate($request, [
        	"name" => "required",
        	"phone" => "required|max:100|min:1",
        	"email" => "required|email",
        	"address" => "required",
        	"content" => "required",
        ],
        [
        	"name.required" =>  __('message.name'),
        	"phone.required" =>  __('message.phone'),
        	"email.required" =>  __('message.email'),
        	"email.email" => __('message.email_invalid'),
        	"address.required" =>  __('message.address'),
        	"content.required" =>  __('message.content'),
        ]);
		$data = new Contact();
		$data->name = $request->name;
		$data->phone = $request->phone;
		$data->address = $request->adress;
		$data->email = $request->email;
		$data->content = $request->content;
		$value = [
                'full_name' => Request::input('name'),
                'phone' => Request::input('phone'),
                'email' => Request::input('email'),                
                'address' => Request::input('address'),                
                'content' => Request::input('content')
            ];
            Mail::send('templates.sendmail', $value, function ($msg) {
                $setting = Cache::get('setting');
                $msg->from(Request::input('email'),  'WELLTECH');
                $msg->to($setting->email, 'Admin')->subject('Hệ thống thông báo');
                // $msg->to(Request::input('email'), Request::input('full_name'))->subject('Đơn đặt hàng');
            });
		$data->save();
		return back()->with(['message' => __('message.post_contact_success')]);

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
	public function postTuyenDung(Requests $req)
	{
		$setting = DB::table('setting')->select()->where('id',1)->get()->first();
		$file_cv = $req->file('file_cv');
		$path_img='upload/document';
        $file_name='';
        if(!empty($file_cv)){
            $file_name=time().'_'.$file_cv->getClientOriginalName();
            $file_cv->move($path_img,$file_name);
        }
		$data = new CV();
		$data->tuyendung_id = $req->id_job;
		$data->name = $req->full_name;
		$data->phone = $req->phone;
		$data->email = $req->email;
		$data->document = $file_name;
		$value = [
				'tuyendung_id' => Request::input('id_job'),
                'full_name' => Request::input('full_name'),
                'phone' => Request::input('phone'),
                'email' => Request::input('email'),               
                'document' => $file_name
            ];
            Mail::send('templates.sendCV', $value, function ($msg) {
                $setting = Cache::get('setting');
                $msg->from(Request::input('email'),  'HCCorp');
                $msg->to($setting->email_test, 'Admin')->subject('Hệ thống thông báo');
                // $msg->to(Request::input('email'), Request::input('full_name'))->subject('Đơn đặt hàng');
            });
		$data->save();
		return back()->with(['message' => __('message.post_contact_success')]);
	}

    public function postOrder(Requests $req){
        $this->validate($req, [
            "full_name" => "required",
            "phone" => "required|max:100|min:1",
            "email" => "required|email",
            "address" => "required",
            "note" => "required",
        ],
        [
            "full_name.required" =>  __('message.name'),
            "phone.required" =>  __('message.phone'),
            "email.required" =>  __('message.email'),
            "email.email" => __('message.email_invalid'),
            "address.required" =>  __('message.address'),
            "note.required" =>  __('message.content'),
        ]);
        $lang = Session::get('locale');
        $cart = Cart::content();
        $bill = new Bill;
        $bill->full_name = $req->full_name;
        $bill->email = $req->email;
        $bill->phone = $req->phone;
        $bill->note = $req->note;
        $bill->address = $req->address;
        $bill->language = $lang;
        $bill->payment = (int)($req->payment_method);
        // $bill->province = $req->province;
        // $bill->district = $req->district;
        $total = $this->getTotalPrice();
        $bill->total = $total;        
        $detail = [];
        foreach ($cart as $key) {
            $detail[] = [
                'product_name' => $key->name,
                'product_numb' => $key->qty,
                'product_price' => $key->price,
                'product_img' => $key->options->photo,
                'product_code' => $key->options->color
            ];
        }               
        $bill->detail = json_encode($detail);
        if($total > 0){
            try {
                // $data = [
                //     'hoten' => $req->full_name,
                //     'diachi' => $req->address,
                //     'dienthoai' => $req->phone,
                //     'email' => $req->email,
                //     'noidung' => $req->get('note')
                // ];
                $data = $bill->toArray();
                
                // $detail_orders = json_decode($data['detail']);
                
                // return view('templates.guidonhang', compact('data','detail_orders'));
                Mail::send('templates.guidonhang', $data, function ($msg) {
                    $setting = Cache::get('setting');
                    $msg->from(Request::input('email'), 'Welltech.vn');
                    $msg->to($setting->email, 'WELLTECH')->subject('Đơn hàng');
                });
            } catch (Exception $e) {
                echo " khong gui dc email";
            }
            $bill->save();
        }
        else{
            return back()->with(['message' => __('message.post_order_fail')]);
        }       
        Cart::destroy();

        return back()->with(['message' => __('message.post_order_success')]);
    }

}
