@extends('news.layout')

@section('styles')
  <link rel="stylesheet" href="/assets/styles/news/index.css">
@endsection

@section('scripts')
  <script src="/assets/scripts/news/index.js"></script>
  <script src="//cdn.bootcss.com/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
  <script type="text/javascript">
    var nav = '{{ $nav }}';
  </script>
@endsection

@section('main')
  <div class="col-xs-12 box">
    <span class="box-title">
      @if($nav == 'company') 公司新闻 @else 行业新闻 @endif
    </span>

    <div class="box-content" >
      <table id="news" class="news-table table table-hover table-plain">
        <tbody>
        </tbody>
      </table>
      <div id="pager" class="clearfix"></div>
    </div>
  </div>
@endsection