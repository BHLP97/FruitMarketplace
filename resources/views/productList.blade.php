@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="sidebar col-lg-3 col-md-12 col-sm-12 col-12">
            
        </div>
        <div class="fruit-baskets col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="fruit-basket-filter">

            </div>
            <div class="fruit-basket-list">
                @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
                @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
                @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
                @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
                @include('partials.swiperSlide', ['imgSource' => "https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg", 'body' => "Renault KWID"])
            </div>
        </div>
    </div>
</div>
@endsection