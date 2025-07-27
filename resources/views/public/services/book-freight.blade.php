@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/quote-and-book.webp') }});">
      <div class="container position-relative">
        <h1>Quote & Book Freight</h1>
        <p>Quote and Book Freight from Verified Logistics Providers Worldwide.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Quote & Book Freight</li>
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
            <img src="{{ asset('assets/img/services/quote-and-book.webp') }}" alt="" class="img-fluid services-img">
            <h3>Simplify the Way You Ship</h3>
            <p>
              Shipping cargo whether across borders or locally can often feel overwhelming. Between negotiating rates, managing documentation, and trying to find a reliable logistics partner, things can quickly get complicated. {{ config('app.name') }} was built to change that. With our platform, users can easily get freight quotes and book shipments from trusted logistics providers all over the world, in just a few clicks. No more chasing emails or waiting days for pricing confirmations. Everything happens in real time, and all options are laid out clearly for you to choose what works best for your shipment.
            </p>
            <h3>Trusted Partners, Instant Access</h3>
            <p>
              {{ config('app.name') }} connects you to a global network of thoroughly verified logistics providers. Whether you’re shipping by air, sea, road, or rail, you can rely on competitive, transparent freight quotes tailored to your needs.Just input your pick-up and delivery details, cargo info, and weight or volume. In moments, you'll see real-time offers from trusted carriers complete with pricing, delivery times, reviews, and extras like eco-friendly options.From booking to documentation, insurance, and support, the entire shipment process flows in one smooth, secure experience. {{ config('app.name') }} replaces the old back-and-forth with clarity, speed, and confidence making shipping smarter and more reliable.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
