
@extends('layouts.layout')
@section('content')
  <!-- 中间内容部分 -->
  <div class="news gShow">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>

        <div class="col-xs-12 col-md-10 col-lg-8">
          <div class="row">
            @if(!empty($news))
            @foreach ($news as $n)
            <div class="col-xs-12 col-md-6 col-lg-6 list">
              <div class="clearfix">
                <img class="pull-left" src="{{$n['cover']}}" alt="{{$n['title']}}">
                <div class="pull-left">
                  <a href="{{route('/news/detail',array('id'=>request('id'),'nid'=>$n['id'],'pid'=>request('pid')))}}" title="{{$n['title']}}">{{$n['title']}}</a>
                  <p>{{$n['created_at']}}</p>
                  <p>{{$n['subtitle']}}</p>
                </div>
              </div>
            </div>
            @endforeach
            @else
              <div class="col-xs-12 col-md-6 col-lg-6 list"><h6>暂无内容</h6></div>
            @endif
          </div>
          <!-- 分页 -->

          <p id="yema" class="page">
            {{--<a href="javascript:;"><img src="images/index-on.png" alt></a>--}}
            {{--<a href="" class="page-num page-num-current">1</a><a href="" class="page-num">2</a>--}}
            {{--<a href=""><img src="images/index-up.png" alt></a>--}}
          </p>
        </div>

      </div>
    </div>
  </div>
@stop