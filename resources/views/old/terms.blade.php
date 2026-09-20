@extends('public.layout.main')

@section('title', 'Terms and Conditions')
@section('content')
      <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/terms-bg.jpg') }});">
      <div class="container position-relative">
        <h1>Our Terms of Service</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Terms and Conditions</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">
        <div>
            <h4>Acceptance of terms</h4>
            <p>
              By registering on {{ config('app.name') }}, you agree to these Terms and Conditions. If you do not agree, you may not use the platform.
            </p>
        </div>
        <div>
            <h4>Eligibility</h4>
            <p>
              Only users who provide valid identification (individuals) or legal registration (companies) are permitted to access our services.
            </p>
        </div>
        <div>
            <h4>Platform Use</h4>
            <p class="mb-1">
              You may use this platform to:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Request quotes</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Book logistics services</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Apply for insurance and finance </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Request for a claim through legal </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Engage in community forums </span></li>
            </ul>
            <p class="mb-1">
              You may not:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Provide false information </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Use the platform for illegal shipments </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Violate embargo rules </span></li>
            </ul>
        </div>
        <div>
            <h4>Payments</h4>
            <p>
              All payments are processed post-completion of services unless otherwise specified. {{ config('app.name') }} is not responsible for disputes outside the platform’s payment system.
            </p>
        </div>
        <div>
            <h4>Refund Policy</h4>
            <p>
              {{ config('app.name') }} provides refunds only in cases where a paid service has not been rendered or where a duplicate payment was made in error. Refund requests must be submitted in writing within 7 business days of payment. Services that have already commenced, including freight bookings, customs processing, or third-party handling, are non-refundable.
            </p>
        </div>
        <div>
            <h4>Trade Finance & Insurance</h4>
            <p>
              Services offered by third-party partners are subject to their own terms. {{ config('app.name') }} facilitates the transaction but does not underwrite or guarantee finance or insurance.
            </p>
        </div>
        <div>
            <h4>User Responsibilities </h4>
            <p class="mb-1">
              You confirm:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>The goods are not banned or restricted.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>You will comply with all export/import laws.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>You are authorized to act on behalf of your company (if applicable).</span></li>
            </ul>
        </div>
        <div>
            <h4>Disputes and Claims</h4>
            <p>
              All disputes must be submitted through the platform’s legal support feature. Resolution will follow {{ config('app.name') }}’s escalation protocol.
            </p>
        </div>
        <div>
            <h4>Intellectual Property </h4>
            <p>
              {{ config('app.name') }} and its features, visuals, and tools are the intellectual property of OmeHub. You may not copy or reuse content without permission.
            </p>
        </div>
        <div>
            <h4>Termination</h4>
            <p>
              {{ config('app.name') }} reserves the right to suspend accounts that violate terms, with or without notice.
            </p>
        </div>
        <div>
            <h4>Governing Law </h4>
            <p>
              These Terms shall be governed by the laws of Nigeria in alignment with international trade law, without regard to conflict of law principles.
            </p>
        </div>
      </div>

    </section><!-- /Service Details Section -->

  </main>
@endsection
