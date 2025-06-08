@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/world-dotted-map.png" alt="" class="hero-bg" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">Get rates for international shipments instantly 24/7</h2>
            <ul>
              <li>Stress-free global shipping for all freight modes</li>
              <li>Instant quotes & guaranteed prices</li>
              <li>Reduce your logistics cost up to 30%</li>
            </ul>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
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

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>About Us</h3>
                <p class="fst-italic">
                    We are on the mission to reduce waste in global supply chains and make global shipping more efficient and transparent.
                </p>
                <p>{{ config('app.name') }} was born out of frustration with the lack of global digital logistics solutions available in the industry. As long-time logistics professionals, the founders saw the need for companies for a better way to manage shipments. So they set out to build the ultimate logistics platform from scratch. They wanted to simplify ordering and managing shipments across all freight modes and make it easy for users to compare different options and find the most suitable and cost-effective solutions in seconds, so they would not have to waste days communicating with logistics providers over e-mails.</p>
                <a href="#" class="readmore"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
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
                    <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
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

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Help Deliver the Freight Revolution</h3>
              <p>We are bringing global freight online with the only vendor-neutral global freight booking and payment platform. Ready to impact the way the world moves?</p>
              <a class="cta-btn" href="#">Get Started</a>
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

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Frequently Asked Questions</span>
        <h2>Frequently Asked Questions</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq Section -->

  </main>

@endsection
