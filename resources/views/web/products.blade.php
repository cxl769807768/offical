
@extends('layouts.layout')
@section('content')
<!-- 中间内容部分 -->
<div class="container-fluid home_3 productionBox">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 productbox">
          <div class="productList text-center">
            <img src="{{ URL::asset('uploads/images/production1.jpg')}}" alt="">
          </div>
          <div class="text-center qr_footer">
            <p class="qrfooter-title">Android下载</p>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 productbox">
          <div class="productList text-center">
            <img src="{{ URL::asset('uploads/images/production2.jpg')}}" alt="">
          </div>
          <div class="text-center qr_footer">
            <p class="qrfooter-title">IOS下载</p>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 productbox">
          <div class="productList text-center">
            <img src="{{ URL::asset('uploads/images/production3.jpg')}}" alt="">
          </div>
          <div class="text-center qr_footer">
            <p class="qrfooter-title">惠农品安公众号</p>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 productbox">
          <div class="productList text-center">
            <img src="{{ URL::asset('uploads/images/production4.jpg')}}" alt="">
          </div>
          <div class="text-center qr_footer">
            <p class="qrfooter-title">惠农品安小程序</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop