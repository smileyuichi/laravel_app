@extends('layouts.helloapp')
@section('title','タイトルだよ')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
<p>Controller value<br>'message' = {{$message}}</p>
<p>ViewComposer value<br>'view_message' = {{$view_message}}</p>

@endsection

@section('footer')
    copyright 2020 tanaka.
@endsection