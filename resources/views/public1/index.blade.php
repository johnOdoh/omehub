@extends('public.layouts.public')

@section('content')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                <div class="icon-circle me-2">
                  <i class="bi bi-bell"></i>
                </div>
                <span class="badge-text me-3">Innovative Solutions</span>
              </div>
            </div>

            <h1 class="hero-title mb-4">Get rates for international shipments instantly 24/7</h1>

            <ul>
              <li>Stress-free global shipping for all freight modes</li>
              <li>Instant quotes & guaranteed prices</li>
              <li>Reduce your logistics cost up to 30%</li>
            </ul>

            <div class="cta-wrapper">
              <a href="#" class="btn btn-primary">Create a Free Account to Get Started</a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/illustration/illustration-16.webp" alt="Business Growth" class="img-fluid" loading="lazy">
            </div>
          </div>
        </div>

        <div class="row feature-boxes">
          <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-calculator"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Instant Quote</h3>
                <p class="feature-text">Get quick comparisons of freight options over 100 countries.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-sliders"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Flexible Rates</h3>
                <p class="feature-text">No hidden fees, cheapest rates in the industry</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-headset"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Dedicated Support</h3>
                <p class="feature-text">Paperwork, customs, real-time assistance</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-gift"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Totally Free</h3>
                <p class="feature-text">No extra charges. Pay only for your booking.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Who We Are</p>
            <h3>Our Mission</h3>
            <p class="fst-italic">
              We are on the mission to reduce waste in global supply chains and make global shipping more efficient and transparent.
            </p>
            <p>{{ config('app.name') }} was born out of frustration with the lack of global digital logistics solutions available in the industry. As long-time logistics professionals, the founders saw the need for companies for a better way to manage shipments. So they set out to build the ultimate logistics platform from scratch. They wanted to simplify ordering and managing shipments across all freight modes and make it easy for users to compare different options and find the most suitable and cost-effective solutions in seconds, so they would not have to waste days communicating with logistics providers over e-mails.</p>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/about/about-portrait-1.webp" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/about/about-8.webp" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/about/about-12.webp" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row gy-4 mt-5">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Connecting global supply chain</h3>
            <p class="fst-italic">
               With real-time global freight pricing, booking and procurement across hundreds of carriers, thousands of forwarders and tens of thousands of importers and exporters around the world, big and small.
            </p>
            <p>
                {{ config('app.name') }} was born out of frustration with the lack of global digital logistics solutions available in the industry. As long-time logistics professionals, the founders saw the need for companies for a better way to manage shipments. So they set out to build the ultimate logistics platform from scratch. They wanted to simplify ordering and managing shipments across all freight modes and make it easy for users to compare different options and find the most suitable and cost-effective solutions in seconds, so they would not have to waste days communicating with logistics providers over e-mails.
            </p>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-12">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/about/about-8.webp" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- How We Work Section -->
    <section id="how-we-work" class="how-we-work section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>How We Work</h2>
        <p>{{ config('app.name') }} helps you find best global transport options instantly.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-5">
          <div class="process-container">

            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <span class="step-number">01</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-pencil-square"></i>
                  </div>
                  <div class="step-content">
                    <h3>Enter shipment details</h3>
                    <p>Select your pick-up and delivery point, add the weight and volume of your shipment.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
              <div class="content">
                <span class="step-number">02</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-gear"></i>
                  </div>
                  <div class="step-content">
                    <h3>Compare and select</h3>
                    <p>Explore different shipping options and choose what works best for your needs</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="400">
              <div class="content">
                <span class="step-number">03</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-search"></i>
                  </div>
                  <div class="step-content">
                    <h3>Enjoy full visibility</h3>
                    <p>Single dashboard for all your shipments with our support team just a message away.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /How We Work Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
        <p>{{ config('app.name') }} provides a wide range of services to help you find the best global transport options.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-card">
              <div class="team-image mb-2">
                <img src="assets/img/services/ocean-freight-1.webp" class="img-fluid" alt="">
              </div>
              <div class="service-content">
                <h3>Ocean Freight</h3>
                <p>For larger cargo quantities with flexible transit times, our ocean freight services provide global coverage. Choose between Less-than-Container Load (LCL) and Full Container Load (FCL) options.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-card">
              <div class="team-image mb-2">
                <img src="assets/img/services/road-freight-1.webp" class="img-fluid" alt="">
              </div>
              <div class="service-content">
                <h3>Road Freight</h3>
                <p>Efficient road freight services for cargo transportation within Europe. Whether it’s Less-Truck-Load (LTL) or Full-Truck-Load (FTL), we ensure timely deliveries across the continent.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-card">
              <div class="team-image mb-2">
                <img src="assets/img/services/courier-service.webp" class="img-fluid" alt="">
              </div>
              <div class="service-content">
                <h3>Courier Service</h3>
                <p>Swift, reliable door-to-door delivery for documents, luggage, and parcels worldwide. Track your shipments effortlessly through our intuitive platform.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-card">
              <div class="team-image mb-2">
                <img src="assets/img/services/global-customs-1.webp" class="img-fluid" alt="">
              </div>
              <div class="service-content">
                <h3>Global Customs Brokerage</h3>
                <p>Streamline border crossings with our customs brokerage services. Our experts handle the paperwork, so you don’t have to. Say goodbye to administrative hassles.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-card">
              <div class="team-image mb-2">
                <img src="assets/img/services/cargo-insurance-1.webp" class="img-fluid" alt="">
              </div>
              <div class="service-content">
                <h3>Cargo Insurance</h3>
                <p>Protect your shipments with our comprehensive cargo insurance. Rest easy knowing your goods are covered, and explore options for additional full cargo insurance.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-card">
              <div class="team-image mb-2">
                <img src="assets/img/services/amazon-shipping.webp" class="img-fluid" alt="">
              </div>
              <div class="service-content">
                <h3>Shipping to Amazon FBA</h3>
                <p>Amazon has strict requirements for sending goods to their FBA. We help to overcome all the challenges on the way.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Services Alt Section -->
    <section id="services-alt" class="services-alt section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="content-block">
              <h6 class="subtitle">Our professional services</h6>
              <h2 class="title">Professional support from logistics experts</h2>
              <p class="description">
                {{ config('app.name') }} was founded by long-term logistics professionals who accepted the challenge to build the ultimate logistics platform. Our mission is to reduce waste in global supply chains by digitalizing international freight processes.
              </p>
              <p class="description">
                Our platform makes international shipping simple and transparent. By leveraging innovative technology, we provide real-time quotes, shipment tracking, and easy management - all in one place and with no hidden costs.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row gy-4 mt-3">
                <div class="col-md-12">
                    <div class="feature-item">
                        <i class="bi bi-globe text-primary fs-1"></i>
                        <h4>Reduce Carbon Footprint</h4>
                        <p>Calculate carbon emissions for your lanes and develop a sustainable shipping strategy</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="feature-item">
                        <i class="bi bi-shield-check text-primary fs-1"></i>
                        <h4>Mitigate Compliance Risks</h4>
                        <p>Manage shipments, contracts, and approvals with secure audit trails and customizable access</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="feature-item">
                        <i class="bi bi-graph-up-arrow text-primary fs-1"></i>
                        <h4>Dynamic Analytics Dashboard</h4>
                        <p>Full transparency with real-time data for fast decision-making</p>
                    </div>
                </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Alt Section -->

    <section id="service-details" class="service-details section pt-0">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="service-cta mt-5 text-center" data-aos="zoom-in">
          <h3>Help Deliver the Freight Revolution</h3>
          <p>We are bringing global freight online with the only vendor-neutral global freight booking and payment platform. Ready to impact the way the world moves?</p>
          <a href="#" class="btn-service">Get Started <i class="bi bi-arrow-right"></i></a>
        </div>

      </div>

    </section><!-- /Service Details Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="faq-contact-card">
              <div class="card-icon">
                <i class="bi bi-question-circle"></i>
              </div>
              <div class="card-content">
                <h3>Still Have Questions?</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum.</p>
                <div class="contact-options">
                  <a href="#" class="contact-option">
                    <i class="bi bi-envelope"></i>
                    <span>Email Support</span>
                  </a>
                  <a href="#" class="contact-option">
                    <i class="bi bi-chat-dots"></i>
                    <span>Live Chat</span>
                  </a>
                  <a href="#" class="contact-option">
                    <i class="bi bi-telephone"></i>
                    <span>Call Us</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-accordion">
              <div class="faq-item faq-active">
                <div class="faq-header">
                  <h3>Vivamus suscipit tortor eget felis porttitor volutpat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="faq-header">
                  <h3>Curabitur aliquet quam id dui posuere blandit?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Sed porttitor lectus nibh ullamcorper sit amet?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Nulla quis lorem ut libero malesuada feugiat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.
                  </p>
                </div>
              </div><!-- End FAQ Item-->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-card">
              <div class="team-image">
                <img src="assets/img/person/person-m-1.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Daniel Mitchell</h4>
                <span class="position">Creative Director</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-card">
              <div class="team-image">
                <img src="assets/img/person/person-f-6.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Aliquam tincidunt mauris eu risus. Vestibulum auctor dapibus neque. Nunc dignissim risus id metus.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Rebecca Taylor</h4>
                <span class="position">Lead Developer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-card">
              <div class="team-image">
                <img src="assets/img/person/person-m-6.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Cras ornare tristique elit. Integer in dui quis est placerat ornare. Phasellus a lacus a risus.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Marcus Johnson</h4>
                <span class="position">UI/UX Designer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-card">
              <div class="team-image">
                <img src="assets/img/person/person-f-3.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Jessica Parker</h4>
                <span class="position">Marketing Strategist</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-8.webp" alt="Profile Image">
                    <div>
                      <h3>Robert Johnson</h3>
                      <h4>Marketing Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et maecenas aliquam.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-3.webp" alt="Profile Image">
                    <div>
                      <h3>Lisa Williams</h3>
                      <h4>Product Manager</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-10.webp" alt="Profile Image">
                    <div>
                      <h3>Emma Parker</h3>
                      <h4>UX Designer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-5.webp" alt="Profile Image">
                    <div>
                      <h3>David Miller</h3>
                      <h4>Senior Developer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-2.webp" alt="Profile Image">
                    <div>
                      <h3>Michael Davis</h3>
                      <h4>CEO &amp; Founder</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-7.webp" alt="Profile Image">
                    <div>
                      <h3>Sarah Thompson</h3>
                      <h4>Art Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h3>Our Address</h3>
              <p>2847 Rainbow Road, Springfield, IL 62701, USA</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>Contact Number</h3>
              <p>Mobile: +1 (555) 123-4567<br>
                Email: info@example.com</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>Opening Hour</h3>
              <p>Monday - Saturday: 9:00 - 18:00<br>
                Sunday: Closed</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        <option value="">Select service*</option>
                        <option value="Service 1">Consulting</option>
                        <option value="Service 2">Development</option>
                        <option value="Service 3">Marketing</option>
                        <option value="Service 4">Support</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Submit Message</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>
@endsection
