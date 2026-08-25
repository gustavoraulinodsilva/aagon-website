@extends('layout.master')

@section('title', 'Aagon — Projetos')

@section('content')
    <div class="bg-slate-950 pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-7xl px-6 md:px-8">
            <div class="max-w-3xl space-y-6">
                <p class="reveal inline-flex rounded-full border border-cyan-200/30 bg-cyan-200/10 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.22em] text-cyan-100 opacity-0 transition duration-700" data-reveal>
                    Nosso Portfólio
                </p>
                <h1 class="reveal text-4xl font-semibold leading-tight tracking-tight text-slate-50 opacity-0 transition duration-700 sm:text-5xl md:text-6xl" data-reveal data-reveal-delay="100">
                    Projetos que <span class="text-cyan-200">transformam operações.</span>
                </h1>
                <p class="reveal text-base leading-relaxed text-slate-300 opacity-0 transition duration-700 sm:text-lg" data-reveal data-reveal-delay="180">
                    Conheça como ajudamos empresas de diferentes segmentos a resolver desafios complexos com engenharia de software sob medida.
                </p>
            </div>
        </section>
        <section class="mx-auto mt-16 max-w-7xl px-6 md:px-8">
            <div class="reveal flex flex-wrap gap-2 pb-10 opacity-0 transition duration-700" data-reveal data-reveal-delay="100">
                <button class="rounded-full border border-cyan-300/40 bg-cyan-300/10 px-5 py-2 text-xs font-semibold uppercase tracking-[0.14em] text-cyan-100 transition hover:bg-cyan-300/20">
                    Todos
                </button>
                <button class="rounded-full border border-slate-800 bg-slate-900/80 px-5 py-2 text-xs font-semibold uppercase tracking-[0.14em] text-slate-300 transition hover:border-cyan-300/30 hover:text-cyan-100">
                    Indústria
                </button>
                <button class="rounded-full border border-slate-800 bg-slate-900/80 px-5 py-2 text-xs font-semibold uppercase tracking-[0.14em] text-slate-300 transition hover:border-cyan-300/30 hover:text-cyan-100">
                    Logística
                </button>
                <button class="rounded-full border border-slate-800 bg-slate-900/80 px-5 py-2 text-xs font-semibold uppercase tracking-[0.14em] text-slate-300 transition hover:border-cyan-300/30 hover:text-cyan-100">
                    Varejo
                </button>
                <button class="rounded-full border border-slate-800 bg-slate-900/80 px-5 py-2 text-xs font-semibold uppercase tracking-[0.14em] text-slate-300 transition hover:border-cyan-300/30 hover:text-cyan-100">
                    Tecnologia
                </button>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @for ($i = 1; $i <= 6; $i++)
                    <article class="reveal group flex flex-col justify-between overflow-hidden rounded-2xl border border-slate-800 bg-slate-900/70 opacity-0 transition duration-700 hover:border-cyan-300/40 hover:bg-slate-900" data-reveal data-reveal-delay="{{ 100 + ($i * 70) }}">
                        <div>
                            <div class="h-48 w-full bg-[radial-gradient(circle_at_18%_20%,rgba(34,211,238,0.25),transparent_45%),linear-gradient(140deg,rgba(15,23,42,0.8),rgba(30,41,59,0.3))]"></div>

                            <div class="space-y-3 p-6">
                                <span class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-100">Setor {{ $i }}</span>
                                <h3 class="text-2xl font-semibold text-slate-100">Projeto Relevante #{{ $i }}</h3>
                                <p class="text-sm leading-relaxed text-slate-400">Plataforma operacional desenvolvida para simplificar processos e aumentar o controle em tempo real.</p>
                            </div>
                        </div>

                        <div class="p-6 pt-0">
                            <a href="{{ route('projects.details', ['slug' => 'atlas-logistics']) }}" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.18em] text-cyan-200 transition group-hover:text-cyan-100">
                                Ver projeto <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">→</span>
                            </a>
                        </div>
                    </article>
                @endfor
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-7xl px-6 md:px-8">
            <div class="reveal overflow-hidden rounded-3xl border border-cyan-300/30 bg-[linear-gradient(120deg,rgba(34,211,238,0.16),rgba(15,23,42,0.9)_50%,rgba(245,158,11,0.12))] p-8 opacity-0 transition duration-700 md:p-12" data-reveal>
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-100">Desenvolvimento focado em resultado</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-50 md:text-5xl">Quer transformar sua operação?</h2>
                <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-300 md:text-base">
                    Entre em contato para avaliar como nossas soluções técnicas se adaptam ao seu cenário corporativo.
                </p>
                <a href="#" class="mt-7 inline-flex items-center justify-center rounded-full bg-cyan-300 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-950 transition hover:bg-cyan-200">
                    Fale com a Aagon
                </a>
            </div>
        </section>
    </div>
@endsection