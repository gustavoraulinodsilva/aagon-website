function init(){
    initRevealAnimations();
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