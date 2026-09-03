@extends('public.layout.public')

@section('title', 'Terms of Service')
@section('content')

<!-- Terms Page Header -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/40 py-16 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
  
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-4 text-center">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue-light text-brand-blue text-xs font-bold uppercase tracking-wider">
      <i data-lucide="scale" class="w-3.5 h-3.5"></i>
      <span>Legal Agreement &bull; Terms of Service</span>
    </div>

    <h1 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-brand-dark tracking-tight">
      Our Terms and Conditions
    </h1>

    <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
      Please read these terms carefully before registering or using the OmeHub digital logistics marketplace and trade support services.
    </p>

    <div class="flex items-center justify-center gap-4 text-xs text-gray-500 pt-2 flex-wrap">
      <span class="flex items-center gap-1.5"><i data-lucide="calendar" class="w-4 h-4 text-brand-blue"></i> Effective: 2026</span>
      <span>&bull;</span>
      <span class="flex items-center gap-1.5"><i data-lucide="shield-check" class="w-4 h-4 text-brand-green"></i> NDPC Certified</span>
      <span>&bull;</span>
      <span class="flex items-center gap-1.5"><i data-lucide="globe-2" class="w-4 h-4 text-brand-blue"></i> Global Jurisdiction</span>
    </div>
  </div>
</section>

<!-- Terms Content Layout with Sticky Sidebar -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      
      <!-- Sticky Navigation Sidebar -->
      <aside class="hidden lg:block lg:col-span-4 sticky top-28 space-y-6">
        <div class="card-sand p-6 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <h3 class="font-heading font-bold text-base text-brand-dark flex items-center gap-2">
            <i data-lucide="list" class="w-4 h-4 text-brand-blue"></i>
            <span>Table of Contents</span>
          </h3>

          <nav class="space-y-1 text-xs font-medium text-gray-600">
            <a href="#acceptance" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">1. Acceptance of Terms</a>
            <a href="#eligibility" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">2. Eligibility</a>
            <a href="#platform-use" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">3. Platform Use</a>
            <a href="#payments" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">4. Payments</a>
            <a href="#refund-policy" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">5. Refund Policy</a>
            <a href="#finance-insurance" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">6. Trade Finance &amp; Insurance</a>
            <a href="#user-responsibilities" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">7. User Responsibilities</a>
            <a href="#disputes-claims" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">8. Disputes &amp; Claims</a>
            <a href="#intellectual-property" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">9. Intellectual Property</a>
            <a href="#termination" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">10. Termination</a>
            <a href="#governing-law" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">11. Governing Law</a>
          </nav>
        </div>

        <!-- Support Card -->
        <div class="card-sand p-6 rounded-3xl bg-brand-dark text-white space-y-3">
          <div class="w-9 h-9 rounded-xl bg-brand-blue flex items-center justify-center text-white">
            <i data-lucide="help-circle" class="w-4 h-4"></i>
          </div>
          <h4 class="font-heading font-bold text-sm text-white">Questions about our Terms?</h4>
          <p class="text-xs text-gray-400 leading-relaxed">
            Our legal compliance team is available to assist you with any questions regarding user terms and cross-border shipping agreements.
          </p>
          <a href="mailto:support@ome-hub.com" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-green hover:underline pt-1">
            <span>support@ome-hub.com</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </aside>

      <!-- Main Legal Articles -->
      <main class="lg:col-span-8 space-y-10 text-gray-700 leading-relaxed font-sans">
        
        <!-- Article 1 -->
        <article id="acceptance" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">1</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Acceptance of Terms</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            By registering on OmeHub, creating an account, accessing our website, or using any of our logistics services, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, you may not access or use the platform.
          </p>
        </article>

        <!-- Article 2 -->
        <article id="eligibility" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">2</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Eligibility</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            Only users who provide valid government-issued identification (individuals) or verified legal business registration documents (companies) are permitted to access and conduct transactions through our services. All registrations undergo verification in compliance with Know Your Customer (KYC) regulations.
          </p>
        </article>

        <!-- Article 3 -->
        <article id="platform-use" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">3</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Platform Use</h2>
          </div>
          
          <div class="pl-11 space-y-4">
            <div>
              <h4 class="font-heading font-bold text-sm text-brand-dark mb-2 text-emerald-700 flex items-center gap-1.5">
                <i data-lucide="check-circle" class="w-4 h-4"></i> You may use this platform to:
              </h4>
              <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-gray-600">
                <li class="flex items-center gap-2 bg-white p-2.5 rounded-xl border border-gray-100"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-blue"></i> <span>Request instant freight quotes</span></li>
                <li class="flex items-center gap-2 bg-white p-2.5 rounded-xl border border-gray-100"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-blue"></i> <span>Book ocean, air &amp; road logistics</span></li>
                <li class="flex items-center gap-2 bg-white p-2.5 rounded-xl border border-gray-100"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-blue"></i> <span>Apply for cargo insurance &amp; finance</span></li>
                <li class="flex items-center gap-2 bg-white p-2.5 rounded-xl border border-gray-100"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-blue"></i> <span>Submit claims through legal support</span></li>
                <li class="flex items-center gap-2 bg-white p-2.5 rounded-xl border border-gray-100 sm:col-span-2"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-blue"></i> <span>Engage in the trade community bulletin</span></li>
              </ul>
            </div>

            <div>
              <h4 class="font-heading font-bold text-sm text-red-600 mb-2 flex items-center gap-1.5">
                <i data-lucide="alert-circle" class="w-4 h-4"></i> You may not:
              </h4>
              <ul class="space-y-2 text-xs text-gray-600">
                <li class="flex items-center gap-2 bg-rose-50 p-2.5 rounded-xl border border-rose-100 text-rose-900"><i data-lucide="x" class="w-3.5 h-3.5 text-rose-600"></i> <span>Provide false, misleading, or fraudulent identity or shipment information</span></li>
                <li class="flex items-center gap-2 bg-rose-50 p-2.5 rounded-xl border border-rose-100 text-rose-900"><i data-lucide="x" class="w-3.5 h-3.5 text-rose-600"></i> <span>Use the platform for illegal, hazardous, or restricted cargo</span></li>
                <li class="flex items-center gap-2 bg-rose-50 p-2.5 rounded-xl border border-rose-100 text-rose-900"><i data-lucide="x" class="w-3.5 h-3.5 text-rose-600"></i> <span>Violate international embargo rules or trade sanctions</span></li>
              </ul>
            </div>
          </div>
        </article>

        <!-- Article 4 -->
        <article id="payments" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">4</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Payments</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            All payments are processed securely post-completion of services unless otherwise specified (e.g. upon confirmed delivery or verified policy activation). OmeHub is not responsible for financial disputes or transactions conducted outside the platform’s official payment escrow system.
          </p>
        </article>

        <!-- Article 5 -->
        <article id="refund-policy" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">5</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Refund Policy</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            OmeHub provides refunds only in cases where a paid service has not been rendered or where a duplicate payment was made in error. Refund requests must be submitted in writing to <a href="mailto:support@ome-hub.com" class="text-brand-blue underline font-bold">support@ome-hub.com</a> within <strong>7 business days</strong> of payment. Services that have already commenced, including booked freight container allocations, active customs processing, or third-party handling, are non-refundable.
          </p>
        </article>

        <!-- Article 6 -->
        <article id="finance-insurance" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">6</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Trade Finance &amp; Insurance</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            Services offered by third-party financial institutions and insurance underwriters are subject to their own respective terms, conditions, and underwriting approvals. OmeHub facilitates the structured digital transaction but does not directly underwrite, issue loans, or guarantee financing approvals.
          </p>
        </article>

        <!-- Article 7 -->
        <article id="user-responsibilities" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">7</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">User Responsibilities</h2>
          </div>
          
          <div class="pl-11 space-y-2">
            <p class="text-sm text-gray-600">By booking shipments on OmeHub, you formally confirm that:</p>
            <ul class="space-y-2 text-xs sm:text-sm text-gray-600">
              <li class="flex items-start gap-2.5"><i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i> <span>The declared goods are legal, non-restricted, and comply with international maritime/aviation safety codes.</span></li>
              <li class="flex items-start gap-2.5"><i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i> <span>You will fully comply with all national and international export/import regulations, customs duties, and HS code declarations.</span></li>
              <li class="flex items-start gap-2.5"><i data-lucide="check-circle-2" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i> <span>You have full legal authority to enter into agreements on behalf of your registered company (if applicable).</span></li>
            </ul>
          </div>
        </article>

        <!-- Article 8 -->
        <article id="disputes-claims" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">8</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Disputes and Claims</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            All shipment discrepancies, damages, delays, or contract disputes must be submitted directly through the platform’s legal support feature within your dashboard. Dispute resolution will follow OmeHub’s formal escalation protocol and mediation windows.
          </p>
        </article>

        <!-- Article 9 -->
        <article id="intellectual-property" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">9</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Intellectual Property</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            OmeHub, its software algorithms, rate calculation engines, vessel tracking radar interfaces, logos, designs, visuals, and tools are the proprietary intellectual property of Omefreight Logistics Ltd. You may not copy, reverse-engineer, modify, scrape, or reuse any platform content without prior written permission.
          </p>
        </article>

        <!-- Article 10 -->
        <article id="termination" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">10</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Termination</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            OmeHub reserves the exclusive right to suspend or permanently terminate user or corporate accounts that violate these Terms and Conditions, engage in fraudulent bookings, or breach trade compliance rules, with or without prior notice.
          </p>
        </article>

        <!-- Article 11 -->
        <article id="governing-law" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">11</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Governing Law</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            These Terms and Conditions shall be governed by and construed in accordance with the laws of the Federal Republic of Nigeria in alignment with international trade law, maritime conventions, and bilateral trade frameworks, without regard to conflict of law principles.
          </p>
        </article>

      </main>

    </div>
  </div>
</section>

@endsection