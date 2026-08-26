@extends('layout.master')

@section('title', 'Aagon — Software sob medida')

@section('content')
    @php
        $capabilities = [
            [
                'number' => '01',
                'title' => 'Plataformas Web',
                'description' =>
                    'Sistemas e aplicações web de alta performance desenhados para regras de negócio específicas.',
                'tags' => ['React', 'Next.js', 'Node.js'],
                'icon' => 'web',
            ],
            [
                'number' => '02',
                'title' => 'Sistemas Internos & ERPs',
                'description' =>
                    'Ferramentas de gestão operacional, CRM e dashboards para otimizar processos internos.',
                'tags' => ['Laravel', 'PostgreSQL', 'Python'],
                'icon' => 'hub',
            ],
            [
                'number' => '03',
                'title' => 'Portais Corporativos',
                'description' =>
                    'Portais B2B e B2C seguros para relacionamento com clientes, parceiros e fornecedores.',
                'tags' => ['TypeScript', 'GraphQL', 'REST'],
                'icon' => 'storefront',
            ],
        ];

        $deliverables = [
            'Sistemas Web e Plataformas SaaS',
            'Portais de Atendimento e B2B',
            'Sistemas de Gestão Operacional (ERP/CRM)',
            'APIs e Camadas de Integração',
            'Dashboards e Painéis Administrativos',
            'Arquiteturas de Microsserviços',
        ];

        $methodologySteps = [
            [
                'number' => '01',
                'title' => 'Mapeamento',
                'description' => 'Entendimento das regras de negócio e gargalos.',
            ],
            [
                'number' => '02',
                'title' => 'Arquitetura',
                'description' => 'Modelagem de banco de dados e contratos de API.',
            ],
            [
                'number' => '03',
                'title' => 'Desenvolvimento',
                'description' => 'Construção iterativa em ciclos ágeis com CI/CD.',
            ],
            [
                'number' => '04',
                'title' => 'Homologação',
                'description' => 'Testes rigorosos e validação com o time do cliente.',
            ],
            [
                'number' => '05',
                'title' => 'Evolução',
                'description' => 'Publicação, monitoramento e melhoria contínua.',
            ],
        ];

        $techStack = ['Laravel', 'Next.js', 'TypeScript', 'Node.js', 'PostgreSQL', 'Docker', 'Tailwind CSS'];
    @endphp

    <div class="bg-[#121212] text-[#F5F5F5] pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center border-b border-[#2D2D2D] pb-16">
                <div class="md:col-span-8 space-y-6">
                    <a href="{{ route('services') }}"
                        class="reveal inline-flex items-center text-xs font-mono font-medium uppercase tracking-wider text-[#0055FF] transition hover:text-[#F5F5F5] opacity-0"
                        data-reveal>
                        &larr; Voltar para Serviços
                    </a>

                    <div class="space-y-4">
                        <span
                            class="inline-block rounded border border-[#2D2D2D] bg-[#1A1A1A] px-3 py-1 font-mono text-xs uppercase tracking-widest text-[#0055FF]">
                            Serviço 01
                        </span>
                        <h1 class="reveal text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] leading-tight opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="100">
                            Software <span class="text-[#0055FF]">sob medida.</span>
                        </h1>
                    </div>

                    <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed max-w-2xl opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="180">
                        Sistemas desenvolvidos para se adaptar à forma como sua empresa realmente trabalha, sem forçar sua
                        operação a caber em moldes engessados de prateleira.
                    </p>

                    <div class="reveal flex flex-wrap gap-4 pt-4 opacity-0 transition duration-700" data-reveal
                        data-reveal-delay="240">
                        <a href="{{ route('contact') }}"
                            class="rounded bg-[#0055FF] px-8 py-3.5 font-mono text-xs font-medium uppercase tracking-wider text-white transition hover:bg-opacity-90 active:scale-95">
                            Iniciar um Projeto
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex md:col-span-4 justify-end">
                    <div
                        class="w-full aspect-square border border-[#2D2D2D] bg-[#1A1A1A] p-6 relative group rounded flex items-center justify-center">
                        <div class="grid grid-cols-3 grid-rows-3 gap-3 w-full h-full p-4">
                            <div
                                class="border border-[#2D2D2D] bg-[#121212] group-hover:border-[#0055FF] transition-colors duration-300">
                            </div>
                            <div class="border border-[#2D2D2D] bg-[#121212]"></div>
                            <div class="border border-[#0055FF]/40 bg-[#0055FF]/10"></div>
                            <div class="border border-[#2D2D2D] bg-[#121212]"></div>
                            <div class="border border-[#0055FF] bg-[#0055FF]"></div>
                            <div class="border border-[#2D2D2D] bg-[#121212]"></div>
                            <div class="border border-[#0055FF]/40 bg-[#0055FF]/10"></div>
                            <div class="border border-[#2D2D2D] bg-[#121212]"></div>
                            <div
                                class="border border-[#2D2D2D] bg-[#121212] group-hover:border-[#0055FF] transition-colors duration-300">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-360 px-6 md:px-16">
            <div
                class="grid grid-cols-1 md:grid-cols-12 gap-8 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-12 items-start">
                <div class="md:col-span-5 space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        O Desafio
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        Por que soluções genéricas falham?
                    </h2>
                </div>

                <div class="md:col-span-7 space-y-6 text-[#A1A1AA] text-sm md:text-base leading-relaxed">
                    <p class="reveal opacity-0 transition duration-700" data-reveal data-reveal-delay="120">
                        Cada operação possui regras de negócio únicas, integrações específicas e dinâmicas de equipe que
                        plataformas de prateleira raramente atendem. Adaptar processos internos a softwares genéricos cria
                        atritos operacionais e retrabalho.
                    </p>
                    <p class="reveal opacity-0 transition duration-700" data-reveal data-reveal-delay="160">
                        O software sob medida elimina a necessidade de gambiarras manuais e planilhas paralelas, criando uma
                        plataforma proprietária, segura e preparada para o crescimento escalável da empresa.
                    </p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-360 px-6 md:px-16">
            <div class="mb-12 space-y-3">
                <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                    data-reveal>
                    Escopo
                </p>
                <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                    data-reveal data-reveal-delay="90">
                    O que entregamos.
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($deliverables as $index => $item)
                    <div class="reveal flex items-center rounded border border-[#2D2D2D] bg-[#1A1A1A] px-5 py-4 text-sm font-medium text-[#F5F5F5] opacity-0 transition duration-700 hover:border-[#0055FF]/50"
                        data-reveal data-reveal-delay="{{ 100 + $index * 50 }}">
                        <span class="mr-3 h-2 w-2 rounded-full bg-[#0055FF]"></span>
                        {{ $item }}
                    </div>
                @endforeach
            </div>
        </section>
        <section class="mx-auto mt-24 max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                @foreach ($capabilities as $cap)
                    <article
                        class="reveal p-8 border-b lg:border-b-0 lg:border-r border-[#2D2D2D] flex flex-col justify-between relative group hover:bg-[#242424] transition-colors opacity-0 duration-700"
                        data-reveal data-reveal-delay="{{ 100 + $loop->index * 90 }}">
                        <div>
                            <div class="flex justify-between items-center mb-6">
                                <span class="font-mono text-xs font-bold text-[#0055FF]">{{ $cap['number'] }}</span>
                            </div>

                            <h3
                                class="text-xl font-semibold text-[#F5F5F5] mb-3 group-hover:text-[#0055FF] transition-colors">
                                {{ $cap['title'] }}
                            </h3>

                            <p class="text-sm text-[#A1A1AA] leading-relaxed mb-6">
                                {{ $cap['description'] }}
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-2 pt-4 border-t border-[#2D2D2D]">
                            @foreach ($cap['tags'] as $tag)
                                <span
                                    class="font-mono text-[10px] uppercase tracking-wider px-2 py-1 rounded border border-[#2D2D2D] bg-[#121212] text-[#A1A1AA]">
                                    {{ $tag }}
                                </span>
                            @endforeach
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
                    Nossa abordagem passo a passo.
                </h2>
            </div>

            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                @foreach ($methodologySteps as $step)
                    <article
                        class="reveal p-6 border-b sm:border-b-0 border-[#2D2D2D] lg:border-r relative group hover:bg-[#242424] transition-colors opacity-0 duration-700"
                        data-reveal data-reveal-delay="{{ 100 + $loop->index * 60 }}">
                        <span class="font-mono text-xs font-bold text-[#0055FF]">{{ $step['number'] }}</span>
                        <h3 class="mt-3 text-lg font-semibold text-[#F5F5F5]">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-xs text-[#A1A1AA] leading-relaxed">{{ $step['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-360 px-6 md:px-16">
            <div
                class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-6 md:p-8">
                <p class="font-mono text-xs font-semibold uppercase tracking-widest text-[#A1A1AA]">
                    Stack e Tecnologias Utilizadas
                </p>
                <div class="flex flex-wrap gap-2.5">
                    @foreach ($techStack as $tech)
                        <span
                            class="rounded border border-[#2D2D2D] bg-[#121212] px-3.5 py-1.5 font-mono text-xs font-medium text-[#F5F5F5]">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
            <div class="mb-8 space-y-3">
                <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                    data-reveal>
                    Projeto Relacionado
                </p>
            </div>

            <article
                class="reveal overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] opacity-0 transition duration-700 hover:border-[#0055FF]/40 md:grid md:grid-cols-[1fr_1.3fr]"
                data-reveal>
                <div
                    class="h-48 md:h-auto border-b md:border-b-0 md:border-r border-[#2D2D2D] bg-[#121212] p-8 flex items-center justify-center">
                    <div class="font-mono text-2xl font-bold tracking-tighter text-[#0055FF]">
                        FIND FSG-LAB
                    </div>
                </div>
                <div class="space-y-4 p-8 md:p-10">
                    <span class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">Navegação Indoor &
                        Mapeamento</span>
                    <h3 class="text-2xl font-bold text-[#F5F5F5]">Plataforma de Mapeamento Indoor</h3>
                    <p class="text-sm leading-relaxed text-[#A1A1AA]">
                        Aplicação web para navegação e localização interna em ambientes universitários, desenvolvida com
                        Next.js, Firebase, Prisma e Leaflet.
                    </p>
                    <a href="{{ route('projects') }}"
                        class="inline-flex items-center font-mono text-xs font-medium uppercase tracking-wider text-[#0055FF] hover:text-[#F5F5F5] transition-colors">
                        <span>Ver todos os projetos</span>
                        <span class="ml-2">&rarr;</span>
                    </a>
                </div>
            </article>
        </section>
        <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
            <div class="reveal p-10 md:p-16 border border-[#2D2D2D] bg-[#1A1A1A] rounded flex flex-col md:flex-row items-start md:items-center justify-between gap-8 opacity-0 transition duration-700"
                data-reveal>
                <div class="space-y-3 max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">Inicie sua plataforma</p>
                    <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-[#F5F5F5]">Tem um sistema em mente?</h2>
                    <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed">
                        Fale com nosso time de engenharia para validar suas ideias e desenhar a melhor estratégia técnica.
                    </p>
                </div>
                <a href="{{ route('contact') }}"
                    class="px-8 py-4 bg-[#0055FF] text-white rounded font-mono text-xs font-medium uppercase tracking-wider hover:bg-opacity-90 transition-all shrink-0">
                    Converse com a Aagon
                </a>
            </div>
        </section>

    </div>
@endsection