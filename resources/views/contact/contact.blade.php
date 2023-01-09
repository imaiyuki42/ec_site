@extends('layouts.app')

@section('content')
<h1>お問い合わせ</h1>

<form action="{{ route('contact.store') }}" method="post">
    @csrf
    <label for="">名前</label>
    <input type="text" name="name">
    <label for="">メールアドレス</label>
    <input type="email" name="email">
    <label for="">件名</label>
    <input type="text" name="title">
    <label for="">内容</label>
    <input type="text" name="text">
    <button type="submit">送信する</button>
</form>

@endsection