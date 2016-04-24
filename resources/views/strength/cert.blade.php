@extends('strength.layout')

@section('scripts')
  <script src="//cdn.bootcss.com/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script src="/assets/scripts/strength/cert.js"></script>
@endsection

@section('styles')
  <link href="//cdn.bootcss.com/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/styles/strength/cert.css">
@endsection

@section('main')
  <div class="col-xs-12 box">
    <span class="box-title">资质认证</span>

    <div class="box-content gallery">
      <div class="photo-frame col-xs-6 col-sm-4">
        <div>
          <span></span>
          <a class="cert" rel="group" href="#cert01">
            <img id="cert01" src="/assets/images/cert_01.jpg"
                 data-src="/assets/images/cert_01.jpg"
                 class="lazyload img-responsive">
          </a>
        </div>
      </div>

      <div class="photo-frame col-xs-6 col-sm-4">
        <div>
          <span></span>
          <a class="cert" rel="group" href="#cert02">
            <img id="cert02" src="/assets/images/cert_02.jpg"
                 data-src="/assets/images/cert_02.jpg"
                 class="lazyload img-responsive">
          </a>
        </div>
      </div>
      <div class="photo-frame col-xs-6 col-sm-4">
        <div>
          <span></span>
          <a class="cert" rel="group" href="#cert03">
            <img id="cert03" src="/assets/images/cert_03.jpg"
                 data-src="/assets/images/cert_03.jpg"
                 class="lazyload img-responsive">
          </a>
        </div>
      </div>
      <div class="photo-frame col-xs-6 col-sm-4">
        <div>
          <span></span>
          <a class="cert" rel="group" href="#cert04">
            <img id="cert04" src="/assets/images/cert_04.jpg"
                 data-src="/assets/images/cert_04.jpg"
                 class="lazyload img-responsive">
          </a>
        </div>
      </div>
      <div class="photo-frame col-xs-6 col-sm-4">
        <div>
          <span></span>
          <a class="cert" rel="group" href="#cert05">
            <img id="cert05" src="/assets/images/cert_05.jpg"
                 data-src="/assets/images/cert_05.jpg"
                 class="lazyload img-responsive">
          </a>
        </div>
      </div>
      <div class="photo-frame col-xs-6 col-sm-4">
        <div>
          <span></span>
          <a class="cert" rel="group" href="#cert06">
            <img id="cert06" src="/assets/images/cert_06.jpg"
                 data-src="/assets/images/cert_06.jpg"
                 class="lazyload img-responsive">
          </a>
        </div>
      </div>
      <div class="photo-frame col-xs-6 col-sm-4">
        <div>
          <span></span>
          <a class="cert" rel="group" href="#cert07">
            <img id="cert07" src="/assets/images/cert_07.jpg"
                 data-src="/assets/images/cert_07.jpg"
                 class="lazyload img-responsive">
          </a>
        </div>
      </div>
      <div class="photo-frame col-xs-6 col-sm-4">
        <div>
          <span></span>
          <a class="cert" rel="group" href="#cert08">
            <img id="cert08" src="/assets/images/cert_08.jpg"
                 data-src="/assets/images/cert_08.jpg"
                 class="lazyload img-responsive">
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection