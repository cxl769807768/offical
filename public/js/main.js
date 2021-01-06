window.onload = function () {
    //图片放大
    //荣誉资质
    jQuery(document).ready(function ($) {
        $('.lightbox').lightbox();
    });
    // 可视区域动画
    show();
    //当前位置距离网页顶部的距离
    var windowTop = $(window).scrollTop();
    if (windowTop > 50) {
        $('header .navbar').addClass('navbar-two');
    } else {
        $('header .navbar').removeClass('navbar-two');
    }
    $(window).scroll(function () {
        // 获取的是浏览器可见区域高度（网页的可视区域的高度）（不滚动的情况下）
        show();
        //当前位置距离网页顶部的距离
        var windowTop = $(window).scrollTop();
        if (windowTop > 50) {
            $('header .navbar').addClass('navbar-two');
        } else {
            $('header .navbar').removeClass('navbar-two');
        }
    });
    function show () {
        var documentClientHeight = document.documentElement.clientHeight || window.innerHeight
        // 元素顶端到可见区域（网页）顶端的距离
        var htmlList = $(".gShow");
        var hdList = $(".hdgShow");
        var topList = $(".topShow");
        for (var i = 0; i < topList.length; i++) {
            var htmlElementClientTop = $(topList[i]).get(0).getBoundingClientRect().top;
            // 网页指定元素进入可视区域
            if (documentClientHeight >= htmlElementClientTop) {
                $(topList[i]).css('animation-name', 'topmove');
                $(topList[i]).css('-webkit-animation-name', 'topmove');
                $(topList[i]).css('opacity', '1');
            }
        }
        for (var i = 0; i < htmlList.length; i++) {
            var htmlElementClientTop = $(htmlList[i]).get(0).getBoundingClientRect().top;
            // 网页指定元素进入可视区域
            if (documentClientHeight >= htmlElementClientTop) {
                $(htmlList[i]).css('animation-name', 'mymove');
                $(htmlList[i]).css('-webkit-animation-name', 'mymove');
                $(htmlList[i]).css('opacity', '1');
            }
        }
        for (var i = 0; i < hdList.length; i++) {
            var htmlElementClientTop = $(hdList[i]).get(0).getBoundingClientRect().top;
            // 网页指定元素进入可视区域
            if (documentClientHeight >= htmlElementClientTop) {
                $(hdList[i]).css('animation-name', 'hdMymove');
                $(hdList[i]).css('-webkit-animation-name', 'hdMymove');
                $(hdList[i]).css('opacity', '1');
            }
        }
    }
    // 首页轮播
    var mySwiper0 = new Swiper('#banner', {
        autoplay: true,//可选选项，自动滑动
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    var mySwiper1 = new Swiper('#mobilebanner', {
        autoplay: true,//可选选项，自动滑动
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    var mySwiper2 = new Swiper('#banner_02', {
        autoplay: true,//可选选项，自动滑动
        pagination: {
            el: '.swiper-pagination',
        },
    })
    var mySwiper3 = new Swiper('#brand', {
        autoplay: true,//可选选项，自动滑动
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
    // 轮播内容居中
    var slideW1 = $('.home .home_4 .swiper-slide').width();
    var sInfoW = $('.home .home_4 .swiper-slide .info').width();
    var slideH1 = $('.home .home_4 .swiper-slide').height();
    var sInfoH = $('.home .home_4 .swiper-slide .info').height();
    $('.home .home_4 .swiper-slide .info').css('left', (slideW1 - sInfoW) / 2 + 'px');
    $('.home .home_4 .swiper-slide .info').css('top', (slideH1 - sInfoH) / 2 + 'px');

    var banner1 = $("header .banner").height();
    var bannerInfo1 = $("header .banner>div").height();
    $("header .banner>div").css('top', (banner1 - bannerInfo1) / 2 + 'px');
    // 新闻列表文案居中
    var newTitW1 = $('.news .list>.clearfix>img').width();
    $('.news .list>.clearfix>img').height(newTitW1 * 0.746);
    if (newTitW1 * 0.746 > 102) {
        $('.news .list>.clearfix>div').css('padding-top', (newTitW1 * 0.746 - 102) / 2 + 'px');
    }
    //走进力宇视频默认静音
    if ($(".contentinfo_241 video").length > 0) {
        $(".contentinfo_241 video")[0].muted = true;
    }
    //走进力宇形象宣传视频比例
    var aboutIframeW = $(".about iframe").width();
    $(".about iframe").height(aboutIframeW * 0.556);
    $(window).resize(function () {
        //走进力宇形象宣传视频比例
        var aboutIframeW = $(".about iframe").width();
        $(".about iframe").height(aboutIframeW * 0.556);
        // 轮播内容居中
        var slideW1 = $('.home .home_4 .swiper-slide').width();
        var sInfoW = $('.home .home_4 .swiper-slide .info').width();
        var slideH1 = $('.home .home_4 .swiper-slide').height();
        var sInfoH = $('.home .home_4 .swiper-slide .info').height();
        $('.home .home_4 .swiper-slide .info').css('left', (slideW1 - sInfoW) / 2 + 'px');
        $('.home .home_4 .swiper-slide .info').css('top', (slideH1 - sInfoH) / 2 + 'px');

        var banner1 = $("header .banner").height();
        var bannerInfo1 = $("header .banner>div").height();
        $("header .banner>div").css('top', (banner1 - bannerInfo1) / 2 + 'px');
        // 新闻列表文案居中
        var newTitW1 = $('.news .list>.clearfix>img').width();
        $('.news .list>.clearfix>img').height(newTitW1 * 0.746);
        if (newTitW1 * 0.746 > 102) {
            $('.news .list>.clearfix>div').css('padding-top', (newTitW1 * 0.746 - 102) / 2 + 'px');
        }
    });
    // contact3 展示岗位详情
    $(document).on('click', '.contact3 .postNeed li p:nth-child(2) img', function () {
        var tType = $(this).attr('data-type');
        if (tType != 1) {
            $(this).attr('data-type', 1);
            $(this).parents('li').find('.info').css('display', 'block');
            var infoH = 10;
            $(this).parents('li').find('.info').css('height', infoH + 'px');
            var that = this;
            var timer = window.setInterval(function () {
                if (infoH > 300) {
                    $(that).parents('li').find('.info').css('height', '100%');
                    window.clearInterval(timer);
                } else {
                    infoH = infoH + 20;
                    $(that).parents('li').find('.info').css('height', infoH + 'px');
                }
            }, 10);
        } else {
            $(this).attr('data-type', 0);
            var infoH = $(this).parents('li').find('.info').height();
            var that = this;
            var timer = window.setInterval(function () {
                if (infoH < 50) {
                    $(that).parents('li').find('.info').css('display', 'none');
                    window.clearInterval(timer);
                } else {
                    infoH = infoH - 20;
                    $(that).parents('li').find('.info').css('height', infoH + 'px');
                }
            }, 10);
        }
    });
    // contact3 申请岗位框
    $(document).on('click', '.contact3 .postNeed li .info .email a', function () {
        $('.contact3 .applyForm').css('display', 'block');
    });
    $(document).on('click', '.contact3 .applyForm .form .close', function () {
        $('.contact3 .applyForm').css('display', 'none');
    });
    // productInfo
    // 轮播图
    var thumbsSwiper = new Swiper('#thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        watchSlidesVisibility: true,/*避免出现bug*/
    })
    var gallerySwiper = new Swiper('#gallery', {
        spaceBetween: 10,
        thumbs: {
            swiper: thumbsSwiper,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    // index 产品中心
    // $(document).on('click', '.home .home_3 .tabs .tit a', function () {
    //     var tid = $(this).attr('data-id');
    //     var ulL = $('.home .home_3 .tabs .tit a');
    //     for (var i = 0; i < ulL.length; i++) {
    //         if (tid == $(ulL[i]).attr('data-id')) {
    //             $('.home .home_3 .tabs .info #cls' + tid).css('display', 'block');
    //             $(ulL[i]).addClass('active');
    //         } else {
    //             $('.home .home_3 .tabs .info #cls' + $(ulL[i]).attr('data-id')).css('display', 'none');
    //             $(ulL[i]).removeClass('active');
    //         }
    //     }
    // });
    // $(document).on('click', '.home .home_3 .tabs .info ul li .mode', function () {
    //     var tid = $(this).attr('data-id');
    //     var listId = $('.home .home_3 .tabs .info ul li');
    //     var arr = [];
    //     for (var i = 0; i < listId.length; i++) {
    //         if (tid == $(listId[i]).find('a').attr('data-id')) {
    //             $('.home .home_3 .tabs .info .cls' + tid).css('display', 'block');
    //             $(listId[i]).find('a').addClass('active');
    //         } else {
    //             $('.home .home_3 .tabs .info .cls' + $(listId[i]).find('a').attr('data-id')).css('display', 'none');
    //             $(listId[i]).find('a').removeClass('active');
    //         }
    //     }
    // });
    // index 新闻资讯
    $(document).on('click', '.home .home_2 .tabs a', function () {
        var tid = $(this).attr('data-type');
        var l = $('.home .home_2 .tabs a');
        for (i = 0; i < l.length; i++) {
            if (tid == $(l[i]).attr('data-type')) {
                $(l[i]).addClass('active');
                $('.home .home_2 #row' + tid).css('display', 'block');
            } else {
                $(l[i]).removeClass('active');
                $('.home .home_2 #row' + $(l[i]).attr('data-type')).css('display', 'none');
            }
        }
    });
    // 发展历程
    var about3UlW = $('.about3 .about3_1 .info').width();
    var about3List = $('.about3 .about3_1 ul li');
    for (var i = 0; i < about3List.length; i++) {
        $(about3List[i]).css('left', (i * 200) + 'px');
    }
    $(document).on('click', '.about3 .about3_1 .left', function () {
        var left = $('.about3 .about3_1 ul').css('left');
        left = parseFloat(left);
        if (left < 0) {
            left = left + 200;
            $('.about3 .about3_1 ul').css('left', left + 'px');
        } else {
            $('.about3 .about3_1 ul').css('left', '-' + (about3List.length * (200) - about3UlW) + 'px');
        }
    });
    $(document).on('click', '.about3 .about3_1 .right', function () {
        var left = $('.about3 .about3_1 ul').css('left');
        left = parseFloat(left);
        var maxLeft = about3List.length * 200 - $('.about3 .about3_1 .info').width();
        if (left > -maxLeft) {
            left = left - 200;
            $('.about3 .about3_1 ul').css('left', left + 'px');
        } else {
            $('.about3 .about3_1 ul').css('left', '0px');
        }
    });
    //首页弹框关闭
    $(document).on('click', '.home .eMode .close', function () {
        $(this).parents(".eMode").css("display", "none");
    });
    $(window).resize(function () {
        var about3UlW = $('.about3 .about3_1 .info').width();
        var about3List = $('.about3 .about3_1 ul li');
        for (var i = 0; i < about3List.length; i++) {
            $(about3List[i]).css('left', (i * 200) + 'px');
        }
    });
    var commonProblemTable = $('.commonProblem table tr');
    for (var k = 0; k < commonProblemTable.length; k++) {
        var tdList = $(commonProblemTable[k]).find('td');
        if (tdList.length == 1 || tdList.length == 3) {
            $(tdList[0]).css('font-weight', 'bold');
        }
    }
    //头部导航下划线
    hdLine();
    function hdLine () {
        var tActive = $("header .navbar .navbar-collapse ul:first-child .active");
        $("header .navbar .navbar-collapse ul:first-child .sliderbar").width(tActive.width());
        $("header .navbar .navbar-collapse ul:first-child .sliderbar").css("left", tActive.position().left + 'px');
        $("header .navbar .navbar-collapse ul:first-child li").mouseover(function () {
            var tWidth = $(this).width();
            $(this).parents("ul").find(".sliderbar").width(tWidth);
            $(this).parents("ul").find(".sliderbar").css("left", $(this).position().left + 'px');
        });
        $("header .navbar .navbar-collapse ul:first-child li").mouseout(function () {
            var tWidth = $(this).parents("ul").find(".active").width();
            $(this).parents("ul").find(".sliderbar").width(tWidth);
            $(this).parents("ul").find(".sliderbar").css("left", $(this).parents("ul").find(".active").position().left + 'px');
        });
    }
    //首页我们的优势跳转
    $(document).on('click', '.home .home_1>.row .mode>div', function () {
        var tType = $(this).attr('data-type');
        window.location.href = "/?pages_7#companyName" + tType;
    });
}