<!DOCTYPE html>
<!--[if IE 8]> <html lang="zh_CN" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="zh_CN" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="zh_CN"> <!--<![endif]-->
<head>
  <title>成都龙腾四方食品有限公司</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="成都龙腾四方食品官方网站">
  <meta name="keywords" content="成都龙腾四方">
  <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  @section('styles')
  <link rel="stylesheet" href="/assets/styles/main.css">
  @show

  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div id="page-preloader">
  <div class="spinner">
    <div class="dot1"></div>
    <div class="dot2"></div>
  </div>
</div>

<div class="wrapper">
  <div class="header-wrapper">
    <header class="header-bar">
      <div class="container">
        <h1 class="logo pull-left">
          <img src="/assets/images/logo.png" class="img-responsive">
        </h1>
        <nav class="main-nav navbar-right" role="navigation">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="@if($headerNav == 'home')active @endif nav-item"><a href="/">首页</a></li>
              <li class="@if($headerNav == 'brands')active @endif nav-item"><a href="/brands">品牌与产品</a></li>
              <li class="@if($headerNav == 'strength')active @endif nav-item"><a href="/strength">实力认证</a></li>
              <li class="@if($headerNav == 'join')active @endif nav-item"><a href="/join">加入我们</a></li>
              <li class="@if($headerNav == 'news')active @endif nav-item"><a href="/news/company">新闻动态</a></li>
              <li class="@if($headerNav == 'affiliate')active @endif nav-item"><a href="/affiliate">招商加盟</a></li>
              <li class="@if($headerNav == 'about')active @endif nav-item"><a href="/about">关于我们</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <div class="header-content">
    @yield('header-content')
    </div>
  </div>

  <div class="content-wrapper container">
    @yield('content')
  </div>

  <div class="footer-wrapper">
    <div class="footer-container container">
      {{--<div class="col-xs-10 col-sm-9"> hide weixin, weibo, etc--}}
      <div class="col-xs-12">
        <ul class="links breadcrumb">
          <li role="presentation"><a href="/about/contact">联系我们</a></li>
          <li role="presentation"><a href="/join/recruit">人才招聘</a></li>
        </ul>
        <div class="row">
          <div class="col-xs-12 col-sm-3">电 话：028-65827733</div>
          <div class="col-xs-12 col-sm-3">传 真：028-82229959</div>
          <div class="col-xs-12 col-sm-6">公司地址：中国·四川·成都市·崇州市</div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6">成都龙腾四方食品有限责任公司版权所有</div>
          <div class="col-xs-12 col-sm-6">蜀ICP备13008907号-1</div>
        </div>
      </div>
      {{--<div class="col-xs-2 col-sm-3 social text-right">--}}
        {{--<a href="#"><img src="/assets/images/weibo.png"></a>--}}
        {{--<a href="#"><img src="/assets/images/weixin.png"></a>--}}
      {{--</div>--}}
    </div>
  </div>
</div>

<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/lazysizes/1.4.0/lazysizes.min.js"></script>
<script src="//cdn.bootcss.com/modernizr/2.8.3/modernizr.min.js"></script>
@section('scripts')
  <script src="/assets/scripts/index.js"></script>
@show
</body>
</html>