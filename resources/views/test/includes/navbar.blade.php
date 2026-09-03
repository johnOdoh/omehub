<!-- Announcement Bar -->
{{-- <div id="announcementBar" class="bg-gradient-to-r from-brand-dark via-brand-dark-soft to-brand-dark text-white text-xs sm:text-sm py-2.5 px-4 border-b border-white/10 relative z-50 transition-all duration-300">
  <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
    <div class="flex items-center gap-2 mx-auto sm:mx-0 overflow-hidden text-ellipsis whitespace-nowrap">
      <span class="bg-brand-green/20 text-brand-green px-2 py-0.5 rounded-full text-xs font-bold uppercase tracking-wider flex items-center gap-1">
        <span class="w-1.5 h-1.5 rounded-full bg-brand-green animate-pulse"></span> New
      </span>
      <span class="font-medium">Discover <strong class="text-white font-bold">{{ config('app.name') }} AI v3.2:</strong> Real-time container telemetry & predictive freight routing</span>
      <a href="{{ route('public.platform') }}" class="underline hover:text-brand-green font-semibold ml-2 inline-flex items-center gap-1 transition-colors">
        Learn more <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
      </a>
    </div>
    <button onclick="document.getElementById('announcementBar').style.display='none'" class="text-gray-400 hover:text-white p-1 rounded transition-colors" aria-label="Dismiss announcement">
      <i data-lucide="x" class="w-4 h-4"></i>
    </button>
  </div>
</div> --}}

<!-- Main Header / Navigation -->
<header class="sticky top-0 z-50 glass-nav transition-all duration-200" id="mainHeader">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">

      <!-- Brand Logo -->
      <div class="flex-shrink-0 flex items-center gap-3">
        <a href="{{ route('public.index') }}" class="flex items-center gap-2.5 group">
          <div class="flex flex-col">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="img-fluid" width="150">
          </div>
        </a>
      </div>

      <!-- Desktop Navigation Links (Mega Menu Triggers) -->
      <nav class="hidden lg:flex items-center space-x-1" aria-label="Primary Navigation">

        <!-- Solutions Mega Menu -->
        <div class="nav-item group" data-menu="solutions">
          <button type="button" class="nav-link" aria-expanded="false">
            <span>Solutions</span>
            <i data-lucide="chevron-down" class="w-4 h-4 chevron text-gray-500"></i>
          </button>

          <!-- Solutions Dropdown Content (Multi-column & Multi-row) -->
          <div class="mega-dropdown">
            <div class="max-w-7xl mx-auto px-6 py-8">
              <div class="grid grid-cols-12 gap-8">

                <!-- Column 1: Transportation Services (6 Items / Multi-row) -->
                <div class="col-span-4">
                  <div class="mega-group-title flex items-center justify-between">
                    <span>Transportation Services</span>
                    <span class="text-[10px] text-brand-blue font-bold tracking-wider">FREIGHT MODES</span>
                  </div>
                  <div class="space-y-1">
                    <a href="{{ route('public.solutions') }}#ocean-fcl" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="ship" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title flex items-center gap-1.5">
                          Ocean Freight (FCL)
                          <span class="bg-brand-blue/10 text-brand-blue text-[10px] font-bold px-1.5 py-0.2 rounded">Global</span>
                        </div>
                        <p class="mega-item-desc">Full container loads with contracted carrier allocations.</p>
                      </div>
                    </a>

                    <a href="{{ route('public.solutions') }}#ocean-lcl" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="box" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Ocean Consolidation (LCL)</div>
                        <p class="mega-item-desc">Cost-efficient space sharing for small volume shipments.</p>
                      </div>
                    </a>

                        <a href="{{ route('public.solutions') }}#air-freight" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="plane" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title flex items-center gap-1.5">
                          Air Freight
                          <span class="bg-brand-green/15 text-emerald-700 text-[10px] font-bold px-1.5 py-0.2 rounded">Fast Track</span>
                        </div>
                        <p class="mega-item-desc">Time-critical express cargo and charter services worldwide.</p>
                      </div>
                    </a>

                    {{-- <a href="{{ route('public.solutions') }}#rail-road" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="train" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Rail & Intermodal</div>
                        <p class="mega-item-desc">Sustainable transcontinental corridors & full truckload.</p>
                      </div>
                    </a> --}}
                  </div>
                </div>

                <!-- Column 2: Value-Added & Customs (Multi-row) -->
                <div class="col-span-4">
                  <div class="mega-group-title">Specialized Services</div>
                  <div class="space-y-1">
                    <a href="{{ route('public.solutions') }}#customs" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="file-check" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Automated Customs</div>
                        <p class="mega-item-desc">AI-powered tariff classification & clearance.</p>
                      </div>
                    </a>

                    {{-- <a href="{{ route('public.solutions') }}#insurance" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="shield-check" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Cargo Insurance</div>
                        <p class="mega-item-desc">Full invoice value protection at instant click.</p>
                      </div>
                    </a>

                    <a href="{{ route('public.solutions') }}#warehousing" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="warehouse" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Cross-Dock & Warehousing</div>
                        <p class="mega-item-desc">Portside storage, palletizing & inventory hubs.</p>
                      </div>
                    </a> --}}

                    <a href="{{ route('public.solutions') }}#sustainability" class="mega-link-card">
                      <div class="mega-icon-box text-emerald-600">
                        <i data-lucide="leaf" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title text-emerald-700">Green Logistics & Biofuel</div>
                        <p class="mega-item-desc">100% Scope 3 carbon tracking & biofuel insetting.</p>
                      </div>
                    </a>
                  </div>
                </div>

                <!-- Column 3: Tools & Instant Actions -->
                <div class="col-span-4">
                  <div class="mega-group-title">Quick Actions</div>
                  <div class="space-y-2.5">
                    <a href="{{ route('public.quote') }}" class="block p-3.5 rounded-xl bg-brand-blue-light/70 hover:bg-brand-blue-light border border-brand-blue/15 transition-all group/item">
                      <div class="flex items-center gap-2 text-brand-blue font-bold text-sm">
                        <i data-lucide="calculator" class="w-4 h-4"></i>
                        <span>Instant Rate Tool</span>
                      </div>
                      <p class="text-xs text-gray-600 mt-1">Get guaranteed multi-modal quotes in 15 seconds.</p>
                    </a>

                    <a href="{{ route('public.tracking') }}" class="block p-3.5 rounded-xl bg-gray-50 hover:bg-gray-100 border border-gray-200 transition-all group/item">
                      <div class="flex items-center gap-2 text-brand-dark font-bold text-sm">
                        <i data-lucide="map-pin" class="w-4 h-4 text-brand-blue"></i>
                        <span>Real-time Tracking</span>
                      </div>
                      <p class="text-xs text-gray-600 mt-1">Cargo tracking & real-time ETA.</p>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Technology & Platform Mega Menu -->
        <div class="nav-item group" data-menu="technology">
          <button type="button" class="nav-link" aria-expanded="false">
            <span>Services</span>
            <i data-lucide="chevron-down" class="w-4 h-4 chevron text-gray-500"></i>
          </button>

          <div class="mega-dropdown">
            <div class="max-w-7xl mx-auto px-6 py-8">
              <div class="grid grid-cols-12 gap-8">

                <div class="col-span-4">
                  <div class="mega-group-title">Omehub Services</div>
                  <div class="space-y-1">
                    <a href="{{ route('public.platform') }}#quote-and-book-freight" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="file-text" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Quote & Book Freight</div>
                        <p class="mega-item-desc">Quickly compare and book shipping options from trusted logistics providers across all freight modes, sea, air, road, and rail - all in one place.</p>
                      </div>
                    </a>

                    <a href="{{ route('public.platform') }}#track-shipment" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="truck" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title flex items-center gap-1.5">
                          Track Shipment
                        </div>
                        <p class="mega-item-desc">Stay informed with real-time tracking updates from pickup to final delivery, visible right from your dashboard.</p>
                      </div>
                    </a>

                  </div>
                </div>

                <div class="col-span-4">
                  <div class="mega-group-title">What We Do</div>
                  <div class="space-y-1">
                    <a href="{{ route('public.platform') }}#trade-finance" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="banknote" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Trade Finance</div>
                        <p class="mega-item-desc">Secure short-term financial support to fund your shipment, with flexible payment options available based on your business or individual profile.</p>
                      </div>
                    </a>

                    <a href="{{ route('public.platform') }}#resolve-disputes" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="scale" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Resolve Disputes & Claims</div>
                        <p class="mega-item-desc">Get fast legal support for any issues during your shipment. Raise claims directly and have them handled professionally through {{ config('app.name') }}’s legal partners.</p>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-span-4">
                  <div class="mega-group-title">Our Impact</div>
                  <div class="space-y-1">

                    <a href="{{ route('public.platform') }}#offset" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="leaf" class="w-5 h-5 text-brand-green"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Offset CO₂ Emissions</div>
                        <p class="mega-item-desc">Choose to offset your shipment’s carbon footprint through {{ config('app.name') }}’s built-in sustainability feature — and receive a certified annual report of your impact.</p>
                      </div>
                    </a>

                    <a href="{{ route('public.platform') }}#community" class="mega-link-card">
                      <div class="mega-icon-box">
                        <i data-lucide="messages-square" class="w-5 h-5"></i>
                      </div>
                      <div>
                        <div class="mega-item-title">Engage in a Trade Community Feed</div>
                        <p class="mega-item-desc">Post updates, share market news, and interact with others in the global trade community — with a limit of one post per day per stakeholder to keep content focused.</p>
                      </div>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- For Shippers -->
        <div class="nav-item">
          <a href="{{ route('public.for-shippers') }}" class="nav-link">
            <span>For Shippers</span>
          </a>
        </div>

        <!-- For Logistics Providers -->
        <div class="nav-item">
          <a href="{{ route('public.for-carriers') }}" class="nav-link">
            <span>For Carriers & Providers</span>
          </a>
        </div>

        <!-- Company Dropdown -->
        <div class="nav-item group" data-menu="company">
          <button type="button" class="nav-link" aria-expanded="false">
            <span>Company</span>
            <i data-lucide="chevron-down" class="w-4 h-4 chevron text-gray-500"></i>
          </button>

          <div class="mega-dropdown">
            <div class="max-w-4xl mx-auto px-6 py-6">
              <div class="grid grid-cols-3 gap-6">
                <div>
                  <div class="mega-group-title">About {{ config('app.name') }}</div>
                  <div class="space-y-1">
                    <a href="{{ route('public.about') }}" class="mega-link-card">
                      <div class="mega-icon-box"><i data-lucide="building-2" class="w-4 h-4"></i></div>
                      <div>
                        <div class="mega-item-title">Our Vision & Story</div>
                        <p class="mega-item-desc">Connecting global trade with transparency.</p>
                      </div>
                    </a>
                    <a href="{{ route('public.about') }}#leadership" class="mega-link-card">
                      <div class="mega-icon-box"><i data-lucide="users" class="w-4 h-4"></i></div>
                      <div>
                        <div class="mega-item-title">Leadership Team</div>
                        <p class="mega-item-desc">Freight veterans & technology architects.</p>
                      </div>
                    </a>
                  </div>
                </div>

                <div>
                  <div class="mega-group-title">Global Network</div>
                  <div class="space-y-1">
                    <a href="{{ route('public.about') }}#sustainability" class="mega-link-card">
                      <div class="mega-icon-box"><i data-lucide="heart-handshake" class="w-4 h-4"></i></div>
                      <div>
                        <div class="mega-item-title">ESG & Commitments</div>
                        <p class="mega-item-desc">Decarbonizing global logistics corridors.</p>
                      </div>
                    </a>
                    <a href="{{ route('public.about') }}#faq" class="mega-link-card">
                      <div class="mega-icon-box"><i data-lucide="help-circle" class="w-4 h-4"></i></div>
                      <div>
                        <div class="mega-item-title">FAQ</div>
                        <p class="mega-item-desc">Find answers to common questions.</p>
                      </div>
                    </a>
                  </div>
                </div>

                <div>
                  <div class="mega-group-title">Connect</div>
                  <div class="space-y-1">
                    <a href="{{ route('public.contact') }}" class="mega-link-card">
                      <div class="mega-icon-box"><i data-lucide="headphones" class="w-4 h-4"></i></div>
                      <div>
                        <div class="mega-item-title">Contact Support</div>
                        <p class="mega-item-desc">24/7 dedicated logistics desk assistance.</p>
                      </div>
                    </a>
                    <a href="{{ route('public.contact') }}#locations" class="mega-link-card">
                      <div class="mega-icon-box"><i data-lucide="message-square" class="w-4 h-4"></i></div>
                      <div>
                        <div class="mega-item-title">Global Hub Offices</div>
                        <p class="mega-item-desc">From Lagos to Enugu.</p>
                      </div>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </nav>

      <!-- Right Header Actions (Search, Language, Login, Primary CTA) -->
      <div class="flex items-center space-x-3">

        <div class="h-5 w-px bg-gray-200 hidden lg:block"></div>

        @guest
            <!-- Login Link -->
            <a href="{{ route('register') }}" class="hidden sm:inline-flex text-xs sm:text-sm font-semibold text-gray-700 hover:text-brand-blue transition-colors px-2 py-1">
                Sign Up
            </a>
            <!-- Primary CTA Buttons -->
            <a href="{{ route('login') }}" class="hidden sm:inline-flex btn-primary text-xs sm:text-sm py-2 px-4 shadow-sm">
                <span>Login</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        @else
            <a href="{{ route(auth()->user()->dashboard()) }}" class="hidden sm:inline-flex btn-primary text-xs sm:text-sm py-2 px-4 shadow-sm">
                <span>Dashboard</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        @endguest

        <!-- Mobile Hamburger Button -->
        <button id="mobileMenuToggle" class="lg:hidden p-2 text-gray-700 hover:text-brand-blue rounded-lg" aria-label="Toggle menu">
          <i data-lucide="menu" class="w-6 h-6" id="hamburgerIcon"></i>
          <i data-lucide="x" class="w-6 h-6 hidden" id="closeIcon"></i>
        </button>

      </div>

    </div>
  </div>
</header>

<!-- Global Backdrop Overlay for Mega Menu Hover/Focus -->
<div id="backdropOverlay" class="backdrop-overlay"></div>

<!-- Mobile Navigation Drawer -->
<div id="mobileDrawer" class="fixed inset-0 top-[80px] bg-white z-40 p-6 overflow-y-auto hidden lg:hidden border-t border-gray-100 shadow-xl">
  <div class="space-y-6">

    <!-- Mobile Accordion Menus -->
    <div class="space-y-3">

      <!-- Solutions Accordion -->
      <div class="border-b border-gray-100 pb-3">
        <button class="w-full flex items-center justify-between font-bold text-base text-brand-dark py-2 mobile-accordion-trigger" data-target="mob-solutions">
          <span>Solutions</span>
          <i data-lucide="chevron-down" class="w-4 h-4 text-gray-400 transition-transform"></i>
        </button>
        <div id="mob-solutions" class="hidden pl-3 pt-2 space-y-2 text-sm text-gray-600">
          <a href="{{ route('public.solutions') }}#ocean-fcl" class="block py-1.5 hover:text-brand-blue">Ocean Freight (FCL)</a>
            <a href="{{ route('public.solutions') }}#ocean-lcl" class="block py-1.5 hover:text-brand-blue">Ocean Consolidation (LCL)</a>
          <a href="{{ route('public.solutions') }}#air-freight" class="block py-1.5 hover:text-brand-blue">Air Freight Express</a>
          {{-- <a href="{{ route('public.solutions') }}#rail-road" class="block py-1.5 hover:text-brand-blue">Rail & Road Intermodal</a> --}}
          <a href="{{ route('public.solutions') }}#customs" class="block py-1.5 hover:text-brand-blue">Customs Clearance & Compliance</a>
          <a href="{{ route('public.solutions') }}#sustainability" class="block py-1.5 text-emerald-600 font-semibold">Green Logistics & Biofuel</a>
        </div>
      </div>

      <!-- Technology Accordion -->
      <div class="border-b border-gray-100 pb-3">
        <button class="w-full flex items-center justify-between font-bold text-base text-brand-dark py-2 mobile-accordion-trigger" data-target="mob-tech">
          <span>Services</span>
          <i data-lucide="chevron-down" class="w-4 h-4 text-gray-400 transition-transform"></i>
        </button>
        <div id="mob-tech" class="hidden pl-3 pt-2 space-y-2 text-sm text-gray-600">
          <a href="{{ route('public.platform') }}#quote-and-book-freight" class="block py-1.5 hover:text-brand-blue">Quote & Book Freight</a>
          <a href="{{ route('public.platform') }}#track-shipment" class="block py-1.5 hover:text-brand-blue">Track Shipment</a>
          <a href="{{ route('public.platform') }}#trade-finance" class="block py-1.5 hover:text-brand-blue">Trade Finance</a>
          <a href="{{ route('public.platform') }}#resolve-disputes" class="block py-1.5 hover:text-brand-blue">Resolve Disputes & Claims</a>
          <a href="{{ route('public.platform') }}#offset" class="block py-1.5 hover:text-brand-blue">Offset CO₂ Emissions</a>
          <a href="{{ route('public.platform') }}#community" class="block py-1.5 hover:text-brand-blue">Engage in a Trade Community Feed</a>
        </div>
      </div>

      <!-- Direct Links -->
      <div class="border-b border-gray-100 pb-3">
        <a href="{{ route('public.for-shippers') }}" class="block font-bold text-base text-brand-dark py-2 hover:text-brand-blue">For Shippers</a>
      </div>

      <div class="border-b border-gray-100 pb-3">
        <a href="{{ route('public.for-carriers') }}" class="block font-bold text-base text-brand-dark py-2 hover:text-brand-blue">For Logistics Providers & Carriers</a>
      </div>

      <div class="border-b border-gray-100 pb-3">
        <a href="{{ route('public.about') }}" class="block font-bold text-base text-brand-dark py-2 hover:text-brand-blue">About {{ config('app.name') }}</a>
      </div>

      <div class="border-b border-gray-100 pb-3">
        <a href="{{ route('public.contact') }}" class="block font-bold text-base text-brand-dark py-2 hover:text-brand-blue">Contact & Support</a>
      </div>

    </div>

    <!-- Mobile Action Buttons -->
    <div class="pt-4 space-y-3">
      <a href="{{ route('public.tracking') }}" class="w-full btn-outlined py-3 text-center justify-center">
        <i data-lucide="map-pin" class="w-4 h-4 text-brand-blue"></i>
        <span>Track a Shipment</span>
      </a>
    </div>

  </div>
</div>
