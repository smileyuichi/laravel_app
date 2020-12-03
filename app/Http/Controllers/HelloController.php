<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request) {
        return view('hello.index',['msg'=>'フォームを入力して下さい']);
            // $validator = Validator::make($request->query(),[
            //     'id'=>'required',
            //     'pass'=>'numeric',
            // ]);
            // if($validator->fails()) {
            //     $msg = 'クエリーに問題があります';
            // } else {
            //     $msg = 'ID/PASSを受け付けました。フォームを入力ください';
            // }
            // return view('hello.index',['msg'=>$msg,]);
        
    }

    public function post(HelloRequest $request) 
    {
        // $rules = [
        //     'name'=>'required',
        //     'mail'=>'email',
        //     'age'=>'numeric|between:0,150',

        // ];
        // $messages =[
        //     'name.required'=>'名前は必ず入力して下さい',
        //     'mail.email'=>'メールアドレスが必要です',
        //     'age.numeric'=>'年齢を整数で入力して下さい',
        //     'age.between'=>'年齢は0~150の間で入力して下さい',
        // ] ;

        // $validator = Validator::make($request->all(),$rules,$messages);
        // if($validator->fails()){
        //     return redirect('/hello')->withErrors($validator)->withInput();
        // }
        // return view('hello.index',['msg'=>'正しく入力されました！']);
        return view('hello.index',['msg'=>'正しく入力されました']);
    }
}
