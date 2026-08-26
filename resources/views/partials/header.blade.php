<header
    class="fixed inset-x-0 top-0 z-50 border-b border-transparent bg-transparent backdrop-blur-md transition-all duration-300 data-[scrolled=true]:border-[#2D2D2D] data-[scrolled=true]:bg-[#121212]/90"
    data-main-header data-scrolled="false">
    <div class="mx-auto flex h-20 w-full max-w-360 items-center justify-between px-6 md:px-16">
        <a href="{{ route('home') }}" class="group inline-flex items-center" aria-label="Aagon">
            <div class="text-2xl font-bold tracking-tighter text-[#F5F5F5] transition group-hover:text-[#0055FF]">
                AAGON
            </div>
        </a>
        <nav class="hidden flex-1 justify-center gap-8 text-sm font-medium text-[#A1A1AA] md:flex"
            aria-label="Navegação principal">
            <a href="{{ route('home') }}"
                class="transition hover:text-[#F5F5F5] {{ request()->routeIs('home') ? 'border-b-2 border-[#0055FF] pb-1 font-bold text-[#0055FF]' : '' }}">
                Home
            </a>

            <a href="{{ route('about') }}"
                class="transition hover:text-[#F5F5F5] {{ request()->routeIs('about') ? 'border-b-2 border-[#0055FF] pb-1 font-bold text-[#0055FF]' : '' }}">
                About
            </a>

            <a href="{{ route('services') }}"
                class="transition hover:text-[#F5F5F5] {{ request()->routeIs('services') ? 'border-b-2 border-[#0055FF] pb-1 font-bold text-[#0055FF]' : '' }}">
                Services
            </a>

            <a href="{{ route('projects') }}"
                class="transition hover:text-[#F5F5F5] {{ request()->routeIs('projects') ? 'border-b-2 border-[#0055FF] pb-1 font-bold text-[#0055FF]' : '' }}">
                Projects
            </a>

            <a href="{{ route('team') }}"
                class="transition hover:text-[#F5F5F5] {{ request()->routeIs('team') ? 'border-b-2 border-[#0055FF] pb-1 font-bold text-[#0055FF]' : '' }}">
                Team
            </a>

            <a href="{{ route('contact') }}"
                class="transition hover:text-[#F5F5F5] {{ request()->routeIs('contact') ? 'border-b-2 border-[#0055FF] pb-1 font-bold text-[#0055FF]' : '' }}">
                Contact
            </a>
        </nav>
        <div class="hidden items-center md:flex">
            <a href="{{ route('contact') }}"
                class="rounded bg-[#0055FF] px-6 py-3 font-mono text-xs font-medium uppercase tracking-wider text-white transition hover:bg-opacity-90 active:scale-95">
                Start a conversation
            </a>
        </div>
        <button type="button"
            class="inline-flex h-10 w-10 items-center justify-center rounded border border-[#2D2D2D] bg-[#1A1A1A] text-[#F5F5F5] transition hover:border-[#0055FF] hover:text-[#0055FF] md:hidden"
            aria-label="Abrir menu" aria-controls="mobile-side-menu" aria-expanded="false" data-mobile-menu-toggle>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
</header>

<div class="fixed inset-0 z-40 hidden bg-[#121212]/80 backdrop-blur-sm md:hidden" data-mobile-menu-overlay></div>
<aside id="mobile-side-menu"
    class="fixed right-0 top-0 z-50 flex h-dvh w-80 max-w-[85vw] translate-x-full flex-col border-l border-[#2D2D2D] bg-[#121212] px-6 py-6 transition-transform duration-300 ease-out md:hidden"
    aria-hidden="true" data-mobile-menu-panel>

    <div class="mb-8 flex items-center justify-between border-b border-[#2D2D2D] pb-4">
        <p class="font-mono text-xs font-semibold uppercase tracking-widest text-[#0055FF]">Menu</p>
        <button type="button"
            class="inline-flex h-9 w-9 items-center justify-center rounded border border-[#2D2D2D] bg-[#1A1A1A] text-[#F5F5F5] transition hover:border-[#0055FF] hover:text-[#0055FF]"
            aria-label="Fechar menu" data-mobile-menu-close>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <nav class="flex flex-col gap-3 font-body-md text-sm text-[#A1A1AA]" aria-label="Navegação principal mobile">
        <a href="{{ route('home') }}"
            class="rounded px-3 py-2 transition hover:bg-[#1A1A1A] hover:text-[#F5F5F5] {{ request()->routeIs('home') ? 'bg-[#1A1A1A] font-bold text-[#0055FF]' : '' }}">
            Home
        </a>

        <a href="{{ route('about') }}"
            class="rounded px-3 py-2 transition hover:bg-[#1A1A1A] hover:text-[#F5F5F5] {{ request()->routeIs('about') ? 'bg-[#1A1A1A] font-bold text-[#0055FF]' : '' }}">
            About
        </a>

        <a href="{{ route('services') }}"
            class="rounded px-3 py-2 transition hover:bg-[#1A1A1A] hover:text-[#F5F5F5] {{ request()->routeIs('services.*') ? 'bg-[#1A1A1A] font-bold text-[#0055FF]' : '' }}">
            Services
        </a>

        <a href="{{ route('projects') }}"
            class="rounded px-3 py-2 transition hover:bg-[#1A1A1A] hover:text-[#F5F5F5] {{ request()->routeIs('projects.*') ? 'bg-[#1A1A1A] font-bold text-[#0055FF]' : '' }}">
            Projects
        </a>

        <a href="{{ route('team') }}"
            class="rounded px-3 py-2 transition hover:bg-[#1A1A1A] hover:text-[#F5F5F5] {{ request()->routeIs('team') ? 'bg-[#1A1A1A] font-bold text-[#0055FF]' : '' }}">
            Team
        </a>

        <a href="{{ route('contact') }}"
            class="rounded px-3 py-2 transition hover:bg-[#1A1A1A] hover:text-[#F5F5F5] {{ request()->routeIs('contact') ? 'bg-[#1A1A1A] font-bold text-[#0055FF]' : '' }}">
            Contact
        </a>
    </nav>

    <div class="mt-auto pt-6 border-t border-[#2D2D2D]">
        <a href="{{ route('contact') }}"
            class="inline-flex w-full items-center justify-center rounded bg-[#0055FF] px-4 py-3 font-mono text-xs font-medium uppercase tracking-wider text-white transition hover:bg-opacity-90">
            Start a conversation
        </a>
    </div>
</aside>
