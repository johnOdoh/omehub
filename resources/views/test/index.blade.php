@extends('public.layout.public')

@section('title', 'Index')
@section('content')

   <!-- Hero Section -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/40 pt-8 pb-20 overflow-hidden">

  <!-- Hero Background Image & Grid Pattern with Smooth Gradient Mask -->
  <div class="absolute inset-0 bg-grid-pattern opacity-50 pointer-events-none"></div>
  <div class="absolute right-0 top-0 w-full lg:w-1/2 h-full opacity-10 pointer-events-none overflow-hidden">
    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1200&q=80" alt="Global Container Ship" class="w-full h-full object-cover object-center filter saturate-150">
    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent"></div>
  </div>
  <div class="absolute top-10 right-0 w-[550px] h-[550px] bg-brand-blue/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <!-- Left Column: Value Prop & Messaging -->
      <div class="lg:col-span-6 space-y-6">

        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-brand-blue/10 border border-brand-blue/20 text-brand-blue text-xs font-bold uppercase tracking-wider">
          <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
          <span>Smart Digital Logistics Marketplace</span>
        </div>

        <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-brand-dark tracking-tight leading-[1.1]">
          Get rates for international <br/>
          <span class="text-brand-blue">shipments instantly 24/7</span>
        </h1>

        <p class="text-gray-600 text-base sm:text-lg lg:text-xl font-normal leading-relaxed max-w-xl">
          {{ config('app.name') }} is a smart, all-in-one digital logistics marketplace designed to make global shipping accessible, transparent, and efficient — without compromising on compliance, sustainability, or user control.
        </p>

        <ul class="space-y-2.5 text-sm text-gray-700 pt-1">
          <li class="flex items-center gap-2.5">
            <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0"></i>
            <span>Stress-free global shipping for all freight modes</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0"></i>
            <span>Instant quotes &amp; flexible pricing — no hidden fees</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0"></i>
            <span>Access to trade financing &amp; insurance</span>
          </li>
        </ul>

        <div class="flex flex-wrap items-center gap-4 pt-2">
          <a href="{{ route('public.quote') }}" class="btn-primary text-sm sm:text-base py-3.5 px-7 shadow-lg shadow-brand-blue/30">
            <span>Get Instant Quote</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="{{ route('public.for-shippers') }}" class="btn-outlined text-sm sm:text-base py-3.5 px-6">
            <i data-lucide="play-circle" class="w-4 h-4 text-brand-blue"></i>
            <span>How it works</span>
          </a>
        </div>

        <!-- Trust Badges Under Hero CTA -->
        <div class="pt-6 border-t border-gray-200/80 flex items-center gap-6 text-xs text-gray-500 flex-wrap">
          <div class="flex items-center gap-2">
            <i data-lucide="shield-check" class="w-4 h-4 text-brand-green"></i>
            <span class="font-semibold text-gray-700">100+ Countries Covered</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="lock" class="w-4 h-4 text-brand-green"></i>
            <span class="font-semibold text-gray-700">Secure &amp; Compliant</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="zap" class="w-4 h-4 text-brand-green"></i>
            <span class="font-semibold text-gray-700">Instant Spot Rates</span>
          </div>
        </div>

        <!-- Live AIS Vessel Status Pill -->
        <div class="p-3 bg-white/90 backdrop-blur-md rounded-2xl border border-sand-border shadow-sm flex items-center justify-between gap-4 max-w-md">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-xl bg-brand-blue/10 flex items-center justify-center text-brand-blue">
              <i data-lucide="navigation" class="w-4 h-4 animate-pulse"></i>
            </div>
            <div>
              <div class="text-xs font-bold text-brand-dark flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span>
                <span>Live Route Telemetry</span>
              </div>
              <div class="text-[11px] text-gray-500 font-mono">Vessel: OME-ATLANTIC (SHANGHAI → ROTTERDAM)</div>
            </div>
          </div>
          <span class="text-[11px] font-bold text-brand-green bg-brand-green/10 px-2 py-0.5 rounded-full">On Time</span>
        </div>

      </div>

      <!-- Right Column: Interactive Instant Rate & Tracking Engine -->
      <div class="lg:col-span-6">
        <div class="relative">

          <!-- Decorative Background Aura -->
          <div class="absolute -inset-1 bg-gradient-to-r from-brand-blue via-brand-cyan to-brand-green rounded-3xl blur opacity-25"></div>

          <!-- Widget Include -->
          @include('test.includes.quote-widget')

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Carrier & Partner Marquee Network -->
<section class="py-10 bg-white border-y border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-center text-xs font-bold text-gray-400 uppercase tracking-widest mb-6">
      Connecting Shippers &amp; Providers Across 100+ Countries
    </p>
    <div class="grid grid-cols-3 sm:grid-cols-6 gap-6 items-center justify-items-center opacity-70 grayscale hover:grayscale-0 transition-all duration-300">
      <div class="flex items-center gap-2 font-heading font-extrabold text-lg text-gray-700 tracking-wider">
        <i data-lucide="ship" class="w-5 h-5 text-brand-blue"></i> MAERSK
      </div>
      <div class="flex items-center gap-2 font-heading font-extrabold text-lg text-gray-700 tracking-wider">
        <i data-lucide="anchor" class="w-5 h-5 text-brand-blue"></i> MSC LINE
      </div>
      <div class="flex items-center gap-2 font-heading font-extrabold text-lg text-gray-700 tracking-wider">
        <i data-lucide="box" class="w-5 h-5 text-brand-blue"></i> CMA CGM
      </div>
      <div class="flex items-center gap-2 font-heading font-extrabold text-lg text-gray-700 tracking-wider">
        <i data-lucide="container" class="w-5 h-5 text-brand-blue"></i> HAPAG-LLOYD
      </div>
      <div class="flex items-center gap-2 font-heading font-extrabold text-lg text-gray-700 tracking-wider">
        <i data-lucide="plane" class="w-5 h-5 text-brand-blue"></i> LUFTHANSA CARGO
      </div>
      <div class="flex items-center gap-2 font-heading font-extrabold text-lg text-gray-700 tracking-wider">
        <i data-lucide="truck" class="w-5 h-5 text-brand-blue"></i> APM TERMINALS
      </div>
    </div>
  </div>
</section>

<!-- Value Proposition: 3 Core Pillars (Forto Style Cards) -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
        {{ config('app.name') }} makes global shipping accessible, transparent &amp; efficient
      </h2>
      <p class="text-gray-600 text-base sm:text-lg leading-relaxed">
        Whether you're an SME exporting goods, an individual shipping personal items, or a logistics provider, {{ config('app.name') }} brings every essential trade service into a single digital space.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- Card 1 -->
      <div class="card-sand p-8 flex flex-col justify-between group">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-2xl bg-brand-blue/10 flex items-center justify-center text-brand-blue group-hover:bg-brand-blue group-hover:text-white transition-colors duration-200">
            <i data-lucide="calculator" class="w-6 h-6"></i>
          </div>
          <h3 class="font-heading font-bold text-2xl text-brand-dark">
            Instant Quote
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Get quick comparisons of freight options over 100 countries. Compare ocean, air, and road freight rates instantly with zero hidden fees.
          </p>
        </div>
        <div class="pt-6">
          <a href="{{ route('public.quote') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-blue hover:text-brand-blue-hover group/link">
            <span>Get a quote now</span>
            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card-sand p-8 flex flex-col justify-between group">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-2xl bg-brand-green/15 flex items-center justify-center text-emerald-600 group-hover:bg-brand-green group-hover:text-white transition-colors duration-200">
            <i data-lucide="sliders" class="w-6 h-6"></i>
          </div>
          <h3 class="font-heading font-bold text-2xl text-brand-dark">
            Flexible Rates
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            No hidden fees — the cheapest rates in the industry. Access trade financing and insurance options to keep your shipments moving without financial stress.
          </p>
        </div>
        <div class="pt-6">
          <a href="{{ route('public.solutions') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-blue hover:text-brand-blue-hover group/link">
            <span>View freight solutions</span>
            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card-sand p-8 flex flex-col justify-between group">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-2xl bg-brand-cyan/15 flex items-center justify-center text-brand-cyan group-hover:bg-brand-cyan group-hover:text-white transition-colors duration-200">
            <i data-lucide="gift" class="w-6 h-6"></i>
          </div>
          <h3 class="font-heading font-bold text-2xl text-brand-dark">
            Trade Finance
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Access to flexible short-term trade financing options and cargo insurance for your shipments.
          </p>
        </div>
        <div class="pt-6">
          <a href="{{ route('public.platform') }}#trade-finance" class="inline-flex items-center gap-2 text-sm font-bold text-brand-blue hover:text-brand-blue-hover group/link">
            <span>Explore trade finance options</span>
            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card-sand p-8 flex flex-col justify-between group">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-2xl bg-brand-green/15 flex items-center justify-center text-brand-green group-hover:bg-brand-green group-hover:text-white transition-colors duration-200">
            <i data-lucide="headset" class="w-6 h-6"></i>
          </div>
          <h3 class="font-heading font-bold text-2xl text-brand-dark">
            Dedicated Support
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Professional support staff ready to handle your shipping needs. From booking freight to tracking shipments and resolving disputes — we've got you covered.
          </p>
        </div>
        <div class="pt-6">
          <a href="{{ route('public.contact') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-blue hover:text-brand-blue-hover group/link">
            <span>Contact support</span>
            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/link:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Proof Numbers / Stats Section (Forto Dark Geometric Block) -->
<section class="py-20 bg-brand-dark text-white relative overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern-dark opacity-30 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">

      <div class="p-6">
        <div class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-white tracking-tight" data-counter="3.4" data-suffix="k" data-decimals="1">
          3.4k
        </div>
        <div class="text-sm sm:text-base font-bold text-brand-green mt-2">Active Shippers</div>
        <p class="text-xs text-gray-400 mt-1">Shipping with omehub digital solutions</p>
      </div>

      <div class="p-6">
        <div class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-white tracking-tight" data-counter="120" data-suffix="+" data-decimals="0">
          120+
        </div>
        <div class="text-sm sm:text-base font-bold text-brand-blue-light mt-2">Countries Covered</div>
        <p class="text-xs text-gray-400 mt-1">Global intermodal freight coverage</p>
      </div>

      <div class="p-6">
        <div class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-white tracking-tight" data-counter="99.4" data-suffix="%" data-decimals="1">
          99.4%
        </div>
        <div class="text-sm sm:text-base font-bold text-brand-green mt-2">ETA Accuracy</div>
        <p class="text-xs text-gray-400 mt-1">Powered by AI satellite telemetry</p>
      </div>

      <div class="p-6">
        <div class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-white tracking-tight" data-counter="48" data-suffix="k" data-decimals="0">
          48k
        </div>
        <div class="text-sm sm:text-base font-bold text-brand-cyan mt-2">TEU Containers Moved</div>
        <p class="text-xs text-gray-400 mt-1">Operated smoothly in the past 12 months</p>
      </div>

    </div>
  </div>
</section>

<!-- About {{ config('app.name') }} & How We Work Section -->
<section id="about" class="py-24 bg-white border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
    
    <!-- Part 1: About {{ config('app.name') }} & Vision -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Video / Visual -->
      <div class="lg:col-span-6 order-2 lg:order-1">
        <div class="hero-image-wrapper aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl border border-sand-border group relative">
          <img src="{{ asset('assets/img/about.jpg') }}" 
               onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80'" 
               alt="About {{ config('app.name') }} Platform" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="hero-overlay-gradient"></div>
          
          <!-- Video Play Button -->
          <a href="https://youtube.com/embed/YeOgHg6m1iM" 
             target="_blank" 
             rel="noopener noreferrer" 
             class="absolute inset-0 m-auto w-16 h-16 rounded-full bg-brand-blue/90 hover:bg-brand-blue text-white flex items-center justify-center shadow-xl hover:scale-110 transition-all z-20"
             aria-label="Watch {{ config('app.name') }} Overview Video">
            <i data-lucide="play" class="w-7 h-7 fill-white ml-1"></i>
          </a>

          <!-- Glass Floating Card -->
          <div class="absolute bottom-4 left-4 right-4 hero-glass-card p-4 flex items-center justify-between gap-3 shadow-lg z-20">
            <div>
              <div class="text-xs font-bold text-brand-dark">Our Mission &amp; Vision</div>
              <div class="text-[11px] text-gray-500">Connecting global commerce seamlessly</div>
            </div>
            <a href="{{ route('public.about') }}" class="text-xs font-bold text-brand-blue hover:underline">Read Story &rarr;</a>
          </div>
        </div>
      </div>

      <!-- About Content -->
      <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
        <span class="badge-pill badge-pill-blue">About {{ config('app.name') }}</span>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight leading-tight">
          Smart digital logistics built for global trade
        </h2>
        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          {{ config('app.name') }} is a smart, all-in-one digital logistics marketplace designed to revolutionize how individuals and businesses manage international trade. Our mission is simple: to make global shipping accessible, transparent, and efficient, without compromising on compliance, sustainability, or user control.
        </p>
        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          Whether you're an SME exporting goods, an individual shipping personal items, or a logistics provider offering services, {{ config('app.name') }} connects you directly through one streamlined, intelligent platform.
        </p>
        
        <div class="p-5 rounded-2xl bg-sand-light border border-sand-border space-y-2">
          <h4 class="font-heading font-bold text-brand-dark text-sm sm:text-base">Our Vision</h4>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed italic">
            &ldquo;We have a vision to become the world’s most trusted digital gateway for international trade, where logistics, finance, compliance, and sustainability converge &mdash; simply and seamlessly.&rdquo;
          </p>
        </div>

        <div class="pt-2">
          <a href="{{ route('public.about') }}" class="btn-primary text-sm py-3 px-6">
            <span>Learn More</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

    </div>

    <!-- Part 2: How We Work (3 Steps) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center pt-8 border-t border-gray-100">
      
      <!-- Steps Column -->
      <div class="lg:col-span-6 space-y-6">
        <span class="badge-pill badge-pill-green">Simple 3-Step Process</span>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
          How We Work
        </h2>
        
        <div class="space-y-6 pt-2">
          
          <!-- Step 1 -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center font-heading font-bold text-lg flex-shrink-0">
              1
            </div>
            <div class="space-y-1">
              <h3 class="font-heading font-bold text-lg text-brand-dark">Enter shipment details</h3>
              <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Select your pick-up and delivery point, add the weight, volume, and cargo type of your shipment.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-heading font-bold text-lg flex-shrink-0">
              2
            </div>
            <div class="space-y-1">
              <h3 class="font-heading font-bold text-lg text-brand-dark">Compare and select</h3>
              <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Explore different shipping options, compare verified provider rates, and choose what works best for your needs.
              </p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center font-heading font-bold text-lg flex-shrink-0">
              3
            </div>
            <div class="space-y-1">
              <h3 class="font-heading font-bold text-lg text-brand-dark">Enjoy full visibility</h3>
              <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Single dashboard for all your shipments with real-time tracking updates and our support team just a message away.
              </p>
            </div>
          </div>

        </div>
      </div>

      <!-- Visual Column -->
      <div class="lg:col-span-6">
        <div class="hero-image-wrapper aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl border border-sand-border group">
          <img src="https://ome-hub.com/assets/img/features-2.jpg" 
               onerror="this.src='https://images.unsplash.com/photo-1616401784845-180882ba9ba8?auto=format&fit=crop&w=1200&q=80'" 
               alt="How {{ config('app.name') }} Works" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="hero-overlay-gradient"></div>

          <div class="absolute bottom-6 left-6 right-6 hero-glass-card p-4 space-y-1 shadow-xl">
            <div class="text-xs font-bold text-brand-dark">End-to-End Shipment Lifecycle</div>
            <div class="text-[11px] text-gray-500">Quote &bull; Booking &bull; Customs &bull; Tracking &bull; Pay on Delivery</div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Dual Sided Marketplace: For Shippers & For Carriers -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

      <!-- Box 1: For Global Shippers -->
      <div class="card-sand p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden group">
        <div class="space-y-6">
          <span class="badge-pill badge-pill-blue">For Shippers</span>
          <h3 class="font-heading font-extrabold text-3xl text-brand-dark">
            Book guaranteed freight capacity at transparent spot rates
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Eliminate phone tag, opaque forwarder markups, and paper documents. Quote, book, clear customs, and track every container in one unified digital workspace.
          </p>
          <ul class="space-y-2.5 text-xs sm:text-sm text-gray-700">
            <li class="flex items-center gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue"></i>
              <span>Guaranteed carrier space allocation during peak seasons</span>
            </li>
            <li class="flex items-center gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue"></i>
              <span>Automated customs pre-clearance to avoid port demurrage</span>
            </li>
            <li class="flex items-center gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue"></i>
              <span>Flexible 30-day payment terms & invoice consolidation</span>
            </li>
          </ul>
        </div>
        <div class="pt-8">
          <a href="{{ route('public.for-shippers') }}" class="btn-primary text-sm py-3 px-6">
            <span>Shipper Solutions & Pricing</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

      <!-- Box 2: For Logistics Providers & Carriers -->
      <div class="card-dark p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden group">
        <div class="space-y-6">
          <span class="badge-pill badge-pill-green">For Logistics Providers & Carriers</span>
          <h3 class="font-heading font-extrabold text-3xl text-white">
            Monetize empty container space & connect with enterprise shippers
          </h3>
          <p class="text-gray-300 text-sm leading-relaxed">
            Directly distribute ocean, air, and truckload capacity to thousands of verified B2B shippers. Benefit from automated booking workflows and guaranteed 7-day payments.
          </p>
          <ul class="space-y-2.5 text-xs sm:text-sm text-gray-300">
            <li class="flex items-center gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-green"></i>
              <span>Automated EDI & REST API rate distribution</span>
            </li>
            <li class="flex items-center gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-green"></i>
              <span>Zero credit risk with omehub Guaranteed Payouts</span>
            </li>
            <li class="flex items-center gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-green"></i>
              <span>Optimized backhaul loads to reduce empty container repositioning</span>
            </li>
          </ul>
        </div>
        <div class="pt-8">
          <a href="{{ route('public.for-carriers') }}" class="btn-outlined-white text-sm py-3 px-6">
            <span>Join Carrier Partner Network</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- What We Do: The 6 Essential Trade Services Section -->
<section id="services" class="py-24 bg-sand-light border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-3xl mx-auto text-center mb-16 space-y-3">
      <span class="badge-pill badge-pill-blue">Our Services</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
        What We Do
      </h2>
      <p class="text-gray-600 text-base leading-relaxed">
        {{ config('app.name') }} brings together every essential trade service under one roof
      </p>
    </div>

    <!-- 6 Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Service 1: Quote & Book Freight -->
      <div class="card-sand bg-white rounded-3xl overflow-hidden border border-sand-border shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
        <div>
          <div class="aspect-[16/10] overflow-hidden relative">
            <img src="{{ asset('assets/img/services/quote-and-book.webp') }}" 
                 onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80'" 
                 alt="Quote and Book Freight" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-heading font-bold text-xl text-brand-dark group-hover:text-brand-blue transition-colors">
              Quote &amp; Book Freight
            </h3>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
              Quickly compare and book shipping options from trusted logistics providers across all freight modes: sea, air, road, and rail &mdash; all in one place.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2">
          <a href="{{ route('public.quote') }}#quote-and-book-freight" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover">
            <span>Get Quote</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <!-- Service 2: Track Shipment -->
      <div class="card-sand bg-white rounded-3xl overflow-hidden border border-sand-border shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
        <div>
          <div class="aspect-[16/10] overflow-hidden relative">
            <img src="{{ asset('assets/img/services/track.webp') }}" 
                 onerror="this.src='https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=800&q=80'" 
                 alt="Track Shipment" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-heading font-bold text-xl text-brand-dark group-hover:text-brand-blue transition-colors">
              Track Shipment
            </h3>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
              Stay informed with real-time tracking updates from pickup to final delivery, visible right from your dashboard.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2">
          <a href="{{ route('public.platform') }}#track-shipment" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover">
            <span>Track Now</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <!-- Service 3: Trade Finance -->
      <div class="card-sand bg-white rounded-3xl overflow-hidden border border-sand-border shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
        <div>
          <div class="aspect-[16/10] overflow-hidden relative">
            <img src="{{ asset('assets/img/services/finance.webp') }}" 
                 onerror="this.src='https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80'" 
                 alt="Trade Finance" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-heading font-bold text-xl text-brand-dark group-hover:text-brand-blue transition-colors">
              Trade Finance
            </h3>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
              Secure short-term financial support to fund your shipment, with flexible payment options available based on your business or individual profile.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2">
          <a href="{{ route('public.platform') }}#trade-finance" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover">
            <span>Explore Financing</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <!-- Service 4: Resolve Disputes & Claims -->
      <div class="card-sand bg-white rounded-3xl overflow-hidden border border-sand-border shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
        <div>
          <div class="aspect-[16/10] overflow-hidden relative">
            <img src="{{ asset('assets/img/services/resolve-disputes.webp') }}" 
                 onerror="this.src='https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80'" 
                 alt="Resolve Disputes & Claims" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-heading font-bold text-xl text-brand-dark group-hover:text-brand-blue transition-colors">
              Resolve Disputes &amp; Claims
            </h3>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
              Get fast legal support for any issues during your shipment. Raise claims directly and have them handled professionally through {{ config('app.name') }}’s legal partners.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2">
          <a href="{{ route('public.platform') }}#resolve-disputes" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover">
            <span>Legal Support</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <!-- Service 5: Offset CO2 Emissions -->
      <div class="card-sand bg-white rounded-3xl overflow-hidden border border-sand-border shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
        <div>
          <div class="aspect-[16/10] overflow-hidden relative">
            <img src="{{ asset('assets/img/services/offset.webp') }}" 
                 onerror="this.src='https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=800&q=80'" 
                 alt="Offset CO2 Emissions" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-heading font-bold text-xl text-brand-dark group-hover:text-brand-blue transition-colors">
              Offset CO₂ Emissions
            </h3>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
              Choose to offset your shipment’s carbon footprint through {{ config('app.name') }}’s built-in sustainability feature &mdash; and receive a certified annual report of your impact.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2">
          <a href="{{ route('public.platform') }}#offset" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover">
            <span>Sustainability</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <!-- Service 6: Engage in Trade Community Feed -->
      <div class="card-sand bg-white rounded-3xl overflow-hidden border border-sand-border shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
        <div>
          <div class="aspect-[16/10] overflow-hidden relative">
            <img src="{{ asset('assets/img/services/community.webp') }}" 
                 onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80'" 
                 alt="Trade Community Feed" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-heading font-bold text-xl text-brand-dark group-hover:text-brand-blue transition-colors">
              Engage in a Trade Community Feed
            </h3>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
              Post updates, share market news, and interact with others in the global trade community &mdash; with a limit of one post per day per stakeholder to keep content focused.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2">
          <a href="{{ route('public.platform') }}#community" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover">
            <span>Community Feed</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Features: Professional Support from Logistics Experts Section -->
<section id="features" class="py-24 bg-white border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Visual Column -->
      <div class="lg:col-span-5">
        <div class="hero-image-wrapper aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl border border-sand-border group">
          <img src="{{ asset('assets/img/features-9.jpg') }}" 
               onerror="this.src='https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1200&q=80'" 
               alt="Professional Logistics Support" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="hero-overlay-gradient"></div>
          
          <div class="absolute bottom-6 left-6 right-6 hero-glass-card p-4 space-y-1 shadow-xl">
            <div class="text-xs font-bold text-brand-dark">Built by Logistics Practitioners</div>
            <div class="text-[11px] text-gray-500">6+ years international trade law &amp; global supply network expertise</div>
          </div>
        </div>
      </div>

      <!-- Content Column -->
      <div class="lg:col-span-7 space-y-6">
        <span class="badge-pill badge-pill-blue">Expertise &amp; Technology</span>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight leading-tight">
          Professional support from logistics experts
        </h2>
        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          {{ config('app.name') }} was founded by long-term logistics professionals who accepted the challenge to build the ultimate logistics platform. Our mission is to reduce waste in global supply chains by digitalizing international freight processes.
        </p>

        <div class="space-y-4 pt-2">
          
          <div class="flex items-start gap-4 p-4 rounded-2xl bg-sand-light border border-sand-border">
            <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="globe" class="w-5 h-5"></i>
            </div>
            <div>
              <h4 class="font-heading font-bold text-base text-brand-dark">Reduce Carbon Footprint</h4>
              <p class="text-xs sm:text-sm text-gray-600 mt-0.5">Calculate carbon emissions for your lanes and develop a sustainable shipping strategy.</p>
            </div>
          </div>

          <div class="flex items-start gap-4 p-4 rounded-2xl bg-sand-light border border-sand-border">
            <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center flex-shrink-0">
              <i data-lucide="shield-check" class="w-5 h-5"></i>
            </div>
            <div>
              <h4 class="font-heading font-bold text-base text-brand-dark">Mitigate Compliance Risks</h4>
              <p class="text-xs sm:text-sm text-gray-600 mt-0.5">Manage shipments, contracts, and approvals with secure audit trails and customizable access.</p>
            </div>
          </div>

          <div class="flex items-start gap-4 p-4 rounded-2xl bg-sand-light border border-sand-border">
            <div class="w-10 h-10 rounded-xl bg-cyan-100 text-cyan-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="trending-up" class="w-5 h-5"></i>
            </div>
            <div>
              <h4 class="font-heading font-bold text-base text-brand-dark">Dynamic Analytics Dashboard</h4>
              <p class="text-xs sm:text-sm text-gray-600 mt-0.5">Full transparency with real-time telemetry data for fast, confident decision-making.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Call To Action: Freight Revolution Section -->
<section id="call-to-action" class="py-20 bg-brand-dark text-white relative overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern-dark opacity-40 pointer-events-none"></div>
  
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 space-y-6">
    <span class="badge-pill bg-white/10 text-brand-green border border-white/15">Get Started Today</span>
    <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
      Help Deliver the Freight Revolution
    </h2>
    <p class="text-gray-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
      We are bringing global freight online with the only vendor-neutral global freight booking and payment platform. Ready to impact the way the world moves?
    </p>
    <div class="flex flex-wrap justify-center items-center gap-4 pt-4">
      <a @guest href="{{ route('login') }}" @else href="{{ route(auth()->user()->dashboard()) }}" @endguest class="btn-primary text-sm sm:text-base py-3.5 px-8 shadow-xl shadow-brand-blue/40">
        <span>Get Started</span>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
      <a href="{{ route('public.contact') }}" class="btn-outlined-white text-sm sm:text-base py-3.5 px-7">
        <span>Contact Our Team</span>
      </a>
    </div>
  </div>
</section>

<!-- Customer Testimonials & Case Studies -->
<section class="py-24 bg-sand/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <span class="text-xs font-bold uppercase tracking-widest text-brand-blue">Our Community</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
        Trusted by shippers, carriers &amp; trade professionals worldwide
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Story 1 -->
      <div class="bg-white p-8 rounded-2xl border border-gray-200/80 shadow-sm flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center gap-1 text-amber-400">
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
          </div>
          <p class="text-sm text-gray-700 italic leading-relaxed">
            "omehub cut our supply chain exception response times from hours to seconds. The automated customs filing and live container telemetry give us full peace of mind."
          </p>
        </div>
        <div class="pt-6 border-t border-gray-100 mt-6 flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm">
            ES
          </div>
          <div>
            <div class="font-bold text-sm text-brand-dark">Elena Schmidt</div>
            <div class="text-xs text-gray-500">VP Supply Chain, GreenSolar Europe</div>
          </div>
        </div>
      </div>

      <!-- Story 2 -->
      <div class="bg-white p-8 rounded-2xl border border-gray-200/80 shadow-sm flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center gap-1 text-amber-400">
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
          </div>
          <p class="text-sm text-gray-700 italic leading-relaxed">
            "As a freight forwarder, omehub has allowed us to fill empty backhaul container space on Asia-Europe corridors with zero credit risk and automated invoicing."
          </p>
        </div>
        <div class="pt-6 border-t border-gray-100 mt-6 flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-brand-green/15 text-emerald-700 font-bold flex items-center justify-center text-sm">
            ML
          </div>
          <div>
            <div class="font-bold text-sm text-brand-dark">Marc van Leeuwen</div>
            <div class="text-xs text-gray-500">Managing Director, TransNorth Logistics</div>
          </div>
        </div>
      </div>

      <!-- Story 3 -->
      <div class="bg-white p-8 rounded-2xl border border-gray-200/80 shadow-sm flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center gap-1 text-amber-400">
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
          </div>
          <p class="text-sm text-gray-700 italic leading-relaxed">
            "The instant rate comparison across ocean, air, and rail helped us reduce quarterly freight expenditure by 18% while meeting our strict carbon offset targets."
          </p>
        </div>
        <div class="pt-6 border-t border-gray-100 mt-6 flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-brand-cyan/15 text-brand-cyan font-bold flex items-center justify-center text-sm">
            DK
          </div>
          <div>
            <div class="font-bold text-sm text-brand-dark">David Kim</div>
            <div class="text-xs text-gray-500">Head of Procurement, Apex Mobility</div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

@include('test.includes.faq')

@endsection
