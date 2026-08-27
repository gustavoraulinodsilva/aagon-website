@extends('layout.master')

@section('title', 'AAGON — Technology & Digital Engineering')

@section('content')
    @php
        $services = [
            [
                'title' => 'Software sob medida',
                'desc' => 'Sistemas e plataformas web desenhadas para o contexto real da sua operação.',
            ],
            [
                'title' => 'Modernização de sistemas',
                'desc' => 'Evolução e refatoração de softwares legados para arquiteturas escaláveis.',
            ],
            [
                'title' => 'Automação & Integração',
                'desc' => 'Conexão entre ERPs, CRMs e serviços para criar uma operação unificada.',
            ],
            [
                'title' => 'Dados & Analytics',
                'desc' => 'Dashboards e camadas de dados para transformar informação em decisão.',
            ],
        ];

        $stats = [
            ['value' => '20+', 'label' => 'Projetos entregues'],
            ['value' => '12', 'label' => 'Setores atendidos'],
            ['value' => '8', 'label' => 'Anos de experiência'],
        ];
    @endphp
    <section
        class="relative min-h-screen flex items-center border-b border-[#2D2D2D] overflow-hidden -mt-20 pt-20 md:-mt-24 md:pt-24 bg-[#121212]">
        @php
            $mediapath = $hometext['hero_background'] ?? null;
            $extension = pathinfo($mediapath, PATHINFO_EXTENSION);
            $isVideo = in_array(strtolower($extension), ['mp4', 'webm', 'ogg']);
        @endphp
        <div class="absolute inset-0 z-0">
            @if ($isVideo)
                <video class="absolute inset-0 h-full w-full object-cover opacity-25" autoplay muted loop playsinline
                    preload="metadata" aria-hidden="true">
                    <source src="{{ asset('storage/' . $mediapath) }}" type="video/mp4">
                </video>
            @else
                <img src="{{ asset('storage/' . $mediapath) }}" alt="Hero Image"
                    class="absolute inset-0 h-full w-full object-cover opacity-25">
            @endif
        </div>

        <div
            class="absolute inset-0 z-10 bg-linear-to-t from-[#121212] via-[#121212]/60 to-transparent pointer-events-none">
        </div>

        <div class="relative z-20 w-full max-w-360 mx-auto px-6 md:px-16 py-20">
            <div class="max-w-4xl space-y-8">
                <p class="reveal inline-flex rounded border border-[#2D2D2D] bg-[#1A1A1A] px-3.5 py-1.5 font-mono text-xs uppercase tracking-widest text-[#A1A1AA] opacity-0 transition duration-700"
                    data-reveal>
                    {{ $hometext['hero_eyebrow'] }}
                </p>
                <div class="reveal text-4xl sm:text-5xl md:text-7xl font-bold tracking-tight text-[#F5F5F5] leading-[1.1] opacity-0 transition duration-700 [&_h1]:inline [&_h1]:text-inherit [&_h1]:font-inherit [&_strong]:text-[#0055FF]"
                    data-reveal data-reveal-delay="120">
                    {!! $hometext['hero_title'] ?? '' !!}
                </div>
                <p class="reveal max-w-2xl text-lg md:text-xl text-[#A1A1AA] leading-relaxed opacity-0 transition duration-700"
                    data-reveal data-reveal-delay="220">
                    {{ $hometext['hero_description'] }}
                </p>

                <div class="reveal flex flex-col sm:flex-row gap-4 pt-4 opacity-0 transition duration-700" data-reveal
                    data-reveal-delay="320">
                    @if (isset($hometext['hero_primary_link']) && !empty($hometext['hero_primary_link']))
                        <a href="{{ $hometext['hero_primary_link'] }}"
                            class="px-8 py-4 bg-[#0055FF] text-white rounded font-mono text-xs uppercase tracking-wider font-medium hover:bg-opacity-90 transition-all flex items-center justify-center gap-2 group">
                            <span>{{ $hometext['hero_primary_label'] }}</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    @endif
                    @if (isset($hometext['hero_secondary_link']) && !empty($hometext['hero_secondary_link']))
                        <a href="{{ $hometext['hero_secondary_link'] }}"
                            class="px-8 py-4 bg-transparent text-[#F5F5F5] border border-[#2D2D2D] rounded font-mono text-xs uppercase tracking-wider font-medium hover:bg-[#242424] transition-colors flex items-center justify-center">
                            {{ $hometext['hero_secondary_label'] }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @if ($hometext['show_philosophy'] == true)
        <section class="py-28 bg-[#121212] border-b border-[#2D2D2D] flex items-center justify-center text-center">
            <div class="max-w-4xl px-6 md:px-16">
                <div class="reveal [&_h2]:text-3xl [&_h2]:sm:text-5xl [&_h2]:md:text-6xl [&_h2]:font-semibold [&_h2]:tracking-tight [&_h2]:text-[#F5F5F5] [&_h2]:leading-tight [&_strong]:text-[#0055FF] [&_strong]:font-semibold opacity-0 transition duration-700"
                    data-reveal>
                    {!! $hometext['philosophy_text'] ?? '' !!}
                </div>
            </div>
        </section>
    @endif
    @if ($hometext['show_methodology'] == true)
        <section class="py-28 md:py-36 border-b border-[#2D2D2D] bg-[#121212] relative">
            <div class="max-w-360 mx-auto px-6 md:px-16">
                <div class="grid grid-cols-12 gap-y-12 md:gap-12">
                    <div class="col-span-12 md:col-span-5 space-y-6">
                        <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                            data-reveal>
                            {{ $hometext['methodology_label'] }}
                        </p>
                        <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="90">
                            {{ $hometext['methodology_title'] }}
                        </h2>
                        <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="160">
                            {{ $hometext['methodology_description'] }}
                        </p>
                    </div>
                    <div
                        class="col-span-12 md:col-span-6 md:col-start-7 flex flex-col gap-10 border-l border-[#2D2D2D] pl-8 relative">
                        @foreach ($homemethodologysteps as $step)
                            <div class="reveal flex gap-6 items-start relative opacity-0 transition duration-700"
                                data-reveal data-reveal-delay="{{ 100 + $loop->index * 80 }}">
                                <div
                                    class="absolute -left-10.25 top-1.5 w-3 h-3 bg-[#121212] border-2 {{ $step['is_active'] ? 'border-[#0055FF] shadow-[0_0_10px_rgba(0,85,255,0.5)]' : 'border-[#2D2D2D]' }} rounded-full">
                                </div>

                                <span
                                    class="font-mono text-xs font-medium {{ $step['is_active'] ? 'text-[#0055FF]' : 'text-[#A1A1AA]' }} mt-1 w-8 shrink-0">
                                    {{ $step['number'] }}
                                </span>

                                <div>
                                    <h3
                                        class="text-xl font-semibold mb-2 {{ $step['is_active'] ? 'text-[#0055FF]' : 'text-[#F5F5F5]' }}">
                                        {{ $step['title'] }}
                                    </h3>
                                    <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed">
                                        {{ $step['description'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($hometext['show_services'] == true)
        <section class="py-28 border-b border-[#2D2D2D] bg-[#121212]">
            <div class="max-w-360 mx-auto px-6 md:px-16">
                <div class="mb-14 flex flex-col md:flex-row md:items-end justify-between gap-6">
                    <div class="space-y-3">
                        <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                            data-reveal>
                            {{ $hometext['services_label'] }}
                        </p>
                        <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="100">
                            {{ $hometext['services_title'] }}
                        </h2>
                    </div>
                    @if (isset($hometext['services_link_url']) && !empty($hometext['services_link_url']))
                        <a href="{{ $hometext['services_link_url'] }}"
                            class="reveal font-mono text-xs uppercase tracking-wider text-[#0055FF] hover:underline opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="150">
                            {{ $hometext['services_link_label'] }}
                        </a>
                    @endif
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($services as $service)
                        <article
                            class="reveal group p-6 bg-[#1A1A1A] border border-[#2D2D2D] rounded hover:border-[#0055FF]/50 transition-all duration-300 opacity-0"
                            data-reveal data-reveal-delay="{{ 80 + $loop->index * 80 }}">
                            <h3 class="text-lg font-semibold text-[#F5F5F5] group-hover:text-[#0055FF] transition-colors">
                                {{ $service['title'] }}</h3>
                            <p class="mt-3 text-sm text-[#A1A1AA] leading-relaxed">{{ $service['desc'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if ($hometext['show_about'] == true)
        <section class="py-24 bg-[#121212]">
            <div class="max-w-360 mx-auto px-6 md:px-16 grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                <div class="md:col-span-7 space-y-6">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $hometext['about_label'] }}
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        {{ $hometext['about_title'] }}
                    </h2>
                    <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="160">
                        {{ $hometext['about_description'] }}
                    </p>
                </div>
                {{-- Falta integrar os números, provavelmente tratei do sobre aagon --}}
                <div class="md:col-span-5 grid grid-cols-3 gap-4">
                    @foreach ($stats as $stat)
                        <div class="reveal p-5 bg-[#1A1A1A] border border-[#2D2D2D] rounded text-center opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="{{ 120 + $loop->index * 90 }}">
                            <p class="text-2xl md:text-3xl font-bold font-mono text-[#0055FF]">{{ $stat['value'] }}</p>
                            <p class="mt-2 font-mono text-[10px] uppercase tracking-wider text-[#A1A1AA]">
                                {{ $stat['label'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if ($hometext['show_cta'] == true)
        <section class="py-24 bg-[#121212] border-t border-[#2D2D2D]">
        <div class="max-w-360 mx-auto px-6 md:px-16">
            <div class="reveal p-10 md:p-16 bg-[#1A1A1A] border border-[#2D2D2D] rounded flex flex-col md:flex-row items-start md:items-center justify-between gap-8 opacity-0 transition duration-700"
                data-reveal>
                <div class="space-y-3 max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">Tem um desafio?</p>
                    <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-[#F5F5F5]">Vamos conversar.</h2>
                    <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed">
                        Construímos junto com seu time a próxima etapa digital da empresa, com foco em impacto de negócio e
                        evolução contínua.
                    </p>
                </div>
                <a href="{{ route('contact') }}"
                    class="px-8 py-4 bg-[#0055FF] text-white rounded font-mono text-xs uppercase tracking-wider font-medium hover:bg-opacity-90 transition-all shrink-0">
                    Iniciar um Projeto
                </a>
            </div>
        </div>
    </section>
    @endif
@endsection
