@php
    $navItems = [
        ['label' => 'Home', 'href' => '#'],
        ['label' => 'Sobre', 'href' => '#'],
        ['label' => 'Servicos', 'href' => '#'],
        ['label' => 'Projetos', 'href' => '#'],
        ['label' => 'Equipe', 'href' => '#'],
        ['label' => 'Contato', 'href' => '#'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-cyan-950/50 bg-slate-950/85 backdrop-blur-xl">
    <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-5 py-4 md:px-8">
        <a href="#" class="group inline-flex items-center gap-3" aria-label="Aagon">
            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-cyan-400/30 bg-cyan-400/10 text-xs font-bold tracking-[0.18em] text-cyan-300 transition group-hover:border-cyan-300 group-hover:text-cyan-200">
                AG
            </span>

            <div class="leading-tight">
                <p class="text-base font-semibold tracking-[0.3em] text-slate-50 md:text-lg">AAGON</p>
                <p class="text-[10px] uppercase tracking-[0.26em] text-slate-400">Digital Engineering</p>
            </div>
        </a>

        <button
            type="button"
            class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-cyan-300/30 bg-cyan-300/10 text-cyan-100 transition hover:border-cyan-200 hover:bg-cyan-300/20 md:hidden"
            aria-label="Abrir menu"
            aria-controls="mobile-side-menu"
            aria-expanded="false"
            data-mobile-menu-toggle
        >
            <span class="sr-only">Abrir menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <div class="hidden items-center gap-3 md:flex">
            <span class="rounded-full border border-amber-300/30 bg-amber-300/10 px-3 py-1 text-[11px] font-medium uppercase tracking-[0.2em] text-amber-100">
                Estudio 2026
            </span>
            <a href="#" class="rounded-full border border-cyan-300/40 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-cyan-100 transition hover:border-cyan-200 hover:bg-cyan-300/10 hover:text-cyan-50">
                Iniciar projeto
            </a>
        </div>
    </div>

    <div class="hidden border-t border-cyan-950/40 bg-slate-950/40 md:block">
        <nav class="mx-auto flex w-full max-w-7xl gap-3 overflow-x-auto px-5 py-3 text-xs font-medium uppercase tracking-[0.16em] text-slate-300 md:px-8" aria-label="Navegacao principal">
            @foreach ($navItems as $item)
                <a href="{{ $item['href'] }}" class="whitespace-nowrap rounded-full border border-transparent px-3 py-1.5 transition hover:border-cyan-300/40 hover:bg-cyan-300/10 hover:text-cyan-100">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</header>

<div class="fixed inset-0 z-40 hidden bg-slate-950/70 backdrop-blur-sm md:hidden" data-mobile-menu-overlay></div>

<aside
    id="mobile-side-menu"
    class="fixed right-0 top-0 z-50 flex h-dvh w-80 max-w-[86vw] translate-x-full flex-col border-l border-cyan-900/50 bg-slate-950 px-5 py-5 transition-transform duration-300 ease-out md:hidden"
    aria-hidden="true"
    data-mobile-menu-panel
>
    <div class="mb-6 flex items-center justify-between">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-100">Menu</p>
        <button
            type="button"
            class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-cyan-300/30 bg-cyan-300/10 text-cyan-100 transition hover:border-cyan-200 hover:bg-cyan-300/20"
            aria-label="Fechar menu"
            data-mobile-menu-close
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <nav class="flex flex-col gap-2" aria-label="Navegacao principal mobile">
        @foreach ($navItems as $item)
            <a href="{{ $item['href'] }}" class="rounded-lg border border-transparent px-3 py-2.5 text-sm font-medium uppercase tracking-[0.12em] text-slate-200 transition hover:border-cyan-300/40 hover:bg-cyan-300/10 hover:text-cyan-100">
                {{ $item['label'] }}
            </a>
        @endforeach
    </nav>

    <a href="#" class="mt-6 inline-flex w-full items-center justify-center rounded-full border border-cyan-300/40 px-4 py-2.5 text-xs font-semibold uppercase tracking-[0.2em] text-cyan-100 transition hover:border-cyan-200 hover:bg-cyan-300/10 hover:text-cyan-50">
        Iniciar projeto
    </a>
</aside>

<script>
    (() => {
        const toggle = document.querySelector('[data-mobile-menu-toggle]');
        const panel = document.querySelector('[data-mobile-menu-panel]');
        const overlay = document.querySelector('[data-mobile-menu-overlay]');
        const closeButton = document.querySelector('[data-mobile-menu-close]');

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
    })();
</script>