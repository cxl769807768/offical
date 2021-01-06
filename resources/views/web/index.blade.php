@extends('layouts.layout')
@section('content')
<div class="home">
        <div class="container-fluid">
            <div class="tit">
                <p>天质弘耕科技</p>
                <p>TIANZHI HONGGENG TECHNOLOGY</p>
            </div>
            <div class="row" style="margin-top: 2rem;">
                <div class="col-xs-12 col-md-6 col-lg-6" style="padding-left:0;padding-right:0;">
                    <img src="{{ URL::asset('uploads/images/tianzhiLeft.jpg')}}" alt>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 introductionBox" style="padding-left:0;padding-right:0;">
                    <img src="{{ URL::asset('uploads/images/tianzhiRight.jpg')}}" alt="">
                    <div class="introduction">
                        <p class="colf68c20 font2rem">AOUNT US</p>
                        <p class="colf68c20 font3rem">关于天质弘耕</p>
                        <p style="margin: 5rem 0;" class="overflow3jj">
                            云南天质弘耕科技有限公司成立于2014年12月，注册资本1.2亿元，是国家高新技术企业，总部位于昆明。公司积极贯彻落实国家乡村振兴、农业高质量发展战略...</p>
                        <a href="{{route('/articles',array('id'=>12,'pid'=>11))}}" class="viewMoreTit">查看更多</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid home_2 gShow">
            <div class="tit">
                <p>新闻资讯</p>
                <p>NEWS</p>
            </div>
            <div class="tabs">
                @foreach($newsMod as $key => $mod)
                <a class href="javascript:void(0);" data-type="{{$key+1}}">{{$mod['cate_name']}}</a><span>/</span>
                @endforeach
            </div>

            @foreach($newsMod as $key => $mod)
            <div class="row" id="row{{$key+1}}">
                <div class="col-md-1 col-lg-2"></div>
                @if(!empty($mod['newInfo']))
                @foreach($mod['newInfo'] as $k => $v)
                <div class="col-xs-12 col-md-4 col-lg-3 left">
                    <div style="height:auto">
                        <a href="{{route('/news/detail',array('id'=>$mod['id'],'nid'=>$v['id'],'pid'=>$mod['pid']))}}" title="{{$v['title']}}">
                            <div class="scaleImg">
                                <img src="{{$v['cover']}}" alt="{{$v['title']}}">
                            </div>
                            <p class="overflowTitle">{{$v['title']}}</p>
                            <p>{{$v['created_at']}}</p>
                            <p title="{{$v['title']}}">
                                {{$v['subtitle']}}
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-5 right">
                    <ul>
                        <li class="clearfix">
                            <div class="pull-left">
                                <p>@php echo date('d',strtotime($v['created_at'])); @endphp</p>
                                <p>@php echo date('Y/m',strtotime($v['created_at'])); @endphp</p>
                            </div>
                            <div class="pull-left">
                                <a href="{{route('/news/detail',array('id'=>$mod['id'],'nid'=>$v['id'],'pid'=>$mod['pid']))}}" title="{{$v['title']}}" class="overflowTitle">{{$v['title']}}</a>
                                <p title="{{$v['title']}}">{{$v['subtitle']}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                 @endforeach
                 @else
                    <div class="col-xs-12 col-md-4 col-lg-3 left"><p class="overflowTitle">暂无内容</p></div>
                 <div class="col-xs-12 col-md-6 col-lg-5 right"></div>
                @endif
            </div>
            @endforeach
        </div>
        <div class="container-fluid home_3 gShow">
            <div class="tit tits">
                <p>产品中心</p>
                <p class="productionLittleTtit">天质弘耕，打造世界一流绿色食品牌</p>
                <br>
                <p></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 productbox">
                        <a href="{{route('/products',array('id'=>20,'pid'=>18))}}">
                            <div class="text-center">
                                <div class="productionIntroImg">
                                    <img src="{{ URL::asset('uploads/images/productionall.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="text-center qr_footer">
                                <p class="qrfooter-title">产品汇总</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 productbox">
                        <a href="{{route('/certificates',array('id'=>19,'pid'=>18))}}">
                            <div class="text-center">
                                <div class="productionIntroImg">
                                    <img src="{{ URL::asset('uploads/images/productionPatent.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class=" text-center qr_footer">
                                <p class="qrfooter-title">专利证书</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 productbox">
                        <a href="{{route('/certificates',array('id'=>21,'pid'=>18))}}">
                            <div class="text-center">
                                <div class="productionIntroImg">
                                    <img src="{{ URL::asset('uploads/images/productionAchievement.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="text-center qr_footer">
                                <p class="qrfooter-title">科研成果</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid home_4 gShow">
            <div class="tit">
                <p>解决方案</p>
                <p>SOLUTION</p>
            </div>
            <div class="row clearfix">

                <div class="col-xs-12 col-md-6 col-lg-6">
                    <img src="{{ URL::asset('uploads/images/applicationLeft.jpg')}}" alt>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="swiper-container" id="banner_02">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ URL::asset('uploads/images/applicationRight.jpg')}}" alt="天然气">
                                <div class="info">
                                    <p>慧农品安</p>
                                    <p>打通农业上下游全产业链</p>
                                    <a href="{{route('/articles',array('id'=>23,'pid'=>22))}}">了解更多</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::asset('uploads/images/applicationRight.jpg')}}" alt="天然气">
                                <div class="info">
                                    <p>慧农品安</p>
                                    <p>科技创新驱动实践典型案例</p>
                                    <a href="{{route('/articles',array('id'=>23,'pid'=>22))}}">了解更多</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::asset('uploads/images/applicationRight.jpg')}}" alt="天然气">
                                <div class="info">
                                    <p>慧农品安</p>
                                    <p>农业基础数据研究成果</p>
                                    <a href="{{route('/articles',array('id'=>23,'pid'=>22))}}">了解更多</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid home_5 gShow">
            <div class="tit tits">
                <p>合作伙伴</p>
                <p>OUR PARTNER</p>
            </div>
            <canvas id="canvas"></canvas>
            <div class="filter"></div>
            <div class="row">
                <div class="partners">
                    <div class="col-xs-1 col-md-2 col-lg-2"></div>
                    <div class="col-xs-10 col-md-10 col-lg-10 brand">
                        @if(!empty($cooperatives))
                        @foreach($cooperatives as $key => $val)
                        <div class="col-xs-3 col-md-3 col-lg-3 partnersImg">
                            <img src="{{$val['cover']}}" alt="{{$val['title']}}" />
                        </div>
                        @endforeach
                            @else
                            <div class="col-xs-3 col-md-3 col-lg-3 partnersImg"><h5>暂无</h5></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid home_6 gShow">
            <div class="tit">
                <p>联系我们</p>
                <p>CONTACT US</p>
            </div>
            <div class="row">
                <div class="col-md-1 col-lg-2"></div>
                <div class="col-xs-12 col-md-10 col-lg-8 clearfix">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <iframe src="{{ URL::asset('map.html') }}" frameborder="0"></iframe>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <p>感谢您的关注，请填写并提交以下内容，我们会与您取得联系！</p>
                            <form action="" method="post" class="clearfix" id="contactForm">
                                <div class="term pull-left">
                                    <img src="{{ URL::asset('uploads/images/index_14.png')}}" alt>
                                    <input type="text" name="name">
                                </div>
                                <div class="term pull-left">
                                    <img src="{{ URL::asset('uploads/images/index_15.png')}}" alt>
                                    <input type="text" name="email">
                                </div>
                                <div class="term pull-left">
                                    <img src="{{ URL::asset('uploads/images/index_16.png')}}" alt>
                                    <input type="text" name="mobile">
                                </div>
                                <div class="term pull-left">
                                    <img src="{{ URL::asset('uploads/images/index_17.png')}}" alt>
                                    <textarea name="msg"  rows="7" id="msg"></textarea>
                                </div>
                                <div class="term pull-left">
                                    <img src="{{ URL::asset('uploads/images/yan.png')}}" alt>
                                    <input id="captcha" name="captcha" placeholder="验证码" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>
                                    <img class="check" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码"/>

                                </div>
                                @if ($errors->any())
                                    <div class="alert">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <div class="clearfix"></div>
                                <button id="submitButton" class="button gChange">提交</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
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
    function Star(id, x, y) {
        this.id = id;
        this.x = x;
        this.y = y;
        this.r = Math.floor(Math.random() * 2) + 1;
        var alpha = (Math.floor(Math.random() * 10) + 1) / 10 / 2;
        this.color = "rgba(255,255,255," + alpha + ")";
    }

    Star.prototype.draw = function () {
        ctx.fillStyle = this.color;
        ctx.shadowBlur = this.r * 2;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI, false);
        ctx.closePath();
        ctx.fill();
    }

    Star.prototype.move = function () {
        this.y -= .15;
        if (this.y <= -10) this.y = HEIGHT + 10;
        this.draw();
    }

    Star.prototype.die = function () {
        stars[this.id] = null;
        delete stars[this.id];
    }


    function Dot(id, x, y, r) {
        this.id = id;
        this.x = x;
        this.y = y;
        this.r = Math.floor(Math.random() * 5) + 1;
        this.maxLinks = 2;
        this.speed = .5;
        this.a = .5;
        this.aReduction = .005;
        this.color = "rgba(255,255,255," + this.a + ")";
        this.linkColor = "rgba(255,255,255," + this.a / 4 + ")";

        this.dir = Math.floor(Math.random() * 140) + 200;
    }

    Dot.prototype.draw = function () {
        ctx.fillStyle = this.color;
        ctx.shadowBlur = this.r * 2;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI, false);
        ctx.closePath();
        ctx.fill();
    }

    Dot.prototype.link = function () {
        if (this.id == 0) return;
        var previousDot1 = getPreviousDot(this.id, 1);
        var previousDot2 = getPreviousDot(this.id, 2);
        var previousDot3 = getPreviousDot(this.id, 3);
        if (!previousDot1) return;
        ctx.strokeStyle = this.linkColor;
        ctx.moveTo(previousDot1.x, previousDot1.y);
        ctx.beginPath();
        ctx.lineTo(this.x, this.y);
        if (previousDot2 != false) ctx.lineTo(previousDot2.x, previousDot2.y);
        if (previousDot3 != false) ctx.lineTo(previousDot3.x, previousDot3.y);
        ctx.stroke();
        ctx.closePath();
    }

    function getPreviousDot(id, stepback) {
        if (id == 0 || id - stepback < 0) return false;
        if (typeof dots[id - stepback] != "undefined") return dots[id - stepback];
        else return false; //getPreviousDot(id - stepback);
    }

    Dot.prototype.move = function () {
        this.a -= this.aReduction;
        if (this.a <= 0) {
            this.die();
            return
        }
        this.color = "rgba(255,255,255," + this.a + ")";
        this.linkColor = "rgba(255,255,255," + this.a / 4 + ")";
        this.x = this.x + Math.cos(degToRad(this.dir)) * this.speed,
            this.y = this.y + Math.sin(degToRad(this.dir)) * this.speed;

        this.draw();
        this.link();
    }

    Dot.prototype.die = function () {
        dots[this.id] = null;
        delete dots[this.id];
    }


    var canvas = document.getElementById('canvas'),
        ctx = canvas.getContext('2d'),
        WIDTH,
        HEIGHT,
        mouseMoving = false,
        mouseMoveChecker,
        mouseX,
        mouseY,
        stars = [],
        initStarsPopulation = 50,
        dots = [],
        dotsMinDist = 2,
        maxDistFromCursor = 50;

    setCanvasSize();
    init();

    function setCanvasSize() {
        WIDTH = document.documentElement.clientWidth,
            HEIGHT = $('.home_5').height() + 160;
        canvas.setAttribute("width", WIDTH);
        canvas.setAttribute("height", HEIGHT);
    }

    function init() {
        ctx.strokeStyle = "white";
        ctx.shadowColor = "white";
        for (var i = 0; i < initStarsPopulation; i++) {
            stars[i] = new Star(i, Math.floor(Math.random() * WIDTH), Math.floor(Math.random() * HEIGHT));
            //stars[i].draw();
        }
        ctx.shadowBlur = 0;
        animate();
    }

    function animate() {
        ctx.clearRect(0, 0, WIDTH, HEIGHT);

        for (var i in stars) {
            stars[i].move();
        }
        for (var i in dots) {
            dots[i].move();
        }
        drawIfMouseMoving();
        requestAnimationFrame(animate);
    }

    document.getElementsByClassName('home_5')[0].onmousemove = function (e) {
        mouseMoving = true;
        mouseX = e.clientX;
        mouseY = e.offsetY;
        clearInterval(mouseMoveChecker);
        mouseMoveChecker = setTimeout(function () {
            mouseMoving = false;
        }, 100);
    }


    function drawIfMouseMoving() {
        if (!mouseMoving) return;

        if (dots.length == 0) {
            dots[0] = new Dot(0, mouseX, mouseY);
            dots[0].draw();
            return;
        }

        var previousDot = getPreviousDot(dots.length, 1);
        var prevX = previousDot.x;
        var prevY = previousDot.y;

        var diffX = Math.abs(prevX - mouseX);
        var diffY = Math.abs(prevY - mouseY);

        if (diffX < dotsMinDist || diffY < dotsMinDist) return;

        var xVariation = Math.random() > .5 ? -1 : 1;
        xVariation = xVariation * Math.floor(Math.random() * maxDistFromCursor) + 1;
        var yVariation = Math.random() > .5 ? -1 : 1;
        yVariation = yVariation * Math.floor(Math.random() * maxDistFromCursor) + 1;
        dots[dots.length] = new Dot(dots.length, mouseX + xVariation, mouseY + yVariation);
        dots[dots.length - 1].draw();
        dots[dots.length - 1].link();
    }
    //setInterval(drawIfMouseMoving, 17);

    function degToRad(deg) {
        return deg * (Math.PI / 180);
    }
</script>
@stop