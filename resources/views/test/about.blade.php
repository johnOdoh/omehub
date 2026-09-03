@extends('public.layout.public')

@section('title', 'About Us - Global Freight Forwarding & Logistics Solutions | omehub')
@section('content')

<!-- About Hero -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/30 py-20 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Hero Content -->
      <div class="lg:col-span-7 space-y-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue-light text-brand-blue text-xs font-bold uppercase tracking-wider">
          <i data-lucide="compass" class="w-3.5 h-3.5"></i>
          <span>About {{ config('app.name') }} &bull; Digital Trade Gateway</span>
        </div>

        <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-brand-dark tracking-tight leading-[1.12]">
          We help you find the best global <span class="text-brand-blue">transport options instantly.</span>
        </h1>

        <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-2xl">
          {{ config('app.name') }} was founded with a simple but powerful idea &mdash; that international trade should be accessible, efficient, and transparent for everyone.
        </p>

        <!-- Trust Badges Row -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2">
          <div class="bg-white/80 backdrop-blur-sm border border-sand-border rounded-xl p-3 flex items-center gap-2.5 shadow-sm">
            <div class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center flex-shrink-0">
              <i data-lucide="globe-2" class="w-4 h-4"></i>
            </div>
            <div>
              <div class="text-xs font-extrabold text-brand-dark">100+ Countries</div>
              <div class="text-[10px] text-gray-500">Global Coverage</div>
            </div>
          </div>

          <div class="bg-white/80 backdrop-blur-sm border border-sand-border rounded-xl p-3 flex items-center gap-2.5 shadow-sm">
            <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="shield-check" class="w-4 h-4"></i>
            </div>
            <div>
              <div class="text-xs font-extrabold text-brand-dark">KYC Verified</div>
              <div class="text-[10px] text-gray-500">NDPC Certified</div>
            </div>
          </div>

          <div class="bg-white/80 backdrop-blur-sm border border-sand-border rounded-xl p-3 flex items-center gap-2.5 shadow-sm">
            <div class="w-8 h-8 rounded-lg bg-cyan-100 text-cyan-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="activity" class="w-4 h-4"></i>
            </div>
            <div>
              <div class="text-xs font-extrabold text-brand-dark">24/7 Live Radar</div>
              <div class="text-[10px] text-gray-500">Real-Time Tracking</div>
            </div>
          </div>

          <div class="bg-white/80 backdrop-blur-sm border border-sand-border rounded-xl p-3 flex items-center gap-2.5 shadow-sm">
            <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="lock" class="w-4 h-4"></i>
            </div>
            <div>
              <div class="text-xs font-extrabold text-brand-dark">Pay On Delivery</div>
              <div class="text-[10px] text-gray-500">Escrow Security</div>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap items-center gap-4 pt-4">
          <a href="{{ route('public.quote') }}" class="btn-primary text-sm py-3.5 px-6 shadow-lg shadow-brand-blue/25">
            <span>Explore Freight Rates</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="#story" class="btn-outlined text-sm py-3.5 px-6">
            <span>Read Our Story</span>
          </a>
        </div>
      </div>

      <!-- Hero Visual with Video Modal Link -->
      <div class="lg:col-span-5">
        <div class="hero-image-wrapper aspect-[4/3] group relative shadow-2xl">
          <img src="{{ asset('assets/img/story.jpg') }}" 
               onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80'" 
               alt="{{ config('app.name') }} Global Logistics Story" 
               class="w-full h-full object-cover">
          <div class="hero-overlay-gradient"></div>

          <!-- Video Play Button Overlay -->
          <a href="https://youtube.com/embed/3WeeLhKguEY" 
             target="_blank" 
             rel="noopener noreferrer" 
             class="absolute inset-0 m-auto w-16 h-16 rounded-full bg-brand-blue/90 hover:bg-brand-blue text-white flex items-center justify-center shadow-xl hover:scale-110 transition-all z-20 group-hover:bg-brand-blue"
             aria-label="Watch {{ config('app.name') }} Story Video">
            <i data-lucide="play" class="w-7 h-7 fill-white ml-1"></i>
          </a>

          <!-- Floating Glass Card -->
          <div class="absolute bottom-4 left-4 right-4 hero-glass-card p-4 flex items-center justify-between gap-3 shadow-lg z-20">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center font-bold flex-shrink-0">
                <i data-lucide="anchor" class="w-5 h-5"></i>
              </div>
              <div>
                <div class="text-xs font-extrabold text-brand-dark">Your Gateway to Global Trade</div>
                <div class="text-[11px] text-gray-500">Shippers &bull; Carriers &bull; Finance &bull; Legal</div>
              </div>
            </div>
            <span class="text-xs font-bold text-brand-blue bg-brand-blue-light px-2.5 py-1 rounded-full whitespace-nowrap">Verified</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Our Story Section -->
<section id="story" class="py-24 bg-white border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
      
      <!-- Visual Column -->
      <div class="lg:col-span-5 order-2 lg:order-1">
        <div class="relative">
          <div class="rounded-3xl overflow-hidden shadow-2xl border border-sand-border relative aspect-[4/3] group">
            <img src="{{ asset('assets/img/features-6.jpg') }}" 
                 onerror="this.src='https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1200&q=80'" 
                 alt="{{ config('app.name') }} Logistics Architecture" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/70 via-brand-dark/20 to-transparent"></div>
            
            <div class="absolute bottom-6 left-6 right-6 text-white space-y-1">
              <span class="text-xs font-bold uppercase tracking-widest text-brand-green">Founded On Purpose</span>
              <h4 class="font-heading font-bold text-xl text-white">Making international trade easier and more human</h4>
            </div>
          </div>

          <!-- Highlight Box -->
          <div class="mt-6 bg-sand-light border border-sand-border p-6 rounded-2xl space-y-3">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center font-bold">
                <i data-lucide="award" class="w-5 h-5"></i>
              </div>
              <div>
                <h5 class="font-heading font-bold text-brand-dark text-sm">Regulated &amp; Certified</h5>
                <p class="text-xs text-gray-500">Nigeria Data Protection Commission (NDPC)</p>
              </div>
            </div>
            <p class="text-xs text-gray-600 leading-relaxed">
              Omefreight Logistics Ltd ({{ config('app.name') }}) is duly registered and certified as a Data Controller of Major Importance (Ultra-High Level) &bull; <strong class="text-brand-dark">ID: NDPC/DCP/09043</strong>.
            </p>
          </div>
        </div>
      </div>

      <!-- Story Text Column -->
      <div class="lg:col-span-7 order-1 lg:order-2 space-y-6">
        <span class="badge-pill badge-pill-blue">Our Story</span>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight leading-tight">
          How {{ config('app.name') }} was born
        </h2>

        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          {{ config('app.name') }} was founded with a simple but powerful idea &mdash; that international trade should be accessible, efficient, and transparent for everyone. The founder of {{ config('app.name') }} has built a career rooted in solving real-world problems. With years of experience spanning logistics, compliance, and international trade, he developed a deep understanding of how challenging cross-border shipping can be.
        </p>

        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          He saw firsthand how businesses from startups to established enterprises struggled to coordinate freight, access dependable service providers, get clear pricing, and manage legal or financial support. The process was often disjointed, time-consuming, and lacked transparency. That insight became the driving force behind {{ config('app.name') }}.
        </p>

        <div class="p-5 rounded-2xl bg-brand-blue-light/60 border border-brand-blue/15 space-y-2">
          <p class="font-heading font-bold text-brand-dark text-base">
            Ifeanyi knew there had to be a better way. So, he created one.
          </p>
          <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
            {{ config('app.name') }} was born to bring every essential trade service into a single digital space. From booking freight and tracking shipments to applying for insurance and resolving disputes, users can manage everything they need in one place. It is designed not just for large corporations, but also for small businesses, individuals, and growing brands that want to trade smarter and more confidently.
          </p>
        </div>

        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          More than just a platform, {{ config('app.name') }} is a growing community. It connects shippers, freight providers, legal experts, insurers, and financial partners with tools and opportunities to grow together. It offers real-time insights, compliance support, and even carbon offsetting options for users who want to reduce their environmental impact.
        </p>

        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          Our mission is simple. We want to make global trade easier and more human. We want to support companies of all sizes, from anywhere in the world, and give them the tools to succeed in the global economy. Today, {{ config('app.name') }} stands for progress. It stands for trust, simplicity, and a better way to move goods across borders.
        </p>

        <div class="border-l-4 border-brand-blue pl-4 py-1">
          <p class="font-heading font-bold text-brand-dark text-base italic">
            &ldquo;Welcome to {{ config('app.name') }}. Your gateway to global trade.&rdquo;
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Why Choose {{ config('app.name') }} Section -->
<section id="why-choose" class="py-24 bg-sand-light border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-3xl mx-auto text-center mb-16 space-y-4">
      <span class="badge-pill badge-pill-blue">Why Choose {{ config('app.name') }}</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
        A smarter, greener, more connected way to trade
      </h2>
      <p class="text-gray-600 text-base leading-relaxed">
        {{ config('app.name') }} was built to simplify how businesses and individuals move goods around the world. Whether you're shipping across borders or managing multiple partners, we bring everything you need into one smart, digital space.
      </p>
    </div>

    <!-- 4 Core Pillars Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <!-- Card 1 -->
      <div class="card-sand p-6 rounded-3xl bg-white border border-sand-border space-y-4 shadow-sm hover:shadow-md transition-all">
        <div class="w-12 h-12 rounded-2xl bg-brand-blue/10 flex items-center justify-center text-brand-blue">
          <i data-lucide="package-search" class="w-6 h-6"></i>
        </div>
        <h3 class="font-heading font-bold text-lg text-brand-dark">Compare &amp; Book Freight</h3>
        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
          Easily compare and book freight from trusted logistics providers across ocean, air, and road modes with guaranteed rate transparency.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="card-sand p-6 rounded-3xl bg-white border border-sand-border space-y-4 shadow-sm hover:shadow-md transition-all">
        <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-700">
          <i data-lucide="activity" class="w-6 h-6"></i>
        </div>
        <h3 class="font-heading font-bold text-lg text-brand-dark">Real-Time Tracking</h3>
        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
          Track your shipments in real time, monitor milestone status updates, and manage your entire supply chain directly from your dashboard.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="card-sand p-6 rounded-3xl bg-white border border-sand-border space-y-4 shadow-sm hover:shadow-md transition-all">
        <div class="w-12 h-12 rounded-2xl bg-cyan-100 flex items-center justify-center text-cyan-700">
          <i data-lucide="shield-check" class="w-6 h-6"></i>
        </div>
        <h3 class="font-heading font-bold text-lg text-brand-dark">Finance &amp; Insurance</h3>
        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
          Apply for flexible trade finance once shipments are in transit, protect cargo with tailored insurance, and resolve disputes fast.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="card-sand p-6 rounded-3xl bg-white border border-sand-border space-y-4 shadow-sm hover:shadow-md transition-all">
        <div class="w-12 h-12 rounded-2xl bg-amber-100 flex items-center justify-center text-amber-700">
          <i data-lucide="leaf" class="w-6 h-6"></i>
        </div>
        <h3 class="font-heading font-bold text-lg text-brand-dark">CO₂ Offsetting &amp; Feed</h3>
        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
          Reduce your environmental impact with in-platform carbon offsetting and connect with global trade partners via the community feed.
        </p>
      </div>

    </div>

    <!-- Summary Box -->
    <div class="mt-12 bg-white rounded-3xl p-8 border border-sand-border shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="space-y-2 max-w-2xl">
        <h4 class="font-heading font-bold text-xl text-brand-dark">It’s not just logistics &mdash; it’s your complete trade command centre</h4>
        <p class="text-gray-600 text-sm leading-relaxed">
          From booking to delivery, {{ config('app.name') }} brings shippers, freight providers, insurers, and legal professionals together under one unified digital platform.
        </p>
      </div>
      <a href="{{ route('public.for-shippers') }}" class="btn-primary text-sm py-3 px-6 whitespace-nowrap">
        <span>Get Started as a Shipper</span>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

  </div>
</section>

<!-- Driving Sustainable Trade & Our Promise Section -->
<section id="sustainability" class="py-24 bg-white border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
      
      <!-- Left Content -->
      <div class="lg:col-span-6 space-y-6">
        <span class="badge-pill badge-pill-green">Sustainability &amp; Security</span>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight leading-tight">
          Driving sustainable trade with unwavering integrity
        </h2>
        
        <p class="text-brand-blue font-medium text-sm sm:text-base italic border-l-4 border-brand-blue pl-4">
          &ldquo;We are building a platform grounded in security, transparency, and compliance.&rdquo;
        </p>

        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
          We believe logistics shouldn’t come at the expense of the planet. {{ config('app.name') }} calculates your shipment’s carbon footprint and offers you the opportunity to offset it directly during checkout. At year-end, you’ll receive a personalized carbon offset certificate, recognizing your contribution to greener global trade.
        </p>

        <!-- Our 4-Point Promise List -->
        <div class="space-y-4 pt-2">
          <h4 class="font-heading font-bold text-lg text-brand-dark">Our Security &amp; Trust Promise</h4>
          
          <div class="space-y-3">
            <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-sand-light border border-sand-border">
              <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                <i data-lucide="check" class="w-4 h-4"></i>
              </div>
              <div>
                <strong class="text-sm font-bold text-brand-dark">Verified Identity &amp; KYC:</strong>
                <p class="text-xs text-gray-600 mt-0.5">All individual and corporate users are thoroughly verified via ID and KYC checks before transacting.</p>
              </div>
            </div>

            <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-sand-light border border-sand-border">
              <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                <i data-lucide="check" class="w-4 h-4"></i>
              </div>
              <div>
                <strong class="text-sm font-bold text-brand-dark">Automated Embargo Filtering:</strong>
                <p class="text-xs text-gray-600 mt-0.5">Embargoed and sanctioned destinations are automatically blocked across all search and booking modules.</p>
              </div>
            </div>

            <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-sand-light border border-sand-border">
              <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                <i data-lucide="check" class="w-4 h-4"></i>
              </div>
              <div>
                <strong class="text-sm font-bold text-brand-dark">Legal Goods Declaration:</strong>
                <p class="text-xs text-gray-600 mt-0.5">Users must explicitly declare their goods as legal and non-restricted prior to completing any booking.</p>
              </div>
            </div>

            <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-sand-light border border-sand-border">
              <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                <i data-lucide="check" class="w-4 h-4"></i>
              </div>
              <div>
                <strong class="text-sm font-bold text-brand-dark">Milestone Escrow Protection:</strong>
                <p class="text-xs text-gray-600 mt-0.5">Payments are held in secure escrow and released only after confirmed and verified service delivery.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Right Visual Column -->
      <div class="lg:col-span-6">
        <div class="hero-image-wrapper aspect-[4/3] relative rounded-3xl overflow-hidden shadow-2xl border border-sand-border group">
          <img src="{{ asset('assets/img/features-4.jpg') }}" 
               onerror="this.src='https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=1200&q=80'" 
               alt="{{ config('app.name') }} Green Logistics & Sustainability" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="hero-overlay-gradient"></div>

          <!-- Inset Carbon Certificate Floating Card -->
          <div class="absolute bottom-6 left-6 right-6 hero-glass-card p-5 space-y-3 shadow-xl">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-emerald-600 text-white flex items-center justify-center">
                  <i data-lucide="leaf" class="w-4 h-4"></i>
                </div>
                <div>
                  <div class="text-xs font-bold text-brand-dark">Carbon Offset Certificate</div>
                  <div class="text-[10px] text-gray-500">Verified ESG Milestone</div>
                </div>
              </div>
              <span class="text-xs font-extrabold text-emerald-700 bg-emerald-100 px-2.5 py-1 rounded-full">Annual Audit</span>
            </div>
            <p class="text-xs text-gray-600 leading-relaxed">
              Every shipment calculated, verified, and offset contributes towards recognized global environmental sustainability standards.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Where We Operate & Built For All Section -->
<section id="where-we-operate" class="py-24 bg-sand-light border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-16">
      <div class="lg:col-span-7 space-y-4">
        <span class="badge-pill badge-pill-blue">Global Reach</span>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
          Where we operate &mdash; Global by design
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          {{ config('app.name') }} is global by design. Our platform supports shipments to and from most countries around the world, with automated compliance screening and region-specific services. Whether you're in Africa, Europe, Asia, South America, or North America, {{ config('app.name') }} brings the trade world to your fingertips.
        </p>
      </div>

      <div class="lg:col-span-5 flex flex-wrap gap-2 justify-start lg:justify-end">
        <span class="px-3.5 py-1.5 rounded-full bg-white border border-sand-border text-xs font-bold text-brand-dark shadow-sm">🌍 Africa</span>
        <span class="px-3.5 py-1.5 rounded-full bg-white border border-sand-border text-xs font-bold text-brand-dark shadow-sm">🇪🇺 Europe</span>
        <span class="px-3.5 py-1.5 rounded-full bg-white border border-sand-border text-xs font-bold text-brand-dark shadow-sm">🌏 Asia-Pacific</span>
        <span class="px-3.5 py-1.5 rounded-full bg-white border border-sand-border text-xs font-bold text-brand-dark shadow-sm">🌎 North America</span>
        <span class="px-3.5 py-1.5 rounded-full bg-white border border-sand-border text-xs font-bold text-brand-dark shadow-sm">🌎 South America</span>
      </div>
    </div>

    <!-- Built For All: 4 Groups -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <div class="bg-white rounded-3xl p-6 border border-sand-border space-y-3 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center font-bold">
          <i data-lucide="user" class="w-5 h-5"></i>
        </div>
        <h3 class="font-heading font-bold text-base text-brand-dark">Individuals</h3>
        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
          Ship personal cargo and parcels with complete confidence, upfront rate clarity, and door-to-door flexibility.
        </p>
      </div>

      <div class="bg-white rounded-3xl p-6 border border-sand-border space-y-3 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">
          <i data-lucide="building-2" class="w-5 h-5"></i>
        </div>
        <h3 class="font-heading font-bold text-base text-brand-dark">Companies</h3>
        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
          Manage teams, track multiple shipments simultaneously, and access instant trade financing and cargo insurance.
        </p>
      </div>

      <div class="bg-white rounded-3xl p-6 border border-sand-border space-y-3 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-cyan-100 text-cyan-700 flex items-center justify-center font-bold">
          <i data-lucide="truck" class="w-5 h-5"></i>
        </div>
        <h3 class="font-heading font-bold text-base text-brand-dark">Logistics Partners</h3>
        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
          Gain high-intent shippers, automate quote generation, and eliminate tedious manual offline negotiations.
        </p>
      </div>

      <div class="bg-white rounded-3xl p-6 border border-sand-border space-y-3 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center font-bold">
          <i data-lucide="scale" class="w-5 h-5"></i>
        </div>
        <h3 class="font-heading font-bold text-base text-brand-dark">Finance &amp; Legal Providers</h3>
        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
          Connect with pre-verified corporate clients with structured workflows, dispute mediation, and secure settlements.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- Who Is It For Section -->
<section id="who-is-it-for" class="py-24 bg-white border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
      
      <!-- Content Left -->
      <div class="lg:col-span-6 space-y-8">
        <div>
          <span class="badge-pill badge-pill-blue">Who Is It For</span>
          <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight mt-2">
            Built to support every player in global trade
          </h2>
          <p class="text-gray-600 text-sm sm:text-base leading-relaxed mt-3">
            {{ config('app.name') }} is built to support every player in global trade, no matter the size, location, or level of experience.
          </p>
        </div>

        <div class="space-y-6">
          
          <!-- Item 1 -->
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-2xl bg-brand-blue-light text-brand-blue flex items-center justify-center flex-shrink-0 font-bold text-xl">
              <i data-lucide="briefcase" class="w-6 h-6"></i>
            </div>
            <div class="space-y-1">
              <h3 class="font-heading font-bold text-lg text-brand-dark">Businesses</h3>
              <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Simplify your global shipping, cut down on coordination time, and get access to flexible finance and insurance tools.
              </p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 font-bold text-xl">
              <i data-lucide="truck" class="w-6 h-6"></i>
            </div>
            <div class="space-y-1">
              <h3 class="font-heading font-bold text-lg text-brand-dark">Freight Providers</h3>
              <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Connect with verified, ready-to-ship clients and grow your business on a trusted global marketplace.
              </p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center flex-shrink-0 font-bold text-xl">
              <i data-lucide="trending-up" class="w-6 h-6"></i>
            </div>
            <div class="space-y-1">
              <h3 class="font-heading font-bold text-lg text-brand-dark">Trade Professionals</h3>
              <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Gain access to essential services like insurance, compliance tools, legal support, and more, all in one place.
              </p>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0 font-bold text-xl">
              <i data-lucide="leaf" class="w-6 h-6"></i>
            </div>
            <div class="space-y-1">
              <h3 class="font-heading font-bold text-lg text-brand-dark">Sustainable Brands</h3>
              <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Track your emissions, offset your footprint, and earn green certifications to support your ESG goals.
              </p>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Visual -->
      <div class="lg:col-span-6">
        <div class="hero-image-wrapper aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl border border-sand-border group">
          <img src="{{ asset('assets/img/features-7.jpg') }}" 
               onerror="this.src='https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1200&q=80'" 
               alt="{{ config('app.name') }} Trade Ecosystem" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="hero-overlay-gradient"></div>

          <!-- Floating Ecosystem Tag -->
          <div class="absolute bottom-6 left-6 right-6 hero-glass-card p-4 space-y-1 shadow-xl">
            <div class="text-xs font-bold text-brand-dark">Complete Cross-Border Ecosystem</div>
            <div class="text-[11px] text-gray-500">Shippers &bull; Freight Carriers &bull; Legal Counsel &bull; Trade Lenders</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Leadership Team Section -->
<section id="leadership" class="py-24 bg-sand-light border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-3xl mx-auto text-center mb-16 space-y-3">
      <span class="badge-pill badge-pill-blue">Leadership Team</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
        Meet the team behind {{ config('app.name') }}
      </h2>
      <p class="text-gray-600 text-base leading-relaxed">
        Guided by deep industry expertise in international trade law, global supply networks, and scalable digital infrastructure.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      
      <!-- Team Member 1: Omeh Ifeanyi -->
      <div class="bg-white rounded-3xl p-8 border border-sand-border shadow-sm hover:shadow-lg transition-all space-y-6 flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center gap-4">
            <div class="w-20 h-20 rounded-2xl overflow-hidden border-2 border-brand-blue/20 flex-shrink-0 bg-brand-blue/5">
              <img src="{{ asset('assets/img/team/team-1.png') }}" 
                   onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80'" 
                   alt="Omeh Ifeanyi" 
                   class="w-full h-full object-cover">
            </div>
            <div>
              <h3 class="font-heading font-bold text-xl text-brand-dark">Omeh Ifeanyi</h3>
              <div class="text-xs font-bold uppercase tracking-wider text-brand-blue mt-0.5">Founder &amp; Hub Director</div>
              <div class="text-[11px] text-gray-500 mt-1">LLB &bull; LLM &bull; Adv. Dip Import/Export</div>
            </div>
          </div>

          <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
            Holding an LLB, LLM, and an Advanced Diploma in Import/Export, I have cultivated over six years of expertise in international trade law and logistics operations. My work focuses on enhancing compliance, efficiency, and sustainability across global supply networks.
          </p>
        </div>

        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
          <span class="text-xs text-gray-500 font-medium">Trade Law &amp; Operations</span>
          <a href="https://www.linkedin.com/in/ifeanyi-omeh-73498b9a/?utm_source=share&utm_campaign=share_via&utm_content=profile" 
             target="_blank" 
             rel="noopener noreferrer" 
             class="w-9 h-9 rounded-xl bg-sand-light hover:bg-brand-blue hover:text-white flex items-center justify-center text-gray-600 transition-colors"
             aria-label="LinkedIn Profile">
            <i data-lucide="linkedin" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

      <!-- Team Member 2: Mama Godfrey -->
      <div class="bg-white rounded-3xl p-8 border border-sand-border shadow-sm hover:shadow-lg transition-all space-y-6 flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center gap-4">
            <div class="w-20 h-20 rounded-2xl overflow-hidden border-2 border-emerald-500/20 flex-shrink-0 bg-emerald-50">
              <img src="{{ asset('assets/img/team/team-3.jpg') }}" 
                   onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80'" 
                   alt="Mama Godfrey" 
                   class="w-full h-full object-cover">
            </div>
            <div>
              <h3 class="font-heading font-bold text-xl text-brand-dark">Mama Godfrey</h3>
              <div class="text-xs font-bold uppercase tracking-wider text-emerald-700 mt-0.5">Head of Technical Support</div>
              <div class="text-[11px] text-gray-500 mt-1">B.Eng Electrical &amp; Electronics</div>
            </div>
          </div>

          <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
            Mama Godfrey is a passionate Electrical and Electronics Engineering graduate with strong technical skills and a deep love for technology, ensuring seamless platform reliability, data security, and swift technical support for all marketplace users.
          </p>
        </div>

        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
          <span class="text-xs text-gray-500 font-medium">Platform Infrastructure</span>
          <a href="#" class="w-9 h-9 rounded-xl bg-sand-light hover:bg-brand-blue hover:text-white flex items-center justify-center text-gray-600 transition-colors" aria-label="Twitter Profile">
            <i data-lucide="twitter" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Brand Highlights & Testimonials Section -->
<section id="community-voice" class="py-24 bg-brand-dark text-white relative overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern-dark opacity-30 pointer-events-none"></div>
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    
    <div class="max-w-3xl mx-auto text-center mb-16 space-y-3">
      <span class="badge-pill bg-white/10 text-brand-green border border-white/15">Community Voice</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-white tracking-tight">
        The {{ config('app.name') }} trade ecosystem in action
      </h2>
      <p class="text-gray-400 text-base leading-relaxed">
        Connecting global cargo in clicks, not calls &mdash; hear how {{ config('app.name') }} powers smarter cross-border commerce.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Quote 1 -->
      <div class="bg-white/5 backdrop-blur-md p-6 rounded-3xl border border-white/10 space-y-4 hover:border-brand-blue/50 transition-colors">
        <div class="w-10 h-10 rounded-xl bg-brand-blue/20 text-brand-blue flex items-center justify-center">
          <i data-lucide="quote" class="w-5 h-5 text-cyan-400"></i>
        </div>
        <p class="text-gray-300 text-sm leading-relaxed">
          &ldquo;The {{ config('app.name') }} Blog is more than a feature, it's your voice in the global trade community. Advertise your services, share your updates, and connect with partners worldwide &mdash; all from your dashboard.&rdquo;
        </p>
        <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
          <span class="font-bold text-white">Community &amp; Media</span>
          <span>{{ config('app.name') }} Bulletin</span>
        </div>
      </div>

      <!-- Quote 2 -->
      <div class="bg-white/5 backdrop-blur-md p-6 rounded-3xl border border-white/10 space-y-4 hover:border-brand-blue/50 transition-colors">
        <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center">
          <i data-lucide="quote" class="w-5 h-5 text-emerald-400"></i>
        </div>
        <p class="text-gray-300 text-sm leading-relaxed">
          &ldquo;Ship smarter, not harder &mdash; {{ config('app.name') }} connects your cargo to the world in clicks, not calls.&rdquo;
        </p>
        <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
          <span class="font-bold text-white">Instant Booking</span>
          <span>Global Shippers</span>
        </div>
      </div>

      <!-- Quote 3 -->
      <div class="bg-white/5 backdrop-blur-md p-6 rounded-3xl border border-white/10 space-y-4 hover:border-brand-blue/50 transition-colors">
        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center">
          <i data-lucide="quote" class="w-5 h-5 text-cyan-400"></i>
        </div>
        <p class="text-gray-300 text-sm leading-relaxed">
          &ldquo;Trade without borders, stress, or surprises &mdash; all from one unified digital logistics hub.&rdquo;
        </p>
        <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
          <span class="font-bold text-white">Transparent Pricing</span>
          <span>SME Importers</span>
        </div>
      </div>

      <!-- Quote 4 -->
      <div class="bg-white/5 backdrop-blur-md p-6 rounded-3xl border border-white/10 space-y-4 hover:border-brand-blue/50 transition-colors">
        <div class="w-10 h-10 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center">
          <i data-lucide="quote" class="w-5 h-5 text-amber-400"></i>
        </div>
        <p class="text-gray-300 text-sm leading-relaxed">
          &ldquo;From booking to delivery, {{ config('app.name') }} keeps your business in motion with live radar tracking.&rdquo;
        </p>
        <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
          <span class="font-bold text-white">End-to-End Visibility</span>
          <span>Supply Chain Control</span>
        </div>
      </div>

      <!-- Quote 5 -->
      <div class="bg-white/5 backdrop-blur-md p-6 rounded-3xl border border-white/10 space-y-4 hover:border-brand-blue/50 transition-colors">
        <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center">
          <i data-lucide="quote" class="w-5 h-5 text-purple-400"></i>
        </div>
        <p class="text-gray-300 text-sm leading-relaxed">
          &ldquo;One login. Every freight, finance, and fix &mdash; {{ config('app.name') }} has you covered from origin to destination.&rdquo;
        </p>
        <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
          <span class="font-bold text-white">Integrated Services</span>
          <span>Finance &amp; Claims</span>
        </div>
      </div>

      <!-- Quote 6 -->
      <div class="bg-white/5 backdrop-blur-md p-6 rounded-3xl border border-white/10 space-y-4 hover:border-brand-blue/50 transition-colors">
        <div class="w-10 h-10 rounded-xl bg-rose-500/20 text-rose-400 flex items-center justify-center">
          <i data-lucide="quote" class="w-5 h-5 text-rose-400"></i>
        </div>
        <p class="text-gray-300 text-sm leading-relaxed">
          &ldquo;{{ config('app.name') }} isn’t just logistics, it’s your global trade command centre.&rdquo;
        </p>
        <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
          <span class="font-bold text-white">Enterprise Power</span>
          <span>Multi-Tenant Hub</span>
        </div>
      </div>

    </div>

  </div>
</section>

@include('test.includes.faq')

<!-- Office Hubs & Regulatory Accreditation Section -->
<section id="locations" class="py-20 bg-sand-light">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      
      <!-- Accreditation Note -->
      <div class="lg:col-span-6 bg-white p-8 rounded-3xl border border-sand-border space-y-4 shadow-sm">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider">
          <i data-lucide="shield-check" class="w-4 h-4"></i>
          <span>Official Data Protection Certification</span>
        </div>
        <h3 class="font-heading font-bold text-2xl text-brand-dark">Certified Data Controller</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Omefreight Logistics Ltd () is duly registered and certified by the <strong>Nigeria Data Protection Commission (NDPC)</strong> as a Data Controller of Major Importance (Ultra-High Level).
        </p>
        <div class="p-4 rounded-xl bg-sand-light border border-sand-border flex items-center justify-between">
          <span class="text-xs text-gray-500 font-medium">Official NDPC Registration</span>
          <span class="text-xs font-mono font-bold text-brand-blue bg-brand-blue-light px-2.5 py-1 rounded-lg">REGISTRATION ID: NDPC/DCP/09043</span>
        </div>
      </div>

      <!-- Locations -->
      <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
        
        <!-- Lagos Hub -->
        <div class="bg-white p-6 rounded-3xl border border-sand-border space-y-3 shadow-sm">
          <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center">
            <i data-lucide="map-pin" class="w-5 h-5"></i>
          </div>
          <h4 class="font-heading font-bold text-base text-brand-dark">Lagos Hub, Nigeria</h4>
          <p class="text-xs text-gray-600 leading-relaxed">
            17th Floor Elephant House,<br>
            214 Broad Street, Marina,<br>
            Lagos, Nigeria.
          </p>
          <div class="text-xs text-brand-blue font-bold pt-1">support@ome-hub.com</div>
        </div>

        <!-- Enugu Hub -->
        <div class="bg-white p-6 rounded-3xl border border-sand-border space-y-3 shadow-sm">
          <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center">
            <i data-lucide="map-pin" class="w-5 h-5"></i>
          </div>
          <h4 class="font-heading font-bold text-base text-brand-dark">Enugu Hub, Nigeria</h4>
          <p class="text-xs text-gray-600 leading-relaxed">
            Zone C New Market Express,<br>
            Enugu, Nigeria.
          </p>
          <div class="text-xs text-brand-blue font-bold pt-1">support@ome-hub.com</div>
        </div>

      </div>

    </div>

  </div>
</section>

@endsection
