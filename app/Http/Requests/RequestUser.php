<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
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
            'name'=>'required|unique:users,name,'.$this->id,
            'email'=>'required|unique:users,email,'.$this->id,
            'password'=>'required',
            
        ];
    }

    public function messages(){
        return [
             'name.required'=>'Tên không được bỏ trống',
             'name.unique'=>'Tên đã tồn tại',

             'email.required'=>'Trường này không đươc bỏ trống!',
             'password.required'=>'Trường này không đươc bỏ trống!',
             'email.unique'=>'Email đã tồn tại!',
        ];
       
    }
}
