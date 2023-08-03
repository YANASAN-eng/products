<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CafeDataRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required | max:255',
            'url' => 'required | max:255 | url',
            'content' => 'max:1000',
        ];
    }
    /**
     * 項目名
     * 
     * @return array
     */
    public function attributes(){
        return [
            'name' => ' 曲名',
            'url' => 'URL',
            'content' => '内容',
        ];
    }
    /**
     * エラーメッセージ
     * 
     * @return array
     */
    public function messages(){
        return [
            'name.required' => ':attributeは必須項目です。',
            'name.max' => ':attributeは:max字以内で入力してください。',
            'url.required' => ':attributeは必須入力です。',
            'url.max' => ':attributeは:max字以内で入力してください。',
            'url.url' => ':attributeはURL形式で入力してください。',
            'content.max' => ':attributeは:max字以内で入力してください。',
        ];
       
    }
}
