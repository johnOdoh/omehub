<?php
$page_title = "Blogs & Adverts Directory | Global Freight Intelligence & Partner Adverts";
$page_desc = "Browse comprehensive lists of logistics blogs, market intelligence, maritime insights, and verified commercial carrier adverts on OmeHub.";
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
</style>

<!-- Top Breadcrumb -->
<div class="bg-sand-light border-b border-sand-border py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-xs">
    <nav class="flex items-center gap-2 text-gray-500" aria-label="Breadcrumb">
      <a href="<?php echo $base_url; ?>index.php" class="hover:text-brand-blue transition-colors flex items-center gap-1">
        <i data-lucide="home" class="w-3.5 h-3.5"></i> Home
      </a>
      <span>/</span>
      <span class="text-brand-dark font-semibold">Blogs &amp; Adverts Directory</span>
    </nav>
    <div class="flex items-center gap-3">
      <button type="button" onclick="openAdModal()" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover bg-brand-blue/10 hover:bg-brand-blue/15 px-3.5 py-1.5 rounded-full transition-all">
        <i data-lucide="megaphone" class="w-3.5 h-3.5"></i>
        <span>Post an Advert</span>
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
<!-- 1. SLIDING MARQUEE CAROUSEL (SPONSORED ADVERTS & PROMOTIONS)              -->
<!-- ========================================================================= -->
<section class="bg-brand-dark text-white py-4 border-b border-white/10 overflow-hidden relative select-none">
  <div class="absolute left-0 top-0 bottom-0 w-16 bg-gradient-to-r from-brand-dark to-transparent z-10 pointer-events-none"></div>
  <div class="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-brand-dark to-transparent z-10 pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 mb-2.5 flex items-center justify-between">
    <div class="flex items-center gap-2">
      <span class="bg-brand-green/20 text-brand-green text-[10px] font-extrabold uppercase tracking-widest px-2.5 py-0.5 rounded-full flex items-center gap-1">
        <span class="w-1.5 h-1.5 rounded-full bg-brand-green animate-ping"></span> Sponsored Marquee
      </span>
      <span class="text-xs text-gray-300 font-medium hidden sm:inline">Featured Carrier &amp; Partner Commercial Adverts (Hover to Pause)</span>
    </div>
    <div class="text-[11px] text-gray-400 font-mono">
      <span class="text-brand-green font-bold">50k+</span> Shippers Reached
    </div>
  </div>

  <!-- Infinite Marquee Track -->
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
        <div class="text-xs font-bold text-white truncate">Dubai (DXB) &rarr; West Africa Flights</div>
        <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
          <span>72-Hr Delivery</span>
          <span class="text-[10px] text-amber-300 underline">Book Air &rarr;</span>
        </div>
      </div>
    </div>

    <!-- DUPLICATE SET -->
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

  </div>
</section>

<!-- ========================================================================= -->
<!-- 2. HERO HEADER & COMMAND FILTER BAR                                       -->
<!-- ========================================================================= -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/40 pt-12 pb-14 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-30 pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-8">
      <div class="inline-flex items-center gap-2 bg-brand-blue/10 text-brand-blue px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
        <i data-lucide="newspaper" class="w-3.5 h-3.5"></i>
        <span>OmeHub Media &amp; Intelligence Hub</span>
      </div>
      
      <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-brand-dark tracking-tight leading-tight">
        Lists of <span class="text-brand-blue">Blogs</span> &amp; <span class="text-brand-green">Adverts</span>
      </h1>
      
      <p class="text-gray-600 text-base sm:text-lg leading-relaxed">
        Explore verified trade publications, freight forwarding intelligence, port updates, and discover commercial services from global logistics providers.
      </p>
    </div>

    <!-- Search & Filter Controls -->
    <div class="max-w-5xl mx-auto bg-white rounded-3xl p-4 shadow-xl shadow-brand-dark/5 border border-sand-border space-y-4">
      <div class="flex flex-col md:flex-row items-center gap-3">
        <!-- Live Search -->
        <div class="relative w-full md:flex-1">
          <i data-lucide="search" class="w-4 h-4 text-gray-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
          <input type="text" id="directorySearchInput" placeholder="Search blogs by title, topic, port, carrier, tariff, or advert..."
            class="w-full bg-sand-light/70 border border-gray-200 rounded-2xl pl-10 pr-4 py-2.5 text-sm text-brand-dark focus:outline-none focus:border-brand-blue focus:bg-white transition-all placeholder-gray-400">
        </div>

        <!-- Mode Toggle: All / Blogs Only / Adverts Only -->
        <div class="flex items-center gap-1.5 p-1 bg-sand-light rounded-2xl border border-gray-200 w-full md:w-auto justify-center">
          <button type="button" onclick="setFeedType('all', this)" class="feed-type-btn active-type px-3.5 py-1.5 rounded-xl text-xs font-bold bg-brand-blue text-white shadow-sm transition-all">
            All Listings
          </button>
          <button type="button" onclick="setFeedType('blog', this)" class="feed-type-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold text-gray-700 hover:bg-gray-100 transition-all">
            Blogs Only
          </button>
          <button type="button" onclick="setFeedType('advert', this)" class="feed-type-btn px-3.5 py-1.5 rounded-xl text-xs font-semibold text-emerald-700 hover:bg-emerald-50 transition-all flex items-center gap-1">
            <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span>
            Adverts Only
          </button>
        </div>
      </div>

      <!-- Category Filter Pills -->
      <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-none border-t border-gray-100 pt-3" id="topicFilters">
        <span class="text-xs text-gray-400 font-bold shrink-0 mr-1 hidden sm:inline">Topics:</span>
        <button type="button" onclick="filterByTopic('all', this)" class="topic-btn active-topic px-3 py-1 rounded-xl text-xs font-bold bg-brand-dark text-white whitespace-nowrap">
          All Topics
        </button>
        <button type="button" onclick="filterByTopic('market-reports', this)" class="topic-btn px-3 py-1 rounded-xl text-xs font-medium bg-sand text-gray-700 hover:bg-gray-100 whitespace-nowrap">
          Market Reports
        </button>
        <button type="button" onclick="filterByTopic('tech-ai', this)" class="topic-btn px-3 py-1 rounded-xl text-xs font-medium bg-sand text-gray-700 hover:bg-gray-100 whitespace-nowrap">
          AI &amp; Tech
        </button>
        <button type="button" onclick="filterByTopic('ports-customs', this)" class="topic-btn px-3 py-1 rounded-xl text-xs font-medium bg-sand text-gray-700 hover:bg-gray-100 whitespace-nowrap">
          Ports &amp; Customs
        </button>
        <button type="button" onclick="filterByTopic('sustainability', this)" class="topic-btn px-3 py-1 rounded-xl text-xs font-medium bg-sand text-gray-700 hover:bg-gray-100 whitespace-nowrap">
          Green Logistics
        </button>
        <button type="button" onclick="filterByTopic('carriers', this)" class="topic-btn px-3 py-1 rounded-xl text-xs font-medium bg-sand text-gray-700 hover:bg-gray-100 whitespace-nowrap">
          Carrier Adverts
        </button>
      </div>
    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 3. FEATURED EDITORIAL SPOTLIGHT (HERO ARTICLE)                            -->
<!-- ========================================================================= -->
<section class="py-8 bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-brand-dark-surface text-white rounded-3xl p-6 sm:p-10 border border-white/10 shadow-2xl relative overflow-hidden group">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1400&q=80" alt="Ocean Freight & AI" class="w-full h-full object-cover opacity-30 group-hover:scale-105 transition-transform duration-700">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark-surface via-brand-dark-surface/90 to-transparent"></div>
      </div>

      <div class="relative z-10 max-w-2xl space-y-4">
        <div class="flex flex-wrap items-center gap-2.5">
          <span class="bg-brand-blue text-white text-[10px] font-extrabold uppercase tracking-wider px-3 py-1 rounded-full shadow">
            Featured Deep Dive
          </span>
          <span class="bg-brand-green/20 text-brand-green text-[10px] font-bold px-2.5 py-1 rounded-full">
            Q3 2026 Intelligence Briefing
          </span>
          <span class="text-xs text-gray-400 flex items-center gap-1">
            <i data-lucide="clock" class="w-3.5 h-3.5 text-brand-green"></i> 6 min read
          </span>
        </div>

        <h2 class="font-heading font-extrabold text-2xl sm:text-3xl lg:text-4xl text-white leading-tight">
          Navigating Ocean Freight Volatility: How Real-Time Telemetry &amp; AI Routing Cut Demurrage Fees by 44%
        </h2>

        <p class="text-sm text-gray-300 leading-relaxed line-clamp-3">
          With major shipping corridors experiencing dynamic congestion and port turn-around shifts, forward-looking enterprise shippers are turning to automated predictive milestone engines to secure spot allocations and prevent costly detention.
        </p>

        <div class="pt-2 flex flex-wrap items-center gap-4">
          <a href="<?php echo $base_url; ?>pages/blog.php?id=featured-1" class="btn-primary text-xs sm:text-sm py-2.5 px-6 shadow-lg shadow-brand-blue/40">
            <span>Read Full Article &amp; Analysis</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <span class="text-xs text-gray-400">By <strong>Dr. Robert Chen</strong> &bull; Head of Supply Chain Intelligence</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 4. LISTS OF BLOGS AND ADVERTS (MAIN GRID FEED WITH PAGINATION)            -->
<!-- ========================================================================= -->
<section id="directoryFeedSection" class="py-14 bg-sand-light/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Feed Header / Counters -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
      <div>
        <h3 class="font-heading font-extrabold text-2xl sm:text-3xl text-brand-dark">
          Latest Publications &amp; Commercial Listings
        </h3>
        <p class="text-xs sm:text-sm text-gray-500 mt-1">
          Showing <span id="visibleCardsCount" class="font-bold text-brand-blue">12</span> verified articles and partner promotions
        </p>
      </div>

      <div class="flex items-center gap-3 text-xs text-gray-500">
        <div class="flex items-center gap-1.5">
          <span>Show:</span>
          <select id="itemsPerPageSelect" onchange="changeItemsPerPage(this.value)" class="bg-white border border-gray-200 rounded-xl px-2.5 py-1.5 text-xs text-brand-dark font-semibold focus:outline-none focus:border-brand-blue shadow-sm">
            <option value="6" selected>6 per page</option>
            <option value="9">9 per page</option>
            <option value="12">12 per page</option>
          </select>
        </div>

        <div class="flex items-center gap-1.5">
          <span>Sort:</span>
          <select id="listingSort" class="bg-white border border-gray-200 rounded-xl px-3 py-1.5 text-xs text-brand-dark font-medium focus:outline-none focus:border-brand-blue shadow-sm">
            <option value="newest">Newest First</option>
            <option value="popular">Most Read</option>
            <option value="adverts">Adverts First</option>
          </select>
        </div>
      </div>
    </div>

    <!-- The Feed Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7" id="directoryGrid">

      <!-- ================= LIST ITEM 1: BLOG ================= -->
      <article class="feed-item bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="blog" data-topic="tech-ai" data-keywords="ai machine learning telemetry eta port predictive tracking algorithms">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80" alt="AI Container Telemetry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              AI &amp; Tech
            </div>
            <div class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded-md flex items-center gap-1">
              <i data-lucide="clock" class="w-3 h-3 text-brand-green"></i> 4 min read
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center gap-2 text-xs text-gray-400">
              <span>Sept 04, 2026</span>
              <span>&bull;</span>
              <span>Logistics Tech</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
              How OmeHub's Machine Learning Pipeline Predicts Port Delays Before Vessel Berth
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed line-clamp-3">
              Aggregating 2 million historical voyage waypoints, AIS satellite positioning, and crane productivity curves to deliver 99.4% accurate predictive ETAs.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-[10px]">TA</div>
            <span class="text-gray-700 font-semibold">Tariq Al-Mansoor</span>
          </div>
          <a href="<?php echo $base_url; ?>pages/blog.php?id=post-1" class="text-brand-blue font-bold inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
            <span>Read Article</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 2: SPONSORED ADVERT ================= -->
      <article class="feed-item bg-gradient-to-b from-blue-50/70 via-white to-white rounded-3xl border-2 border-brand-blue/30 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="advert" data-topic="carriers" data-keywords="advert sponsored carrier ocean vessel container shanghai lagos slot space rate">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-brand-dark">
            <img src="https://images.unsplash.com/photo-1542296332-2e4473faf563?auto=format&fit=crop&w=800&q=80" alt="Vessel Container Slots" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
            <div class="absolute top-3 left-3 bg-brand-blue text-white text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow">
              ★ Sponsored Advert
            </div>
            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-md text-brand-dark text-[10px] font-bold px-2.5 py-1 rounded-full flex items-center gap-1">
              <i data-lucide="shield-check" class="w-3.5 h-3.5 text-brand-blue"></i> Verified Carrier
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center justify-between text-xs">
              <span class="font-bold text-brand-blue">Atlantic Line Global</span>
              <span class="text-[11px] text-gray-500 font-mono">22-Day Transit</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark leading-snug">
              Shanghai &rarr; Lagos Direct Express 40HC Container Allocation
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed">
              Weekly departures with zero roll-over guarantee and automated Apapa customs pre-arrival synchronization. Free 14 days demurrage.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-3 border-t border-brand-blue/15 flex items-center justify-between">
          <div>
            <span class="text-[10px] text-gray-400 uppercase font-semibold">Guaranteed Spot</span>
            <div class="text-sm font-mono font-bold text-brand-blue">$3,150 / FEU</div>
          </div>
          <a href="<?php echo $base_url; ?>pages/quote.php?promo=ATLANTIC26" class="btn-primary text-xs py-2 px-4 shadow-md shadow-brand-blue/30">
            <span>Book Allocation</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 3: BLOG ================= -->
      <article class="feed-item bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="blog" data-topic="ports-customs" data-keywords="ports customs nigeria apapa tincan paar form m soncap ndpc tariff compliance">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1542296332-2e4473faf563?auto=format&fit=crop&w=800&q=80" alt="Customs and Port Operations" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              Ports &amp; Customs
            </div>
            <div class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded-md flex items-center gap-1">
              <i data-lucide="clock" class="w-3 h-3 text-brand-green"></i> 5 min read
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center gap-2 text-xs text-gray-400">
              <span>Sept 02, 2026</span>
              <span>&bull;</span>
              <span>Regulatory Advisory</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
              2026 West African Port Automation: Streamlining Pre-Arrival &amp; SONCAP Clearance
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed line-clamp-3">
              How single-window digital integration between OmeHub and Nigerian port terminals is accelerating release times from 7 days down to 24 hours.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-[10px]">AO</div>
            <span class="text-gray-700 font-semibold">Amina Olanrewaju</span>
          </div>
          <a href="<?php echo $base_url; ?>pages/blog.php?id=post-2" class="text-brand-blue font-bold inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
            <span>Read Article</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 4: SPONSORED ADVERT ================= -->
      <article class="feed-item bg-gradient-to-b from-emerald-50/70 via-white to-white rounded-3xl border-2 border-emerald-300/80 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="advert" data-topic="carriers" data-keywords="advert warehouse cold storage reefer rotterdam pharma perishables temperature">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-brand-dark">
            <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?auto=format&fit=crop&w=800&q=80" alt="Cold Storage Facility" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
            <div class="absolute top-3 left-3 bg-brand-green text-brand-dark text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow">
              ★ Sponsored Advert
            </div>
            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-md text-emerald-800 text-[10px] font-bold px-2.5 py-1 rounded-full flex items-center gap-1">
              <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> Bonded Warehouse
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center justify-between text-xs">
              <span class="font-bold text-emerald-800">EuroCold Terminals BV</span>
              <span class="text-[11px] text-gray-500">Port of Rotterdam</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark leading-snug">
              Certified Pharma &amp; Perishable Reefer Warehousing (15,000 m²)
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed">
              Temperature-controlled (-25°C to +15°C) cross-dock storage next to Maasvlakte II. Rapid border inspection and cross-Europe reefer trucking.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-3 border-t border-emerald-100 flex items-center justify-between">
          <span class="text-xs font-mono font-bold text-emerald-700">10% Promo Discount</span>
          <a href="<?php echo $base_url; ?>pages/contact.php?inquiry=EuroCold-Ad" class="btn-primary text-xs py-2 px-4 bg-emerald-600 hover:bg-emerald-700">
            <span>Inquire Space</span>
            <i data-lucide="mail" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 5: BLOG ================= -->
      <article class="feed-item bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="blog" data-topic="market-reports" data-keywords="rates index transpacific spot container surcharges benchmarking">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80" alt="Freight Rates Benchmark" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              Market Reports
            </div>
            <div class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded-md flex items-center gap-1">
              <i data-lucide="clock" class="w-3 h-3 text-brand-green"></i> 7 min read
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center gap-2 text-xs text-gray-400">
              <span>Aug 28, 2026</span>
              <span>&bull;</span>
              <span>Rate Indices</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
              Asia-Europe &amp; African Corridors: Q3 Spot Rate Benchmarking &amp; Fuel Surcharges
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed line-clamp-3">
              Comprehensive container index breakdown analyzing ETS emissions surcharges, blank sailings ratios, and recommended forward booking windows.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-[10px]">MS</div>
            <span class="text-gray-700 font-semibold">Marcus Schmidt</span>
          </div>
          <a href="<?php echo $base_url; ?>pages/blog.php?id=post-3" class="text-brand-blue font-bold inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
            <span>Read Article</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 6: SPONSORED ADVERT ================= -->
      <article class="feed-item bg-gradient-to-b from-cyan-50/70 via-white to-white rounded-3xl border-2 border-cyan-300/70 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="advert" data-topic="carriers" data-keywords="advert insurance cargo policy lloyds protection claims marine">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-brand-dark">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" alt="Marine Cargo Insurance" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
            <div class="absolute top-3 left-3 bg-cyan-600 text-white text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow">
              ★ Sponsored Advert
            </div>
            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-md text-brand-dark text-[10px] font-bold px-2.5 py-1 rounded-full flex items-center gap-1">
              <i data-lucide="shield" class="w-3.5 h-3.5 text-cyan-600"></i> Lloyd's Syndicate
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center justify-between text-xs">
              <span class="font-bold text-cyan-800">Nautical Shield Underwriters</span>
              <span class="text-[11px] text-gray-500">Global Coverage</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark leading-snug">
              Instant All-Risk Marine Cargo Insurance (ICC 'A') from 0.18%
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed">
              Door-to-door transit coverage, full general average protection, and automated paperless claims reimbursement within 48 hours for OmeHub shipments.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-3 border-t border-cyan-100 flex items-center justify-between">
          <span class="text-xs font-mono font-bold text-cyan-800">Instant Digital Policy</span>
          <a href="<?php echo $base_url; ?>pages/contact.php?inquiry=MarineInsurance" class="btn-primary text-xs py-2 px-4 bg-cyan-700 hover:bg-cyan-800">
            <span>Get Cover</span>
            <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 7: BLOG ================= -->
      <article class="feed-item bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="blog" data-topic="sustainability" data-keywords="sustainability carbon biofuel scope 3 green shipping esg glec insetting">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1532601224476-15c79f2f7a51?auto=format&fit=crop&w=800&q=80" alt="Green Shipping & Decarbonization" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-3 left-3 bg-emerald-700 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              Green Logistics
            </div>
            <div class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded-md flex items-center gap-1">
              <i data-lucide="clock" class="w-3 h-3 text-brand-green"></i> 5 min read
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center gap-2 text-xs text-gray-400">
              <span>Aug 21, 2026</span>
              <span>&bull;</span>
              <span>Decarbonization</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark group-hover:text-emerald-600 transition-colors leading-snug">
              Scope 3 Transparency: Insetting Biofuels to Reduce Ocean Container Footprint by 84%
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed line-clamp-3">
              How OmeHub's verified carbon reporting ledger allows global brand owners to audit their supply chain emissions according to GLEC Framework standards.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-800 font-bold flex items-center justify-center text-[10px]">EL</div>
            <span class="text-gray-700 font-semibold">Elena Lindqvist</span>
          </div>
          <a href="<?php echo $base_url; ?>pages/blog.php?id=post-4" class="text-emerald-600 font-bold inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
            <span>Read Article</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 8: SPONSORED ADVERT ================= -->
      <article class="feed-item bg-gradient-to-b from-amber-50/70 via-white to-white rounded-3xl border-2 border-amber-300/70 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="advert" data-topic="carriers" data-keywords="advert air charter express dubai europe west africa cargo flights freight">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-brand-dark">
            <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&w=800&q=80" alt="Air Cargo Express" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
            <div class="absolute top-3 left-3 bg-amber-500 text-white text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow">
              ★ Sponsored Advert
            </div>
            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-md text-amber-800 text-[10px] font-bold px-2.5 py-1 rounded-full flex items-center gap-1">
              <i data-lucide="plane" class="w-3.5 h-3.5 text-amber-600"></i> Express Air
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center justify-between text-xs">
              <span class="font-bold text-amber-900">Apex Air Charter Express</span>
              <span class="text-[11px] text-gray-500">72-Hour Transit</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark leading-snug">
              Dubai (DXB) &amp; Europe &rarr; West Africa Scheduled Air Cargo Charters
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed">
              Guaranteed space allocations for time-critical electronics, spare parts, and pharma with integrated bonded airport customs transfer.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-3 border-t border-amber-100 flex items-center justify-between">
          <span class="text-xs font-mono font-bold text-amber-800">From $4.85 / kg</span>
          <a href="<?php echo $base_url; ?>pages/quote.php?mode=air" class="btn-primary text-xs py-2 px-4 bg-amber-600 hover:bg-amber-700">
            <span>Book Air Space</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 9: BLOG ================= -->
      <article class="feed-item bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="blog" data-topic="market-reports" data-keywords="rail road intermodal drayage corridors inland cross-border freight africa">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1474487548417-781cb71495f3?auto=format&fit=crop&w=800&q=80" alt="Rail and Intermodal Logistics" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              Intermodal
            </div>
            <div class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded-md flex items-center gap-1">
              <i data-lucide="clock" class="w-3 h-3 text-brand-green"></i> 6 min read
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center gap-2 text-xs text-gray-400">
              <span>Aug 14, 2026</span>
              <span>&bull;</span>
              <span>Corridor Infrastructure</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
              Cross-Border Rail &amp; Intermodal Corridors: Accelerating Inland Freight in 2026
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed line-clamp-3">
              Examining modern rail links from maritime gateways to dry ports across West Africa, cutting highway congestion and transit costs by 35%.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-[10px]">DR</div>
            <span class="text-gray-700 font-semibold">Dr. Robert Chen</span>
          </div>
          <a href="<?php echo $base_url; ?>pages/blog.php?id=featured-1" class="text-brand-blue font-bold inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
            <span>Read Article</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 10: SPONSORED ADVERT ================= -->
      <article class="feed-item bg-gradient-to-b from-sand-light via-white to-white rounded-3xl border-2 border-brand-dark/20 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="advert" data-topic="carriers" data-keywords="advert drayage trucking port evacuation apapa tincan fleet trucks inland">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-brand-dark">
            <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=800&q=80" alt="Port Drayage Fleet" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
            <div class="absolute top-3 left-3 bg-brand-dark text-white text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow">
              ★ Sponsored Advert
            </div>
            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-md text-brand-dark text-[10px] font-bold px-2.5 py-1 rounded-full flex items-center gap-1">
              <i data-lucide="truck" class="w-3.5 h-3.5 text-brand-blue"></i> GPS Fleet
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center justify-between text-xs">
              <span class="font-bold text-brand-dark">OmeHub Bonded Drayage Fleet</span>
              <span class="text-[11px] text-emerald-700 font-bold">24-Hr Gate Out</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark leading-snug">
              Fast-Track Apapa &amp; Tin Can Port Terminal Evacuation &amp; Direct Off-Docking
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed">
              Dedicated pre-cleared flatbed and lowbed chassis fleet for immediate bonded container evacuation straight to Ikeja, Ogun, and regional inland depots.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-3 border-t border-gray-100 flex items-center justify-between">
          <span class="text-xs font-mono font-bold text-brand-blue">Guaranteed Trucks</span>
          <a href="<?php echo $base_url; ?>pages/quote.php" class="btn-primary text-xs py-2 px-4">
            <span>Book Drayage</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 11: BLOG ================= -->
      <article class="feed-item bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="blog" data-topic="tech-ai" data-keywords="ai generative automated tariff hs code customs compliance classification duty">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=800&q=80" alt="Generative AI Customs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-3 left-3 bg-brand-blue text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
              AI &amp; Customs
            </div>
            <div class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded-md flex items-center gap-1">
              <i data-lucide="clock" class="w-3 h-3 text-brand-green"></i> 5 min read
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center gap-2 text-xs text-gray-400">
              <span>Aug 08, 2026</span>
              <span>&bull;</span>
              <span>Tariff AI</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
              Automating 6-Digit HS Tariff Codes with Multilingual Vision OCR
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed line-clamp-3">
              How OmeHub's document vault scans commercial invoices in English, Mandarin, and French to classify global customs tariffs with zero audit errors.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-[10px]">TA</div>
            <span class="text-gray-700 font-semibold">Tariq Al-Mansoor</span>
          </div>
          <a href="<?php echo $base_url; ?>pages/blog.php?id=post-1" class="text-brand-blue font-bold inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
            <span>Read Article</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

      <!-- ================= LIST ITEM 12: SPONSORED ADVERT ================= -->
      <article class="feed-item bg-gradient-to-b from-indigo-50/70 via-white to-white rounded-3xl border-2 border-indigo-300/70 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group"
        data-type="advert" data-topic="carriers" data-keywords="advert pacific transpacific los angeles singapore container vessel slot">
        <div>
          <div class="relative aspect-[16/10] overflow-hidden bg-brand-dark">
            <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=800&q=80" alt="Transpacific Alliance" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
            <div class="absolute top-3 left-3 bg-indigo-600 text-white text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider shadow">
              ★ Sponsored Advert
            </div>
            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-md text-indigo-900 text-[10px] font-bold px-2.5 py-1 rounded-full flex items-center gap-1">
              <i data-lucide="anchor" class="w-3.5 h-3.5 text-indigo-600"></i> Transpacific
            </div>
          </div>
          <div class="p-6 space-y-3">
            <div class="flex items-center justify-between text-xs">
              <span class="font-bold text-indigo-900">Pacific Carrier Alliance</span>
              <span class="text-[11px] text-gray-500">Weekly Departures</span>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark leading-snug">
              Los Angeles / Long Beach &rarr; Southeast Asia Guaranteed Equipment Slots
            </h4>
            <p class="text-xs text-gray-600 leading-relaxed">
              Expedited 14-day direct ocean transit connecting West Coast US shippers with Singapore, Port Klang, and Tanjung Pelepas transshipment hubs.
            </p>
          </div>
        </div>
        <div class="px-6 pb-6 pt-3 border-t border-indigo-100 flex items-center justify-between">
          <span class="text-xs font-mono font-bold text-indigo-900">$2,450 / 40HC</span>
          <a href="<?php echo $base_url; ?>pages/quote.php" class="btn-primary text-xs py-2 px-4 bg-indigo-600 hover:bg-indigo-700">
            <span>Get Quote</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </article>

    </div>

    <!-- Empty Search State -->
    <div id="emptyDirectoryState" class="hidden text-center py-16 bg-white rounded-3xl border border-sand-border p-8 mt-6">
      <div class="w-12 h-12 rounded-2xl bg-gray-100 text-gray-400 flex items-center justify-center mx-auto mb-3">
        <i data-lucide="search-x" class="w-6 h-6"></i>
      </div>
      <h4 class="font-heading font-bold text-lg text-brand-dark mb-1">No matching articles or adverts found</h4>
      <p class="text-xs text-gray-500 max-w-sm mx-auto mb-4">Try clearing the search keywords or switching filters.</p>
      <button type="button" onclick="resetDirectoryFilters()" class="btn-primary text-xs py-2 px-4">
        <span>Reset Filters</span>
      </button>
    </div>

    <!-- ========================================================================= -->
    <!-- PAGINATION UI CONTAINER                                                   -->
    <!-- ========================================================================= -->
    <div id="paginationContainer" class="mt-12 pt-8 border-t border-sand-border flex flex-col sm:flex-row items-center justify-between gap-4">
      
      <!-- Range Info -->
      <div class="text-xs text-gray-500 font-medium order-2 sm:order-1">
        Showing <span id="pageRangeStart" class="font-bold text-brand-dark">1</span> to <span id="pageRangeEnd" class="font-bold text-brand-dark">6</span> of <span id="pageTotalCount" class="font-bold text-brand-blue">12</span> entries
      </div>

      <!-- Page Buttons -->
      <div class="flex items-center gap-1.5 order-1 sm:order-2">
        <!-- Previous Page Button -->
        <button id="prevPageBtn" type="button" onclick="changePage(currentPage - 1)"
          class="flex items-center gap-1 px-3.5 py-2 rounded-xl text-xs font-bold border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 hover:border-brand-blue/30 disabled:opacity-40 disabled:pointer-events-none transition-all shadow-sm">
          <i data-lucide="chevron-left" class="w-4 h-4"></i>
          <span class="hidden sm:inline">Previous</span>
        </button>

        <!-- Dynamic Page Number Pills Container -->
        <div id="paginationPills" class="flex items-center gap-1">
          <!-- Injected via JavaScript -->
        </div>

        <!-- Next Page Button -->
        <button id="nextPageBtn" type="button" onclick="changePage(currentPage + 1)"
          class="flex items-center gap-1 px-3.5 py-2 rounded-xl text-xs font-bold border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 hover:border-brand-blue/30 disabled:opacity-40 disabled:pointer-events-none transition-all shadow-sm">
          <span class="hidden sm:inline">Next</span>
          <i data-lucide="chevron-right" class="w-4 h-4"></i>
        </button>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================= -->
<!-- 5. COMMERCIAL ADVERTISERS BANNER                                         -->
<!-- ========================================================================= -->
<section class="py-16 bg-brand-dark text-white relative overflow-hidden">
  <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-blue/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-brand-green/20 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
      <div class="lg:col-span-8 space-y-4">
        <div class="inline-flex items-center gap-2 bg-white/10 text-brand-green px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
          <i data-lucide="megaphone" class="w-3.5 h-3.5"></i>
          <span>OmeHub Commercial Advertising Network</span>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-white tracking-tight">
          List Your Logistics Services &amp; Reach Over <span class="text-brand-green">50,000 Shippers</span>
        </h2>
        <p class="text-sm text-gray-300 max-w-2xl leading-relaxed">
          &ldquo;The OmeHub Blog is more than a feature, it's your voice in the global trade community. Advertise your services, share your updates, and connect with partners worldwide &mdash; all from your dashboard.&rdquo;
        </p>
      </div>

      <div class="lg:col-span-4 text-center lg:text-right">
        <button type="button" onclick="openAdModal()" class="btn-primary py-3.5 px-8 text-sm font-bold shadow-xl shadow-brand-blue/50">
          <i data-lucide="plus-circle" class="w-4 h-4"></i>
          <span>Post an Advert Now</span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!-- 6. MODALS & SCRIPTS                                                       -->
<!-- ========================================================================= -->

<!-- Quick Promo Modal -->
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
        Feature in our top sliding marquee carousel, directory lists, and logistics briefings.
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
            <option value="directory-card">Sponsored Card in Directory Feed</option>
            <option value="bundle">Omnichannel Package (Marquee + Directory + Email)</option>
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
          <div class="text-[11px] text-gray-500">Includes verified partner badge, direct quote links, and analytics dashboard.</div>
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

<script>
// State
let currentFeedType = 'all';
let currentTopic = 'all';
let currentPage = 1;
let itemsPerPage = 6;
let filteredItems = [];

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

function filterFeed() {
  const searchQuery = (document.getElementById('directorySearchInput')?.value || '').toLowerCase().trim();
  const allItems = Array.from(document.querySelectorAll('.feed-item'));
  
  // Collect matching items
  filteredItems = allItems.filter(item => {
    const itemType = item.getAttribute('data-type');
    const itemTopic = item.getAttribute('data-topic');
    const keywords = (item.getAttribute('data-keywords') || '').toLowerCase();
    const textContent = item.innerText.toLowerCase();

    const matchesType = (currentFeedType === 'all') || (itemType === currentFeedType);
    const matchesTopic = (currentTopic === 'all') || (itemTopic === currentTopic);
    const matchesSearch = !searchQuery || keywords.includes(searchQuery) || textContent.includes(searchQuery);

    return matchesType && matchesTopic && matchesSearch;
  });

  // Reset to first page when filtering
  currentPage = 1;
  renderPage();
}

function renderPage() {
  const allItems = Array.from(document.querySelectorAll('.feed-item'));
  const total = filteredItems.length;
  const totalPages = Math.max(1, Math.ceil(total / itemsPerPage));

  // Ensure current page is valid
  if (currentPage > totalPages) currentPage = totalPages;
  if (currentPage < 1) currentPage = 1;

  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = Math.min(startIndex + itemsPerPage, total);

  // Hide all items first
  allItems.forEach(item => item.style.display = 'none');

  // Show only items for current page
  for (let i = startIndex; i < endIndex; i++) {
    if (filteredItems[i]) {
      filteredItems[i].style.display = 'flex';
    }
  }

  // Update Counters & Range
  const countEl = document.getElementById('visibleCardsCount');
  if (countEl) countEl.innerText = total;

  const rangeStart = document.getElementById('pageRangeStart');
  const rangeEnd = document.getElementById('pageRangeEnd');
  const pageTotal = document.getElementById('pageTotalCount');

  if (rangeStart) rangeStart.innerText = total === 0 ? 0 : startIndex + 1;
  if (rangeEnd) rangeEnd.innerText = endIndex;
  if (pageTotal) pageTotal.innerText = total;

  // Empty state toggle
  const emptyState = document.getElementById('emptyDirectoryState');
  const paginationContainer = document.getElementById('paginationContainer');

  if (emptyState) emptyState.classList.toggle('hidden', total > 0);
  if (paginationContainer) paginationContainer.classList.toggle('hidden', total === 0);

  // Render Page Pills
  renderPaginationPills(totalPages);

  // Update Prev / Next button states
  const prevBtn = document.getElementById('prevPageBtn');
  const nextBtn = document.getElementById('nextPageBtn');

  if (prevBtn) prevBtn.disabled = (currentPage === 1 || total === 0);
  if (nextBtn) nextBtn.disabled = (currentPage === totalPages || total === 0);

  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }
}

function renderPaginationPills(totalPages) {
  const container = document.getElementById('paginationPills');
  if (!container) return;

  let pillsHtml = '';

  for (let p = 1; p <= totalPages; p++) {
    const isActive = (p === currentPage);
    if (isActive) {
      pillsHtml += `
        <button type="button" class="w-9 h-9 rounded-xl text-xs font-bold bg-brand-blue text-white shadow-md shadow-brand-blue/30 flex items-center justify-center transition-all">
          ${p}
        </button>
      `;
    } else {
      pillsHtml += `
        <button type="button" onclick="changePage(${p})" class="w-9 h-9 rounded-xl text-xs font-semibold bg-white border border-gray-200 text-gray-700 hover:bg-gray-100 hover:border-brand-blue/30 flex items-center justify-center transition-all">
          ${p}
        </button>
      `;
    }
  }

  container.innerHTML = pillsHtml;
}

function changePage(page) {
  currentPage = page;
  renderPage();
  document.getElementById('directoryFeedSection')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function changeItemsPerPage(val) {
  itemsPerPage = parseInt(val) || 6;
  currentPage = 1;
  renderPage();
}

function setFeedType(type, btnElement) {
  currentFeedType = type;
  document.querySelectorAll('.feed-type-btn').forEach(btn => {
    btn.classList.remove('bg-brand-blue', 'text-white', 'shadow-sm', 'active-type');
    btn.classList.add('text-gray-700');
  });
  if (btnElement) {
    btnElement.classList.add('bg-brand-blue', 'text-white', 'shadow-sm', 'active-type');
    btnElement.classList.remove('text-gray-700');
  }
  filterFeed();
}

function filterByTopic(topic, btnElement) {
  currentTopic = topic;
  document.querySelectorAll('.topic-btn').forEach(btn => {
    btn.classList.remove('bg-brand-dark', 'text-white', 'font-bold', 'active-topic');
    btn.classList.add('bg-sand', 'text-gray-700', 'font-medium');
  });
  if (btnElement) {
    btnElement.classList.add('bg-brand-dark', 'text-white', 'font-bold', 'active-topic');
    btnElement.classList.remove('bg-sand', 'text-gray-700', 'font-medium');
  }
  filterFeed();
}

function resetDirectoryFilters() {
  document.getElementById('directorySearchInput').value = '';
  setFeedType('all', document.querySelector('.feed-type-btn'));
  filterByTopic('all', document.querySelector('.topic-btn'));
}

document.getElementById('directorySearchInput')?.addEventListener('input', filterFeed);

// Initialize on page load
window.addEventListener('DOMContentLoaded', () => {
  filterFeed();
});

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

// Close modals on escape key or backdrop click
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
