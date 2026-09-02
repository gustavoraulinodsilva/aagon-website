@extends('layout.master')

@section('title', 'Aagon — Equipe')

@section('content')
    <div class="bg-[#121212] text-[#F5F5F5] pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-end border-b border-[#2D2D2D] pb-16">
                <div class="md:col-span-8 space-y-6">
                    <p class="reveal font-mono text-xs font-medium uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $teamtexts['hero_tag'] }}
                    </p>
                    <h1 class="reveal border-l-4 border-[#0055FF] pl-6 text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] leading-tight opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="100">
                        {!! str_replace(
                            ['<h1>', '</h1>', '<strong>', '</strong>'],
                            ['', '', '<span class="text-[#0055FF]">', '</span>'],
                            $teamtexts['hero_title'] ?? '',
                        ) !!}
                    </h1>
                </div>
                <div class="md:col-span-4">
                    <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="180">
                        {{ $teamtexts['hero_description'] }}
                    </p>
                </div>
            </div>
        </section>
        @if ($teamtexts['show_essence'] == true)
            <section class="mx-auto mt-20 max-w-360 px-6 md:px-16">
                <div class="rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-12">
                    <div class="max-w-3xl space-y-3">
                        <p class="reveal font-mono text-xs font-semibold uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                            data-reveal>
                            {{ $teamtexts['essence_tag'] }}
                        </p>
                        <h2 class="reveal text-2xl md:text-3xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="90">
                            {{ $teamtexts['essence_title'] }}
                        </h2>
                        <p class="reveal text-sm md:text-base leading-relaxed text-[#A1A1AA] opacity-0 transition duration-700"
                            data-reveal data-reveal-delay="150">
                            {{ $teamtexts['essence_description'] }}
                        </p>
                    </div>
                </div>
            </section>
        @endif
        @if ($teamtexts['show_team'] == true)
            <section class="mx-auto mt-24 max-w-360 px-6 md:px-16">
                <div class="mb-12 space-y-3">
                    <p class="reveal font-mono text-xs font-semibold uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $teamtexts['team_tag'] }}
                    </p>
                    <h2 class="reveal text-3xl md:text-4xl font-semibold tracking-tight text-[#F5F5F5] opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        {{ $teamtexts['team_title'] }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($team as $index => $member)
                        <article
                            class="reveal group flex flex-col justify-between rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 text-center transition-colors hover:border-[#0055FF]/50 opacity-0 duration-700"
                            data-reveal data-reveal-delay="{{ 100 + $index * 70 }}">

                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <span class="font-mono text-xs font-bold text-[#A1A1AA]">{{ $member['number'] }}</span>
                                </div>

                                <div
                                    class="mx-auto relative h-28 w-28 overflow-hidden rounded-full border-2 border-[#2D2D2D] bg-[#121212] group-hover:border-[#0055FF] transition-all duration-300">
                                    <img src="{{ asset('storage/' . $member['image']) }}" alt="{{ $member['name'] }}"
                                        class="h-full w-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                                        loading="lazy">
                                </div>

                                <div class="mt-6 space-y-2">
                                    <h3
                                        class="text-xl font-bold text-[#F5F5F5] group-hover:text-[#0055FF] transition-colors">
                                        {{ $member['name'] }}
                                    </h3>
                                    <p class="font-mono text-xs font-semibold uppercase tracking-wider text-[#0055FF]">
                                        {{ $member['role'] }}
                                    </p>
                                    <p class="pt-2 text-xs leading-relaxed text-[#A1A1AA] line-clamp-3">
                                        {{ $member['bio'] }}
                                    </p>
                                </div>
                            </div>

                            <div class="mt-8 pt-4 border-t border-[#2D2D2D]">
                                <a href="{{ $member['linkedin'] }}" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center font-mono text-xs font-medium uppercase tracking-wider text-[#0055FF] hover:text-[#F5F5F5] transition-colors">
                                    <span>Ver LinkedIn</span>
                                    <span class="ml-1.5">&nearr;</span>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
        @if ($teamtexts['show_philosophy'])
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div class="rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 text-center md:p-12">
                    <p class="reveal font-mono text-xs font-semibold uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $teamtexts['philosophy_tag'] }}
                    </p>
                    <p class="reveal mx-auto mt-4 max-w-2xl text-lg md:text-xl font-medium leading-relaxed text-[#F5F5F5] italic opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="90">
                        {{ $teamtexts['philosophy_text'] }}
                    </p>
                </div>
            </section>
        @endif
        @if ($teamtexts['show_cta'])
            <section class="mx-auto mt-28 max-w-360 px-6 md:px-16">
                <div class="reveal p-10 md:p-16 border border-[#2D2D2D] bg-[#1A1A1A] rounded flex flex-col md:flex-row items-start md:items-center justify-between gap-8 opacity-0 transition duration-700"
                    data-reveal>
                    <div class="space-y-3 max-w-2xl">
                        <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">Conecte-se conosco</p>
                        <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-[#F5F5F5]">Quer trabalhar com a gente?
                        </h2>
                        <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed">
                            Estamos sempre em busca de talentos e novas parcerias técnicas para encarar desafios
                            operacionais
                            complexos.
                        </p>
                    </div>
                    <a href="{{ route('contact') }}"
                        class="px-8 py-4 bg-[#0055FF] text-white rounded font-mono text-xs font-medium uppercase tracking-wider hover:bg-opacity-90 transition-all shrink-0">
                        Fale com o time
                    </a>
                </div>
            </section>
        @endif

    </div>
@endsection
