<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LienKet;
use Input, File;
use Validator,Auth;

class LienKetController extends Controller
{
    public function getList()
    {  
        if($_GET['type']=='slider') $trang='slider';
        else if($_GET['type']=='doitac') $trang='đối tác';
        else if($_GET['type']=='khachhang') $trang='khách hàng';
        else if($_GET['type']=='chuyen-muc') $trang='banner chuyên mục';
        else if($_GET['type']=='chi-nhanh') $trang='chi nhánh';
        else if($_GET['type']=='tieu-chi') $trang='tiêu chí';
        else if($_GET['type']=='thu-vien') $trang='thư viện ảnh';
        else $trang ='hình ảnh';
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = LienKet::select()->where('com' , $com)->get();
        return view('admin.lienket.list', compact('data','trang'));
    }
    public function getAdd()
    {
        if($_GET['type']=='slider') $trang='slider';
        else if($_GET['type']=='doi-tac') $trang='đối tác';
        else if($_GET['type']=='cam-nhan') $trang='cảm nhận khách hàng';
        else if($_GET['type']=='chuyen-muc') $trang='banner chuyên mục';
        else if($_GET['type']=='chi-nhanh') $trang='chi nhánh';
        else if($_GET['type']=='tieu-chi') $trang='tiêu chí';
        else if($_GET['type']=='thu-vien') $trang='Thư viện ảnh';
        else $trang ='hình ảnh';

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        // dd($com);
        $data = LienKet::select()->where('com' , $com)->get();
        return view('admin.lienket.add', compact('data','trang'));
    }
    public function postAdd(Request $request)
    {
        // $this->validate($request,
        //     ["txtName" => "required"],
        //     ["txtName.required" => "Bạn chưa nhập tên slider"]
        // );
        $com= $request->txtCom;
        // dd($com);
        $img = $request->file('fImages');
        $path_img='upload/hinhanh';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }

        $news = new LienKet;
        
        $news->name = $request->txtName;
        $news->name_en = $request->name_en;
        $news->content_en = $request->content_en;
        $news->content = $request->txtContent;
        $news->mota = $request->txtDesc;
        $news->link = $request->txtLink;
        
        $news->photo = $img_name;

        $news->com = $com;
        $news->stt = intval($request->stt);
        if($request->status=='on'){
            $news->status = 1;
        }else{
            $news->status = 0;
        }
        if($request->status_en=='on'){
            $news->status_en = 1;
        }else{
            $news->status_en = 0;
        }
        // $news->user_id = Auth::user()->id;
        $news->save();
        return redirect('backend/lienket?type='.$com)->with('status','Thêm mới thành công !');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEdit(Request $request)
    {
        if($_GET['type']=='slider') $trang='slider';
        else if($_GET['type']=='doitac') $trang='đối tác';
        else if($_GET['type']=='khachhang') $trang='khách hàng';
        else if($_GET['type']=='chuyen-muc') $trang='banner chuyên mục';
        else if($_GET['type']=='chi-nhanh') $trang='chi nhánh';
        else if($_GET['type']=='tieu-chi') $trang='tiêu chí';
        else if($_GET['type']=='thu-vien') $trang='thư viện';
        else $trang ='hình ảnh';

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $id= $request->get('id');
        //Tìm article thông qua mã id tương ứng
        $data = LienKet::find($id);
        if(!empty($data)){
            if($request->get('hienthi')>0){
                if($data->status == 1){
                    $data->status = 0; 
                }else{
                    $data->status = 1; 
                }
                $data->update();
                return redirect('backend/lienket?type='.$com)->with('status','Cập nhật thành công !');
            }
            if($request->get('noibat')>0){
                if($data->noibat == 1){
                    $data->noibat = 0; 
                }else{
                    $data->noibat = 1; 
                }
                $data->update();
                return redirect('backend/lienket?type='.$com)->with('status','Cập nhật thành công !');
            }
            $news = LienKet::select('stt')->orderBy('id','asc')->get()->toArray();
            // Gọi view edit.blade.php hiển thị bải viết
            return view('admin.lienket.edit',compact('data','news','id','trang'));
        }else{
            return redirect('backend/lienket?type='.$com)->with('status','Dữ liệu không có thực !');
        }
        
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
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $id= $request->get('id');
        $news = LienKet::findOrFail($id);
        //$news = LienKet::select()->where('id' , $id)->where('com' , $com)->get();
        if(!empty($news)){
            

            $img = $request->file('fImages');
            $img_current = 'upload/hinhanh/'.$request->img_current;
            if(!empty($img)){
                $path_img='upload/hinhanh';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $news->photo = $img_name;
                if (File::exists($img_current)) {
                    File::delete($img_current);
                }
            }
            $news->stt = intval($request->stt);
            $news->name = $request->txtName;
            $news->name_en = $request->name_en;
            $news->content_en = $request->content_en;
            $news->link = $request->txtLink;
            $news->mota = $request->txtDesc;
            $news->content = $request->txtContent;
            $news->com = $request->txtCom;
            if($request->status=='on'){
                $news->status = 1;
            }else{
                $news->status = 0;
            }
            if($request->status_en=='on'){
                $news->status_en = 1;
            }else{
                $news->status_en = 0;
            }
            // $news->user_id       = Auth::user()->id;

            $news->save();
            return redirect('backend/lienket?type='.$com)->with('status','Cập nhật thành công');
        }else{
            return redirect()->back()->with('status','Dữ liệu không có thực');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete($id)
    {
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $news = LienKet::findOrFail($id);
        $news->delete();
        File::delete('upload/hinhanh/'.$news->photo);
        return redirect('backend/lienket?type='.$com)->with('status','Xóa thành công');
    }
    public function getDeleteList($id){
        if($_GET['type']=='slider') $trang='slider';
        else if($_GET['type']=='doi-tac') $trang='đối tác';
        else if($_GET['type']=='cam-nhan') $trang='cảm nhận khách hàng';
        else if($_GET['type']=='chuyen-muc') $trang='banner chuyên mục';
        else if($_GET['type']=='chi-nhanh') $trang='chi nhánh';
        else if($_GET['type']=='tieu-chi') $trang='tiêu chí';
        else $trang ='hình ảnh';

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $news = LienKet::findOrFail($listid_item);
            $news->delete();
            File::delete('upload/hinhanh/'.$news->photo);
        }
        return redirect('backend/lienket?type='.$com)->with('status','Xóa thành công');
    }
    
}
