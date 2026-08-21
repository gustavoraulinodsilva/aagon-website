@php
    $quickLinks = [
        ['label' => 'Sobre', 'href' => '#'],
        ['label' => 'Servicos', 'href' => '#'],
        ['label' => 'Projetos', 'href' => '#'],
        ['label' => 'Equipe', 'href' => '#'],
        ['label' => 'Contato', 'href' => '#'],
    ];

    $contactInfo = [
        'contato@aagon.com',
        '+55 11 0000-0000',
        'Sao Paulo, Brasil',
    ];
@endphp

<footer class="relative overflow-hidden border-t border-cyan-950/50 bg-slate-950 text-slate-300">
    <div class="pointer-events-none absolute -left-20 top-0 h-56 w-56 rounded-full bg-cyan-500/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-16 bottom-0 h-52 w-52 rounded-full bg-amber-400/10 blur-3xl"></div>

    <div class="relative mx-auto grid w-full max-w-7xl gap-10 px-5 py-12 md:grid-cols-3 md:px-8">
        <section class="space-y-4 text-center md:text-left">
            <p class="text-[11px] uppercase tracking-[0.24em] text-cyan-200">Aagon</p>
            <h2 class="mx-auto max-w-xs text-2xl font-semibold leading-tight text-slate-50 md:mx-0">
                Tecnologia que transforma complexidade em solucao.
            </h2>
            <p class="mx-auto max-w-sm text-sm leading-relaxed text-slate-400 md:mx-0">
                Construimos produtos e plataformas digitais sob medida para empresas em crescimento.
            </p>
        </section>

        <section class="text-center md:text-left">
            <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-100">Navegacao</h3>
            <ul class="mt-4 space-y-1 text-sm text-slate-300">
                @foreach ($quickLinks as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="inline-flex rounded-md px-2 py-1.5 transition hover:bg-cyan-300/10 hover:text-cyan-200">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>

        <section class="text-center md:text-left">
            <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-100">Contato</h3>
            <ul class="mt-4 space-y-3 text-sm text-slate-300">
                <li>
                    <a href="mailto:{{ $contactInfo[0] }}" class="inline-flex rounded-md px-2 py-1.5 transition hover:bg-cyan-300/10 hover:text-cyan-200">
                        {{ $contactInfo[0] }}
                    </a>
                </li>
                <li>
                    <a href="tel:+551100000000" class="inline-flex rounded-md px-2 py-1.5 transition hover:bg-cyan-300/10 hover:text-cyan-200">
                        {{ $contactInfo[1] }}
                    </a>
                </li>
                <li class="px-2 py-1.5">{{ $contactInfo[2] }}</li>
            </ul>
            <a href="#" class="mt-6 inline-flex w-full items-center justify-center rounded-full border border-cyan-300/40 px-4 py-2.5 text-xs font-semibold uppercase tracking-[0.2em] text-cyan-100 transition hover:border-cyan-200 hover:bg-cyan-300/10 hover:text-cyan-50 md:w-auto">
                Falar com a Aagon
            </a>
        </section>
    </div>

    <div class="relative border-t border-cyan-950/40">
        <div class="mx-auto flex w-full max-w-7xl flex-col gap-3 px-5 py-5 text-center text-xs text-slate-500 md:flex-row md:items-center md:justify-between md:px-8 md:text-left">
            <p>&copy; {{ date('Y') }} Aagon. Todos os direitos reservados.</p>
            <p>Corporate Website &amp; Content Management System</p>
        </div>
    </div>
</footer>