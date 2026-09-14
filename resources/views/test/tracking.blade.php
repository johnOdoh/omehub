@extends('public.layout.public')

@section('title', 'Live Container & Freight Tracking | '. config('app.name') .' Global Trade Platform')
@section('content')

<!-- Tracking Search Header -->
<section
  class="bg-gradient-to-b from-brand-dark to-brand-dark-surface text-white py-16 border-b border-white/10 relative overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern-dark opacity-30 pointer-events-none"></div>

  <div class="absolute inset-0 opacity-15 pointer-events-none overflow-hidden mix-blend-luminosity">
    <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=1400&q=80"
      alt="Ocean Cargo Vessel Telemetry Background" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark-surface via-brand-dark/80 to-brand-dark"></div>
  </div>

  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
    <div
      class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-green/20 text-brand-green text-xs border border-brand-green/30 font-bold">
      <span class="w-2 h-2 rounded-full bg-brand-green animate-ping"></span>
      <span>AIS Satellite Telemetry Active</span>
    </div>

    <h1 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
      Real-Time Container &amp; Freight Tracker
    </h1>
    <p class="text-gray-300 text-sm sm:text-base max-w-xl mx-auto">
      Enter your {{ config('app.name') }} tracking number to get your shipment information and track you shipment's milestone timestamps.
    </p>

    <!-- Tracking Input Bar (pure HTML form, no JS required) -->
    <form action="{{ route('public.tracking') }}" class="max-w-xl mx-auto pt-3 flex gap-2">
      <div class="relative flex-1">
        <i data-lucide="package" class="w-4 h-4 text-gray-400 absolute left-3.5 top-3.5"></i>
        <input type="text" name="track" value="{{ $code }}" placeholder="Enter tracking code" class="w-full bg-white/10 border border-white/20 rounded-xl pl-10 pr-4 py-3 text-sm font-mono font-bold text-white placeholder-gray-400 focus:outline-none focus:border-brand-blue uppercase shadow-inner">
      </div>
      <button type="submit" class="btn-primary py-3 px-6 text-sm font-bold shadow-lg shadow-brand-blue/30 whitespace-nowrap">
        <span>Track</span>
        <i data-lucide="search" class="w-4 h-4"></i>
      </button>
    </form>

    <!-- Demo Chips (plain anchor links, no JS) -->
    {{-- <div class="flex items-center justify-center gap-2 pt-2 text-xs flex-wrap">
      <span class="text-gray-400">Sample Tracking IDs:</span>
      <a href="tracking.php?track=OME-884920"
        class="bg-white/10 hover:bg-white/20 text-white font-mono px-2.5 py-1 rounded border border-white/10 transition-colors">OME-884920
        (Ocean FCL)</a>
      <a href="tracking.php?track=OME-392011"
        class="bg-white/10 hover:bg-white/20 text-white font-mono px-2.5 py-1 rounded border border-white/10 transition-colors">OME-392011
        (Customs Cleared)</a>
      <a href="tracking.php?track=OME-771802"
        class="bg-white/10 hover:bg-white/20 text-white font-mono px-2.5 py-1 rounded border border-white/10 transition-colors">OME-771802
        (Air Express)</a>
    </div> --}}
  </div>
</section>

<!-- Main content -->
<section class="py-16 bg-sand-light">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

    @if (!$shipment)
        @if ($code)
            <!-- ═══════════════════════════════════════════
            EMPTY STATE — tracking number not found
        ═══════════════════════════════════════════ -->
            <div class="flex flex-col items-center justify-center text-center py-20 px-6 bg-white rounded-3xl border border-gray-200 shadow-sm space-y-6">

                <!-- Illustration icon -->
                <div class="w-20 h-20 rounded-full bg-gray-100 border border-gray-200 flex items-center justify-center">
                    <i data-lucide="search-x" class="w-10 h-10 text-gray-400"></i>
                </div>

                <div class="space-y-2 max-w-md">
                    <h2 class="font-heading font-extrabold text-2xl text-brand-dark">No Shipment Found</h2>
                    <p class="text-gray-500 text-sm leading-relaxed">
                    We could not find a shipment matching
                    <strong class="font-mono text-brand-dark">{{ $code }}</strong>.
                    Please double-check your tracking number and try again, or use one of the sample IDs above.
                    </p>
                </div>

                <!-- Possible reasons list -->
                <ul class="text-left space-y-2.5 text-xs text-gray-500 bg-sand/60 border border-sand-border rounded-2xl px-6 py-4 max-w-sm w-full">
                    <li class="flex items-start gap-2">
                        <i data-lucide="alert-circle" class="w-3.5 h-3.5 text-amber-500 mt-0.5 flex-shrink-0"></i>
                        The tracking number may contain a typo.
                    </li>
                    <li class="flex items-start gap-2">
                        <i data-lucide="clock" class="w-3.5 h-3.5 text-gray-400 mt-0.5 flex-shrink-0"></i>
                        New shipments can take up to 2 hours to appear in the system.
                    </li>
                </ul>

                <!-- CTA buttons -->
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('public.tracking') }}?track={{ $code }}" class="btn-primary py-2.5 px-6 text-sm font-bold">
                        <i data-lucide="rotate-ccw" class="w-4 h-4"></i>
                        <span>Search Again</span>
                    </a>
                    <a href="contact.php" class="btn-outlined py-2.5 px-6 text-sm font-bold">
                        <i data-lucide="headphones" class="w-4 h-4"></i>
                        <span>Contact Support</span>
                    </a>
                </div>
            </div>
        @endif
    @else
        <!-- Shipment Overview Card -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-gray-200 shadow-sm space-y-6">

            <!-- Top Meta Row -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 border-b border-gray-100 gap-4">
                <div>
                    <div class="flex items-center gap-3">
                        <h2 class="font-heading font-extrabold text-2xl text-brand-dark font-mono">{{ $shipment->tracking_number }}</h2>
                        <span class="badge-pill badge-pill-blue text-xs font-bold">{{ $shipment->status }}</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Satellite Telemetry Last Sync:
                        <strong>Now</strong>
                    </p>
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
                    <div class="font-bold text-sm text-brand-dark mt-0.5">{{ $shipment->quote->request->pickup }}</div>
                </div>
                <div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Destination Port</span>
                    <div class="font-bold text-sm text-brand-dark mt-0.5">{{ $shipment->quote->request->pickup }}</div>
                </div>
                <div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Estimated Delivery (ETA)</span>
                    <div class="font-extrabold text-base text-brand-blue mt-0.5 font-mono">
                        {{ ($shipment->quote->departure_date->addDays($shipment->quote->duration)->format('M d, Y')) }}
                    </div>
                </div>
            </div>

            <!-- Telemetry Specs Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs font-mono">
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                    <span class="text-gray-400 text-[10px] font-sans block">Cargo Type</span>
                    <strong class="text-brand-dark text-xs">{{ $shipment->quote->request->cargo_type }}</strong>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                    <span class="text-gray-400 text-[10px] font-sans block">Container Type</span>
                    <strong class="text-brand-dark text-xs">{{ $shipment->quote->request->container_type }}</strong>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                    <span class="text-gray-400 text-[10px] font-sans block">Freight Type</span>
                    <strong class="text-brand-dark text-xs">{{ $shipment->quote->request->freight_type }}</strong>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-100">
                    <span class="text-gray-400 text-[10px] font-sans block">Dimensions</span>
                    <strong class="text-brand-dark text-xs">{{ $shipment->quote->request->dimensions }}</strong>
                </div>
            </div>

            <!-- Current Coordinates & ESG Badge -->
            {{-- <div
                class="flex flex-col sm:flex-row sm:items-center justify-between text-xs text-gray-600 gap-2 pt-2 border-t border-gray-100">
                <div>
                <i data-lucide="navigation" class="w-3.5 h-3.5 text-brand-blue inline mr-1"></i>
                Current Position: <strong
                    class="text-brand-dark"><?php echo htmlspecialchars($data['currentLocation']); ?></strong>
                </div>
                <div class="text-emerald-700 font-semibold flex items-center gap-1.5">
                <i data-lucide="leaf" class="w-3.5 h-3.5"></i>
                Carbon Footprint: <span><?php echo htmlspecialchars($data['co2']); ?></span>
                </div>
            </div> --}}

        </div><!-- /Overview Card -->

        <!-- Milestone Progress Timeline -->
        <div class="bg-white p-6 sm:p-8 rounded-3xl border border-gray-200 shadow-sm space-y-6">
            <h3 class="font-heading font-bold text-xl text-brand-dark">Milestone Telemetry &amp; Customs Progress</h3>

            {{-- <div class="py-4">
                <?php foreach ($data['milestones'] as $idx => $m):
                $isLast   = ($idx === count($data['milestones']) - 1);
                $state    = $m['state'];

                if ($state === 'completed') {
                    $iconWrap  = 'bg-brand-green text-white shadow-sm';
                    $lineClass = 'border-brand-green';
                    $titleCls  = 'text-brand-dark font-bold';
                    $icon      = 'check';
                } elseif ($state === 'current') {
                    $iconWrap  = 'bg-brand-blue text-white ring-4 ring-brand-blue/20 animate-pulse';
                    $lineClass = 'border-gray-200';
                    $titleCls  = 'text-brand-blue font-extrabold';
                    $icon      = 'navigation';
                } else {
                    $iconWrap  = 'bg-gray-200 text-gray-400';
                    $lineClass = 'border-gray-200';
                    $titleCls  = 'text-gray-500';
                    $icon      = 'clock';
                }
                ?>
                <div class="flex gap-4 relative">
                    <?php if (!$isLast): ?>
                    <div class="absolute left-4 top-8 -bottom-2 w-0.5 border-l-2 <?php echo $lineClass; ?>"></div>
                    <?php endif; ?>

                    <div
                    class="w-8 h-8 rounded-full <?php echo $iconWrap; ?> flex items-center justify-center flex-shrink-0 z-10">
                    <i data-lucide="<?php echo $icon; ?>" class="w-4 h-4"></i>
                    </div>

                    <div class="pb-6">
                    <h4 class="text-sm <?php echo $titleCls; ?>"><?php echo htmlspecialchars($m['title']); ?></h4>
                    <div class="text-xs text-gray-500 flex items-center gap-2 mt-0.5">
                        <span><i data-lucide="map-pin" class="w-3 h-3 inline mr-0.5"></i>
                        <?php echo htmlspecialchars($m['location']); ?></span>
                        <span>&bull;</span>
                        <span><?php echo htmlspecialchars($m['time']); ?></span>
                    </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div> --}}
        </div><!-- /Milestone Card -->
    @endif
  </div>
</section>

@endsection
