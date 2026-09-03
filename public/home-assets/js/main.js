/**
 * omehub - Primary JavaScript Controller
 * Forto-style Mega Menu, Search Modal, Language Switcher, Tabs, FAQ Accordions
 */

function initApp() {
    initPreloader();
    initScrollToTop();
    initMegaMenu();
    initSearchModal();
    initLanguageSwitcher();
    initMobileMenu();
    initAccordions();
    initStatsCounter();
    initCookieConsent();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initApp);
} else {
    initApp();
}

/**
 * Global Page Preloader Fade Out
 */
function initPreloader() {
    const preloader = document.getElementById('sitePreloader');
    if (!preloader) return;

    const hidePreloader = () => {
        preloader.classList.add('loaded');
        preloader.style.opacity = '0';
        preloader.style.pointerEvents = 'none';
        setTimeout(() => {
            preloader.style.display = 'none';
            if (preloader.parentNode) {
                preloader.parentNode.removeChild(preloader);
            }
        }, 350);
    };

    if (document.readyState === 'complete' || document.readyState === 'interactive') {
        setTimeout(hidePreloader, 100);
    } else {
        window.addEventListener('load', hidePreloader);
        document.addEventListener('DOMContentLoaded', hidePreloader);
        setTimeout(hidePreloader, 500);
    }
}


/**
 * Floating Scroll-To-Top Button with Circular Progress Ring
 */
function initScrollToTop() {
    const btn = document.getElementById('scrollToTopBtn');
    const ring = document.getElementById('scrollProgressRing');
    if (!btn) return;

    const circumference = 2 * Math.PI * 21; // ~131.95px
    let ticking = false;

    const updateScroll = () => {
        const scrollY = window.pageYOffset || document.documentElement.scrollTop;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;

        // Toggle button visibility
        if (scrollY > 280) {
            btn.classList.add('visible');
        } else {
            btn.classList.remove('visible');
        }

        // Update circular progress ring
        if (ring && docHeight > 0) {
            const scrollPercent = Math.min(Math.max(scrollY / docHeight, 0), 1);
            const strokeOffset = circumference * (1 - scrollPercent);
            ring.style.strokeDashoffset = strokeOffset;
        }

        ticking = false;
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(updateScroll);
            ticking = true;
        }
    }, { passive: true });

    btn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}


/**
 * Mega Menu Hover and Keyboard Navigation with Backdrop
 */
function initMegaMenu() {
    const navItems = document.querySelectorAll('.nav-item[data-menu]');
    const backdrop = document.getElementById('backdropOverlay');
    let activeTimeout = null;

    navItems.forEach(item => {
        const button = item.querySelector('button');
        const dropdown = item.querySelector('.mega-dropdown');

        if (!button || !dropdown) return;

        // Mouse enter / leave with small debounce
        item.addEventListener('mouseenter', () => {
            clearTimeout(activeTimeout);
            navItems.forEach(other => {
                if (other !== item) {
                    other.classList.remove('active');
                    const otherBtn = other.querySelector('button');
                    if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                }
            });
            item.classList.add('active');
            button.setAttribute('aria-expanded', 'true');
            if (backdrop) backdrop.classList.add('active');
        });

        item.addEventListener('mouseleave', () => {
            activeTimeout = setTimeout(() => {
                item.classList.remove('active');
                button.setAttribute('aria-expanded', 'false');

                const anyActive = document.querySelector('.nav-item.active');
                if (!anyActive && backdrop) {
                    backdrop.classList.remove('active');
                }
            }, 120);
        });

        // Keyboard support
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            const isActive = item.classList.contains('active');
            navItems.forEach(other => other.classList.remove('active'));

            if (!isActive) {
                item.classList.add('active');
                button.setAttribute('aria-expanded', 'true');
                if (backdrop) backdrop.classList.add('active');
            } else {
                item.classList.remove('active');
                button.setAttribute('aria-expanded', 'false');
                if (backdrop) backdrop.classList.remove('active');
            }
        });
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.nav-item') && !e.target.closest('.mega-dropdown')) {
            navItems.forEach(item => {
                item.classList.remove('active');
                const btn = item.querySelector('button');
                if (btn) btn.setAttribute('aria-expanded', 'false');
            });
            if (backdrop) backdrop.classList.remove('active');
        }
    });
}

/**
 * Search Dialog Modal Open / Close
 */
function initSearchModal() {
    const openBtn = document.getElementById('searchOpenBtn');
    const modal = document.getElementById('searchModal');
    const input = document.getElementById('searchInput');

    if (!openBtn || !modal) return;

    openBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        if (input) setTimeout(() => input.focus(), 50);
    });

    // Close on Escape or click outside
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });
}

/**
 * Language Selector Dropdown
 */
function initLanguageSwitcher() {
    const btn = document.getElementById('langDropdownBtn');
    const menu = document.getElementById('langDropdownMenu');

    if (!btn || !menu) return;

    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        menu.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
        if (!e.target.closest('#langDropdownContainer')) {
            menu.classList.add('hidden');
        }
    });
}

/**
 * Mobile Drawer Navigation
 */
function initMobileMenu() {
    const toggleBtn = document.getElementById('mobileMenuToggle');
    const drawer = document.getElementById('mobileDrawer');
    const hamIcon = document.getElementById('hamburgerIcon');
    const closeIcon = document.getElementById('closeIcon');

    if (!toggleBtn || !drawer) return;

    toggleBtn.addEventListener('click', () => {
        const isOpen = !drawer.classList.contains('hidden');
        if (isOpen) {
            drawer.classList.add('hidden');
            if (hamIcon) hamIcon.classList.remove('hidden');
            if (closeIcon) closeIcon.classList.add('hidden');
            document.body.style.overflow = '';
        } else {
            drawer.classList.remove('hidden');
            if (hamIcon) hamIcon.classList.add('hidden');
            if (closeIcon) closeIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
    });

    // Accordions in Mobile Drawer
    const triggers = document.querySelectorAll('.mobile-accordion-trigger');
    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const targetId = trigger.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);
            const icon = trigger.querySelector('i');

            if (targetContent) {
                targetContent.classList.toggle('hidden');
                if (icon) {
                    icon.style.transform = targetContent.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            }
        });
    });
}

/**
 * Accordion Component (FAQ & Features)
 */
function initAccordions() {
    const faqItems = document.querySelectorAll('.faq-accordion-item');
    faqItems.forEach(item => {
        const btn = item.querySelector('.faq-btn');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');

        if (!btn || !content) return;

        btn.addEventListener('click', () => {
            const isExpanded = content.classList.contains('open');

            // Close others in same accordion group
            const parent = item.closest('.faq-accordion-group');
            if (parent) {
                parent.querySelectorAll('.faq-content').forEach(c => {
                    c.classList.remove('open');
                    c.style.maxHeight = null;
                });
                parent.querySelectorAll('.faq-icon').forEach(ic => {
                    ic.style.transform = 'rotate(0deg)';
                });
            }

            if (!isExpanded) {
                content.classList.add('open');
                content.style.maxHeight = content.scrollHeight + 'px';
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}

/**
 * Animated Number Count Up
 */
function initStatsCounter() {
    const statElements = document.querySelectorAll('[data-counter]');
    if (!statElements.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseFloat(el.getAttribute('data-counter'));
                const prefix = el.getAttribute('data-prefix') || '';
                const suffix = el.getAttribute('data-suffix') || '';
                const decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
                const duration = 1800; // ms
                let startTime = null;

                function animate(currentTime) {
                    if (!startTime) startTime = currentTime;
                    const progress = Math.min((currentTime - startTime) / duration, 1);
                    // Ease out expo
                    const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                    const currentVal = target * easeProgress;

                    el.textContent = prefix + currentVal.toFixed(decimals) + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    } else {
                        el.textContent = prefix + target.toFixed(decimals) + suffix;
                    }
                }

                requestAnimationFrame(animate);
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.3 });

    statElements.forEach(el => observer.observe(el));
}

/**
 * Tab Switching Helper for Widget
 */
function switchWidgetTab(tab) {
    const rateBtn = document.getElementById('tabRateBtn');
    const trackBtn = document.getElementById('tabTrackBtn');
    const rateContent = document.getElementById('rateTabContent');
    const trackContent = document.getElementById('trackTabContent');

    if (!rateBtn || !trackBtn) return;

    if (tab === 'rate') {
        rateBtn.className = 'flex items-center gap-2 px-4 py-2 text-xs sm:text-sm font-bold rounded-xl transition-all bg-brand-blue text-white shadow-sm';
        trackBtn.className = 'flex items-center gap-2 px-4 py-2 text-xs sm:text-sm font-bold text-gray-500 hover:text-brand-dark rounded-xl transition-all';
        rateContent.classList.remove('hidden');
        trackContent.classList.add('hidden');
    } else {
        trackBtn.className = 'flex items-center gap-2 px-4 py-2 text-xs sm:text-sm font-bold rounded-xl transition-all bg-brand-blue text-white shadow-sm';
        rateBtn.className = 'flex items-center gap-2 px-4 py-2 text-xs sm:text-sm font-bold text-gray-500 hover:text-brand-dark rounded-xl transition-all';
        trackContent.classList.remove('hidden');
        rateContent.classList.add('hidden');
    }

    if (typeof lucide !== 'undefined') lucide.createIcons();
}

/**
 * ==========================================================================
 * User Cookie Consent Alert & Privacy Preference Controller
 * ==========================================================================
 */

const COOKIE_STORAGE_KEY = 'omehub_cookie_consent';

function initCookieConsent() {
    const banner = document.getElementById('cookieConsentBanner');
    if (!banner) return;

    const savedConsent = getSavedCookieConsent();

    // If user hasn't made a choice yet, show the banner smoothly after 700ms
    if (!savedConsent) {
        setTimeout(() => {
            showCookieBanner();
        }, 700);
    }
}

function getSavedCookieConsent() {
    try {
        const raw = localStorage.getItem(COOKIE_STORAGE_KEY);
        if (raw) return JSON.parse(raw);
    } catch (e) {
        // LocalStorage fallback
    }

    // Cookie fallback
    const match = document.cookie.match(new RegExp('(^| )' + COOKIE_STORAGE_KEY + '=([^;]+)'));
    if (match) {
        try {
            return JSON.parse(decodeURIComponent(match[2]));
        } catch (e) { }
    }

    return null;
}

function saveCookieConsent(consentData) {
    const payload = {
        essential: true,
        analytics: !!consentData.analytics,
        marketing: !!consentData.marketing,
        timestamp: new Date().toISOString(),
        version: '1.0'
    };

    try {
        localStorage.setItem(COOKIE_STORAGE_KEY, JSON.stringify(payload));
    } catch (e) { }

    // 1-year expiration cookie
    const expiry = new Date(Date.now() + 365 * 24 * 60 * 60 * 1000).toUTCString();
    document.cookie = `${COOKIE_STORAGE_KEY}=${encodeURIComponent(JSON.stringify(payload))}; expires=${expiry}; path=/; SameSite=Lax`;
}

function showCookieBanner() {
    const banner = document.getElementById('cookieConsentBanner');
    if (!banner) return;

    banner.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
    banner.classList.add('translate-y-0', 'opacity-100');
    if (typeof lucide !== 'undefined') lucide.createIcons();
}

function hideCookieBanner() {
    const banner = document.getElementById('cookieConsentBanner');
    if (!banner) return;

    banner.classList.remove('translate-y-0', 'opacity-100');
    banner.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
}

function dismissCookieBanner(permanent = false) {
    hideCookieBanner();
    if (permanent && !getSavedCookieConsent()) {
        saveCookieConsent({ analytics: false, marketing: false });
    }
}

function acceptAllCookies() {
    saveCookieConsent({ analytics: true, marketing: true });
    hideCookieBanner();
    closeCookiePreferencesModal();
    showConsentConfirmationToast('All cookies accepted. Thank you!');
}

function acceptEssentialCookies() {
    saveCookieConsent({ analytics: false, marketing: false });
    hideCookieBanner();
    closeCookiePreferencesModal();
    showConsentConfirmationToast('Essential cookies only enabled.');
}

function openCookiePreferencesModal() {
    const modal = document.getElementById('cookiePreferencesModal');
    if (!modal) return;

    const current = getSavedCookieConsent() || { analytics: true, marketing: true };
    const analyticsToggle = document.getElementById('cookieAnalyticsToggle');
    const marketingToggle = document.getElementById('cookieMarketingToggle');

    if (analyticsToggle) analyticsToggle.checked = current.analytics !== false;
    if (marketingToggle) marketingToggle.checked = current.marketing !== false;

    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';

    if (typeof lucide !== 'undefined') lucide.createIcons();
}

function closeCookiePreferencesModal() {
    const modal = document.getElementById('cookiePreferencesModal');
    if (!modal) return;

    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
}

function saveCustomCookiePreferences() {
    const analyticsToggle = document.getElementById('cookieAnalyticsToggle');
    const marketingToggle = document.getElementById('cookieMarketingToggle');

    saveCookieConsent({
        analytics: analyticsToggle ? analyticsToggle.checked : false,
        marketing: marketingToggle ? marketingToggle.checked : false
    });

    hideCookieBanner();
    closeCookiePreferencesModal();
    showConsentConfirmationToast('Cookie preferences saved successfully.');
}

function showConsentConfirmationToast(message) {
    const toast = document.createElement('div');
    toast.className = 'fixed bottom-6 right-6 z-50 bg-brand-dark text-white text-xs font-bold px-4 py-3 rounded-2xl shadow-xl border border-white/10 flex items-center gap-2 transform translate-y-4 opacity-0 transition-all duration-300';
    toast.innerHTML = `
    <i data-lucide="check-circle" class="w-4 h-4 text-brand-green"></i>
    <span>${message}</span>
  `;
    document.body.appendChild(toast);
    if (typeof lucide !== 'undefined') lucide.createIcons();

    requestAnimationFrame(() => {
        toast.classList.remove('translate-y-4', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');
    });

    setTimeout(() => {
        toast.classList.remove('translate-y-0', 'opacity-100');
        toast.classList.add('translate-y-4', 'opacity-0');
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

