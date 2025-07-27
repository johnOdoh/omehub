@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/finance.webp') }});">
      <div class="container position-relative">
        <h1>Trade Finance</h1>
        <p>Apply for Trade Finance or Flexible Payment Options.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Trade Finance</li>
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
            <img src="{{ asset('assets/img/services/finance.webp') }}" alt="" class="img-fluid services-img">
            <h3>Empowering Global Trade with Accessible Financing</h3>
            <p>
              For many businesses, one of the biggest hurdles in international trade is access to capital. That’s why {{ config('app.name') }} integrates trade finance solutions directly into its platform, giving companies a smarter and more accessible way to fund their shipments.
            </p>
            <p>
              Once a shipment is booked and in transit, registered companies can apply for financing right through the hub. This gives them time to arrange cash flow while their goods are on the move. The process is fast, paperless, and transparent. You upload your documents, choose from available options, and get notified of approval—all within your dashboard.
            </p>
            <p>
              We’ve partnered with reliable financial providers. This tailored access ensures that both growing businesses and experienced traders can benefit.
            </p>
            <h3>Flexible Terms. Fast Processing</h3>
            <p>
              Depending on your eligibility and provider, you may receive deferred payment options, purchase order financing, or invoice-backed loans. The goal is to help you ship now and pay later reducing the stress of upfront costs.
            </p>
            <p>
              {{ config('app.name') }} simplifies trade finance into a few clicks, making international trade smoother, smarter, and more inclusive for everyone.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
