@extends('layouts.topfix')

@section('sidebar')
  <div class="title">招商加盟</div>
  <div class="subtitle">JOIN IN</div>
  <ul class="menu">
    <li class="@if($nav == 'claim') active @endif"><a href="/affiliate">加盟条件</a></li>
    <li class="@if($nav == 'sales') active @endif"><a href="/affiliate/sales">销售网络</a></li>
    <li class="@if($nav == 'cooperate') active @endif"><a href="/affiliate/cooperate">合作方式</a></li>
  </ul>
@endsection
