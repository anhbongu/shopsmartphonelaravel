<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'pro_name'=>'required|unique:products,pro_name,'.$this->id,
            'pro_category_id'=>'not_in:0',
            'pro_description'=>'required',
            'pro_content'=>'required',
            'pro_price'=>'required',
            
        ];
    }

    public function messages(){
        return [
             'pro_name.required'=>'Tên không được bỏ trống',
             'pro_name.unique'=>'Tên đã tồn tại',

             'pro_category_id.not_in'=>'Trường này không đươc bỏ trống!',
             'pro_description.required'=>'Trường này không đươc bỏ trống!',
             'pro_content.required'=>'Trường này không đươc bỏ trống!',
             'pro_price.required'=>'Trường này không đươc bỏ trống!',
            
        ];
       
    }
}
