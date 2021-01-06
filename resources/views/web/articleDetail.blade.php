
@extends('layouts.layout')
@section('content')
  <div class="about componentIntroduction">
    <div class=" container-fluid">
      <div class="row" style="margin-bottom:2rem">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">
          @if(!empty($articles))
          <p class="tit"> {{$articles['title']}}</p>
          <div class="contentinfo_{content:id}">
            {!! $articles->desc !!}
          </div>
            @else
            <h6>暂无内容</h6>
          @endif
        </div>
      </div>
    </div>
  </div>
  @stop