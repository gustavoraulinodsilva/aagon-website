@extends('layout.master')

@section('title', 'Aagon — Detalhes do Projeto')

@section('content')
    <div class="bg-slate-950 pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-7xl px-6 md:px-8">
            <div class="max-w-3xl space-y-6">
                <a href="{{ route('projects') }}" class="reveal inline-flex items-center text-xs font-semibold uppercase tracking-[0.18em] text-cyan-300 transition hover:text-cyan-200 opacity-0" data-reveal>
                    ← Voltar para Projetos
                </a>
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-amber-100 opacity-0 transition duration-700" data-reveal data-reveal-delay="50">
                    Logística
                </p>
                <h1 class="reveal text-4xl font-semibold leading-tight tracking-tight text-slate-50 opacity-0 transition duration-700 sm:text-5xl md:text-6xl" data-reveal data-reveal-delay="100">
                    Atlas Logistics
                </h1>
            </div>
        </section>
        <section class="mx-auto mt-12 max-w-7xl px-6 md:px-8">
            <div class="grid gap-6 rounded-2xl border border-slate-800 bg-slate-900/60 p-6 sm:grid-cols-3 md:p-8">
                <div>
                    <p class="text-xs uppercase tracking-[0.18em] text-slate-400">Cliente</p>
                    <p class="mt-1 text-base font-semibold text-slate-100">Atlas Logistics</p>
                </div>
                <div>
                    <p class="text-xs uppercase tracking-[0.18em] text-slate-400">Setor</p>
                    <p class="mt-1 text-base font-semibold text-slate-100">Logística e Transportes</p>
                </div>
                <div>
                    <p class="text-xs uppercase tracking-[0.18em] text-slate-400">Serviço Prestado</p>
                    <p class="mt-1 text-base font-semibold text-cyan-200">Software sob medida</p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-16 max-w-7xl px-6 md:px-8">
            <div class="grid gap-8 md:grid-cols-2">
                <div class="rounded-3xl border border-slate-800 bg-slate-900/70 p-8 space-y-3">
                    <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                        O Desafio
                    </p>
                    <h2 class="reveal text-2xl font-semibold text-slate-50 opacity-0 transition duration-700" data-reveal data-reveal-delay="80">
                        Qual era o problema?
                    </h2>
                    <p class="reveal text-sm leading-relaxed text-slate-400 opacity-0 transition duration-700" data-reveal data-reveal-delay="120">
                        Rastreamento ineficiente e dispersão de dados operacionais que desaceleravam o atendimento e provocavam erros no envio de cargas em larga escala.
                    </p>
                </div>

                <div class="rounded-3xl border border-cyan-900/30 bg-slate-900/70 p-8 space-y-3">
                    <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-amber-100 opacity-0 transition duration-700" data-reveal>
                        A Solução
                    </p>
                    <h2 class="reveal text-2xl font-semibold text-slate-50 opacity-0 transition duration-700" data-reveal data-reveal-delay="80">
                        O que a Aagon construiu
                    </h2>
                    <p class="reveal text-sm leading-relaxed text-slate-400 opacity-0 transition duration-700" data-reveal data-reveal-delay="120">
                        Desenvolvimento de um portal centralizado com acompanhamento em tempo real, roteirização inteligente e painéis analíticos automatizados.
                    </p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-16 max-w-7xl px-6 md:px-8">
            <div class="rounded-3xl border border-slate-800 bg-slate-900/60 p-8 md:p-10 space-y-4">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                    Impacto
                </p>
                <h2 class="reveal text-3xl font-semibold text-slate-50 opacity-0 transition duration-700" data-reveal data-reveal-delay="80">
                    O que mudou na operação
                </h2>
                <p class="reveal max-w-3xl text-sm leading-relaxed text-slate-300 opacity-0 transition duration-700 md:text-base" data-reveal data-reveal-delay="120">
                    O novo sistema reduziu o tempo médio de resposta operacional e proporcionou visibilidade instantânea dos fluxos de entregas, permitindo decisões rápidas e aumento direto da eficiência.
                </p>
            </div>
        </section>
        <section class="mx-auto mt-16 max-w-7xl px-6 md:px-8">
            <div class="flex flex-wrap items-center justify-between gap-6 rounded-2xl border border-slate-800 bg-slate-950/80 p-6 md:p-8">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-slate-400">Tecnologias Utilizadas</p>
                <div class="flex flex-wrap gap-3">
                    @for ($i = 1; $i <= 4; $i++)
                        <span class="rounded-full border border-cyan-950 bg-cyan-400/10 px-4 py-1.5 text-xs font-medium text-cyan-200">
                            Stack Tech #{{ $i }}
                        </span>
                    @endfor
                </div>
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-7xl px-6 md:px-8">
            <div class="mb-8 space-y-3">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                    Interface
                </p>
                <h2 class="reveal text-3xl font-semibold text-slate-50 opacity-0 transition duration-700" data-reveal data-reveal-delay="80">
                    Galeria e Mockups
                </h2>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="reveal h-64 overflow-hidden rounded-2xl border border-slate-800 bg-[radial-gradient(circle_at_18%_20%,rgba(34,211,238,0.25),transparent_45%),linear-gradient(140deg,rgba(15,23,42,0.8),rgba(30,41,59,0.3))] opacity-0 transition duration-700" data-reveal data-reveal-delay="{{ 100 + ($i * 80) }}"></div>
                @endfor
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="reveal overflow-hidden rounded-3xl border border-cyan-300/30 bg-[linear-gradient(120deg,rgba(34,211,238,0.16),rgba(15,23,42,0.9)_50%,rgba(245,158,11,0.12))] p-8 opacity-0 transition duration-700 md:p-12" data-reveal>
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-100">Próximo Passo</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-50 md:text-5xl">Tem um problema parecido?</h2>
                <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-300 md:text-base">
                    Vamos mapear o seu cenário e construir juntos a solução tecnológica ideal para sua empresa.
                </p>
                <a href="#" class="mt-7 inline-flex items-center justify-center rounded-full bg-cyan-300 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-950 transition hover:bg-cyan-200">
                    Converse com a Aagon
                </a>
            </div>
        </section>
    </div>
@endsection