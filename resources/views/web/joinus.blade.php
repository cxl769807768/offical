
  @extends('layouts.layout')
  @section('content')
  <!-- 中间内容部分 -->
  <div class="contact3 gShow">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">
          <p class="tit">
            岗位需求
          </p>
          @if(!empty($jobs))
          <ul class="postNeed">
            @foreach ($jobs as $job)
            <li>
              <p>{{$job['name']}} <span class="pull-right">{{$job['created_at']}} 发布</span></p>
              <p>
                {{$job['subtitle']}}
                <img src="{{ URL::asset('uploads/images/contact_04.png')}}" class="pull-right" alt>
              </p>
              <div class="info">
                {!!$job->desc!!}
                <p><br></p>
                <p class="email">投递邮箱：<span>xiao.ding@liyupower.com</span>
                  <a href="javascript:;" class="pull-right">在线申请职位</a></p>
              </div>
            </li>
            @endforeach
          </ul>
          @else
            <h6>暂无内容</h6>
          @endif
          <!-- 分页 -->

          {{--<p class="page">--}}
            {{--<a href="javascript:;"><img src="images/index-on.png" alt></a>--}}
            {{--<a href="/jobs" class="page-num page-num-current">1</a>--}}
            {{--<a href="javascript:;"><img src="images/index-up.png" alt></a>--}}
          {{--</p>--}}

          <div class="applyForm">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-1 col-md-2 col-lg-3"></div>
                <div class="col-xs-10 col-md-8 col-lg-6 form">
                  <span class="close">X</span>
                  <p class="form_tit">在线申请！</p>

                  <form action="" method="post" enctype="multipart/form-data" id="applyForm">
                    <input type="text" placeholder="姓名 Name" id="name" name="name">
                    <input type="text" placeholder="电话 Telephone" id="tel" name="mobile">
                    <input type="text" placeholder="邮箱 E-MAIL" id="email" name="email">
                    <input type="text" placeholder="应聘职位 Job" id="job" name="job_name">
                    <div class="upFile clearfix">
                      <input type="text" name="resume" id="pull-left" class="pull-left" placeholder="上传简历 Upload Resume">
                      <span class="pull-left">上传...</span>
                      <input type="file" accept=".pdf,.docx,.doc" onchange="fileChange(this);" id="fileUpload" name="upload_file">
                    </div>
                    <p>备注： 上传的文档支持格式 doc, docx, pdf</p>
                    <div class="form-group row">
                      <div class="col-md-9">
                        <input id="captcha" name="captcha" placeholder="验证码" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>
                      </div>
                      <div  class="col-md-3">
                        <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">

                        @if ($errors->any())
                          <div class="alert">
                            @foreach ($errors->all() as $error)
                              {{ $error }}
                            @endforeach
                          </div>
                        @endif
                      </div>

                      </div>

                    <button  id="submitButton" class="btn">完成提交</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <p class="tit">
            招聘流程
          </p>
          <div class="flowPath">
            <ul class="top clearfix">
              <li class="pull-left">
                <span>
                  <span class="line"></span>
                  <img src="{{ URL::asset('uploads/images/contact_05.png')}}" alt>
                </span>
              </li>
              <li class="pull-left">
                <span>
                  <span class="line"></span>
                  <img src="{{ URL::asset('uploads/images/contact_06.png')}}" alt>
                </span>
              </li>
              <li class="pull-left">
                <span>
                  <span class="line"></span>
                  <img src="{{ URL::asset('uploads/images/contact_07.png')}}" alt>
                </span>
              </li>
              <li class="pull-left">
                <span>
                  <span class="line"></span>
                  <img src="{{ URL::asset('uploads/images/contact_08.png')}}" alt>
                </span>
              </li>
              <li class="pull-left">
                <span>
                  <span class="line"></span>
                  <img src="{{ URL::asset('uploads/images/contact_09.png')}}" alt>
                </span>
              </li>
            </ul>
            <ul class="bottom clearfix">
              <li class="pull-left">
                <span>1</span>
                <span>领表</span>
              </li>
              <li class="pull-left">
                <span>2</span>
                <span>填表</span>
              </li>
              <li class="pull-left">
                <span>3</span>
                <span>初试</span>
              </li>
              <li class="pull-left">
                <span>4</span>
                <span>复试</span>
              </li>
              <li class="pull-left">
                <span>5</span>
                <span>录用</span>
              </li>
              <li></li>
            </ul>
          </div>
          <p class="tit">
            应聘须知
          </p>
          <div class="needKnow">
            <p>面试地址：云南省昆明市盘龙区北京路与白云路交叉口西南角心景假日大厦21层2112室</p>
            <p>注意事项：请携带有效二代身份证、黑色水性笔来司面试。</p>
            <p>面试反馈：3个工作日内通知录用结果，若未接到则没有通过面试。</p>
            <p>特别声明：招聘不收取任何费用，若有任何收费行为概与天质无关。</p>
          </div>
        </div>
      </div>
    </div>
  </div>


<script>
  function fileChange(target) {
    var file = target.files[0]
    var ImageBase64 = ''
    var fileSize = 0;
    fileSize = file.size;
    var size = fileSize / 1024 / 1024 > 10
    if (size) {
      alert("附件不能大于10M");
      target.value = "";
      return false; //阻止submit提交
    }
    var name = target.value;

    var fileName = name.substring(name.lastIndexOf(".") + 1).toLowerCase();
    if (fileName != "doc" && fileName != "docx" && fileName != "pdf") {
      alert("请选择正确的格式文件上传(doc、docx、pdf)！");
        target.value = "";
        return false; //阻止submit提交



    }
     var form_data = new FormData();
    var file_data = $('#fileUpload').prop('files')[0];
      form_data.append('upload_file',file_data);
      form_data.append('_token',"{{ csrf_token() }}");
      $.ajax({
          type: 'post', // 提交方式 get/post
          url: '/uploadFile', // 需要提交的 url
          dataType:"json",
          processData:false,
          contentType:false,
          data:form_data
      }).success(function (result) {
          $('input[name=resume]').val(result.data);
      })
  }
  $('#submitButton').on('click', function() {
      console.log($('#fileUpload').prop('files')[0]);
          $.ajax({
              type: 'post', // 提交方式 get/post
              url: '/apply', // 需要提交的 url
              dataType: "json",
              data: {
                  'name': $('input[name=name]').val(),
                  'mobile': $('input[name=mobile]').val(),
                  'email': $('input[name=email]').val(),
                  'job_name': $('input[name=job_name]').val(),
                  'resume': $('input[name=resume]').val(),
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
