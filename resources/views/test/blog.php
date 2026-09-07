<?php
$page_title = "Blogs & Adverts | Global Trade Intelligence & Partner Showcase";
$page_desc = "Explore comprehensive logistics articles, market analyses, AI freight tracking insights, and discover verified carrier adverts & promotions.";
$base_url = '../';
include '../includes/header.php';
include '../includes/navbar.php';
?>

<style>
/* Smooth Marquee Carousel Animation */
@keyframes marqueeScroll {
  0% { transform: translateX(0%); }
  100% { transform: translateX(-50%); }
}

.marquee-track {
  display: flex;
  width: max-content;
  animation: marqueeScroll 40s linear infinite;
}

.marquee-track:hover {
  animation-play-state: paused;
}

/* Custom left sidebar sticky positioning */
@media (min-width: 1024px) {
  .sticky-sidebar {
    position: sticky;
    top: 96px;
    max-height: calc(100vh - 110px);
    overflow-y: auto;
  }
}
</style>

<!-- Top Breadcrumb & Page Meta Header -->
<div class="bg-sand-light border-b border-sand-border py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-xs">
    <nav class="flex items-center gap-2 text-gray-500" aria-label="Breadcrumb">
      <a href="<?php echo $base_url; ?>index.php" class="hover:text-brand-blue transition-colors flex items-center gap-1">
        <i data-lucide="home" class="w-3.5 h-3.5"></i> Home
      </a>
      <span>/</span>
      <a href="<?php echo $base_url; ?>pages/blogs.php" class="text-brand-dark hover:text-brand-blue font-semibold transition-colors">
        Blogs &amp; Adverts
      </a>
      <span>/</span>
      <span id="breadcrumbCurrentArticle" class="text-brand-blue font-bold truncate max-w-xs sm:max-w-md">Article Details</span>
    </nav>
    <div class="flex items-center gap-3">
      <button type="button" onclick="openAdModal()" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover bg-brand-blue/10 hover:bg-brand-blue/15 px-3 py-1.5 rounded-full transition-all">
        <i data-lucide="megaphone" class="w-3.5 h-3.5"></i>
        <span>Place an Advert</span>
      </button>
      <div class="h-4 w-px bg-gray-200 hidden sm:block"></div>
      <span class="text-gray-400 hidden sm:inline-flex items-center gap-1">
        <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
        Live Feed Updated
      </span>
    </div>
  </div>
</div>

<!-- ========================================================================= -->
<!-- 1. SLIDING MARQUEE CAROUSEL (SPONSORED ADVERTS & PARTNER PROMOTIONS)     -->
<!-- ========================================================================= -->
<section class="bg-brand-dark text-white py-4 border-b border-white/10 overflow-hidden relative select-none">
  <!-- Left/Right Fading Gradients for Smooth Carousel Effect -->
  <div class="absolute left-0 top-0 bottom-0 w-16 bg-gradient-to-r from-brand-dark to-transparent z-10 pointer-events-none"></div>
  <div class="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-brand-dark to-transparent z-10 pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 mb-2.5 flex items-center justify-between">
    <div class="flex items-center gap-2">
      <span class="bg-brand-green/20 text-brand-green text-[10px] font-extrabold uppercase tracking-widest px-2.5 py-0.5 rounded-full flex items-center gap-1">
        <span class="w-1.5 h-1.5 rounded-full bg-brand-green animate-ping"></span> Sponsored Ticker
      </span>
      <span class="text-xs text-gray-300 font-medium hidden sm:inline">Featured Carrier &amp; Logistics Service Adverts (Hover to Pause)</span>
    </div>
    <div class="text-[11px] text-gray-400 font-mono">
      <span class="text-brand-green font-bold">50k+</span> Shippers Reached
    </div>
  </div>

  <!-- Infinite Marquee Track (Duplicated set of cards for continuous seamless looping) -->
  <div class="marquee-track flex items-center gap-4 py-1">
    
    <!-- Advert Card 1 -->
    <div onclick="openPromoModal('atlantic')" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center shrink-0">
        <i data-lucide="ship" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="flex items-center justify-between">
          <span class="text-[10px] font-bold text-brand-green uppercase tracking-wider">Atlantic Express Line</span>
          <span class="text-[10px] font-mono bg-white/10 px-1.5 py-0.2 rounded text-gray-300">22 Days</span>
        </div>
        <div class="text-xs font-bold text-white truncate">Shanghai &rarr; Lagos Direct Slots</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span class="font-mono text-brand-green font-bold">$3,150 / 40HC</span>
          <span class="text-[10px] text-brand-blue-light underline">Book Slot &rarr;</span>
        </div>
      </div>
    </div>

    <!-- Advert Card 2 -->
    <div onclick="openPromoModal('eurocold')" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center shrink-0">
        <i data-lucide="warehouse" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="flex items-center justify-between">
          <span class="text-[10px] font-bold text-emerald-400 uppercase tracking-wider">EuroCold Terminals</span>
          <span class="text-[10px] font-mono bg-emerald-500/20 text-emerald-300 px-1.5 py-0.2 rounded">Rotterdam</span>
        </div>
        <div class="text-xs font-bold text-white truncate">Pharma &amp; Reefer Cold Storage</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span>15,000 m² Ready</span>
          <span class="text-[10px] text-emerald-400 underline">10% Off &rarr;</span>
        </div>
      </div>
    </div>

    <!-- Advert Card 3 -->
    <div onclick="openPromoModal('nautical')" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center shrink-0">
        <i data-lucide="shield-check" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="flex items-center justify-between">
          <span class="text-[10px] font-bold text-cyan-300 uppercase tracking-wider">Nautical Underwriters</span>
          <span class="text-[10px] font-mono bg-cyan-500/20 text-cyan-200 px-1.5 py-0.2 rounded">Lloyd's</span>
        </div>
        <div class="text-xs font-bold text-white truncate">Instant All-Risk Cargo Cover</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span class="font-mono text-cyan-300">From 0.18% Val</span>
          <span class="text-[10px] text-cyan-300 underline">Get Policy &rarr;</span>
        </div>
      </div>
    </div>

    <!-- Advert Card 4 -->
    <div onclick="openPromoModal('apexair')" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-amber-500 text-white flex items-center justify-center shrink-0">
        <i data-lucide="plane" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="flex items-center justify-between">
          <span class="text-[10px] font-bold text-amber-300 uppercase tracking-wider">Apex Air Charter</span>
          <span class="text-[10px] font-mono bg-amber-500/20 text-amber-200 px-1.5 py-0.2 rounded">Express</span>
        </div>
        <div class="text-xs font-bold text-white truncate">Dubai (DXB) &rarr; West Africa Air Cargo</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span>72-Hr Delivery</span>
          <span class="text-[10px] text-amber-300 underline">Book Air &rarr;</span>
        </div>
      </div>
    </div>

    <!-- Advert Card 5: Call to Action for Advertisers -->
    <div onclick="openAdModal()" class="bg-gradient-to-r from-brand-blue/40 to-brand-green/30 border border-brand-green/40 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-brand-green text-brand-dark flex items-center justify-center shrink-0 font-extrabold">
        <i data-lucide="plus" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="text-[10px] font-bold text-brand-green uppercase tracking-wider">Your Advert Here</div>
        <div class="text-xs font-bold text-white truncate">Reach 50,000+ Cargo Owners</div>
        <div class="text-[11px] text-gray-200 flex items-center justify-between mt-0.5">
          <span>Featured in Marquee &amp; Sidebars</span>
          <span class="text-[10px] font-bold text-brand-green underline">Post Now &rarr;</span>
        </div>
      </div>
    </div>

    <!-- DUPLICATE SET FOR SEAMLESS 100% INFINITE SCROLL -->
    <div onclick="openPromoModal('atlantic')" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center shrink-0">
        <i data-lucide="ship" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="flex items-center justify-between">
          <span class="text-[10px] font-bold text-brand-green uppercase tracking-wider">Atlantic Express Line</span>
          <span class="text-[10px] font-mono bg-white/10 px-1.5 py-0.2 rounded text-gray-300">22 Days</span>
        </div>
        <div class="text-xs font-bold text-white truncate">Shanghai &rarr; Lagos Direct Slots</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span class="font-mono text-brand-green font-bold">$3,150 / 40HC</span>
          <span class="text-[10px] text-brand-blue-light underline">Book Slot &rarr;</span>
        </div>
      </div>
    </div>

    <div onclick="openPromoModal('eurocold')" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center shrink-0">
        <i data-lucide="warehouse" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="flex items-center justify-between">
          <span class="text-[10px] font-bold text-emerald-400 uppercase tracking-wider">EuroCold Terminals</span>
          <span class="text-[10px] font-mono bg-emerald-500/20 text-emerald-300 px-1.5 py-0.2 rounded">Rotterdam</span>
        </div>
        <div class="text-xs font-bold text-white truncate">Pharma &amp; Reefer Cold Storage</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span>15,000 m² Ready</span>
          <span class="text-[10px] text-emerald-400 underline">10% Off &rarr;</span>
        </div>
      </div>
    </div>

    <div onclick="openPromoModal('nautical')" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center shrink-0">
        <i data-lucide="shield-check" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="flex items-center justify-between">
          <span class="text-[10px] font-bold text-cyan-300 uppercase tracking-wider">Nautical Underwriters</span>
          <span class="text-[10px] font-mono bg-cyan-500/20 text-cyan-200 px-1.5 py-0.2 rounded">Lloyd's</span>
        </div>
        <div class="text-xs font-bold text-white truncate">Instant All-Risk Cargo Cover</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span class="font-mono text-cyan-300">From 0.18% Val</span>
          <span class="text-[10px] text-cyan-300 underline">Get Policy &rarr;</span>
        </div>
      </div>
    </div>

    <div onclick="openPromoModal('apexair')" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-amber-500 text-white flex items-center justify-center shrink-0">
        <i data-lucide="plane" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="flex items-center justify-between">
          <span class="text-[10px] font-bold text-amber-300 uppercase tracking-wider">Apex Air Charter</span>
          <span class="text-[10px] font-mono bg-amber-500/20 text-amber-200 px-1.5 py-0.2 rounded">Express</span>
        </div>
        <div class="text-xs font-bold text-white truncate">Dubai (DXB) &rarr; West Africa Air Cargo</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span>72-Hr Delivery</span>
          <span class="text-[10px] text-amber-300 underline">Book Air &rarr;</span>
        </div>
      </div>
    </div>

    <div onclick="openAdModal()" class="bg-gradient-to-r from-brand-blue/40 to-brand-green/30 border border-brand-green/40 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
      <div class="w-10 h-10 rounded-xl bg-brand-green text-brand-dark flex items-center justify-center shrink-0 font-extrabold">
        <i data-lucide="plus" class="w-5 h-5"></i>
      </div>
      <div class="overflow-hidden flex-1">
        <div class="text-[10px] font-bold text-brand-green uppercase tracking-wider">Your Advert Here</div>
        <div class="text-xs font-bold text-white truncate">Reach 50,000+ Cargo Owners</div>
        <div class="text-[11px] text-gray-200 flex items-center justify-between mt-0.5">
          <span>Featured in Marquee &amp; Sidebars</span>
          <span class="text-[10px] font-bold text-brand-green underline">Post Now &rarr;</span>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 2. MAIN BLOG DETAIL LAYOUT WITH LEFT-HAND ADVERT SIDEBAR                  -->
<!-- ========================================================================= -->
<section class="py-10 sm:py-14 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      
      <!-- =================================================================== -->
      <!-- LEFT-HAND SIDEBAR: DEDICATED ADVERT PLACEMENTS & PROMOTIONS         -->
      <!-- =================================================================== -->
      <aside class="lg:col-span-4 xl:col-span-4 space-y-6 sticky-sidebar order-2 lg:order-1">
        
        <!-- Advert Block Header -->
        <div class="flex items-center justify-between pb-2 border-b border-gray-100">
          <div class="flex items-center gap-1.5 text-xs font-extrabold text-brand-dark uppercase tracking-wider">
            <i data-lucide="badge-percent" class="w-4 h-4 text-brand-blue"></i>
            <span>Partner Adverts &amp; Offers</span>
          </div>
          <button type="button" onclick="openAdModal()" class="text-[11px] text-brand-blue hover:underline font-bold">
            Post Ad +
          </button>
        </div>

        <!-- ADVERT 1: High-Impact Carrier Vessel Slot Offer -->
        <div class="group bg-gradient-to-br from-brand-blue-light via-white to-blue-50/50 rounded-3xl p-5 border-2 border-brand-blue/25 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden">
          <div class="flex items-center justify-between mb-3">
            <span class="bg-brand-blue text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full shadow-sm">
              Sponsored Slot
            </span>
            <span class="text-[11px] font-bold text-brand-green bg-brand-green/15 px-2 py-0.5 rounded-full flex items-center gap-1">
              <i data-lucide="check-circle" class="w-3 h-3"></i> Verified Line
            </span>
          </div>

          <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center font-bold shadow-md shadow-brand-blue/30">
              <i data-lucide="anchor" class="w-5 h-5"></i>
            </div>
            <div>
              <h4 class="font-heading font-bold text-sm text-brand-dark">Atlantic Line Express</h4>
              <div class="text-[11px] text-gray-500">Asia &ndash; West Africa Corridor</div>
            </div>
          </div>

          <p class="text-xs text-gray-700 leading-relaxed font-medium mb-3">
            Direct Shanghai &rarr; Lagos Apapa container allocations with zero roll-over warranty and automated pre-arrival customs sync.
          </p>

          <div class="bg-white p-3 rounded-2xl border border-brand-blue/15 mb-3 flex items-center justify-between">
            <div>
              <div class="text-[10px] text-gray-400 uppercase font-semibold">Special Spot Rate</div>
              <div class="text-base font-mono font-extrabold text-brand-blue">$3,150 <span class="text-xs font-normal text-gray-500">/ 40HC</span></div>
            </div>
            <span class="text-[10px] bg-emerald-100 text-emerald-800 font-bold px-2 py-1 rounded-lg">Save $420</span>
          </div>

          <a href="<?php echo $base_url; ?>pages/quote.php?promo=ATLANTIC26" class="w-full btn-primary text-xs py-2.5 justify-center shadow-md shadow-brand-blue/20">
            <span>Book Allocation Instantly</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>

        <!-- ADVERT 2: Bonded Warehousing & Cold Storage Listing -->
        <div class="group bg-gradient-to-br from-emerald-50/70 via-white to-sand-light rounded-3xl p-5 border-2 border-emerald-300/80 shadow-md hover:shadow-xl transition-all duration-300">
          <div class="flex items-center justify-between mb-3">
            <span class="bg-emerald-700 text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full shadow-sm">
              Warehouse Feature
            </span>
            <span class="text-[11px] font-mono text-emerald-800 font-bold">Port of Rotterdam</span>
          </div>

          <div class="relative aspect-[16/9] rounded-2xl overflow-hidden mb-3 bg-gray-100">
            <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?auto=format&fit=crop&w=600&q=80" alt="Cold storage warehouse" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute bottom-2 left-2 bg-brand-dark/80 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md backdrop-blur-sm">
              15,000 m² Ready
            </div>
          </div>

          <h4 class="font-heading font-bold text-sm text-brand-dark mb-1">
            EuroCold Portside Reefer &amp; Pharma Hub
          </h4>
          <p class="text-xs text-gray-600 leading-relaxed mb-3">
            Temperature-controlled cross-docking (-25°C to +15°C) with direct automated border inspection and EU distribution.
          </p>

          <a href="<?php echo $base_url; ?>pages/contact.php?inquiry=EuroCold-Ad" class="w-full btn-primary text-xs py-2.5 justify-center bg-emerald-600 hover:bg-emerald-700 shadow-md shadow-emerald-600/20">
            <span>Inquire Storage Rates</span>
            <i data-lucide="mail" class="w-3.5 h-3.5"></i>
          </a>
        </div>

        <!-- ADVERT 3: Cargo Marine Insurance Banner -->
        <div class="bg-gradient-to-br from-cyan-50 via-white to-sand-light rounded-3xl p-5 border border-cyan-200 shadow-sm hover:shadow-lg transition-all">
          <div class="flex items-center gap-2 mb-2 text-cyan-800">
            <i data-lucide="shield" class="w-4 h-4"></i>
            <span class="text-xs font-extrabold uppercase tracking-wider">Lloyd's Syndicate Cover</span>
          </div>
          <h5 class="font-heading font-bold text-sm text-brand-dark mb-1">
            All-Risk Cargo Insurance (ICC 'A') from 0.18%
          </h5>
          <p class="text-xs text-gray-600 leading-relaxed mb-3">
            Instant paperless policy generation for containerized ocean, air, and intermodal freight with 48h claims turnaround.
          </p>
          <a href="<?php echo $base_url; ?>pages/contact.php?inquiry=MarineInsurance" class="inline-flex items-center gap-1.5 text-xs font-bold text-cyan-700 hover:text-cyan-900 underline">
            <span>Calculate insurance premium &rarr;</span>
          </a>
        </div>

        <!-- ADVERT 4: "Advertise Your Logistics Business Here" Promo Callout -->
        <div class="bg-brand-dark text-white rounded-3xl p-6 border border-white/10 shadow-xl relative overflow-hidden text-center space-y-3">
          <div class="w-11 h-11 rounded-2xl bg-brand-green/20 text-brand-green flex items-center justify-center mx-auto">
            <i data-lucide="megaphone" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="font-heading font-bold text-base text-white">Advertise on OmeHub</h4>
            <p class="text-xs text-gray-300 mt-1 leading-relaxed">
              Target 50,000+ verified enterprise cargo owners, freight forwarders, and logistics directors across global corridors.
            </p>
          </div>
          <button type="button" onclick="openAdModal()" class="w-full btn-primary text-xs py-2.5 font-bold justify-center shadow-lg shadow-brand-blue/30">
            <i data-lucide="plus-circle" class="w-4 h-4"></i>
            <span>Submit Your Advert</span>
          </button>
          <div class="text-[10px] text-gray-400">
            Rates from $150/mo &bull; Live Analytics Dashboard
          </div>
        </div>

        <!-- Logistics Market Rate Widget -->
        <div class="bg-sand p-5 rounded-3xl border border-sand-border space-y-3">
          <div class="flex items-center justify-between text-xs font-bold text-brand-dark">
            <span class="flex items-center gap-1.5">
              <i data-lucide="trending-up" class="w-3.5 h-3.5 text-brand-blue"></i>
              <span>Spot Rate Barometer</span>
            </span>
            <span class="text-[10px] text-gray-500 font-mono">Q3 2026</span>
          </div>
          
          <div class="space-y-2 text-xs">
            <div class="flex items-center justify-between p-2 rounded-xl bg-white border border-gray-100">
              <span class="text-gray-600 font-medium">CNSHA &rarr; NGLOS (40HC)</span>
              <span class="font-mono font-bold text-brand-blue">$3,150</span>
            </div>
            <div class="flex items-center justify-between p-2 rounded-xl bg-white border border-gray-100">
              <span class="text-gray-600 font-medium">NLRTM &rarr; USNYC (20GP)</span>
              <span class="font-mono font-bold text-brand-blue">$1,890</span>
            </div>
            <div class="flex items-center justify-between p-2 rounded-xl bg-white border border-gray-100">
              <span class="text-gray-600 font-medium">Air Express (DXB &rarr; LOS)</span>
              <span class="font-mono font-bold text-brand-blue">$4.85/kg</span>
            </div>
          </div>

          <a href="<?php echo $base_url; ?>pages/quote.php" class="block text-center text-xs font-bold text-brand-blue hover:underline pt-1">
            Open Freight Rate Calculator &rarr;
          </a>
        </div>

      </aside>

      <!-- =================================================================== -->
      <!-- RIGHT COLUMN: FULL RICH BLOG POST DETAILS & EDITORIAL ARTICLE       -->
      <!-- =================================================================== -->
      <main class="lg:col-span-8 xl:col-span-8 space-y-8 order-1 lg:order-2" id="blogArticleContainer">
        
        <!-- Article Header & Category Pill -->
        <div class="space-y-4">
          <div class="flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-2">
              <span id="articleCategoryBadge" class="bg-brand-blue text-white text-xs font-extrabold uppercase tracking-wider px-3.5 py-1 rounded-full shadow-sm">
                Market Intelligence
              </span>
              <span class="bg-sand text-gray-700 text-xs font-semibold px-2.5 py-1 rounded-full border border-sand-border flex items-center gap-1">
                <i data-lucide="tag" class="w-3 h-3 text-brand-blue"></i>
                <span id="articleSubTag">Ocean Freight &bull; AI Routing</span>
              </span>
            </div>

            <!-- Social Share Bar & Estimated Reading Time -->
            <div class="flex items-center gap-2 text-xs text-gray-500">
              <span id="articleReadTime" class="flex items-center gap-1 font-semibold">
                <i data-lucide="clock" class="w-3.5 h-3.5 text-brand-green"></i> 6 min read
              </span>
              <span>&bull;</span>
              <span id="articleDate">Sept 05, 2026</span>
            </div>
          </div>

          <!-- Main Headline -->
          <h1 id="articleTitle" class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-brand-dark tracking-tight leading-tight">
            Navigating Ocean Freight Volatility: How Real-Time Telemetry &amp; AI Routing Cut Demurrage Fees by 44%
          </h1>

          <!-- Author Bio Bar -->
          <div class="flex flex-wrap items-center justify-between gap-4 py-4 border-y border-gray-100">
            <div class="flex items-center gap-3">
              <div id="authorAvatar" class="w-11 h-11 rounded-2xl bg-brand-blue text-white font-bold flex items-center justify-center text-sm shadow-md shadow-brand-blue/30">
                DR
              </div>
              <div>
                <div id="authorName" class="font-heading font-bold text-sm text-brand-dark">Dr. Robert Chen</div>
                <div id="authorRole" class="text-xs text-gray-500">Head of Supply Chain Intelligence &bull; OmeHub Research</div>
              </div>
            </div>

            <!-- Share Buttons -->
            <div class="flex items-center gap-2">
              <span class="text-xs text-gray-400 font-medium mr-1 hidden sm:inline">Share:</span>
              <button type="button" onclick="shareArticle('linkedin')" class="p-2 rounded-xl bg-sand-light hover:bg-brand-blue hover:text-white text-gray-600 border border-gray-200 transition-colors" title="Share on LinkedIn">
                <i data-lucide="linkedin" class="w-4 h-4"></i>
              </button>
              <button type="button" onclick="shareArticle('twitter')" class="p-2 rounded-xl bg-sand-light hover:bg-brand-blue hover:text-white text-gray-600 border border-gray-200 transition-colors" title="Share on Twitter / X">
                <i data-lucide="twitter" class="w-4 h-4"></i>
              </button>
              <button type="button" onclick="copyArticleLink()" class="p-2 rounded-xl bg-sand-light hover:bg-brand-green hover:text-brand-dark text-gray-600 border border-gray-200 transition-colors" title="Copy Article Link">
                <i data-lucide="link" class="w-4 h-4"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Featured Article Hero Media Banner -->
        <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[16/9] bg-brand-dark group">
          <img id="articleFeaturedImg" src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1400&q=80" 
            alt="Container port operations" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/70 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-6 right-6 text-white text-xs flex items-center justify-between">
            <span class="bg-black/50 backdrop-blur-md px-3 py-1 rounded-full">AIS Satellite Telemetry &bull; Port Congestion Index 2026</span>
            <span class="text-gray-300 text-[11px] hidden sm:inline">Photo: Global Logistics Port Operations</span>
          </div>
        </div>

        <!-- Full Formatted Article Body -->
        <div id="articleBodyContent" class="space-y-6 text-gray-700 text-base leading-relaxed">
          
          <div class="p-6 bg-sand-light rounded-3xl border border-sand-border space-y-2">
            <div class="font-heading font-bold text-xs uppercase tracking-wider text-brand-blue flex items-center gap-1.5">
              <i data-lucide="lightbulb" class="w-4 h-4 text-brand-blue"></i>
              <span>Executive Summary</span>
            </div>
            <p class="text-sm font-medium text-brand-dark leading-relaxed">
              Global maritime supply chains in 2026 are experiencing unprecedented rate swings, canal detours, and rapid terminal turn-around shifts. This research briefing analyzes how forward-looking enterprise cargo owners are integrating live satellite AIS positioning with automated customs classification to eliminate terminal demurrage penalties before container grounding.
            </p>
          </div>

          <h2 class="font-heading font-extrabold text-2xl text-brand-dark pt-3">
            1. The Real Root Causes of Container Demurrage &amp; Detention
          </h2>
          <p>
            Demurrage charges are rarely caused by physical cargo failure. Rather, they stem from an <strong>information latency gap</strong> between carrier estimated arrivals, customs PAAR validation, and drayage truck dispatch. When milestone notifications are delayed by even 12 hours, shippers easily cross the free-time threshold at major global terminals.
          </p>

          <!-- In-Article Data Card / Comparison Table -->
          <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm my-6">
            <div class="bg-brand-dark p-4 text-white flex items-center justify-between">
              <span class="font-heading font-bold text-sm">Free-Time vs. Demurrage Risk Comparison</span>
              <span class="text-[10px] text-brand-green font-mono">OmeHub Intelligence Benchmark</span>
            </div>
            <div class="p-4 overflow-x-auto">
              <table class="w-full text-xs text-left">
                <thead class="text-gray-500 uppercase border-b border-gray-100">
                  <tr>
                    <th class="py-2 px-3">Gateway Corridor</th>
                    <th class="py-2 px-3">Traditional Dwell Time</th>
                    <th class="py-2 px-3">With OmeHub AI Telemetry</th>
                    <th class="py-2 px-3">Cost Savings / FEU</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 font-medium">
                  <tr>
                    <td class="py-2.5 px-3 font-bold text-brand-dark">Shanghai &rarr; Lagos Apapa</td>
                    <td class="py-2.5 px-3 text-red-600">6.8 Days</td>
                    <td class="py-2.5 px-3 text-emerald-600 font-bold">2.4 Days</td>
                    <td class="py-2.5 px-3 text-brand-blue font-mono font-bold">$780</td>
                  </tr>
                  <tr>
                    <td class="py-2.5 px-3 font-bold text-brand-dark">Ningbo &rarr; Rotterdam</td>
                    <td class="py-2.5 px-3 text-red-600">4.5 Days</td>
                    <td class="py-2.5 px-3 text-emerald-600 font-bold">1.8 Days</td>
                    <td class="py-2.5 px-3 text-brand-blue font-mono font-bold">$420</td>
                  </tr>
                  <tr>
                    <td class="py-2.5 px-3 font-bold text-brand-dark">Singapore &rarr; Tin Can Island</td>
                    <td class="py-2.5 px-3 text-red-600">7.2 Days</td>
                    <td class="py-2.5 px-3 text-emerald-600 font-bold">2.6 Days</td>
                    <td class="py-2.5 px-3 text-brand-blue font-mono font-bold">$920</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- IN-ARTICLE SPONSORED NATIVE ADVERT BREAK -->
          <div class="my-8 p-6 bg-gradient-to-r from-brand-dark via-brand-dark-soft to-brand-dark text-white rounded-3xl border border-white/15 relative overflow-hidden shadow-xl">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-5 relative z-10">
              <div class="space-y-1 text-center sm:text-left">
                <span class="bg-brand-green/20 text-brand-green text-[10px] font-extrabold px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                  ★ Partner Spotlight Offer
                </span>
                <h4 class="font-heading font-bold text-lg text-white">Save Up to 15% on Guaranteed Ocean Allocations</h4>
                <p class="text-xs text-gray-300">Book through OmeHub's verified carrier pool with direct digital customs filing.</p>
              </div>
              <a href="<?php echo $base_url; ?>pages/quote.php" class="btn-primary py-2.5 px-5 text-xs font-bold whitespace-nowrap shadow-lg shadow-brand-blue/50">
                <span>Calculate Rate Now</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
              </a>
            </div>
          </div>

          <h2 class="font-heading font-extrabold text-2xl text-brand-dark pt-3">
            2. Real-Time Telemetry and Automated Exception Handling
          </h2>
          <p>
            By synchronizing vessel AIS geolocation feeds with terminal berth schedules, OmeHub's neural engine calculates estimated vessel berthing times with 99.4% accuracy up to 72 hours before arrival. This allows cargo owners to initiate automated green-lane customs pre-clearance with the Nigeria Customs Service (NCS) and international customs administrations.
          </p>
          <p>
            Once customs approval is granted, inland drayage trucks are dispatched automatically to pick up containers the moment the box touches the terminal quay.
          </p>

          <!-- Key Takeaways Checklist -->
          <div class="p-6 bg-emerald-50/70 rounded-3xl border border-emerald-200 space-y-3">
            <h4 class="font-heading font-bold text-sm text-emerald-900 flex items-center gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600"></i>
              <span>Best Practices for Enterprise Logistics Teams</span>
            </h4>
            <ul class="space-y-2 text-xs text-emerald-950 font-medium">
              <li class="flex items-start gap-2">
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-emerald-600 shrink-0 mt-0.5"></i>
                <span>Pre-validate HS tariff codes and commercial invoices 5 days before port arrival.</span>
              </li>
              <li class="flex items-start gap-2">
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-emerald-600 shrink-0 mt-0.5"></i>
                <span>Utilize automated electronic bills of lading (eB/L) to eliminate physical courier delays.</span>
              </li>
              <li class="flex items-start gap-2">
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-emerald-600 shrink-0 mt-0.5"></i>
                <span>Set proactive 4-hour variance alerts on terminal gate-in and gate-out milestones.</span>
              </li>
            </ul>
          </div>

        </div>

        <!-- Article Footer Tags & Feedback -->
        <div class="pt-6 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
          <div class="flex items-center gap-2">
            <span class="font-bold text-gray-500">Related Tags:</span>
            <span class="bg-gray-100 text-gray-700 px-2.5 py-1 rounded-lg">#OceanFreight</span>
            <span class="bg-gray-100 text-gray-700 px-2.5 py-1 rounded-lg">#SupplyChainAI</span>
            <span class="bg-gray-100 text-gray-700 px-2.5 py-1 rounded-lg">#DemurrageReduction</span>
          </div>

          <div class="flex items-center gap-3 text-gray-500">
            <span>Was this article helpful?</span>
            <button type="button" onclick="handleReaction('like')" class="flex items-center gap-1 font-bold text-brand-blue hover:text-brand-blue-hover px-2.5 py-1 rounded-lg bg-sand transition-colors">
              <i data-lucide="thumbs-up" class="w-3.5 h-3.5"></i>
              <span id="reactionCount">142</span>
            </button>
          </div>
        </div>

      </main>

    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 3. RELATED BLOG POSTS & INDUSTRY INTELLIGENCE SECTION                     -->
<!-- ========================================================================= -->
<section class="py-16 bg-sand-light border-t border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
      <div>
        <div class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue uppercase tracking-wider mb-1">
          <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
          <span>Continue Reading</span>
        </div>
        <h3 class="font-heading font-extrabold text-2xl sm:text-3xl text-brand-dark">
          Related Articles &amp; Market Reports
        </h3>
      </div>
      <a href="#blogArticleContainer" onclick="switchArticle('post-1')" class="btn-outlined text-xs py-2 px-4">
        <span>Browse All Topics</span>
      </a>
    </div>

    <!-- Related Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <!-- Related Card 1 -->
      <article onclick="switchArticle('post-1')" class="bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group cursor-pointer">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80" alt="Machine Learning Telemetry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <span class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              AI &amp; Tech
            </span>
          </div>
          <div class="p-6 space-y-2">
            <div class="text-xs text-gray-400">Sept 04, 2026 &bull; 4 min read</div>
            <h4 class="font-heading font-bold text-base text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
              How Machine Learning Predicts Port Turnaround Delays Before Berth
            </h4>
            <p class="text-xs text-gray-600 line-clamp-2">
              Aggregating historical vessel turnaround and crane productivity to deliver 99.4% accurate predictive ETAs.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs text-brand-blue font-bold">
          <span>Read Full Article</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform"></i>
        </div>
      </article>

      <!-- Related Card 2 -->
      <article onclick="switchArticle('post-2')" class="bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group cursor-pointer">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1542296332-2e4473faf563?auto=format&fit=crop&w=800&q=80" alt="West African Customs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <span class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              Ports &amp; Customs
            </span>
          </div>
          <div class="p-6 space-y-2">
            <div class="text-xs text-gray-400">Sept 02, 2026 &bull; 5 min read</div>
            <h4 class="font-heading font-bold text-base text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
              West African Port Automation: Streamlining Pre-Arrival &amp; SONCAP Clearance
            </h4>
            <p class="text-xs text-gray-600 line-clamp-2">
              Accelerating customs cargo release times across Lagos and regional gateways from 7 days to 24 hours.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs text-brand-blue font-bold">
          <span>Read Full Article</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform"></i>
        </div>
      </article>

      <!-- Related Card 3 -->
      <article onclick="switchArticle('post-3')" class="bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group cursor-pointer">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80" alt="Rate Indices" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <span class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              Market Reports
            </span>
          </div>
          <div class="p-6 space-y-2">
            <div class="text-xs text-gray-400">Aug 28, 2026 &bull; 7 min read</div>
            <h4 class="font-heading font-bold text-base text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
              Asia-Europe &amp; African Corridors: Q3 Spot Rate Benchmarking &amp; Fuel Surcharges
            </h4>
            <p class="text-xs text-gray-600 line-clamp-2">
              Comprehensive container freight index breakdown and forward contract booking windows.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs text-brand-blue font-bold">
          <span>Read Full Article</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform"></i>
        </div>
      </article>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 4. ADVERTISERS & CARRIERS CALLOUT BANNER                                 -->
<!-- ========================================================================= -->
<section class="py-16 bg-brand-dark text-white relative overflow-hidden">
  <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-blue/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-brand-green/20 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      <div class="lg:col-span-8 space-y-4">
        <span class="bg-brand-green/20 text-brand-green text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider inline-flex items-center gap-1.5">
          <i data-lucide="radio" class="w-3.5 h-3.5"></i> Global Trade Media Network
        </span>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-white">
          Showcase Your Fleet, Warehousing &amp; Routes on OmeHub
        </h2>
        <p class="text-sm text-gray-300 max-w-2xl leading-relaxed">
          &ldquo;The OmeHub Blog is more than a feature, it's your voice in the global trade community. Advertise your services, share your updates, and connect with partners worldwide &mdash; all from your dashboard.&rdquo;
        </p>
        <div class="flex flex-wrap items-center gap-6 pt-2 text-xs font-mono text-gray-300">
          <div><strong class="text-brand-green text-lg">50K+</strong> Active Cargo Owners</div>
          <div><strong class="text-white text-lg">120+</strong> Ports Reached</div>
          <div><strong class="text-brand-blue text-lg">8.4%</strong> Average Advert CTR</div>
        </div>
      </div>

      <div class="lg:col-span-4 text-center sm:text-right">
        <button type="button" onclick="openAdModal()" class="w-full sm:w-auto btn-primary py-3.5 px-8 text-sm font-bold shadow-xl shadow-brand-blue/40">
          <span>Book an Advert Slot</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 5. INTERACTIVE MODALS & SCRIPTS                                           -->
<!-- ========================================================================= -->

<!-- Quick Promo / Advert Details Modal -->
<div id="promoDetailsModal" class="fixed inset-0 z-[9999] hidden flex items-center justify-center p-4 bg-brand-dark/80 backdrop-blur-md transition-opacity duration-300">
  <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-sand-border relative animate-in fade-in zoom-in-95">
    <button type="button" onclick="closePromoModal()" class="absolute top-5 right-5 z-20 w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 flex items-center justify-center transition-colors">
      <i data-lucide="x" class="w-4 h-4"></i>
    </button>
    <div id="promoModalBody" class="space-y-4">
      <!-- Injected via JavaScript -->
    </div>
  </div>
</div>

<!-- Advert Submission Modal -->
<div id="advertModal" class="fixed inset-0 z-[9999] hidden flex items-center justify-center p-4 bg-brand-dark/80 backdrop-blur-md transition-opacity duration-300">
  <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-sand-border relative p-6 sm:p-8">
    <button type="button" onclick="closeAdModal()" class="absolute top-5 right-5 z-20 w-9 h-9 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 flex items-center justify-center transition-colors">
      <i data-lucide="x" class="w-5 h-5"></i>
    </button>

    <div class="space-y-2 mb-6">
      <div class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-green bg-brand-green/15 px-3 py-1 rounded-full">
        <i data-lucide="megaphone" class="w-3.5 h-3.5"></i> Post an Advert on OmeHub
      </div>
      <h3 class="font-heading font-extrabold text-2xl text-brand-dark">Promote to 50,000+ Active Shippers</h3>
      <p class="text-xs text-gray-600">
        Feature in our top sliding marquee carousel, left-hand sidebar slots, and newsletter briefings.
      </p>
    </div>

    <form onsubmit="handleAdSubmission(event)" class="space-y-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Company / Carrier Name</label>
          <input type="text" required placeholder="e.g. Apex Marine Freight Ltd" class="w-full bg-sand-light border border-gray-200 rounded-xl px-4 py-2.5 text-xs text-brand-dark focus:outline-none focus:border-brand-blue">
        </div>
        <div>
          <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Business Email</label>
          <input type="email" required placeholder="contact@company.com" class="w-full bg-sand-light border border-gray-200 rounded-xl px-4 py-2.5 text-xs text-brand-dark focus:outline-none focus:border-brand-blue">
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Placement Type</label>
          <select class="w-full bg-sand-light border border-gray-200 rounded-xl px-4 py-2.5 text-xs text-brand-dark focus:outline-none focus:border-brand-blue">
            <option value="marquee">Top Sliding Marquee Ticker (Featured)</option>
            <option value="sidebar-left">Left-Hand Sidebar Banner Slot</option>
            <option value="in-article">In-Article Native Sponsored Story</option>
            <option value="bundle">Full Omnichannel Bundle (Marquee + Sidebar)</option>
          </select>
        </div>
        <div>
          <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Target Corridor / Service</label>
          <input type="text" placeholder="e.g. Asia-Africa, Reefer, Air Cargo" class="w-full bg-sand-light border border-gray-200 rounded-xl px-4 py-2.5 text-xs text-brand-dark focus:outline-none focus:border-brand-blue">
        </div>
      </div>

      <div>
        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Ad Headline &amp; Offer Details</label>
        <textarea rows="3" required placeholder="Describe your promo offer, rates, departure schedules, or contact instructions..." class="w-full bg-sand-light border border-gray-200 rounded-xl p-3 text-xs text-brand-dark focus:outline-none focus:border-brand-blue"></textarea>
      </div>

      <div class="bg-sand p-4 rounded-2xl border border-sand-border text-xs flex items-center justify-between">
        <div>
          <div class="font-bold text-brand-dark">Standard 30-Day Verified Campaign</div>
          <div class="text-[11px] text-gray-500">Includes verified line badge, direct quote links, and impression tracking.</div>
        </div>
        <span class="font-mono font-bold text-brand-blue">$150 / mo</span>
      </div>

      <button type="submit" class="w-full btn-primary py-3 text-xs font-bold justify-center shadow-lg shadow-brand-blue/30">
        <i data-lucide="send" class="w-4 h-4"></i>
        <span>Submit Advert for Rapid Review</span>
      </button>
    </form>
  </div>
</div>

<!-- Toast Notification -->
<div id="toastNotification" class="fixed bottom-6 left-1/2 -translate-x-1/2 z-[10000] hidden bg-brand-dark text-white text-xs font-bold px-4 py-2.5 rounded-full shadow-2xl items-center gap-2 transition-all">
  <i data-lucide="check-circle" class="w-4 h-4 text-brand-green"></i>
  <span id="toastMessage">Success</span>
</div>

<!-- Full Script for Dynamic Article Switching and Advert Modals -->
<script>
const blogDatabase = {
  'featured-1': {
    title: "Navigating Ocean Freight Volatility: How Real-Time Telemetry & AI Routing Cut Demurrage Fees by 44%",
    category: "Market Intelligence",
    subTag: "Ocean Freight • AI Routing",
    date: "Sept 05, 2026",
    readTime: "6 min read",
    author: "Dr. Robert Chen",
    role: "Head of Supply Chain Intelligence • OmeHub Research",
    avatar: "DR",
    img: "https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1400&q=80",
    content: `
      <div class="p-6 bg-sand-light rounded-3xl border border-sand-border space-y-2">
        <div class="font-heading font-bold text-xs uppercase tracking-wider text-brand-blue flex items-center gap-1.5">
          <i data-lucide="lightbulb" class="w-4 h-4 text-brand-blue"></i>
          <span>Executive Summary</span>
        </div>
        <p class="text-sm font-medium text-brand-dark leading-relaxed">
          Global maritime supply chains in 2026 are experiencing unprecedented rate swings, canal detours, and rapid terminal turn-around shifts. This research briefing analyzes how forward-looking enterprise cargo owners are integrating live satellite AIS positioning with automated customs classification to eliminate terminal demurrage penalties before container grounding.
        </p>
      </div>

      <h2 class="font-heading font-extrabold text-2xl text-brand-dark pt-3">1. The Real Root Causes of Container Demurrage & Detention</h2>
      <p>Demurrage charges are rarely caused by physical cargo failure. Rather, they stem from an <strong>information latency gap</strong> between carrier estimated arrivals, customs PAAR validation, and drayage truck dispatch. When milestone notifications are delayed by even 12 hours, shippers easily cross the free-time threshold at major global terminals.</p>

      <div class="my-8 p-6 bg-gradient-to-r from-brand-dark via-brand-dark-soft to-brand-dark text-white rounded-3xl border border-white/15 relative overflow-hidden shadow-xl">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-5 relative z-10">
          <div class="space-y-1 text-center sm:text-left">
            <span class="bg-brand-green/20 text-brand-green text-[10px] font-extrabold px-2.5 py-0.5 rounded-full uppercase tracking-wider">★ Partner Spotlight Offer</span>
            <h4 class="font-heading font-bold text-lg text-white">Save Up to 15% on Guaranteed Ocean Allocations</h4>
            <p class="text-xs text-gray-300">Book through OmeHub's verified carrier pool with direct digital customs filing.</p>
          </div>
          <a href="../pages/quote.php" class="btn-primary py-2.5 px-5 text-xs font-bold whitespace-nowrap shadow-lg shadow-brand-blue/50">
            <span>Calculate Rate Now</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <h2 class="font-heading font-extrabold text-2xl text-brand-dark pt-3">2. Real-Time Telemetry and Automated Exception Handling</h2>
      <p>By synchronizing vessel AIS geolocation feeds with terminal berth schedules, OmeHub's neural engine calculates estimated vessel berthing times with 99.4% accuracy up to 72 hours before arrival. This allows cargo owners to initiate automated green-lane customs pre-clearance with the Nigeria Customs Service (NCS) and international customs administrations.</p>
    `
  },
  'post-1': {
    title: "How OmeHub's Machine Learning Pipeline Predicts Port Delays Before Vessel Berth",
    category: "AI & Technology",
    subTag: "Machine Learning • Port ETAs",
    date: "Sept 04, 2026",
    readTime: "4 min read",
    author: "Tariq Al-Mansoor",
    role: "Logistics Tech Architect • OmeHub AI Labs",
    avatar: "TA",
    img: "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1400&q=80",
    content: `
      <div class="p-6 bg-sand-light rounded-3xl border border-sand-border space-y-2">
        <div class="font-heading font-bold text-xs uppercase tracking-wider text-brand-blue flex items-center gap-1.5">
          <i data-lucide="cpu" class="w-4 h-4 text-brand-blue"></i>
          <span>AI Architecture Breakdown</span>
        </div>
        <p class="text-sm font-medium text-brand-dark leading-relaxed">
          Predicting container vessel arrivals with precision is a core breakthrough of the modern logistics stack. OmeHub processes over 2 million historical voyage waypoints daily to update confidence intervals dynamically.
        </p>
      </div>

      <h2 class="font-heading font-extrabold text-2xl text-brand-dark pt-3">Aggregating 90+ Ocean Lines into a Single Prediction Queue</h2>
      <p>Weather patterns, canal bottlenecks, and crane gang productivity at major hubs all influence actual berth timing. Our neural predictive models ingest weather telemetry, port congestion indices, and anchorage duration curves to eliminate blind spots.</p>
      <p>Shippers receive automated alerts when variance exceeds 4 hours, allowing downstream warehouse and inland trucking schedules to adjust automatically without manual calls.</p>
    `
  },
  'post-2': {
    title: "2026 West African Port Automation: Streamlining Pre-Arrival Customs & SONCAP Clearance",
    category: "Ports & Customs",
    subTag: "Customs • NDPC Compliance",
    date: "Sept 02, 2026",
    readTime: "5 min read",
    author: "Amina Olanrewaju",
    role: "Regulatory & Trade Specialist • West Africa Corridor",
    avatar: "AO",
    img: "https://images.unsplash.com/photo-1542296332-2e4473faf563?auto=format&fit=crop&w=1400&q=80",
    content: `
      <div class="p-6 bg-sand-light rounded-3xl border border-sand-border space-y-2">
        <div class="font-heading font-bold text-xs uppercase tracking-wider text-brand-blue flex items-center gap-1.5">
          <i data-lucide="shield-check" class="w-4 h-4 text-brand-blue"></i>
          <span>Regulatory Advisory</span>
        </div>
        <p class="text-sm font-medium text-brand-dark leading-relaxed">
          The modernization of Nigerian and West African trade hubs has entered a digital phase with automated single-window integration, fully compliant with NDPC data standards.
        </p>
      </div>

      <h2 class="font-heading font-extrabold text-2xl text-brand-dark pt-3">Eliminating Traditional Clearance Bottlenecks</h2>
      <p>By pre-filing Form M, PAAR documentation, and SONCAP certificates directly into OmeHub digital vaults, cargo owners reduce physical inspection delays and achieve green-lane customs clearance directly upon container discharge.</p>
    `
  },
  'post-3': {
    title: "Asia-Europe & African Corridors: Q3 Spot Rate Benchmarking & Fuel Surcharges",
    category: "Market Reports",
    subTag: "Rate Indices • Fuel ETS",
    date: "Aug 28, 2026",
    readTime: "7 min read",
    author: "Marcus Schmidt",
    role: "Senior Freight Market Analyst • Global Index Desk",
    avatar: "MS",
    img: "https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1400&q=80",
    content: `
      <div class="p-6 bg-sand-light rounded-3xl border border-sand-border space-y-2">
        <div class="font-heading font-bold text-xs uppercase tracking-wider text-brand-blue flex items-center gap-1.5">
          <i data-lucide="bar-chart-2" class="w-4 h-4 text-brand-blue"></i>
          <span>Rate Index Overview</span>
        </div>
        <p class="text-sm font-medium text-brand-dark leading-relaxed">
          Spot container freight rates showed resilient stabilization throughout Q3 2026. This comprehensive analysis evaluates alliance capacity discipline and fuel surcharges.
        </p>
      </div>

      <h2 class="font-heading font-extrabold text-2xl text-brand-dark pt-3">Strategic Forward Booking Recommendations</h2>
      <p>Shippers are advised to utilize index-linked hybrid contracts with guaranteed equipment allocations on core East-West and South-South trade routes to lock in rates before peak holiday demand.</p>
    `
  }
};

const promoDatabase = {
  'atlantic': {
    partner: "Atlantic Line Global",
    service: "Shanghai &rarr; Lagos Direct Express Container Slots",
    badge: "Verified Carrier",
    price: "$3,150 / 40ft High Cube",
    details: "Weekly direct express vessel departures with zero rollover guarantee. Integrated Apapa & Tin Can pre-arrival customs sync. Free 14 days demurrage time included.",
    link: "../pages/quote.php?promo=ATLANTIC26"
  },
  'eurocold': {
    partner: "EuroCold Terminals BV",
    service: "Pharma & Reefer Cold Storage (Port of Rotterdam)",
    badge: "Verified Facility",
    price: "From €14.50 / pallet / week (10% Off Promo)",
    details: "15,000 m² temperature-controlled storage right at Maasvlakte II. Rapid cross-docking, EU veterinary inspection bay, and cross-border temperature-monitored reefer trucking.",
    link: "../pages/contact.php?inquiry=EuroCold-Ad"
  },
  'nautical': {
    partner: "Nautical Shield Underwriters",
    service: "Instant All-Risk Marine Cargo Insurance (ICC 'A')",
    badge: "Lloyd's Syndicate Coverholder",
    price: "From 0.18% Cargo Invoice Value",
    details: "Full general average, door-to-door transit, and automated paperless claims reimbursement within 48 hours for verified OmeHub shipments worldwide.",
    link: "../pages/contact.php?inquiry=MarineInsurance"
  },
  'apexair': {
    partner: "Apex Air Charter Express",
    service: "Dubai (DXB) & Europe &rarr; West Africa Scheduled Cargo Flights",
    badge: "Express Freight Line",
    price: "From $4.85 / kg",
    details: "Guaranteed 72-hour delivery, daily scheduled freight flights, hazardous materials certification, and direct airport bonded customs transfer.",
    link: "../pages/quote.php?mode=air"
  }
};

// Switch Active Article dynamically without full page reload
function switchArticle(key) {
  const article = blogDatabase[key];
  if (!article) return;

  document.getElementById('breadcrumbCurrentArticle').innerText = article.title;
  document.getElementById('articleTitle').innerText = article.title;
  document.getElementById('articleCategoryBadge').innerText = article.category;
  document.getElementById('articleSubTag').innerText = article.subTag;
  document.getElementById('articleDate').innerText = article.date;
  document.getElementById('articleReadTime').innerHTML = `<i data-lucide="clock" class="w-3.5 h-3.5 text-brand-green"></i> ${article.readTime}`;
  document.getElementById('authorName').innerText = article.author;
  document.getElementById('authorRole').innerText = article.role;
  document.getElementById('authorAvatar').innerText = article.avatar;
  document.getElementById('articleFeaturedImg').src = article.img;
  document.getElementById('articleBodyContent').innerHTML = article.content;

  // Scroll smoothly to article view
  document.getElementById('blogArticleContainer').scrollIntoView({ behavior: 'smooth', block: 'start' });

  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }
}

// Auto-switch article based on URL ?id= parameter
window.addEventListener('DOMContentLoaded', () => {
  const urlParams = new URLSearchParams(window.location.search);
  const postId = urlParams.get('id');
  if (postId && blogDatabase[postId]) {
    switchArticle(postId);
  }
});

// Quick View for Marquee Promos
function openPromoModal(key) {
  const promo = promoDatabase[key];
  if (!promo) return;

  const html = `
    <div class="space-y-3">
      <div class="flex items-center justify-between">
        <span class="bg-brand-blue text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full uppercase">${promo.badge}</span>
        <span class="text-xs font-bold text-brand-green bg-brand-green/10 px-2 py-0.5 rounded-full">Partner Offer</span>
      </div>
      <h3 class="font-heading font-bold text-xl text-brand-dark">${promo.partner}</h3>
      <div class="text-xs font-bold text-brand-blue font-mono text-sm">${promo.service}</div>
      <div class="p-3.5 bg-sand rounded-2xl border border-sand-border">
        <div class="text-[10px] text-gray-500 uppercase font-semibold">Special Rate / Pricing</div>
        <div class="text-base font-mono font-bold text-brand-dark">${promo.price}</div>
      </div>
      <p class="text-xs text-gray-600 leading-relaxed">${promo.details}</p>
      <div class="pt-3 border-t border-gray-100 flex items-center gap-3">
        <a href="${promo.link}" class="w-full btn-primary text-xs py-3 justify-center shadow-lg shadow-brand-blue/30 font-bold">
          <span>Claim Rate / Book Service</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>
    </div>
  `;
  document.getElementById('promoModalBody').innerHTML = html;
  document.getElementById('promoDetailsModal').classList.remove('hidden');
  document.body.style.overflow = 'hidden';

  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }
}

function closePromoModal() {
  document.getElementById('promoDetailsModal').classList.add('hidden');
  document.body.style.overflow = 'auto';
}

function openAdModal() {
  document.getElementById('advertModal').classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeAdModal() {
  document.getElementById('advertModal').classList.add('hidden');
  document.body.style.overflow = 'auto';
}

function handleAdSubmission(e) {
  e.preventDefault();
  closeAdModal();
  showToast('Advert submitted successfully! Our media coordinator will verify your listing.');
}

function showToast(msg) {
  const toast = document.getElementById('toastNotification');
  const toastMsg = document.getElementById('toastMessage');
  if (toast && toastMsg) {
    toastMsg.innerText = msg;
    toast.classList.remove('hidden');
    toast.classList.add('flex');
    setTimeout(() => {
      toast.classList.remove('flex');
      toast.classList.add('hidden');
    }, 4000);
  }
}

function handleReaction(type) {
  const countEl = document.getElementById('reactionCount');
  if (countEl) {
    let current = parseInt(countEl.innerText) || 142;
    countEl.innerText = current + 1;
    showToast('Thanks for your feedback!');
  }
}

function shareArticle(platform) {
  const url = window.location.href;
  if (platform === 'linkedin') {
    window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`, '_blank');
  } else if (platform === 'twitter') {
    window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent('Read this briefing on OmeHub Blogs & Adverts')}`, '_blank');
  }
}

function copyArticleLink() {
  navigator.clipboard.writeText(window.location.href).then(() => {
    showToast('Article link copied to clipboard!');
  }).catch(() => {
    showToast('Link copied!');
  });
}

// Close modals on escape or backdrop click
window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    closePromoModal();
    closeAdModal();
  }
});
document.getElementById('promoDetailsModal')?.addEventListener('click', (e) => {
  if (e.target.id === 'promoDetailsModal') closePromoModal();
});
document.getElementById('advertModal')?.addEventListener('click', (e) => {
  if (e.target.id === 'advertModal') closeAdModal();
});
</script>

<?php include '../includes/cta-banner.php'; ?>
<?php include '../includes/footer.php'; ?>
