@extends('layout.master')

@section('title', 'Aagon — Atlas Logistics (Detalhes do Projeto)')

@section('content')
    @php
        $techStack = ['React', 'Node.js', 'Kafka', 'PostgreSQL', 'Docker', 'Tailwind CSS'];

        $projectMetrics = [
            ['label' => 'Redução de Latência', 'value' => '-45%'],
            ['label' => 'Precisão de Telemetria', 'value' => '99.8%'],
            ['label' => 'Tempo de Resposta', 'value' => '<200ms'],
        ];

        $galleryImages = [
            asset('images/aboutimageaagon.jpeg'),
            asset('images/aboutimageaagon.jpeg'),
        ];
    @endphp

    <div class="bg-[#121212] text-[#F5F5F5] pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-360 px-6 md:px-16">
            <div class="max-w-4xl space-y-6">
                <a href="{{ route('projects') }}"
                    class="reveal inline-flex items-center text-xs font-mono font-medium uppercase tracking-wider text-[#0055FF] transition hover:text-[#F5F5F5] opacity-0"
                    data-reveal>
                    &larr; Voltar para Projetos
                </a>
                
                <div class="space-y-3">
                    <span class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700 block"
                        data-reveal data-reveal-delay="50">
                        Logística e Transportes
                    </span>
                    <h1 class="reveal text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700 leading-tight"
                        data-reveal data-reveal-delay="100">
                        Atlas Logistics
                    </h1>
                </div>

                <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed max-w-2xl opacity-0 transition duration-700"
                    data-reveal data-reveal-delay="150">
                    Plataforma operacional de logística desenvolvida para rastreamento de carga em tempo real, roteirização inteligente e inteligência preditiva.
                </p>
            </div>
        </section>
        <section class="mx-auto mt-12 max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                <div class="p-6 border-b sm:border-b-0 sm:border-r border-[#2D2D2D]">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">Cliente</p>
                    <p class="mt-2 text-base font-semibold text-[#F5F5F5]">Atlas Global Forwarding</p>
                </div>
                <div class="p-6 border-b sm:border-b-0 sm:border-r border-[#2D2D2D]">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">Setor</p>
                    <p class="mt-2 text-base font-semibold text-[#F5F5F5]">Logística & Transportes</p>
                </div>
                <div class="p-6">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">Serviço Prestado</p>
                    <p class="mt-2 text-base font-semibold text-[#0055FF]">Software sob medida</p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-12 max-w-360 px-6 md:px-16">
            <figure class="reveal relative overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] opacity-0 transition duration-700 group"
                data-reveal data-reveal-delay="200">
                <img src="{{ asset('images/aboutimageaagon.jpeg') }}" alt="Interface da plataforma Atlas Logistics"
                    class="h-87.5 md:h-137.5 w-full object-cover opacity-90 group-hover:scale-[1.01] transition-transform duration-500" loading="lazy">
                <figcaption class="absolute inset-x-4 bottom-4 md:inset-x-6 md:bottom-6 rounded border border-[#2D2D2D] bg-[#121212]/80 px-5 py-3 text-xs md:text-sm text-[#A1A1AA] backdrop-blur font-mono">
                    Dashboard em tempo real para monitoramento de rotas e telemetria de frota.
                </figcaption>
            </figure>
        </section>
        <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
            <div class="grid gap-8 md:grid-cols-2">
                <div class="reveal rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-10 space-y-4 opacity-0 transition duration-700"
                    data-reveal>
                    <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">O Desafio</p>
                    <h2 class="text-2xl font-bold text-[#F5F5F5]">Qual era o problema?</h2>
                    <p class="text-sm md:text-base leading-relaxed text-[#A1A1AA]">
                        Rastreamento ineficiente e dispersão de dados operacionais entre diferentes hubs marítimos e terrestres. O sistema legado causava atritos na tomada de decisão e atrasos recorrentes de telemetria superior a 48 horas.
                    </p>
                </div>
                <div class="reveal rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-10 space-y-4 opacity-0 transition duration-700"
                    data-reveal data-reveal-delay="100">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">A Solução</p>
                    <h2 class="text-2xl font-bold text-[#F5F5F5]">O que a Aagon construiu</h2>
                    <p class="text-sm md:text-base leading-relaxed text-[#A1A1AA]">
                        Desenvolvimento de um portal centralizado alimentado por streams de dados em tempo real (Kafka), roteirização preditiva e painéis analíticos automatizados, proporcionando visibilidade completa da frota.
                    </p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
            <div class="rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-12 space-y-8">
                <div class="space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700" data-reveal>
                        Impacto Mensurável
                    </p>
                    <h2 class="reveal text-3xl font-bold text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="80">
                        Transformação direta na operação.
                    </h2>
                    <p class="reveal max-w-3xl text-sm md:text-base leading-relaxed text-[#A1A1AA] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="120">
                        O novo ecossistema reduziu drasticamente a latência de comunicação com unidades de campo, eliminando gargalos de atualização e permitindo decisões logísticas proativas.
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-6 border-t border-[#2D2D2D]">
                    @foreach ($projectMetrics as $metric)
                        <div class="reveal p-6 border border-[#2D2D2D] bg-[#121212] rounded opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="160">
                            <p class="text-3xl md:text-4xl font-bold font-mono text-[#0055FF]">{{ $metric['value'] }}</p>
                            <p class="mt-2 font-mono text-xs uppercase tracking-wider text-[#A1A1AA]">{{ $metric['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-6 md:p-8">
                <p class="font-mono text-xs font-semibold uppercase tracking-widest text-[#A1A1AA]">
                    Tecnologias Utilizadas
                </p>
                <div class="flex flex-wrap gap-2.5">
                    @foreach ($techStack as $tech)
                        <span class="rounded border border-[#2D2D2D] bg-[#121212] px-3.5 py-1.5 font-mono text-xs font-medium text-[#F5F5F5]">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mx-auto mt-20 max-w-360 px-6 md:px-16">
            <div class="mb-8 space-y-3">
                <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700" data-reveal>
                    Galeria do Sistema
                </p>
                <h2 class="reveal text-3xl font-semibold text-[#F5F5F5] opacity-0 transition duration-700" data-reveal data-reveal-delay="80">
                    Detalhes de Interface & Arquitetura
                </h2>
            </div>

            <div class="grid gap-6 sm:grid-cols-2">
                @foreach ($galleryImages as $index => $imgSrc)
                    <div class="reveal h-64 md:h-80 overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] relative group opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="{{ 100 + ($index * 80) }}">
                        <img src="{{ $imgSrc }}" alt="Interface Atlas Logistics {{ $index + 1 }}"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80" loading="lazy">
                        <div class="absolute bottom-4 left-4 font-mono text-xs text-[#A1A1AA] bg-[#121212]/80 px-3 py-1 border border-[#2D2D2D]">
                            Módulo {{ $index + 1 }}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
            <div class="reveal p-10 md:p-16 border border-[#2D2D2D] bg-[#1A1A1A] rounded flex flex-col md:flex-row items-start md:items-center justify-between gap-8 opacity-0 transition duration-700"
                data-reveal>
                <div class="space-y-3 max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">Próximo Passo</p>
                    <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-[#F5F5F5]">Tem um problema parecido?</h2>
                    <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed">
                        Vamos mapear o seu cenário técnico e construir juntos a solução de engenharia ideal para sua empresa.
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