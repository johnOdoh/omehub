@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/offset.webp') }});">
      <div class="container position-relative">
        <h1>Offset CO₂ Emissions</h1>
        <p>Offset CO₂ Emissions</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Offset CO₂ Emissions and go green</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          @include('public.includes.services-sidebar')

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/services/offset.webp') }}" alt="" class="img-fluid services-img">
            <h3>Trade Smarter. Trade Greener.</h3>
            <p>
              Every shipment contributes to carbon emissions. OmeHub helps you take responsibility with a built-in carbon offset feature. Once you choose a freight quote, the system automatically calculates your shipment’s estimated emissions based on cargo weight, transport mode, and distance.
            </p>
            <p>
              You will then be offered the option to offset that carbon impact with a simple one-click choice. The contribution goes directly to verified sustainability projects, such as reforestation or clean energy. These projects are supported by reputable environmental partners to ensure your funds make a real impact.
            </p>
            <p>
              There is no need to leave the platform or calculate anything manually. Everything is presented clearly during your booking process. At the end of the year, you receive a personalized certificate showing how much you helped offset.
            </p>
            <p>
              This feature supports both individuals and businesses who care about the planet and want to make shipping more sustainable. It adds value to your brand and contributes to a more responsible trade ecosystem.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
