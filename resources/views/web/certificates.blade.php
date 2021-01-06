@extends('layouts.layout')
@section('content')
  <!-- 中间内容部分 -->
  <div class="about2 gShow">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">
          <div class="row">
            @if(!empty($certificates))
            @foreach($certificates as $key => $val)
            <div class="col-xs-6 col-md-4 col-lg-3 mode">
              <div class="scaleImg ">
                <a class="lightbox" href="{{$val['cover']}}" rel="pic">
                  <img src="{{$val['cover']}}" alt="{{$val['title']}}">
                </a>
                <div class="info"><p>{{$val['title']}}</p></div>
              </div>
            </div>
            @endforeach
              @else
            <div class="col-xs-6 col-md-4 col-lg-3 mode">
              <h5>暂无内容</h5>
            </div>
            @endif
          </div>
          <!-- 分页 -->

          {{--<p class="page">--}}
            {{--<a href="javascript:;"><img src="images/about_04.png" alt></a>--}}
            {{--<a href="/?list_10/" class="page-num page-num-current">1</a>--}}
            {{--<a href="javascript:;"><img src="images/about_05.png" alt></a>--}}
          {{--</p>--}}

        </div>
      </div>
    </div>
  </div>
@stop