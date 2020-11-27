@extends('layouts.helloapp')
@section('title','タイトルだよ')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
    <p>必要なだけ記述する</p>

    @include('components.message',['msg_title'=>'OK','msg_content'=>'サブビューです'])

    <ul>
        @each('components.item',$data,'item')
    </ul>

@endsection

@section('footer')
    copyright 2020 tanaka.
@endsection