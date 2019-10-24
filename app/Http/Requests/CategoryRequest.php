<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'bail|required|min:3|min:100',
            'description'=>'bail|required',
            'taxonomy' => 'bail|required',
            'parent_id' => 'bail|required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name không được để trống',
            'name.min' => 'Name phải có độ dài tối thiểu là 3 đến tối đa 100 ký tự',
            'taxonomy.require' => 'Định nghĩa danh mục không được để trống'
        ];
    }
}
