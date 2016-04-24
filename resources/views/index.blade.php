@extends('layouts.main')

@section('styles')
  <link href="//cdn.bootcss.com/video.js/5.8.0/video-js.min.css" rel="stylesheet">
  <link href="//cdn.bootcss.com/bxslider/4.2.5/jquery.bxslider.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/styles/home/index.css">
@endsection

@section('scripts')
  {{--<script src="//cdn.bootcss.com/video.js/5.8.0/video.min.js"></script>--}}
  {{--<!--[if IE 8]>--}}
  {{--<script src="//cdn.bootcss.com/video.js/5.8.0/ie8/videojs-ie8.min.js"></script>--}}
  <![endif]-->
  <script src="//cdn.bootcss.com/bxslider/4.2.5/jquery.bxslider.min.js"></script>
  <script src="/assets/scripts/home/index.js"></script>
@endsection


@section('header-content')
  <ul class="banner">
    <li>
      <a href="#">
        <img src="/assets/images/banner1.jpg" class="lazyload img-responsive" />
      </a>
    </li>
    <li>
      <a href="#">
        <img src="/assets/images/banner2.jpg" class="lazyload img-responsive" />
      </a>
    </li>
  </ul>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-4 box">
      <span class="box-title">公司简介</span>

      <div class="box-content">
        <img src="/assets/images/intro_01.jpg"
             data-src="/assets/images/intro_01.jpg"
             data-sizes="auto"
             class="lazyload img-responsive">
        <p style="margin-top: 16px">
          成都龙腾四方食品有限责任公司成立于1989年，其前身为成都市光华园食品有限责任公司。
          <a href="/about">更多详情</a>
        </p>
      </div>
    </div>
    <div class="col-sm-4 box">
      <div>
        <span class="box-title">新闻中心</span>
        <div class="box-title-right">
          <a href="/news/company">more</a>
        </div>
      </div>
      <div class="box-content">
        <table class="news-table table table-hover table-plain">
          <tbody>
          @forelse ($newspaper as $news)
            <tr>
              <td>
                <a href="/news/{{ $news->type }}/{{ $news->id }}">{{ $news->title }}</a>
              </td>
              <td class="text-right">{{ $news->created_at->format('Y-m-d') }}</td>
            </tr>
          @empty
            <tr>
              <td rowspan="2">
                <div>暂无新闻</div>
              </td>
            </tr>
          @endforelse
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-sm-4 box">
      <span class="box-title">企业视频</span>
      <div class="box-content">
        <img src="/assets/images/no-video01.jpg"
             data-src="/assets/images/no-video01.jpg"
             data-sizes="auto"
             class="lazyload img-responsive">

        {{--<video class="video-js col-xs-12" controls preload="none" height="200"--}}
               {{--poster="http://3rdwavemedia.com/assets/images/background/promo-bg.jpg" data-setup='{"techOrder":["html5", "flash"]}'>--}}
          {{--<source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">--}}
          {{--<source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm">--}}
          {{--<source src="http://vjs.zencdn.net/v/oceans.ogv" type="video/ogg">--}}

          {{--<p class="vjs-no-js">--}}
            {{--To view this video please enable JavaScript, and consider upgrading to a web browser that--}}
            {{--<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>--}}
          {{--</p>--}}
        {{--</video>--}}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 box">
      <div>
        <span class="box-title">产品展示</span>
        <div class="pull-right box-title-right">
          <a href="/brands">more</a>
        </div>
      </div>
      <div class="box-content">
        @if (empty($products))
          <p>暂无产品</p>
        @else
          <ul class="products">
          @foreach ($products as $product)
            <li>
              <a href="#">
                <span></span>
                <img src="/assets/images/loading.gif" data-src="{{ $product->poster }}" alt="{{ $product->name }}" class="lazyload img-responsive" />
                <div class="text-center product-title">{{ $product->name }}</div>
              </a>
            </li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
  </div>
@endsection