@extends('public.layout.public')

@section('title', 'Our Privacy Policy')
@section('content')

<!-- Privacy Page Header -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/40 py-16 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
  
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-4 text-center">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-green-light text-emerald-800 text-xs font-bold uppercase tracking-wider">
      <i data-lucide="shield-check" class="w-3.5 h-3.5 text-brand-green"></i>
      <span>Data Protection &bull; NDPC Ultra-High Level Certified</span>
    </div>

    <h1 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-brand-dark tracking-tight">
      Our Privacy Policy
    </h1>

    <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
      Omefreight Logistics Ltd (“we,” “our,” or “us”) is committed to protecting the privacy, security, and integrity of personal data across our global digital logistics platform &mdash; <strong>{{ config('app.name') }}</strong>.
    </p>

    <div class="flex items-center justify-center gap-4 text-xs text-gray-500 pt-2 flex-wrap">
      <span class="flex items-center gap-1.5"><i data-lucide="calendar" class="w-4 h-4 text-brand-blue"></i> Effective: 2026</span>
      <span>&bull;</span>
      <span class="flex items-center gap-1.5"><i data-lucide="lock" class="w-4 h-4 text-brand-blue"></i> REG ID: NDPC/DCP/09043</span>
      <span>&bull;</span>
      <span class="flex items-center gap-1.5"><i data-lucide="globe" class="w-4 h-4 text-brand-green"></i> Multi-Jurisdiction Compliant</span>
    </div>
  </div>
</section>

<!-- Privacy Content Layout with Sticky Sidebar -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      
      <!-- Sticky Navigation Sidebar -->
      <aside class="hidden lg:block lg:col-span-4 sticky top-28 space-y-6">
        <div class="card-sand p-6 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <h3 class="font-heading font-bold text-base text-brand-dark flex items-center gap-2">
            <i data-lucide="list" class="w-4 h-4 text-brand-blue"></i>
            <span>Privacy Sections</span>
          </h3>

          <nav class="space-y-1 text-xs font-medium text-gray-600">
            <a href="#intro" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">1. Introduction</a>
            <a href="#who-we-are" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">2. Who We Are &amp; Regulations</a>
            <a href="#data-collection" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">3. What Data We Collect</a>
            <a href="#data-use" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">4. How We Use Your Data</a>
            <a href="#data-sharing" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">5. How We Share Your Data</a>
            <a href="#cross-border" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">6. Cross-Border Data Transfers</a>
            <a href="#retention" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">7. Data Retention</a>
            <a href="#global-rights" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">8. Your Rights by Region</a>
            <a href="#security" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">9. Data Security</a>
            <a href="#children" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">10. Children's Data Security</a>
            <a href="#cookies" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">11. Cookies &amp; Telemetry</a>
            <a href="#changes" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">12. Changes to This Policy</a>
            <a href="#contact" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">13. Contact Our DPO</a>
          </nav>
        </div>

        <!-- Privacy Badge Card -->
        <div class="card-sand p-6 rounded-3xl bg-brand-dark text-white space-y-3">
          <div class="w-9 h-9 rounded-xl bg-brand-green/20 text-brand-green flex items-center justify-center">
            <i data-lucide="award" class="w-5 h-5"></i>
          </div>
          <h4 class="font-heading font-bold text-sm text-white">NDPC Certified</h4>
          <p class="text-xs text-gray-400 leading-relaxed">
            Omefreight Logistics Ltd ({{ config('app.name') }}) is certified by the Nigeria Data Protection Commission as a Data Controller of Major Importance (Ultra-High Level).
          </p>
          <div class="text-[11px] font-mono text-cyan-400 font-bold">
            REG ID: NDPC/DCP/09043
          </div>
        </div>
      </aside>

      <!-- Main Privacy Policy Articles -->
      <main class="lg:col-span-8 space-y-10 text-gray-700 leading-relaxed font-sans">
        
        <!-- Article 1: Introduction -->
        <article id="intro" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">1</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Introduction</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            Omefreight (“we,” “our,” or “us”) is committed to protecting the privacy and personal data of all users (“you,” “your”) who use our logistics platform &mdash; <strong>{{ config('app.name') }}</strong>. This Privacy Policy explains how we collect, use, disclose, and safeguard your information globally across all digital touchpoints.
          </p>
        </article>

        <!-- Article 2: Who We Are & Regulations -->
        <article id="who-we-are" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">2</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Who We Are &amp; Regulatory Compliance</h2>
          </div>
          <div class="pl-11 space-y-3">
            <p class="text-sm text-gray-600">
              Omefreight is a logistics company registered in Nigeria and operating globally. We connect shippers, carriers, insurers, finance providers, and trade professionals to simplify the cross-border movement of goods.
            </p>
            <p class="text-xs font-bold text-gray-500 uppercase tracking-wider">For data protection purposes, we comply with global standards:</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
              <div class="p-3 bg-white rounded-2xl border border-gray-100 space-y-1">
                <strong class="text-brand-dark flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-green"></i> Nigeria (NDPA 2023)</strong>
                <p class="text-gray-500">Regulated by the Nigeria Data Protection Commission (NDPC) as a Data Controller of Major Importance (Ultra-High Level).</p>
              </div>
              <div class="p-3 bg-white rounded-2xl border border-gray-100 space-y-1">
                <strong class="text-brand-dark flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-green"></i> EU &amp; UK (GDPR)</strong>
                <p class="text-gray-500">We act as a Data Controller under the General Data Protection Regulation (GDPR) and UK GDPR.</p>
              </div>
              <div class="p-3 bg-white rounded-2xl border border-gray-100 space-y-1">
                <strong class="text-brand-dark flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-green"></i> South Africa (POPIA)</strong>
                <p class="text-gray-500">We comply fully with the Protection of Personal Information Act (POPIA).</p>
              </div>
              <div class="p-3 bg-white rounded-2xl border border-gray-100 space-y-1">
                <strong class="text-brand-dark flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-green"></i> Kenya (DPA 2019)</strong>
                <p class="text-gray-500">We comply with the Kenya Data Protection Act 2019.</p>
              </div>
              <div class="p-3 bg-white rounded-2xl border border-gray-100 space-y-1 sm:col-span-2">
                <strong class="text-brand-dark flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-green"></i> California, USA (CCPA / CPRA)</strong>
                <p class="text-gray-500">We comply with the California Consumer Privacy Act (CCPA) and California Privacy Rights Act (CPRA).</p>
              </div>
            </div>
          </div>
        </article>

        <!-- Article 3: What Data Do We Collect -->
        <article id="data-collection" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">3</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">What Data Do We Collect</h2>
          </div>
          <div class="pl-11 space-y-3">
            <p class="text-sm text-gray-600">We collect and process the following categories of data:</p>
            <ul class="space-y-2 text-xs sm:text-sm text-gray-600">
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="user-check" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span><strong>Identity Data:</strong> Full name, corporate email address, phone number, passport/national ID details for KYC verification.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="package" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span><strong>Shipment Data:</strong> Cargo specifications, HS codes, origin and destination terminal addresses, container numbers, and bill of lading records.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="credit-card" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span><strong>Financial Data:</strong> Secure escrow payment identifiers, insurance choices, invoice details, and trade finance applications.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="cpu" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span><strong>Technical Data:</strong> IP address, device identifiers, browser specifications, telemetry response rates, and cookies.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="activity" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span><strong>Usage Data:</strong> Freight calculation search history, live tracker queries, service interactions, and bulletin community posts.</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Article 4: How We Use Your Data -->
        <article id="data-use" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">4</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">How We Use Your Data (Legal Basis)</h2>
          </div>
          <div class="pl-11 space-y-3">
            <p class="text-sm text-gray-600">We process personal data strictly in accordance with applicable legal bases:</p>
            <ul class="space-y-2 text-xs sm:text-sm text-gray-600">
              <li class="flex items-start gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i> <span><strong>Contractual Necessity:</strong> To fulfill logistics bookings, calculate quotes, process freight transactions, and enable insurance and trade finance.</span></li>
              <li class="flex items-start gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i> <span><strong>Legal &amp; Regulatory Obligations:</strong> To perform mandatory KYC identity verification, customs clearance reporting, and anti-fraud monitoring.</span></li>
              <li class="flex items-start gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i> <span><strong>Consent:</strong> For sending optional trade bulletin insights, market updates, or sharing data with designated underwriters chosen by you.</span></li>
              <li class="flex items-start gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i> <span><strong>Legitimate Interests:</strong> To maintain platform security, prevent unauthorized access, improve route latency, and enhance system stability.</span></li>
            </ul>
          </div>
        </article>

        <!-- Article 5: How We Share Your Data -->
        <article id="data-sharing" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">5</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">How We Share Your Data</h2>
          </div>
          <div class="pl-11 space-y-3 text-sm text-gray-600">
            <p>We may share your data with authorized parties solely for operational fulfillment:</p>
            <ul class="space-y-1.5 text-xs sm:text-sm">
              <li class="flex items-center gap-2"><i data-lucide="arrow-right" class="w-3.5 h-3.5 text-brand-blue"></i> <span><strong>Logistics Partners:</strong> Certified ocean, air, and ground carriers to execute your shipments.</span></li>
              <li class="flex items-center gap-2"><i data-lucide="arrow-right" class="w-3.5 h-3.5 text-brand-blue"></i> <span><strong>Finance &amp; Insurance Partners:</strong> Only when you explicitly apply for or select their services.</span></li>
              <li class="flex items-center gap-2"><i data-lucide="arrow-right" class="w-3.5 h-3.5 text-brand-blue"></i> <span><strong>Technology Service Providers:</strong> Secure cloud infrastructure and escrow processors under binding confidentiality.</span></li>
              <li class="flex items-center gap-2"><i data-lucide="arrow-right" class="w-3.5 h-3.5 text-brand-blue"></i> <span><strong>Regulators &amp; Law Enforcement:</strong> Where strictly required by statutory provisions or customs directives.</span></li>
            </ul>
            <div class="p-3 bg-emerald-50 rounded-2xl border border-emerald-100 text-emerald-900 font-bold text-xs flex items-center gap-2">
              <i data-lucide="shield-alert" class="w-4 h-4 text-emerald-600"></i>
              <span>Strict Guarantee: We never sell or rent your personal data to third parties.</span>
            </div>
          </div>
        </article>

        <!-- Article 6: Cross-Border Transfers -->
        <article id="cross-border" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">6</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Cross-Border Data Transfers</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            Because Omefreight operates across more than 100 countries, your data may be transferred and processed internationally to coordinate logistics corridors (e.g. Asia, Europe, North America, Africa). We enforce rigorous transfer mechanisms including Standard Contractual Clauses (SCCs), adequacy assessments, and encrypted transport protocols.
          </p>
        </article>

        <!-- Article 7: Data Retention -->
        <article id="retention" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">7</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Data Retention Periods</h2>
          </div>
          <div class="pl-11 space-y-2 text-xs sm:text-sm text-gray-600">
            <p>We retain your data only for as long as necessary for the purpose collected:</p>
            <ul class="space-y-1.5">
              <li>&bull; <strong>Logistics Services:</strong> Retained until confirmed cargo delivery plus statutory trade record-keeping periods.</li>
              <li>&bull; <strong>Compliance Records:</strong> Retained in line with NDPA 2023, GDPR, and national tax/customs laws.</li>
              <li>&bull; <strong>Marketing &amp; Bulletins:</strong> Retained until you withdraw consent or unsubscribe.</li>
            </ul>
          </div>
        </article>

        <!-- Article 8: Your Rights by Region -->
        <article id="global-rights" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">8</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Your Rights Across Global Jurisdictions</h2>
          </div>
          <div class="pl-11 space-y-4 text-xs sm:text-sm text-gray-600">
            <p>Depending on your geographic location, you are entitled to comprehensive data rights:</p>

            <div class="space-y-3">
              <div class="p-4 bg-white rounded-2xl border border-gray-200 space-y-1">
                <h4 class="font-heading font-bold text-brand-dark text-sm text-brand-blue">Nigeria (NDPA 2023)</h4>
                <p class="text-xs text-gray-600">Right to access, rectification, erasure, restriction of processing, data portability, objection, and the right to lodge a complaint with the Nigeria Data Protection Commission (NDPC).</p>
              </div>

              <div class="p-4 bg-white rounded-2xl border border-gray-200 space-y-1">
                <h4 class="font-heading font-bold text-brand-dark text-sm text-brand-blue">European Union &amp; United Kingdom (GDPR / UK GDPR)</h4>
                <p class="text-xs text-gray-600">Rights to access, correction, erasure ('right to be forgotten'), restriction, data portability, consent withdrawal, and complaint filing with your national Data Protection Authority.</p>
              </div>

              <div class="p-4 bg-white rounded-2xl border border-gray-200 space-y-1">
                <h4 class="font-heading font-bold text-brand-dark text-sm text-brand-blue">South Africa (POPIA)</h4>
                <p class="text-xs text-gray-600">Right to access, correction, destruction of records, objection to processing, and instituting civil dispute claims.</p>
              </div>

              <div class="p-4 bg-white rounded-2xl border border-gray-200 space-y-1">
                <h4 class="font-heading font-bold text-brand-dark text-sm text-brand-blue">California, USA (CCPA / CPRA)</h4>
                <p class="text-xs text-gray-600">Right to know what data is collected, right to deletion, right to opt-out, and right to non-discrimination when exercising privacy rights.</p>
              </div>
            </div>

            <p class="text-xs text-gray-500 pt-1">
              To exercise any of your rights, contact our Data Protection Officer at <a href="mailto:support@ome-hub.com" class="text-brand-blue font-bold underline">support@ome-hub.com</a>.
            </p>
          </div>
        </article>

        <!-- Article 9: Data Security -->
        <article id="security" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">9</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Data Security</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            We employ bank-grade encryption (TLS 1.3 in transit and AES-256 at rest), automated tokenization, role-based access controls, continuous vulnerability scans, and 24/7 security monitoring to safeguard your data against loss, misuse, or unauthorized modification.
          </p>
        </article>

        <!-- Article 10: Children's Data Security -->
        <article id="children" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">10</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Children's Data Security</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            Our logistics platform is strictly intended for businesses and individuals aged 18 and older. We do not knowingly collect, process, or store personal information from minors.
          </p>
        </article>

        <!-- Article 11: Cookies & Telemetry -->
        <article id="cookies" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">11</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Cookies &amp; Telemetry</h2>
          </div>
          <div class="pl-11 space-y-3 text-sm text-gray-600">
            <p>
              We utilize functional, analytical, and telemetry cookies to ensure rate calculation sessions, radar telemetry tracking, and personalized corridor suggestions function properly.
            </p>
            <div class="pt-2">
              <button type="button" onclick="openCookiePreferencesModal()" class="btn-primary text-xs py-2.5 px-5">
                <i data-lucide="sliders-horizontal" class="w-4 h-4"></i>
                <span>Open Cookie &amp; Privacy Preferences</span>
              </button>
            </div>
          </div>
        </article>

        <!-- Article 12: Changes to This Policy -->
        <article id="changes" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">12</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Changes to This Policy</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            We may periodically update this Privacy Policy to reflect advancements in technology, trade legislation, or platform capabilities. Updated versions will be published with a revised effective date.
          </p>
        </article>

        <!-- Article 13: Contact -->
        <article id="contact" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">13</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Contact Us &amp; Data Protection Officer</h2>
          </div>
          <div class="pl-11 space-y-3 text-sm text-gray-600">
            <p>If you have any questions, complaints, or wish to exercise your data rights, please contact our team:</p>
            <div class="p-4 bg-white rounded-2xl border border-gray-200 space-y-2 text-xs">
              <div><strong>Global Headquarters:</strong> 17th Floor Elephant House, 214 Broad Street, Marina, Lagos, Nigeria.</div>
              <div><strong>Regional Hub:</strong> Zone C New Market Express, Enugu, Nigeria.</div>
              <div><strong>Email:</strong> <a href="mailto:support@ome-hub.com" class="text-brand-blue font-bold underline">support@ome-hub.com</a></div>
            </div>
          </div>
        </article>

      </main>

    </div>
  </div>
</section>

@endsection