@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
      <div class="container position-relative">
        <h1>Meet the Stakeholders</h1>
        <p>{{ config('app.name') }} thrives because every key player in trade logistics finds value here. Scroll through to see who’s behind the platform</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Our Stakeholders</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

        <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="{{ asset('assets/img/shipper.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>Shipper</h3>
                <ul>
                    <li>
                        <i class="bi bi-people"></i>
                        <div>
                            <h5>Who they are:</h5>
                            <p>Importers, exporters, individuals, and businesses moving goods across borders.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-quote"></i>
                        <div>
                            <h5>Why they love {{ config('app.name') }}:</h5>
                            <p>Book, track, and manage shipments with one simple tool — no back-and-forth emails required.</p>
                            <q>I run a small apparel brand. {{ config('app.name') }} helps me book freight and track my cargo in real time — no stress.</q>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="{{ asset('assets/img/freight-provider.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-lg-last" data-aos="fade-up" data-aos-delay="100">
                <h3>Freight Provider</h3>
                <ul>
                    <li>
                        <i class="bi bi-people"></i>
                        <div>
                            <h5>Who they are:</h5>
                            <p>Logistics companies offering air, sea, or land freight services.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-quote"></i>
                        <div>
                            <h5>Why they love {{ config('app.name') }}:</h5>
                            <p>Access verified, ready-to-ship customers without spending on lead generation.</p>
                            <q>I’m a freight forwarder. I use {{ config('app.name') }} to get verified lead.</q>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="{{ asset('assets/img/legal-partner.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>Legal Partner</h3>
                <ul>
                    <li>
                        <i class="bi bi-people"></i>
                        <div>
                            <h5>Who they are:</h5>
                            <p>A registered legal firm that resolves claims and protects platform users.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-quote"></i>
                        <div>
                            <h5>Why they love {{ config('app.name') }}:</h5>
                            <p>They help maintain fairness by managing disputes directly inside the system.</p>
                            <q>{{ config('app.name') }} lets us step in quickly when things go wrong. Our goal is fast, fair resolutions.</q>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="{{ asset('assets/img/finance-provider.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-lg-last" data-aos="fade-up" data-aos-delay="100">
                <h3>Finance Provider</h3>
                <ul>
                    <li>
                        <i class="bi bi-people"></i>
                        <div>
                            <h5>Who they are:</h5>
                            <p>Registered partners , offering working capital and trade finance to approved businesses.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-quote"></i>
                        <div>
                            <h5>Why they love {{ config('app.name') }}:</h5>
                            <p>They reach vetted users actively shipping goods, ready to scale and grow.</p>
                            <q>Through {{ config('app.name') }}, we support growing exporters with easy, verified access to trade finance.</q>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="{{ asset('assets/img/insurance-provider.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                <h3>Insurance Company</h3>
                <ul>
                    <li>
                        <i class="bi bi-people"></i>
                        <div>
                            <h5>Who they are:</h5>
                            <p>Licensed insurance providers offering cargo coverage for every shipping mode.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-quote"></i>
                        <div>
                            <h5>Why they love {{ config('app.name') }}:</h5>
                            <p>They plug into a digital ecosystem where shippers need quick, tailored protection.</p>
                            <q>We help de-risk shipments right from the point of booking. It's seamless, smart, and fast.</q>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row gy-4 mt-5">

            <div class="col-lg-6 position-relative align-self-start order-lg-first" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img">
                    <img src="{{ asset('assets/img/sustainability.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 content order-lg-last" data-aos="fade-up" data-aos-delay="100">
                <h3>Sustainability Contributor</h3>
                <ul>
                    <li>
                        <i class="bi bi-people"></i>
                        <div>
                            <h5>Who they are:</h5>
                            <p>Organizations supporting verified CO₂ offsetting and green trade certifications.</p>
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-quote"></i>
                        <div>
                            <h5>Why they love {{ config('app.name') }}:</h5>
                            <p>They get access to real, shipment-linked data, and help push sustainable trade forward.</p>
                            <q>{{ config('app.name') }} gives us a measurable way to help shippers go green and get recognized for it.</q>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

      </div>

    </section><!-- /About Section -->

        <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="{{ asset('assets/img/cta-bg.jpg') }}" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Become a Stakeholder</h3>
              <p>Are you an individual or Business (small or big), then sign up today and see the power of {{ config('app.name') }}.</p>
              @auth
                <a class="cta-btn" href="{{ route(auth()->user()->dashboard()) }}">Dashboard</a>
              @else
                <a class="cta-btn" href="{{ route('register') }}">Sign Up</a>
              @endauth
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Features Section -->
    <section id="features" class="features about section">

           <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Trust & Safety Zone<br></span>
        <h2>Trust & Safety Zone</h2>
        <p>Your trade journey deserves security, fairness, and transparency at every step. Here’s how {{ config('app.name') }} protects you</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{ asset('assets/img/features-8.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                <h5 class="fw-bold">KYC Verification Process</h5>
                <p>We take identity and compliance seriously.
                    <ul>
                        <li class="my-2"><i class="bi bi-check fs-5"></i> <span>Individuals must upload a valid government-issued ID (passport or national ID) during registration.</span></li>
                        <li class="my-2"><i class="bi bi-check fs-5"></i> <span>Businesses are required to provide a verified company registration number and VAT or tax ID.</span></li>
                        <li class="my-2"><i class="bi bi-check fs-5"></i> <span>Users are first verified through their bank details, with support from trusted partners like United Bank for Africa (UBA). Additional KYC checks are securely handled via Hub Legal team.</span></li>
                        <li class="my-2"><i class="bi bi-shield-check fs-5"></i> <span>Verified profiles are clearly marked.</span></li>
                        <li class="my-2"><i class="fas fa-shield-halved fs-5"></i> <span>Fraud checks are automated + human-reviewed.</span></li>
                        <li class="my-2"><i class="fas fa-shield fs-5"></i> <span>Data is encrypted and never shared without consent.</span></li>
                    </ul>
                </p>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 d-flex order-1 order-md-2 align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{ asset('assets/img/features-1.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                <h5 class="fw-bold">Data Protection & Privacy</h5>
                <p>Your data belongs to you and we protect it like our own.
                    <ul>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>OmeHub is built with full GDPR compliance in mind, ensuring user data is handled securely and transparently</span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>Personal and company data is stored securely with limited access</span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>KYC checks are securely handled via Hub Legal team.</span></li>
                        <li class="my-2"><i class="bi bi-check-circle fs-5"></i> <span>We do not sell or rent user data to third parties.</span></li>
                    </ul>
                </p>
                <p>View our full <a href="{{ route('privacy') }}">Privacy Policy</a> and <a href="{{ route('terms') }}">Terms of Use</a></p>
            </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Section -->

  </main>

@endsection
