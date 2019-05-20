<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCateRequest;
use App\NewsCate;
use File;
use Illuminate\Http\Request;

class NewsCateController extends Controller {

	public function getDanhSach() {
		if ($_GET['type'] == 'tin-tuc') {
			$trang = 'tin tức';
		} else if ($_GET['type'] == 'dich-vu') {
			$trang = 'du-an';
		} else if ($_GET['type'] == 'bai-viet') {
			$trang = 'dự án';
		} else {
			$trang = "bài viết";
		}

		$data = NewsCate::orderBy('id', 'desc')->get();
		if (!empty($_GET['type'])) {
			$com = $_GET['type'];
		} else {
			$com = '';
		}
		$data = NewsCate::select()->where('com', $com)->orderBy('id', 'asc')->get();

		return view('admin.newscate.list', compact('data', 'trang'));
	}
	public function getAdd() {
		if ($_GET['type'] == 'tin-tuc') {
			$trang = 'tin tức';
		} else if ($_GET['type'] == 'du-an') {
			$trang = 'dự án';
		} else if ($_GET['type'] == 'bai-viet') {
			$trang = 'bài viết';
		} else {
			$trang = "bài viết";
		}

		if (!empty($_GET['type'])) {
			$com = $_GET['type'];
		} else {
			$com = '';
		}
		$parent = NewsCate::select('id','name_vi','name_en','name_jp','name_kr','name_chn','parent_id')->where('com', $com)->get()->toArray();
		return view('admin.newscate.add', compact('parent', 'trang'));
	}
	public function postAdd(NewsCateRequest $request) {
		$com = $request->txtCom;
		$cate = new NewsCate;
		$cate->com = $com;
		$img = $request->file('fImages');
		$path_img = 'upload/news';
		$img_name = '';
		if (!empty($img)) {
			$img_name = time() . '_' . $img->getClientOriginalName();
			$img->move($path_img, $img_name);
		}

		$img2 = $request->file('fImagesBg');
		$path_img2 = 'upload/news';
		$img_name2 = '';
		if (!empty($img2)) {
			$img_name2 = $img2->getClientOriginalName();
			$img2->move($path_img2, $img_name2);
		}

		$cate->photo = $img_name;
		$cate->background = $img_name2;
		$cate->parent_id = $request->txtNewsCate;

		$cate->name_vi = $request->txtName;
        $cate->name_en = $request->name_en;
        $cate->name_jp = $request->name_jp;
        $cate->name_kr = $request->name_kr;
        $cate->name_chn = $request->name_chn;

		$cate->alias_vi = $request->txtAlias ? $request->txtAlias : changeTitle($request->txtName);
        $cate->alias_en = $request->txtAlias_en ? $request->txtAlias_en : changeTitle($request->name_en);
        $cate->alias_jp = $request->txtAlias_jp ? $request->txtAlias_jp : changeTitle($request->name_jp);
        $cate->alias_kr = $request->txtAlias_kr ? $request->txtAlias_kr : changeTitle($request->name_kr);
        $cate->alias_chn = $request->txtAlias_chn ? $request->txtAlias_chn : changeTitle($request->name_chn);
        
		$cate->mota_vi = $request->mota_vi;
        $cate->mota_en = $request->mota_en;
        $cate->mota_jp = $request->mota_jp;
        $cate->mota_kr = $request->mota_kr;
        $cate->mota_chn = $request->mota_chn;

		$cate->title_vi = $request->txtTitle;
		$cate->title_en = $request->title_en;
		$cate->title_jp = $request->title_jp;
		$cate->title_kr = $request->title_kr;
		$cate->title_chn = $request->title_chn;

		$cate->keyword_vi = $request->txtKeyword;
		$cate->keyword_en = $request->keyword_en;
		$cate->keyword_jp = $request->keyword_jp;
		$cate->keyword_kr = $request->keyword_kr;
		$cate->keyword_chn = $request->keyword_chn;
		
		$cate->description_vi = $request->txtDescription;
		$cate->description_en = $request->description_en;
		$cate->description_jp = $request->description_jp;
		$cate->description_kr = $request->description_kr;
		$cate->description_chn = $request->description_chn;
		
		$cate->stt = intval($request->stt);
		

		if ($request->status == 'on') {
			$cate->status = 1;
		} else {
			$cate->status = 0;
		}
		if ($request->status_en == 'on') {
			$cate->status_en = 1;
		} else {
			$cate->status_en = 0;
		}
		// dd($cate);
		$cate->save();
		return redirect('backend/newscate?type=' . $com)->with('status', 'Thêm mới thành công !');
	}
	public function getEdit(Request $request) {
		if ($_GET['type'] == 'tin-tuc') {
			$trang = 'tin tức';
		} else if ($_GET['type'] == 'du-an') {
			$trang = 'dự án';
		} else if ($_GET['type'] == 'bai-viet') {
			$trang = 'bài viết';
		} else {
			$trang = "bài viết";
		}

		if (!empty($_GET['type'])) {
			$com = $_GET['type'];
		} else {
			$com = '';
		}
		$id = $request->get('id');
		//Tìm article thông qua mã id tương ứng
		$data = NewsCate::find($id);
		if (!empty($data)) {
			if ($request->get('hienthi') > 0) {
				if ($data->status == 1) {
					$data->status = 0;
				} else {
					$data->status = 1;
				}
				$data->update();
				return redirect('admin/newscate?type=' . $com)->with('status', 'Cập nhật thành công !');
			}
			if ($request->get('delete_bg') > 0) {
				$background = 'upload/news/' . $request->get('delete_bg');
				File::delete($background);
				$data->background = '';
				$data->update();
				return redirect('backend/news?edit&id=' . $id . '&type=' . $com)->with('status', 'Xóa backgound thành công !');
			}
			$parent = NewsCate::orderBy('stt', 'asc')->where('com', $com)->get()->toArray();
			// Gọi view edit.blade.php hiển thị bải viết
			return view('admin.newscate.edit', compact('data', 'parent', 'id', 'trang'));
		} else {
			$data = NewsCate::all();
			//return redirect()->route('admin.newscate.index')->with('status','Dữ liệu không có thực');
			return redirect('backend/newscate?type=' . $com)->with('status', 'Dữ liệu không có thực !');
		}
	}

	public function update(Request $request) {
		$this->validate($request,
			["txtName" => "required"],
			["txtName.required" => "Bạn chưa nhập tên danh mục"]
		);
		if (!empty($_GET['type'])) {
			$com = $_GET['type'];
		} else {
			$com = '';
		}
		$id = $request->get('id');
		$news_cate = NewsCate::find($id);
		if (!empty($news_cate)) {
			$img = $request->file('fImages');
			$img_current = 'upload/news/' . $request->img_current;
			if (!empty($img)) {
				$path_img = 'upload/news';
				$img_name = time() . '_' . $img->getClientOriginalName();
				$img->move($path_img, $img_name);
				$news_cate->photo = $img_name;
				if (File::exists($img_current)) {
					File::delete($img_current);
				}
			}

			$img2 = $request->file('fImagesBg');
			$img_current2 = 'upload/news/' . $request->img_current2;
			if (!empty($img2)) {
				$path_img2 = 'upload/news';
				$img_name2 = time() . '_' . $img2->getClientOriginalName();
				$img2->move($path_img2, $img_name2);
				$news_cate->background = $img_name2;
				if (File::exists($img_current2)) {
					File::delete($img_current2);
				}
			}

			if ($request->txtNewsCate != $id && $request->txtNewsCate > 0) {
				$news_cate->parent_id = $request->txtNewsCate;
			} else {
				$news_cate->parent_id = 0;
			}
			$news_cate->name_vi = $request->txtName;
			$news_cate->name_en = $request->name_en;
			$news_cate->name_jp = $request->name_jp;
			$news_cate->name_kr = $request->name_kr;
			$news_cate->name_chn = $request->name_chn;

			$news_cate->alias_vi = $request->txtAlias ? $request->txtAlias : changeTitle($request->txtName);
	        $news_cate->alias_en = $request->txtAlias_en ? $request->txtAlias_en : changeTitle($request->name_en);
	        $news_cate->alias_jp = $request->txtAlias_jp ? $request->txtAlias_jp : changeTitle($request->name_jp);
	        $news_cate->alias_kr = $request->txtAlias_kr ? $request->txtAlias_kr : changeTitle($request->name_kr);
	        $news_cate->alias_chn = $request->txtAlias_chn ? $request->txtAlias_chn : changeTitle($request->name_chn);
			$news_cate->mota_vi = $request->mota_vi;
			$news_cate->mota_en = $request->mota_en;
			$news_cate->mota_jp = $request->mota_jp;
			$news_cate->mota_kr = $request->mota_kr;
			$news_cate->mota_chn = $request->mota_chn;
			$news_cate->title_vi = $request->txtTitle;
			$news_cate->title_en = $request->title_en;
			$news_cate->title_jp = $request->title_jp;
			$news_cate->title_kr = $request->title_kr;
			$news_cate->title_chn = $request->title_chn;
			$news_cate->keyword_vi = $request->txtKeyword;
			$news_cate->keyword_en = $request->keyword_en;
			$news_cate->keyword_jp = $request->keyword_jp;
			$news_cate->keyword_kr = $request->keyword_kr;
			$news_cate->keyword_chn = $request->keyword_chn;
			$news_cate->description_vi = $request->txtDescription;
			$news_cate->description_en = $request->description_en;
			$news_cate->description_jp = $request->description_jp;
			$news_cate->description_kr = $request->description_kr;
			$news_cate->description_chn = $request->description_chn;
			$news_cate->stt = intval($request->stt);
			$news_cate->com = $request->txtCom;
			if ($request->status == 'on') {
				$news_cate->status = 1;
			} else {
				$news_cate->status = 0;
			}
			if ($request->status_en == 'on') {
				$news_cate->status_en = 1;
			} else {
				$news_cate->status_en = 0;
			}

			$news_cate->save();

			return redirect('backend/newscate/edit?id=' . $id . '&type=' . $com)->with('status', 'Cập nhật thành công');
		} else {
			return redirect()->back()->with('status', 'Dữ liệu không có thực');
		}
	}
	public function getDelete($id) {
		if (!empty($_GET['type'])) {
			$com = $_GET['type'];
		} else {
			$com = '';
		}
		$product = NewsCate::findOrFail($id);
		$product->delete();
		return redirect('backend/newscate?type=' . $com)->with('status', 'Xóa thành công');
	}
	public function getDeleteList($id) {
		if ($_GET['type'] == 'tin-tuc') {
			$trang = 'tin tức';
		} else if ($_GET['type'] == 'dich-vu') {
			$trang = 'dich vụ';
		} else if ($_GET['type'] == 'bai-viet') {
			$trang = 'bài viết';
		} else {
			$trang = "bài viết";
		}

		if (!empty($_GET['type'])) {
			$com = $_GET['type'];
		} else {
			$com = '';
		}
		$listid = explode(",", $id);
		foreach ($listid as $listid_item) {
			$product = NewsCate::findOrFail($listid_item);
			$product->delete();
		}
		return redirect('backend/newscate?type=' . $com)->with('status', 'Xóa thành công');
	}
}
