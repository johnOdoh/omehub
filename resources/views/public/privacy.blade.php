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
              Omefreight (“we,” “our,” or “us”) is committed to protecting the privacy and personal data of all users (“you,” “your”) who use our logistics platform - Omehub. This Privacy Policy explains how we collect, use, disclose, and safeguard your information globally.
            </p>
        </div>
        <div>
            <h4>Who We Are </h4>
            <p>
                Omefreight is a logistics company registered in Nigeria and operating globally. We connect shippers, carriers, insurers, finance providers, and other stakeholders to simplify the movement of goods.
            </p>
            <p class="mb-1">
              For data protection purposes:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>In Nigeria, we are regulated by the Nigeria Data Protection Commission (NDPC) under the NDPA 2023. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>In the EU/UK, we act as a Data Controller under the GDPR and UK GDPR</span></li>
              <li><i class="bi bi-check-circle"></i> <span>In South Africa, we comply with the Protection of Personal Information Act (POPIA). </span></li>
              <li><i class="bi bi-check-circle"></i> <span>In Kenya, we comply with the Data Protection Act 2019. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>In California, we comply with the California Consumer Privacy Act (CCPA/CPRA). </span></li>
            </ul>
        </div>
        <div>
            <h4>What Data Do We Collect </h4>
            <p class="mb-1">
              We may collect the following categories of data:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span><strong>Identity Data: </strong>Name, contact details, ID/passport details. </span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Shipment Data: </strong>Cargo descriptions, pick-up and delivery addresses.</span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Financial Data: </strong>Payment details, insurance choices, financing preferences. </span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Technical Data: </strong>Device identifiers, IP address, browser type, cookies. </span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Usage Data: </strong>How you interact with our platform, services selected. </span></li>
            </ul>
        </div>
        <div>
            <h4>How We Use Your Data</h4>
            <p class="mb-1">
              We process your data only when we have a legal basis under applicable laws, including:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>To provide our services (fulfilling logistics bookings, processing payments, enabling insurance or financing options). </span></li>
              <li><i class="bi bi-check-circle"></i> <span>To comply with legal obligations (KYC, anti-fraud, regulatory reporting). </span></li>
              <li><i class="bi bi-check-circle"></i> <span>With your consent (for marketing, sharing data with selected insurers/finance partners). </span></li>
              <li><i class="bi bi-check-circle"></i> <span>For legitimate interests (platform security, improving services, preventing fraud). </span></li>
            </ul>
        </div>
        <div>
            <h4>How We Share Your Data </h4>
            <p class="mb-1">
              We may share your data with:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Logistics partners (carriers, shippers) to fulfill your bookings. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Insurance and finance partners only when you explicitly select them. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Technology vendors (cloud hosting, payment processors) who process data on our behalf.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Regulators and law enforcement where required by law. </span></li>
            </ul>
            <p>We never sell your personal data.</p>
        </div>
        <div>
            <h4>Cross-Border Data Transfers </h4>
            <p class="mb-1">
              Because Omefreight operates globally, your data may be transferred outside your country. We use safeguards such as:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Standard Contractual Clauses (SCCs) for EU/UK users. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Adequacy decisions where applicable. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>User consent where required. </span></li>
            </ul>
        </div>
        <div>
            <h4>Data Retention </h4>
            <p class="mb-1">
              We keep your personal data only as long as necessary:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span><strong>For logistics services: </strong>until delivery + legal record-keeping period. </span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>For regulatory obligations: </strong>as required by NDPA, GDPR, or other applicable laws. </span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>For marketing:</strong>until you withdraw consent. </span></li>
            </ul>
        </div>
        <div>
            <h4>Your Rights </h4>
            <p class="mb-2">
              Depending on your location, you may have the following rights:
            </p>
            <p>Nigeria (NDPA) </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Right to access, rectification, erasure, restriction, portability, and objection. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Right to lodge a complaint with the NDPC. </span></li>
            </ul>
            <p>EU/UK (GDPR) </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>All of the above, plus right to withdraw consent at any time. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Right to complain to your local Data Protection Authority. </span></li>
            </ul>
            <p>South Africa (POPIA) </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Right to access, correction, deletion, objection, and to institute civil claims.</span></li>
            </ul>
            <p>Kenya (DPA 2019) </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Right to be informed, access, rectification, erasure, objection, data portability. </span></li>
            </ul>
            <p>California (CCPA/CPRA) </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Right to know what data we collect and how we use it. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Right to request deletion of your data. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Right to opt-out of sale/sharing of personal data. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Right to non-discrimination if you exercise your rights. </span></li>
            </ul>
            <p>To exercise your rights, contact us at privacy@omefreight.com. </p>
        </div>
        <div>
            <h4>Data Security </h4>
            <p>
              We use industry-standard security measures, including encryption, access controls, and monitoring, to protect your data.
            </p>
        </div>
        <div>
            <h4>Children's Data Security </h4>
            <p>
              Our services are not directed at children under 18. We do not knowingly collect data from minors.
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
              We may update this Privacy Policy from time to time. Changes will be posted on our platform with a revised “Effective Date.”
            </p>
        </div>
        <div>
            <h4>Contact</h4>
            <p>
              If you have questions or concerns:
            </p>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Nigeria/Global HQ – {{ config('app.email') }}</span></li>
              <li><i class="bi bi-check-circle"></i> <span>You may also contact your local Data Protection Authority. </span></li>
            </ul>
        </div>
      </div>

    </section><!-- /Service Details Section -->

  </main>
@endsection
