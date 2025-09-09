<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ config('app.name') }} | @yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo-horizontal.png') }}" alt="logo" class="img-fluid" width="150">
        {{-- <h1 class="sitename">{{ config('app.name') }}</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home<br></a></li>
          <li><a href="{{ route('about') }}" class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a></li>
          <li><a href="{{ route('stakeholders') }}" class="{{ Route::currentRouteName() == 'stakeholders' ? 'active' : '' }}">Our Stakeholders</a></li>
          <li class="dropdown">
            <a href="#" class="{{ Route::currentRouteName() == 'bulletin' ? 'active' : '' }}"><span>Our Bulletin</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('bulletin', ['loc' => 'ads']) }}">Ads</a></li>
              <li><a href="{{ route('bulletin', ['loc' => 'blog']) }}">Blog</a></li>
            </ul>
          </li>
          <li><a href="{{ route('contact') }}" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @auth
        <a class="btn-getstarted" href="{{ route(auth()->user()->dashboard()) }}">Dashboard</a>
      @else
        <a class="btn-getstarted" href="{{ route('register') }}">Sign Up</a>
        <a class="ct-btn" href="{{ route('login') }}">Sign In</a>
      @endauth
    </div>
  </header>

  @yield('content')

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">
                <img src="{{ asset('assets/img/logo-horizontal.png') }}" alt="logo" class="img-fluid" width="150">
            </span>
          </a>
          <p>We have a vision to become the world’s most trusted digital gateway for international trade, where logistics, finance, compliance, and sustainability converge — simply and seamlessly.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://tiktok.com/@omefreight" target="_blank"><i class="bi bi-tiktok"></i></a>
            <a href="https://facebook.com/share/1Aue653uWW" target="_blank" noreferrer><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/ome.freight" target="_blank" noreferrer><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin.com/company/omefreight" target="_blank"><i class="bi bi-linkedin" noreferrer></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About us</a></li>
            <li><a href="{{ route('stakeholders') }}">Our Stakeholders</a></li>
            <li><a href="{{ route('bulletin', ['loc' => 'ads']) }}">Ads</a></li>
            <li><a href="{{ route('bulletin', ['loc' => 'blog']) }}">Blog</a></li>
            <li><a href="{{ route('terms') }}">Terms of service</a></li>
            <li><a href="{{ route('privacy') }}">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="{{ route('service', ['service' => 'book-freight']) }}">Quote & Book Freight</a></li>
            <li><a href="{{ route('service', ['service' => 'track-shipment']) }}">Track Shipment</a></li>
            <li><a href="{{ route('service', ['service' => 'trade-finance']) }}">Trade Finance</a></li>
            <li><a href="{{ route('service', ['service' => 'access-insurance']) }}">Access Insurance</a></li>
            <li><a href="{{ route('service', ['service' => 'resolve-disputes']) }}">Resolve Disputes & Claims</a></li>
            <li><a href="{{ route('service', ['service' => 'offset-carbon-emission']) }}">Offset CO₂ Emissions</a></li>
            <li><a href="{{ route('service', ['service' => 'community-feed']) }}">Community Feed</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <div class="mb-4">
              <p>Unity warehouse, Toyota Bus Stop, Ladipo Mushin,</p>
              <p>Lagos, Nigeria.</p>
          </div>
          <div class="mb-4">
              <p>Zone C New Market Express,</p>
              <p>Enugu, Nigeria.</p>
          </div>
          {{-- <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p> --}}
          <p><strong>Email:</strong> <span>support@omefreight.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>
        &copy; {{ date('Y') }} <strong>{{ config('app.name') }}</strong>. All rights reserved.
        <span>Powered by
            <a href="https://omefreight.com" target="_blank" class="text-decoration-none fw-semibold">
                OmeFreight
            </a>
        </span>
      </p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
