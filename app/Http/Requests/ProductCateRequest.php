<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class ProductCateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name_vi' => 'required|unique:product_categories,name_vi',
		];
	}
	public function messages()
	{
		return [
			'name_vi.required' => 'Bạn chưa nhập tên danh mục',
            'name_vi.unique' => 'Tên danh mục bị trùng, mời nhập lại',
		];
	}
}
