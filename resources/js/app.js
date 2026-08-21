import './pages/home';

function init() {
    initHeader();
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

    const openMenu = () => {
        toggle.setAttribute('aria-expanded', 'true');
        panel.setAttribute('aria-hidden', 'false');
        panel.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    };

    const closeMenu = () => {
        toggle.setAttribute('aria-expanded', 'false');
        panel.setAttribute('aria-hidden', 'true');
        panel.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
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

document.addEventListener('DOMContentLoaded', init);
