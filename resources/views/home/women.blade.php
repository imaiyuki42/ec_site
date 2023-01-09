@extends('layouts.app')

@section('content')

<h1 class="category__title">WOMEN</h1>

<h2 class="pick-up__title">PICK UP アイテム</h2>

<div class="pick-up__wrapper grid">
    @foreach($products as $product)
    <div class="pick-up__products">
        <a href="{{ route('product.index', $product->id) }}"><img class="pick-up__img" src="images/{{ $product->image }}" alt="{{ $product->name }}"></a>
        <h3 class="pick-up__product-name">{{ $product->name }}</h3>
        <h4 class="pick-up__product-price">¥{{ $product->price }}</h4>
    </div>
    @endforeach
</div>

<h2 class="category-find__title">カテゴリーから探す</h2>
<div class="category__wrapper">
    <ul class="grid">
        <li><a href="{{ route('women.outer.index') }}"><img class="category__img" src="{{ asset('/images/women_outer_1.jpg') }}"><p class="category__subtitle">アウター</p></a></li>
        <li><a href="{{ route('women.tops.index') }}"><img class="category__img" src="{{ asset('/images/women_tops_1.jpg') }}"><p class="category__subtitle">トップス</p></a></li>
        <li><a href="{{ route('women.skirt.index') }}"><img class="category__img" src="{{ asset('/images/women_skirt_1.jpg') }}"><p class="category__subtitle">スカート</p></a></li></a></li>
        <li><a href="{{ route('women.one_piece.index') }}"><img class="category__img" src="{{ asset('/images/women_one_piece_1.jpg') }}"><p class="category__subtitle">ワンピース</p></a></li>
        <li><a href="{{ route('women.pants.index') }}"><img class="category__img" src="{{ asset('/images/women_widepants_1.jpg') }}"><p class="category__subtitle">パンツ</p></a></li>
        <li><a href="{{ route('women.jeans.index') }}"><img class="category__img" src="{{ asset('/images/women_jeans_1.jpg') }}"><p class="category__subtitle">ジーンズ</p></a></li>
        <li><a href="{{ route('women.inner.index') }}"><img class="category__img" src="{{ asset('/images/women_inner_1.jpg') }}"><p class="category__subtitle">インナー</p></a></li>
        <li><a href="{{ route('women.room.index') }}"><img class="category__img" src="{{ asset('/images/women_room_1.jpg') }}"><p class="category__subtitle">ルーム</p></a></li>
    </ul>
</div>

@endsection