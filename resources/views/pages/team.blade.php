@extends('layout.master')

@section('title', 'Aagon — Equipe')

@section('content')
    <div class="bg-slate-950 pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-7xl px-6 md:px-8">
            <div class="max-w-3xl space-y-6">
                <p class="reveal inline-flex rounded-full border border-cyan-200/30 bg-cyan-200/10 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.22em] text-cyan-100 opacity-0 transition duration-700" data-reveal>
                    Nosso Time
                </p>
                <h1 class="reveal text-4xl font-semibold leading-tight tracking-tight text-slate-50 opacity-0 transition duration-700 sm:text-5xl md:text-6xl" data-reveal data-reveal-delay="100">
                    Pessoas por trás <span class="text-cyan-200">da tecnologia.</span>
                </h1>
                <p class="reveal text-base leading-relaxed text-slate-300 opacity-0 transition duration-700 sm:text-lg" data-reveal data-reveal-delay="180">
                    Um time multidisciplinar focado em alinhar visão estratégica, arquitetura técnica e execução de alto impacto.
                </p>
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-7xl px-6 md:px-8">
            <div class="rounded-3xl border border-slate-800 bg-slate-900/60 p-8 md:p-12">
                <div class="max-w-2xl space-y-3">
                    <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                        Essência
                    </p>
                    <h2 class="reveal text-2xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-3xl" data-reveal data-reveal-delay="90">
                        Engenharia e estratégia sem espaço para vaidade.
                    </h2>
                    <p class="reveal text-sm leading-relaxed text-slate-400 opacity-0 transition duration-700 md:text-base" data-reveal data-reveal-delay="150">
                        Acreditamos na colaboração transparente e na responsabilidade técnica. Projetamos sistemas pensando na evolução contínua dos negócios de nossos parceiros.
                    </p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="mb-12 space-y-3">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                    Liderança & Especialistas
                </p>
                <h2 class="reveal text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="90">
                    Quem faz acontecer.
                </h2>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @for ($i = 1; $i <= 6; $i++)
                    <article class="reveal group flex flex-col items-center rounded-2xl border border-slate-800 bg-slate-900/70 p-8 text-center opacity-0 transition duration-700 hover:border-cyan-300/40 hover:bg-slate-900" data-reveal data-reveal-delay="{{ 100 + ($i * 60) }}">
                        <div class="relative flex h-28 w-28 items-center justify-center rounded-full border border-cyan-400/30 bg-[radial-gradient(circle_at_30%_30%,rgba(34,211,238,0.25),transparent_70%),linear-gradient(140deg,rgba(15,23,42,0.9),rgba(30,41,59,0.5))] transition-all duration-300 group-hover:border-cyan-300 group-hover:scale-105">
                            <span class="text-xs font-bold uppercase tracking-[0.2em] text-cyan-200">Membro {{ $i }}</span>
                        </div>

                        <div class="mt-6 space-y-2">
                            <h3 class="text-xl font-semibold text-slate-100">Nome do Membro #{{ $i }}</h3>
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-100">Cargo / Função #{{ $i }}</p>
                            <p class="pt-2 text-xs leading-relaxed text-slate-400">
                                Bio curta explicando o foco de atuação do especialista e sua bagagem técnica.
                            </p>
                        </div>

                        <div class="mt-6 pt-2">
                            <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.18em] text-cyan-300 transition hover:text-cyan-100">
                                LinkedIn <span class="ml-1">↗</span>
                            </a>
                        </div>
                    </article>
                @endfor
            </div>
        </section>

        {{-- SEÇÃO CURTA DE CULTURA --}}
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="rounded-3xl border border-cyan-900/30 bg-slate-900/70 p-8 text-center md:p-12">
                <p class="reveal text-xs font-semibold uppercase tracking-[0.22em] text-amber-100 opacity-0 transition duration-700" data-reveal>
                    Nossa Filosofia
                </p>
                <p class="reveal mx-auto mt-4 max-w-2xl text-lg font-medium leading-relaxed text-slate-200 opacity-0 transition duration-700 md:text-xl" data-reveal data-reveal-delay="90">
                    "Curiosidade, precisão e engenharia orientam a forma como trabalhamos."
                </p>
            </div>
        </section>

        {{-- CTA --}}
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="reveal overflow-hidden rounded-3xl border border-cyan-300/30 bg-[linear-gradient(120deg,rgba(34,211,238,0.16),rgba(15,23,42,0.9)_50%,rgba(245,158,11,0.12))] p-8 opacity-0 transition duration-700 md:p-12" data-reveal>
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-100">Conecte-se conosco</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-50 md:text-5xl">Quer trabalhar com a gente?</h2>
                <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-300 md:text-base">
                    Estamos sempre em busca de talentos e novas parcerias técnicas para encarar desafios complexos.
                </p>
                <a href="#" class="mt-7 inline-flex items-center justify-center rounded-full bg-cyan-300 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-950 transition hover:bg-cyan-200">
                    Fale com o time
                </a>
            </div>
        </section>
    </div>
@endsection