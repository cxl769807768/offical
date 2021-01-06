<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>{{$webData['title']}}</title>
    <meta name="keywords" content="{{$webData['keywords']}}}">
    <meta name="description" content="{{$webData['description']}}}">
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/jquery.lightbox.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
    <script src="{{ URL::asset('//cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.lightbox.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
</head>

<body>
<header class="componentIntroduction">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    logo
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">首页 <span class="sr-only"></span></a></li>

                    <li class=" leftTabs active">
                        <a class="pc" href="companyIntroduction.html">走进天质</a>
                        <a class="wap" href="javascript:void(0);">走进天质</a>
                        <div class="hdgShow clearfix">
                            <div class="list">

                                <a href="companyIntroduction.html">公司简介</a>

                                <a href="developmentCourse.html">发展历程</a>

                                <a href="companyCulture.html">企业文化</a>

                                <a href="honoraryCertificate.html">荣誉资质</a>

                                <a href="companyImage.html">公司形象</a>

                                <a href="ImagePromotion.html">形象宣传</a>

                            </div>
                            <div class="scaleImg">
                                <img src>
                            </div>
                        </div>
                    </li>

                    <li class=" leftTabs">
                        <a class="pc" href="companyNews.html">新闻中心</a>
                        <a class="wap" href="javascript:void(0);">新闻中心</a>
                        <div class="hdgShow clearfix">
                            <div class="list">
                                <a href="companyNews.html">公司新闻</a>
                                <a href="companyNews.html">行业新闻</a>
                            </div>
                            <div class="scaleImg">
                                <img src>
                            </div>
                        </div>
                    </li>

                    <li class=" leftTabs">
                        <a class="pc" href="productCenter.html">产品中心</a>
                        <a class="wap" href="javascript:void(0);">产品中心</a>
                        <div class="hdgShow clearfix">
                            <div class="list">

                                <a href="productCenter.html">产品汇总</a>

                                <a href="">专利证书</a>

                                <a href="">科研成果</a>

                            </div>
                            <div class="scaleImg">
                                <img src>
                            </div>
                        </div>
                    </li>

                    <li class=" leftTabs">
                        <a class="pc" href="">解决方案</a>
                        <a class="wap" href="javascript:void(0);">解决方案</a>
                        <div class="hdgShow clearfix">
                            <div class="list">

                                <a href="">应用场景</a>

                                <a href="">案例介绍</a>

                                <a href="">合作伙伴</a>
                            </div>
                            <div class="scaleImg">
                                <img src>
                            </div>
                        </div>
                    </li>

                    <li class=" leftTabs">
                        <a class="pc" href="">服务支持</a>
                        <a class="wap" href="javascript:void(0);">服务支持</a>
                        <div class="hdgShow clearfix">
                            <div class="list">

                                <a href="">技术支持</a>

                                <a href="">售后服务</a>
                            </div>
                            <div class="scaleImg">
                                <img src>
                            </div>
                        </div>
                    </li>

                    <li class=" leftTabs">
                        <a class="pc" href="">联系我们</a>
                        <a class="wap" href="javascript:void(0);">联系我们</a>
                        <div class="hdgShow clearfix">
                            <div class="list">

                                <a href="">加入我们</a>

                                <a href="">联系我们</a>

                            </div>
                            <div class="scaleImg">
                                <img src>
                            </div>
                        </div>
                    </li>

                    <span class="sliderbar"></span>
                </ul>
            </div>
        </div>
    </nav>




    <a class="banner">
        <img src="images/1569551093178270.jpeg" alt>
        <div class="tit">
            <p>- 走进天质 -</p>
            <p>坚定“科技兴农责无旁贷”的信念，齐心汇智，打造世界一流“绿色食品牌”</p>
        </div>
    </a>




    <ul class="tabs clearfix">

        <li class="pnav active"><a href="joinus.blade.php">加入我们</a><span>/</span></li>

        <li class="pnav"><a href="">联系我们</a><span>/</span></li>

    </ul>

    <div class="crumbs container-fluid">
        <div class="row">
            <div class="col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8">
                <img src="images/header_03.png" alt>
                <a href="index.html">首页</a> >> <a href="companyIntroduction.html">走进天质</a> >> <a
                        href="developmentCourse.html">发展历程</a>
            </div>
        </div>
    </div>
</header>