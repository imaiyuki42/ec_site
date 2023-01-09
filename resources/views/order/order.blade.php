@extends('layouts.app')

@section('content')

<h1>商品購入</h1>

<form action="{{ route('order.store') }}" method="post">
    @csrf
    <label>お届け先</label>
    <input type="hidden" name="del_address" value="{{ $address->address }}">
    <p>{{ $address->address }}</p>
    <a href="{{ route('delivery_address.index') }}">お届け先の変更はこちら</a><br>
    
    <label>お届け日時</label>
    @foreach ($week as $week)
    <input type="radio" name="del_day" value="{{ $week }}">{{ $week }}
    @endforeach
    
    <label>お支払い方法</label>
    @foreach ($payments as $payment)
    <input type="hidden" name="pay_method" value="{{ $payment->payment }}">
    <p>{{ $payment->payment }}</p>
    @endforeach
    
    <label>購入商品</label>
    @foreach ($products as $product)
    
    <img src="/images/{{ $product->image }}" alt="{{ $product->name }}">
    <input type="hidden" name="image" value="{{ $product->image }}">
    <label>{{ $product->name }}</label>
    <input type="hidden" name="product_name" value="{{ $product->name }}">
    <label>¥{{ $product->price }}</label>
    <input type="hidden" name="price" value="{{ $product->price }}">
    <label>サイズ:{{ $product->size }}</label>
    <input type="hidden" name="size" value="{{ $product->size }}">
    <label>カラー:{{ $product->color }}</label>
    <input type="hidden" name="color" value="{{ $product->color }}">
    <label>数量:{{ $product->quantity }}</label>
    <input type="hidden" name="quantity" value="{{ $product->quantity }}">
    @endforeach
    <h3>ご請求金額</h3>
    <input type="hidden" name="payment">

    <a href="{{ route('cart.index') }}">カートに戻る</a>
    <button type="submit">注文を確定する</button>
</form>

@endsection