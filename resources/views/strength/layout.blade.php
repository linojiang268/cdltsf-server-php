@extends('layouts.topfix')

@section('sidebar')
  <div class="title">实力认证</div>
  <div class="subtitle">STRENGTH</div>
  <ul class="menu">
    <li class="@if($nav == 'cert') active @endif"><a href="/strength">资质认证</a></li>
    <li class="@if($nav == 'glory') active @endif"><a href="/strength/glory">荣誉事迹</a></li>
  </ul>
@endsection
