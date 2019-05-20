<?php 
namespace App\Http\Controllers;
use App\Contact;
use App\CV;
use Illuminate\Http\Request as Requests;
use DB,Cache,Mail,Request,File;
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
                $msg->from(Request::input('email'),  'HCCorp');
                $msg->to($setting->email_test, 'Admin')->subject('Hệ thống thông báo');
                // $msg->to(Request::input('email'), Request::input('full_name'))->subject('Đơn đặt hàng');
            });
		$data->save();
		return back()->with(['message' => __('message.post_contact_success')]);

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

}
