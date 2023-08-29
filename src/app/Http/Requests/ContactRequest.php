<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PostCodeRule;
class ContactRequest extends FormRequest
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
            'first_name'=> ['required'],
            'last_name'=> ['required'],
            'gender'=> 'required',
            'email'=>['required', 'email:filter,dns'],
            /* ルール追加・住所検索後でやるken_all.zipDLする*/
            'postcode'=>['required', new PostCodeRule()],
            'address'=> ['required'],
            'option'=> ['required','max:120'],
        ];
    }
        public function messages()
        {
            return [
                'first_name.required' => '姓を入力してください',
                'last_name.required' => '名を入力してください',
                'email.required' => 'メールアドレスを入力してください',
                'email.email' => '有効なメールアドレス形式を入力してくだい',
                'postcode.required' => '郵便番号を入力してください',
                'address.required' => '住所を入力してください',
                'option.required' => 'ご意見を入力してください',
                'option.max' => 'ご意見を120字以内で入力してください',
            ];
        }
}
