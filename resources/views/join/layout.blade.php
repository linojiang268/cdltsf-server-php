@extends('layouts.topfix')

@section('sidebar')
  <div class="title">加入我们</div>
  <div class="subtitle">JOIN US</div>
  <ul class="menu">
    <li class="@if($nav == 'info') active @endif"><a href="/join">人力资源优势</a></li>
    <li class="@if($nav == 'recruit') active @endif"><a href="/join/recruit">人才招聘</a></li>
  </ul>
@endsection
