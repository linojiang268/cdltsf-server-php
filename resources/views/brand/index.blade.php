@extends('layouts.sided')

@section('styles')
  <link rel="stylesheet" href="/assets/styles/brand/index.css">
@endsection

@section('scripts')
  <script>
    var nav = '{{ $brand->type }}';
  </script>
  <script src="//cdn.bootcss.com/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
  <script src="/assets/scripts/brand/index.js"></script>
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
      <div id="products"></div>
      <div id="pager" class="clearfix"></div>
    </div>
  </div>
@endsection