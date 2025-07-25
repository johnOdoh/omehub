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
              <li>Instant quotes & flexible pricing9</li>
              <li>Access to trade financing & Insurance</li>
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
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>About {{ config('app.name') }}</h3>
                <p>{{ config('app.name') }} is a smart, all-in-one digital logistics marketplace designed to revolutionize how individuals and businesses manage international trade. Our mission is simple: to make global shipping accessible, transparent, and efficient, without compromising on compliance, sustainability, or user control.</p>
                <p>Whether you're an SME exporting goods, an individual shipping personal items, or a logistics provider offering services, OmeHub connects you directly through one streamlined, intelligent platform.</p>
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
                    <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
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
              <h3><a href="{{ route('service', ['service' => 'air-freight']) }}" class="stretched-link">Quote & Book Freight</a></h3>
              <p>Quickly compare and book shipping options from trusted logistics providers across all freight modes, sea, air, road, and rail - all in one place. </p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/track.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'ocean-freight']) }}" class="stretched-link">Track Shipment</a></h3>
              <p>Stay informed with real-time tracking updates from pickup to final delivery, visible right from your dashboard.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/finance.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'cargo-insurance']) }}" class="stretched-link">Apply for Trade Finance</a></h3>
              <p>Secure short-term financial support to fund your shipment, with flexible payment options available based on your business or individual profile. </p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/access-insurance.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'road-freight']) }}" class="stretched-link">Access Insurance</a></h3>
              <p>Protect your cargo with affordable, tailored insurance solutions offered directly through the platform.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('assets/img/services/resolve-disputes.webp') }}" alt="" class="img-fluid">
                </div>
                <h3><a href="{{ route('service', ['service' => 'rail-freight']) }}" class="stretched-link">Resolve Disputes & Claims</a></h3>
                <p>Get fast legal support for any issues during your shipment. Raise claims directly and have them handled professionally through OmeHub’s legal partners.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/offset.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'courier-service']) }}" class="stretched-link">Offset CO₂ Emissions</a></h3>
              <p>Choose to offset your shipment’s carbon footprint through OmeHub’s built-in sustainability feature — and receive a certified annual report of your impact. </p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/services/community.webp') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="{{ route('service', ['service' => 'courier-service']) }}" class="stretched-link">Engage in a Trade Community Feed</a></h3>
              <p>Post updates, share market news, and interact with others in the global trade community — with a limit of one post per day per stakeholder to keep content focused.</p>
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
        <p>Below are the answers to the most common questions our users usually ask</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="100">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>What is {{ config('app.name') }}? </h3>
                <div class="faq-content">
                  <p>{{ config('app.name') }} is a digital logistics marketplace where individuals and companies can book freight services, request quotes, access trade finance and insurance, track shipments, and receive legal or compliance support — all in one secure platform. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Who can use {{ config('app.name') }}?</h3>
                <div class="faq-content">
                    <p class="mb-1">Anyone involved in international trade:</p>
                    <ul class="ms-2 list-unstyled">
                        <li><i class="bi bi-check-circle"></i> <span>Individuals shipping goods personally</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Companies moving commercial cargo</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Logistics partners providing freight services</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Finance, insurance, and legal professionals supporting trade transactions</span></li>
                    </ul>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Is there a registration fee?</h3>
                <div class="faq-content">
                  <p>Registration is free for all users. <br>However, companies are required to pay a small monthly subscription fee, which ranges from $50 to $100, depending on their scale and how many team members they wish to grant platform access. This fee ensures secure, multi-user functionality, advanced shipment management, and access to enterprise-level support. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>What kind of services can I access on {{ config('app.name') }}?</h3>
                <div class="faq-content">
                    <p class="mb-1">You can:</p>
                    <ul class="ms-2 list-unstyled">
                        <li><i class="bi bi-check-circle"></i> <span>Get instant quotes from multiple logistics providers </span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Track your shipments in real-time </span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Apply for trade finance </span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Purchase cargo insurance </span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Offset your shipment's CO₂ emissions </span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Raise claims and resolve disputes through legal support</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Join the trade community forum and share updates</span></li>
                    </ul>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>How does the payment process work? </h3>
                <div class="faq-content">
                  <p>You only pay after services are completed (e.g. after shipment is delivered or insurance policy is activated). All payments are processed securely within the platform. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>How does {{ config('app.name') }} ensure compliance? </h3>
                <div class="faq-content">
                  <p>{{ config('app.name') }} blocks all embargoed countries from selection as shipping origin or destination. Shippers must also declare that their goods are not banned or prohibited before any transaction can proceed.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Is {{ config('app.name') }} available globally? </h3>
                <div class="faq-content">
                  <p>Yes. {{ config('app.name') }} is available to users worldwide. The platform is designed to support international logistics, regardless of your location. Services may be tailored based on regional regulations or availability, but shippers and service providers from all countries can register and operate through {{ config('app.name') }}.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>How do I apply for trade finance? </h3>
                <div class="faq-content">
                  <p>Once your shipment is booked and marked as “In Transit,” you’ll see a button to request trade finance. Companies and individuals may apply. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Is insurance required? </h3>
                <div class="faq-content">
                  <p>Insurance is optional but recommended. You can choose coverage during or after booking your shipment. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Can I track my shipment inside {{ config('app.name') }}?</h3>
                <div class="faq-content">
                  <p>Yes! Logistics providers generate tracking numbers via {{ config('app.name') }}. You’ll see tracking updates directly in your dashboard as the shipment progresses. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>What is CO₂ offsetting and how does it work? </h3>
                <div class="faq-content">
                  <p>After selecting a logistics quote, OmeHub will offer you the option to offset the carbon footprint of your shipment. Emissions are automatically calculated based on your shipment data, and you can choose to contribute to our in-house carbon offset program before completing your booking. <br>At the end of each year, you will receive a personalized carbon offset certificate, recognizing your contribution to a more sustainable and environmentally responsible trade ecosystem. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>What happens if there’s a dispute?</h3>
                <div class="faq-content">
                  <p>You can raise a claim directly in your dashboard. The {{ config('app.name') }} legal team will be notified and will work with all parties to resolve the issue. Timing and response windows are enforced to ensure speed.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>How secure is the platform?</h3>
                <div class="faq-content">
                  <p>{{ config('app.name') }} uses bank-grade encryption, identity verification, and KYC procedures for companies and individuals. All transactions are logged, and access to sensitive data is restricted and monitored.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>What documents do I need to register?</h3>
                <div class="faq-content">
                  <p><strong>Individuals: </strong>Valid government-issued ID (e.g., passport, national ID).</p>
                  <p><strong>Companies: </strong>Company registration number, legal business documents and name, and contact details. </p>
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
