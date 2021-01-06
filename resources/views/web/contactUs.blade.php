@extends('layouts.layout')
@section('content')
  <!-- 中间内容部分 -->
  <div class="contact2 gShow">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-6">
          <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 company">
                <p>云南天质弘耕科技有限公司</p>
                <p>地址：云南省昆明市盘龙区北京路财智心景假日大厦21层2112室</p>
                <p>电话：0871-65636003</p>
                <p>传真：0871-65636003</p>
                <p>邮编：650000</p>
              {{--@if(!empty($articles))--}}
              {{--@foreach ($articles as $a)--}}
                {{--<p>{{$a['title']}}</p>--}}
                {{--{!!$a->desc!!}--}}

              {{--@endforeach--}}
              {{--@else--}}
                {{--<h6>暂无内容</h6>--}}
              {{--@endif--}}
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 company clearfix">
              <div class="pull-right clearfix">
                <p class="pull-left">小程序商城</p>

                <img class="pull-left" src="{{ URL::asset('uploads/images/hnpaxcx.jpg')}}" alt>

              </div>
              <div class="pull-right clearfix">
                <p class="pull-left">微信公众号</p>
                <img class="pull-left" src="{{ URL::asset('uploads/images/hnpagzh.png')}}" alt>
              </div>
            </div>
          </div>
          <form action="" method="post" id="contactForm">
            <div class="col-xs-12 col-md-4 col-lg-4">
              <input type="text" name="name" placeholder="请输入姓名：" id="name">
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
              <input type="text" name="email" placeholder="请输入邮箱：" id="email">
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
              <input type="text" name="mobile" placeholder="*请输入电话（必填）：" id="tel">
            </div>
            <div class="col-xs-12">
              <textarea id="msg" name="msg" rows="7" placeholder="请输入留言："></textarea>
            </div>

            <div class="col-xs-12 col-md-5 col-lg-5 mode">
              <input id="captcha" name="captcha" placeholder="验证码" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>
              <img src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码"/>
            </div>
                @if ($errors->any())
                  <div class="alert">
                    @foreach ($errors->all() as $error)
                      {{ $error }}
                    @endforeach
                  </div>
                @endif
              <div class="col-xs-4 col-md-3 col-lg-2">
                <button id="submitButton"  class="gChange">点击提交</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="application/javascript">
      $('#submitButton').on('click', function() {
          $.ajax({
              type: 'post', // 提交方式 get/post
              url: '/contact', // 需要提交的 url
              dataType: "json",
              data: {
                  'name': $('input[name=name]').val(),
                  'mobile': $('input[name=mobile]').val(),
                  'email': $('input[name=email]').val(),
                  'msg': $('#msg').val(),
                  'captcha': $('input[name=captcha]').val(),
                  '_token':"{{ csrf_token() }}"
              },
              // data:$('#applyForm').serialize(),
              success: function (result) { // data 保存提交后返回的数据，一般为 json 数据
                  console.log(result);

                  alert(result.msg);
              }
          })


          return false; // 阻止表单自动提交事件，必须返回false，否则表单会自己再做一次提交操作，并且页面跳转


      });
  </script>
@stop
