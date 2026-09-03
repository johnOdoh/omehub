@extends('public.layout.public')

@section('title', 'Contact & Support | OmeHub Global Trade Platform')
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
            <span class="text-sm font-bold text-gray-700">info@ome-hub.com</span>
          </div>
        </div>
      </div>

      <!-- Hero Visual on Right -->
      <div class="lg:col-span-5">
        <div class="hero-image-wrapper aspect-[4/3] group relative">
          <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=80" alt="OmeHub Support Team" loading="eager">
          <div class="hero-overlay-gradient"></div>

          <!-- Floating Support Desk Badge -->
          <div class="absolute bottom-5 left-5 right-5 hero-glass-card p-4 flex items-center justify-between gap-3 shadow-lg">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center font-bold">
                <i data-lucide="headphones" class="w-5 h-5"></i>
              </div>
              <div>
                <div class="text-xs font-extrabold text-brand-dark">OmeHub Support</div>
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

          <form onsubmit="event.preventDefault(); alert('Inquiry received! An omehub freight coordinator will respond within 2 business hours.');" class="space-y-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">First & Last Name</label>
                <input type="text" required placeholder="Jane Doe" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none focus:border-brand-blue">
              </div>
              <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Company Name</label>
                <input type="text" required placeholder="Global Retail Corp" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none focus:border-brand-blue">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Work Email</label>
                <input type="email" required placeholder="jane.doe@company.com" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none focus:border-brand-blue">
              </div>
              <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Inquiry Type</label>
                <select class="w-full bg-white border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-brand-dark focus:outline-none focus:border-brand-blue">
                  <option value="shipper-quote">Enterprise Freight Quote / RFQ</option>
                  <option value="carrier-partner">Logistics Provider / Carrier Onboarding</option>
                  <option value="tech-api">API Integration & Developer Key</option>
                  <option value="customs">Customs Clearance Consultation</option>
                  <option value="press">Press & Media Inquiries</option>
                </select>
              </div>
            </div>

            <div>
              <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Message / Shipment Details</label>
              <textarea rows="4" required placeholder="Provide origin, destination, estimated TEU volume, or your specific requirements..." class="w-full bg-white border border-gray-200 rounded-xl p-4 text-sm text-brand-dark focus:outline-none focus:border-brand-blue"></textarea>
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
              <span class="text-white font-bold">info@ome-hub.com</span>
            </div>
            <div class="flex items-center gap-3">
              <i data-lucide="globe" class="w-4 h-4 text-brand-green"></i>
              <span class="text-white font-bold">ome-hub.com</span>
            </div>
          </div>
        </div>

        <div class="card-sand p-6 rounded-2xl border border-sand-border space-y-3">
          <h4 class="font-heading font-bold text-base text-brand-dark">Join as a Logistics Provider</h4>
          <p class="text-xs text-gray-600">
</section>

<!-- Office Hubs & Regulatory Accreditation Section -->
<section id="locations" class="py-20 bg-sand-light">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      
      <!-- Accreditation Note -->
      <div class="lg:col-span-6 bg-white p-8 rounded-3xl border border-sand-border space-y-4 shadow-sm">
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

      <!-- Locations -->
      <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
        
        <!-- Lagos Hub -->
        <div class="bg-white p-6 rounded-3xl border border-sand-border space-y-3 shadow-sm">
          <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center">
            <i data-lucide="map-pin" class="w-5 h-5"></i>
          </div>
          <h4 class="font-heading font-bold text-base text-brand-dark">Lagos Hub, Nigeria</h4>
          <p class="text-xs text-gray-600 leading-relaxed">
            17th Floor Elephant House,<br>
            214 Broad Street, Marina,<br>
            Lagos, Nigeria.
          </p>
          <div class="text-xs text-brand-blue font-bold pt-1">support@ome-hub.com</div>
        </div>

        <!-- Enugu Hub -->
        <div class="bg-white p-6 rounded-3xl border border-sand-border space-y-3 shadow-sm">
          <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center">
            <i data-lucide="map-pin" class="w-5 h-5"></i>
          </div>
          <h4 class="font-heading font-bold text-base text-brand-dark">Enugu Hub, Nigeria</h4>
          <p class="text-xs text-gray-600 leading-relaxed">
            Zone C New Market Express,<br>
            Enugu, Nigeria.
          </p>
          <div class="text-xs text-brand-blue font-bold pt-1">support@ome-hub.com</div>
        </div>

      </div>

    </div>

  </div>
</section>

@endsection
