<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruitment;
class RecruitmentController extends Controller
{
    
    public function __construct(Recruitment $recruitment)
    {
        $this->Recruitment = $recruitment;
    }
    public function index(){
    	$data = $this->Recruitment->get();
    	$trang = "tuyển dụng";
    	return view('admin.recruitment.index', compact('data','trang'));
    }

    public function create(Request $req)
    {
        
        return view('admin.recruitment.create');
    }
    public function postCreate(Request $req)
    {
        $data = $req->only($this->Recruitment->getFillable());
        $img = $req->file('fImages');
        $path_img='upload/news';
       
        if(!empty($img)){
            $data['photo']=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$data['photo']);
            $data['photo'] = $data['photo'];
        }
        
               
        $this->Recruitment->create($data);
        return redirect()->route('tuyendung.index')->with('status','Thêm thành công');
    }

    public function edit($id)
    {
        $data = $this->Recruitment->findOrFail($id);        
        return view('admin.recruitment.edit', compact('data'));
    }

    public function postEdit(Request $req, $id)
    {
        $result = $this->Recruitment->findOrFail($id);

        $data = $req->only($this->Recruitment->getFillable());
        if ($req->hasFile('fImages')){
            $path_img='upload/news';
            $image = $req->file('fImages');
            $data['photo']=time().'_'.$image->getClientOriginalName();
            $image->move($path_img,$data['photo']);
            $data['photo'] = $data['photo'];
        }else{
            unset($data['photo']);
        }

        $this->Recruitment->updateOrCreate(['id' => $result->id], $data);
        return redirect()->back()->with('status','Sửa thành công');
    }

    public function deleteRecruitment($id){
    	$re = Recruitment::find($id);
    	$re->delete();
    	return redirect()->back()->with('mess','Xoá thành công');
    }
    public function accessRe(Request $req){
    	$recruitment = Recruitment::where('id', $req->recruitment_id)->update(['status' => 1]);
    }
}
