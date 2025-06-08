@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
      <div class="container position-relative">
        <h1>Our Services</h1>
        <p>We provide a wide range of services to help you find the best global transport options</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Our Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-calculator"></i></div>
            <div>
              <h4 class="title">Instant Quote</h4>
              <p class="description">Get quick comparisons of freight options over 100 countries.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-sliders"></i></div>
            <div>
              <h4 class="title">Flexible Rates</h4>
              <p class="description">No hidden fees, cheapest rates in the industry</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-headset"></i></div>
            <div>
              <h4 class="title">Dedicated Support</h4>
              <p class="description">Paperwork, customs, real-time assistance</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-gift"></i></div>
            <div>
              <h4 class="title">Totally Freet</h4>
              <p class="description">No extra charges. Pay only for your booking</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Services<br></span>
        <h2>Our ServiceS</h2>
        <p>{{ config('app.name') }} provides a wide range of services to help you find the best global transport options</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/air-service.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'air-freight']) }}" class="stretched-link">Air Freight</a></h3>
              <p>When time is of the essence, our air freight service ensures your goods reach their destination quickly and efficiently.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/ocean-service.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'ocean-freight']) }}" class="stretched-link">Ocean Freight</a></h3>
              <p>For larger cargo quantities with flexible transit times, our ocean freight services provide global coverage. Choose between Less-than-Container Load (LCL) and Full Container Load (FCL) options.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/cargo-service.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'cargo-insurance']) }}" class="stretched-link">Cargo Insurance</a></h3>
              <p>Protect your shipments with our comprehensive cargo insurance. Rest easy knowing your goods are covered, and explore options for additional full cargo insurance.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/road-service.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'road-freight']) }}" class="stretched-link">Road Freight</a></h3>
              <p>Efficient road freight services for cargo transportation within Europe. Whether it’s Less-Truck-Load (LTL) or Full-Truck-Load (FTL), we ensure timely deliveries across the continent.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('assets/img/services/rail-service.webp') }}" alt="" class="img-fluid">
                </div>
                <h3><a href="{{ route('service', ['service' => 'rail-freight']) }}" class="stretched-link">Rail Freight</a></h3>
                <p>Streamline border crossings with our customs brokerage services. Our experts handle the paperwork, so you don’t have to. Say goodbye to administrative hassles.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/courier-service.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'courier-service']) }}" class="stretched-link">Courier Service</a></h3>
              <p>Swift, reliable door-to-door delivery for documents, luggage, and parcels worldwide. Track your shipments effortlessly through our intuitive platform.</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features about section">

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/features-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Professional support from logistics experts</h3>
            <p class="description">
                {{ config('app.name') }} was founded by long-term logistics professionals who accepted the challenge to build the ultimate logistics platform. Our mission is to reduce waste in global supply chains by digitalizing international freight processes.
            </p>
            <ul>
                <li>
                    <i class="bi bi-globe"></i>
                    <div>
                        <h5>Reduce Carbon Footprint</h5>
                        <p>Calculate carbon emissions for your lanes and develop a sustainable shipping strategy</p>
                    </div>
                </li>
                <li>
                    <i class="bi bi-shield-check"></i>
                    <div>
                        <h5>Mitigate Compliance Risks</h5>
                        <p>Manage shipments, contracts, and approvals with secure audit trails and customizable access</p>
                    </div>
                </li>
                <li>
                    <i class="bi bi-graph-up-arrow"></i>
                    <div>
                        <h5>Dynamic Analytics Dashboard</h5>
                        <p>Full transparency with real-time data for fast decision-making</p>
                    </div>
                </li>
            </ul>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Section -->

  </main>

@endsection
