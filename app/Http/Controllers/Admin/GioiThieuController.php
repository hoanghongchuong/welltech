<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\GioithieuRequest;
use App\Http\Controllers\Controller;
use App\GioiThieu;
use File;
class GioiThieuController extends Controller
{
    public function index(){
    	$data = GioiThieu::all();
    	return view('admin.gioithieu.list', compact('data'));
    }
    public function getAdd(){

    	return view('admin.gioithieu.add');
    }
    public function postAdd(Request $request){

        $img = $request->file('fImages');
        $path_img='upload/banner';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
    	$data = new GioiThieu;
    	$data->name_vi = $request->name_vi;
        $data->name_en = $request->name_en;
        $data->name_jp = $request->name_jp;
        $data->name_kr = $request->name_kr;
        $data->name_chn = $request->name_chn;

        $data->alias_vi = $request->alias_vi ? $request->alias_vi : changeTitle($request->name_vi);

        $data->alias_en = $request->alias_en ? $request->alias_en : changeTitle($request->name_en);
       
        $data->alias_jp = $request->alias_jp ? $request->alias_jp : changeTitle($request->name_jp);
        $data->alias_kr = $request->alias_kr ? $request->alias_kr : changeTitle($request->name_kr);
        $data->alias_chn = $request->alias_chn ? $request->alias_chn : changeTitle($request->name_chn);
    	 // if($request->txtAlias){
      //       $data->alias = $request->txtAlias;
      //   }else{
      //       $data->alias = changeTitle($request->txtName);
      //   }
        $data->image = $img_name; 
        $data->content_vi = $request->content_vi;
        $data->content_en = $request->content_en;
        $data->content_jp = $request->content_jp;
        $data->content_kr = $request->content_kr;
        $data->content_chn = $request->content_chn;
        $data->title_vi = $request->title_vi;
        $data->title_en = $request->title_en;
        $data->title_jp = $request->title_jp;
        $data->title_kr = $request->title_kr;
        $data->title_chn = $request->title_chn;
        $data->keyword_vi = $request->keyword_vi;
        $data->keyword_en = $request->keyword_en;
        $data->keyword_jp = $request->keyword_jp;
        $data->keyword_kr = $request->keyword_kr;
        $data->keyword_chn = $request->keyword_chn;
        $data->description_vi = $request->description_vi;
        $data->description_en = $request->description_en;
        $data->description_jp = $request->description_jp;
        $data->description_kr = $request->description_kr;
        $data->description_chn = $request->description_chn;
        if($request->status=='on'){
            $data->status = 1;
        }else{
            $data->status = 0;
        }
        // dd($data);
        $data->save();
    	return redirect()->route('admin.gioithieu.index')->with('status','Thêm thành công');
    }
    public function getEdit($id){
    	$data = GioiThieu::find($id);
    	return view('admin.gioithieu.edit',compact('data'));
    }
    public function postEdit(Request $request, $id){
    	$data = GioiThieu::where('id',$id)->first();
        $img = $request->file('fImages');
        $img_current = 'upload/banner/'.$request->img_current;
        if(!empty($img)){
            $path_img='upload/banner';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $data->image = $img_name;
            if (File::exists($img_current)) {
                File::delete($img_current);
            }
        }
        $data->name_vi = $request->name_vi;
        $data->name_en = $request->name_en;
        $data->name_jp = $request->name_jp;
        $data->name_kr = $request->name_kr;
        $data->name_chn = $request->name_chn;
        $data->alias_vi = $request->alias_vi ? $request->alias_vi : changeTitle($request->name_vi);
        $data->alias_en = $request->alias_en ? $request->alias_en : changeTitle($request->name_en);
        $data->alias_jp = $request->alias_jp ? $request->alias_jp : changeTitle($request->name_jp);
        $data->alias_kr = $request->alias_kr ? $request->alias_kr : changeTitle($request->name_kr);
        $data->alias_kr = $request->alias_kr ? $request->alias_kr : changeTitle($request->name_kr);
        $data->content_vi = $request->content_vi;
        $data->content_en = $request->content_en;
        $data->content_jp = $request->content_jp;
        $data->content_kr = $request->content_kr;
        $data->content_chn = $request->content_chn;
        $data->title_vi = $request->title_vi;
        $data->title_en = $request->title_en;
        $data->title_jp = $request->title_jp;
        $data->title_kr = $request->title_kr;
        $data->title_chn = $request->title_chn;
        $data->keyword_vi = $request->keyword_vi;
        $data->keyword_en = $request->keyword_en;
        $data->keyword_jp = $request->keyword_jp;
        $data->keyword_kr = $request->keyword_kr;
        $data->keyword_chn = $request->keyword_chn;
        $data->description_vi = $request->description_vi;
        $data->description_en = $request->description_en;
        $data->description_jp = $request->description_jp;
        $data->description_kr = $request->description_kr;
        $data->description_chn = $request->description_chn;
        if($request->status=='on'){
            $data->status = 1;
        }else{
            $data->status = 0;
        }
        $data->save();
    	return redirect()->route('admin.gioithieu.index')->with('status','Cập nhật thành công');
    }
    public function delete($id){
    	$data = GioiThieu::find($id);
    	$data->delete();
    	return redirect()->back()->with('status','Xoá thành công');
    }
}
