@extends('layouts.app')

@section('style')
<style>
  body {
  color: #5a5a5a;
}

.swiper {
  width: 100%;
  height: 100%;
  overflow-x:hidden;
}
.swipper-wrapper{
  :first-child{
    margin-bottom: 1rem;
  }
}
.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}
.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: fit;
}

.slick-carousel img {
  width: 100%;
  height: auto;
  object-fit: contain;
  display: block;
  max-height: 100%;
}

.slick-slide {
  display: flex !important;
  justify-content: center;
  align-items: center;
}

.slick-carousel {
  width: 100%;
  max-width: 100%;
  margin: 0 auto;
}
.slick-dots-container {
  position: absolute;
  justify-content: anchor-center;
  bottom: 20px;
}
.slick-dots {
  display: flex !important;
  justify-content: center;
  align-items: center;
  gap: 8px;
  list-style: none;
  padding: 10px 0;
  margin: 0;
}

.slick-dots li {
  margin: 0;
  padding: 0;
}

/* Base dot */
.slick-dots li .custom-dot {
  width: 6px;
  height: 6px;
  background-color: #999;
  border-radius: 50%;
  display: block;
  transition: all 0.3s ease;
}

/* Active dot transforms into a pill/bar */
.slick-dots li.slick-active .custom-dot {
  width: 36px;
  border-radius: 999px;
  background-color: #4caf50;
}
</style>
@endsection

@section('head')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection

@section('content')
<div class="mx-xl-7 mx-lg-12">
  <div class="relative">
    <div id="carouselBanners" class="slick-carousel mb-5">
        <div class="slick-slide active">
          <img src="images/slider_1.png" alt="">
        </div>
        <div class="slick-slide">
          <img src="images/slider_2.png" alt="">
        </div>
        <div class="slick-slide">
          <img src="images/slider_3.png" alt="">
        </div>
      </div>
      <div class="slick-dots-container w-100 d-flex justify-content-center">

      </div>
  </div>
</div>
<div class="mx-lg-7 mx-sm-12">
  <div class="swiper mySwiper" id="locations">
    <div class="swiper-wrapper">
      @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
      @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
      @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
      @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
      @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
    </div>
  </div>

  <div class="my-5"></div>

  <div class="row position-relative border border-danger p-5 border-3 rounded-4" id="hotDeals">
    <div class="position-absolute start-50 w-auto shadow py-3 px-5 bg-body rounded-pill text-align-center" style="top: -40px; margin-left:-156px">
      <div class="d-flex flex-row align-items-center">
        <i class="fas fa-fire me-3"></i>
        <h2>Weekly deals</h2>
      </div>
      
    </div>
    <div class="swiper mySwiper mt-3">
      <div class="swiper-wrapper ">
        @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
        @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
        @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
        @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
        @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
      </div>
    </div>
  </div>

  <div class="my-5"></div>

  <div class="row">
    <div class="col-lg-3">
      <div class="card rounded-4 overflow-hidden h-100 p-5">
        <b>Imported Fruits</b>
        <ul>
          <li>
            <a>950k Fruit basket</a>
          </li>
          <li>
            <a>1000k Fruit basket</a>
          </li>
          <li>
            <a>1050k Fruit basket</a>
          </li>
          <!-- button -->
        </ul>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
        </div>
      </div>
    </div>
  </div>

  <div class="my-5"></div>

  <div class="row">
    <div class="col-lg-9">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card rounded-4 overflow-hidden h-100 p-5">
        <b>Fruit baskets above 900k</b>
        <ul>
          <li>
            <a>950k Fruit basket</a>
          </li>
          <li>
            <a>1000k Fruit basket</a>
          </li>
          <li>
            <a>1050k Fruit basket</a>
          </li>
          <li>
            <a>1100k Fruit basket</a>
          </li>
          <li>
            <a>1150k Fruit basket</a>
          </li>
          <li>
            <a>1200k Fruit basket</a>
          </li>
          <li>
            <a>1300k Fruit basket</a>
          </li>
          <li>
            <a>1400k Fruit basket</a>
          </li>
          <li>
            <a>1500k Fruit basket</a>
          </li>
          <li>
            <a>1600k Fruit basket</a>
          </li>
          <li>
            <a>1800k Fruit basket</a>
          </li>
          <li>
            <a>2000k Fruit basket</a>
          </li>
          <li>
            <a>2500k Fruit basket</a>
          </li>
          <li>
            <a>3000k Fruit basket</a>
          </li>
          <li>
            <a>3500k Fruit basket</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="my-5"></div>

  <div class="row">
    <div class="col-lg-3">
      <div class="card rounded-4 overflow-hidden h-100 p-5">
        <b>Imported Fruits</b>
        <ul>
          <li>
            <a>950k Fruit basket</a>
          </li>
          <li>
            <a>1000k Fruit basket</a>
          </li>
          <li>
            <a>1050k Fruit basket</a>
          </li>
          <!-- button -->
        </ul>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
        </div>
      </div>
    </div>
  </div>

  <div class="my-5"></div>

  <div class="row">
    <div class="col-lg-9">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
          @include('partials.swiperDoubleSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID", 'imgSource2' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body2' => "Renault KWID"])
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card rounded-4 overflow-hidden h-100 p-5">
        <b>Fruit baskets above 900k</b>
        <ul>
          <li>
            <a>950k Fruit basket</a>
          </li>
          <li>
            <a>1000k Fruit basket</a>
          </li>
          <li>
            <a>1050k Fruit basket</a>
          </li>
          <li>
            <a>1100k Fruit basket</a>
          </li>
          <li>
            <a>1150k Fruit basket</a>
          </li>
          <li>
            <a>1200k Fruit basket</a>
          </li>
          <li>
            <a>1300k Fruit basket</a>
          </li>
          <li>
            <a>1400k Fruit basket</a>
          </li>
          <li>
            <a>1500k Fruit basket</a>
          </li>
          <li>
            <a>1600k Fruit basket</a>
          </li>
          <li>
            <a>1800k Fruit basket</a>
          </li>
          <li>
            <a>2000k Fruit basket</a>
          </li>
          <li>
            <a>2500k Fruit basket</a>
          </li>
          <li>
            <a>3000k Fruit basket</a>
          </li>
          <li>
            <a>3500k Fruit basket</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="my-5"></div>
  
</div>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
  });
  $('#carouselBanners').slick({
    adaptiveHeight: true, 
    infinite: true,
    arrows: false,
    autoplay:true,
    autoplaySpeed: 2000,
    dots: true,
    appendDots: $('.slick-dots-container'),
    customPaging: function(slider, i) {
      return '<span class="custom-dot"></span>';
    }
  });
  $(window).on('scroll resize', function() {
    var footer = $('.footer')[0];
    var target = $('.widgets');

    var footerRect = footer.getBoundingClientRect();
    var windowHeight = $(window).height();

    if (footerRect.top < windowHeight && footerRect.bottom > 0) {
      target.addClass('is-show');
    } else {
      target.removeClass('is-show');
    }
  });

  $(document).ready(function() {
    $(window).trigger('scroll');
  })
</script>
@endsection