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
    <link href="{{URL::asset('css/certify.css')}}" rel="stylesheet">
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
                <a class="navbar-brand" href="/">
                    <img src="{{ URL::asset('uploads/images/nav_logo.png')}}"/>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class="@if(empty(request('s')))active @else''@endif"><a href="/">首页<span class="sr-only"></span></a></li>
                    @foreach ($nav as  $n)
                    <li class=" leftTabs @if(request('pid')==$n['id'])active @else''@endif">
                        {{--<a class="pc" href="{{$n['url']."/".$n['id']}}">{{$n['cate_name']}}</a>--}}
                        <a class="pc" href="javascript:;">{{$n['cate_name']}}</a>
                        <a class="wap" href="javascript:void(0);">{{$n['cate_name']}}</a>
                        <div class="hdgShow clearfix">
                            <div class="list">
                                @if (array_key_exists('children',$n))
                                    @foreach ($n['children'] as $c)
                                        {{--<a href="{{$c['url']."/".$c['id']}}">{{$c['cate_name']}}</a>--}}
                                        <a href="{{route($c['url'],array('id'=>$c['id'],'pid'=>$n['id']))}}">{{$c['cate_name']}}</a>
                                    @endforeach
                                @else

                                @endif

                            </div>
                            <div class="scaleImg">
                                <img src>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <span class="sliderbar"></span>
                </ul>
            </div>
        </div>
    </nav>




    <a class="banner">
        <img src="{{ URL::asset('uploads/images/1569551093178270.jpeg')}}" alt>
        <div class="tit">
            <p>- 走进天质 -</p>
            <p>坚定“科技兴农责无旁贷”的信念，齐心汇智，打造世界一流“绿色食品牌”</p>
        </div>
    </a>



    @if(request('s'))
    <ul class="tabs clearfix">

        @foreach ($childNav as  $c)
        <li class="pnav @if(request('id')==$c['id'])active @else''@endif"><a href="{{route($c['url'],array('id'=>$c['id'],'pid'=>request('pid')))}}">{{$c['cate_name']}}</a><span>/</span></li>
        @endforeach
    </ul>
    @else
    @endif
    @if(request('s'))
    <div class="crumbs container-fluid">
        <div class="row">
            <div class="col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8">
                <img src="{{ URL::asset('uploads/images/header_03.png')}}" alt>
                <a href="/">首页</a> >>
                <a href="javascript:;">{{$current['parent']}}</a> >>
                <a href="{{route(request('s'),array('id'=>$c['id'],'pid'=>request('pid')))}}">{{$current['child']}}</a>
            </div>
        </div>
    </div>
    @else
    @endif
</header>
@yield('content')
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-md-10 col-lg-8 fContent">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-lg-8 clearfix left">
                        @foreach ($nav as  $n)
                        <ul class="pull-left">

                                <li><a href="javascript:;">{{$n['cate_name']}}</a></li>
                            @if (array_key_exists('children',$n))
                                @foreach ($n['children'] as $c)
                                    <li><a href="{{route($c['url'],array('id'=>$c['id'],'pid'=>$n['id']))}}">{{$c['cate_name']}}</a></li>
                                @endforeach
                            @else

                            @endif

                        </ul>
                        @endforeach
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4 right clearfix">
                        <div class="code pull-left">

                            <img src="{{ URL::asset('uploads/images/1570760717726426.jpeg')}}" alt>

                            手机官网
                        </div>
                        <div class="code pull-left">

                            <img src="{{ URL::asset('uploads/images/1570760779191264.jpeg')}}" alt>

                            微信公众号
                        </div>
                        <div class="clearfix"></div>
                        <p>
                            <img src="{{ URL::asset('uploads/images/footer_02.png')}}" alt>
                            公司地址：云南省昆明市盘龙区北京路与白云路交叉口西南角心景假日大厦21层2112室
                        </p>
                        <p>
                            <img src="{{ URL::asset('uploads/images/footer_03.png')}}" alt>
                            热线：<a href="tel:+86 731 8873 0808">0871-65636003</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-md-12 col-lg-12 record">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12 text-center">
                        ©2020 云南天质弘耕科技有限公司版权所有
                        <a href="https://beian.miit.gov.cn/" target="_blank">备案号：滇公网安备53010302000732号</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>