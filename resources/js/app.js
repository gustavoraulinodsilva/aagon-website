import './pages/home';
import './pages/about';
import './pages/projects';
import './pages/contact';

function init() {
    initHeader();
    initRevealAnimations();
}

function initHeader() {
    const header = document.querySelector('[data-main-header]');
    const toggle = document.querySelector('[data-mobile-menu-toggle]');
    const panel = document.querySelector('[data-mobile-menu-panel]');
    const overlay = document.querySelector('[data-mobile-menu-overlay]');
    const closeButton = document.querySelector('[data-mobile-menu-close]');

    if (!header) return;

    const updateHeaderState = () => {
        header.dataset.scrolled = window.scrollY > 10 ? 'true' : 'false';
    };

    updateHeaderState();
    window.addEventListener('scroll', updateHeaderState, { passive: true });

    if (!toggle || !panel || !overlay || !closeButton) return;

    if (panel.classList.contains('translate-x-full')) {
        panel.setAttribute('inert', '');
        panel.setAttribute('aria-hidden', 'true');
    }

    const openMenu = () => {
        toggle.setAttribute('aria-expanded', 'true');
        panel.removeAttribute('inert');
        panel.setAttribute('aria-hidden', 'false');
        panel.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');

        closeButton.focus();
    };

    const closeMenu = () => {
        toggle.setAttribute('aria-expanded', 'false');
        panel.setAttribute('inert', '');
        panel.setAttribute('aria-hidden', 'true');
        panel.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');

        toggle.focus();
    };

    toggle.addEventListener('click', () => {
        const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
        if (isExpanded) {
            closeMenu();
            return;
        }

        openMenu();
    });

    closeButton.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
            closeMenu();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            closeMenu();
        }
    });
}

function initRevealAnimations() {
    const revealItems = document.querySelectorAll('[data-reveal]');
    if (!revealItems.length) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
        revealItems.forEach((item) => {
            item.classList.remove('opacity-0', 'translate-y-6');
            item.classList.add('opacity-100', 'translate-y-0');
        });

        return;
    }

    const observer = new IntersectionObserver(
        (entries, currentObserver) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                const element = entry.target;
                const delay = Number(element.getAttribute('data-reveal-delay') || 0);
                element.style.transitionDelay = `${delay}ms`;
                element.classList.remove('opacity-0', 'translate-y-6');
                element.classList.add('opacity-100', 'translate-y-0');
                currentObserver.unobserve(element);
            });
        },
        {
            threshold: 0.2,
            rootMargin: '0px 0px -60px 0px',
        }
    );

    revealItems.forEach((item) => observer.observe(item));
}

document.addEventListener('DOMContentLoaded', init);
