@extends('layouts.app')

@section('style')
<style>
  body {
  color: #5a5a5a;
}

.card-img {
  overflow: hidden;
  transition: transform .5s ease;
  :hover{
    transform: scale(1.5);
  }  
}

.swiper {
  width: 100%;
  height: 100%;
  overflow-x:hidden;
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


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */

/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
</style>
@endsection

@section('content')
<div class="mx-7">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="images/slider_1.png" alt=""></svg>

        <div class="container">
          <div class="carousel-caption text-start">

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="images/slider_2.png" alt=""></svg>

        <div class="container">
          <div class="carousel-caption">

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="images/slider_3.png" alt=""></svg>

        <div class="container">
          <div class="carousel-caption text-end">

          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="locations">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide mb-3">
          <div class="card shadow-sm border-0">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card shadow-sm border-0">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card shadow-sm border-0">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card shadow-sm border-0">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card shadow-sm border-0">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="my-5"></div>
  <div class="row">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card rounded-4 overflow-hidden">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card rounded-4 overflow-hidden">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card rounded-4 overflow-hidden">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card rounded-4 overflow-hidden">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card rounded-4 overflow-hidden">
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
            <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
            <div class="card-body">
              <h5>Renault KWID</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="my-5"></div>
  <div class="row">
    <div class="col-lg-9">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card rounded-4 overflow-hidden">
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card rounded-4 overflow-hidden">
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card rounded-4 overflow-hidden">
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card rounded-4 overflow-hidden">
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card rounded-4 overflow-hidden">
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
              <div class="card-img"><img src="https://img.gaadicdn.com/images/carexteriorimages/upcoming/360x240/Jeep/Jeep-Renegade/047.jpg"></div>
              <div class="card-body">
                <h5>Renault KWID</h5>
              </div>
            </div>
          </div>
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
  <div class="my-5"></div>
  <div class="my-5"></div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  </div><!-- /.container -->
</div>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
  });
</script>
@endsection