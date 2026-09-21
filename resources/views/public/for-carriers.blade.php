@extends('public.layout.main')

@section('title', 'For Logistics Providers | '. config('app.name') .' Global Trade Platform')
@section('content')

<!-- Carrier Hero -->
<section class="relative bg-gradient-to-b from-brand-dark to-brand-dark-surface text-white py-20 border-b border-white/10 overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern-dark opacity-30 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <span class="badge-pill bg-brand-green/20 text-brand-green border border-brand-green/30 text-xs">Carrier Partner Ecosystem</span>
        <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-tight">
          Monetize your freight capacity with <span class="text-brand-blue">thousands of shippers.</span>
        </h1>
        <p class="text-gray-300 text-base sm:text-lg leading-relaxed max-w-xl">
          Whether you operate ocean container vessels, air cargo freighters, or regional drayage truck fleets, {{ config('app.name') }} connects your capacity directly into automated digital buying queues.
        </p>
        <div class="flex flex-wrap gap-4 pt-2">
          <a href="#onboarding" class="btn-primary text-sm py-3.5 px-6 shadow-lg shadow-brand-blue/40">
            <span>Apply as a Carrier Partner</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

      <!-- Right Column: Hero Visual & Benefits -->
      <div class="lg:col-span-6 space-y-6">
        <div class="hero-image-wrapper aspect-[16/9] group relative shadow-2xl border-white/10">
          <img src="https://images.unsplash.com/photo-1606185540834-d6e7483ee1a4" alt="Global Shipping Fleet and Modern Air Cargo Freighter" loading="eager">
          <div class="hero-overlay-gradient"></div>

          <div class="absolute bottom-4 left-4 right-4 hero-glass-card-dark p-3.5 flex items-center justify-between gap-3 shadow-lg">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-xl bg-brand-green/20 text-brand-green flex items-center justify-center">
                <i data-lucide="dollar-sign" class="w-5 h-5"></i>
              </div>
              <div>
                <div class="text-xs font-bold text-white">Guaranteed 7-Day Carrier Settlement</div>
                <div class="text-[11px] text-gray-300">Automated freight audit • Zero credit risk</div>
              </div>
            </div>
            <span class="text-xs font-bold text-brand-green bg-brand-green/20 px-2.5 py-1 rounded-full whitespace-nowrap">Instant Pay</span>
          </div>
        </div>

        <!-- Carrier Value Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1">
          <div class="bg-white/5 border border-white/10 p-3.5 rounded-2xl backdrop-blur-sm flex items-start gap-2.5">
            <i data-lucide="zap" class="w-4 h-4 text-brand-green mt-0.5 flex-shrink-0"></i>
            <div>
              <div class="text-xs font-bold text-white">Upload Quotes</div>
              <div class="text-[11px] text-gray-400">Give quotes directly to shippers</div>
            </div>
          </div>
          <div class="bg-white/5 border border-white/10 p-3.5 rounded-2xl backdrop-blur-sm flex items-start gap-2.5">
            <i data-lucide="repeat" class="w-4 h-4 text-brand-cyan mt-0.5 flex-shrink-0"></i>
            <div>
              <div class="text-xs font-bold text-white">Backhaul Loads</div>
              <div class="text-[11px] text-gray-400">Optimize empty returns</div>
            </div>
          </div>
          <div class="bg-white/5 border border-white/10 p-3.5 rounded-2xl backdrop-blur-sm flex items-start gap-2.5">
            <i data-lucide="users" class="w-4 h-4 text-brand-blue mt-0.5 flex-shrink-0"></i>
            <div>
              <div class="text-xs font-bold text-white">4,200+ Shippers</div>
              <div class="text-[11px] text-gray-400">Enterprise volume</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Onboarding Form Section -->
<section id="onboarding" class="py-24 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12 space-y-3">
      <span class="badge-pill badge-pill-blue">Partner Application</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
        Join the {{ config('app.name') }} Logistics Provider Network
      </h2>
      <p class="text-gray-600 text-sm max-w-xl mx-auto">
        Complete the form below to initiate carrier verification. Our partner onboarding team will review your fleet profile within 24 hours.
      </p>
    </div>

    @if (session('success'))
        <div class="mb-6 p-4 sm:p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3.5 shadow-sm" role="alert">
            <div class="w-9 h-9 rounded-xl bg-emerald-500 text-white flex items-center justify-center flex-shrink-0 shadow-sm">
                <i data-lucide="check-circle-2" class="w-5 h-5"></i>
            </div>
            <div class="flex-1 pt-0.5">
                <div class="flex items-center justify-between">
                    <h4 class="font-heading font-bold text-sm text-emerald-950">Message Sent Successfully!</h4>
                    <button type="button" onclick="this.closest('[role=alert]').remove()" class="text-emerald-700 hover:text-emerald-950 p-1 rounded-lg transition-colors" aria-label="Dismiss">
                    <i data-lucide="x" class="w-4 h-4"></i>
                    </button>
                </div>
                <p class="text-xs text-emerald-800 mt-1 leading-relaxed">{{ session('success') }}</p>
                <div class="mt-2 text-[11px] font-semibold text-emerald-700 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Our operations desk will review and reply within 24 hours.</span>
                </div>
            </div>
        </div>
    @endif

    <div class="card-sand p-8 sm:p-10 rounded-3xl border border-sand-border shadow-sm">
      <form action="{{ route('provider-request') }}" method="POST" class="space-y-6">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Company / Carrier Name</label>
            <input type="text" name="name" required placeholder="e.g. Apex Marine Freight Ltd." class="w-full bg-white border @error('name') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror  rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none">
            @error('name')
                <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                    <span>{{ $message }}</span>
                </p>
            @enderror
          </div>
          <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Primary Transport Mode</label>
            <select name="mode" class="w-full bg-white border @error('mode') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none">
              <option value="ocean">Ocean Liner / NVOCC</option>
              <option value="air">Air Cargo / Freighter Operator</option>
              <option value="trucking">Drayage / Full Truckload (FTL)</option>
              <option value="rail">Rail Intermodal Operator</option>
              <option value="customs">Customs Broker / Port Terminal</option>
            </select>
            @error('mode')
                <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                    <span>{{ $message }}</span>
                </p>
            @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Business Email</label>
            <input type="email" name="email" required placeholder="partner@yourcarrier.com" class="w-full bg-white border @error('email') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none">
            @error('email')
                <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                    <span>{{ $message }}</span>
                </p>
            @enderror
          </div>
          <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Phone Number</label>
            <input type="tel" name="phone" required placeholder="+1 (555) 019-2834" class="w-full bg-white border @error('phone') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none">
            @error('phone')
                <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                    <span>{{ $message }}</span>
                </p>
            @enderror
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Primary Trade Corridors & Fleet Capacity</label>
          <textarea rows="3" name="capacity" placeholder="Specify your active trade routes (e.g. Asia-North Europe, Transpacific, Intra-Europe) and estimated weekly TEU / tonnage capacity..." class="w-full bg-white border @error('capacity') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror rounded-xl p-4 text-sm text-brand-dark focus:outline-none"></textarea>
          @error('capacity')
              <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                  <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                  <span>{{ $message }}</span>
              </p>
          @enderror
        </div>

        <button type="submit" class="w-full btn-primary py-3.5 text-sm font-bold shadow-lg shadow-brand-blue/30 justify-center">
          <span>Submit Carrier Application</span>
          <i data-lucide="check-circle" class="w-4 h-4"></i>
        </button>
      </form>
    </div>
  </div>
</section>

@endsection
