@extends('layouts.app')

@section('content')

<h1 class="favorite__title">お気に入り</h1>

<div class="favorite__wrapper">
    @foreach ($products as $product)
        <div class="favorite__item">
            <img class="favorite__img" src="/images/{{ $product->image }}" alt="{{ $product->name }}">
            <div class="favorite__info">
                <p class="favorite__name">{{ $product->name }}</p>
                <p class="favorite__price">¥{{ $product->price }}</p>
                <a class="favorite__purchase-button" href="{{ route('product.index', $product->id) }}">商品を購入する</a>
                <form action="{{ route('favorite.destroy', ['id' => $product->id]) }}" method="post">
                    @csrf
                    <button class="favorite__button" type="submit">お気に入り削除</button>
                </form>
            </div>
        </div>
    @endforeach
</div>


@endsection