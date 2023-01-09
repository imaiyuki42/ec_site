@extends('layouts.app')


@section('content')

<div class="home-slider">
    <img class="carousel-img" src="{{ asset('images/top_1.jpg') }}" alt="スライダー1">
    <img class="carousel-img" src="{{ asset('images/top_3.jpg') }}" alt="スライダー3">
    <img class="carousel-img" src="{{ asset('images/top_2.jpg') }}" alt="スライダー2">
</div>

<h2 class="pick-up__title">PICK UP アイテム</h2>

<div class="pick-up__wrapper grid">

    @foreach ($pickup_products as $pickup_product)
    <div class="pick-up__products">
        <a href="{{ route('product.index', $pickup_product->id) }}"><img class="pick-up__img" src="images/{{ $pickup_product->image }}" alt="{{ $pickup_product->name }}"></a>
        <h3 class="pick-up__product-name">{{ $pickup_product->name }}</h3>
        <h4 class="pick-up__product-price">¥{{ $pickup_product->price }}</h4>
    </div>
    @endforeach
</div>

@endsection