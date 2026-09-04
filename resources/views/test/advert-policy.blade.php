@extends('public.layout.public')

@section('title', 'Advertising & Blog Policy')
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
      Our Advertising & Blog Policy
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
            <a href="#purpose" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">1. Purpose</a>
            <a href="#user-responsibility" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">2. User Responsibility</a>
            <a href="#role" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">3. Omefreight's Role</a>
            <a href="#data-and-privacy" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">4. Data & Privacy</a>
            <a href="#fees-terms" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">5. Fees % Commercial Terms</a>
            <a href="#disclaimer" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">6. Disclaimer</a>
            <a href="#enforcement" class="block p-2 rounded-xl hover:bg-white hover:text-brand-blue transition-colors">7. Enforcement</a>
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

        <!-- Article 1: Purpose -->
        <article id="purpose" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">1</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Purpose</h2>
          </div>
          <p class="text-sm leading-relaxed text-gray-600 pl-11">
            Omefreight provides a blog and advertising feature (“Blog Option”) that allows registered users and partners to share articles, insights, and promotional content related to logistics, shipping, sustainability, finance, insurance, and other relevant industries. This Policy sets out the rules for using this feature.
          </p>
        </article>

        <!-- Article 2: User Responsibility -->
        <article id="user-responsibility" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">2</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">User Responsibility</h2>
          </div>
          <div class="pl-11 space-y-3">
            <ul class="space-y-2 text-xs sm:text-sm text-gray-600">
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="user-check" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>You are solely responsible for the content you publish, including accuracy, legality, and compliance with applicable laws.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="package" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>By submitting content, you confirm that you own all rights (including images, trademarks, and logos) or have obtained proper permission.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="credit-card" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>You must not post any content that is illegal, misleading, defamatory, discriminatory, infringing, or offensive.</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Article 3: Omefreight's Role -->
        <article id="role" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">3</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Omefreight's Role</h2>
          </div>
          <div class="pl-11 space-y-3">
            <ul class="space-y-2 text-xs sm:text-sm text-gray-600">
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="user-check" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Omefreight does not endorse or guarantee the accuracy of user-submitted content.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="package" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Advertisements and blog posts are the responsibility of the author/advertiser.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="credit-card" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Omefreight may remove or edit any content at its sole discretion if it violates this Policy or applicable law.</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Article 4: Data & Privacy -->
        <article id="data-and-privacy" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">4</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Data & Privacy</h2>
          </div>
          <div class="pl-11 space-y-3">
            <ul class="space-y-2 text-xs sm:text-sm text-gray-600">
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="user-check" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>If your advertisement or blog post collects personal information (e.g., via contact forms or links), you must comply with data protection laws, including the Nigeria Data Protection Act (NDPA) and other applicable international regulations (GDPR, POPIA, CCPA, etc.).</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="package" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Omefreight may process personal data submitted with advertisements/blog posts in line with its <a href="{{ route('public.privacy') }}" target="_blank">Privacy Policy.</a></span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Article 5: Fees & Commercial Terms -->
        <article id="fees-terms" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">5</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Fees & Commercial Terms</h2>
          </div>
          <div class="pl-11 space-y-3">
            <ul class="space-y-2 text-xs sm:text-sm text-gray-600">
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="user-check" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Omefreight reserves the right to charge a fee for advertising services or sponsored posts.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="package" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Any paid advertising will be clearly labeled as “Sponsored” or “Advertisement”.</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Article 6: Disclaimer -->
        <article id="disclaimer" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">6</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Disclaimer</h2>
          </div>
          <div class="pl-11 space-y-3">
            <ul class="space-y-2 text-xs sm:text-sm text-gray-600">
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="user-check" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Content posted in the Blog Option reflects the views of the author/advertiser and not Omefreight.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="package" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Omefreight is not liable for any loss, damage, or reliance arising from user submitted content. Users are encouraged to verify details directly with the advertiser before making decisions.</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Article 7: Enforcement -->
        <article id="enforcement" class="p-8 rounded-3xl bg-sand-light border border-sand-border space-y-3">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue font-bold flex items-center justify-center text-sm flex-shrink-0">7</span>
            <h2 class="font-heading font-bold text-xl text-brand-dark">Enforcement</h2>
          </div>
          <div class="pl-11 space-y-2 text-xs sm:text-sm text-gray-600">
            <ul class="space-y-1.5">
                <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="user-check" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Violation of this Policy may result in removal of content, suspension of account, or termination of access to the Blog Option.</span>
              </li>
              <li class="flex items-start gap-2 bg-white p-3 rounded-2xl border border-gray-100">
                <i data-lucide="package" class="w-4 h-4 text-brand-blue flex-shrink-0 mt-0.5"></i>
                <span>Omefreight reserves the right to cooperate with regulators or law enforcement where necessary.</span>
              </li>
            </ul>
          </div>
        </article>

      </main>

    </div>
  </div>
</section>

@endsection
