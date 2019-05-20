<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use File;
class FeedbackController extends Controller
{
    public function index(){
    	$data = Feedback::all();
    	return view('admin.feedback.index', compact('data'));
    }
    public function getCreate(){

    	return view('admin.feedback.create');
    }
    public function postCreate(Request $request){
    	// $img = $request->file('fImages');
     //    $path_img='upload/hinhanh';
     //    $img_name='';
     //    if(!empty($img)){
     //        $img_name=time().'_'.$img->getClientOriginalName();
     //        $img->move($path_img,$img_name);
     //    }
        $data = new Feedback;
        $data->name_vi = $request->name_vi;
        $data->name_en = $request->name_en;
        // $data->photo = $img_name; 
        // $data->position = $request->position;
        $data->content_vi = $request->content_vi;
        $data->content_en = $request->content_en;
        $data->save();
        return redirect()->route('admin.feedback.index')->with('status','Thêm thành công');
    }
    public  function getEdit($id){
        $data = Feedback::where('id', $id)->first();
    	return view('admin.feedback.edit', compact('data'));
    }
    public function postEdit(Request $request, $id){
        $data = Feedback::find($id);
        // $img = $request->file('fImages');
        // $img_current = 'upload/hinhanh/'.$request->img_current;
        // if(!empty($img)){
        //     $path_img='upload/hinhanh';
        //     $img_name=time().'_'.$img->getClientOriginalName();
        //     $img->move($path_img,$img_name);
        //     $data->photo = $img_name;
        //     if (File::exists($img_current)) {
        //         File::delete($img_current);
        //     }
        // }
        $data->name_vi = $request->name_vi;
        $data->name_en = $request->name_en;
        // $data->photo = $img_name; 
        // $data->position = $request->position;
        $data->content_vi = $request->content_vi;
        $data->content_en = $request->content_en;
        $data->save();
        return redirect()->route('admin.feedback.index')->with('status','Thành công');

    }
    public function delete($id){
    	$data = Feedback::find($id);
    	$data->delete();
    	return redirect()->back()->with('status','Xóa thành công');
    }
}
