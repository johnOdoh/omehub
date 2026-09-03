@extends('public.layout.public')

@section('title', 'Live Container & Freight Tracking | '. config('app.name') .' Global Trade Platform')
@section('content')

<!-- Tracking Search Header -->
<section class="bg-gradient-to-b from-brand-dark to-brand-dark-surface text-white py-16 border-b border-white/10 relative overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern-dark opacity-30 pointer-events-none"></div>

  <!-- Subtle Vessel Telemetry Visual Backdrop -->
  <div class="absolute inset-0 opacity-15 pointer-events-none overflow-hidden mix-blend-luminosity">
    <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=1400&q=80" alt="Ocean Cargo Vessel Telemetry Background" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark-surface via-brand-dark/80 to-brand-dark"></div>
  </div>

  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-green/20 text-brand-green text-xs border border-brand-green/30 font-bold">
      <span class="w-2 h-2 rounded-full bg-brand-green animate-ping"></span>
      <span>AIS Satellite Telemetry Active</span>
    </div>

    <h1 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
      Real-Time Container & Freight Radar
    </h1>
    <p class="text-gray-300 text-sm sm:text-base max-w-xl mx-auto">
      Enter your omehub tracking ID, Master Bill of Lading (MBL), or Container number to monitor live satellite coordinates and milestone timestamps.
    </p>

    <!-- Tracking Input Bar -->
    <form onsubmit="event.preventDefault(); searchFromPage();" class="max-w-xl mx-auto pt-3 flex gap-2">
      <div class="relative flex-1">
        <i data-lucide="package" class="w-4 h-4 text-gray-400 absolute left-3.5 top-3.5"></i>
        <input type="text" id="pageTrackingInput" placeholder="Enter tracking code (e.g. OME-884920)" class="w-full bg-white/10 border border-white/20 rounded-xl pl-10 pr-4 py-3 text-sm font-mono font-bold text-white placeholder-gray-400 focus:outline-none focus:border-brand-blue uppercase shadow-inner">
      </div>
      <button type="submit" class="btn-primary py-3 px-6 text-sm font-bold shadow-lg shadow-brand-blue/30 whitespace-nowrap">
        <span>Track</span>
        <i data-lucide="search" class="w-4 h-4"></i>
      </button>
    </form>

    <!-- Demo Chips -->
    <div class="flex items-center justify-center gap-2 pt-2 text-xs flex-wrap">
      <span class="text-gray-400">Sample Tracking IDs:</span>
      <button onclick="applyDemo('OME-884920')" class="bg-white/10 hover:bg-white/20 text-white font-mono px-2.5 py-1 rounded border border-white/10 transition-colors">OME-884920 (Ocean FCL)</button>
      <button onclick="applyDemo('OME-392011')" class="bg-white/10 hover:bg-white/20 text-white font-mono px-2.5 py-1 rounded border border-white/10 transition-colors">OME-392011 (Customs Cleared)</button>
      <button onclick="applyDemo('OME-771802')" class="bg-white/10 hover:bg-white/20 text-white font-mono px-2.5 py-1 rounded border border-white/10 transition-colors">OME-771802 (Air Express)</button>
    </div>

  </div>
</section>

<!-- Tracking Details & Timeline Section -->
<section class="py-16 bg-sand-light">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

    <!-- Shipment Overview Card -->
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-gray-200 shadow-sm space-y-6">

      <!-- Top Meta Row -->
      <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 border-b border-gray-100 gap-4">
        <div>
          <div class="flex items-center gap-3">
            <h2 class="font-heading font-extrabold text-2xl text-brand-dark font-mono" id="trkCode">Test Tracking</h2>
            <span class="badge-pill badge-pill-blue text-xs font-bold" id="trkStatusBadge">In-Transit / At Sea</span>
          </div>
          <p class="text-xs text-gray-500 mt-1">Satellite Telemetry Last Sync: <strong>Just Now (Live AIS)</strong></p>
        </div>
        {{-- <div class="flex items-center gap-3">
          <button onclick="window.print()" class="btn-outlined text-xs py-2 px-3">
            <i data-lucide="printer" class="w-3.5 h-3.5"></i>
            <span>Print Telemetry Manifest</span>
          </button>
        </div> --}}
      </div>

      <!-- Route Header Bar -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4 rounded-2xl bg-sand/70 border border-sand-border">
        <div>
          <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Origin Port</span>
          <div class="font-bold text-sm text-brand-dark mt-0.5" id="trkOrigin">Shanghai Yangshan Port (CNSHA)</div>
        </div>
        <div>
          <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Destination Port</span>
          <div class="font-bold text-sm text-brand-dark mt-0.5" id="trkDestination">Rotterdam Port (NLRTM)</div>
        </div>
        <div>
          <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Estimated Delivery (ETA)</span>
          <div class="font-extrabold text-base text-brand-blue mt-0.5 font-mono" id="trkEta">Sept 04, 2026</div>
        </div>
      </div>

      <!-- Telemetry Specs Grid -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs font-mono">
        <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
          <span class="text-gray-400 text-[10px] font-sans block">Vessel Name</span>
          <strong class="text-brand-dark text-xs" id="trkVessel">MSC GÜLSÜN</strong>
        </div>
        <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
          <span class="text-gray-400 text-[10px] font-sans block">Carrier Line</span>
          <strong class="text-brand-dark text-xs" id="trkCarrier">MSC Shipping</strong>
        </div>
        <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
          <span class="text-gray-400 text-[10px] font-sans block">Container Number</span>
          <strong class="text-brand-dark text-xs" id="trkContainer">MSCU-9382104</strong>
        </div>
        <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
          <span class="text-gray-400 text-[10px] font-sans block">Master B/L No.</span>
          <strong class="text-brand-dark text-xs" id="trkBol">MEDU88291048</strong>
        </div>
      </div>

      <!-- Current Coordinates & ESG Badge -->
      <div class="flex flex-col sm:flex-row sm:items-center justify-between text-xs text-gray-600 gap-2 pt-2 border-t border-gray-100">
        <div>
          <i data-lucide="navigation" class="w-3.5 h-3.5 text-brand-blue inline mr-1"></i>
          Current Position: <strong class="text-brand-dark" id="trkLocation">Indian Ocean (Lat 12.82° N, Lon 64.12° E)</strong>
        </div>
        <div class="text-emerald-700 font-semibold flex items-center gap-1.5">
          <i data-lucide="leaf" class="w-3.5 h-3.5"></i>
          Carbon Footprint: <span id="trkCo2">1.42 Tons CO2e (Biofuel Offset Active)</span>
        </div>
      </div>

    </div>

    <!-- Milestone Progress Timeline -->
    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-gray-200 shadow-sm space-y-6">
      <h3 class="font-heading font-bold text-xl text-brand-dark">Milestone Telemetry & Customs Progress</h3>

      <div class="py-4" id="trkMilestones">
        <!-- Injected dynamically by tracker.js -->
      </div>
    </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const urlParams = new URLSearchParams(window.location.search);
  const code = urlParams.get('track') || 'Test';
  if (typeof renderTrackingPageDetails === 'function') {
    renderTrackingPageDetails(code);
  }
});

function searchFromPage() {
  const input = document.getElementById('pageTrackingInput');
  const code = input ? input.value.trim().toUpperCase() : 'OME-884920';
  window.location.href = `{{ route('public.tracking') }}?track=${encodeURIComponent(code)}`;
}

function applyDemo(code) {
  const input = document.getElementById('pageTrackingInput');
  if (input) input.value = code;
  searchFromPage();
}
</script>

@endsection
