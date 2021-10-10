<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestArticle extends FormRequest
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
            'a_name'=>'required:unique, articles,'.$this->id,
            'a_description'=>'required',
            'a_content'=>'required',
        ];
    }

    public function messages(){
        return [
            'a_name.required'=>'Tên bài viết không được bỏ trống',
            'a_description.required'=>'Description không được bỏ trống',
            'a_content.required'=>'Nội dung không được bỏ trống',
        ];
    }
}
