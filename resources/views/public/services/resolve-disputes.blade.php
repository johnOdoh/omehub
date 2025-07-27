@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/resolve-disputes.webp') }});">
      <div class="container position-relative">
        <h1>Resolve Disputes & Claims</h1>
        <p>Resolve Disputes and Claims with In-Platform Legal Support.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Resolve Disputes & Claims</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          @include('public.includes.services-sidebar')

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/services/resolve-disputes.webp') }}" alt="" class="img-fluid services-img">
            <h3>Because Trade Doesn’t Always Go Smoothly</h3>
            <p>
              In international logistics, even the best planning cannot eliminate all risks. Miscommunication, delays, unexpected charges, lost goods, or policy disputes can happen, especially when working across multiple borders and service providers. That’s why OmeHub goes beyond booking and tracking. We provide a built-in legal support system to help users resolve claims and disputes directly on the platform.
            </p>
            <p>
              If something goes wrong during or after a shipment, the shipper can launch a claim or raise a dispute from their dashboard. They’ll be prompted to submit relevant documents, describe the issue, and attach proof like photos, delivery records, or contracts. This automatically notifies the party involved, be it the freight company, insurance provider, or finance partner.
            </p>
            <p>
              What sets OmeHub apart is our integration of a dedicated legal service run by a verified registered law firm that specializes in trade and transport. This legal team acts as a neutral third-party facilitator for conflict resolution. If the matter escalates, the legal support team will review documentation and mediate the issue with both parties.
            </p>
            <h3>Built-In Protection for Fairer Trade</h3>
            <p>
              The goal is simple: keep trade fair, efficient, and transparent. Legal support is available to both individuals and companies. For complex issues, a formal claim process can be initiated with full legal oversight.
            </p>
            <p>
              This feature builds confidence and accountability across the platform. Everyone knows that if something goes wrong, there’s a trusted system, and a legal team to step in.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
