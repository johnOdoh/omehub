@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/access-insurance.webp') }});">
      <div class="container position-relative">
        <h1>Access Insurance</h1>
        <p>Access Insurance Tailored to Your Cargo.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Access Insurance</li>
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
            <img src="{{ asset('assets/img/services/access-insurance.webp') }}" alt="" class="img-fluid services-img">
            <h3>Peace of Mind for Every Shipment</h3>
            <p>
              Shipping goods across countries and oceans always carries a level of risk, delays, damage, loss, or theft can happen at any point in the journey. That’s why {{ config('app.name') }} integrates cargo insurance options directly into your shipment process. It’s not a separate form or a third-party website. It’s part of your booking flow, designed to protect your shipment with just a few clicks.
            </p>
            <p>
              As soon as you select a logistics quote, the platform offers you tailored insurance options based on the value, type, and route of your cargo. Whether you're shipping delicate electronics, perishables, or high-value goods, {{ config('app.name') }} matches you with the right coverage. You’ll see clearly what’s included, what’s excluded, and how much it will cost.
            </p>
            <p>
              We work with licensed insurance partners who offer digital policies backed by global underwriters. These providers understand logistics and offer flexible coverage levels. Businesses can request policy details and manage claims directly in the hub, with support from legal experts when needed.
            </p>
            <h3>Secure. Simple. Built-In.</h3>
            <p>
              Every insurance policy comes with full documentation stored securely in your dashboard. In case of a claim, just launch the process directly through {{ config('app.name') }}, no external emails or paperwork required, with {{ config('app.name') }} ensuring your shipment is no longer a hassle. It’s a smart, seamless step in your global trade journey.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
