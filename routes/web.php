<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('hello/{id}/{user_name?}',function($id,$user_name='no name'){
    $html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16px; color:#999;}
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0 -50px 0; }
</style>
</head>
<body>
<h1>ユーザー確認</h1>
<p>id:{$id}</p>
<p>name:{$user_name}</p>
<p>認証しました</p>
</body>
</html>
EOF;
    return $html;
});
