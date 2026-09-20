@extends('public.layout.public')

@section('title', $post->title)
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
      <a href="{{ route('public.index') }}" class="hover:text-brand-blue transition-colors flex items-center gap-1">
        <i data-lucide="home" class="w-3.5 h-3.5"></i> Home
      </a>
      <span>/</span>
      <a href="{{ route('public.blogs') }}" class="text-brand-dark hover:text-brand-blue font-semibold transition-colors">
        Blogs &amp; Adverts
      </a>
      <span>/</span>
      <span id="breadcrumbCurrentArticle" class="text-brand-blue font-bold truncate max-w-xs sm:max-w-md">{{ $post->title }}</span>
    </nav>
    <div class="flex items-center gap-3">
      <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue hover:text-brand-blue-hover bg-brand-blue/10 hover:bg-brand-blue/15 px-3 py-1.5 rounded-full transition-all">
        <i data-lucide="megaphone" class="w-3.5 h-3.5"></i>
        <span>Place an Advert</span>
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
          <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}" class="text-[11px] text-brand-blue hover:underline font-bold">
            Post Ad +
          </a>
        </div>

        <!-- ADVERT 1: High-Impact Carrier Vessel Slot Offer -->
        {{-- <div class="group bg-gradient-to-br from-brand-blue-light via-white to-blue-50/50 rounded-3xl p-5 border-2 border-brand-blue/25 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden">
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

          <a href="{{ route('public.quote') }}?promo=ATLANTIC26" class="w-full btn-primary text-xs py-2.5 justify-center shadow-md shadow-brand-blue/20">
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

          <a href="{{ route('public.contact') }}?inquiry=EuroCold-Ad" class="w-full btn-primary text-xs py-2.5 justify-center bg-emerald-600 hover:bg-emerald-700 shadow-md shadow-emerald-600/20">
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
          <a href="{{ route('public.quote') }}?inquiry=MarineInsurance" class="inline-flex items-center gap-1.5 text-xs font-bold text-cyan-700 hover:text-cyan-900 underline">
            <span>Calculate insurance premium &rarr;</span>
          </a>
        </div> --}}

        <!-- ADVERT 4: "Advertise Your Logistics Business Here" Promo Callout -->
        <div class="bg-brand-dark text-white rounded-3xl p-6 border border-white/10 shadow-xl relative overflow-hidden text-center space-y-3">
          <div class="w-11 h-11 rounded-2xl bg-brand-green/20 text-brand-green flex items-center justify-center mx-auto">
            <i data-lucide="megaphone" class="w-5 h-5"></i>
          </div>
          <div>
            <h4 class="font-heading font-bold text-base text-white">Advertise on {{ config('app.name') }}</h4>
            <p class="text-xs text-gray-300 mt-1 leading-relaxed">
              Target 50,000+ verified enterprise cargo owners, freight forwarders, and logistics directors across global corridors.
            </p>
          </div>
          <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}" class="w-full btn-primary text-xs py-2.5 font-bold justify-center shadow-lg shadow-brand-blue/30">
            <i data-lucide="plus-circle" class="w-4 h-4"></i>
            <span>Submit Your Advert</span>
          </a>
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

          <a href="{{ route('public.quote') }}" class="block text-center text-xs font-bold text-brand-blue hover:underline pt-1">
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
                {{ $post->category }}
              </span>
            </div>

            <!-- Social Share Bar & Estimated Reading Time -->
            <div class="flex items-center gap-2 text-xs text-gray-500">
              <span id="articleReadTime" class="flex items-center gap-1 font-semibold">
                <i data-lucide="clock" class="w-3.5 h-3.5 text-brand-green"></i> {{ rand(2, 6) }} min read
              </span>
              <span>&bull;</span>
              <span id="articleDate">{{ $post->created_at->format('M d, Y') }}</span>
            </div>
          </div>

          <!-- Main Headline -->
          <h1 id="articleTitle" class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-brand-dark tracking-tight leading-tight">
            {{ $post->title }}
          </h1>

          <!-- Author Bio Bar -->
          <div class="flex flex-wrap items-center justify-between gap-4 py-4 border-y border-gray-100">
            <div class="flex items-center gap-3">
              <div id="authorAvatar" class="w-11 h-11 rounded-2xl bg-brand-blue text-white font-bold flex items-center justify-center text-sm shadow-md shadow-brand-blue/30">
                {{ $post->user->initials() }}
              </div>
              <div>
                <div id="authorName" class="font-heading font-bold text-sm text-brand-dark">{{ $post->user->name }}</div>
                {{-- <div id="authorRole" class="text-xs text-gray-500">Head of Supply Chain Intelligence &bull; {{ config('app.name') }} Research</div> --}}
              </div>
            </div>

            <!-- Share Buttons -->
            <div class="flex items-center gap-2">
              <span class="text-xs text-gray-400 font-medium mr-1 hidden sm:inline">Share:</span>
              <button type="button" onclick="shareArticle('linkedin')" class="p-2 rounded-xl bg-sand-light hover:bg-brand-blue hover:text-white text-gray-600 border border-gray-200 transition-colors" title="Share on LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.049c.476-.9 1.637-1.852 3.37-1.852 3.601 0 4.263 2.37 4.263 5.455v6.288zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM6.994 20.452H3.675V9h3.319v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.226.792 24 1.771 24h20.451C23.2 24 24 23.226 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
                </svg>
              </button>
              <button type="button" onclick="shareArticle('twitter')" class="p-2 rounded-xl bg-sand-light hover:bg-brand-blue hover:text-white text-gray-600 border border-gray-200 transition-colors" title="Share on Twitter / X">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24" fill="currentColor" class="w-6 h-6">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0022.4.36a9.1 9.1 0 01-2.88 1.1  4.52 4.52 0 00-7.7 4.12A12.8 12.8 0 013 2.1a4.52 4.52 0 001.4 6.04A4.48 4.48 0 012 7.1v.06a4.52 4.52 0 003.63 4.43 4.52 4.52 0 01-2.05.08 4.52 4.52 0 004.22 3.14A9.05 9.05 0 012 19.54 12.8 12.8 0 008.29 21c7.55 0 11.68-6.26.68-11.68 0-.18-.01-.35-.02-.53A8.36 8.36 0 0023 3z"/>
                </svg>
              </button>
              <button type="button" onclick="shareArticle('facebook')" class="p-2 rounded-xl bg-sand-light hover:bg-brand-blue hover:text-white text-gray-600 border border-gray-200 transition-colors" title="Share on Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24h-1.918c-1.505 0-1.797.716-1.797 1.767v2.317h3.59l-.467 3.622h-3.123V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z"/>
                </svg>
              </button>
              <button type="button" onclick="copyArticleLink()" class="p-2 rounded-xl bg-sand-light hover:bg-brand-green hover:text-brand-dark text-gray-600 border border-gray-200 transition-colors" title="Copy Article Link">
                <i data-lucide="link" class="w-4 h-4"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Featured Article Hero Media Banner -->
        <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[16/9] bg-brand-dark group">
          <img id="articleFeaturedImg" src="{{ asset('storage/'.$post->file) }}"
            alt="{{ $post->title }}" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/70 via-transparent to-transparent"></div>
        </div>

        <!-- Full Formatted Article Body -->
        <div id="articleBodyContent" class="space-y-6 text-gray-700 text-base leading-relaxed">
          {!! $post->body !!}
        </div>

        <!-- Article Footer Tags & Feedback -->
        <div class="pt-6 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
          <div class="flex items-center gap-2">
            <span class="font-bold text-gray-500">Tags:</span>
            @foreach (explode(', ', $post->tags) as $tag)
                <span class="bg-gray-100 text-gray-700 px-2.5 py-1 rounded-lg">{{ $tag }}</span>
            @endforeach
          </div>

          {{-- <div class="flex items-center gap-3 text-gray-500">
            <span>Was this article helpful?</span>
            <button type="button" onclick="handleReaction('like')" class="flex items-center gap-1 font-bold text-brand-blue hover:text-brand-blue-hover px-2.5 py-1 rounded-lg bg-sand transition-colors">
              <i data-lucide="thumbs-up" class="w-3.5 h-3.5"></i>
              <span id="reactionCount">142</span>
            </button>
          </div> --}}
        </div>

        <div class="mt-5">
            <div id="disqus_thread"></div>
            <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://omehub.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>

      </main>

    </div>
  </div>
</section>
@if ($posts->isNotEmpty())
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
      <a href="{{ route('public.blogs') }}" class="btn-outlined text-xs py-2 px-4">
        <span>Browse All Topics</span>
      </a>
    </div>

    <!-- Related Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <!-- Related Card 1 -->
      @foreach ($posts as $_post)
        <article class="feed-item bg-white rounded-3xl border border-sand-border shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group">
            <div>
                <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                    <img src="{{ asset('storage/' . $_post->file) }}" alt="{{ $_post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase">
                        {{ $_post->category }}
                    </div>
                    <div class="absolute bottom-3 right-3 bg-black/60 text-white text-[10px] px-2 py-0.5 rounded-md flex items-center gap-1">
                        <i data-lucide="clock" class="w-3 h-3 text-brand-green"></i> {{ rand(2, 6) }} min read
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <span>{{ $_post->created_at->format('M d, Y') }}</span>
                        <span>&bull;</span>
                        <span>{{ $_post->category }}</span>
                    </div>
                    <h4 class="font-heading font-bold text-lg text-brand-dark group-hover:text-brand-blue transition-colors leading-snug">
                        {{ $_post->title }}
                    </h4>
                    <p class="text-xs text-gray-600 leading-relaxed line-clamp-3">
                        {{ strip_tags($_post->title) }}
                    </p>
                </div>
            </div>
            <div class="px-6 pb-6 pt-2 border-t border-gray-100 flex items-center justify-between text-xs">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-[10px]">{{ $_post->user->initials() }}</div>
                    <span class="text-gray-700 font-semibold">{{ $_post->user->name }}</span>
                </div>
                <a href="{{ route('public.blog', $_post->slug) }}" class="text-brand-blue font-bold inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                    <span>Read Article</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </article>
      @endforeach

    </div>

  </div>
</section>
@endif
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
          Showcase Your Fleet, Warehousing &amp; Routes on {{ config('app.name') }}
        </h2>
        <p class="text-sm text-gray-300 max-w-2xl leading-relaxed">
          &ldquo;The {{ config('app.name') }} Blog is more than a feature, it's your voice in the global trade community. Advertise your services, share your updates, and connect with partners worldwide &mdash; all from your dashboard.&rdquo;
        </p>
        <div class="flex flex-wrap items-center gap-6 pt-2 text-xs font-mono text-gray-300">
          <div><strong class="text-brand-green text-lg">50K+</strong> Active Cargo Owners</div>
          <div><strong class="text-white text-lg">120+</strong> Ports Reached</div>
          <div><strong class="text-brand-blue text-lg">8.4%</strong> Average Advert CTR</div>
        </div>
      </div>

      <div class="lg:col-span-4 text-center sm:text-right">
        <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}" class="w-full sm:w-auto btn-primary py-3.5 px-8 text-sm font-bold shadow-xl shadow-brand-blue/40">
          <span>Book an Advert Slot</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
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

<!-- Full Script for Dynamic Article Switching and Advert Modals -->
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

function shareArticle(platform) {
  const url = window.location.href;
  if (platform === 'linkedin') {
    window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`, '_blank');
  } else if (platform === 'twitter') {
    window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent('Read this briefing on {{ config('app.name') }} Blogs & Adverts')}`, '_blank');
  } else if (platform === 'facebook') {
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
  }
}

function copyArticleLink() {
  navigator.clipboard.writeText(window.location.href).then(() => {
    showToast('Article link copied to clipboard!');
  }).catch(() => {
    showToast('Link copied!');
  });
}

</script>

@endsection
