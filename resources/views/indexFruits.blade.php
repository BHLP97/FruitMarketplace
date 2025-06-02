@extends('layouts.app')

@section('head')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/css/ion.rangeSlider.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/js/ion.rangeSlider.min.js"></script>

  <meta name="price" content="{{ $price }}">
  <meta name="price_min" content="{{ $price_min }}">
  <meta name="price_max" content="{{ $price_max }}">
@endsection

@section('style')
<style>
  .caret-icon {
    width: 1rem;
    align-content: center;
  }
  .sub-categories li {
    margin: 10px 0;
  }
  a,.text-link {
    color: #000;
    text-decoration: none;
    background: transparent
  }
</style>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="sidebar d-flex flex-column gap-3 col-lg-3 col-md-12 col-sm-12 col-12">
      <div class="card">
        <div class="card-header bg-custom-success text-white">
          Product Categories
        </div>
        <div class="card-body">
          <ul class="navbar gap-2">
            <li class="nav-item flex-fill">
              <div class="d-flex justify-content-between">
                <a href="/fruits?type=imported">Imported fruits</a>
                <span class="caret-icon fa fa-plus" data-bs-toggle="collapse" href="#collapseImportedFruits" aria-expanded="false" aria-controls="collapseImportedFruits"></span>
              </div>
              <ul class="sub-categories collapse" id="collapseImportedFruits">
                <li>
                  <a href="/fruits?type=apples">Apples</a>
                </li>
                <li>
                  <a href="/fruits?type=grapes">Grapes</a>
                </li>
                <li>
                  <a href="/fruits?type=persimmons">Persimmons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item flex-fill">
              <div class="d-flex justify-content-between">
                <a href="/fruits?type=baskets&price_max=600">300k-600k Baskets</a>
                <span class="caret-icon fa fa-plus" data-bs-toggle="collapse" href="#collapseFruitBaskets300600" aria-expanded="false" aria-controls="collapseFruitBaskets300600"></span>
              </div>
              <ul class="sub-categories collapse" id="collapseFruitBaskets300600">
                <li>
                  <a href="/fruits?type=baskets&price=300" title="300k Fruit Baskets" class="a3">300k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=350" title="350k Fruit Baskets" class="a3">350k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=400" title="400k Fruit Baskets" class="a3">400k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=450" title="450k Fruit Baskets" class="a3">450k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=500" title="500k Fruit Baskets" class="a3">500k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=550" title="550k Fruit Baskets" class="a3">550k Fruit Baskets</a>
                </li>
              </ul>
            </li>
            <li class="nav-item flex-fill">
              <div class="d-flex justify-content-between">
                <a href="/fruits?type=baskets&price_min=600&price_max=900">600k-900k Baskets</a>
                <span class="caret-icon fa fa-plus" data-bs-toggle="collapse" href="#collapseFruitBaskets600900" aria-expanded="false" aria-controls="collapseFruitBaskets600900"></span>
              </div>
              <ul class="sub-categories collapse" id="collapseFruitBaskets600900">
                <li>
                  <a href="/fruits?type=baskets&price=600" title="600k Fruit Baskets" class="a3">600k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=650" title="650k Fruit Baskets" class="a3">650k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=700" title="700k Fruit Baskets" class="a3">700k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=750" title="750k Fruit Baskets" class="a3">750k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=800" title="800k Fruit Baskets" class="a3">800k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=850" title="850k Fruit Baskets" class="a3">850k Fruit Baskets</a>
                </li>
              </ul>
            </li>
            <li class="nav-item flex-fill">
              <div class="d-flex justify-content-between">
                <a href="/fruits?type=baskets&price_min=900">900k and above Baskets</a>
                <span class="caret-icon fa fa-plus" data-bs-toggle="collapse" href="#collapseFruitBaskets900" aria-expanded="false" aria-controls="collapseFruitBaskets900"></span>
              </div>
              <ul class="sub-categories collapse" id="collapseFruitBaskets900">
                <li>
                  <a href="/fruits?type=baskets&price=900" title="900k Fruit Baskets" class="a3">900k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=1000" title="1000k Fruit Baskets" class="a3">1000k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=1200" title="1200k Fruit Baskets" class="a3">1200k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=1400" title="1400k Fruit Baskets" class="a3">1400k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=1600" title="1600k Fruit Baskets" class="a3">1600k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=1800" title="1800k Fruit Baskets" class="a3">1800k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=2000" title="2000k Fruit Baskets" class="a3">2000k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=2500" title="2500k Fruit Baskets" class="a3">2500k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=3000" title="3000k Fruit Baskets" class="a3">3000k Fruit Baskets</a>
                </li>
                <li>
                  <a href="/fruits?type=baskets&price=3500" title="3500k Fruit Baskets" class="a3">3500k Fruit Baskets</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-header bg-custom-success text-white">
          Sort products
        </div>
        <div class="card-body d-flex flex-column gap-2">
          <div class="border-bottom mt-2">
            By name
          </div>
          <div>
            <a href="javascript:void(0)">
              <input type="radio" name="sort-method" value="" checked/>
              From A to Z
            </a>
          </div>
          <div>
            <a href="javascript:void(0)">
              <input type="radio" name="sort-method" value=""/>
              From Z to A
            </a>
          </div>
          <div class="border-bottom mt-3">
            By pricing
          </div>
          <div>
            <a href="javascript:void(0)">
              <input type="radio" name="sort-method" value=""/>
              Lowest to Highest
            </a>
          </div>
          <div>
            <a href="javascript:void(0)">
              <input type="radio" name="sort-method" value=""/>
              Highest to Lowest
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="fruit-baskets col-lg-9 col-md-12 col-sm-12 col-12">
      <div class="text-center">
        Price range (in VND)
      </div>
      <div data-role="main" class="ui-content border-bottom mb-3">
        <form method="post" action="/action_page_post.php">
          <input type="text" id="range" name="range" />
        </form>
      </div>
      <div class="fruit-basket-list">
        <div class="row">
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
          <div class="col-4">
            @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script>
    $("#range").ionRangeSlider({
      type: "double",
      min: 300,
      max: 3500,
      from: $('meta[name="price"]').attr('content') || $('meta[name="price_min"]').attr('content') || 300,
      to: $('meta[name="price"]').attr('content') || $('meta[name="price_max"]').attr('content') || 3500,
      step: 100,
      grid: true,
      grid_snap: true,
      from_fixed: false,  // fix position of FROM handle
      to_fixed: false,   // fix position of TO handle
      postfix: "k"
    });
    $(".caret-icon").on('click', function(){
      $(this).toggleClass('fa-plus fa-minus');
    });
  </script> 
@endsection

