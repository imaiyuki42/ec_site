@extends('layouts.app')

@section('content')

<img src="/images/{{ $product->image }}" alt="{{ $product->name }}">

<form action="{{ route('cart.store') }}" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="price" value="{{ $product->price }}">
    <input type="hidden" name="image" value="{{ $product->image }}">
    <h3>カラー</h3>
        <select name="color">
            <option value="ホワイト">ホワイト</option>
            <option value="ブラック">ブラック</option>
            <option value="ネイビー">ネイビー</option>
        </select>
    <h3>サイズ</h3>
        <select name="size">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
        </select>
    <h3>数量</h3>
        <select name="quantity">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <button type="submit">カートに入れる</button>
</form>
@if(isset($favorite))
    <form action="{{ route('favorite.destroy', ['id' => $product->id]) }}" method="post">
        @csrf
        <button class="fav_delete" type="submit">お気に入り削除</button>
    </form>
    @else
    <form action="{{ route('favorite.store', ['id' => $product->id]) }}">
        @csrf
        <button class="fav_add" type="submit">お気に入り追加</button>
    </form>
@endif



@endsection