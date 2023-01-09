@extends('layouts.app')

@section('content')

<h1>パスワード変更</h1>

<form action="{{ route('password.edit') }}" method="post">
    @csrf
    <label>パスワード</label>
    <input type="password" name="password">
    <label>パスワード(確認)</label>
    <input type="password" name="password_confirm">
    <button type="submit">パスワードを更新する</button>
</form>

@endsection