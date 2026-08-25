@extends('layout.master')

@section('title', 'Aagon — Software sob medida')

@section('content')
    <div class="bg-slate-950 pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-7xl px-6 md:px-8">
            <div class="max-w-3xl space-y-6">
                <a href="{{ route('services') }}" class="reveal inline-flex items-center text-xs font-semibold uppercase tracking-[0.18em] text-cyan-300 transition hover:text-cyan-200 opacity-0" data-reveal>
                    ← Voltar para Serviços
                </a>
                <h1 class="reveal text-4xl font-semibold leading-tight tracking-tight text-slate-50 opacity-0 transition duration-700 sm:text-5xl md:text-6xl" data-reveal data-reveal-delay="100">
                    Software <span class="text-cyan-200">sob medida.</span>
                </h1>
                <p class="reveal text-base leading-relaxed text-slate-300 opacity-0 transition duration-700 sm:text-lg" data-reveal data-reveal-delay="180">
                    Sistemas desenvolvidos para se adaptar à forma como sua empresa realmente trabalha, sem forçar sua operação a caber em moldes prontos.
                </p>
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-7xl px-6 md:px-8">
            <div class="grid gap-8 rounded-3xl border border-slate-800 bg-slate-900/60 p-8 md:grid-cols-2 md:p-12">
                <div class="space-y-3">
                    <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                        O Desafio
                    </p>
                    <h2 class="reveal text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700" data-reveal data-reveal-delay="90">
                        Por que soluções genéricas falham?
                    </h2>
                </div>
                <div class="space-y-4 text-slate-300">
                    <p class="reveal text-sm leading-relaxed opacity-0 transition duration-700" data-reveal data-reveal-delay="120">
                        Cada operação possui regras de negócio únicas, integrações específicas e dinâmicas de equipe que plataformas de prateleira raramente atendem.
                    </p>
                    <p class="reveal text-sm leading-relaxed opacity-0 transition duration-700" data-reveal data-reveal-delay="160">
                        Software sob medida elimina a necessidade de gambiarras manuais e planilhas paralelas, criando uma base sólida para o crescimento.
                    </p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-7xl px-6 md:px-8">
            <div class="mb-8 space-y-3">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                    Escopo
                </p>
                <h2 class="reveal text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="90">
                    O que desenvolvemos
                </h2>
            </div>
            <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="reveal flex items-center rounded-xl border border-slate-800 bg-slate-900/70 px-5 py-4 text-sm text-slate-200 opacity-0 transition duration-700 hover:border-cyan-300/30" data-reveal data-reveal-delay="{{ 100 + ($i * 50) }}">
                        <span class="mr-3 h-2 w-2 rounded-full bg-cyan-300"></span>
                        Item de Entrega #{{ $i }}
                    </div>
                @endfor
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="mb-10 space-y-3">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-amber-100 opacity-0 transition duration-700" data-reveal>
                    Metodologia
                </p>
                <h2 class="reveal text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="90">
                    Nossa abordagem
                </h2>
            </div>

            <div class="grid gap-4 md:grid-cols-5">
                @for ($i = 1; $i <= 5; $i++)
                    <article class="reveal relative rounded-2xl border border-amber-200/15 bg-slate-900/80 p-5 opacity-0 transition duration-700 hover:border-amber-200/35" data-reveal data-reveal-delay="{{ 100 + ($i * 70) }}">
                        <span class="text-xs font-bold text-amber-100">0{{ $i }}</span>
                        <h3 class="mt-2 text-lg font-semibold text-slate-100">Etapa {{ $i }}</h3>
                        <p class="mt-2 text-xs leading-relaxed text-slate-400">Descrição resumida da etapa do processo operacional.</p>
                    </article>
                @endfor
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-7xl px-6 md:px-8">
            <div class="flex flex-wrap items-center justify-between gap-6 rounded-2xl border border-slate-800 bg-slate-950/80 p-6 md:p-8">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-slate-400">Stack e Tecnologias</p>
                <div class="flex flex-wrap gap-3">
                    @for ($i = 1; $i <= 4; $i++)
                        <span class="rounded-full border border-cyan-950 bg-cyan-400/10 px-4 py-1.5 text-xs font-medium text-cyan-200">
                            Tecnologia #{{ $i }}
                        </span>
                    @endfor
                </div>
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="mb-8 space-y-3">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-amber-100 opacity-0 transition duration-700" data-reveal>
                    Projeto Relacionado
                </p>
            </div>

            <article class="reveal overflow-hidden rounded-3xl border border-slate-800 bg-slate-900/80 opacity-0 transition duration-700 hover:border-amber-200/30 md:grid md:grid-cols-[1fr_1.3fr]" data-reveal>
                <div class="h-48 bg-[radial-gradient(circle_at_18%_20%,rgba(34,211,238,0.35),transparent_45%),linear-gradient(140deg,rgba(15,23,42,0.6),rgba(30,41,59,0.2))] md:h-auto"></div>
                <div class="space-y-4 p-8 md:p-10">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-100">Logística</p>
                    <h3 class="text-2xl font-semibold text-slate-100">Atlas Logistics</h3>
                    <p class="text-sm leading-relaxed text-slate-400">
                        Sistema operacional completo para roteirização e monitoramento de frota em tempo real, desenvolvido para suportar alta volumetria.
                    </p>
                    <a href="#" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.18em] text-cyan-200 transition hover:text-cyan-100">
                        Ver projeto <span class="ml-2">→</span>
                    </a>
                </div>
            </article>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="reveal overflow-hidden rounded-3xl border border-cyan-300/30 bg-[linear-gradient(120deg,rgba(34,211,238,0.16),rgba(15,23,42,0.9)_50%,rgba(245,158,11,0.12))] p-8 opacity-0 transition duration-700 md:p-12" data-reveal>
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-100">Inicie sua plataforma</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-50 md:text-5xl">Tem um sistema em mente?</h2>
                <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-300 md:text-base">
                    Fale com nosso time de engenharia para validar suas ideias e desenhar a melhor estratégia.
                </p>
                <a href="#" class="mt-7 inline-flex items-center justify-center rounded-full bg-cyan-300 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-950 transition hover:bg-cyan-200">
                    Converse com a Aagon
                </a>
            </div>
        </section>
    </div>
@endsection