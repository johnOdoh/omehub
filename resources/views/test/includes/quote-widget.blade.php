<!-- Quick Freight Rate & Tracking Card Widget -->
<div class="bg-white rounded-2xl shadow-xl shadow-brand-dark/5 border border-gray-100 p-2 sm:p-3 relative z-20 backdrop-blur-md">
  
  <!-- Tabs Header -->
  <div class="flex items-center gap-1 border-b border-gray-100 p-1 mb-3">
    <button type="button" id="tabRateBtn" class="flex items-center gap-2 px-4 py-2 text-xs sm:text-sm font-bold rounded-xl transition-all bg-brand-blue text-white shadow-sm" onclick="switchWidgetTab('rate')">
      <i data-lucide="calculator" class="w-4 h-4"></i>
      <span>Instant Rate Estimator</span>
    </button>
    <button type="button" id="tabTrackBtn" class="flex items-center gap-2 px-4 py-2 text-xs sm:text-sm font-bold text-gray-500 hover:text-brand-dark rounded-xl transition-all" onclick="switchWidgetTab('track')">
      <i data-lucide="map-pin" class="w-4 h-4"></i>
      <span>Live Shipment Radar</span>
    </button>
  </div>

  <!-- Tab 1: Instant Rate Calculator -->
  <div id="rateTabContent" class="p-3 sm:p-4">
    <form id="heroQuoteForm" onsubmit="event.preventDefault(); handleQuickQuote();" class="space-y-4">
      
      <!-- Freight Mode Selector Buttons -->
      <div class="grid grid-cols-3 gap-2">
        <label class="cursor-pointer">
          <input type="radio" name="quick_mode" value="ocean" checked class="peer sr-only" onchange="updateModeDetails('ocean')">
          <div class="flex items-center justify-center gap-2 py-2 px-3 rounded-xl border border-gray-200 peer-checked:border-brand-blue peer-checked:bg-brand-blue-light/50 peer-checked:text-brand-blue text-xs font-bold text-gray-600 transition-all hover:bg-gray-50">
            <i data-lucide="ship" class="w-3.5 h-3.5"></i>
            <span>Ocean FCL/LCL</span>
          </div>
        </label>

        <label class="cursor-pointer">
          <input type="radio" name="quick_mode" value="air" class="peer sr-only" onchange="updateModeDetails('air')">
          <div class="flex items-center justify-center gap-2 py-2 px-3 rounded-xl border border-gray-200 peer-checked:border-brand-blue peer-checked:bg-brand-blue-light/50 peer-checked:text-brand-blue text-xs font-bold text-gray-600 transition-all hover:bg-gray-50">
            <i data-lucide="plane" class="w-3.5 h-3.5"></i>
            <span>Air Freight</span>
          </div>
        </label>

        <label class="cursor-pointer">
          <input type="radio" name="quick_mode" value="rail" class="peer sr-only" onchange="updateModeDetails('rail')">
          <div class="flex items-center justify-center gap-2 py-2 px-3 rounded-xl border border-gray-200 peer-checked:border-brand-blue peer-checked:bg-brand-blue-light/50 peer-checked:text-brand-blue text-xs font-bold text-gray-600 transition-all hover:bg-gray-50">
            <i data-lucide="train" class="w-3.5 h-3.5"></i>
            <span>Rail & Road</span>
          </div>
        </label>
      </div>

      <!-- Origin & Destination Inputs -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div class="relative">
          <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1">Origin Port / City</label>
          <div class="relative">
            <i data-lucide="anchor" class="w-4 h-4 text-gray-400 absolute left-3 top-3"></i>
            <select id="quickOrigin" class="w-full bg-sand/60 border border-gray-200 rounded-xl pl-9 pr-3 py-2.5 text-xs sm:text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue focus:bg-white transition-all">
              <option value="CNSHA" selected>Shanghai, China (CNSHA)</option>
              <option value="NGLOS">Lagos, Nigeria (NGLOS)</option>
              <option value="USNYC">New York, USA (USNYC)</option>
              <option value="GBFXT">London / Felixstowe, UK (GBFXT)</option>
              <option value="CNNGB">Ningbo, China (CNNGB)</option>
              <option value="HKHKG">Hong Kong (HKHKG)</option>
              <option value="SGSIN">Singapore (SGSIN)</option>
              <option value="VNSGN">Ho Chi Minh, Vietnam (VNSGN)</option>
              <option value="DEHAM">Hamburg, Germany (DEHAM)</option>
              <option value="NLRTM">Rotterdam, Netherlands (NLRTM)</option>
              <option value="USLAX">Los Angeles, USA (USLAX)</option>
              <option value="AEDXB">Dubai, UAE (AEDXB)</option>
            </select>
          </div>
        </div>

        <div class="relative">
          <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1">Destination Port / City</label>
          <div class="relative">
            <i data-lucide="navigation" class="w-4 h-4 text-gray-400 absolute left-3 top-3"></i>
            <select id="quickDestination" class="w-full bg-sand/60 border border-gray-200 rounded-xl pl-9 pr-3 py-2.5 text-xs sm:text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue focus:bg-white transition-all">
              <option value="NGLOS" selected>Lagos, Nigeria (NGLOS)</option>
              <option value="USNYC">New York, USA (USNYC)</option>
              <option value="GBFXT">London / Felixstowe, UK (GBFXT)</option>
              <option value="NLRTM">Rotterdam, Netherlands (NLRTM)</option>
              <option value="DEHAM">Hamburg, Germany (DEHAM)</option>
              <option value="BEANR">Antwerp, Belgium (BEANR)</option>
              <option value="USLAX">Los Angeles, USA (USLAX)</option>
              <option value="AEDXB">Dubai, UAE (AEDXB)</option>
              <option value="SGSIN">Singapore (SGSIN)</option>
              <option value="CNSHA">Shanghai, China (CNSHA)</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Cargo Type & Load Size -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 items-end">
        <div>
          <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1">Container / Unit</label>
          <select id="quickCargoType" class="w-full bg-sand/60 border border-gray-200 rounded-xl px-3 py-2.5 text-xs sm:text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue focus:bg-white transition-all">
            <option value="40hc">40' High Cube Container</option>
            <option value="20gp">20' Standard Dry (FCL)</option>
            <option value="40gp">40' Standard Dry (FCL)</option>
            <option value="lcl">LCL (Per CBM)</option>
          </select>
        </div>

        <div>
          <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1">Quantity</label>
          <div class="flex items-center">
            <input type="number" id="quickQuantity" value="1" min="1" max="50" class="w-full bg-sand/60 border border-gray-200 rounded-xl px-3 py-2.5 text-xs sm:text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue focus:bg-white transition-all">
          </div>
        </div>

        <div>
          <button type="submit" class="w-full btn-primary py-2.5 px-4 text-xs sm:text-sm font-bold shadow-md shadow-brand-blue/20">
            <span>Calculate Rate</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
        </div>
      </div>

    </form>

    <!-- Quick Estimate Result Display (Dynamic) -->
    <div id="quickResultBox" class="hidden mt-4 pt-3 border-t border-dashed border-gray-200 transition-all duration-300">
      <div class="bg-brand-blue-light/60 rounded-xl p-3.5 border border-brand-blue/20 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-lg bg-brand-blue text-white flex items-center justify-center">
            <i data-lucide="check-circle" class="w-5 h-5"></i>
          </div>
          <div>
            <div class="text-xs font-bold text-gray-500 uppercase tracking-wider">Estimated Spot Rate</div>
            <div class="text-xl font-heading font-extrabold text-brand-dark" id="displayEstimateRate">$2,480 - $2,720 USD</div>
            <div class="text-[11px] text-gray-600" id="displayTransitTime">Est. Transit: 24-28 days • Direct Sea Route</div>
          </div>
        </div>
        <div class="flex items-center gap-2 w-full sm:w-auto">
          <a href="{{ route('public.quote') }}" id="fullQuoteBtn" class="w-full sm:w-auto btn-primary text-xs py-2 px-3.5 shadow-none">
            Lock Rate & Book
          </a>
        </div>
      </div>
    </div>

  </div>

  <!-- Tab 2: Live Tracking Radar -->
  <div id="trackTabContent" class="hidden p-3 sm:p-4">
    <form onsubmit="event.preventDefault(); handleHeroTracking();" class="space-y-4">
      <div>
        <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1">Shipment Tracking Number / B/L / Container No.</label>
        <div class="flex gap-2">
          <div class="relative flex-1">
            <i data-lucide="package" class="w-4 h-4 text-gray-400 absolute left-3 top-3.5"></i>
            <input type="text" id="heroTrackingInput" value="OME-884920" placeholder="e.g. OME-884920, MSCU938102, HLCU981023" class="w-full bg-sand/60 border border-gray-200 rounded-xl pl-9 pr-4 py-2.5 text-xs sm:text-sm font-semibold uppercase text-brand-dark focus:outline-none focus:border-brand-blue focus:bg-white transition-all font-mono">
          </div>
          <button type="submit" class="btn-primary px-5 text-xs sm:text-sm font-bold shadow-md shadow-brand-blue/20">
            <span>Track</span>
            <i data-lucide="search" class="w-4 h-4"></i>
          </button>
        </div>
      </div>
      
      <!-- Sample Quick Tracking Chips -->
      <div class="flex items-center gap-2 pt-1 flex-wrap">
        <span class="text-[11px] text-gray-500 font-bold">Try Sample Tracking:</span>
        <button type="button" onclick="setTrackingDemo('OME-884920')" class="text-xs bg-gray-100 hover:bg-brand-blue-light hover:text-brand-blue text-gray-700 font-mono px-2 py-0.5 rounded border border-gray-200">
          OME-884920 (In-Transit)
        </button>
        <button type="button" onclick="setTrackingDemo('OME-392011')" class="text-xs bg-gray-100 hover:bg-brand-blue-light hover:text-brand-blue text-gray-700 font-mono px-2 py-0.5 rounded border border-gray-200">
          OME-392011 (Customs Cleared)
        </button>
      </div>

    </form>
  </div>

</div>
