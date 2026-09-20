@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/community.webp') }});">
      <div class="container position-relative">
        <h1>Trade Community Feed</h1>
        <p>Engage in a Trade Community Feed to Share Updates and Market News.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Trade Community Feed</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          @include('public.includes.services-sidebar')

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/img/services/community.webp') }}" alt="" class="img-fluid services-img">
            <h3>Engage in a Trade Community Feed to Share Updates and Market News</h3>
            <p>
              OmeHub includes a dedicated trade community feed where users can share daily updates, industry news, and shipping insights. Whether you're a shipper, freight provider, or trade partner, this space helps you stay connected with others in the logistics world.
            </p>
            <p>
              Each company or individual can post once a day to share market trends, route updates, or helpful tips. Others can like and comment, making it easy to exchange knowledge and grow your network. The feed is moderated to keep posts professional and focused on global trade. It’s a space for learning, visibility, and real-time updates—all within the platform.
            </p>
            <p>
                Stay informed. Share your voice. Build trust through conversation.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
