<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopProductRequest extends FormRequest
{
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
            'name'=>'required',
            'img'=>'required',
            // 'description'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            // 'shop_id'=>'required',
            // 'type_id'=>'required',
            // 'email'=>'required',
            // 'password'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên sản phẩm không được để trống',
            'img.required'=>'Vui lòng chọn ảnh sản phẩm',
            'description.required'=>'Mô tả sản phẩm không được để trống',
            'quantity.required'=>'Số lượng sản phẩm không được để trống',
            'price.required'=>'Giá sản phẩm không được để trống',
            // 'shop_id.required'=>'Id Shop không được để trống',
            // 'type_id.required'=>'Id Shop không được để trống',
        ];
    }

}
