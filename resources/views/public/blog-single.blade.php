@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/quote-and-book.webp') }});">
      <div class="container position-relative">
        <h1>{{ $post->title }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li><a href="{{ route( 'blog') }}">Blog</a></li>
            <li class="current">{{ $post->title }}</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <h3>{{ $post->title }}</h3>
                {!! $post->body !!}
            </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
