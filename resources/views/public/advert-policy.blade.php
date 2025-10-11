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
            <li class="current">Advertising & Blog Policy</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">
        <div>
            <h4>Purpose</h4>
            <p>
              Omefreight provides a blog and advertising feature (“Blog Option”) that allows registered users and partners to share articles, insights, and promotional content related to logistics, shipping, sustainability, finance, insurance, and other relevant industries. This Policy sets out the rules for using this feature.
            </p>
        </div>
        <div>
            <h4>User Responsibility </h4>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>You are solely responsible for the content you publish, including accuracy, legality, and compliance with applicable laws. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>By submitting content, you confirm that you own all rights (including images, trademarks, and logos) or have obtained proper permission. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>You must not post any content that is illegal, misleading, defamatory, discriminatory, infringing, or offensive. </span></li>
            </ul>
        </div>
        <div>
            <h4>Omefreight’s Role </h4>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Omefreight does not endorse or guarantee the accuracy of user-submitted content.  </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Advertisements and blog posts are the responsibility of the author/advertiser.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Omefreight may remove or edit any content at its sole discretion if it violates this Policy or applicable law. </span></li>
            </ul>
        </div>
        <div>
            <h4>Data & Privacy </h4>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>If your advertisement or blog post collects personal information (e.g., via contact forms or links), you must comply with data protection laws, including the Nigeria Data Protection Act (NDPA) and other applicable international regulations (GDPR, POPIA, CCPA, etc.). </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Omefreight may process personal data submitted with advertisements/blog posts in line with its <a href="{{ route('privacy') }}" target="_blank">Privacy Policy.</a></span></li>
            </ul>
        </div>
        <div>
            <h4>Fees & Commercial Terms </h4>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Omefreight reserves the right to charge a fee for advertising services or sponsored posts. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Any paid advertising will be clearly labeled as “Sponsored” or “Advertisement.” </span></li>
            </ul>
        </div>
        <div>
            <h4>Disclaimer </h4>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Content posted in the Blog Option reflects the views of the author/advertiser and not Omefreight. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Omefreight is not liable for any loss, damage, or reliance arising from user submitted content. Users are encouraged to verify details directly with the advertiser before making decisions.</span></li>
            </ul>
        </div>
        <div>
            <h4>Enforcement</h4>
            <ul class="ms-3">
              <li><i class="bi bi-check-circle"></i> <span>Violation of this Policy may result in removal of content, suspension of account, or termination of access to the Blog Option. </span></li>
              <li><i class="bi bi-check-circle"></i> <span>Omefreight reserves the right to cooperate with regulators or law enforcement where necessary. </span></li>
            </ul>
        </div>
      </div>

    </section><!-- /Service Details Section -->

  </main>
@endsection
