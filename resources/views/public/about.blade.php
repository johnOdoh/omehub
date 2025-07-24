@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
      <div class="container position-relative">
        <h1>About</h1>
        <p>We help you find best global transport options instantly.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

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
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-first order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-last order-lg-last" data-aos="fade-up" data-aos-delay="100">
                <h3>What We Do</h3>
                <p class="fst-italic">{{ config('app.name') }} brings together every essential trade service under one roof.</p>
                <p>
                    <ul>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Quote & Book Freight from verified logistics providers worldwide </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Track Shipments with real-time visibility and updates </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Apply for Trade Finance or flexible payment options </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Access Insurance tailored to your cargo </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Resolve Disputes & Claims with in-platform legal support</span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Offset CO₂ Emissions through verified green contributions </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Get Trade Compliance Info with AI-powered search </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Engage in a Trade Community Feed to share updates and market news</span></li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>Driving Sustainable Trade</h3>
                <p class="fst-italic">We are building a platform grounded in security, transparency, and compliance. </p>
                <p>We believe logistics shouldn’t come at the expense of the planet. OmeHub calculates your shipment’s carbon footprint and offers you the opportunity to offset it directly during checkout. At year-end, you’ll receive a personalized carbon offset certificate, recognizing your contribution to greener global trade. </p>
                <h5 class="fw-bold">Our Promise</h5>
                <p>
                    <ul>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>All users are verified via ID and KYC checks </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Embargoed destinations are automatically blocked </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Users must declare their goods as legal and non-restricted before booking </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Payments are held and released only after service delivery </span></li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="assets/img/features-5.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-last" data-aos="fade-up" data-aos-delay="100">
                <h3>Where We Operate </h3>
                <p>{{ config('app.name') }} is global by design. Our platform supports shipments to and from most countries around the world, with automated compliance screening and region-specific services. Whether you're in Africa, Europe, Asia, South, or North America, OmeHub brings the trade world to your fingertips. </p>
                <h5 class="fw-bold">Built For All</h5>
                <p>
                    <ul>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span><strong>Individuals: </strong>Ship with confidence and flexibility</span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span><strong>Companies: </strong>Manage teams, track multiple shipments, access finance and insurance </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span><strong>Logistics Partners: </strong>Gain more visibility, automate quotes, and reduce manual work </span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span><strong>Finance & Legal Providers: </strong>Connect to verified clients with structured workflows </span></li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="00">
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

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
                </div>
            </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4 ">
            <div class="stats-item text-center w-100 h-100">
              <p>Over</p>
              <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Shipments</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 ">
            <div class="stats-item text-center w-100 h-100">
              <p>Over</p>
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p>Partners</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 ">
            <div class="stats-item text-center w-100 h-100">
              <p>Over</p>
              <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
              <p>Customers</p>
            </div>
          </div><!-- End Stats Item -->

          {{-- <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Support</p>Individuals: Ship with confidence and flexibility
            </div>
          </div><!-- End Stats Item --> --}}

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Team<br></span>
        <h2>Our Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

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
