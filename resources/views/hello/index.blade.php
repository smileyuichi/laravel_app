@extends('layouts.helloapp')
@section('title','タイトルだよ')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツ</p>
<p>これは、<middleware>google.com</middleware>へのリンクです</p>
<p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです</p>

@endsection

@section('footer')
    copyright 2020 tanaka.
@endsection