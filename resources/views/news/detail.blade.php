@extends('news.layout')

@section('styles')
  <link rel="stylesheet" href="/assets/styles/news/detail.css">
@endsection

@section('main')
  <div class="col-xs-12 box">
    <span class="box-title">
      {{ $news->title }}
    </span>
    <span class="pull-right box-title-right">
      <a href="/news/{{$nav}}/">返回列表>></a>
    </span>
    <div class="box-content">
      <div class="new-detail-sub-title">
        发布时间 {{ $news->created_at }}
      </div>
      <div class="new-detail-data">
        {!! $news->content !!}
      </div>
    </div>
  </div>
@endsection
