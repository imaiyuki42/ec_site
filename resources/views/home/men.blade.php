@extends('layouts.app')

@section('content')

<h1 class="category__title">MEN</h1>

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
    <ul class="category grid">
        <li><a href="{{ route('men.outer.index') }}"><img class="category__img" src="{{ asset('/images/parker_1.jpg') }}"><p>アウター</p></a></li>
        <li><a href="{{ route('men.tops.index') }}"><img class="category__img" src="{{ asset('/images/shirt_1.jpg') }}"><p>トップス</p></a></li>
        <li><a href="{{ route('men.sweat.index') }}"><img class="category__img" src="{{ asset('/images/men_sweat_1.jpg') }}">スウェット</a></li>
        <li><a href="{{ route('men.knit.index') }}"><img class="category__img" src="{{ asset('/images/men_knit_1.jpg') }}">ニット</a></li>
        <li><a href="{{ route('men.pants.index') }}"><img class="category__img" src="{{ asset('/images/men_pants_1.jpg') }}">パンツ</a></li>
        <li><a href="{{ route('men.jeans.index') }}"><img class="category__img" src="{{ asset('/images/jeans_1.jpg') }}"><p>ジーンズ</p></a></li>
        <li><a href="{{ route('men.inner.index') }}"><img class="category__img" src="{{ asset('/images/men_inner_1.jpg') }}"><p>インナー</p></a></li>
        <li><a href="{{ route('men.room.index') }}"><img class="category__img" src="{{ asset('/images/men_room_1.jpg') }}">ルーム</a></li>
    </ul>
</div>

@endsection