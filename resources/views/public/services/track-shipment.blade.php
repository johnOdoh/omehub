@extends('public.layout.main')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services/track.webp') }});">
      <div class="container position-relative">
        <h1>Track Shipment</h1>
        <p>Track Shipments with Real-Time Visibility and Updates</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route( 'home') }}">Home</a></li>
            <li class="current">Track Shipment</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          @include('public.includes.services-sidebar')

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/img/services/track.webp') }}" alt="" class="img-fluid services-img">
            <h3>Stay Informed Every Step of the Way</h3>
            <p>
              One of the biggest challenges in logistics is not knowing where your goods are or when they will arrive. Delays happen, but uncertainty should not. That’s why {{ config('app.name') }} offers a fully integrated tracking feature that gives you real-time visibility on all your shipments, no matter the freight mode or destination.
            </p>
            <p>
              From the moment your cargo is picked up, the system begins collecting tracking data and status updates directly from the logistics provider. These updates are displayed on your dashboard in a clear, timeline-based view. You can see the exact location of your shipment, estimated delivery time, and any potential disruptions such as customs delays, weather issues, or port congestion.
            </p>
            <p>
              You don’t have to chase updates manually. Instead, you receive automatic notifications at key checkpoints, such as when your goods depart the warehouse, arrive at a port, clear customs, or are out for final delivery. You can also opt-in to receive updates via email or SMS, keeping both you and your customer in the loop.
            </p>
            <h3>Transparency Builds Confidence</h3>
            <p>
              Whether you're a small business shipping for the first time or a large company managing multiple deliveries, visibility helps reduce stress and improve planning. If a delay occurs, you can take proactive steps rescheduling customer deliveries, managing stock, or informing your team before the issue becomes a problem.
            </p>
            <p>
              What makes {{ config('app.name') }}’s tracking unique is that it works across providers and transport types in one dashboard. That means whether your shipment is moving via truck in Europe, by ocean from Asia, or by air to Africa, you don’t have to use different systems to stay updated.
            </p>
            <p>
              This level of transparency and automation empowers you to manage logistics more strategically. Instead of reacting to problems, you’ll stay a step ahead making your business more reliable, responsive, and trusted by your customers.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@endsection
