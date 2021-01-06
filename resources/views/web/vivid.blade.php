@extends('layouts.layout')
@section('content')
  <!-- 中间内容部分 -->
  <div class="about4 gShow">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-xs-12 col-md-10 col-lg-8">
          <div id="certify">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ URL::asset('uploads/images/componyImage1.jpg')}}">
                  <p></p>
                </div>
                <div class="swiper-slide"><img src="{{ URL::asset('uploads/images/componyImage2.jpg')}}">
                  <p></p>
                </div>
                <div class="swiper-slide"><img src="{{ URL::asset('uploads/images/componyImage3.jpg')}}">
                  <p></p>
                </div>
                <div class="swiper-slide"><img src="{{ URL::asset('uploads/images/componyImage4.jpg')}}">
                  <p></p>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


<script>
  var certifySwiper = new Swiper('#certify .swiper-container', {
    watchSlidesProgress: true,
    slidesPerView: 'auto',
    centeredSlides: true,
    loop: true,
    autoplay: true,
    loopedSlides: 5,
    autoplay: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      //clickable :true,
    },
    on: {
      progress: function (progress) {
        for (i = 0; i < this.slides.length; i++) {
          var slide = this.slides.eq(i);
          var slideProgress = this.slides[i].progress;
          modify = 1;
          if (Math.abs(slideProgress) > 1) {
            modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
          }
          translate = slideProgress * modify * 360 + 'px';
          scale = 1 - Math.abs(slideProgress) / 5;
          zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
          slide.transform('translateX(' + translate + ') scale(' + scale + ')');
          slide.css('zIndex', zIndex);
          slide.css('opacity', 1);
          if (Math.abs(slideProgress) > 3) {
            slide.css('opacity', 0);
          }
        }
      },
      setTransition: function (transition) {
        for (var i = 0; i < this.slides.length; i++) {
          var slide = this.slides.eq(i)
          slide.transition(transition);
        }
      }
    }
  })
</script>
@stop
