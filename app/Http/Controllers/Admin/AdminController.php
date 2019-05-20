<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Authorization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
	public function __construct(Admin $admin, Authorization $authorization)
	{
		$this->Admin = $admin;
        $this->Authorization = $authorization;
	}
	/**
	 * [index description]
	 * @return [View] [description]
	 */
    public function index()
    {
    	$admins = $this->Admin->getList();
    	return view('admin.admin.index', compact('admins'))	;
    }
    /**
     * [create description]
     * @return [view] [description]
     */
    public function create(Request $req, $id = null)
    {   
        $authSelector = $this->Authorization->selector;

        if($req->isMethod('GET')){
            if($id){
                $admin = $this->Admin->findOrFail($id);
            }            
            return view('admin.admin.create', compact('admin','authSelector'));
        } 	
        $this->validate($req,
            [
                'name' => 'required',
                'username' => 'required|unique:admins,username' . ($id ? ',' . $id : ''),                
                'password' => ($id ? 'nullable' : 'required').'|min:6', 
                'avatar'        => 'nullable|image|max:2048',               
            ],
            [
                'name.required' => 'chưa nhập họ tên',
                'username.required' => 'chưa nhập tên đăng nhập',
                'username.unique' => 'Tên đăng nhập đã tồn tại',
                'password.required' => 'chưa nhập mật khẩu',
                'avatar.max'        => 'Dung lượng ảnh không vượt quá 2MB',
                'password.min' => 'Mật khẩu phải có độ dài từ 6 ký tự'
            ]
        );
        $data = $req->only($this->Admin->getFieldList());        
        if($req->password){            
            $data['password'] = \Hash::make($data['password']);
        }else{
            unset($data['password']);
        }
        if ($req->hasFile('avatar')) {
            $image          = $req->file('avatar');
            $data['avatar'] = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admins'), $data['avatar']);
            $data['avatar'] = 'public/uploads/admins/' . $data['avatar'];
        }
    	$data['active']  = isset($data['active']) ? true :false;

        try {
            DB::beginTransaction();
            if($id){
                $this->Admin->updateOrCreate(['id' => $id], $data);
            }else {
                $data['created_at'] = date('Y-m-d H:i:s');
                $data['updated_at'] = date('Y-m-d H:i:s');
                $id = $this->Admin->insertGetId($data);
            }
            $authData['admin_id'] = $id;
            foreach ($req->authorization as $field) {
                $authData[$field] = 1;
            }
            foreach ($authSelector as $field => $text) {
                if (!isset($authData[$field])) {
                    $authData[$field] = 0;
                }
            }
            $this->Authorization->updateOrCreate(['admin_id' => $id], $authData);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with('message', 'Lỗi hệ thống');
        }
        $this->Admin->updateOrCreate(['id' => $id], $data);

        return redirect()->route('admin.admin.index')->with('message','Thêm thành công');
    }

    
    /**
     * [delete description]
     * @param  [int] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
    	$data = $this->Admin->findOrFail($id);
    	$data->delete();
    	return back()->with('message','Xóa thành công');
    }
}
