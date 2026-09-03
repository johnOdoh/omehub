<!-- Cookie Consent Alert Banner & Preferences Modal -->
<div id="cookieConsentBanner" 
     class="fixed bottom-4 left-4 right-4 md:left-6 md:right-auto md:max-w-md z-50 transform translate-y-24 opacity-0 pointer-events-none transition-all duration-500 ease-out"
     role="region"
     aria-label="Cookie consent">
  <div class="bg-brand-dark/95 backdrop-blur-xl border border-white/15 text-white shadow-2xl rounded-3xl p-6 relative overflow-hidden">
    
    <!-- Ambient glow inside card -->
    <div class="absolute -right-12 -bottom-12 w-36 h-36 bg-brand-blue/20 rounded-full blur-2xl pointer-events-none"></div>
    <div class="absolute -left-12 -top-12 w-36 h-36 bg-brand-green/10 rounded-full blur-2xl pointer-events-none"></div>

    <div class="relative z-10 space-y-4">
      
      <!-- Header with Icon & Compliance Badge -->
      <div class="flex items-center justify-between gap-3">
        <div class="flex items-center gap-2.5">
          <div class="w-9 h-9 rounded-xl bg-brand-blue/20 text-brand-blue flex items-center justify-center flex-shrink-0">
            <i data-lucide="cookie" class="w-5 h-5 text-cyan-400"></i>
          </div>
          <div>
            <h4 class="font-heading font-bold text-sm text-white leading-tight">Cookie &amp; Privacy Notice</h4>
            <span class="text-[10px] text-brand-green font-semibold">NDPC &bull; Ultra-High Level Compliant</span>
          </div>
        </div>
        <button type="button" onclick="dismissCookieBanner(false)" class="text-gray-400 hover:text-white p-1 transition-colors" aria-label="Dismiss cookie notice">
          <i data-lucide="x" class="w-4 h-4"></i>
        </button>
      </div>

      <!-- Description Text -->
      <p class="text-xs text-gray-300 leading-relaxed">
        We use cookies to optimize freight calculations, secure live vessel radar telemetry, and personalize your international trade experience.
      </p>

      <!-- Action Buttons -->
      <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2 pt-1">
        <button type="button" 
                onclick="acceptAllCookies()" 
                class="flex-1 btn-primary text-xs py-2.5 px-4 font-bold shadow-md shadow-brand-blue/30 justify-center">
          <span>Accept All</span>
        </button>

        <button type="button" 
                onclick="acceptEssentialCookies()" 
                class="flex-1 bg-white/10 hover:bg-white/20 text-white rounded-full text-xs font-semibold py-2.5 px-4 transition-all text-center">
          <span>Essential Only</span>
        </button>
      </div>

      <!-- Footer Preferences Link -->
      <div class="flex items-center justify-between text-[11px] text-gray-400 pt-1 border-t border-white/10">
        <button type="button" onclick="openCookiePreferencesModal()" class="text-gray-300 hover:text-white underline inline-flex items-center gap-1 transition-colors">
          <i data-lucide="sliders-horizontal" class="w-3 h-3 text-cyan-400"></i>
          <span>Customize Preferences</span>
        </button>
        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/about.php#locations" class="text-gray-400 hover:text-gray-200">
          Privacy Policy &rarr;
        </a>
      </div>

    </div>
  </div>
</div>

<!-- Cookie Preferences Modal -->
<div id="cookiePreferencesModal" 
     class="fixed inset-0 z-50 bg-brand-dark/80 backdrop-blur-md hidden items-center justify-center p-4 transition-all duration-300"
     role="dialog"
     aria-modal="true"
     aria-labelledby="cookieModalTitle">
  
  <div class="bg-white text-brand-dark w-full max-w-lg rounded-3xl shadow-2xl border border-sand-border overflow-hidden transform scale-95 transition-transform duration-300">
    
    <!-- Modal Header -->
    <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-sand-light">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-2xl bg-brand-blue/10 text-brand-blue flex items-center justify-center">
          <i data-lucide="shield-check" class="w-5 h-5"></i>
        </div>
        <div>
          <h3 id="cookieModalTitle" class="font-heading font-bold text-lg text-brand-dark">Cookie &amp; Privacy Preferences</h3>
          <p class="text-xs text-gray-500">Manage how OmeHub stores and processes your data.</p>
        </div>
      </div>
      <button type="button" onclick="closeCookiePreferencesModal()" class="text-gray-400 hover:text-brand-dark p-2 rounded-xl hover:bg-gray-100 transition-colors" aria-label="Close preferences modal">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>

    <!-- Modal Body: Cookie Categories -->
    <div class="p-6 space-y-4 max-h-[60vh] overflow-y-auto">
      
      <!-- Category 1: Strictly Necessary (Always Active) -->
      <div class="p-4 rounded-2xl bg-sand-light border border-sand-border space-y-2">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-2">
            <h4 class="font-heading font-bold text-sm text-brand-dark">Strictly Necessary Cookies</h4>
            <span class="text-[10px] font-bold text-brand-blue bg-brand-blue-light px-2 py-0.5 rounded-full">Always Active</span>
          </div>
          <input type="checkbox" checked disabled class="w-4 h-4 text-brand-blue rounded cursor-not-allowed opacity-80">
        </div>
        <p class="text-xs text-gray-600 leading-relaxed">
          Required for secure authentication, anti-fraud protection, freight calculator sessions, and NDPC compliance verification. These cannot be switched off.
        </p>
      </div>

      <!-- Category 2: Performance & Analytics -->
      <div class="p-4 rounded-2xl bg-white border border-gray-200 hover:border-brand-blue/30 transition-colors space-y-2">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-2">
            <h4 class="font-heading font-bold text-sm text-brand-dark">Analytics &amp; Route Telemetry</h4>
            <span class="text-[10px] font-bold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Recommended</span>
          </div>
          <label class="relative inline-flex items-center cursor-pointer">
            <input type="checkbox" id="cookieAnalyticsToggle" checked class="sr-only peer">
            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-brand-blue"></div>
          </label>
        </div>
        <p class="text-xs text-gray-600 leading-relaxed">
          Allows us to measure port telemetry speed, spot-rate calculator latency, and optimize user experience across 100+ countries.
        </p>
      </div>

      <!-- Category 3: Personalization & Trade Bulletin -->
      <div class="p-4 rounded-2xl bg-white border border-gray-200 hover:border-brand-blue/30 transition-colors space-y-2">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-2">
            <h4 class="font-heading font-bold text-sm text-brand-dark">Personalization &amp; Bulletin Alerts</h4>
          </div>
          <label class="relative inline-flex items-center cursor-pointer">
            <input type="checkbox" id="cookieMarketingToggle" checked class="sr-only peer">
            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-brand-blue"></div>
          </label>
        </div>
        <p class="text-xs text-gray-600 leading-relaxed">
          Remembers your recent trade routes (e.g., Nigeria, UK, New York) and delivers relevant freight market updates and community bulletin posts.
        </p>
      </div>

    </div>

    <!-- Modal Footer -->
    <div class="p-6 bg-sand-light border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-3">
      <button type="button" 
              onclick="acceptAllCookies()" 
              class="w-full sm:w-auto text-xs font-bold text-brand-blue hover:underline py-2">
        Accept All Cookies
      </button>

      <div class="flex items-center gap-2 w-full sm:w-auto">
        <button type="button" 
                onclick="closeCookiePreferencesModal()" 
                class="flex-1 sm:flex-initial btn-outlined text-xs py-2.5 px-4 font-semibold">
          Cancel
        </button>
        <button type="button" 
                onclick="saveCustomCookiePreferences()" 
                class="flex-1 sm:flex-initial btn-primary text-xs py-2.5 px-5 font-bold shadow-md shadow-brand-blue/25">
          Save Preferences
        </button>
      </div>
    </div>

  </div>
</div>
