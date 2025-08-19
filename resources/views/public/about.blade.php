@extends('public.layout.main')

@section('title', 'About Us')
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

        <div class="row gy-4">

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets/img/story.jpg') }}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>Our Story</h3>
                <p>{{ config('app.name') }} was founded with a simple but powerful idea - that international trade should be accessible, efficient, and transparent for everyone. The founder of {{ config('app.name') }}, has built a career rooted in solving real-world problems. With years of experience spanning logistics, compliance, and international trade, he developed a deep understanding of how challenging cross-border shipping can be. He saw firsthand how businesses from startups to established enterprises struggled to coordinate freight, access dependable service providers, get clear pricing, and manage legal or financial support. The process was often disjointed, time-consuming, and lacked transparency. That insight became the driving force behind {{ config('app.name') }}.</p>
                <p>Ifeanyi knew there had to be a better way. So, he created one.</p>
                <p>{{ config('app.name') }} was born to bring every essential trade service into a single digital space. From booking freight and tracking shipments to applying for insurance and resolving disputes, users can manage everything they need in one place. It is designed not just for large corporations, but also for small businesses, individuals, and growing brands that want to trade smarter and more confidently.</p>
                <p>More than just a platform, {{ config('app.name') }} is a growing community. It connects shippers, freight providers, legal experts, insurers, and financial partners with tools and opportunities to grow together. It offers real-time insights, compliance support, and even carbon offsetting options for users who want to reduce their environmental impact.</p>
                <p>Our mission is simple. We want to make global trade easier and more human. We want to support companies of all sizes, from anywhere in the world, and give them the tools to succeed in the global economy.Today, {{ config('app.name') }} stands for progress. It stands for trust, simplicity, and a better way to move goods across borders.</p>
                <p>Welcome to {{ config('app.name') }}. Your gateway to global trade.</p>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-first order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="{{ asset('assets/img/features-6.jpg') }}" alt="" class="img-fluid">
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
                    <img src="{{ asset('assets/img/features-4.jpg') }}" alt="" class="img-fluid">
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
                    <img src="{{ asset('assets/img/features-5.jpg') }}" alt="" class="img-fluid">
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
                    <img src="{{ asset('assets/img/features-7.jpg') }}" alt="" class="img-fluid">
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
              <img src="{{ asset('assets/img/team/team-1.png') }}" class="img-fluid" alt="">
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
              <img src="{{ asset('assets/img/team/team-2.png') }}" class="img-fluid" alt="">
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
              <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Mama Godfrey Sunday</h4>
                <span>Head of Technical Support</span>
                <p>
                   Mama Godfrey Sunday is a passionate Electrical and Electronics Engineering graduate with strong technical skills and a deep love for technology.
                </p>
                <div class="social">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    @include('public.includes.testimonials')

    @include('public.includes.faq')

  </main>

@endsection
