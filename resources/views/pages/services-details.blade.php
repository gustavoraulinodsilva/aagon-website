@extends('layout.master')

@section('title', 'Aagon — ' . $service['title'])

@section('content')
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
                            Serviço {{ $service['number'] }}
                        </span>
                        <h1 class="reveal text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] leading-tight opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="100">
                            {{ $service['title'] }}
                        </h1>
                    </div>

                    <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed max-w-2xl opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="180">
                        {{ $service['description'] }}
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
        @if ($service['show_challenge'])
            <section class="mx-auto mt-20 max-w-360 px-6 md:px-16">
                <div
                    class="grid grid-cols-1 md:grid-cols-12 gap-8 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-12 items-start">
                    <div class="md:col-span-5 space-y-3">
                        <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                            data-reveal>
                            {{ $service['challenge_tag'] }}
                        </p>
                        <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="90">
                            {{ $service['challenge_title'] }}
                        </h2>
                    </div>

                    <div class="md:col-span-7 space-y-6 text-[#A1A1AA] text-sm md:text-base leading-relaxed">
                        <p class="reveal opacity-0 transition duration-700" data-reveal data-reveal-delay="120">
                            {{ $service['challenge_description'] }}
                        </p>
                    </div>
                </div>
            </section>
        @endif
        @if ($service['show_deliverables'] && !empty($service['deliverables']))
            <section class="mx-auto mt-24 max-w-360 px-6 md:px-16">
                <div class="mb-12 space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $service['deliverable_tag'] }}
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        {{ $service['deliverable_title'] }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($service['deliverables'] as $index => $item)
                        <div class="reveal flex items-center rounded border border-[#2D2D2D] bg-[#1A1A1A] px-5 py-4 text-sm font-medium text-[#F5F5F5] opacity-0 transition duration-700 hover:border-[#0055FF]/50"
                            data-reveal data-reveal-delay="{{ 100 + $index * 50 }}">
                            <span class="mr-3 h-2 w-2 rounded-full bg-[#0055FF]"></span>
                            {{ $item }}
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
        @if (!empty($service['capabilities']))
            <section class="mx-auto mt-24 max-w-360 px-6 md:px-16">
                <div class="mb-12 space-y-3">
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $service['capability_title'] }}
                    </h2>
                </div>

                <div
                    class="grid grid-cols-1 lg:grid-cols-3 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                    @foreach ($service['capabilities'] as $cap)
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

                            @if (!empty($cap['tech_tags']))
                                <div class="flex flex-wrap gap-2 pt-4 border-t border-[#2D2D2D]">
                                    @foreach ($cap['tech_tags'] as $tag)
                                        <span
                                            class="font-mono text-[10px] uppercase tracking-wider px-2 py-1 rounded border border-[#2D2D2D] bg-[#121212] text-[#A1A1AA]">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
        @if ($service['show_methodology'] && !empty($service['methodology_steps']))
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div class="mb-12 space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $service['methodology_tag'] }}
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        {{ $service['methodology_title'] }}
                    </h2>
                </div>

                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                    @foreach ($service['methodology_steps'] as $mstep)
                        <article
                            class="reveal p-6 border-b sm:border-b-0 border-[#2D2D2D] lg:border-r relative group hover:bg-[#242424] transition-colors opacity-0 duration-700"
                            data-reveal data-reveal-delay="{{ 100 + $loop->index * 60 }}">
                            <span class="font-mono text-xs font-bold text-[#0055FF]">{{ $mstep['number'] }}</span>
                            <h3 class="mt-3 text-lg font-semibold text-[#F5F5F5]">{{ $mstep['title'] }}</h3>
                            <p class="mt-2 text-xs text-[#A1A1AA] leading-relaxed">{{ $mstep['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
        @if ($service['show_tech_stack'] && !empty($service['tech_stack']))
            <section class="mx-auto mt-20 max-w-360 px-6 md:px-16">
                <div
                    class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-6 md:p-8">
                    <p class="font-mono text-xs font-semibold uppercase tracking-widest text-[#A1A1AA]">
                        {{ $service['tech_tag'] }}
                    </p>
                    <div class="flex flex-wrap gap-2.5">
                        @foreach ($service['tech_stack'] as $tech)
                            <span
                                class="rounded border border-[#2D2D2D] bg-[#121212] px-3.5 py-1.5 font-mono text-xs font-medium text-[#F5F5F5]">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        @if (!empty($service['projects']))
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div class="mb-8 space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $service['project_title'] ?? 'Projetos em Destaque' }}
                    </p>
                </div>
                <div class="space-y-6">
                    @foreach ($service['projects'] as $index => $project)
                        <article
                            class="reveal overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] opacity-0 transition duration-700 hover:border-[#0055FF]/40 md:grid md:grid-cols-[1fr_1.3fr]"
                            data-reveal data-reveal-delay="{{ 100 + $index * 80 }}">

                            <div
                                class="h-48 md:h-auto border-b md:border-b-0 md:border-r border-[#2D2D2D] bg-[#121212] p-8 flex items-center justify-center">
                                <div class="font-mono text-2xl font-bold tracking-tighter text-[#0055FF] text-center">
                                    {{ $project['name'] }}
                                </div>
                            </div>

                            <div class="space-y-4 p-8 md:p-10">
                                @if (!empty($project['category']))
                                    <span class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">
                                        {{ $project['category']['name'] }}
                                    </span>
                                @endif

                                <h3 class="text-2xl font-bold text-[#F5F5F5]">{{ $project['name'] }}</h3>

                                <p class="text-sm leading-relaxed text-[#A1A1AA]">
                                    {{ $project['description'] }}
                                </p>

                                <a href="{{ route('projects.details', ['slug' => $project['slug']]) }}"
                                    class="inline-flex items-center font-mono text-xs font-medium uppercase tracking-wider text-[#0055FF] hover:text-[#F5F5F5] transition-colors">
                                    <span>Ver projeto</span>
                                    <span class="ml-2">&rarr;</span>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
        @include('components.cta')
    </div>
@endsection
