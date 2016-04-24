@extends('layouts.sided')

@section('styles')
  <link rel="stylesheet" href="/assets/styles/product/index.css">
@endsection

@section('scripts')
  <script src="/assets/scripts/index.js"></script>
@endsection

@section('header-content')
  <img src="{{ $brand->poster  }}" data-src="{{ $brand->poster  }}" class="lazyload img-responsive center-block" />
@endsection

@section('sidebar')
  <div class="title">品牌与产品</div>
  <div class="subtitle">Brands and Products</div>
  <ul class="menu">
    @foreach($brands as $brandId => $_brand)
      <li class="@if($brandId == $brand->type) active @endif"><a href="/brands/{{ $_brand->type }}">{{ $_brand->name }}</a></li>
    @endforeach
  </ul>
@endsection

@section('main')
  <div class="col-xs-12 box">
    <span class="box-title">{{ $brand->name }}</span>

    <div class="box-content">
      <div class="product">
          <img src="/assets/images/loading.gif" data-src="{{ $product->poster }}" class="lazyload img-responsive" />
      </div>
      <div class="product-title">
        {{ $product->name }}
      </div>
      <div class="product-content">
        {{ $product->intro }}
      </div>
      </div>
  </div>
@endsection
