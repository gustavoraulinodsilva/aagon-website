@extends('layout.master')

@section('title', 'Aagon — Serviços')

@section('content')
    @php
        $services = [
            [
                'number' => '01',
                'title' => 'Software sob medida',
                'slug' => 'noticia-2',
                'description' => 'Aplicações web e corporativas desenhadas para o contexto real da sua operação, com foco em arquitetura limpa, performance e escalabilidade.',
                'icon' => 'code_blocks',
            ],
            [
                'number' => '02',
                'title' => 'Modernização de sistemas',
                'slug' => 'noticia-2',
                'description' => 'Evolução e refatoração estratégica de softwares legados para arquiteturas modernas e seguras, eliminando gargalos e débitos técnicos.',
                'icon' => 'architecture',
            ],
            [
                'number' => '03',
                'title' => 'Automação & Integração',
                'description' => 'Conexão transparente entre ERPs, CRMs, APIs e microsserviços para eliminar processos manuais e unificar sua operação.',
                'slug' => 'noticia-2',
                'icon' => 'account_tree',
            ],
            [
                'number' => '04',
                'title' => 'Dados & Analytics',
                'slug' => 'noticia-2',
                'description' => 'Construção de pipelines de dados, dashboards e camadas analíticas para transformar métricas operacionais em decisões de negócio.',
                'icon' => 'insights',
            ],
        ];

        $lifecycleSteps = [
            [
                'number' => '01',
                'title' => 'Diagnóstico',
                'description' => 'Mapeamento de gargalos operacionais, requisitos e auditoria técnica de infraestrutura.',
            ],
            [
                'number' => '02',
                'title' => 'Arquitetura',
                'description' => 'Definição de contratos de API, modelagem de banco de dados e blueprint da solução.',
            ],
            [
                'number' => '03',
                'title' => 'Engenharia',
                'description' => 'Desenvolvimento em ciclos curtos (Agile), com pipelines de CI/CD e rigorosos testes.',
            ],
            [
                'number' => '04',
                'title' => 'Evolução',
                'description' => 'Implantação contínua, monitoramento em tempo real e escalabilidade adaptativa.',
            ],
        ];
    @endphp

    <div class="bg-[#121212] text-[#F5F5F5] pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center border-b border-[#2D2D2D] pb-16">
                <div class="md:col-span-8 space-y-6">
                    <p class="reveal font-mono text-xs font-medium uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        Especialidades
                    </p>
                    <h1 class="reveal text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] leading-tight opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="100">
                        Soluções de engenharia para <span class="text-[#0055FF]">problemas complexos.</span>
                    </h1>
                    <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed max-w-2xl opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="180">
                        Projetamos e construímos ecossistemas digitais resilientes. Das aplicações sob medida à inteligência de dados, nossas capacidades focam em acelerar operações e eliminar débitos técnicos.
                    </p>
                </div>
                <div class="hidden md:flex md:col-span-4 justify-end">
                    <div class="w-full aspect-square border border-[#2D2D2D] bg-[#1A1A1A] p-6 relative group rounded">
                        <div class="grid grid-cols-4 grid-rows-4 gap-2 w-full h-full">
                            <div class="bg-[#2D2D2D] group-hover:bg-[#0055FF] transition-colors duration-300"></div>
                            <div class="bg-[#2D2D2D]"></div>
                            <div class="bg-[#121212]"></div>
                            <div class="bg-[#2D2D2D]"></div>
                            <div class="bg-[#121212]"></div>
                            <div class="bg-[#0055FF]/30"></div>
                            <div class="bg-[#2D2D2D] group-hover:bg-[#0055FF] transition-colors duration-300"></div>
                            <div class="bg-[#121212]"></div>
                            <div class="bg-[#2D2D2D]"></div>
                            <div class="bg-[#121212]"></div>
                            <div class="bg-[#121212]"></div>
                            <div class="bg-[#2D2D2D]"></div>
                            <div class="bg-[#0055FF]"></div>
                            <div class="bg-[#2D2D2D]"></div>
                            <div class="bg-[#2D2D2D] group-hover:bg-[#0055FF] transition-colors duration-300"></div>
                            <div class="bg-[#121212]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-360 px-6 md:px-16">
            <div class="rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-12">
                <div class="max-w-3xl space-y-4">
                    <p class="reveal font-mono text-xs font-semibold uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        Filosofia de Engenharia
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        Tecnologia não é o ponto de partida. O problema é.
                    </h2>
                    <p class="reveal text-sm md:text-base leading-relaxed text-[#A1A1AA] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="150">
                        Antes de escrever qualquer linha de código, entendemos a fundo o gargalo operacional. Ferramentas, linguagens e frameworks são apenas meios para atingir um impacto real e mensurável no seu resultado.
                    </p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-360 px-6 md:px-16">
            <div class="mb-12 space-y-3">
                <p class="reveal font-mono text-xs font-semibold uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                    data-reveal>
                    Catálogo de Soluções
                </p>
                <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                    data-reveal data-reveal-delay="90">
                    Como impulsionamos a sua operação.
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                @foreach ($services as $service)
                    <article
                        class="reveal group relative bg-[#121212] p-8 md:p-12 hover:bg-[#1A1A1A] transition-colors border-b md:border-b-0 md:nth-[1]:border-r md:nth-[3]:border-r border-[#2D2D2D] flex flex-col justify-between opacity-0 duration-700"
                        data-reveal data-reveal-delay="{{ 100 + $loop->index * 90 }}">
                        
                        <div>
                            <div class="flex justify-between items-start mb-8">
                                <span class="font-mono text-xs font-bold text-[#0055FF] tracking-widest">
                                    {{ $service['number'] }}
                                </span>
                            </div>

                            <h3 class="text-2xl font-semibold text-[#F5F5F5] group-hover:text-[#0055FF] transition-colors duration-300">
                                {{ $service['title'] }}
                            </h3>

                            <p class="mt-4 text-sm leading-relaxed text-[#A1A1AA]">
                                {{ $service['description'] }}
                            </p>
                        </div>

                        <div class="mt-10 pt-6 border-t border-[#2D2D2D]">
                            <a href="{{ route('services.details', ['slug' => $service['slug']]) }}"
                                class="inline-flex items-center text-xs font-mono font-medium uppercase tracking-wider text-[#0055FF] group-hover:text-[#F5F5F5] transition-colors">
                                <span>Saiba mais</span>
                                <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">→</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
        <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
            <div class="mb-12 space-y-3">
                <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                    data-reveal>
                    Metodologia
                </p>
                <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                    data-reveal data-reveal-delay="90">
                    Ciclo de desenvolvimento de engenharia.
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                @foreach ($lifecycleSteps as $step)
                    <article
                        class="reveal p-8 border-b sm:border-b-0 border-[#2D2D2D] sm:nth-[1]:border-r sm:nth-[3]:border-r lg:nth-[2]:border-r relative group hover:bg-[#242424] transition-colors opacity-0 duration-700"
                        data-reveal data-reveal-delay="{{ 100 + $loop->index * 70 }}">
                        <p class="font-mono text-xs font-bold text-[#0055FF]">
                            {{ $step['number'] }}
                        </p>
                        <h3 class="mt-4 text-xl font-semibold text-[#F5F5F5]">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#A1A1AA]">{{ $step['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>
        <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
            <div class="reveal p-10 md:p-16 border border-[#2D2D2D] bg-[#1A1A1A] rounded flex flex-col md:flex-row items-start md:items-center justify-between gap-8 opacity-0 transition duration-700"
                data-reveal>
                <div class="space-y-3 max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">Próximo passo</p>
                    <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-[#F5F5F5]">Tem um desafio?</h2>
                    <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed">
                        Vamos mapear seu cenário técnico e entender como construir a solução ideal com segurança e escala.
                    </p>
                </div>
                <a href="{{ route('contact') }}"
                    class="px-8 py-4 bg-[#0055FF] text-white rounded font-mono text-xs font-medium uppercase tracking-wider hover:bg-opacity-90 transition-all shrink-0">
                    Fale conosco
                </a>
            </div>
        </section>

    </div>
@endsection