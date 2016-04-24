@extends('layouts.main')

@section('content')
  <div class="row">
    <div class="col-xs-12 col-sm-2 sidebar">
      @yield('sidebar')
    </div>
    <div class="col-xs-12 col-sm-10 main">
      @yield('main')
    </div>
  </div>
@endsection