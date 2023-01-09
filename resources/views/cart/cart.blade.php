@extends('layouts.app')

@section('content')

<h1 class="cart__title">ショッピングカート</h1>

<div class="cart__wrapper">
    @foreach ($products as $product)
    <div class="cart__item">
        <img class="cart__img" src="/images/{{ $product->image }}" alt="{{ $product->name }}">
        <div class="cart__info">
            <p class="cart__name">{{ $product->name }}</p>
            <p class="cart__price">¥{{ $product->price }}</p>
            <p class="cart__size">サイズ:{{ $product->size }}</p>
            <p class="cart__color">カラー:{{ $product->color }}</p>
            <p class="cart__quantity">数量:{{ $product->quantity }}</p>
            <form action="{{ route('cart.destroy', ['id' => $product->id]) }}" method="post">
                @csrf
                <button class="cart__delete-button" type="submit">削除</button>
            </form>
        </div>
    </div>
    @endforeach
</div>


<a href="{{ route('order.index') }}">商品を購入する</a>


@endsection