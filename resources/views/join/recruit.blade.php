@extends('join.layout')

@section('styles')
  <link rel="stylesheet" href="/assets/styles/join/recruit.css">
@endsection

@section('main')
  <div class="col-xs-12 box">
    <span class="box-title">人才招聘</span>

    <div class="box-content">
      暂无招聘
        {{--<table class="table recruit-table">--}}
          {{--<thead>--}}
          {{--<tr>--}}
            {{--<th>招聘职位</th>--}}
            {{--<th>招聘人数</th>--}}
            {{--<th>招聘部门</th>--}}
            {{--<th>招聘地点</th>--}}
            {{--<th>查看详情</th>--}}
          {{--</tr>--}}
          {{--</thead>--}}
          {{--<tbody>--}}
          {{--<tr>--}}
            {{--<td>客户专员</td>--}}
            {{--<td>12</td>--}}
            {{--<td>客户部</td>--}}
            {{--<td>成都</td>--}}
            {{--<td><a href="#">查看详情</a></td>--}}
          {{--</tr>--}}
          {{--<tr>--}}
            {{--<td>客户专员</td>--}}
            {{--<td>12</td>--}}
            {{--<td>客户部</td>--}}
            {{--<td>昆明</td>--}}
            {{--<td><a href="#">查看详情</a></td>--}}
          {{--</tr>--}}
          {{--<tr>--}}
            {{--<td>客户专员</td>--}}
            {{--<td>12</td>--}}
            {{--<td>客户部</td>--}}
            {{--<td>郑州</td>--}}
            {{--<td><a href="#">查看详情</a></td>--}}
          {{--</tr>--}}
          {{--</tbody>--}}
        {{--</table>--}}
    </div>
  </div>
@endsection