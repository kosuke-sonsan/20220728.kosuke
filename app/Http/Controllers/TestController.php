<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ask;

class TestController extends Controller
{
    public function index()//とりあえず表示させるだけ
    {
        return view('index');
    }
    
    public function create(ContactFormRequest $request)//入力されたデータの取得とデータベースへの格納
    {
        $validated = $request->validate();
        
        $fullname= $request->fullname;
        $sex = $request->sex;
        $email = $requset->email;
        $postcode = $request->postcode;
        $address = $request->address;
        $build_name = $rerquest->build_name;
        $opinion = $request->opinion;
        
        $input_data = [
            'fullname' => $fullname,
            'sex' => $sex,
            'email' => $email,
            'postcode' => $postcode,
            'address' => $address,
            'build_name' => $build_name,
            'opinion' => $opinion
        ];
        
        $form = $request->all();
        unset($form['_token']);
        Ask::create($form);
        return view('confirm', $input_data);
    }
    
    public function send(ContactFormRequest $request)//送信機能
    {
        $validated = $request->validate();
        $action = $request->input('action');
        unset($action['_token']);
        return view('contact.thanks');
    }
    
    public function regist(Request $request)//入力項目を維持したままお問合せページに戻るための記述
    {
        if ($request->get('back')) {
            return redirect('/contact/index')->withInput();
        }
        return;
    }
    
    public function serach(Request $request)//管理者サイト用検索機能
    {
        $params = $request->query();
        $users = Asks::serach($params)->get();
        return view('admin')->with([
            'users' => $users,
            'params' => $params,
        ]);
    }
}