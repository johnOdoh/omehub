<!-- Frequently Asked Questions (FAQ) Section -->
<section id="faq" class="py-24 bg-white border-b border-sand-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-3xl mx-auto text-center mb-16 space-y-3">
      <span class="badge-pill badge-pill-blue">FAQ</span>
      <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark tracking-tight">
        Frequently Asked Questions
      </h2>
      <p class="text-gray-600 text-base leading-relaxed">
        Below are answers to the most common questions our users ask about shipping, compliance, payments, and services.
      </p>
    </div>

    <!-- FAQ Accordion Container (Group 1 & Group 2 in 2 Columns) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 faq-accordion-group items-start">
      
      <!-- Column 1 -->
      <div class="space-y-4">
        
        <!-- FAQ 1 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>What is {{ config('app.name') }}?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              {{ config('app.name') }} is a digital logistics marketplace where individuals and companies can book freight services, request quotes, access trade finance and insurance, track shipments, and receive legal or compliance support &mdash; all in one secure platform.
            </p>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>Who can use {{ config('app.name') }}?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed mb-2">Anyone involved in international trade:</p>
            <ul class="space-y-1.5 text-xs sm:text-sm text-gray-600">
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span><strong>Individuals</strong> shipping goods personally</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span><strong>Companies</strong> moving commercial cargo</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span><strong>Logistics partners</strong> providing freight services</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span><strong>Finance, insurance &amp; legal professionals</strong> supporting transactions</span></li>
            </ul>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>Is there a registration fee?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              Registration is free for all users. However, companies are required to pay a small monthly subscription fee, which ranges from $50 to $100, depending on their scale and how many team members they wish to grant platform access. This fee ensures secure, multi-user functionality, advanced shipment management, and access to enterprise-level support.
            </p>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>What kind of services can I access on {{ config('app.name') }}?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed mb-2">You can:</p>
            <ul class="space-y-1.5 text-xs sm:text-sm text-gray-600">
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span>Get instant quotes from multiple logistics providers</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span>Track your shipments in real-time</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span>Apply for trade finance</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span>Purchase cargo insurance</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span>Offset your shipment's CO₂ emissions</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span>Raise claims and resolve disputes through legal support</span></li>
              <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-brand-blue"></i> <span>Join the trade community forum and share updates</span></li>
            </ul>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>How does the payment process work?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              You only pay after services are completed (e.g. after shipment is delivered or insurance policy is activated). All payments are processed securely within the platform.
            </p>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>How does {{ config('app.name') }} ensure compliance?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              {{ config('app.name') }} blocks all embargoed countries from selection as shipping origin or destination. Shippers must also declare that their goods are not banned or prohibited before any transaction can proceed.
            </p>
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>Is {{ config('app.name') }} available globally?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              Yes. {{ config('app.name') }} is available to users worldwide. The platform is designed to support international logistics, regardless of your location. Services may be tailored based on regional regulations or availability, but shippers and service providers from all countries can register and operate through {{ config('app.name') }}.
            </p>
          </div>
        </div>

      </div>

      <!-- Column 2 -->
      <div class="space-y-4">

        <!-- FAQ 8 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>How do I apply for trade finance?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              Once your shipment is booked and marked as &ldquo;In Transit,&rdquo; you’ll see a button to request trade finance. Companies and individuals may apply directly from the dashboard.
            </p>
          </div>
        </div>

        <!-- FAQ 9 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>Is cargo insurance required?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              Insurance is optional but highly recommended. You can choose comprehensive coverage during or after booking your shipment to safeguard against transit risks.
            </p>
          </div>
        </div>

        <!-- FAQ 10 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>Can I track my shipment inside {{ config('app.name') }}?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              Yes! Logistics providers generate tracking numbers via {{ config('app.name') }}. You’ll see live tracking updates and milestones directly in your dashboard as the shipment progresses.
            </p>
          </div>
        </div>

        <!-- FAQ 11 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>What is CO₂ offsetting and how does it work?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              After selecting a logistics quote, {{ config('app.name') }} will offer you the option to offset the carbon footprint of your shipment. Emissions are automatically calculated based on your shipment data, and you can choose to contribute to our in-house carbon offset program before completing your booking. At the end of each year, you will receive a personalized carbon offset certificate, recognizing your contribution to a more sustainable and environmentally responsible trade ecosystem.
            </p>
          </div>
        </div>

        <!-- FAQ 12 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>What happens if there’s a dispute?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              You can raise a claim directly in your dashboard. The {{ config('app.name') }} legal team will be notified and will work with all parties to resolve the issue. Timing and response windows are strictly enforced to ensure speed and fairness.
            </p>
          </div>
        </div>

        <!-- FAQ 13 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>How secure is the platform?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <p class="text-gray-600 text-sm leading-relaxed">
              {{ config('app.name') }} uses bank-grade encryption, identity verification, and KYC procedures for companies and individuals. All transactions are logged, and access to sensitive data is strictly restricted and monitored.
            </p>
          </div>
        </div>

        <!-- FAQ 14 -->
        <div class="faq-accordion-item">
          <button type="button" class="faq-btn">
            <span>What documents do I need to register?</span>
            <i data-lucide="chevron-down" class="faq-icon"></i>
          </button>
          <div class="faq-content">
            <div class="space-y-2 text-sm text-gray-600">
              <p><strong>Individuals:</strong> Valid government-issued ID (e.g., passport, national ID).</p>
              <p><strong>Companies:</strong> Company registration number, legal business documents, registered name, and authorized contact details.</p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>