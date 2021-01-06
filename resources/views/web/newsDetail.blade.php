
@extends('layouts.layout')
@section('content')
  <!-- 中间内容部分 -->
  <div class="news gShow">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">
          @if(!empty($news))
          <div class="title">
            {{$news['title']}}
          </div>
          <div class="author">
            <span>发布时间：</span> {{$news['created_at']}}
            &nbsp;&nbsp;
            <span>作者：</span>{{$news['author']}}
          </div>
          <div class="content ComponyNews">
            {!! $news->desc !!}
          </div>
          @else
            <h6>暂无内容</h6>
          @endif
        </div>
      </div>
    </div>
  </div>
@stop
