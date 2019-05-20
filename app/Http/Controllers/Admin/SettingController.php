<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Images;
use Input, File;
use Validator;
use Auth;
use DB;

class SettingController extends Controller
{
    public function index()
    {
        $data = DB::table('setting')->select()->first();        
        return view('admin.setting.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        // $this->validate($request,
        //     ["txtName" => "required"],
        //     ["txtName.required" => "Bạn chưa nhập tên danh mục"]
        // );
        $setting = DB::table('setting')->select()->first();
        
        $data = Setting::find($setting->id);
        if(!empty($data)){
            $file_cv = $request->file('file_cv');
            
            if(!empty($file_cv)){
                $path_file='upload/document';
                $cv_name=time().'_'.$file_cv->getClientOriginalName();
                $file_cv->move($path_file,$cv_name);
                $data->cv = $cv_name;
            }

            $img = $request->file('fImages');
            if(!empty($img)){
                $path_img='upload/hinhanh';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $data->photo = $img_name;
            }

            $img = $request->file('fImages_logo');
            if(!empty($img)){
                $path_img='upload/hinhanh';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $data->logo = $img_name;
            }
            

            $img2 = $request->file('fImagesFavico');
            if(!empty($img2)){
                $path_img2='upload/hinhanh';
                $img_name2=time().'_'.$img2->getClientOriginalName();
                $img2->move($path_img2,$img_name2);
                $data->favico = $img_name2;
            }
            $data->name_vi = $request->txtName;
            $data->mota_vi = $request->txtDesc;
            $data->slogan_vi = $request->slogan_vi;
            $data->slogan_en = $request->slogan_en;
            $data->slogan_jp = $request->slogan_jp;
            $data->slogan_kr = $request->slogan_kr;
            $data->slogan_chn = $request->slogan_chn;
            $data->company_vi = $request->txtCompany_vi;
            $data->company_en = $request->txtCompany_en;
            $data->company_jp = $request->txtCompany_jp;
            $data->company_kr = $request->txtCompany_kr;
            $data->company_chn = $request->txtCompany_chn;
            $data->address_vi = $request->txtAddress_vi;
            $data->address_en = $request->txtAddress_en;
            $data->address_jp = $request->txtAddress_jp;
            $data->address_chn = $request->txtAddress_chn;
            $data->address_kr= $request->txtAddress_kr;
            $data->phone = $request->txtPhone;
            $data->hotline = $request->txtHotline;
            $data->fax = $request->txtFax;
            $data->website = $request->txtWebsite;
            $data->email = $request->txtEmail;
            $data->email_test = $request->email_test;
            $data->email_hr = $request->email_hr;
            $data->title_index = $request->txtTitle_index;
            $data->copyright = $request->txtCopyright;
            $data->codechat = $request->txtCodechat;
            $data->analytics = $request->txtAnalytics;
            $data->google = $request->txtGoogle;
            $data->zalo = $request->zalo;
            $data->skype = $request->txtSkype;
            $data->twitter = $request->txtTwitter;
            $data->facebook = $request->txtFacebook;
            $data->youtube = $request->txtYoutube;
            $data->toado = $request->txtToado;
            $data->iframemap = $request->txtIframemap;
            $data->title_vi = $request->txtTitle;
            $data->content_vi = $request->txtContent;
            $data->keyword_vi = $request->txtKeyword;
            $data->description_vi = $request->txtDescription;
            // if($request->status=='on'){
            //     $product->status = 1;
            // }else{
            //     $product->status = 0;
            // }
            
            $data->save();

            return redirect('backend/setting')->with('status','Cập nhật thành công');
        }else{
            return redirect('backend')->with('status','Cập nhật dữ liệu lỗi');
        }
    }
}
