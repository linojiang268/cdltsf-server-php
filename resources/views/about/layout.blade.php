@extends('layouts.topfix')

@section('sidebar')
  <div class="title">关于我们</div>
  <div class="subtitle">ABOUT US</div>
  <ul class="menu">
    <li class="@if($nav == 'firm') active @endif"><a href="/about">公司简介</a></li>
    <li class="@if($nav == 'culture') active @endif"><a href="/about/culture">龙腾文化</a></li>
    <li class="@if($nav == 'contact') active @endif"><a href="/about/contact">联系我们</a></li>
  </ul>
@endsection
