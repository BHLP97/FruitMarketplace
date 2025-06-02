<nav class="navbar navbar-expand-md navbar-light py-4" style="background-color:#3ba66b">
  <div class="container">
    <div class="row align-items-center">
        
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav gap-3 me-auto">
        <a class="nav-link text-white" href="#" role="button">
          {{  __('Homepage') }}
        </a>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{  __('Products') }}
          </a>
          <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"
              onclick="event.preventDefault();">
              {{ __('Imported fruits') }}
            </a>
            <a class="dropdown-item" href="#"
              onclick="event.preventDefault();">
              {{ __('300k - 650k Fruit Basket') }}
            </a>
            <a class="dropdown-item" href="#"
              onclick="event.preventDefault();">
              {{ __('700k - 900k Fruit Basket') }}
            </a>
            <a class="dropdown-item" href="#"
              onclick="event.preventDefault();">
              {{ __('900k and up Fruit Basket') }}
            </a>
            <a class="dropdown-item" href="#"
              onclick="event.preventDefault();">
              {{ __('Dried fruits and nutritional seeds') }}
            </a>
          </div>
        </li>
        <a class="nav-link text-white" href="#" role="button">
          {{  __('About us') }}
        </a>
        <a class="nav-link text-white" href="#" role="button">
          {{  __('Blog') }}
        </a>
        <a class="nav-link text-white" href="#" role="button">
          {{  __('Contact info') }}
        </a>
      </ul>
      <div class="navbar-nav logo col-xl-2 col-lg-3 col-md-3">
        <img src="{{asset('images/logo.png')}}" alt="">
      </div>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav gap-2 ms-auto align-items-center">
        <li class="nav-item nav-link navbar">
          <form class="form-inline d-flex flex-row">
            <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            <div class="bg-warning rounded-circle position-absolute end-0 p-2">
              <i class="fa-solid fa-magnifying-glass text-white"></i>
            </div>
          </form>
        </li>
        <i class="nav-item nav-link fa fa-heart text-white" aria-hidden="false"></i>
        <i class="nav-item nav-link fa fa-shopping-bag text-white" aria-hidden="false" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
        
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fa fa-user-circle text-white" aria-hidden="false"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            @guest
              @if (Route::has('login'))
                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
              @endif
              @if (Route::has('register'))
                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif
            @else
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
            @endguest
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>