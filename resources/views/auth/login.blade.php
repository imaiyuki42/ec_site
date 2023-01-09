<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <title>ECサイト</title>
</head>

<img class="login__logo" src="{{ asset('images/logo.png') }}" alt="ロゴ">
<h1 class="login__title">会員ログイン</h1>

<form class="login-form" action="" method="post">
    @csrf
    <div class="login-form__wrapper">
        <div class="login-item__mail">
            <label class="login-form__label">メールアドレス</label>
            <input class="login-form__input" type="email" name="email">
        </div>
        <div class="login-item__password">
            <label class="login-form__label" >パスワード</label>
            <input class="login-form__input" type="password" name="password">
        </div>
    </div>
    <a class="login-forget-password" href="">パスワードを忘れた場合はこちら</a>
    <div class="login-form__button-wrapper">
        <button class="login-form__button" type="submit">ログイン</button>
    </div>
    <a class="login-still" href="{{ route('register') }}">会員登録がまだの方はこちら</a>
</form>