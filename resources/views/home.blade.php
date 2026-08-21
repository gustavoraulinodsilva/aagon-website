@extends('layout.master')

@section('title', 'Aagon — Tecnologia que transforma')

@section('content')
    @php
        $services = [
            [
                'title' => 'Software sob medida',
                'description' => 'Sistemas web e plataformas internas desenhadas para o contexto real da sua operacao.',
            ],
            [
                'title' => 'Consultoria tecnologica',
                'description' => 'Direcao tecnica para modernizacao, arquitetura e evolucao de produtos digitais.',
            ],
            [
                'title' => 'Automacao',
                'description' => 'Fluxos operacionais automatizados para reduzir gargalos e ganhar eficiencia.',
            ],
            [
                'title' => 'Integracao de sistemas',
                'description' => 'Conectamos ERPs, CRMs e servicos para criar uma operacao realmente unificada.',
            ],
            [
                'title' => 'Dados & Analytics',
                'description' => 'Dashboards e camadas de dados para transformar informacao em decisao.',
            ],
        ];

        $cases = [
            [
                'sector' => 'Industria',
                'name' => 'Nexus Steel',
                'summary' => 'Plataforma para planejamento de producao com visibilidade em tempo real.',
            ],
            [
                'sector' => 'Logistica',
                'name' => 'Atlas Logistics',
                'summary' => 'Sistema operacional para roteirizacao e monitoramento de frota.',
            ],
            [
                'sector' => 'Varejo',
                'name' => 'Meridian Retail',
                'summary' => 'Hub de integracao entre lojas fisicas, ecommerce e estoque central.',
            ],
            [
                'sector' => 'Saude',
                'name' => 'Vita Care',
                'summary' => 'Portal para gestao de atendimentos e indicadores de performance clinica.',
            ],
        ];

        $differentials = [
            [
                'title' => 'Engenharia',
                'description' => 'Arquitetura robusta, codigo limpo e entregas sustentaveis no longo prazo.',
            ],
            [
                'title' => 'Estrategia',
                'description' => 'Cada decisao tecnica conecta tecnologia com objetivos de negocio.',
            ],
            [
                'title' => 'Escalabilidade',
                'description' => 'Produtos preparados para crescer sem reescritas dolorosas.',
            ],
            [
                'title' => 'Seguranca',
                'description' => 'Boas praticas e governanca desde o primeiro deploy.',
            ],
        ];

        $stats = [
            ['value' => '20+', 'label' => 'Projetos entregues'],
            ['value' => '12', 'label' => 'Setores atendidos'],
            ['value' => '8', 'label' => 'Anos de experiencia'],
        ];
    @endphp

    <section class="relative isolate -mt-20 min-h-screen overflow-hidden pt-32 md:-mt-24 md:pt-40">
        <video
            class="absolute inset-0 -z-30 h-full w-full object-cover"
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            aria-hidden="true"
        >
            <source src="{{ asset('images/videos/aagon-hero.mp4') }}" type="video/mp4">
        </video>

        <div class="absolute inset-0 -z-20 bg-slate-950/70"></div>
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_18%_22%,rgba(34,211,238,0.28),transparent_45%),radial-gradient(circle_at_84%_80%,rgba(245,158,11,0.22),transparent_42%)]"></div>

        <div class="mx-auto flex min-h-[calc(100vh-4rem)] w-full max-w-7xl items-end px-6 pb-16 md:items-center md:px-8 md:pb-20">
            <div class="max-w-3xl space-y-8">
                <p class="reveal inline-flex translate-y-6 rounded-full border border-cyan-200/30 bg-cyan-200/10 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.22em] text-cyan-100 opacity-0 transition duration-700" data-reveal>
                    Aagon Corporate Website
                </p>

                <h1 class="reveal translate-y-6 text-4xl font-semibold leading-tight tracking-tight text-white opacity-0 transition duration-700 sm:text-5xl md:text-6xl" data-reveal data-reveal-delay="120">
                    Tecnologia que transforma
                    <span class="text-cyan-200">complexidade em solucoes reais.</span>
                </h1>

                <p class="reveal max-w-2xl translate-y-6 text-base leading-relaxed text-slate-200/90 opacity-0 transition duration-700 sm:text-lg" data-reveal data-reveal-delay="220">
                    Desenvolvemos produtos e sistemas digitais sob medida para empresas que precisam escalar com seguranca, performance e clareza de negocio.
                </p>

                <div class="reveal flex translate-y-6 flex-col gap-3 opacity-0 transition duration-700 sm:flex-row sm:items-center" data-reveal data-reveal-delay="320">
                    <a href="#" class="inline-flex items-center justify-center rounded-full bg-cyan-300 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-950 transition hover:bg-cyan-200">
                        Conheca a Aagon
                    </a>
                    <a href="#" class="inline-flex items-center justify-center rounded-full border border-slate-200/30 bg-slate-950/35 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-100 transition hover:border-cyan-200/50 hover:text-cyan-100">
                        Fale conosco
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-slate-950 py-20 md:py-24">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-cyan-500/50 to-transparent"></div>

        <div class="mx-auto w-full max-w-7xl px-6 md:px-8">
            <div class="mb-12 flex flex-col gap-4 md:mb-14 md:flex-row md:items-end md:justify-between">
                <div class="space-y-4">
                    <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                        O que fazemos
                    </p>
                    <h2 class="reveal max-w-2xl translate-y-6 text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="100">
                        Solucoes digitais para operacoes complexas.
                    </h2>
                </div>
            </div>

            <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-5">
                @foreach ($services as $service)
                    <article class="reveal group translate-y-6 rounded-2xl border border-slate-800 bg-slate-900/70 p-5 opacity-0 transition duration-700 hover:-translate-y-1 hover:border-cyan-300/40 hover:bg-slate-900" data-reveal data-reveal-delay="{{ 80 + ($loop->index * 80) }}">
                        <h3 class="text-lg font-semibold text-slate-100">{{ $service['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-400">{{ $service['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-slate-950 py-20 md:py-24">
        <div class="mx-auto grid w-full max-w-7xl gap-10 px-6 md:grid-cols-[1.3fr_1fr] md:items-center md:px-8">
            <div class="space-y-6">
                <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                    Sobre a Aagon
                </p>
                <h2 class="reveal translate-y-6 text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="90">
                    Engenharia digital com foco em resultado real de negocio.
                </h2>
                <p class="reveal max-w-2xl translate-y-6 text-base leading-relaxed text-slate-300 opacity-0 transition duration-700" data-reveal data-reveal-delay="180">
                    Somos uma empresa ficticia criada para representar uma operacao moderna de tecnologia: orientada por estrategia, execucao tecnica e colaboracao proxima com times de produto e operacao.
                </p>
            </div>

            <div class="grid grid-cols-3 gap-3 sm:gap-4">
                @foreach ($stats as $stat)
                    <div class="reveal translate-y-6 rounded-2xl border border-slate-800 bg-slate-900/70 p-4 text-center opacity-0 transition duration-700 sm:p-5" data-reveal data-reveal-delay="{{ 120 + ($loop->index * 90) }}">
                        <p class="text-2xl font-semibold text-cyan-200 sm:text-3xl">{{ $stat['value'] }}</p>
                        <p class="mt-1 text-xs uppercase tracking-[0.14em] text-slate-400">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative bg-slate-950 py-20 md:py-24">
        <div class="absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-amber-300/40 to-transparent"></div>

        <div class="mx-auto w-full max-w-7xl px-6 md:px-8">
            <div class="mb-12 space-y-4">
                <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-amber-100 opacity-0 transition duration-700" data-reveal>
                    Cases
                </p>
                <h2 class="reveal max-w-3xl translate-y-6 text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="100">
                    Projetos ficticios que representam desafios reais de mercado.
                </h2>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                @foreach ($cases as $case)
                    <article class="reveal translate-y-6 overflow-hidden rounded-2xl border border-slate-800 bg-slate-900/80 opacity-0 transition duration-700 hover:border-amber-200/30" data-reveal data-reveal-delay="{{ 100 + ($loop->index * 80) }}">
                        <div class="h-32 bg-[radial-gradient(circle_at_18%_20%,rgba(34,211,238,0.35),transparent_45%),linear-gradient(140deg,rgba(15,23,42,0.6),rgba(30,41,59,0.2))]"></div>
                        <div class="space-y-3 p-6">
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-100">{{ $case['sector'] }}</p>
                            <h3 class="text-2xl font-semibold text-slate-100">{{ $case['name'] }}</h3>
                            <p class="text-sm leading-relaxed text-slate-400">{{ $case['summary'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-slate-950 py-20 md:py-24">
        <div class="mx-auto w-full max-w-7xl px-6 md:px-8">
            <div class="mb-10 space-y-4">
                <p class="reveal translate-y-6 text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200 opacity-0 transition duration-700" data-reveal>
                    Diferenciais
                </p>
                <h2 class="reveal max-w-3xl translate-y-6 text-3xl font-semibold tracking-tight text-slate-50 opacity-0 transition duration-700 md:text-4xl" data-reveal data-reveal-delay="100">
                    Entrega com metodo, visao de produto e excelencia tecnica.
                </h2>
            </div>

            <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($differentials as $differential)
                    <article class="reveal translate-y-6 rounded-2xl border border-cyan-950/40 bg-slate-900/60 p-5 opacity-0 transition duration-700 hover:border-cyan-300/30" data-reveal data-reveal-delay="{{ 100 + ($loop->index * 70) }}">
                        <h3 class="text-lg font-semibold text-slate-100">{{ $differential['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-400">{{ $differential['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-slate-950 pb-24 pt-8 md:pb-28">
        <div class="mx-auto w-full max-w-7xl px-6 md:px-8">
            <div class="reveal translate-y-6 overflow-hidden rounded-3xl border border-cyan-300/30 bg-[linear-gradient(120deg,rgba(34,211,238,0.16),rgba(15,23,42,0.9)_50%,rgba(245,158,11,0.12))] p-8 opacity-0 transition duration-700 md:p-12" data-reveal>
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-100">Tem um desafio?</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-50 md:text-5xl">Vamos conversar.</h2>
                <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-300 md:text-base">
                    Construimos junto com seu time a proxima etapa digital da empresa, com foco em impacto de negocio e evolucao continua.
                </p>
                <a href="#" class="mt-7 inline-flex items-center justify-center rounded-full bg-cyan-300 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-950 transition hover:bg-cyan-200">
                    Entre em contato
                </a>
            </div>
        </div>
    </section>
@endsection