@extends('layouts.app')

@section('content')
<h1 class="category__title">KIDS</h1>

<h2 class="pick-up__title">PICK UP アイテム</h2>

<div class="pick-up__wrapper grid">
    @foreach($pickup_products as $pickup_product)
    <div class="pick-up__products">
        <a href="{{ route('product.index', $pickup_product->id) }}"><img class="pick-up__img" src="images/{{ $pickup_product->image }}" alt="{{ $pickup_product->name }}"></a>
        <h3 class="pick-up__product-name">{{ $pickup_product->name }}</h3>
        <h4 class="pick-up__product-price">¥{{ $pickup_product->price }}</h4>
    </div>
    @endforeach
</div>

<h2 class="category-find__title">カテゴリーから探す</h2>
<div class="category__wrapper">
    <ul class="grid">
        <li><a href="{{ route('kids.outer.index') }}"><img class="category__img" src="{{ asset('/images/kids_outer_1.jpg') }}">アウター</a></li>
        <li><a href="{{ route('kids.tops.index') }}"><img class="category__img" src="{{ asset('/images/kids_tops_1.jpg') }}">トップス</a></li>
        <li><a href="{{ route('kids.shirt.index') }}">シャツ</a></li>
        <li><a href="{{ route('kids.one_piece.index') }}">ワンピース</a></li>
        <li><a href="{{ route('kids.pants.index') }}">パンツ</a></li>
        <li><a href="{{ route('kids.sweat.index') }}">スウェット</a></li>
        <li><a href="{{ route('kids.inner.index') }}">インナー</a></li>
        <li><a href="{{ route('kids.room.index') }}">ルーム</a></li>
    </ul>
</div>


@endsection