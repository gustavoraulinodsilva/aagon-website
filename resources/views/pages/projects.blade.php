@extends('layout.master')

@section('title', 'Aagon — Projetos')

@section('content')
    <div class="bg-[#121212] text-[#F5F5F5] pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-end border-b border-[#2D2D2D] pb-16">
                <div class="md:col-span-8 space-y-6">
                    <p class="reveal font-mono text-xs font-medium uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $projecttext['hero_tag'] ?? '' }}
                    </p>
                    <h1 class="reveal border-l-4 border-[#0055FF] pl-6 text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] leading-tight opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="100">
                        {!! str_replace(
                            ['<h1>', '</h1>', '<strong>', '</strong>'],
                            ['', '', '<span class="text-[#0055FF]">', '</span>'],
                            $projecttext['hero_title'] ?? '',
                        ) !!}
                    </h1>
                </div>
                <div class="md:col-span-4">
                    <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="180">
                        {{ $projecttext['hero_description'] ?? '' }}
                    </p>
                </div>
            </div>
            <div class="reveal flex flex-wrap items-center gap-3 pt-8 opacity-0 transition duration-700" data-reveal
                data-reveal-delay="220">
                <span class="font-mono text-xs text-[#A1A1AA] uppercase tracking-widest mr-3">
                    {{ $projecttext['category_tag'] ?? 'Filtrar' }}
                </span>
                <button type="button" data-filter="all"
                    class="font-mono text-xs uppercase tracking-wider px-4 py-2 rounded transition-colors bg-[#1A1A1A] border border-[#0055FF] text-[#F5F5F5]">
                    Todos
                </button>
                @foreach ($projectcategories as $cat)
                    <button type="button" data-filter="{{ $cat['id'] }}"
                        class="font-mono text-xs uppercase tracking-wider px-4 py-2 rounded transition-colors bg-transparent border border-[#2D2D2D] text-[#A1A1AA] hover:border-[#0055FF]/50 hover:text-[#F5F5F5]">
                        {{ $cat['name'] }}
                    </button>
                @endforeach
            </div>
        </section>

        @if (count($projects) > 0)
            @php
                $featuredProject = collect($projects)->firstWhere('is_featured', true) ?? $projects[0];
                $remainingProjects = collect($projects)->reject(fn($p) => $p['id'] === $featuredProject['id']);
            @endphp
            <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
                <article
                    data-category="{{ $featuredProject['category']['id'] ?? '' }}" 
                    class="reveal group relative overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] transition-colors hover:border-[#0055FF]/50 opacity-0 duration-700 grid grid-cols-1 lg:grid-cols-12"
                    data-reveal data-reveal-delay="240">
                    <div
                        class="lg:col-span-7 relative h-72 lg:h-auto border-b lg:border-b-0 lg:border-r border-[#2D2D2D] overflow-hidden bg-[#121212]">
                        <img src="{{ asset('storage/' . $featuredProject['image']) }}" alt="{{ $featuredProject['name'] }}"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 opacity-90"
                            loading="lazy">
                        <span
                            class="absolute top-4 right-4 font-mono text-xs font-bold text-[#0055FF] bg-[#121212]/80 px-2 py-1 border border-[#2D2D2D] backdrop-blur">
                            DESTAQUE
                        </span>
                    </div>
                    <div class="lg:col-span-5 p-8 md:p-12 flex flex-col justify-between">
                        <div>
                            <span
                                class="inline-block bg-[#121212] border border-[#2D2D2D] font-mono text-xs px-3 py-1 text-[#0055FF] mb-4 uppercase tracking-widest">
                                {{ $featuredProject['category']['name'] ?? 'Projeto' }}
                            </span>
                            <h2
                                class="text-3xl md:text-4xl font-bold text-[#F5F5F5] group-hover:text-[#0055FF] transition-colors mb-4">
                                {{ $featuredProject['name'] }}
                            </h2>
                            <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed mb-6">
                                {{ $featuredProject['description'] }}
                            </p>
                            <div class="flex flex-wrap gap-2 mb-8">
                                @foreach ($featuredProject['tech_stack'] ?? [] as $tag)
                                    <span
                                        class="font-mono text-xs bg-[#121212] border border-[#2D2D2D] px-2.5 py-1 text-[#A1A1AA]">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ route('projects.details', ['slug' => $featuredProject['slug']]) }}"
                            class="inline-flex items-center font-mono text-xs font-medium uppercase tracking-wider text-[#0055FF] group-hover:text-[#F5F5F5] transition-colors pt-6 border-t border-[#2D2D2D]">
                            <span>Ver Estudo de Caso</span>
                            <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">&rarr;</span>
                        </a>
                    </div>
                </article>
            </section>
            <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($remainingProjects as $index => $project)
                        <article
                            data-category="{{ $project['category']['id'] ?? '' }}" class="reveal group flex flex-col justify-between overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] transition-colors hover:border-[#0055FF]/50 opacity-0 duration-700"
                            data-reveal data-reveal-delay="{{ 100 + $index * 80 }}">
                            <div>
                                <div class="h-48 w-full border-b border-[#2D2D2D] overflow-hidden bg-[#121212] relative">
                                    <img src="{{ asset('storage/' . $project['image']) }}" alt="{{ $project['name'] }}"
                                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80"
                                        loading="lazy">
                                    <span
                                        class="absolute top-4 right-4 font-mono text-xs font-bold text-[#A1A1AA] bg-[#121212]/80 px-2 py-1 border border-[#2D2D2D]">
                                        #{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                <div class="space-y-3 p-6">
                                    <span class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">
                                        {{ $project['category']['name'] ?? '' }}
                                    </span>
                                    <h3
                                        class="text-xl font-semibold text-[#F5F5F5] group-hover:text-[#0055FF] transition-colors">
                                        {{ $project['name'] }}
                                    </h3>
                                    <p class="text-sm leading-relaxed text-[#A1A1AA]">
                                        {{ $project['description'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="p-6 pt-0 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($project['tech_stack'] ?? [] as $tag)
                                        <span
                                            class="font-mono text-[10px] bg-[#121212] border border-[#2D2D2D] px-2 py-0.5 text-[#A1A1AA]">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                                <div class="pt-4 border-t border-[#2D2D2D]">
                                    <a href="{{ route('projects.details', ['slug' => $project['slug']]) }}"
                                        class="inline-flex items-center font-mono text-xs font-medium uppercase tracking-wider text-[#0055FF] group-hover:text-[#F5F5F5] transition-colors">
                                        <span>Ver detalhes</span>
                                        <span
                                            class="ml-2 transition-transform duration-300 group-hover:translate-x-1">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif

        @if (($projecttext['show_cta'] ?? true) == true)
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div class="reveal p-10 md:p-16 border border-[#2D2D2D] bg-[#1A1A1A] rounded flex flex-col md:flex-row items-start md:items-center justify-between gap-8 opacity-0 transition duration-700"
                    data-reveal>
                    <div class="space-y-3 max-w-2xl">
                        <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">Desenvolvimento focado em
                            resultado</p>
                        <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-[#F5F5F5]">Quer transformar sua
                            operação?</h2>
                        <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed">
                            Entre em contato para avaliar como nossas soluções técnicas e engenharia de software se adaptam
                            ao seu cenário corporativo.
                        </p>
                    </div>
                    <a href="{{ route('contact') }}"
                        class="px-8 py-4 bg-[#0055FF] text-white rounded font-mono text-xs font-medium uppercase tracking-wider hover:bg-opacity-90 transition-all shrink-0">
                        Fale com a Aagon
                    </a>
                </div>
            </section>
        @endif
    </div>
@endsection
