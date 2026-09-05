<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }} | @yield('title')</title>
        <meta name="description" content="decentralized freight forwarding and logistics platform connecting global shippers with verified carriers and providers.">

          <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='8' fill='%230226F4'/><path d='M8 16L14 10L24 20M14 22L20 16' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'/></svg>">

        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
            theme: {
                extend: {
                colors: {
                    brand: {
                    blue: '#0226F4',
                    'blue-hover': '#001ECC',
                    'blue-light': '#EEF2FF',
                    dark: '#0A143C',
                    'dark-soft': '#121E4E',
                    'dark-surface': '#070E2D',
                    sand: '#F6F4F0',
                    'sand-light': '#FAF9F6',
                    'sand-border': '#E8E5DD',
                    green: '#00D084',
                    'green-light': '#E6FBF3',
                    cyan: '#0693E3',
                    amber: '#FCB900',
                    }
                },
                fontFamily: {
                    sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                    heading: ['"Outfit"', '"Plus Jakarta Sans"', 'sans-serif'],
                    mono: ['"JetBrains Mono"', 'monospace'],
                }
                }
            }
            }
        </script>

        <!-- Lucide Icons -->
        <script src="https://unpkg.com/lucide@latest"></script>

        <!-- Custom Main CSS -->
        <link rel="stylesheet" href="{{ asset('home-assets/css/main.css') }}">
    </head>
    <body class="min-h-screen flex flex-col bg-white text-brand-dark antialiased">

    <!-- Global Page Preloader -->
    <div id="sitePreloader" class="site-preloader fixed inset-0 z-[99999] flex flex-col items-center justify-center bg-brand-dark-surface text-white transition-all duration-500 ease-out">
        <div class="relative flex flex-col items-center">
        <!-- Animated Logo Icon -->
        <div class="relative w-20 h-20 mb-6 flex items-center justify-center">
            <!-- Glowing Pulse Rings -->
            <div class="absolute inset-0 rounded-2xl bg-brand-blue/30 animate-ping opacity-50"></div>
            <div class="absolute -inset-2 rounded-3xl border border-brand-blue/40 animate-pulse"></div>
            <div class="relative w-16 h-16 rounded-2xl bg-brand-blue shadow-xl shadow-brand-blue/50 flex items-center justify-center transform hover:scale-105 transition-transform">
                <svg class="w-9 h-9 animate-bounce-subtle" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 17L9 5L15 17L21 9" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 17L15 17" stroke="#00D084" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <!-- Brand Name -->
        <div class="font-heading font-extrabold text-2xl tracking-tight text-white mb-2">
            <img src="{{ asset('assets/img/logo-horizontal.png') }}" alt="logo" class="img-fluid" width="150">
        </div>
        <p class="text-xs text-gray-400 font-mono uppercase tracking-widest mb-6 flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
            Digital Freight Operating System
        </p>

        <!-- Sleek Progress Bar -->
        <div class="w-48 h-1 bg-white/10 rounded-full overflow-hidden relative">
            <div class="preloader-progress-bar h-full bg-gradient-to-r from-brand-blue via-brand-cyan to-brand-green rounded-full"></div>
        </div>
        </div>
    </div>
    <script>
        (function() {
        function dismissSitePreloader() {
            var pl = document.getElementById('sitePreloader');
            if (pl) {
            pl.classList.add('loaded');
            pl.style.opacity = '0';
            pl.style.pointerEvents = 'none';
            setTimeout(function() {
                if (pl && pl.parentNode) pl.parentNode.removeChild(pl);
            }, 400);
            }
        }
        if (document.readyState === 'complete' || document.readyState === 'interactive') {
            setTimeout(dismissSitePreloader, 100);
        } else {
            window.addEventListener('load', dismissSitePreloader);
            document.addEventListener('DOMContentLoaded', dismissSitePreloader);
            setTimeout(dismissSitePreloader, 600);
        }
        })();
    </script>
    @include('test.includes.navbar')

    @yield('content')

    <!-- Global Enterprise CTA Banner -->
    <section class="py-20 bg-brand-dark text-white relative overflow-hidden">

        <!-- Background Ambient Glows & Cubes -->
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-brand-blue/30 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-brand-green/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute inset-0 bg-grid-pattern-dark opacity-40 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-8 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-brand-green border border-white/10 text-xs font-bold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-brand-green animate-ping"></span>
                    Ready to scale your supply chain?
                    </div>

                    <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight leading-tight">
                    Ship smarter, faster, and with <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue-light via-white to-brand-green">100% visibility</span>.
                    </h2>

                    <p class="text-gray-300 text-base sm:text-lg max-w-2xl leading-relaxed">
                    Join over 3,400+ forward-thinking global brands and logistics providers who trust omehub to automate freight procurement, eliminate customs delays, and track cargo worldwide.
                    </p>

                    <div class="flex flex-wrap gap-4 pt-2">
                    <a href="{{ route('public.quote') }}" class="btn-primary text-sm sm:text-base py-3 px-6 shadow-lg shadow-brand-blue/40">
                        <span>Get an Instant Quote</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="{{ route('public.contact') }}" class="btn-outlined-white text-sm sm:text-base py-3 px-6">
                        <span>Talk with a Logistics Specialist</span>
                    </a>
                    </div>
                </div>

                <!-- Quick Trust Metric Badges -->
                <div class="lg:col-span-4 grid grid-cols-2 gap-4">
                    <div class="p-5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                    <div class="text-2xl sm:text-3xl font-heading font-extrabold text-white">99.4%</div>
                    <div class="text-xs font-bold text-gray-400 mt-1 uppercase tracking-wider">On-Time Arrival Rate</div>
                    </div>

                    <div class="p-5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                    <div class="text-2xl sm:text-3xl font-heading font-extrabold text-brand-green">15 Sec</div>
                    <div class="text-xs font-bold text-gray-400 mt-1 uppercase tracking-wider">Instant Quote Time</div>
                    </div>

                    <div class="p-5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                    <div class="text-2xl sm:text-3xl font-heading font-extrabold text-white">120+</div>
                    <div class="text-xs font-bold text-gray-400 mt-1 uppercase tracking-wider">Global Ports & Hubs</div>
                    </div>

                    <div class="p-5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                    <div class="text-2xl sm:text-3xl font-heading font-extrabold text-brand-cyan">$0</div>
                    <div class="text-xs font-bold text-gray-400 mt-1 uppercase tracking-wider">Zero Hidden Surcharges</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <footer class="bg-brand-dark-surface text-gray-400 text-sm border-t border-white/10 pt-16 pb-12 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Top Row: Brand & Newsletter -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 pb-12 border-b border-white/10">

                <!-- Brand Summary -->
                <div class="lg:col-span-5 space-y-4">
                    <a href="{{ route('public.index') }}" class="flex items-center gap-2.5">
                        <img src="{{ asset('assets/img/logo-horizontal.png') }}" alt="logo" class="img-fluid" width="150">
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-sm">
                    omehub is the digital freight operating system connecting global shippers with verified carriers and logistics providers. Fast, transparent, and sustainable supply chains powered by AI.
                    </p>
                    <div class="flex items-center space-x-3 pt-2">
                        <a href="#" class="w-9 h-9 rounded-full bg-white/5 hover:bg-brand-blue hover:text-white flex items-center justify-center text-gray-400 transition-all" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.049c.476-.9 1.637-1.852 3.37-1.852 3.601 0 4.263 2.37 4.263 5.455v6.288zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM6.994 20.452H3.675V9h3.319v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.226.792 24 1.771 24h20.451C23.2 24 24 23.226 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/5 hover:bg-brand-blue hover:text-white flex items-center justify-center text-gray-400 transition-all" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24h-1.918c-1.505 0-1.797.716-1.797 1.767v2.317h3.59l-.467 3.622h-3.123V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/5 hover:bg-brand-blue hover:text-white flex items-center justify-center text-gray-400 transition-all" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.35 3.608 1.325.975.975 1.263 2.242 1.325 3.608.058 1.266.07 1.646.07 4.834s-.012 3.568-.07 4.834c-.062 1.366-.35 2.633-1.325 3.608-.975.975-2.242 1.263-3.608 1.325-1.266.058-1.646.07-4.834.07s-3.568-.012-4.834-.07c-1.366-.062-2.633-.35-3.608-1.325-.975-.975-1.263-2.242-1.325-3.608C2.175 15.568 2.163 15.188 2.163 12s.012-3.568.07-4.834c.062-1.366.35-2.633 1.325-3.608.975-.975 2.242-1.263 3.608-1.325C8.432 2.175 8.812 2.163 12 2.163zm0 1.837c-3.17 0-3.548.012-4.795.07-1.042.048-1.61.218-1.985.364-.5.194-.86.426-1.237.803-.377.377-.609.737-.803 1.237-.146.375-.316.943-.364 1.985-.058 1.247-.07 1.625-.07 4.795s.012 3.548.07 4.795c.048 1.042.218 1.61.364 1.985.194.5.426.86.803 1.237.377.377.737.609 1.237.803.375.146.943.316 1.985.364 1.247.058 1.625.07 4.795.07s3.548-.012 4.795-.07c1.042-.048 1.61-.218 1.985-.364.5-.194.86-.426 1.237-.803.377-.377.609-.737.803-1.237.146-.375.316-.943.364-1.985.058-1.247.07-1.625.07-4.795s-.012-3.548-.07-4.795c-.048-1.042-.218-1.61-.364-1.985-.194-.5-.426-.86-.803-1.237-.377-.377-.737-.609-1.237-.803-.375-.146-.943-.316-1.985-.364-1.247-.058-1.625-.07-4.795-.07zm0 3.838a5.162 5.162 0 1 0 0 10.324 5.162 5.162 0 0 0 0-10.324zm0 8.525a3.363 3.363 0 1 1 0-6.726 3.363 3.363 0 0 1 0 6.726zm4.833-9.87a1.2 1.2 0 1 0 0-2.4 1.2 1.2 0 0 0 0 2.4z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/5 hover:bg-brand-blue hover:text-white flex items-center justify-center text-gray-400 transition-all" aria-label="Tiktok">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M12 2c1.1 0 2 .9 2 2v12.5a3.5 3.5 0 1 1-3.5-3.5c.17 0 .34.02.5.05V9.5c-.16-.03-.33-.05-.5-.05a7.5 7.5 0 1 0 7.5 7.5V8.5c.63.48 1.39.82 2.22.95V6.5c-.79-.23-1.5-.68-2.03-1.3-.54-.62-.89-1.39-.97-2.2H14c0-1.1-.9-2-2-2z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Newsletter Box -->
                <div class="lg:col-span-7 flex flex-col justify-center">
                    <div class="bg-white/5 p-6 rounded-2xl border border-white/10">
                    <h4 class="font-heading font-bold text-white text-base mb-1">Subscribe to the omehub Logistics Briefing</h4>
                    <p class="text-xs text-gray-400 mb-4">Monthly market updates, port congestion indices, and sea freight rate benchmarks.</p>
                    <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to omehub Logistics Briefing!');" class="flex flex-col sm:flex-row gap-2">
                        <input type="email" required placeholder="Enter your business email" class="flex-1 bg-white/10 border border-white/15 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-400 focus:outline-none focus:border-brand-blue">
                        <button type="submit" class="btn-primary py-2.5 px-5 text-sm font-bold whitespace-nowrap">
                        <span>Subscribe</span>
                        <i data-lucide="send" class="w-3.5 h-3.5"></i>
                        </button>
                    </form>
                    </div>
                </div>

            </div>

            <!-- Middle Row: Multi-Column Links -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-12 border-b border-white/10 text-xs sm:text-sm">

                <!-- Column 1: Platform -->
                <div>
                    <h5 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-4">Services</h5>
                        <ul class="space-y-2.5">
                        <li><a href="{{ route('public.platform') }}#quote-and-book-freight" class="hover:text-white transition-colors">Quote & Book Freight</a></li>
                        <li><a href="{{ route('public.platform') }}#track-shipment" class="hover:text-white transition-colors">Track Shipment</a></li>
                        <li><a href="{{ route('public.platform') }}#trade-finance" class="hover:text-white transition-colors">Trade Finance</a></li>
                        <li><a href="{{ route('public.platform') }}#resolve-disputes" class="hover:text-white transition-colors">Resolve Disputes & Claims</a></li>
                        <li><a href="{{ route('public.platform') }}#offset" class="hover:text-white transition-colors">Carbon Offset</a></li>
                        <li><a href="{{ route('public.platform') }}#community" class="hover:text-white transition-colors">Community Feed</a></li>
                    </ul>
                </div>

                <!-- Column 2: Resources -->
                <div>
                    <h5 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-4">Resources & Tools</h5>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('public.quote') }}" class="hover:text-white transition-colors">Quote Calculator</a></li>
                        <li><a href="{{ route('public.tracking') }}" class="hover:text-white transition-colors">Shipment Tracker</a></li>
                        <li><a href="{{ route('public.about') }}#sustainability" class="hover:text-white transition-colors">Carbon Report</a></li>
                        <li><a href="{{ route('public.about') }}#faq" class="hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="{{ route('public.for-shippers') }}" class="hover:text-white transition-colors">For Shippers</a></li>
                        <li><a href="{{ route('public.for-carriers') }}" class="hover:text-white transition-colors">For Logistic Providers</a></li>
                    </ul>
                </div>

                <!-- Column 3: Company -->
                <div>
                    <h5 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-4">Company</h5>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('public.about') }}" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="{{ route('public.about') }}#leadership" class="hover:text-white transition-colors">Leadership</a></li>
                        <li><a href="{{ route('public.contact') }}#locations" class="hover:text-white transition-colors">Global Hubs</a></li>
                        <li><a href="{{ route('public.contact') }}" class="hover:text-white transition-colors">Contact Support</a></li>
                    </ul>
                </div>

                <!-- Column 4: Address & Contact -->
                <div>
                    <h5 class="font-heading font-bold text-white uppercase tracking-wider text-xs mb-4">Contact & Address</h5>
                    <ul class="space-y-3 text-xs">
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="map-pin" class="w-4 h-4 text-brand-white shrink-0 mt-0.5"></i>
                            <span class="text-gray-400 leading-relaxed">
                                17th Floor Elephant House,<br>
                                214 Broad Street, Marina,<br>
                                Lagos, Nigeria
                            </span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="map-pin" class="w-4 h-4 text-brand-white shrink-0 mt-0.5"></i>
                            <span class="text-gray-400 leading-relaxed">
                                Zone C New Market Express,<br>
                                Enugu, Nigeria
                            </span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i data-lucide="mail" class="w-4 h-4 text-brand-white shrink-0"></i>
                            <a href="mailto:info@ome-hub.com" class="text-gray-400 hover:text-white transition-colors">info@ome-hub.com</a>
                        </li>
                        <li class="pt-1">
                            <a href="{{ route('public.contact') }}" class="inline-flex items-center gap-1 text-xs font-bold text-brand-white hover:text-white transition-colors">
                                <span>Get in Touch</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Row: Copyright & Legal -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 pt-8 text-xs text-gray-500 border-t border-white/5">
                <div class="text-center md:text-left space-y-1">
                    <div>&copy; {{ date('Y') }} <strong>{{ config('app.name') }}</strong> &bull; Powered by OmeFreight. All rights
                    reserved.</div>
                    <div class="text-[11px] text-gray-400">Omefreight Logistics Ltd (Omehub) is certified by the Nigeria
                    Data Protection Commission (NDPC) as a Data Controller of Major Importance (Ultra-High Level) &bull;
                    REG ID: NDPC/DCP/09043</div>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-6">
                    <a href="{{ route('public.privacy') }}" class="hover:text-gray-400 transition-colors">Privacy Policy</a>
                    <a href="{{ route('public.terms') }}" class="hover:text-gray-400 transition-colors">Terms of Service</a>
                    <a href="{{ route('public.advertising') }}" class="hover:text-gray-400 transition-colors">Advertising & Blog Policy</a>
                    <button type="button" onclick="openCookiePreferencesModal()"
                        class="hover:text-white transition-colors text-xs text-gray-400 underline inline-flex items-center gap-1">
                        <i data-lucide="cookie" class="w-3.5 h-3.5 text-brand-green"></i>
                        <span>Cookie Settings</span>
                    </button>
                </div>
            </div>

        </div>
    </footer>

    <!-- Global Cookie Consent Alert & Preferences Modal -->
    @include('test.includes.cookie-banner')

    <!-- Floating Scroll-To-Top Button -->
    <button id="scrollToTopBtn" type="button" aria-label="Scroll to top" class="fixed bottom-6 right-6 z-50 w-12 h-12 rounded-full bg-brand-blue text-white shadow-xl shadow-brand-blue/35 flex items-center justify-center transition-all duration-300 opacity-0 invisible translate-y-4 hover:scale-110 hover:bg-brand-blue-hover focus:outline-none focus:ring-4 focus:ring-brand-blue/30 group">
    <!-- Progress Ring Indicator -->
    <svg class="absolute inset-0 w-full h-full -rotate-90 pointer-events-none" viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="21" class="stroke-white/20" stroke-width="2.5" fill="none"></circle>
        <circle id="scrollProgressRing" cx="24" cy="24" r="21" class="stroke-brand-green transition-all duration-75" stroke-width="2.5" stroke-linecap="round" fill="none" stroke-dasharray="131.95" stroke-dashoffset="131.95"></circle>
    </svg>
    <i data-lucide="arrow-up" class="w-5 h-5 relative z-10 transition-transform group-hover:-translate-y-0.5"></i>
    <!-- Tooltip -->
    <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 px-2.5 py-1 rounded-lg bg-brand-dark text-white text-xs font-semibold whitespace-nowrap opacity-0 pointer-events-none group-hover:opacity-100 transition-opacity shadow-lg">
        Back to top
    </span>
    </button>

    <!-- Scripts -->
    <script src="{{ asset('home-assets/js/main.js') }}"></script>
    <script src="{{ asset('home-assets/js/quote-calculator.js') }}"></script>
    <script src="{{ asset('home-assets/js/tracker.js') }}"></script>
    <script>
    // Initialize Lucide vector icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
    </script>
</body>
</html>
