<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCateRequest;

use Illuminate\Http\Request;
use App\ProductCate;
use Input, File;
use Validator;

class ProductCateController extends Controller {

	public function getDanhSach()
    {
        if($_GET['type']=='san-pham') $trang='Sản phẩm';
        
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = ProductCate::where('com',$com)->orderBy('id','desc')->get();
        return view('admin.productcate.list', compact('data'));
    }
    public function getAdd()
    {
        if($_GET['type']=='san-pham') $trang='Sản phẩm';
        
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $parent = ProductCate::select('id','name_vi','parent_id')->where('com',$com)->get()->toArray();
        return view('admin.productcate.add', compact('parent'));
    }
    public function postAdd(ProductCateRequest $request)
    {
        $com = $request->txtCom;
        $img = $request->file('fImages');
        $path_img='upload/product';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
    	$cate = new ProductCate;
        $cate->com  = $com;
        $cate->parent_id = $request->txtProductCate;
        $cate->name_vi = $request->name_vi;
        $cate->name_en = $request->name_en;
        $cate->alias_vi = changeTitle($request->name_vi);
        $cate->alias_en = changeTitle($request->name_en);
        $cate->photo = $img_name;
        $cate->mota_vi = $request->mota_vi;
        $cate->mota_en = $request->mota_en;
        $cate->title_vi = $request->title_vi;
        $cate->title_en = $request->title_en;
        $cate->keyword_vi = $request->keyword_vi;
        $cate->keyword_en = $request->keyword_en;
        $cate->description_en = $request->description_en;
        $cate->description_vi = $request->description_vi;
        $cate->stt = $request->stt;
        // if($request->noibat=='on'){
        //     $product_cate->noibat = 1;
        // }else{
        //     $product_cate->noibat = 0;
        // }
        // dd($cate);
        if($request->status=='on'){
            $cate->status = 1;
        }else{
            $cate->status = 0;
        }

        $cate->save();
        return redirect('backend/productcate?type='.$com)->with('status','Thêm mới thành công !');
    }
    public function getEdit(Request $request)
    {
        $id= $request->get('id');
        //Tìm article thông qua mã id tương ứng
        $data = ProductCate::find($id);
        if(!empty($data)){
            if($request->get('hienthi')>0){
                if($data->status == 1){
                    $data->status = 0; 
                }else{
                    $data->status = 1; 
                }
                $data->update();
                return redirect()->back()->with('status','Cập nhật thành công !');
            }
            
            $parent = ProductCate::orderBy('stt', 'asc')->get()->toArray();
           // Gọi view edit.blade.php hiển thị bải viết
            return view('admin.productcate.edit',compact('data','parent','id'));
        }else{
            $data = ProductCate::all();
            return redirect()->route('admin.productcate.index')->with('status','Dữ liệu không có thực');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request,
            ["name_vi" => "required"],
            ["name_vi.required" => "Bạn chưa nhập tên danh mục"]
        );
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $id=$request->get('id');
        $product_cate = ProductCate::find($id);
        if(!empty($product_cate)){
            $img = $request->file('fImages');
            $img_current = 'upload/product/'.$request->img_current;
            if(!empty($img)){
                $path_img='upload/product';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $product_cate->photo = $img_name;
            }
            
            if($request->txtProductCate!= $id && $request->txtProductCate>0){
                $product_cate->parent_id = $request->txtProductCate;
            }else{
                $product_cate->parent_id = 0;
            }
            $product_cate->name_vi = $request->name_vi;
            $product_cate->name_en = $request->name_en;
            $product_cate->alias_vi = changeTitle($request->name_vi);
            $product_cate->alias_en = changeTitle($request->name_en);
            $product_cate->mota_en = $request->mota_en;
            $product_cate->title_vi = $request->title_vi;
            $product_cate->title_en = $request->title_en;
            $product_cate->keyword_vi = $request->keyword_vi;
            $product_cate->keyword_en = $request->keyword_en;
            $product_cate->description_vi = $request->description_vi;
            $product_cate->description_en = $request->description_en;
            $product_cate->stt = $request->stt;
            if($request->noibat=='on'){
                $product_cate->noibat = 1;
            }else{
                $product_cate->noibat = 0;
            }
            if($request->status=='on'){
                $product_cate->status = 1;
            }else{
                $product_cate->status = 0;
            }

            $product_cate->save();

            return redirect('backend/productcate/edit?id='.$id)->with('status','Cập nhật thành công');
        }else{
            return redirect()->back()->with('status','Dữ liệu không có thực');
        }
    }
    public function getDelete($id)
    {
        $product = ProductCate::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('status','Xóa thành công');
    }
    public function getDeleteList($id){
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $product = ProductCate::findOrFail($listid_item);
            $product->delete();
            //File::delete('upload/product/'.$product->photo);
        }
        return redirect()->back()->with('status','Xóa thành công');
    }
}
