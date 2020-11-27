<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $data=[
            'msg'=>'お名前を入力して下さい'
        ];
        $array=[1,2,3,4,5];
        return view('hello.index',['array'=>$array]);
        }

    public function post(Request $request) 
    {
        $array =[1,2,3,4,5];
        return view('hello.index',['msg'=>$request->msg,'array'=>$array]);
    }

}
