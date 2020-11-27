<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $data=[
            ['name'=>'yamada','mail'=>'example@'],
            ['name'=>'ito','mail'=>'example@'],
            ['name'=>'ueda','mail'=>'example@'],
        ];

        return view('hello.index',['data'=>$data]);
        }


}
