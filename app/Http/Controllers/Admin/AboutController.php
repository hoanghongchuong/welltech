<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use App\Images;
use Input, File;
use Validator;
use Auth;
use DB;
class AboutController extends Controller
{
    public function index()
    {  
        if($_GET['type']=='gioi-thieu') $trang='giới thiệu';
        else if($_GET['type']=='tuyen-dung') $trang='tuyển dụng';
        else if($_GET['type']=='chung-chi') $trang='Chứng chỉ kĩ thuật';
        $data = About::all();
        return view('admin.about.index', compact('data','trang'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function getList(Request $request){
        if($_GET['type']=='gioi-thieu') $trang='giới thiệu';
        else if($_GET['type']=='chung-chi') $trang='Chứng chỉ kĩ thuật';
        else $trang = "bài viết";
        // $data = About::get();

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        // dd($com);
        $data = About::select()->where('com',$com)->get();
        // dd($data);
        return view('admin.about.list', compact('data','trang'));
        
    }
    public function getAdd(){
        if($_GET['type']=='gioi-thieu') $trang='giới thiệu';
        else if($_GET['type']=='chung-chi') $trang='Chứng chỉ kĩ thuật';
        else $trang = "bài viết";
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = About::select()->where('com' , $com)->get();
        return view('admin.about.add', compact('data','trang'));
    }
    public function postAdd(Request $request){
        $img = $request->file('fImages');
        $path_img='upload/hinhanh';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
        $com = $request->txtCom;
        $about = new About;
        $about->name = $request->txtName;
        $about->name_en = $request->name_en;
        if($request->txtAlias){
            $about->alias = $request->txtAlias;
        }else{
            $about->alias = changeTitle($request->txtName);
        }
        $about->photo = $img_name;
        $about->mota = $request->txtDesc;
        $about->content = $request->txtContent;
        $about->com= $request->txtCom;
        $about->title = $request->txtTitle;
        $about->title_en = $request->title_en;
        $about->keyword = $request->txtKeyword;
        $about->keyword_en = $request->keyword_en;
        $about->description = $request->txtDescription;
        $about->description_en = $request->description_en;
        $about->save();
        return redirect('backend/about?type='.$com);
    }
    public function getEdit(Request $request)
    {
        $id= $request->get('id');    
        if($_GET['type']=='gioi-thieu') $trang='Giới thiệu';
        else if($_GET['type']=='chung-chi') $trang='Chứng chỉ kĩ thuật';
        else if($_GET['type']=='bang-gia') $trang='Bảng giá';
        else $trang= 'Bài viết';


        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        
        // $data = About::select()->where('com',$com)->where('id',$id)->first();
        $data = DB::table('about')->where('com',$com)->first();
        // dd($data);
        if(empty($data)){ 
            $data = new About;
            $data->com = $com;
            $data->content_vi = $request->content_vi;
            // $data->user_id = Auth::user()->id;

            if($data->save()){
                $data = About::select()->where('com' , $com)->get()->first();
            }
            
        }
        return view('admin.about.edit',compact('data','trang'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        if($_GET['type']=='gioi-thieu') $trang='Giới thiệu';
        
        else $trang= 'Bài viết';

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = About::select()->where('com' , $com)->get()->first();

        if(!empty($data)){
            $img = $request->file('fImages');
            $img_current = 'upload/hinhanh/'.$request->img_current;
            if(!empty($img)){
                $path_img='upload/hinhanh';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $data->photo = $img_name;
                if (File::exists($img_current)) {
                    File::delete($img_current);
                }
            }
            $data->name_vi = $request->name_vi;
            $data->name_en = $request->name_en;
            $data->name_kr = $request->name_kr;
            $data->name_jp = $request->name_jp;
            $data->name_chn = $request->name_chn;
            // $data->alias = $request->txtAlias;
            // $data->alias = changeTitle($request->txtName);
            $data->mota_vi = $request->mota_vi;
            $data->mota_en = $request->mota_en;
            $data->content_vi = $request->content_vi;
            $data->content_en = $request->content_en;
            $data->content_jp = $request->content_jp;
            $data->content_kr = $request->content_kr;
            $data->content_chn = $request->content_chn;
            
            $data->com = $request->txtCom;
            // $data->status = 1;
            if($request->status=='on'){
                $data->status = 1;
            }else{
                $data->status = 0;
            }
            
            // dd($data);    
            $data->save();
            return redirect('backend/about/edit?type='.$com)->with('status','Cập nhật thành công');
        }else{
            return redirect()->back()->with('status','Dữ liệu không có thực');
        }
    }

    public function getDelete($id){
       if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $about = About::findOrFail($id);
        $about->delete();
        File::delete('upload/about/'.$about->photo);
        return redirect('backend/about/edit?type='.$com)->with('status','Xóa thành công');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    
}
