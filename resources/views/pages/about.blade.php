@extends('layout.master')

@section('title', 'Aagon — Tecnologia que transforma')

@section('content')
    @php
        $approachPillars = [
            [
                'title' => 'Contexto antes de codigo',
                'description' => 'Mergulhamos no processo do cliente para construir solucoes com impacto de negocio.',
            ],
            [
                'title' => 'Arquitetura orientada a crescimento',
                'description' => 'Tomamos decisoes tecnicas pensando em manutencao, evolucao e escala.',
            ],
            [
                'title' => 'Entrega iterativa',
                'description' => 'Priorizamos ciclos curtos com validacao constante para reduzir risco.',
            ],
        ];

        $workflowSteps = [
            [
                'step' => '01',
                'title' => 'Diagnostico',
                'description' => 'Mapeamos dores, operacao e metas para definir o escopo essencial.',
            ],
            [
                'step' => '02',
                'title' => 'Design da solucao',
                'description' => 'Desenhamos arquitetura, fluxos e prioridades com foco em viabilidade.',
            ],
            [
                'step' => '03',
                'title' => 'Construcao e evolucao',
                'description' => 'Entregamos em etapas com transparencia e acompanhamento de resultados.',
            ],
        ];

        $values = [
            'Clareza na comunicacao',
            'Compromisso com qualidade',
            'Parceria de longo prazo',
            'Responsabilidade tecnica',
        ];

        $numbers = [
            ['value' => 20, 'suffix' => '+', 'label' => 'Projetos entregues'],
            ['value' => 12, 'suffix' => '', 'label' => 'Setores atendidos'],
            ['value' => 8, 'suffix' => '', 'label' => 'Anos de experiencia'],
            ['value' => 95, 'suffix' => '%', 'label' => 'Clientes recorrentes'],
        ];
    @endphp

    <div class="bg-slate-950 pb-24 pt-28 md:pt-36" data-about-page>
        <section class="mx-auto grid w-full max-w-7xl gap-10 px-6 md:grid-cols-[1.1fr_1fr] md:items-center md:px-8">
            <div class="space-y-6">
                <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700"
                    data-reveal>
                    Quem somos
                </p>
                <h1 class="reveal translate-y-6 text-4xl font-semibold leading-tight tracking-tight text-slate-50 opacity-0 transition duration-700 sm:text-5xl"
                    data-reveal data-reveal-delay="100">
                    Uma empresa ficticia criada para representar uma consultoria digital moderna.
                </h1>
                <p class="reveal max-w-2xl translate-y-6 text-base leading-relaxed text-slate-300 opacity-0 transition duration-700"
                    data-reveal data-reveal-delay="180">
                    A Aagon combina estrategia e engenharia para transformar desafios complexos em produtos digitais claros,
                    eficientes e escalaveis para diferentes segmentos empresariais.
                </p>
            </div>

            <figure
                class="reveal relative translate-y-6 overflow-hidden rounded-3xl border border-cyan-900/40 opacity-0 transition duration-700"
                data-reveal data-reveal-delay="220">
                <img src="{{ asset('images/aboutimageaagon.jpeg') }}" alt="Equipe da Aagon em reuniao estrategica"
                    class="h-95 w-full object-cover md:h-115" loading="lazy">
                <figcaption
                    class="absolute inset-x-4 bottom-4 rounded-xl border border-slate-300/20 bg-slate-950/65 px-4 py-3 text-sm text-slate-100 backdrop-blur">
                    Time multidisciplinar focado em engenharia, estrategia e impacto de negocio.
                </figcaption>
            </figure>
        </section>

        <section class="mx-auto mt-20 w-full max-w-7xl px-6 md:px-8">
            <div class="mb-8 space-y-3">
                <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700"
                    data-reveal>
                    Nossa abordagem
                </p>
                <h2 class="reveal translate-y-6 text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl"
                    data-reveal data-reveal-delay="90">
                    Cada projeto nasce da combinacao entre visao de negocio e precisao tecnica.
                </h2>
            </div>

            <div class="grid gap-4 md:grid-cols-3">
                @foreach ($approachPillars as $pillar)
                    <article
                        class="reveal translate-y-6 rounded-2xl border border-slate-800 bg-slate-900/70 p-6 opacity-0 transition duration-700 hover:border-cyan-300/30"
                        data-reveal data-reveal-delay="{{ 100 + $loop->index * 90 }}">
                        <h3 class="text-lg font-semibold text-slate-100">{{ $pillar['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-400">{{ $pillar['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="mx-auto mt-20 w-full max-w-7xl px-6 md:px-8">
            <div class="mb-8 space-y-3">
                <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-amber-100 opacity-0 transition duration-700"
                    data-reveal>
                    Como trabalhamos
                </p>
                <h2 class="reveal translate-y-6 text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl"
                    data-reveal data-reveal-delay="90">
                    Processo simples, colaborativo e orientado por resultado.
                </h2>
            </div>

            <div class="grid gap-4 md:grid-cols-3">
                @foreach ($workflowSteps as $step)
                    <article
                        class="reveal translate-y-6 rounded-2xl border border-amber-200/15 bg-slate-900/80 p-6 opacity-0 transition duration-700 hover:border-amber-200/35"
                        data-reveal data-reveal-delay="{{ 120 + $loop->index * 80 }}">
                        <p class="text-xs font-semibold tracking-[0.22em] text-amber-100">{{ $step['step'] }}</p>
                        <h3 class="mt-2 text-xl font-semibold text-slate-100">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-400">{{ $step['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="mx-auto mt-20 w-full max-w-7xl px-6 md:px-8">
            <div
                class="grid gap-10 rounded-3xl border border-cyan-900/30 bg-slate-900/70 p-8 md:grid-cols-[1fr_1.2fr] md:p-10">
                <div>
                    <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700"
                        data-reveal>
                        Valores
                    </p>
                    <h2 class="reveal mt-3 translate-y-6 text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        O que guia nossas decisoes.
                    </h2>
                </div>

                <ul class="grid gap-3 sm:grid-cols-2">
                    @foreach ($values as $value)
                        <li class="reveal flex translate-y-6 items-center rounded-xl border border-slate-800 bg-slate-950/50 px-4 py-3 text-sm text-slate-200 opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="{{ 110 + $loop->index * 70 }}">
                            <span class="mr-3 inline-block h-2.5 w-2.5 rounded-full bg-cyan-300"></span>
                            {{ $value }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="mx-auto mt-20 w-full max-w-7xl px-6 md:px-8">
            <div class="mb-8 space-y-3">
                <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700"
                    data-reveal>
                    Numeros
                </p>
                <h2 class="reveal translate-y-6 text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl"
                    data-reveal data-reveal-delay="90">
                    Indicadores plausiveis de uma operacao em crescimento.
                </h2>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                @foreach ($numbers as $item)
                    <article
                        class="reveal translate-y-6 rounded-2xl border border-slate-800 bg-slate-900/70 p-6 text-center opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="{{ 120 + $loop->index * 80 }}">
                        <p class="text-4xl font-semibold text-cyan-200">
                            <span data-counter="{{ $item['value'] }}">0</span>{{ $item['suffix'] }}
                        </p>
                        <p class="mt-2 text-xs uppercase tracking-[0.15em] text-slate-400">{{ $item['label'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>
    </div>
@endsection
