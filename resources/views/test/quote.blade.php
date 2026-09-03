@extends('public.layout.public')

@section('title', 'Instant Freight Quote Calculation | OmeHub Global Trade Platform')
@section('content')

<!-- Quote Tool Header -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/40 py-16 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
  
  <!-- Subtle Freight Container Backdrop -->
  <div class="absolute right-0 top-0 w-full lg:w-1/3 h-full opacity-10 pointer-events-none overflow-hidden">
    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1000&q=80" alt="Freight Container Cargo" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/70 to-transparent"></div>
  </div>

  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4 relative z-10">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue/10 text-brand-blue text-xs font-bold uppercase tracking-wider">
      <i data-lucide="zap" class="w-3.5 h-3.5"></i>
      <span>Real-Time Spot & Contract Rates</span>
    </div>
    
    <h1 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-brand-dark tracking-tight">
      Instant Multi-Modal <span class="text-brand-blue">Freight Calculator</span>
    </h1>
    <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto">
      Calculate guaranteed spot and contracted rates with zero hidden port surcharges. Compare ocean, air, and rail transit times in seconds.
    </p>

    <!-- Trust Badges -->
    <div class="flex items-center justify-center gap-6 pt-2 text-xs text-gray-500 flex-wrap">
      <span class="flex items-center gap-1.5 font-semibold text-gray-700">
        <i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> Direct Liner Contract Rates
      </span>
      <span class="flex items-center gap-1.5 font-semibold text-gray-700">
        <i data-lucide="check" class="w-4 h-4 text-brand-green"></i> 100% Guaranteed Space
      </span>
      <span class="flex items-center gap-1.5 font-semibold text-gray-700">
        <i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> All-In Port Fees Included
      </span>
    </div>
  </div>
</section>

<!-- Interactive Multi-Step Quote Engine -->
<section class="py-16 bg-white min-h-[600px]">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="card-sand p-6 sm:p-10 rounded-3xl border border-sand-border shadow-lg">
      
      <form id="fullQuoteForm" onsubmit="event.preventDefault(); calculateFullQuote();" class="space-y-8">
        
        <!-- Step 1: Mode Selection -->
        <div>
          <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-3">1. Select Freight Mode</label>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
            <label class="cursor-pointer">
              <input type="radio" name="full_mode" value="ocean" checked class="peer sr-only" onchange="switchFullMode('ocean')">
              <div class="p-4 rounded-2xl border-2 border-gray-200 peer-checked:border-brand-blue peer-checked:bg-brand-blue-light/50 text-gray-700 peer-checked:text-brand-blue transition-all flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm">
                  <i data-lucide="ship" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="font-bold text-sm">Ocean Freight</div>
                  <div class="text-xs text-gray-500">FCL & LCL Consolidation</div>
                </div>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="full_mode" value="air" class="peer sr-only" onchange="switchFullMode('air')">
              <div class="p-4 rounded-2xl border-2 border-gray-200 peer-checked:border-brand-blue peer-checked:bg-brand-blue-light/50 text-gray-700 peer-checked:text-brand-blue transition-all flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm">
                  <i data-lucide="plane" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="font-bold text-sm">Air Freight</div>
                  <div class="text-xs text-gray-500">Priority & Standard</div>
                </div>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="full_mode" value="rail" class="peer sr-only" onchange="switchFullMode('rail')">
              <div class="p-4 rounded-2xl border-2 border-gray-200 peer-checked:border-brand-blue peer-checked:bg-brand-blue-light/50 text-gray-700 peer-checked:text-brand-blue transition-all flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm">
                  <i data-lucide="train" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="font-bold text-sm">Rail & Road</div>
                  <div class="text-xs text-gray-500">Intermodal FTL/LTL</div>
                </div>
              </div>
            </label>
          </div>
        </div>

        <!-- Step 2: Route Selection -->
        <div>
          <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-3">2. Trade Corridor (Origin & Destination)</label>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-gray-600 mb-1">Origin Port / Terminal</label>
              <select id="fullOrigin" class="w-full bg-white border border-gray-200 rounded-xl p-3 text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue">
                <option value="CNSHA" selected>Shanghai, China (CNSHA)</option>
                <option value="NGLOS">Lagos, Nigeria (NGLOS)</option>
                <option value="USNYC">New York, USA (USNYC)</option>
                <option value="GBFXT">London / Felixstowe, UK (GBFXT)</option>
                <option value="CNNGB">Ningbo, China (CNNGB)</option>
                <option value="CNSZX">Shenzhen / Yantian, China (CNSZX)</option>
                <option value="SGSIN">Singapore Port (SGSIN)</option>
                <option value="HKHKG">Hong Kong (HKHKG)</option>
                <option value="VNSGN">Ho Chi Minh City, Vietnam (VNSGN)</option>
                <option value="DEHAM">Hamburg, Germany (DEHAM)</option>
                <option value="NLRTM">Rotterdam, Netherlands (NLRTM)</option>
                <option value="USLAX">Los Angeles, USA (USLAX)</option>
                <option value="AEDXB">Dubai, UAE (AEDXB)</option>
              </select>
            </div>
            <div>
              <label class="block text-xs font-semibold text-gray-600 mb-1">Destination Port / Terminal</label>
              <select id="fullDest" class="w-full bg-white border border-gray-200 rounded-xl p-3 text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue">
                <option value="NGLOS" selected>Lagos, Nigeria (NGLOS)</option>
                <option value="USNYC">New York, USA (USNYC)</option>
                <option value="GBFXT">London / Felixstowe, UK (GBFXT)</option>
                <option value="NLRTM">Rotterdam, Netherlands (NLRTM)</option>
                <option value="DEHAM">Hamburg, Germany (DEHAM)</option>
                <option value="BEANR">Antwerp, Belgium (BEANR)</option>
                <option value="USLAX">Los Angeles, USA (USLAX)</option>
                <option value="AEDXB">Dubai / Jebel Ali, UAE (AEDXB)</option>
                <option value="SGSIN">Singapore (SGSIN)</option>
                <option value="CNSHA">Shanghai, China (CNSHA)</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Step 3: Cargo Details -->
        <div>
          <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-3">3. Cargo Specifications</label>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div>
              <label class="block text-xs font-semibold text-gray-600 mb-1" id="fullUnitLabel">Container Type</label>
              <select id="fullUnitSelect" class="w-full bg-white border border-gray-200 rounded-xl p-3 text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue">
                <option value="40hc">40' High Cube Container (FCL)</option>
                <option value="20gp">20' Standard Dry (FCL)</option>
                <option value="40gp">40' Standard Dry (FCL)</option>
                <option value="40rf">40' Reefer Temperature Controlled</option>
                <option value="lcl">LCL Consolidation (Per CBM)</option>
              </select>
            </div>
            <div>
              <label class="block text-xs font-semibold text-gray-600 mb-1">Quantity / Volume</label>
              <input type="number" id="fullQty" value="1" min="1" max="100" class="w-full bg-white border border-gray-200 rounded-xl p-3 text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue">
            </div>
            <div>
              <label class="block text-xs font-semibold text-gray-600 mb-1">Incoterms</label>
              <select id="fullIncoterm" class="w-full bg-white border border-gray-200 rounded-xl p-3 text-sm font-semibold text-brand-dark focus:outline-none focus:border-brand-blue">
                <option value="FOB">FOB (Free on Board)</option>
                <option value="CIF">CIF (Cost, Insurance & Freight)</option>
                <option value="EXW">EXW (Ex Works Door Pickup)</option>
                <option value="DAP">DAP (Delivered at Place)</option>
                <option value="DDP">DDP (Delivered Duty Paid)</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Add-on Services Checkboxes -->
        <div class="p-4 bg-white rounded-2xl border border-gray-200 space-y-3">
          <span class="block text-xs font-bold text-gray-700 uppercase tracking-wider">Value-Added Services</span>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs text-gray-700">
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" id="addCustoms" checked class="rounded border-gray-300 text-brand-blue focus:ring-brand-blue">
              <span>Automated Customs Clearance (+$120)</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" id="addInsurance" checked class="rounded border-gray-300 text-brand-blue focus:ring-brand-blue">
              <span>All-Risk Cargo Insurance (+$85)</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" id="addBiofuel" class="rounded border-gray-300 text-brand-green focus:ring-brand-green">
              <span class="text-emerald-700 font-semibold">100% Biofuel Inset #omegreen (+$90)</span>
            </label>
          </div>
        </div>

        <button type="submit" class="w-full btn-primary py-4 text-base font-bold shadow-xl shadow-brand-blue/30 justify-center">
          <span>Calculate Estimated Rate</span>
          <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </button>

      </form>

      <!-- Instant Estimated Charge Result Card -->
      <div id="fullResultsContainer" class="hidden mt-10 pt-8 border-t border-gray-200 space-y-6">
        <div class="flex flex-wrap items-center justify-between gap-3">
          <div>
            <h3 class="font-heading font-bold text-2xl text-brand-dark">Estimated Shipping Charge</h3>
            <p class="text-xs text-gray-500">Instant transparent rate estimation with all standard charges included.</p>
          </div>
          <span class="badge-pill badge-pill-green text-xs">Rate Guaranteed 72h</span>
        </div>

        <!-- Estimated Charge Display Card -->
        <div class="bg-white rounded-3xl border-2 border-brand-blue p-6 sm:p-8 shadow-xl relative overflow-hidden font-sans">
          
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left Side: Main Total & Route Details -->
            <div class="lg:col-span-7 space-y-4">
              <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue-light text-brand-blue text-xs font-bold uppercase tracking-wider">
                <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                <span id="displayModeBadge">Ocean Freight Estimation</span>
              </div>

              <div>
                <div class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Estimated Charge</div>
                <div class="text-3xl sm:text-5xl font-heading font-extrabold text-brand-dark mt-1" id="displayTotalCharge">
                  $3,250 USD
                </div>
                <div class="text-xs text-gray-500 mt-1">
                  Expected Rate Range: <strong id="displayRateRange" class="text-brand-dark font-semibold">$3,120 - $3,480 USD</strong> &bull; All-in pricing
                </div>
              </div>

              <!-- Route & Transit Pill Bar -->
              <div class="p-4 rounded-2xl bg-sand-light border border-sand-border space-y-2">
                <div class="flex items-center gap-2 text-sm font-bold text-brand-dark">
                  <i data-lucide="navigation" class="w-4 h-4 text-brand-blue flex-shrink-0"></i>
                  <span id="displayRouteSummary">Shanghai (CNSHA) &rarr; Lagos, Nigeria (NGLOS)</span>
                </div>
                <div class="flex flex-wrap items-center gap-4 text-xs text-gray-600">
                  <span class="flex items-center gap-1.5">
                    <i data-lucide="clock" class="w-3.5 h-3.5 text-brand-blue"></i>
                    <span>Est. Transit: <strong id="displayTransitTime" class="text-brand-dark">32 Days</strong></span>
                  </span>
                  <span>&bull;</span>
                  <span class="flex items-center gap-1.5">
                    <i data-lucide="package" class="w-3.5 h-3.5 text-brand-blue"></i>
                    <span id="displayUnitSummary">1 &times; 40' High Cube Container</span>
                  </span>
                </div>
              </div>

              <!-- Trust Guarantee Badges -->
              <div class="flex flex-wrap items-center gap-2 pt-1">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold">
                  <i data-lucide="check" class="w-3.5 h-3.5"></i>
                  <span>Space Allocation Guaranteed</span>
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-blue-light text-brand-blue text-xs font-bold">
                  <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
                  <span>No Hidden Surcharges</span>
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold">
                  <i data-lucide="lock" class="w-3.5 h-3.5"></i>
                  <span>Pay After Delivery</span>
                </span>
              </div>
            </div>

            <!-- Right Side: Itemized Price Breakdown & Action -->
            <div class="lg:col-span-5 bg-sand-light rounded-2xl p-6 border border-sand-border space-y-4">
              <h4 class="font-heading font-bold text-base text-brand-dark border-b border-gray-200 pb-2">
                Itemized Cost Breakdown
              </h4>

              <div class="space-y-2.5 text-xs text-gray-600">
                <div class="flex items-center justify-between">
                  <span>Base Freight Rate:</span>
                  <strong class="text-brand-dark text-sm" id="breakdownBase">$3,050 USD</strong>
                </div>
                <div class="flex items-center justify-between">
                  <span>Customs Clearance:</span>
                  <span id="breakdownCustoms" class="text-brand-dark font-medium">+$120 USD</span>
                </div>
                <div class="flex items-center justify-between">
                  <span>Cargo Insurance:</span>
                  <span id="breakdownInsurance" class="text-brand-dark font-medium">+$85 USD</span>
                </div>
                <div class="flex items-center justify-between">
                  <span>Biofuel / Carbon Inset:</span>
                  <span id="breakdownBiofuel" class="text-emerald-700 font-medium">$0 USD</span>
                </div>
                <div class="pt-3 border-t border-gray-200 flex items-center justify-between text-sm font-bold text-brand-dark">
                  <span>Total Estimated Charge:</span>
                  <span class="text-brand-blue text-lg" id="breakdownTotal">$3,255 USD</span>
                </div>
              </div>

              <div class="pt-3 space-y-2">
                <button onclick="alert('Booking request created for ' + document.getElementById('displayRouteSummary').textContent + '! A logistics manager will contact you within 15 minutes.');" class="w-full btn-primary py-3 text-sm font-bold shadow-lg shadow-brand-blue/25 justify-center">
                  <span>Book at this Estimated Rate</span>
                  <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
                <a href="{{ route('public.contact') }}" class="w-full btn-outlined text-xs py-2.5 justify-center block text-center">
                  <span>Talk with a Freight Specialist</span>
                </a>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>
</section>

<script>
function switchFullMode(mode) {
  const unitLabel = document.getElementById('fullUnitLabel');
  const unitSelect = document.getElementById('fullUnitSelect');
  if (!unitSelect) return;

  if (mode === 'air') {
    if (unitLabel) unitLabel.textContent = 'Air Cargo Service';
    unitSelect.innerHTML = `
      <option value="air-std">Standard Cargo (per KG)</option>
      <option value="air-exp">Priority Express Cargo (1-2 days)</option>
      <option value="air-charter">Part-Charter Cargo</option>
    `;
  } else if (mode === 'rail') {
    if (unitLabel) unitLabel.textContent = 'Rail Equipment';
    unitSelect.innerHTML = `
      <option value="40hc">40' High Cube Rail Container</option>
      <option value="40gp">40' Standard Dry Rail</option>
      <option value="ftl">Full Truckload (FTL)</option>
    `;
  } else {
    if (unitLabel) unitLabel.textContent = 'Container Type';
    unitSelect.innerHTML = `
      <option value="40hc">40' High Cube Container (FCL)</option>
      <option value="20gp">20' Standard Dry (FCL)</option>
      <option value="40gp">40' Standard Dry (FCL)</option>
      <option value="40rf">40' Reefer Temperature Controlled</option>
      <option value="lcl">LCL Consolidation (Per CBM)</option>
    `;
  }
}

function calculateFullQuote() {
  const container = document.getElementById('fullResultsContainer');
  const originSelect = document.getElementById('fullOrigin');
  const destSelect = document.getElementById('fullDest');
  const origin = originSelect?.value || 'CNSHA';
  const dest = destSelect?.value || 'NGLOS';
  const originName = originSelect ? originSelect.options[originSelect.selectedIndex].text : origin;
  const destName = destSelect ? destSelect.options[destSelect.selectedIndex].text : dest;

  const modeRadio = document.querySelector('input[name="full_mode"]:checked');
  const mode = modeRadio ? modeRadio.value : 'ocean';
  const unitSelect = document.getElementById('fullUnitSelect');
  const unit = unitSelect?.value || '40hc';
  const unitName = unitSelect ? unitSelect.options[unitSelect.selectedIndex].text : unit;
  const qty = Math.max(1, parseInt(document.getElementById('fullQty')?.value || '1', 10));

  const customs = document.getElementById('addCustoms')?.checked ? 120 : 0;
  const insurance = document.getElementById('addInsurance')?.checked ? 85 : 0;
  const biofuel = document.getElementById('addBiofuel')?.checked ? 90 : 0;
  const addOns = customs + insurance + biofuel;

  const laneData = typeof getLaneData === 'function' ? getLaneData(origin, dest) : { sea: 25, air: 3, rail: 18, baseOcean: 2400, baseAir: 4.80, baseRail: 3000 };

  let baseRate = 0;
  let transitDays = 25;
  let modeLabel = 'Ocean Freight Estimation';

  if (mode === 'ocean') {
    modeLabel = 'Ocean Freight Estimation';
    let multiplier = 1.0;
    if (unit === '20gp') multiplier = 0.65;
    if (unit === '40gp') multiplier = 0.95;
    if (unit === '40hc') multiplier = 1.05;
    if (unit === '40rf') multiplier = 1.40;
    if (unit === 'lcl') multiplier = 0.12;

    baseRate = Math.round(laneData.baseOcean * multiplier * qty);
    transitDays = laneData.sea || 22;
  } else if (mode === 'air') {
    modeLabel = 'Air Freight Estimation';
    let multiplier = 1.0;
    if (unit === 'air-exp') multiplier = 1.45;
    if (unit === 'air-charter') multiplier = 2.10;

    const weight = qty * 450;
    baseRate = Math.round(weight * laneData.baseAir * multiplier);
    transitDays = laneData.air || 3;
  } else {
    modeLabel = 'Rail & Road Intermodal Estimation';
    const base = laneData.rail ? laneData.baseRail : laneData.baseOcean * 1.2;
    baseRate = Math.round(base * qty);
    transitDays = laneData.rail || 18;
  }

  const totalCharge = baseRate + addOns;
  const minRange = Math.round(totalCharge * 0.96);
  const maxRange = Math.round(totalCharge * 1.07);

  // Update DOM targets
  const totalEl = document.getElementById('displayTotalCharge');
  const rangeEl = document.getElementById('displayRateRange');
  const routeEl = document.getElementById('displayRouteSummary');
  const transitEl = document.getElementById('displayTransitTime');
  const unitEl = document.getElementById('displayUnitSummary');
  const modeBadgeEl = document.getElementById('displayModeBadge');

  const baseEl = document.getElementById('breakdownBase');
  const customsEl = document.getElementById('breakdownCustoms');
  const insuranceEl = document.getElementById('breakdownInsurance');
  const biofuelEl = document.getElementById('breakdownBiofuel');
  const totalBreakdownEl = document.getElementById('breakdownTotal');

  if (totalEl) totalEl.textContent = `$${totalCharge.toLocaleString()} USD`;
  if (rangeEl) rangeEl.textContent = `$${minRange.toLocaleString()} - $${maxRange.toLocaleString()} USD`;
  if (routeEl) routeEl.textContent = `${originName} \u2192 ${destName}`;
  if (transitEl) transitEl.textContent = `${transitDays} - ${transitDays + 3} Days`;
  if (unitEl) unitEl.textContent = `${qty} \u00D7 ${unitName}`;
  if (modeBadgeEl) modeBadgeEl.textContent = modeLabel;

  if (baseEl) baseEl.textContent = `$${baseRate.toLocaleString()} USD`;
  if (customsEl) customsEl.textContent = customs > 0 ? `+$${customs} USD` : '$0 USD';
  if (insuranceEl) insuranceEl.textContent = insurance > 0 ? `+$${insurance} USD` : '$0 USD';
  if (biofuelEl) biofuelEl.textContent = biofuel > 0 ? `+$${biofuel} USD` : '$0 USD';
  if (totalBreakdownEl) totalBreakdownEl.textContent = `$${totalCharge.toLocaleString()} USD`;

  if (container) {
    container.classList.remove('hidden');
    container.scrollIntoView({ behavior: 'smooth' });
    if (typeof lucide !== 'undefined') lucide.createIcons();
  }
}

// Prefill form from URL parameters if present
document.addEventListener('DOMContentLoaded', () => {
  const params = new URLSearchParams(window.location.search);
  const origin = params.get('origin');
  const dest = params.get('dest');
  const mode = params.get('mode');
  const qty = params.get('qty');

  if (origin && document.getElementById('fullOrigin')) {
    document.getElementById('fullOrigin').value = origin;
  }
  if (dest && document.getElementById('fullDest')) {
    document.getElementById('fullDest').value = dest;
  }
  if (qty && document.getElementById('fullQty')) {
    document.getElementById('fullQty').value = qty;
  }
  if (mode) {
    const radio = document.querySelector(`input[name="full_mode"][value="${mode}"]`);
    if (radio) {
      radio.checked = true;
      switchFullMode(mode);
    }
  }

  if (origin || dest) {
    calculateFullQuote();
  }
});
</script>

@endsection
