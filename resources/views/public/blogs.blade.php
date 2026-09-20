@extends('public.layout.main')

@section('title', 'Blogs & Adverts Directory')
@section('content')

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
      <a href="{{ route('home') }}" class="hover:text-brand-blue transition-colors flex items-center gap-1">
        <i data-lucide="home" class="w-3.5 h-3.5"></i> Home
      </a>
      <span>/</span>
      <span class="text-brand-dark font-semibold">Blogs &amp; Adverts Directory</span>
    </nav>
    <div class="flex items-center gap-3">
      <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover bg-brand-blue/10 hover:bg-brand-blue/15 px-3.5 py-1.5 rounded-full transition-all">
        <i data-lucide="megaphone" class="w-3.5 h-3.5"></i>
        <span>Post an Advert</span>
      </a>
      <div class="h-4 w-px bg-gray-200 hidden sm:block"></div>
      <span class="text-gray-400 hidden sm:inline-flex items-center gap-1">
        <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
        Live Feed Updated
      </span>
    </div>
  </div>
</div>

<x-ad-marquee-carousel :ads="$ads" />

<!-- ========================================================================= -->
<!-- 2. HERO HEADER & COMMAND FILTER BAR                                       -->
<!-- ========================================================================= -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/40 pt-12 pb-14 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-30 pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-8">
      <div class="inline-flex items-center gap-2 bg-brand-blue/10 text-brand-blue px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
        <i data-lucide="newspaper" class="w-3.5 h-3.5"></i>
        <span>{{ config('app.name') }} Media &amp; Intelligence Hub</span>
      </div>

      <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-brand-dark tracking-tight leading-tight">
        Lists of <span class="text-brand-blue">Blogs</span> &amp; <span class="text-brand-green">Adverts</span>
      </h1>

      <p class="text-gray-600 text-base sm:text-lg leading-relaxed">
        Explore verified trade publications, freight forwarding intelligence, port updates, and discover commercial services from global logistics providers.
      </p>
    </div>

    <!-- Search & Filter Controls -->
    {{-- <div class="max-w-5xl mx-auto bg-white rounded-3xl p-4 shadow-xl shadow-brand-dark/5 border border-sand-border space-y-4">
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
    </div> --}}

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
          <a href="{{ route('public.blog', $posts[count($posts) - 1]->slug) }}" class="btn-primary text-xs sm:text-sm py-2.5 px-6 shadow-lg shadow-brand-blue/40">
            <span>Read Full Article &amp; Analysis</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <span class="text-xs text-gray-400">By <strong>{{ config('app.name') }}</strong></span>
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
          Latest Publications
        </h3>
        <p class="text-xs sm:text-sm text-gray-500 mt-1">
          Showing <span id="visibleCardsCount" class="font-bold text-brand-blue">{{ $posts->total() }}</span> verified articles and partner promotions
        </p>
      </div>

      {{-- <div class="flex items-center gap-3 text-xs text-gray-500">
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
      </div> --}}
    </div>

    @if ($posts->isNotEmpty())
        <!-- The Feed Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7" id="directoryGrid">
            @foreach ($posts as $post)
                <!-- ================= LIST ITEM 1: BLOG ================= -->
                <article class="feed-item bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group">
                <div>
                    <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                        <img src="{{ asset('storage/' . $post->file) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
                            {{ $post->category }}
                        </div>
                        <div class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded-md flex items-center gap-1">
                            <i data-lucide="clock" class="w-3 h-3 text-brand-green"></i> {{ rand(2, 6) }} min read
                        </div>
                    </div>
                    <div class="p-6 space-y-3">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <span>{{ $post->created_at->format('M d, Y') }}</span>
                        <span>&bull;</span>
                        <span>{{ $post->category }}</span>
                    </div>
                    <h4 class="font-heading font-bold text-lg text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
                        {{ $post->title }}
                    </h4>
                    <p class="text-xs text-gray-600 leading-relaxed line-clamp-3">
                        {{ strip_tags($post->title) }}
                    </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs">
                    <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-[10px]">{{ $post->user->initials() }}</div>
                    <span class="text-gray-700 font-semibold">{{ $post->user->name }}</span>
                    </div>
                    <a href="{{ route('public.blog', $post->slug) }}" class="text-brand-blue font-bold inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                    <span>Read Article</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
                </article>
            @endforeach
        </div>
    @else
        <!-- Empty Search State -->
        <div id="emptyDirectoryState" class="hidden text-center py-16 bg-white rounded-3xl border border-sand-border p-8 mt-6">
            <div class="w-12 h-12 rounded-2xl bg-gray-100 text-gray-400 flex items-center justify-center mx-auto mb-3">
                <i data-lucide="search-x" class="w-6 h-6"></i>
            </div>
            <h4 class="font-heading font-bold text-lg text-brand-dark mb-1">No matching articles found</h4>
            <p class="text-xs text-gray-500 max-w-sm mx-auto mb-4">Try clearing the search keywords or switching filters.</p>
            <button type="button" onclick="resetDirectoryFilters()" class="btn-primary text-xs py-2 px-4">
                <span>Reset Filters</span>
            </button>
        </div>
    @endif


    <!-- ========================================================================= -->
    <!-- PAGINATION UI CONTAINER                                                   -->
    <!-- ========================================================================= -->
    {{ $posts->links('vendor.pagination.default') }}

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
          <span>{{ config('app.name') }} Commercial Advertising Network</span>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-white tracking-tight">
          List Your Logistics Services &amp; Reach Over <span class="text-brand-green">50,000 Shippers</span>
        </h2>
        <p class="text-sm text-gray-300 max-w-2xl leading-relaxed">
          &ldquo;The {{ config('app.name') }} Blog is more than a feature, it's your voice in the global trade community. Advertise your services, share your updates, and connect with partners worldwide &mdash; all from your dashboard.&rdquo;
        </p>
      </div>

      <div class="lg:col-span-4 text-center lg:text-right">
        <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}" class="btn-primary py-3.5 px-8 text-sm font-bold shadow-xl shadow-brand-blue/50">
          <i data-lucide="plus-circle" class="w-4 h-4"></i>
          <span>Post an Advert Now</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Toast Notification -->
<div id="toastNotification" class="fixed bottom-6 left-1/2 -translate-x-1/2 z-[10000] hidden bg-brand-dark text-white text-xs font-bold px-4 py-2.5 rounded-full shadow-2xl items-center gap-2 transition-all">
  <i data-lucide="check-circle" class="w-4 h-4 text-brand-green"></i>
  <span id="toastMessage">Success</span>
</div>

<script>

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

</script>

@endsection
