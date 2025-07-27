@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/about-bg.jpg') }});">
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

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-first order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="assets/img/features-6.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-last order-lg-last" data-aos="fade-up" data-aos-delay="100">
                <h3>Why Choose {{ config('app.name') }}</h3>
                <p>{{ config('app.name') }} was built to simplify how businesses and individuals move goods around the world. Whether you're shipping across borders or managing multiple partners, we bring everything you need into one smart, digital space. With {{ config('app.name') }}, you can easily compare and book freight from trusted logistics providers, track your shipments in real time, and manage your entire supply chain from your dashboard.</p>
                <p>Need support? You can apply for flexible trade finance options, protect your cargo with tailored insurance, and get fast legal help if something goes wrong, all without leaving the platform. We go further by helping you reduce your environmental impact with in-platform CO₂ offsetting, plus, you can join our vibrant trade community feed, a space to connect, share updates, and stay in the loop on market trends.</p>
                <p>It’s not just logistics. It’s a smarter, greener, more connected way to trade, and it starts with {{ config('app.name') }}.</p>
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
                <p>We believe logistics shouldn’t come at the expense of the planet. {{ config('app.name') }} calculates your shipment’s carbon footprint and offers you the opportunity to offset it directly during checkout. At year-end, you’ll receive a personalized carbon offset certificate, recognizing your contribution to greener global trade. </p>
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
                <p>{{ config('app.name') }} is global by design. Our platform supports shipments to and from most countries around the world, with automated compliance screening and region-specific services. Whether you're in Africa, Europe, Asia, South, or North America, {{ config('app.name') }} brings the trade world to your fingertips. </p>
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
                <h3>Who is it for</h3>
                <p>{{ config('app.name') }} is built to support every player in global trade, no matter the size, location, or level of experience.</p>
                <ul>
                    <li>
                        <i class="bi">🧳</i>
                        <div>
                            <h5>Businesses</h5>
                            <p>Simplify your global shipping, cut down on coordination time, and get access to flexible finance and insurance tools.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi">🚛</i>
                        <div>
                            <h5>Freight Providers</h5>
                            <p>Connect with verified, ready-to-ship clients and grow your business on a trusted global marketplace.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi">📈</i>
                        <div>
                            <h5>Trade Professionals</h5>
                            <p>Gain access to essential services like insurance, compliance tools, legal support, and more, all in one place.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi">🌱</i>
                        <div>
                            <h5>Sustainable Brands</h5>
                            <p>Track your emissions, offset your footprint, and earn green certifications to support your ESG goals.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="assets/img/features-7.jpg" alt="" class="img-fluid">
                </div>
            </div>

        </div>
      </div>

    </section><!-- /About Section -->

    {{-- <!-- Stats Section -->
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

        </div>

      </div>

    </section><!-- /Stats Section --> --}}

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Team<br></span>
        <h2>Our Team</h2>
        <p>Meet the team behind {{ config('app.name') }}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Omeh Ifeanyi</h4>
                <span>Founder and Hub Director</span>
                <p>Holding an LLB, LLM, and an Advanced Diploma in Import/Export, I have cultivated over six years of expertise in international trade law and logistics operations. My work focuses on enhancing compliance, efficiency, and sustainability across global supply networks.</p>
                <div class="social">
                    <a href="https://www.linkedin.com/in/ifeanyi-omeh-73498b9a/?utm_source=share&utm_campaign=share_via&utm_content=profile" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.png" class="img-fluid" alt="">
              <div class="member-content">
                  <h4>Camern Gabriela Ion </h4>
                  <span>Hub Manager</span>
                  <p>Currently serving as Hub Manager at {{ config('app.name') }}, bringing a background in recruitment, real estate, office management, and logistics. In my previous role as an office manager, I oversaw daily operations, streamlined workflows, and ensured the team stayed on track. I also coordinated the movement of goods from warehouses to retail locations, gaining firsthand logistics experience. I thrive in challenging environments, love solving problems, and enjoy working with diverse teams to keep everything running smoothly across the hub.</p>
                <div class="social">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
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
                {{-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div> --}}
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Ship smarter, not harder — {{ config('app.name') }} connects your cargo to the world in clicks, not calls.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div> --}}
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Trade without borders, stress, or surprises — all from one hub.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div> --}}
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>From booking to delivery, {{ config('app.name') }} keeps your business in motion.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div> --}}
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>One login. Every freight, finance, and fix — {{ config('app.name') }} has you covered.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div> --}}
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>{{ config('app.name') }} isn’t just logistics, it’s your trade command centre.</span>
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
                  <p>After selecting a logistics quote, {{ config('app.name') }} will offer you the option to offset the carbon footprint of your shipment. Emissions are automatically calculated based on your shipment data, and you can choose to contribute to our in-house carbon offset program before completing your booking. <br>At the end of each year, you will receive a personalized carbon offset certificate, recognizing your contribution to a more sustainable and environmentally responsible trade ecosystem. </p>
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
