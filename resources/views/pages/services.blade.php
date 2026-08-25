@extends('layout.master')

@section('title', 'Aagon — Serviços')

@section('content')
    <div class="bg-slate-950 pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-7xl px-6 md:px-8">
            <div class="max-w-3xl space-y-6">
                <p class="reveal inline-flex rounded-full border border-cyan-200/30 bg-cyan-200/10 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.22em] text-cyan-100 opacity-0 transition duration-700" data-reveal>
                    Nossos Serviços
                </p>
                <h1 class="reveal text-4xl font-semibold leading-tight tracking-tight text-slate-50 opacity-0 transition duration-700 sm:text-5xl md:text-6xl" data-reveal data-reveal-delay="100">
                    Soluções para <span class="text-cyan-200">problemas complexos.</span>
                </h1>
                <p class="reveal text-base leading-relaxed text-slate-300 opacity-0 transition duration-700 sm:text-lg" data-reveal data-reveal-delay="180">
                    Construímos tecnologia sob medida para operações que precisam evoluir com segurança, performance e clareza de negócio.
                </p>
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-7xl px-6 md:px-8">
            <div class="rounded-3xl border border-cyan-900/30 bg-slate-900/70 p-8 md:p-12">
                <div class="max-w-2xl space-y-4">
                    <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                        Filosofia de Engenharia
                    </p>
                    <h2 class="reveal text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="90">
                        Tecnologia não é o ponto de partida. O problema é.
                    </h2>
                    <p class="reveal text-sm leading-relaxed text-slate-400 opacity-0 transition duration-700 md:text-base" data-reveal data-reveal-delay="150">
                        Antes de escrever qualquer linha de código, entendemos a fundo o gargalo operacional. Ferramentas e linguagens são apenas meios para atingir impacto real no seu resultado.
                    </p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="mb-10 space-y-3">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                    Especialidades
                </p>
                <h2 class="reveal text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="90">
                    Como podemos impulsionar sua operação.
                </h2>
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                @for ($i = 1; $i <= 4; $i++)
                    <article class="reveal group flex flex-col justify-between rounded-2xl border border-slate-800 bg-slate-900/70 p-8 opacity-0 transition duration-700 hover:border-cyan-300/40 hover:bg-slate-900" data-reveal data-reveal-delay="{{ 100 + ($i * 80) }}">
                        <div>
                            <span class="text-xs font-semibold tracking-[0.22em] text-cyan-300">0{{ $i }}</span>
                            <h3 class="mt-3 text-2xl font-semibold text-slate-100">Serviço Especializado #{{ $i }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-400">Descrição resumida da solução focada em resolver desafios operacionais complexos.</p>
                        </div>
                        <div class="mt-8 pt-4">
                            <a href="#" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.18em] text-cyan-200 transition group-hover:text-cyan-100">
                                Saiba mais <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">→</span>
                            </a>
                        </div>
                    </article>
                @endfor
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="mb-10 space-y-3">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-amber-100 opacity-0 transition duration-700" data-reveal>
                    Processo
                </p>
                <h2 class="reveal text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="90">
                    Como trabalhamos
                </h2>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                @for ($i = 1; $i <= 4; $i++)
                    <article class="reveal rounded-2xl border border-amber-200/15 bg-slate-900/80 p-6 opacity-0 transition duration-700 hover:border-amber-200/35" data-reveal data-reveal-delay="{{ 100 + ($i * 70) }}">
                        <p class="text-xs font-semibold tracking-[0.22em] text-amber-100">0{{ $i }}</p>
                        <h3 class="mt-2 text-xl font-semibold text-slate-100">Etapa {{ $i }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-400">Mapeamento e execução estratégica para garantir validação rápida.</p>
                    </article>
                @endfor
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="reveal overflow-hidden rounded-3xl border border-cyan-300/30 bg-[linear-gradient(120deg,rgba(34,211,238,0.16),rgba(15,23,42,0.9)_50%,rgba(245,158,11,0.12))] p-8 opacity-0 transition duration-700 md:p-12" data-reveal>
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-100">Próximo passo</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-50 md:text-5xl">Tem um desafio?</h2>
                <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-300 md:text-base">
                    Vamos mapear seu cenário e entender como podemos ajudar a construir a solução ideal.
                </p>
                <a href="#" class="mt-7 inline-flex items-center justify-center rounded-full bg-cyan-300 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-950 transition hover:bg-cyan-200">
                    Fale conosco
                </a>
            </div>
        </section>
    </div>
@endsection