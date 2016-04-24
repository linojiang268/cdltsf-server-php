@extends('about.layout')

@section('styles')
  <link rel="stylesheet" href="/assets/styles/about/culture.css">
@endsection

@section('main')
  <div class="col-xs-12 box">
    <span class="box-title">龙腾文化</span>

    <div class="box-content">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <img src="/assets/images/culture_03.jpg" class="img-rounded">
        </div>
      </div>
      <div class="article">
        <p class="title">我们的使命</p>
        <p>让每个中国人都能吃到绿色健康食品。</p>
      </div>

      <div class="article">
        <p class="title">我们的愿景</p>
        <p>成为中国最有幸福感的员工之家，成为中国最放心的食品生产企业。</p>
      </div>

      <div class="article">
        <p>我们的价值观：贡献，诚信，感恩，专注。</p>
        <p>我们的状态：积极进取，阳光奋斗。</p>
        <p>我们的团队：特别能吃苦！特别能战斗！</p>
        <p>我们的口号：不抱怨，不放弃，错了就改，不会就学。</p>
      </div>
    </div>
  </div>
@endsection