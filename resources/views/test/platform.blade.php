@extends('public.layout.public')

@section('title', 'Platform | '. config('app.name') .' Digital Freight Platform')
@section('content')

<!-- Platform Hero -->
<section class="relative bg-gradient-to-b from-white via-sand-light to-sand/30 py-20 border-b border-sand-border overflow-hidden">
  <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-7 space-y-6">
        <span class="badge-pill badge-pill-blue">Platform Services</span>
        <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-brand-dark tracking-tight leading-tight">
          The digital operating system for <span class="text-brand-blue">global shipping.</span>
        </h1>
        <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-2xl">
          Say goodbye to fragmented spreadsheets, scattered email threads, and blind transit windows. {{ config('app.name') }} centralizes every container, carrier quote, customs document, and carbon metric into one intuitive platform. We bring together every essential trade service under one roof, so you can quote, book, track, finance, and resolve disputes with confidence.
        </p>
      </div>

      <!-- Hero Visual on Right -->
      <div class="lg:col-span-5">
        <div class="hero-image-wrapper aspect-[4/3] group relative bg-brand-dark">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" alt="{{ config('app.name') }} Supply Chain Control Tower and Real-Time Telemetry Dashboard" loading="eager">
          <div class="hero-overlay-gradient"></div>

          <!-- Floating Live Telemetry Badge -->
          <div class="absolute bottom-5 left-5 right-5 hero-glass-card-dark p-4 flex items-center justify-between gap-3">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-brand-blue flex items-center justify-center font-mono font-bold text-white text-xs">
                <i data-lucide="cpu" class="w-5 h-5"></i>
              </div>
              <div>
                <div class="text-xs font-bold text-white">AI Predictive Engine</div>
                <div class="text-[11px] text-gray-300 font-mono">ETA Accuracy: 99.4% • 12ms Latency</div>
              </div>
            </div>
            <span class="text-xs font-bold text-brand-green bg-brand-green/20 px-2.5 py-1 rounded-full whitespace-nowrap">Online</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Feature 1: Quote & Book Freight -->
<section id="quote-and-book-freight" class="py-24 bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-blue/10 flex items-center justify-center text-brand-blue">
          <i data-lucide="file-text" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Quote & Book Freight
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          Shipping cargo whether across borders or locally can often feel overwhelming. Between negotiating rates, managing documentation, and trying to find a reliable logistics partner, things can quickly get complicated. {{ config('app.name') }} was built to change that. With our platform, users can easily get freight quotes and book shipments from trusted logistics providers all over the world, in just a few clicks. No more chasing emails or waiting days for pricing confirmations. Everything happens in real time, and all options are laid out clearly for you to choose what works best for your shipment.
        </p>
        <h4 class="font-extrabold text-brand-dark">Trusted Partners, Instant Access</h4>
        <p class="text-gray-600 text-base leading-relaxed">
          {{ config('app.name') }} connects you to a global network of thoroughly verified logistics providers. Whether you’re shipping by air, sea, road, or rail, you can rely on competitive, transparent freight quotes tailored to your needs.Just input your pick-up and delivery details, cargo info, and weight or volume. In moments, you'll see real-time offers from trusted carriers complete with pricing, delivery times, reviews, and extras like eco-friendly options.From booking to documentation, insurance, and support, the entire shipment process flows in one smooth, secure experience. {{ config('app.name') }} replaces the old back-and-forth with clarity, speed, and confidence making shipping smarter and more reliable.
        </p>
      </div>
      <div class="lg:col-span-6">
        <img src="{{ asset('assets/img/services/quote-and-book.webp') }}" alt="quote and book freight" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- Feature 2: Track Shipment -->
<section id="track-shipment" class="py-24 bg-sand-light border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 order-2 lg:order-1">
        <img src="{{ asset('assets/img/services/track.webp') }}" alt="track shipment" loading="eager">
      </div>
      <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-dark/15 flex items-center justify-center text-gray-600">
          <i data-lucide="truck" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Track Shipment
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
            One of the biggest challenges in logistics is not knowing where your goods are or when they will arrive. Delays happen, but uncertainty should not. That’s why {{ config('app.name') }} offers a fully integrated tracking feature that gives you real-time visibility on all your shipments, no matter the freight mode or destination.
        </p>
        <p class="text-gray-600 text-base leading-relaxed">
            From the moment your cargo is picked up, the system begins collecting tracking data and status updates directly from the logistics provider. These updates are displayed on your dashboard in a clear, timeline-based view. You can see the exact location of your shipment, estimated delivery time, and any potential disruptions such as customs delays, weather issues, or port congestion.
        </p>
        <p class="text-gray-600 text-base leading-relaxed">
            You don’t have to chase updates manually. Instead, you receive automatic notifications at key checkpoints, such as when your goods depart the warehouse, arrive at a port, clear customs, or are out for final delivery. You can also opt-in to receive updates via email or SMS, keeping both you and your customer in the loop.
        </p>
        <h3 class="font-extrabold text-brand-dark">Transparency Builds Confidence</h3>
        <p class="text-gray-600 text-base leading-relaxed">
            Whether you're a small business shipping for the first time or a large company managing multiple deliveries, visibility helps reduce stress and improve planning. If a delay occurs, you can take proactive steps rescheduling customer deliveries, managing stock, or informing your team before the issue becomes a problem.
        </p>
        <p class="text-gray-600 text-base leading-relaxed">
            What makes {{ config('app.name') }}’s tracking unique is that it works across providers and transport types in one dashboard. That means whether your shipment is moving via truck in Europe, by ocean from Asia, or by air to Africa, you don’t have to use different systems to stay updated.
        </p>
        <p class="text-gray-600 text-base leading-relaxed">
            This level of transparency and automation empowers you to manage logistics more strategically. Instead of reacting to problems, you’ll stay a step ahead making your business more reliable, responsive, and trusted by your customers.
        </p>
        <div class="pt-2">
          <a href="{{ route('public.tracking') }}" class="btn-primary text-xs sm:text-sm py-2.5 px-5">
            Use our Real-Time Tracking Tool
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Feature 3: Trade Finance -->
<section id="trade-finance" class="py-24 bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-dark/10 flex items-center justify-center text-brand-dark">
          <i data-lucide="banknote" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Trade Finance
        </h2>
        <p>
            For many businesses, one of the biggest hurdles in international trade is access to capital. That’s why {{ config('app.name') }} integrates trade finance solutions directly into its platform, giving companies a smarter and more accessible way to fund their shipments.
        </p>
        <p>
            Once a shipment is booked and in transit, registered companies can apply for financing right through the hub. This gives them time to arrange cash flow while their goods are on the move. The process is fast, paperless, and transparent. You upload your documents, choose from available options, and get notified of approval—all within your dashboard.
        </p>
        <p>
            We’ve partnered with reliable financial providers. This tailored access ensures that both growing businesses and experienced traders can benefit.
        </p>
        <h4 class="font-extrabold text-brand-dark">Flexible Terms. Fast Processing</h4>
        <p>
            Depending on your eligibility and provider, you may receive deferred payment options, purchase order financing, or invoice-backed loans. The goal is to help you ship now and pay later reducing the stress of upfront costs.
        </p>
        <p>
            {{ config('app.name') }} simplifies trade finance into a few clicks, making international trade smoother, smarter, and more inclusive for everyone.
        </p>
      </div>
      <div class="lg:col-span-6">
        <img src="{{ asset('assets/img/services/finance.webp') }}" alt="trade finance" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- Feature 2: Resolve Disputes -->
<section id="resolve-disputes" class="py-24 bg-sand-light border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 order-2 lg:order-1">
        <img src="{{ asset('assets/img/services/resolve-disputes.webp') }}" alt="resolve disputes" loading="eager">
      </div>
      <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-blue/15 flex items-center justify-center text-yellow-600">
          <i data-lucide="scale" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Resolve Disputes & Claims
        </h2>
        <p>
            In international logistics, even the best planning cannot eliminate all risks. Miscommunication, delays, unexpected charges, lost goods, or policy disputes can happen, especially when working across multiple borders and service providers. That’s why {{ config('app.name') }} goes beyond booking and tracking. We provide a built-in legal support system to help users resolve claims and disputes directly on the platform.
        </p>
        <p>
            If something goes wrong during or after a shipment, the shipper can launch a claim or raise a dispute from their dashboard. They’ll be prompted to submit relevant documents, describe the issue, and attach proof like photos, delivery records, or contracts. This automatically notifies the party involved, be it the freight company, insurance provider, or finance partner.
        </p>
        <p>
            What sets {{ config('app.name') }} apart is our integration of a dedicated legal service run by a verified registered law firm that specializes in trade and transport. This legal team acts as a neutral third-party facilitator for conflict resolution. If the matter escalates, the legal support team will review documentation and mediate the issue with both parties.
        </p>
        <h4 class="font-extrabold text-brand-dark">Built-In Protection for Fairer Trade</h4>
        <p>
            The goal is simple: keep trade fair, efficient, and transparent. Legal support is available to both individuals and companies. For complex issues, a formal claim process can be initiated with full legal oversight.
        </p>
        <p>
            This feature builds confidence and accountability across the platform. Everyone knows that if something goes wrong, there’s a trusted system, and a legal team to step in.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Feature 3: Carbon Offset -->
<section id="offset" class="py-24 bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-green/10 flex items-center justify-center text-brand-green">
          <i data-lucide="leaf" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Offset CO₂ Emissions
        </h2>
        <h4 class="font-extrabold text-brand-green">Trade Smarter. Trade Greener.</h4>
        <p>
            Every shipment contributes to carbon emissions. {{ config('app.name') }} helps you take responsibility with a built-in carbon offset feature. Once you choose a freight quote, the system automatically calculates your shipment’s estimated emissions based on cargo weight, transport mode, and distance.
        </p>
        <p>
            You will then be offered the option to offset that carbon impact with a simple one-click choice. The contribution goes directly to verified sustainability projects, such as reforestation or clean energy. These projects are supported by reputable environmental partners to ensure your funds make a real impact.
        </p>
        <p>
            There is no need to leave the platform or calculate anything manually. Everything is presented clearly during your booking process. At the end of the year, you receive a personalized certificate showing how much you helped offset.
        </p>
        <p>
            This feature supports both individuals and businesses who care about the planet and want to make shipping more sustainable. It adds value to your brand and contributes to a more responsible trade ecosystem.
        </p>
      </div>
      <div class="lg:col-span-6">
        <img src="{{ asset('assets/img/services/offset.webp') }}" alt="carbon offset" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- Feature 2: Resolve Disputes -->
<section id="community" class="py-24 bg-sand-light border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 order-2 lg:order-1">
        <img src="{{ asset('assets/img/services/community.webp') }}" alt="resolve disputes" loading="eager">
      </div>
      <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
        <div class="w-12 h-12 rounded-2xl bg-brand-dark/15 flex items-center justify-center text-red-600">
          <i data-lucide="messages-square" class="w-6 h-6"></i>
        </div>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-brand-dark">
          Trade Community Feed
        </h2>
        <h4 class="font-extrabold text-brand-dark">Engage in a Trade Community Feed to Share Updates and Market News</h4>
        <p>
            {{ config('app.name') }} includes a dedicated trade community feed where users can share daily updates, industry news, and shipping insights. Whether you're a shipper, freight provider, or trade partner, this space helps you stay connected with others in the logistics world.
        </p>
        <p>
            Each company or individual can post once a day to share market trends, route updates, or helpful tips. Others can like and comment, making it easy to exchange knowledge and grow your network. The feed is moderated to keep posts professional and focused on global trade. It’s a space for learning, visibility, and real-time updates—all within the platform.
        </p>
        <p>
            Stay informed. Share your voice. Build trust through conversation.
        </p>
      </div>
    </div>
  </div>
</section>

@endsection
