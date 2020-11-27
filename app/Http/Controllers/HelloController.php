<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='noname',$pass='unknown') {

        return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {font-size:16px; color:#999;}
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0 -50px 0; }
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これは、HelloコントローラーのIndexアクションです。</p>
    <ul>
        <li>ID:{$id}</li>
        <li>PASS:{$pass}</li>
    </ul>
    <a href="/hello/other">go to other</a>
</body>
</html>
EOF;

    }

    public function other() {

        return <<<EOF
<html>
<head>
<title>Hello/other</title>
<style>
body {font-size:16px; color:#999;}
h1 { font-size:100px; text-align:right; color:#eee; margin:-40px 0 -50px 0; }
</style>
</head>
<body>
    <h1>Other</h1>
    <p>これは、HelloコントローラーのOtherアクションです。</p>
</body>
</html>
EOF;

    }


}
