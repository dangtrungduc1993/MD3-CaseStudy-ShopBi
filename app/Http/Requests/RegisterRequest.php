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
        return false;
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
            'password'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"khong duoc de trong ten User",
            'email.required'=>"Khong duoc de trong email",
            'password.required'=>'Khong duoc de trong password'
        ];
    }
}
