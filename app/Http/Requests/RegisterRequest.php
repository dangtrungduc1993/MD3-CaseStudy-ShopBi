<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email'=>'required',
            'password'=>'required',
            'confirmPassword'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"Không được để trống tên user",
            'email.required'=>"Không được để trống email",
            'password.required'=>'Không được để trống password',
            'confirmPassword.required'=>'Vui lòng xác nhận password'
        ];
    }
}
