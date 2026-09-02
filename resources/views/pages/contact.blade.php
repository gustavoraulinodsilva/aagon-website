@extends('layout.master')

@section('title', 'Aagon — Contato')

@section('content')
    <div class="bg-[#121212] text-[#F5F5F5] pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-end border-b border-[#2D2D2D] pb-16">
                <div class="md:col-span-8 space-y-6">
                    <p class="reveal font-mono text-xs font-medium uppercase tracking-widest text-[#0055FF] opacity-0 transition duration-700"
                        data-reveal>
                        {{ $contacttext['hero_tag'] }}
                    </p>
                    <h1 class="reveal border-l-4 border-[#0055FF] pl-6 text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-[#F5F5F5] leading-tight opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="100">
                        {!! str_replace(
                            ['<h1>', '</h1>', '<strong>', '</strong>'],
                            ['', '', '<span class="text-[#0055FF]">', '</span>'],
                            $contacttext['hero_title'] ?? '',
                        ) !!}
                    </h1>
                </div>
                <div class="md:col-span-4">
                    <p class="reveal text-base md:text-lg text-[#A1A1AA] leading-relaxed opacity-0 transition duration-700"
                        data-reveal data-reveal-delay="180">
                        {{ $contacttext['hero_description'] }}
                    </p>
                </div>
            </div>
        </section>
        <section class="mx-auto mt-16 max-w-360 px-6 md:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-5 space-y-8 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-10">
                    <div class="space-y-3">
                        <p class="font-mono text-xs font-semibold uppercase tracking-widest text-[#0055FF]">
                            {{ $contacttext['service_tag'] }}</p>
                        <h2 class="text-2xl font-bold text-[#F5F5F5] md:text-3xl">{{ $contacttext['service_title'] }}</h2>
                        <p class="text-sm leading-relaxed text-[#A1A1AA]">
                            {{ $contacttext['service_description'] }}
                        </p>
                    </div>

                    <div class="space-y-6 pt-6 border-t border-[#2D2D2D]">
                        <div class="group border-l-2 border-[#2D2D2D] pl-4 hover:border-[#0055FF] transition-colors">
                            <span class="font-mono text-[11px] uppercase tracking-widest text-[#0055FF] block mb-1">E-mail
                                corporativo</span>
                            <a href="mailto:contato@aagon.dev"
                                class="font-mono text-base font-medium text-[#F5F5F5] hover:text-[#0055FF] transition-colors">
                                {{ $general['email'] }}
                            </a>
                        </div>

                        <div class="group border-l-2 border-[#2D2D2D] pl-4 hover:border-[#0055FF] transition-colors">
                            <span
                                class="font-mono text-[11px] uppercase tracking-widest text-[#0055FF] block mb-1">Localização</span>
                            <p class="font-mono text-sm text-[#F5F5F5]">{{ $general['location'] }}</p>
                        </div>

                        <div class="group border-l-2 border-[#2D2D2D] pl-4 hover:border-[#0055FF] transition-colors">
                            <span class="font-mono text-[11px] uppercase tracking-widest text-[#0055FF] block mb-1">Horário
                                de operação</span>
                            <p class="font-mono text-sm text-[#A1A1AA]">{{ $contacttext['business_hours'] }}</p>
                        </div>

                        <div class="group border-l-2 border-[#2D2D2D] pl-4 hover:border-[#0055FF] transition-colors">
                            <span
                                class="font-mono text-[11px] uppercase tracking-widest text-[#0055FF] block mb-1">Disponibilidade</span>
                            <div class="flex items-center space-x-2 mt-1">
                                <span class="h-2 w-2 rounded-full bg-[#0055FF] animate-pulse"></span>
                                <span class="font-mono text-xs text-[#F5F5F5]">{{ $contacttext['availability'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 rounded border border-[#2D2D2D] bg-[#1A1A1A] p-8 md:p-12">
                    <form action="{{ route('contact.store') }}" method="POST" class="form space-y-6">
                        @csrf
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="space-y-2 flex flex-col">
                                <label for="name" class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">
                                    Nome *
                                </label>
                                <input type="text" id="name" name="name" required placeholder="Seu nome completo"
                                    class="w-full rounded border border-[#2D2D2D] bg-[#121212] px-4 py-3 font-mono text-sm text-[#F5F5F5] placeholder-[#52525B] transition focus:border-[#0055FF] focus:outline-none focus:ring-1 focus:ring-[#0055FF]">
                            </div>

                            <div class="space-y-2 flex flex-col">
                                <label for="email" class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">
                                    E-mail *
                                </label>
                                <input type="email" id="email" name="email" required placeholder="seu@email.com"
                                    class="w-full rounded border border-[#2D2D2D] bg-[#121212] px-4 py-3 font-mono text-sm text-[#F5F5F5] placeholder-[#52525B] transition focus:border-[#0055FF] focus:outline-none focus:ring-1 focus:ring-[#0055FF]">
                            </div>
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="space-y-2 flex flex-col">
                                <label for="company" class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">
                                    Empresa
                                </label>
                                <input type="text" id="company" name="company" placeholder="Nome da empresa"
                                    class="w-full rounded border border-[#2D2D2D] bg-[#121212] px-4 py-3 font-mono text-sm text-[#F5F5F5] placeholder-[#52525B] transition focus:border-[#0055FF] focus:outline-none focus:ring-1 focus:ring-[#0055FF]">
                            </div>

                            <div class="space-y-2 flex flex-col">
                                <label for="phone" class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">
                                    Telefone / WhatsApp
                                </label>
                                <input type="text" id="phone" name="phone" placeholder="(00) 00000-0000"
                                    class="w-full rounded border border-[#2D2D2D] bg-[#121212] px-4 py-3 font-mono text-sm text-[#F5F5F5] placeholder-[#52525B] transition focus:border-[#0055FF] focus:outline-none focus:ring-1 focus:ring-[#0055FF]">
                            </div>
                        </div>

                        <div class="space-y-2 flex flex-col">
                            <label for="subject" class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">
                                Assunto *
                            </label>
                            <select id="subject" name="subject" required
                                class="w-full rounded border border-[#2D2D2D] bg-[#121212] px-4 py-3 font-mono text-sm text-[#F5F5F5] transition focus:border-[#0055FF] focus:outline-none focus:ring-1 focus:ring-[#0055FF]">
                                <option value="" disabled selected class="text-[#52525B]">Selecione o tipo de assunto
                                </option>
                                <option value="software-sob-medida">Software Sob Medida</option>
                                <option value="modernizacao-de-sistemas">Modernização de Sistemas</option>
                                <option value="automacao-e-integracao">Automação & Integração</option>
                                <option value="dados-e-analytics">Dados & Analytics</option>
                                <option value="outro-assunto">Outro Assunto</option>
                            </select>
                        </div>

                        <div class="space-y-2 flex flex-col">
                            <label for="message" class="font-mono text-xs uppercase tracking-widest text-[#A1A1AA]">
                                Mensagem *
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                placeholder="Descreva brevemente o projeto ou desafio operacional..."
                                class="w-full rounded border border-[#2D2D2D] bg-[#121212] px-4 py-3 font-mono text-sm text-[#F5F5F5] placeholder-[#52525B] transition focus:border-[#0055FF] focus:outline-none focus:ring-1 focus:ring-[#0055FF] resize-none"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="btn-submit w-full rounded bg-[#0055FF] px-8 py-4 font-mono text-xs font-medium uppercase tracking-wider text-white transition hover:bg-opacity-90 active:scale-95 flex items-center justify-center gap-2">
                                <span id="status-message">Enviar mensagem</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </section>

    </div>
@endsection
