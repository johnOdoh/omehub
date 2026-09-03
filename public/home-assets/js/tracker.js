/**
 * omehub - Container & Freight Tracking Simulator
 */

const sampleShipments = {
  'OME-884920': {
    code: 'OME-884920',
    containerNo: 'MSCU-9382104',
    bolNumber: 'MEDU88291048',
    carrier: 'MSC Mediterranean Shipping',
    vessel: 'MSC GÜLSÜN (Voyage 2608W)',
    origin: 'Shanghai Yangshan Port (CNSHA)',
    destination: 'Rotterdam Port (NLRTM)',
    mode: 'Ocean FCL (40\' High Cube)',
    status: 'IN_TRANSIT',
    statusLabel: 'In-Transit / At Sea (Red Sea Alternate)',
    eta: 'Sept 04, 2026',
    departureDate: 'Aug 08, 2026',
    currentLocation: 'Indian Ocean (Lat 12.82° N, Lon 64.12° E)',
    temperature: 'Ambient (Dry)',
    co2Emissions: '1.42 Tons CO2e (Biofuel Offset Active)',
    milestones: [
      { title: 'Cargo Picked Up at Factory (Suzhou)', location: 'Suzhou Hub', time: 'Aug 05, 2026 - 09:30 CST', completed: true },
      { title: 'Gate In & Export Customs Clearance', location: 'Shanghai Yangshan Terminal', time: 'Aug 07, 2026 - 16:45 CST', completed: true },
      { title: 'Vessel Departed Origin Port', location: 'Shanghai (CNSHA)', time: 'Aug 08, 2026 - 22:15 CST', completed: true },
      { title: 'Transshipment & Bunker Call', location: 'Singapore Port (SGSIN)', time: 'Aug 14, 2026 - 11:20 SGT', completed: true },
      { title: 'Cape Route Open Sea Navigation', location: 'Indian Ocean Corridor', time: 'In Progress (Active Telemetry)', current: true },
      { title: 'Import Customs Pre-Clearance', location: 'Rotterdam Customs', time: 'Scheduled for Sept 02', pending: true },
      { title: 'Vessel Berth & Discharge', location: 'APMT Rotterdam (NLRTM)', time: 'Estimated Sept 04 - 08:00 CEST', pending: true },
      { title: 'Final Mile Delivery to Warehouse', location: 'Amsterdam DC', time: 'Estimated Sept 05', pending: true },
    ]
  },
  'OME-392011': {
    code: 'OME-392011',
    containerNo: 'CMAU-1029481',
    bolNumber: 'CMACGM771029',
    carrier: 'CMA CGM',
    vessel: 'CMA CGM JACQUES SAADE',
    origin: 'Ningbo-Zhoushan Port (CNNGB)',
    destination: 'Hamburg Port (DEHAM)',
    mode: 'Ocean FCL (20\' Standard)',
    status: 'CUSTOMS_CLEARED',
    statusLabel: 'Customs Cleared / Discharged',
    eta: 'Today (Ready for Pickup)',
    departureDate: 'Jul 28, 2026',
    currentLocation: 'CTA Terminal, Hamburg, Germany',
    temperature: 'Dry Cargo',
    co2Emissions: '0.88 Tons CO2e',
    milestones: [
      { title: 'Container Loaded', location: 'Ningbo Terminal', time: 'Jul 26, 2026', completed: true },
      { title: 'Departed Ningbo', location: 'Ningbo (CNNGB)', time: 'Jul 28, 2026', completed: true },
      { title: 'Vessel Arrived at Destination', location: 'Hamburg (DEHAM)', time: 'Aug 26, 2026', completed: true },
      { title: 'Import Customs Cleared by omehub AI', location: 'Hamburg Customs Office', time: 'Aug 27, 2026', completed: true, current: true },
      { title: 'Container Picked up by Carrier Truck', location: 'Hamburg CTA', time: 'Out for Final Delivery', pending: true },
    ]
  },
  'OME-771802': {
    code: 'OME-771802',
    containerNo: 'HLCU-8830192',
    bolNumber: 'HLCU88102391',
    carrier: 'Hapag-Lloyd',
    vessel: 'SINGAPORE EXPRESS',
    origin: 'Singapore Port (SGSIN)',
    destination: 'Los Angeles (USLAX)',
    mode: 'Air Priority Freight (Charter)',
    status: 'DELIVERED',
    statusLabel: 'Delivered / Proof of Delivery Signed',
    eta: 'Delivered on Aug 26, 2026',
    departureDate: 'Aug 24, 2026',
    currentLocation: 'Delivered to Consignee (Los Angeles, CA)',
    temperature: 'Pharma Cold Chain (+4°C)',
    co2Emissions: '2.10 Tons CO2e (100% Inset via SAF)',
    milestones: [
      { title: 'Airway Bill Issued', location: 'Singapore Changi (SIN)', time: 'Aug 24, 2026', completed: true },
      { title: 'Flight Departed SIN', location: 'SQ Cargo #7920', time: 'Aug 24, 2026', completed: true },
      { title: 'Touchdown & Deplaning', location: 'Los Angeles (LAX)', time: 'Aug 25, 2026', completed: true },
      { title: 'US CBP Clearance Complete', location: 'LAX Cargo Hub', time: 'Aug 25, 2026', completed: true },
      { title: 'Delivered & POD Signed', location: 'Consignee Facility, Irvine CA', time: 'Aug 26, 2026 - 14:15 PST', completed: true, current: true },
    ]
  }
};

function handleHeroTracking() {
  const trackInput = document.getElementById('heroTrackingInput');
  const code = trackInput ? trackInput.value.trim().toUpperCase() : 'OME-884920';
  window.location.href = `pages/tracking.php?track=${encodeURIComponent(code)}`;
}

function setTrackingDemo(code) {
  const trackInput = document.getElementById('heroTrackingInput');
  if (trackInput) trackInput.value = code;
  handleHeroTracking();
}

function renderTrackingPageDetails(code) {
  const cleanCode = code ? code.trim().toUpperCase() : 'OME-884920';
  const data = sampleShipments[cleanCode] || sampleShipments['OME-884920'];

  // Fill UI targets if they exist on pages/tracking.php
  const codeEl = document.getElementById('trkCode');
  const statusBadge = document.getElementById('trkStatusBadge');
  const originEl = document.getElementById('trkOrigin');
  const destEl = document.getElementById('trkDestination');
  const vesselEl = document.getElementById('trkVessel');
  const carrierEl = document.getElementById('trkCarrier');
  const etaEl = document.getElementById('trkEta');
  const containerEl = document.getElementById('trkContainer');
  const bolEl = document.getElementById('trkBol');
  const locationEl = document.getElementById('trkLocation');
  const co2El = document.getElementById('trkCo2');
  const milestonesContainer = document.getElementById('trkMilestones');

  if (codeEl) codeEl.textContent = data.code;
  if (statusBadge) statusBadge.textContent = data.statusLabel;
  if (originEl) originEl.textContent = data.origin;
  if (destEl) destEl.textContent = data.destination;
  if (vesselEl) vesselEl.textContent = data.vessel;
  if (carrierEl) carrierEl.textContent = data.carrier;
  if (etaEl) etaEl.textContent = data.eta;
  if (containerEl) containerEl.textContent = data.containerNo;
  if (bolEl) bolEl.textContent = data.bolNumber;
  if (locationEl) locationEl.textContent = data.currentLocation;
  if (co2El) co2El.textContent = data.co2Emissions;

  if (milestonesContainer) {
    milestonesContainer.innerHTML = '';
    data.milestones.forEach((m, idx) => {
      let iconColor = 'bg-gray-200 text-gray-400';
      let lineClass = 'border-gray-200';
      let titleClass = 'text-gray-500';

      if (m.completed) {
        iconColor = 'bg-brand-green text-white shadow-sm';
        lineClass = 'border-brand-green';
        titleClass = 'text-brand-dark font-bold';
      } else if (m.current) {
        iconColor = 'bg-brand-blue text-white ring-4 ring-brand-blue/20 animate-pulse';
        titleClass = 'text-brand-blue font-extrabold';
      }

      const isLast = idx === data.milestones.length - 1;

      const itemHtml = `
        <div class="flex gap-4 relative">
          ${!isLast ? `<div class="absolute left-4 top-8 -bottom-2 w-0.5 border-l-2 ${lineClass}"></div>` : ''}
          <div class="w-8 h-8 rounded-full ${iconColor} flex items-center justify-center flex-shrink-0 z-10">
            ${m.completed ? '<i data-lucide="check" class="w-4 h-4"></i>' : (m.current ? '<i data-lucide="navigation" class="w-4 h-4"></i>' : '<i data-lucide="clock" class="w-4 h-4"></i>')}
          </div>
          <div class="pb-6">
            <h4 class="text-sm ${titleClass}">${m.title}</h4>
            <div class="text-xs text-gray-500 flex items-center gap-2 mt-0.5">
              <span><i data-lucide="map-pin" class="w-3 h-3 inline mr-0.5"></i> ${m.location}</span>
              <span>•</span>
              <span>${m.time}</span>
            </div>
          </div>
        </div>
      `;
      milestonesContainer.insertAdjacentHTML('beforeend', itemHtml);
    });

    if (typeof lucide !== 'undefined') lucide.createIcons();
  }
}
