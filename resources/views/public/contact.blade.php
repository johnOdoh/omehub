@extends('public.layout.main')

@section('title', 'Contact & Support | '. config('app.name') .' Global Trade Platform')
@section('content')

<!-- Contact Hero -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/30 py-20 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-7 space-y-6">
        <span class="badge-pill badge-pill-blue">Contact Us</span>
        <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-brand-dark tracking-tight leading-tight">
          How can we <span class="text-brand-blue">help you?</span>
        </h1>
        <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-2xl">
          Whether you have a question about our platform, need a freight quote, want to join as a logistics provider, or need compliance support &mdash; we're here for you.
        </p>
        <div class="flex flex-wrap items-center gap-6 pt-2">
          <div class="flex items-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-brand-green animate-pulse"></span>
            <span class="text-sm font-bold text-gray-700">Support available 24/7</span>
          </div>
          <div class="flex items-center gap-2">
            <i data-lucide="mail" class="w-4 h-4 text-brand-blue"></i>
            <span class="text-sm font-bold text-gray-700">{{ config('app.email') }}</span>
          </div>
        </div>
      </div>

      <!-- Hero Visual on Right -->
      <div class="lg:col-span-5">
        <div class="hero-image-wrapper aspect-[4/3] group relative">
          <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=80" alt="{{ config('app.name') }} Support Team" loading="eager">
          <div class="hero-overlay-gradient"></div>

          <!-- Floating Support Desk Badge -->
          <div class="absolute bottom-5 left-5 right-5 hero-glass-card p-4 flex items-center justify-between gap-3 shadow-lg">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center font-bold">
                <i data-lucide="headphones" class="w-5 h-5"></i>
              </div>
              <div>
                <div class="text-xs font-extrabold text-brand-dark">{{ config('app.name') }} Support</div>
                <div class="text-[11px] text-gray-500">Your gateway to global trade assistance</div>
              </div>
            </div>
            <span class="text-xs font-bold text-brand-green bg-brand-green/20 px-2.5 py-1 rounded-full whitespace-nowrap">Online</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Contact Form & Routing Section -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

      <!-- Contact Form -->
      <div class="lg:col-span-7">
        <div class="card-sand p-8 sm:p-10 rounded-3xl border border-sand-border shadow-sm">
          <h3 class="font-heading font-bold text-2xl text-brand-dark mb-6">Send an Inquiry</h3>

          @if (session('success'))
            <div class="mb-6 p-4 sm:p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3.5 shadow-sm" role="alert">
              <div class="w-9 h-9 rounded-xl bg-emerald-500 text-white flex items-center justify-center flex-shrink-0 shadow-sm">
                <i data-lucide="check-circle-2" class="w-5 h-5"></i>
              </div>
              <div class="flex-1 pt-0.5">
                <div class="flex items-center justify-between">
                  <h4 class="font-heading font-bold text-sm text-emerald-950">Message Sent Successfully!</h4>
                  <button type="button" onclick="this.closest('[role=alert]').remove()" class="text-emerald-700 hover:text-emerald-950 p-1 rounded-lg transition-colors" aria-label="Dismiss">
                    <i data-lucide="x" class="w-4 h-4"></i>
                  </button>
                </div>
                <p class="text-xs text-emerald-800 mt-1 leading-relaxed">{{ session('success') }}</p>
                <div class="mt-2 text-[11px] font-semibold text-emerald-700 flex items-center gap-1.5">
                  <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                  <span>Our operations desk will review and reply within 24 hours.</span>
                </div>
              </div>
            </div>
          @endif

          <form action="{{ route('contact-us') }}" class="space-y-5" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Full Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required placeholder="Jane Doe" class="w-full bg-white border @error('name') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none">
                @error('name')
                  <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                    <span>{{ $message }}</span>
                  </p>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="jane.doe@company.com" class="w-full bg-white border @error('email') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none">
                @error('email')
                  <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                    <span>{{ $message }}</span>
                  </p>
                @enderror
              </div>
            </div>

            <div>
              <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Subject</label>
              <input type="text" name="subject" value="{{ old('subject') }}" required placeholder="Global Retail Corp" class="w-full bg-white border @error('subject') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none">
              @error('subject')
                <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                  <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                  <span>{{ $message }}</span>
                </p>
              @enderror
            </div>

            <div>
              <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Message</label>
              <textarea name="message" rows="4" required placeholder="Provide your specific requirements..." class="w-full bg-white border @error('message') border-rose-500 focus:border-rose-500 @else border-gray-200 focus:border-brand-blue @enderror rounded-xl p-4 text-sm text-brand-dark focus:outline-none">{{ old('message') }}</textarea>
              @error('message')
                <p class="text-xs text-rose-600 mt-1 font-medium flex items-center gap-1">
                  <i data-lucide="alert-circle" class="w-3.5 h-3.5 flex-shrink-0"></i>
                  <span>{{ $message }}</span>
                </p>
              @enderror
            </div>

            <button type="submit" class="w-full btn-primary py-3.5 text-sm font-bold shadow-lg shadow-brand-blue/30 justify-center">
              <span>Send Message to Operations Desk</span>
              <i data-lucide="send" class="w-4 h-4"></i>
            </button>
          </form>
        </div>
      </div>

      <!-- Contact Info & Fast Lines -->
      <div class="lg:col-span-5 space-y-6">

        <div class="bg-brand-dark text-white p-8 rounded-3xl space-y-4">
          <span class="badge-pill bg-brand-green/20 text-brand-green text-xs">Support Center</span>
          <h3 class="font-heading font-bold text-2xl text-white">Get Assistance</h3>
          <p class="text-xs text-gray-300 leading-relaxed">
            Need help with a shipment, a quote, or understanding our platform? Our team is available to guide you through every step of the process.
          </p>
          <div class="space-y-3 pt-2 text-xs">
            <div class="flex items-center gap-3">
              <i data-lucide="mail" class="w-4 h-4 text-brand-green"></i>
              <span class="text-white font-bold">{{ config('app.email') }}</span>
            </div>
            <div class="flex items-center gap-3">
              <i data-lucide="map-pin" class="w-4 h-4 text-brand-green"></i>
              <span class="text-white font-bold">{{ config('app.address') }}</span>
            </div>
            <div class="flex items-center gap-3">
              <i data-lucide="map-pin" class="w-4 h-4 text-brand-green"></i>
              <span class="text-white font-bold">{{ config('app.address2') }}</span>
            </div>
          </div>
        </div>

        <div class="bg-white p-8 rounded-3xl border border-sand-border space-y-4 shadow-sm">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="shield-check" class="w-4 h-4"></i>
                <span>Official Data Protection Certification</span>
            </div>
            <h3 class="font-heading font-bold text-2xl text-brand-dark">Certified Data Controller</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Omefreight Logistics Ltd () is duly registered and certified by the <strong>Nigeria Data Protection Commission (NDPC)</strong> as a Data Controller of Major Importance (Ultra-High Level).
            </p>
            <div class="p-4 rounded-xl bg-sand-light border border-sand-border flex items-center justify-between">
                <span class="text-xs text-gray-500 font-medium">Official NDPC Registration</span>
                <span class="text-xs font-mono font-bold text-brand-blue bg-brand-blue-light px-2.5 py-1 rounded-lg">REGISTRATION ID: NDPC/DCP/09043</span>
            </div>
        </div>

      </div>
    </div>
  </div>

</section>

<!-- Office Hubs & Regulatory Accreditation Section -->
<section id="locations" class="py-20 bg-sand-light">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11211.354381233472!2d3.3297740655792443!3d6.545363083229936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8e7545e1069f%3A0xfed691739a3abc5e!2sToyota%20Bus%20Stop!5e0!3m2!1sen!2sng!4v1753340497788!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>
</section>

@endsection
