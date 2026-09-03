@extends('public.layout.public')

@section('title', 'Logistics & Transport Solutions')
@section('content')
<!-- Solutions Hero -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/30 py-20 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-7 space-y-6">
        <span class="badge-pill badge-pill-blue">Global Transport Solutions</span>
        <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-brand-dark tracking-tight leading-tight">
          Reliable, multimodal freight forwarding built for <span class="text-brand-blue">global trade.</span>
        </h1>
        <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-2xl">
          From full ocean container allocations to expedited air charters and automated customs clearance, omehub orchestrates every mile of your cargo with precision and live visibility.
        </p>
        <div class="flex flex-wrap gap-4 pt-2">
          <a href="{{ route('public.quote') }}" class="btn-primary text-sm py-3.5 px-6 shadow-lg shadow-brand-blue/25">
            <span>Get Instant Rates</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="{{ route('public.contact') }}" class="btn-outlined text-sm py-3.5 px-6">
            <span>Speak with a Trade Lane Specialist</span>
          </a>
        </div>
      </div>

      <!-- Hero Image on Right -->
      <div class="lg:col-span-5">
        <div class="hero-image-wrapper aspect-[4/3] group relative">
          <img src="https://images.unsplash.com/photo-1542296332-2e4473faf563?auto=format&fit=crop&w=1200&q=80" alt="Multimodal Freight & International Container Port Logistics" loading="eager">
          <div class="hero-overlay-gradient"></div>

          <!-- Floating Mode Cards -->
          <div class="absolute bottom-5 left-5 right-5 hero-glass-card p-4 flex items-center justify-between gap-3 shadow-lg">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-brand-green/20 text-brand-green flex items-center justify-center font-bold">
                <i data-lucide="zap" class="w-5 h-5 text-emerald-600"></i>
              </div>
              <div>
                <div class="text-xs font-extrabold text-brand-dark">Multimodal Hub Routing</div>
                <div class="text-[11px] text-gray-500">Ocean • Air • Rail • Road Intermodal</div>
              </div>
            </div>
            <span class="text-xs font-bold text-emerald-700 bg-brand-green/20 px-2.5 py-1 rounded-full whitespace-nowrap">Active 24/7</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Solution 1: Ocean Freight FCL -->
<section id="ocean-fcl" class="py-20 bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-blue/10 flex items-center justify-center text-brand-blue">
          <i data-lucide="ship" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Ocean Freight — Full Container Load (FCL)
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          Secure guaranteed container space across major alliances (2M, Ocean Alliance, THE Alliance). Direct contract rates and spot options for 20', 40', and 40' High Cube dry containers, reefers, and open tops.
        </p>
        <div class="grid grid-cols-2 gap-4 text-xs sm:text-sm text-gray-700 pt-2">
          <div class="flex items-center gap-2">
            <i data-lucide="check" class="w-4 h-4 text-brand-blue"></i>
            <span>Tier-1 Carrier Allocations</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="check" class="w-4 h-4 text-brand-blue"></i>
            <span>No Rolled Cargo Guarantee</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="check" class="w-4 h-4 text-brand-blue"></i>
            <span>Free Time Extension Options</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="check" class="w-4 h-4 text-brand-blue"></i>
            <span>Port-to-Port & Door-to-Door</span>
          </div>
        </div>
        <div class="pt-4">
          <a href="{{ route('public.quote') }}?mode=ocean&type=fcl" class="btn-primary text-xs sm:text-sm py-2.5 px-5">
            Book FCL Container Rate
          </a>
        </div>
      </div>
      <div class="lg:col-span-6">
        <div class="card-sand p-8 rounded-3xl border border-sand-border space-y-6">
          <h4 class="font-heading font-bold text-lg text-brand-dark">Key FCL Trade Corridors</h4>
          <div class="space-y-3 font-mono text-xs">
            <div class="p-3 bg-white rounded-xl border border-gray-200 flex items-center justify-between">
              <span class="font-bold text-brand-dark">Shanghai (CNSHA) → Rotterdam (NLRTM)</span>
              <span class="text-brand-blue font-bold">28 Days • Direct</span>
            </div>
            <div class="p-3 bg-white rounded-xl border border-gray-200 flex items-center justify-between">
              <span class="font-bold text-brand-dark">Ningbo (CNNGB) → Hamburg (DEHAM)</span>
              <span class="text-brand-blue font-bold">29 Days • Direct</span>
            </div>
            <div class="p-3 bg-white rounded-xl border border-gray-200 flex items-center justify-between">
              <span class="font-bold text-brand-dark">Shenzhen (CNSZX) → Los Angeles (USLAX)</span>
              <span class="text-brand-blue font-bold">16 Days • Express</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Solution 2: Ocean Freight LCL -->
<section id="ocean-lcl" class="py-20 bg-sand-light border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 order-2 lg:order-1">
        <div class="bg-white p-8 rounded-3xl border border-gray-200 shadow-sm space-y-6">
          <h4 class="font-heading font-bold text-lg text-brand-dark">LCL Consolidation Benefits</h4>
          <ul class="space-y-3 text-xs sm:text-sm text-gray-600">
            <li class="flex items-start gap-2.5">
              <i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i>
              <span><strong>Pay strictly for what you use:</strong> Rates calculated per cubic meter (CBM) or metric ton.</span>
            </li>
            <li class="flex items-start gap-2.5">
              <i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i>
              <span><strong>Frequent weekly sailings:</strong> Avoid waiting to fill an entire 40ft container before shipping.</span>
            </li>
            <li class="flex items-start gap-2.5">
              <i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i>
              <span><strong>Dedicated CFS de-consolidation:</strong> Direct handoff to local customs brokers without mixed delay risks.</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-green/15 flex items-center justify-center text-emerald-600">
          <i data-lucide="boxes" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Less than Container Load (LCL) Consolidation
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          Ideal for small to mid-sized cargo batches. Share container space with verified commercial shippers while enjoying full itemized barcoding and milestone telemetry.
        </p>
        <div class="pt-2">
          <a href="{{ route('public.quote') }}?mode=ocean&type=lcl" class="btn-primary text-xs sm:text-sm py-2.5 px-5">
            Calculate LCL per CBM
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Solution 3: Air Freight -->
<section id="air-freight" class="py-20 bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-cyan/15 flex items-center justify-center text-brand-cyan">
          <i data-lucide="plane" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Air Freight — Priority, Express & Charters
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          When speed is essential. We offer guaranteed belly space and scheduled freighter charters with airport-to-airport transit times as fast as 24-48 hours.
        </p>
        <div class="space-y-2 text-xs sm:text-sm text-gray-700">
          <div class="flex items-center gap-2">
            <i data-lucide="zap" class="w-4 h-4 text-amber-500"></i>
            <span><strong>Express Cargo:</strong> 1-3 days door-to-door transit</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="clock" class="w-4 h-4 text-brand-blue"></i>
            <span><strong>Standard Air:</strong> 4-6 days economical consolidation</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="thermometer-snowflake" class="w-4 h-4 text-cyan-600"></i>
            <span><strong>Temperature Controlled:</strong> Cold-chain pharma & perishable logistics</span>
          </div>
        </div>
        <div class="pt-4">
          <a href="{{ route('public.quote') }}?mode=air" class="btn-primary text-xs sm:text-sm py-2.5 px-5">
            Get Instant Air Cargo Rates
          </a>
        </div>
      </div>
      <div class="lg:col-span-6">
        <div class="card-dark p-8 rounded-3xl space-y-6">
          <div class="flex items-center justify-between">
            <span class="badge-pill bg-brand-green/20 text-brand-green text-xs">Global Airport Network</span>
            <span class="text-xs font-mono text-gray-400">Direct IATA Connect</span>
          </div>
          <h4 class="font-heading font-bold text-white text-xl">Expedited Global Air Corridors</h4>
          <div class="grid grid-cols-2 gap-3 text-xs font-mono">
            <div class="p-3 bg-white/5 rounded-xl border border-white/10">
              <div class="text-gray-400">PVG → FRA</div>
              <div class="text-white font-bold text-sm mt-1">1-2 Days Transit</div>
            </div>
            <div class="p-3 bg-white/5 rounded-xl border border-white/10">
              <div class="text-gray-400">HKG → ORD</div>
              <div class="text-white font-bold text-sm mt-1">2 Days Express</div>
            </div>
            <div class="p-3 bg-white/5 rounded-xl border border-white/10">
              <div class="text-gray-400">SIN → AMS</div>
              <div class="text-white font-bold text-sm mt-1">2 Days Direct</div>
            </div>
            <div class="p-3 bg-white/5 rounded-xl border border-white/10">
              <div class="text-gray-400">SGN → LAX</div>
              <div class="text-white font-bold text-sm mt-1">2-3 Days Transit</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Solution 4: Automated Customs Clearance -->
<section id="customs" class="py-20 bg-sand/40 border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-dark/10 flex items-center justify-center text-brand-dark">
          <i data-lucide="file-check" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Automated Customs Brokerage & Compliance
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          Say goodbye to customs delays, manual paperwork errors, and unexpected import duty penalties. Our AI engine extracts commercial invoice data, verifies tariff classifications (HS codes), and pre-clears shipments before the ship berths.
        </p>
        <div class="space-y-3 text-xs sm:text-sm text-gray-700">
          <div class="flex items-center gap-2">
            <i data-lucide="check" class="w-4 h-4 text-brand-green"></i>
            <span>EU Atlas & UK CDS Direct Electronic Customs Gateways</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="check" class="w-4 h-4 text-brand-green"></i>
            <span>US CBP Automated Commercial Environment (ACE) & ISF 10+2</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="check" class="w-4 h-4 text-brand-green"></i>
            <span>Duty & Tax Deferment Accounts Setup</span>
          </div>
        </div>
      </div>
      <div class="lg:col-span-6">
        <div class="bg-white p-8 rounded-3xl border border-gray-200 shadow-sm space-y-4">
          <div class="flex items-center justify-between pb-3 border-b border-gray-100">
            <span class="text-xs font-bold uppercase text-gray-400">Autonomous Customs Workflow</span>
            <span class="badge-pill badge-pill-green text-xs">Zero Paper Dwell</span>
          </div>
          <div class="space-y-3 text-xs">
            <div class="p-3 bg-sand rounded-xl border border-gray-200 flex items-center justify-between">
              <span>1. Commercial Invoice & Packing List Upload</span>
              <span class="text-brand-green font-bold"><i data-lucide="check-circle" class="w-3.5 h-3.5 inline"></i> OCR Verified</span>
            </div>
            <div class="p-3 bg-sand rounded-xl border border-gray-200 flex items-center justify-between">
              <span>2. AI HS Tariff Code Auto-Matching</span>
              <span class="text-brand-blue font-bold">100% Match Rate</span>
            </div>
            <div class="p-3 bg-sand rounded-xl border border-gray-200 flex items-center justify-between">
              <span>3. Electronic Declaration Lodgement</span>
              <span class="text-brand-green font-bold">Pre-Arrival Cleared</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Solution 5: Green Logistics -->
<section id="sustainability" class="py-20 bg-emerald-900 text-white relative overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern-dark opacity-20 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl space-y-6">
      <span class="badge-pill bg-brand-green/20 text-brand-green border border-brand-green/30 text-xs">#omegreen Commitment</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
        Decarbonize your global supply chain with real maritime biofuel.
      </h2>
      <p class="text-emerald-100 text-base sm:text-lg leading-relaxed">
        Offset 100% of your ocean and air transport carbon footprint through second-generation waste-based biofuels (UCOME) and Sustainable Aviation Fuel (SAF). GLEC-compliant auditing for your ESG reporting.
      </p>
    </div>
  </div>
</section>

@endsection
