/**
 * omehub - Freight Quote Engine & Multi-Modal Rate Calculator
 * Comprehensive trade lane rates for Nigeria, New York, UK, China, Europe, Asia, and the Americas.
 */

const portDistances = {
    // China Corridors
    'CNSHA-NLRTM': { sea: 28, air: 3, rail: 18, baseOcean: 2450, baseAir: 4.80, baseRail: 3200 },
    'CNSHA-DEHAM': { sea: 29, air: 3, rail: 16, baseOcean: 2500, baseAir: 4.90, baseRail: 3100 },
    'CNSHA-USLAX': { sea: 16, air: 2, rail: 0, baseOcean: 1980, baseAir: 5.20, baseRail: 0 },
    'CNSHA-USNYC': { sea: 25, air: 3, rail: 0, baseOcean: 2950, baseAir: 5.50, baseRail: 0 },
    'CNSHA-GBFXT': { sea: 27, air: 3, rail: 17, baseOcean: 2420, baseAir: 4.75, baseRail: 3150 },
    'CNSHA-NGLOS': { sea: 32, air: 4, rail: 0, baseOcean: 3250, baseAir: 6.20, baseRail: 0 },
    'CNSHA-AEDXB': { sea: 18, air: 2, rail: 0, baseOcean: 1750, baseAir: 3.90, baseRail: 0 },
    'CNSHA-SGSIN': { sea: 7, air: 1, rail: 0, baseOcean: 650, baseAir: 2.20, baseRail: 0 },

    'CNNGB-NLRTM': { sea: 28, air: 3, rail: 18, baseOcean: 2420, baseAir: 4.85, baseRail: 3200 },
    'CNNGB-USNYC': { sea: 25, air: 3, rail: 0, baseOcean: 2920, baseAir: 5.45, baseRail: 0 },
    'CNNGB-GBFXT': { sea: 27, air: 3, rail: 17, baseOcean: 2400, baseAir: 4.70, baseRail: 3150 },
    'CNNGB-NGLOS': { sea: 32, air: 4, rail: 0, baseOcean: 3220, baseAir: 6.15, baseRail: 0 },

    'HKHKG-USNYC': { sea: 24, air: 3, rail: 0, baseOcean: 2880, baseAir: 5.30, baseRail: 0 },
    'HKHKG-GBFXT': { sea: 25, air: 3, rail: 0, baseOcean: 2350, baseAir: 4.60, baseRail: 0 },
    'HKHKG-NGLOS': { sea: 30, air: 3, rail: 0, baseOcean: 3180, baseAir: 5.95, baseRail: 0 },

    'SGSIN-NLRTM': { sea: 20, air: 2, rail: 0, baseOcean: 1850, baseAir: 4.10, baseRail: 0 },
    'SGSIN-USNYC': { sea: 26, air: 3, rail: 0, baseOcean: 2750, baseAir: 5.10, baseRail: 0 },
    'SGSIN-GBFXT': { sea: 21, air: 2, rail: 0, baseOcean: 1890, baseAir: 4.15, baseRail: 0 },
    'SGSIN-NGLOS': { sea: 24, air: 3, rail: 0, baseOcean: 2650, baseAir: 5.30, baseRail: 0 },

    'VNSGN-DEHAM': { sea: 26, air: 3, rail: 0, baseOcean: 2200, baseAir: 4.60, baseRail: 0 },
    'VNSGN-USNYC': { sea: 27, air: 3, rail: 0, baseOcean: 2820, baseAir: 5.35, baseRail: 0 },
    'VNSGN-GBFXT': { sea: 25, air: 3, rail: 0, baseOcean: 2250, baseAir: 4.65, baseRail: 0 },
    'VNSGN-NGLOS': { sea: 29, air: 4, rail: 0, baseOcean: 2980, baseAir: 5.75, baseRail: 0 },

    // Europe Corridors
    'DEHAM-USNYC': { sea: 12, air: 2, rail: 0, baseOcean: 1650, baseAir: 3.80, baseRail: 0 },
    'DEHAM-GBFXT': { sea: 3, air: 1, rail: 2, baseOcean: 620, baseAir: 2.10, baseRail: 780 },
    'DEHAM-NGLOS': { sea: 19, air: 2, rail: 0, baseOcean: 2150, baseAir: 4.25, baseRail: 0 },

    'NLRTM-USNYC': { sea: 11, air: 2, rail: 0, baseOcean: 1620, baseAir: 3.75, baseRail: 0 },
    'NLRTM-GBFXT': { sea: 2, air: 1, rail: 2, baseOcean: 580, baseAir: 2.05, baseRail: 720 },
    'NLRTM-NGLOS': { sea: 18, air: 2, rail: 0, baseOcean: 2080, baseAir: 4.15, baseRail: 0 },

    // UK Corridors (London / Felixstowe)
    'GBFXT-NGLOS': { sea: 17, air: 2, rail: 0, baseOcean: 2050, baseAir: 4.10, baseRail: 0 },
    'GBFXT-USNYC': { sea: 11, air: 2, rail: 0, baseOcean: 1550, baseAir: 3.60, baseRail: 0 },
    'GBFXT-USLAX': { sea: 21, air: 2, rail: 0, baseOcean: 2250, baseAir: 4.40, baseRail: 0 },
    'GBFXT-NLRTM': { sea: 2, air: 1, rail: 2, baseOcean: 580, baseAir: 2.05, baseRail: 720 },
    'GBFXT-DEHAM': { sea: 3, air: 1, rail: 2, baseOcean: 620, baseAir: 2.10, baseRail: 780 },
    'GBFXT-AEDXB': { sea: 16, air: 2, rail: 0, baseOcean: 1720, baseAir: 3.85, baseRail: 0 },
    'GBFXT-SGSIN': { sea: 22, air: 2, rail: 0, baseOcean: 1920, baseAir: 4.20, baseRail: 0 },
    'GBFXT-CNSHA': { sea: 28, air: 3, rail: 17, baseOcean: 2380, baseAir: 4.70, baseRail: 3100 },

    // USA / New York Corridors
    'USNYC-NGLOS': { sea: 22, air: 3, rail: 0, baseOcean: 2750, baseAir: 5.80, baseRail: 0 },
    'USNYC-GBFXT': { sea: 11, air: 2, rail: 0, baseOcean: 1550, baseAir: 3.60, baseRail: 0 },
    'USNYC-NLRTM': { sea: 11, air: 2, rail: 0, baseOcean: 1620, baseAir: 3.75, baseRail: 0 },
    'USNYC-DEHAM': { sea: 12, air: 2, rail: 0, baseOcean: 1650, baseAir: 3.80, baseRail: 0 },
    'USNYC-CNSHA': { sea: 26, air: 3, rail: 0, baseOcean: 2850, baseAir: 5.40, baseRail: 0 },
    'USNYC-SGSIN': { sea: 26, air: 3, rail: 0, baseOcean: 2720, baseAir: 5.15, baseRail: 0 },
    'USNYC-AEDXB': { sea: 20, air: 2, rail: 0, baseOcean: 2180, baseAir: 4.60, baseRail: 0 },
    'USLAX-NGLOS': { sea: 28, air: 3, rail: 0, baseOcean: 3100, baseAir: 6.10, baseRail: 0 },

    // Nigeria Corridors (Lagos / Apapa)
    'NGLOS-USNYC': { sea: 22, air: 3, rail: 0, baseOcean: 2650, baseAir: 5.70, baseRail: 0 },
    'NGLOS-GBFXT': { sea: 18, air: 2, rail: 0, baseOcean: 1980, baseAir: 4.05, baseRail: 0 },
    'NGLOS-NLRTM': { sea: 19, air: 2, rail: 0, baseOcean: 1950, baseAir: 4.10, baseRail: 0 },
    'NGLOS-DEHAM': { sea: 20, air: 2, rail: 0, baseOcean: 2020, baseAir: 4.20, baseRail: 0 },
    'NGLOS-CNSHA': { sea: 33, air: 4, rail: 0, baseOcean: 2150, baseAir: 5.90, baseRail: 0 },
    'NGLOS-SGSIN': { sea: 25, air: 3, rail: 0, baseOcean: 2350, baseAir: 5.20, baseRail: 0 },
    'NGLOS-AEDXB': { sea: 19, air: 2, rail: 0, baseOcean: 2200, baseAir: 4.45, baseRail: 0 },
    'NGLOS-USLAX': { sea: 29, air: 3, rail: 0, baseOcean: 2950, baseAir: 6.00, baseRail: 0 },

    // Middle East Corridors
    'AEDXB-NGLOS': { sea: 19, air: 2, rail: 0, baseOcean: 2200, baseAir: 4.45, baseRail: 0 },
    'AEDXB-GBFXT': { sea: 16, air: 2, rail: 0, baseOcean: 1720, baseAir: 3.85, baseRail: 0 },
    'AEDXB-USNYC': { sea: 20, air: 2, rail: 0, baseOcean: 2180, baseAir: 4.60, baseRail: 0 },
};

function getLaneKey(origin, dest) {
    return `${origin}-${dest}`;
}

function getLaneData(origin, dest) {
    if (origin === dest) {
        return { sea: 3, air: 1, rail: 2, baseOcean: 600, baseAir: 2.10, baseRail: 700 };
    }

    const directKey = getLaneKey(origin, dest);
    if (portDistances[directKey]) {
        return portDistances[directKey];
    }

    const reverseKey = getLaneKey(dest, origin);
    if (portDistances[reverseKey]) {
        return portDistances[reverseKey];
    }

    // Intelligent fallback for custom global routes
    return { sea: 24, air: 3, rail: 16, baseOcean: 2400, baseAir: 4.80, baseRail: 3000 };
}

function updateModeDetails(mode) {
    const cargoSelect = document.getElementById('quickCargoType');
    if (!cargoSelect) return;

    if (mode === 'air') {
        cargoSelect.innerHTML = `
      <option value="air-std">Standard Air Cargo (per KG)</option>
      <option value="air-exp">Priority Express Air (1-2 days)</option>
      <option value="air-temp">Pharma / Cold Chain (+4°C)</option>
    `;
    } else if (mode === 'rail') {
        cargoSelect.innerHTML = `
      <option value="40hc">40' High Cube Rail Container</option>
      <option value="40gp">40' Standard Dry Rail</option>
      <option value="ftl">Full Truckload (FTL)</option>
    `;
    } else {
        cargoSelect.innerHTML = `
      <option value="40hc">40' High Cube Container (FCL)</option>
      <option value="20gp">20' Standard Dry (FCL)</option>
      <option value="40gp">40' Standard Dry (FCL)</option>
      <option value="lcl">LCL Consolidation (Per CBM)</option>
    `;
    }
}

function handleQuickQuote() {
    const origin = document.getElementById('quickOrigin')?.value || 'CNSHA';
    const dest = document.getElementById('quickDestination')?.value || 'NGLOS';
    const modeRadio = document.querySelector('input[name="quick_mode"]:checked');
    const mode = modeRadio ? modeRadio.value : 'ocean';
    const qty = Math.max(1, parseInt(document.getElementById('quickQuantity')?.value || '1', 10));
    const cargoType = document.getElementById('quickCargoType')?.value || '40hc';

    const laneData = getLaneData(origin, dest);

    let minRate = 0;
    let maxRate = 0;
    let transitDays = 25;
    const unitLabel = 'USD';

    if (mode === 'ocean') {
        let multiplier = 1.0;
        if (cargoType === '20gp') multiplier = 0.65;
        if (cargoType === '40gp') multiplier = 0.95;
        if (cargoType === '40hc') multiplier = 1.05;
        if (cargoType === 'lcl') multiplier = 0.12; // per cbm estimate

        const base = laneData.baseOcean * multiplier * qty;
        minRate = Math.round(base * 0.96);
        maxRate = Math.round(base * 1.08);
        transitDays = laneData.sea || 22;
    } else if (mode === 'air') {
        let multiplier = 1.0;
        if (cargoType === 'air-exp') multiplier = 1.45;
        if (cargoType === 'air-temp') multiplier = 1.60;

        const estimatedWeight = qty * 450; // kg default
        const base = estimatedWeight * laneData.baseAir * multiplier;
        minRate = Math.round(base * 0.95);
        maxRate = Math.round(base * 1.08);
        transitDays = laneData.air || 3;
    } else {
        // Rail & Road
        if (laneData.rail === 0) {
            // If no direct rail link, intermodal sea/rail/truck combination
            const base = (laneData.baseOcean * 1.25) * qty;
            minRate = Math.round(base * 0.95);
            maxRate = Math.round(base * 1.08);
            transitDays = (laneData.sea || 25) + 4;
        } else {
            const base = laneData.baseRail * qty;
            minRate = Math.round(base * 0.95);
            maxRate = Math.round(base * 1.08);
            transitDays = laneData.rail || 18;
        }
    }

    const resultBox = document.getElementById('quickResultBox');
    const rateDisplay = document.getElementById('displayEstimateRate');
    const transitDisplay = document.getElementById('displayTransitTime');
    const fullQuoteBtn = document.getElementById('fullQuoteBtn');

    if (resultBox && rateDisplay && transitDisplay) {
        rateDisplay.textContent = `$${minRate.toLocaleString()} - $${maxRate.toLocaleString()} ${unitLabel}`;
        transitDisplay.textContent = `Est. Transit: ${transitDays} - ${transitDays + 3} days • Guaranteed Carrier Allocation`;

        if (fullQuoteBtn) {
            const isPagesSubdir = window.location.pathname.includes('/pages/');
            const basePath = isPagesSubdir ? 'quote.php' : 'pages/quote.php';
            fullQuoteBtn.href = `${basePath}?origin=${encodeURIComponent(origin)}&dest=${encodeURIComponent(dest)}&mode=${encodeURIComponent(mode)}&qty=${qty}`;
        }

        resultBox.classList.remove('hidden');
        if (typeof lucide !== 'undefined') lucide.createIcons();
    }
}
