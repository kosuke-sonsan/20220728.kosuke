<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//
class ContactFormRequest extends FormRequest
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
            'fullname' => 'required|max:255',
            'sex' => 'required',
            'email' => 'required|email|max:255',
            'postcode' => 'required',
            'address' => 'required',
            'building_name' => 'string'|'max:255',
            'opinion' => 'required|string|max:120',
            'created_at' => 'date_format:"Y-m-d /H:i:s.u"',
            'updated_at' => 'date_format:"Y-m-d /H:i:s.u"'
        ];
    }
    
    public function attributes()
    {
        return [
            'fullname' => '名前',
            'sex' => '性別',
            'email' => 'メールアドレス',
            'postcode' => '郵便番号',
            'address' => '住所',
            'opinion' => 'ご意見'
        ];
    }
    
    public function messages()
    {
        return [
            'fullname.required' => ':attributeを入力してください。',
            'sex.regex' => ':attributeを選択してください。',
            'email.required' => ':attributeを入力してください。',
            'postcode.required' => ':attributeを入力してください。',
            'address.required' => ':attributeを入力してください。',
            'opinion.required' => ':attributeを入力してください。'
        ];
    }
}
