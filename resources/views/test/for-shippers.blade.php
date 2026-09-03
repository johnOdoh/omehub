@extends('public.layout.public')

@section('title', 'For Shippers | '. config('app.name') .' Global Trade Platform')
@section('content')

<!-- Shippers Hero -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/30 py-20 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <span class="badge-pill badge-pill-blue">For Shippers</span>
        <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-brand-dark tracking-tight leading-tight">
          Stress-free global shipping for <span class="text-brand-blue">all freight modes.</span>
        </h1>
        <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-xl">
          Whether you're an SME exporting goods, an individual shipping personal items, or an enterprise managing supply chains, OmeHub makes cross-border shipping simple, transparent, and affordable.
        </p>
        <ul class="space-y-2 text-sm text-gray-700">
          <li class="flex items-center gap-2.5">
            <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0"></i>
            <span>Instant quotes &amp; flexible pricing &mdash; no hidden fees</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0"></i>
            <span>Access to trade financing &amp; cargo insurance</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0"></i>
            <span>Real-time shipment tracking from your dashboard</span>
          </li>
        </ul>
        <div class="flex flex-wrap gap-4 pt-2">
          <a @guest href="{{ route('login') }}" @else href="{{ route(auth()->user()->dashboard()) }}" @endguest class="btn-primary text-sm py-3.5 px-6 shadow-lg shadow-brand-blue/30">
            <span>Get Started</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="{{ route('public.contact') }}" class="btn-outlined text-sm py-3.5 px-6">
            <span>Talk to Our Team</span>
          </a>
        </div>
      </div>

      <!-- Right Column: Hero Visual & Shipper Guarantees Overlay -->
      <div class="lg:col-span-6 space-y-6">
        <div class="hero-image-wrapper aspect-[16/9] group relative shadow-xl">
          <img src="https://images.unsplash.com/photo-1616401784845-180882ba9ba8?auto=format&fit=crop&w=1200&q=80" alt="Global Container Terminal and Freight Fleet Operations" loading="eager">
          <div class="hero-overlay-gradient"></div>

          <div class="absolute bottom-4 left-4 right-4 hero-glass-card p-3.5 flex items-center justify-between gap-3 shadow-lg">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-xl bg-brand-blue text-white flex items-center justify-center">
                <i data-lucide="check-circle" class="w-5 h-5"></i>
              </div>
              <div>
                <div class="text-xs font-bold text-brand-dark">Guaranteed Container Allocations</div>
                <div class="text-[11px] text-gray-500">Tier-1 Shipping Lines • 0% Rolled Guarantee</div>
              </div>
            </div>
            <span class="text-xs font-bold text-brand-blue bg-brand-blue-light px-2.5 py-1 rounded-full whitespace-nowrap">Protected</span>
          </div>
        </div>

        <!-- Shipper Guarantee Highlights -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1">
          <div class="bg-white/80 backdrop-blur-sm p-3.5 rounded-2xl border border-sand-border shadow-sm flex items-start gap-2.5">
            <i data-lucide="check" class="w-4 h-4 text-brand-blue mt-0.5 flex-shrink-0"></i>
            <div>
              <div class="text-xs font-bold text-brand-dark">100% Transparent</div>
              <div class="text-[11px] text-gray-500">No hidden port surcharges</div>
            </div>
          </div>
          <div class="bg-white/80 backdrop-blur-sm p-3.5 rounded-2xl border border-sand-border shadow-sm flex items-start gap-2.5">
            <i data-lucide="shield" class="w-4 h-4 text-brand-green mt-0.5 flex-shrink-0"></i>
            <div>
              <div class="text-xs font-bold text-brand-dark">Space Protection</div>
              <div class="text-[11px] text-gray-500">Guaranteed liner slots</div>
            </div>
          </div>
          <div class="bg-white/80 backdrop-blur-sm p-3.5 rounded-2xl border border-sand-border shadow-sm flex items-start gap-2.5">
            <i data-lucide="clock" class="w-4 h-4 text-brand-blue mt-0.5 flex-shrink-0"></i>
            <div>
              <div class="text-xs font-bold text-brand-dark">24/7 Ops Desk</div>
              <div class="text-[11px] text-gray-500">Dedicated coordinators</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- 4 Key Shipper Workflows -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <span class="text-xs font-bold uppercase tracking-widest text-brand-blue">How It Works</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
        Book, track and manage your global shipments in 4 easy steps
      </h2>
      <p class="text-gray-600 text-base leading-relaxed">
        From booking freight to tracking shipments and resolving disputes — OmeHub puts everything you need in one place.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="card-sand p-6 rounded-2xl space-y-3">
        <div class="w-10 h-10 rounded-xl bg-brand-blue text-white font-bold flex items-center justify-center font-mono">01</div>
        <h4 class="font-heading font-bold text-lg text-brand-dark">Get an Instant Quote</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Enter your origin, destination, and cargo details to instantly compare freight options across ocean, air, and road from verified providers in 100+ countries.</p>
      </div>

      <div class="card-sand p-6 rounded-2xl space-y-3">
        <div class="w-10 h-10 rounded-xl bg-brand-blue text-white font-bold flex items-center justify-center font-mono">02</div>
        <h4 class="font-heading font-bold text-lg text-brand-dark">Book Your Shipment</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Select the best rate, confirm your booking online, and let OmeHub handle the coordination with your logistics provider. No phone calls, no paperwork.</p>
      </div>

      <div class="card-sand p-6 rounded-2xl space-y-3">
        <div class="w-10 h-10 rounded-xl bg-brand-blue text-white font-bold flex items-center justify-center font-mono">03</div>
        <h4 class="font-heading font-bold text-lg text-brand-dark">Track in Real-Time</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Follow your cargo in real time through your OmeHub dashboard. Get proactive notifications, customs updates, and ETA alerts automatically.</p>
      </div>

      <div class="card-sand p-6 rounded-2xl space-y-3">
        <div class="w-10 h-10 rounded-xl bg-brand-blue text-white font-bold flex items-center justify-center font-mono">04</div>
        <h4 class="font-heading font-bold text-lg text-brand-dark">Insurance &amp; Finance</h4>
        <p class="text-xs text-gray-600 leading-relaxed">Access cargo insurance and trade financing options directly from your dashboard. Manage everything you need to ship smarter and more confidently.</p>
      </div>
    </div>
  </div>
</section>

@endsection
