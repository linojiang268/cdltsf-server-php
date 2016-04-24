@extends('layouts.topfix')

@section('sidebar')
  <div class="title">新闻动态</div>
  <div class="subtitle">NEWS</div>
  <ul class="menu">
    <li class="@if($nav == 'company') active @endif"><a href="/news/company">公司新闻</a></li>
    <li class="@if($nav == 'profession') active @endif"><a href="/news/profession">行业新闻</a></li>
  </ul>
@endsection

