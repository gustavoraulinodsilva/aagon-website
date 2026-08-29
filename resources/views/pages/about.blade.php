@extends('layout.master')

@section('title', 'Aagon — Tecnologia que transforma')

@section('content')
    @php
        $numbers = [
            ['value' => 20, 'suffix' => '+', 'label' => 'Projetos entregues'],
            ['value' => 12, 'suffix' => '', 'label' => 'Setores atendidos'],
            ['value' => 8, 'suffix' => '', 'label' => 'Anos de experiência'],
            ['value' => 95, 'suffix' => '%', 'label' => 'Clientes recorrentes'],
        ];
    @endphp

    <div class="bg-[#121212] text-[#F5F5F5] pb-24 pt-28 md:pt-36" data-about-page>
        <section class="mx-auto max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-12 items-end">
                <div class="md:col-span-8 space-y-4">
                    <p class="reveal font-mono text-xs font-medium uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $abouttext['hero_tag'] }}
                    </p>
                    <h1 class="reveal text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] leading-tight opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="100">
                        {{ $abouttext['hero_title'] }}
                    </h1>
                </div>
                <div class="md:col-span-4">
                    <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="180">
                        {{ $abouttext['hero_description'] }}
                    </p>
                </div>
            </div>
            <figure
                class="reveal relative overflow-hidden rounded border border-[#2D2D2D] bg-[#1A1A1A] opacity-0 transition duration-700"
                data-reveal data-reveal-delay="220">
                <img src="{{ asset('storage/' . $abouttext['hero_image']) }}" alt="Equipe da Aagon em reunião estratégica"
                    class="h-87.5 md:h-137.5 w-full object-cover opacity-90" loading="lazy">
                <figcaption
                    class="absolute inset-x-4 bottom-4 md:inset-x-6 md:bottom-6 rounded border border-[#2D2D2D] bg-[#121212]/80 px-5 py-3 text-xs md:text-sm text-[#A1A1AA] backdrop-blur font-mono">
                    {{ $abouttext['hero_figcaption'] }}
                </figcaption>
            </figure>
        </section>
        @if ($abouttext['show_philosophy'] == true)
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16 py-16 border-y border-[#2D2D2D] bg-[#121212]">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
                    <div class="md:col-span-4 space-y-3">
                        <span
                            class="inline-block bg-[#1A1A1A] border border-[#2D2D2D] px-3 py-1 font-mono text-xs text-[#A1A1AA]">
                            {{ $abouttext['philosophy_tag'] }}
                        </span>
                        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5]">
                            {{ $abouttext['philosophy_title'] }}
                        </h2>
                    </div>
                    <div class="md:col-span-7 md:col-start-6 space-y-8">
                        <p class="text-base md:text-lg text-[#A1A1AA] leading-relaxed">
                            {{ $abouttext['philosophy_description'] }}
                        </p>
                        <div class="p-8 bg-[#1A1A1A] border border-[#2D2D2D] rounded">
                            <span
                                class="block font-mono text-xs uppercase tracking-widest text-[#0055FF] mb-3">MANIFESTO</span>
                            <p class="text-xl md:text-2xl font-medium text-[#F5F5F5] italic">
                                {{ $abouttext['manifest_text'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if ($abouttext['show_approach'] == true)
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div class="mb-12 space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $abouttext['approach_tag'] }}
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        {{ $abouttext['approach_title'] }}
                    </h2>
                </div>

                <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                    @foreach ($aboutapproaches as $pillar)
                        <article
                            class="reveal p-8 border-b md:border-b-0 md:border-r border-[#2D2D2D] relative group hover:bg-[#242424] transition-colors opacity-0 duration-700"
                            data-reveal data-reveal-delay="{{ 100 + $loop->index * 90 }}">
                            <span class="absolute top-8 right-8 font-mono text-xs font-bold text-[#0055FF]">
                                {{ $pillar['number'] }}
                            </span>
                            <h3
                                class="text-xl font-semibold text-[#F5F5F5] mt-6 mb-3 group-hover:text-[#0055FF] transition-colors">
                                {{ $pillar['title'] }}
                            </h3>
                            <p class="text-sm text-[#A1A1AA] leading-relaxed">
                                {{ $pillar['description'] }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
        @if ($abouttext['show_workflow'] == true)
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div class="mb-12 space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $abouttext['workflow_tag'] }}
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        {{ $abouttext['workflow_title'] }}
                    </h2>
                </div>

                <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-[#2D2D2D] bg-[#1A1A1A] rounded overflow-hidden">
                    @foreach ($aboutworkflowsteps as $step)
                        <article
                            class="reveal p-8 border-b md:border-b-0 md:border-r border-[#2D2D2D] relative group hover:bg-[#242424] transition-colors opacity-0 duration-700"
                            data-reveal data-reveal-delay="{{ 120 + $loop->index * 80 }}">
                            <span class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">
                                Passo {{ $step['step'] }}
                            </span>
                            <h3 class="mt-3 text-xl font-semibold text-[#F5F5F5]">{{ $step['title'] }}</h3>
                            <p class="mt-3 text-sm text-[#A1A1AA] leading-relaxed">{{ $step['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
        @if ($abouttext['show_values'] == true)
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div
                    class="grid grid-cols-1 md:grid-cols-12 gap-8 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-12 items-center">
                    <div class="md:col-span-5 space-y-4">
                        <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                            data-reveal>
                            {{ $abouttext['values_tag'] }}
                        </p>
                        <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="90">
                            {{ $abouttext['values_title'] }}
                        </h2>
                    </div>

                    <div class="md:col-span-7">
                        <ul class="grid gap-4 sm:grid-cols-2">
                            @foreach ($aboutvalues as $value)
                                <li class="reveal flex items-center rounded border border-[#2D2D2D] bg-[#121212] px-5 py-4 text-sm font-medium text-[#F5F5F5] opacity-0 transition duration-700"
                                    data-reveal data-reveal-delay="{{ 110 + $loop->index * 70 }}">
                                    <span class="mr-3 h-2 w-2 rounded-full bg-[#0055FF]"></span>
                                    {{ $value['value'] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
        @endif
        @if ($abouttext['show_metrics'] == true)
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div class="mb-12 space-y-3">
                    <p class="reveal font-mono text-xs uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $abouttext['metrics_tag'] }}
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        {{ $abouttext['metrics_title'] }}
                    </h2>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($numbers as $item)
                        <article
                            class="reveal rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 text-center opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="{{ 120 + $loop->index * 80 }}">
                            <p class="text-4xl md:text-5xl font-bold font-mono text-[#0055FF]">
                                <span data-counter="{{ $item['value'] }}">0</span>{{ $item['suffix'] }}
                            </p>
                            <p class="mt-3 font-mono text-xs uppercase tracking-wider text-[#A1A1AA]">{{ $item['label'] }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
        @if ($abouttext['show_cta'])
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16 text-center">
                <div
                    class="p-12 md:p-16 border border-[#2D2D2D] bg-[#1A1A1A] rounded flex flex-col items-center justify-center space-y-6">
                    <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-[#F5F5F5]">Pronto para construir?</h2>
                    <p class="text-base text-[#A1A1AA] max-w-xl">
                        Vamos conversar sobre os desafios da sua empresa e como desenhar a melhor solução digital.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 bg-[#0055FF] text-white px-8 py-4 rounded font-mono text-xs font-medium uppercase tracking-wider hover:bg-opacity-90 transition-all">
                        <span>Iniciar uma conversa</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </section>
        @endif

    </div>
@endsection
