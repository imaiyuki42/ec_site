@extends('layouts.app')

@section('content')

<h1>シャツ</h1>

<div class="grid">
    @foreach($products as $product)
    <div class="category__products">
        <a href="{{ route('product.index', $product->id) }}"><img class="pick-up__img" src="/images/{{ $product->image }}" alt="{{ $product->name }}"></a>
        <h3 class="category__product-name">{{ $product->name }}</h3>
        <h4 class="category__product-price">¥{{ $product->price }}</h4>
    </div>
    @endforeach
</div>

@endsection