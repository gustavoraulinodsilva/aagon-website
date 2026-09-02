@extends('layout.master')

@section('title', 'Aagon — ' . $project['name'] . ' (Detalhes do Projeto)')

@section('content')
    <div class="bg-[#121212] text-[#F5F5F5] pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-360 px-6 md:px-16">
            <div class="max-w-4xl space-y-6">
                <a href="{{ route('projects') }}"
                    class="reveal inline-flex items-center text-xs font-mono font-medium uppercase tracking-wider text-[#0055FF] transition hover:text-[#F5F5F5] opacity-0"
                    data-reveal>
                    &larr; Voltar para Projetos
                </a>

                <div class="space-y-3">
                    <span
                        class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700 block"
                        data-reveal data-reveal-delay="50">
                        {{ $project['category']['name'] ?? '' }}
                    </span>
                    <h1 class="reveal text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700 leading-tight"
                        data-reveal data-reveal-delay="100">
                        {{ $project['name'] }}
                    </h1>
                </div>

                <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed max-w-2xl opacity-0 transition duration-700"
                    data-reveal data-reveal-delay="150">
                    {{ $project['description'] }}
                </p>
            </div>
        </section>
        <section class="mx-auto mt-12 max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                <div class="p-6 border-b sm:border-b-0 sm:border-r border-[#2D2D2D]">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">Cliente</p>
                    <p class="mt-2 text-base font-semibold text-[#F5F5F5]">{{ $project['client'] }}</p>
                </div>
                <div class="p-6 border-b sm:border-b-0 sm:border-r border-[#2D2D2D]">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">Setor</p>
                    <p class="mt-2 text-base font-semibold text-[#F5F5F5]">{{ $project['category']['name'] ?? '' }}</p>
                </div>
                <div class="p-6">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">Serviço Prestado</p>
                    <p class="mt-2 text-base font-semibold text-[#0055FF]">
                        {{ $project['service']['title'] ?? 'Software sob medida' }}</p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-12 max-w-360 px-6 md:px-16">
            <figure
                class="reveal relative overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] opacity-0 transition duration-700 group"
                data-reveal data-reveal-delay="200">
                <img src="{{ asset('storage/' . $project['image']) }}" alt="Interface da plataforma {{ $project['name'] }}"
                    class="h-87.5 md:h-137.5 w-full object-cover opacity-90 group-hover:scale-[1.01] transition-transform duration-500"
                    loading="lazy">
                @if (!empty($project['caption']))
                    <figcaption
                        class="absolute inset-x-4 bottom-4 md:inset-x-6 md:bottom-6 rounded border border-[#2D2D2D] bg-[#121212]/80 px-5 py-3 text-xs md:text-sm text-[#A1A1AA] backdrop-blur font-mono">
                        {{ $project['caption'] }}
                    </figcaption>
                @endif
            </figure>
        </section>
        <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
            <div class="grid gap-8 md:grid-cols-2">
                @if (!empty($project['show_challenge']))
                    <div class="reveal rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-10 space-y-4 opacity-0 transition duration-700"
                        data-reveal>
                        <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">
                            {{ $project['challenge_tag'] ?? 'O Desafio' }}</p>
                        <h2 class="text-2xl font-bold text-[#F5F5F5]">
                            {{ $project['challenge_title'] ?? 'Qual era o problema?' }}</h2>
                        <p class="text-sm md:text-base leading-relaxed text-[#A1A1AA]">
                            {{ $project['challenge_description'] }}
                        </p>
                    </div>
                @endif
                @if (!empty($project['show_solution']))
                    <div class="reveal rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-10 space-y-4 opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="100">
                        <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">
                            {{ $project['solution_tag'] ?? 'A Solução' }}</p>
                        <h2 class="text-2xl font-bold text-[#F5F5F5]">
                            {{ $project['solution_title'] ?? 'O que a Aagon construiu' }}</h2>
                        <p class="text-sm md:text-base leading-relaxed text-[#A1A1AA]">
                            {{ $project['solution_description'] }}
                        </p>
                    </div>
                @endif
            </div>
        </section>
        @if (!empty($project['show_impact']) && !empty($project['metrics']) && count($project['metrics']) > 0)
            <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
                <div class="rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-12 space-y-8">
                    <div class="space-y-3">
                        <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                            data-reveal>
                            {{ $project['impact_tag'] ?? 'Impacto Mensurável' }}
                        </p>
                        <h2 class="reveal text-3xl font-bold text-[#F5F5F5] opacity-0 transition duration-700" data-reveal
                            data-reveal-delay="80">
                            {{ $project['impact_title'] ?? 'Transformação direta na operação.' }}
                        </h2>
                        <p class="reveal max-w-3xl text-sm md:text-base leading-relaxed text-[#A1A1AA] opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="120">
                            {{ $project['impact_description'] }}
                        </p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-6 border-t border-[#2D2D2D]">
                        @foreach ($project['metrics'] as $metric)
                            <div class="reveal p-6 border border-[#2D2D2D] bg-[#121212] rounded opacity-0 transition duration-700"
                                data-reveal data-reveal-delay="160">
                                <p class="text-3xl md:text-4xl font-bold font-mono text-[#0055FF]">
                                    {{ $metric['prefix'] ?? '' }}{{ $metric['value'] }}{{ $metric['suffix'] ?? '' }}
                                </p>
                                <p class="mt-2 font-mono text-xs uppercase tracking-wider text-[#A1A1AA]">
                                    {{ $metric['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        @if (!empty($project['tech_stack']))
            <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
                <div
                    class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-6 md:p-8">
                    <p class="font-mono text-xs font-semibold uppercase tracking-widest text-[#A1A1AA]">
                        {{ $project['tech_tag'] ?? 'Tecnologias Utilizadas' }}
                    </p>
                    <div class="flex flex-wrap gap-2.5">
                        @foreach ($project['tech_stack'] as $tech)
                            <span
                                class="rounded border border-[#2D2D2D] bg-[#121212] px-3.5 py-1.5 font-mono text-xs font-medium text-[#F5F5F5]">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        @if (!empty($project['show_gallery']) && !empty($project['galleries']) && count($project['galleries']) > 0)
            <section class="mx-auto mt-20 max-w-360 px-6 md:px-16">
                <div class="mb-8 space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $project['gallery_tag'] ?? 'Galeria do Sistema' }}
                    </p>
                    <h2 class="reveal text-3xl font-semibold text-[#F5F5F5] opacity-0 transition duration-700" data-reveal
                        data-reveal-delay="80">
                        {{ $project['gallery_title'] ?? 'Detalhes de Interface & Arquitetura' }}
                    </h2>
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    @foreach ($project['galleries'] as $index => $gallery)
                        <div class="reveal h-64 md:h-80 overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] relative group opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="{{ 100 + $index * 80 }}">
                            <img src="{{ asset('storage/' . $gallery['image']) }}"
                                alt="{{ $project['name'] }} - Imagem {{ $index + 1 }}"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80"
                                loading="lazy">
                            <div
                                class="absolute bottom-4 left-4 font-mono text-xs text-[#A1A1AA] bg-[#121212]/80 px-3 py-1 border border-[#2D2D2D]">
                                {{ $gallery['caption'] ?? 'Módulo ' . ($index + 1) }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
        @if (!empty($project['show_cta']))
            @include('components.cta')
        @endif
    </div>
@endsection