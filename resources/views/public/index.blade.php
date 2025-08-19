@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('assets/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in">

      <div class="container" data-aos="fade-up">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2>Get rates for international shipments instantly 24/7</h2>
            <ul>
              <li>Stress-free global shipping for all freight modes</li>
              <li>Instant quotes & flexible pricing</li>
              <li>Access to trade financing & Insurance</li>
            </ul>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

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

          <div class="col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-gift"></i></div>
            <div>
              <h4 class="title">Trade Finance</h4>
              <p class="description">Access to financing options for your shipments</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-headset"></i></div>
            <div>
              <h4 class="title">Dedicated Support</h4>
              <p class="description">Professional support staff to handle your shipping needs</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>About {{ config('app.name') }}</h3>
                <p>{{ config('app.name') }} is a smart, all-in-one digital logistics marketplace designed to revolutionize how individuals and businesses manage international trade. Our mission is simple: to make global shipping accessible, transparent, and efficient, without compromising on compliance, sustainability, or user control.</p>
                <p>Whether you're an SME exporting goods, an individual shipping personal items, or a logistics provider offering services, {{ config('app.name') }} connects you directly through one streamlined, intelligent platform.</p>
                <h5 class="fw-bold">Our Vision</h5>
                <p>We have a vision to become the world’s most trusted digital gateway for international trade, where logistics, finance, compliance, and sustainability converge — simply and seamlessly.</p>
                <a href="{{ route('about') }}" class="readmore"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 content order-last order-lg-last" data-aos="fade-up" data-aos-delay="00">
                <h3>How We Work</h3>
                <ul>
                    <li>
                        <i class="bi">1</i>
                        <div>
                            <h5>Enter shipment details</h5>
                            <p>Select your pick-up and delivery point, add the weight and volume of your shipment.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi">2</i>
                        <div>
                            <h5>Compare and select</h5>
                            <p>Explore different shipping options and choose what works best for your needs</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi">3</i>
                        <div>
                            <h5>Enjoy full visibility</h5>
                            <p>Single dashboard for all your shipments with our support team just a message away.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 position-relative align-self-start order-lg-first order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="{{ asset('assets/img/features-2.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Services<br></span>
        <h2>What We Do</h2>
        <p>{{ config('app.name') }} brings together every essential trade service under one roof</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/quote-and-book.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'book-freight']) }}" class="stretched-link">Quote & Book Freight</a></h3>
              <p>Quickly compare and book shipping options from trusted logistics providers across all freight modes, sea, air, road, and rail - all in one place. </p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/track.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'track-shipment']) }}" class="stretched-link">Track Shipment</a></h3>
              <p>Stay informed with real-time tracking updates from pickup to final delivery, visible right from your dashboard.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/finance.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'trade-finance']) }}" class="stretched-link">Trade Finance</a></h3>
              <p>Secure short-term financial support to fund your shipment, with flexible payment options available based on your business or individual profile. </p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/access-insurance.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'access-insurance']) }}" class="stretched-link">Access Insurance</a></h3>
              <p>Protect your cargo with affordable, tailored insurance solutions offered directly through the platform.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('assets/img/services/resolve-disputes.webp') }}" alt="" class="img-fluid">
                </div>
                <h3><a href="{{ route('service', ['service' => 'resolve-disputes']) }}" class="stretched-link">Resolve Disputes & Claims</a></h3>
                <p>Get fast legal support for any issues during your shipment. Raise claims directly and have them handled professionally through {{ config('app.name') }}’s legal partners.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/offset.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'offset-carbon-emission']) }}" class="stretched-link">Offset CO₂ Emissions</a></h3>
              <p>Choose to offset your shipment’s carbon footprint through {{ config('app.name') }}’s built-in sustainability feature — and receive a certified annual report of your impact. </p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/community.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'community-feed']) }}" class="stretched-link">Engage in a Trade Community Feed</a></h3>
              <p>Post updates, share market news, and interact with others in the global trade community — with a limit of one post per day per stakeholder to keep content focused.</p>
            </div>
          </div><!-- End Card Item -->
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="{{ asset('assets/img/cta-bg.jpg') }}" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Help Deliver the Freight Revolution</h3>
              <p>We are bringing global freight online with the only vendor-neutral global freight booking and payment platform. Ready to impact the way the world moves?</p>
              @auth
                <a class="cta-btn" href="{{ route(auth()->user()->dashboard()) }}">Dashboard</a>
              @else
                <a class="cta-btn" href="{{ route('register') }}">Get Started</a>
              @endauth
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Features Section -->
    <section id="features" class="features about section">

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/features-9.jpg') }}" class="img-fluid" alt="">
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

    @include('public.includes.testimonials')

    @include('public.includes.faq')

  </main>

@endsection
