@extends('public.layout.main')

@section('title', 'Privacy Policy')
@section('content')
      <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/terms-bg.jpg') }});">
      <div class="container position-relative">
        <h1>Our Privacy Policy</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Privacy Policy</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">
        <div>
            <h4>Introduction</h4>
            <p>
              At {{ config('app.name') }}, we are committed to protecting your personal information and your right to privacy. This Privacy Policy describes how we collect, use, store, and disclose information when you use our logistics marketplace platform.
            </p>
        </div>
        <div>
            <h4>Information We Collect </h4>
            <p class="mb-1">
              We collect the following types of data:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span><strong>Personal Information: </strong>Name, email, phone number, ID/passport (for individuals), company registration details (for businesses). </span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Shipment Data: </strong>Shipping routes, HS codes, origin, destination, tracking details. </span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Financial Data: </strong>Insurance preferences, finance applications, and payment methods.</span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Technical Data: </strong>IP addresses, browser type, cookies, usage logs.</span></li>
            </ul>
        </div>
        <div>
            <h4>How We Use Your Data</h4>
            <p class="mb-1">
              We use your data to:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Provide logistics services and partner integrations. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Calculate CO₂ emissions and manage compliance. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Facilitate financial, insurance, and legal services.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Improve our platform experience and ensure security. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Comply with legal obligations. </span></li>
            </ul>
        </div>
        <div>
            <h4>Data Sharing </h4>
            <p class="mb-1">
              We may share your data with:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Trusted service providers. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Legal authorities when required by law. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>No personal data is sold to third parties.</span></li>
            </ul>
        </div>
        <div>
            <h4>Data Security </h4>
            <p>
              We implement industry-standard encryption, firewalls, and access controls to safeguard your information.
            </p>
        </div>
        <div>
            <h4>User Rights </h4>
            <p class="mb-1">
              You have the right to:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Access your data </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Request corrections </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Request deletion </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Withdraw consent for certain processing </span></li>
            </ul>
        </div>
        <div>
            <h4>Cookies</h4>
            <p>
              We use cookies for platform functionality and analytics. You may opt out via browser settings.
            </p>
        </div>
        <div>
            <h4>Changes to This Policy</h4>
            <p>
              We may update this policy and will notify users of significant changes via the platform.
            </p>
        </div>
        <div>
            <h4>Contact</h4>
            <p>
              For questions or data access requests, email: privacy@omehub.com
            </p>
        </div>
      </div>

    </section><!-- /Service Details Section -->

  </main>
@endsection
