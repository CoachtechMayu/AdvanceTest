<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Rules\PostCodeRule;


use Illuminate\Http\Request;

class ContactController extends Controller
{
    /* お問い合わせページ表示 */
    public function index(){
        return view('index');
    }
    /* 入力内容確認 */
    public function confirm(ContactRequest  $request){
        /* 情報取得 */
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'option']);
        return view('confirm', compact('contact'));
    }

    /* 入力内容受け取り */
    public function store(ContactRequest  $request){
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'option']);
        if($request->input('back') == 'back'){  /* 修正する場合 */
            return redirect('/')->withInput();
        }else{                                  /* データ登録の場合 */
            Contact::create($contact);          /* Contactモデル データの保存処理 */
            return view('thanks');
        }

    }
}
