<!-- ========================================================================= -->
<!-- 1. SLIDING MARQUEE CAROUSEL (SPONSORED ADVERTS & PROMOTIONS)              -->
<!-- ========================================================================= -->
@props([
    'ads' => null
])
<div>
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

        @if ($ads->isNotEmpty())
          @php
            $accentColors = [
              'brand-blue', 'emerald-600', 'cyan-600', 'amber-500', 'violet-600',
              'rose-600', 'teal-600', 'orange-500', 'indigo-600', 'pink-600'
            ];
            $accentTexts = [
              'text-brand-green', 'text-emerald-400', 'text-cyan-300', 'text-amber-300', 'text-violet-300',
              'text-rose-300', 'text-teal-300', 'text-orange-300', 'text-indigo-300', 'text-pink-300'
            ];
          @endphp
          @foreach ($ads as $i => $ad)
            @php $color = $accentColors[$i % count($accentColors)]; $textColor = $accentTexts[$i % count($accentTexts)]; @endphp
            <div onclick="openPromoModal({{ $ad->id }})" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
              <div class="w-10 h-10 rounded-xl bg-{{ $color }} text-white flex items-center justify-center shrink-0 overflow-hidden">
                <img src="{{ asset('storage/'.$ad->file) }}" alt="{{ $ad->title }}" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<i data-lucide=\'megaphone\' class=\'w-5 h-5\'></i>';">
              </div>
              <div class="overflow-hidden flex-1">
                <div class="flex items-center justify-between">
                  <span class="text-[10px] font-bold {{ $textColor }} uppercase tracking-wider truncate max-w-[120px]">{{ $ad->title }}</span>
                  <span class="text-[10px] font-mono bg-white/10 px-1.5 rounded text-gray-300 shrink-0">{{ $ad->category }}</span>
                </div>
                <div class="text-xs font-bold text-white truncate">{{ strip_tags($ad->body) }}</div>
                <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
                  <span class="{{ $textColor }} font-bold">{{ $ad->category }}</span>
                  <span class="text-[10px] {{ $textColor }} underline">{{ $ad->cta }} &rarr;</span>
                </div>
              </div>
            </div>
          @endforeach

          <!-- CTA card inviting users to post their ad -->
          <div class="bg-gradient-to-r from-brand-blue/40 to-brand-green/30 border border-brand-green/40 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
            <div class="w-10 h-10 rounded-xl bg-brand-green text-brand-dark flex items-center justify-center shrink-0 font-extrabold">
              <i data-lucide="plus" class="w-5 h-5"></i>
            </div>
            <div class="overflow-hidden flex-1">
              <div class="text-[10px] font-bold text-brand-green uppercase tracking-wider">Your Advert Here</div>
              <div class="text-xs font-bold text-white truncate">Reach 50,000+ Cargo Owners</div>
              <div class="text-[11px] text-gray-200 flex items-center justify-between mt-0.5">
                <span>Featured in Marquee &amp; Sidebars</span>
                <span class="text-[10px] font-bold text-brand-green underline">
                    <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}"> Post Now &rarr;</a>
                </span>
              </div>
            </div>
          </div>

          {{-- Duplicate set for seamless infinite scroll --}}
          @foreach ($ads as $i => $ad)
            @php $color = $accentColors[$i % count($accentColors)]; $textColor = $accentTexts[$i % count($accentTexts)]; @endphp
            <div onclick="openPromoModal({{ $ad->id }})" class="bg-white/10 hover:bg-white/15 border border-white/15 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
              <div class="w-10 h-10 rounded-xl bg-{{ $color }} text-white flex items-center justify-center shrink-0 overflow-hidden">
                <img src="{{ asset('storage/'.$ad->file) }}" alt="{{ $ad->title }}" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<i data-lucide=\'megaphone\' class=\'w-5 h-5\'></i>';">
              </div>
              <div class="overflow-hidden flex-1">
                <div class="flex items-center justify-between">
                  <span class="text-[10px] font-bold {{ $textColor }} uppercase tracking-wider truncate max-w-[120px]">{{ $ad->title }}</span>
                  <span class="text-[10px] font-mono bg-white/10 px-1.5 rounded text-gray-300 shrink-0">{{ $ad->category }}</span>
                </div>
                <div class="text-xs font-bold text-white truncate">{{ strip_tags($ad->body) }}</div>
                <div class="text-[11px] text-gray-300 flex items-center justify-between mt-0.5">
                  <span class="{{ $textColor }} font-bold">{{ $ad->category }}</span>
                  <span class="text-[10px] {{ $textColor }} underline">{{ $ad->cta }} &rarr;</span>
                </div>
              </div>
            </div>
          @endforeach

          <div class="bg-gradient-to-r from-brand-blue/40 to-brand-green/30 border border-brand-green/40 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
            <div class="w-10 h-10 rounded-xl bg-brand-green text-brand-dark flex items-center justify-center shrink-0 font-extrabold">
              <i data-lucide="plus" class="w-5 h-5"></i>
            </div>
            <div class="overflow-hidden flex-1">
              <div class="text-[10px] font-bold text-brand-green uppercase tracking-wider">Your Advert Here</div>
              <div class="text-xs font-bold text-white truncate">Reach 50,000+ Cargo Owners</div>
              <div class="text-[11px] text-gray-200 flex items-center justify-between mt-0.5">
                <span>Featured in Marquee &amp; Sidebars</span>
                <span class="text-[10px] font-bold text-brand-green underline">
                    <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}"> Post Now &rarr;</a>
                </span>
              </div>
            </div>
          </div>
        @else
          {{-- Fallback if no ads exist yet --}}
          <div class="bg-gradient-to-r from-brand-blue/40 to-brand-green/30 border border-brand-green/40 rounded-2xl p-3.5 flex items-center gap-3 w-80 shrink-0 cursor-pointer transition-all hover:scale-[1.02] shadow-lg">
            <div class="w-10 h-10 rounded-xl bg-brand-green text-brand-dark flex items-center justify-center shrink-0">
              <i data-lucide="megaphone" class="w-5 h-5"></i>
            </div>
            <div class="overflow-hidden flex-1">
              <div class="text-[10px] font-bold text-brand-green uppercase tracking-wider">Be the First Advertiser</div>
              <div class="text-xs font-bold text-white truncate">Reach 50,000+ Cargo Owners</div>
              <div class="text-[11px] text-gray-200 mt-0.5">
                <span class="text-[10px] font-bold text-brand-green underline">
                    <a href="{{ route('user.bulletin.create', ['loc' => 'ad']) }}"> Post Now &rarr;</a>
                </span>
              </div>
            </div>
          </div>
        @endif

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

    <script>
        // State
        let currentFeedType = 'all';
        let currentTopic = 'all';
        let currentPage = 1;
        let itemsPerPage = 6;
        let filteredItems = [];

        const promoDatabase = {!! json_encode($ads->keyBy('id')->map(function($ad) {
        return [
            'id'      => $ad->id,
            'title'   => $ad->title,
            'body'    => $ad->body,
            'cta'     => $ad->cta,
            'url'     => $ad->url,
            'file'    => $ad->file,
            'category'=> $ad->category,
        ];
        })->toArray()) !!};

        function openPromoModal(key) {
        const promo = promoDatabase[key];
        if (!promo) return;

        const html = `
        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <span class="bg-brand-blue text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full uppercase">${promo.category}</span>
                <span class="text-xs font-bold text-brand-green bg-brand-green/10 px-2 py-0.5 rounded-full">Partner Offer</span>
            </div>
            ${promo.file ? `<div class="relative rounded-2xl overflow-hidden aspect-[16/9] bg-gray-100">
                <img src="{{ asset('storage') }}/${promo.file}" alt="${promo.title}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 via-transparent to-transparent"></div>
            </div>` : ''}
            <h3 class="font-heading font-bold text-xl text-brand-dark">${promo.title}</h3>
            <div class="text-xs font-bold text-brand-blue font-mono">${promo.category}</div>
            <p class="text-xs text-gray-600 leading-relaxed">${promo.body}</p>
            <div class="pt-3 border-t border-gray-100 flex items-center gap-3">
                <a href="${promo.url}" class="w-full btn-primary text-xs py-3 justify-center shadow-lg shadow-brand-blue/30 font-bold">
                <span>${promo.cta}</span>
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

        // Close modals on escape key or backdrop click
        window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closePromoModal();
        }
        });
        document.getElementById('promoDetailsModal')?.addEventListener('click', (e) => {
            if (e.target.id === 'promoDetailsModal') closePromoModal();
        });
    </script>
</div>
