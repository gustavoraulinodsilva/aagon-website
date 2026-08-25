@extends('layout.master')

@section('title', 'Aagon — Contato')

@section('content')
    <div class="bg-slate-950 pb-24 pt-28 md:pt-36">
        <section class="mx-auto max-w-7xl px-6 md:px-8">
            <div class="max-w-3xl space-y-6">
                <p class="reveal inline-flex rounded-full border border-cyan-200/30 bg-cyan-200/10 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.22em] text-cyan-100 opacity-0 transition duration-700" data-reveal>
                    Contato
                </p>
                <h1 class="reveal text-4xl font-semibold leading-tight tracking-tight text-slate-50 opacity-0 transition duration-700 sm:text-5xl md:text-6xl" data-reveal data-reveal-delay="100">
                    Vamos conversar sobre seu <span class="text-cyan-200">próximo desafio.</span>
                </h1>
                <p class="reveal text-base leading-relaxed text-slate-300 opacity-0 transition duration-700 sm:text-lg" data-reveal data-reveal-delay="180">
                    Preencha o formulário ou utilize nossos canais diretos para avaliar seu cenário com nosso time de engenharia.
                </p>
            </div>
        </section>
        <section class="mx-auto mt-16 max-w-7xl px-6 md:px-8">
            <div class="grid gap-12 lg:grid-cols-[1fr_1.3fr] lg:items-start">
                <div class="space-y-8 rounded-3xl border border-slate-800 bg-slate-900/60 p-8 md:p-10">
                    <div class="space-y-3">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-200">Atendimento Direto</p>
                        <h2 class="text-2xl font-semibold text-slate-50 md:text-3xl">Canais de acesso rápido</h2>
                        <p class="text-sm leading-relaxed text-slate-400">
                            Se preferir um contato mais direto, estamos disponíveis via e-mail e nos principais canais corporativos.
                        </p>
                    </div>

                    <hr class="border-slate-800/80">

                    <div class="space-y-6">
                        <div class="space-y-1">
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-100">E-mail corporativo</p>
                            <a href="mailto:contato@aagon.dev" class="text-lg font-medium text-slate-100 transition hover:text-cyan-300">
                                contato@aagon.dev
                            </a>
                        </div>

                        <div class="space-y-1">
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-100">Localização</p>
                            <p class="text-base text-slate-200">Caxias do Sul, RS — Brasil</p>
                        </div>

                        <div class="space-y-1">
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-100">Horário de operação</p>
                            <p class="text-sm text-slate-300">Segunda a Sexta, das 08h às 18h</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-3xl border border-cyan-900/30 bg-slate-900/80 p-8 md:p-10">
                    <form action="#" class="space-y-5">
                        <div class="grid gap-5 sm:grid-cols-2">
                            <div class="space-y-2">
                                <label for="name" class="block text-xs font-semibold uppercase tracking-[0.16em] text-slate-300">
                                    Nome *
                                </label>
                                <input type="text" id="name" name="name" required placeholder="Seu nome completo"
                                    class="w-full rounded-xl border border-slate-800 bg-slate-950/60 px-4 py-3 text-sm text-slate-100 placeholder-slate-500 transition focus:border-cyan-300/60 focus:outline-none focus:ring-1 focus:ring-cyan-300/60">
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="block text-xs font-semibold uppercase tracking-[0.16em] text-slate-300">
                                    E-mail *
                                </label>
                                <input type="email" id="email" name="email" required placeholder="seu@email.com"
                                    class="w-full rounded-xl border border-slate-800 bg-slate-950/60 px-4 py-3 text-sm text-slate-100 placeholder-slate-500 transition focus:border-cyan-300/60 focus:outline-none focus:ring-1 focus:ring-cyan-300/60">
                            </div>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div class="space-y-2">
                                <label for="company" class="block text-xs font-semibold uppercase tracking-[0.16em] text-slate-300">
                                    Empresa
                                </label>
                                <input type="text" id="company" name="company" placeholder="Nome da empresa"
                                    class="w-full rounded-xl border border-slate-800 bg-slate-950/60 px-4 py-3 text-sm text-slate-100 placeholder-slate-500 transition focus:border-cyan-300/60 focus:outline-none focus:ring-1 focus:ring-cyan-300/60">
                            </div>
                            <div class="space-y-2">
                                <label for="phone" class="block text-xs font-semibold uppercase tracking-[0.16em] text-slate-300">
                                    Telefone / WhatsApp
                                </label>
                                <input type="text" id="phone" name="phone" placeholder="(00) 00000-0000"
                                    class="w-full rounded-xl border border-slate-800 bg-slate-950/60 px-4 py-3 text-sm text-slate-100 placeholder-slate-500 transition focus:border-cyan-300/60 focus:outline-none focus:ring-1 focus:ring-cyan-300/60">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="subject" class="block text-xs font-semibold uppercase tracking-[0.16em] text-slate-300">
                                Assunto *
                            </label>
                            <input type="text" id="subject" name="subject" required placeholder="Como podemos ajudar?"
                                class="w-full rounded-xl border border-slate-800 bg-slate-950/60 px-4 py-3 text-sm text-slate-100 placeholder-slate-500 transition focus:border-cyan-300/60 focus:outline-none focus:ring-1 focus:ring-cyan-300/60">
                        </div>
                        <div class="space-y-2">
                            <label for="message" class="block text-xs font-semibold uppercase tracking-[0.16em] text-slate-300">
                                Mensagem *
                            </label>
                            <textarea id="message" name="message" rows="4" required placeholder="Descreva brevemente o projeto ou desafio..."
                                class="w-full rounded-xl border border-slate-800 bg-slate-950/60 px-4 py-3 text-sm text-slate-100 placeholder-slate-500 transition focus:border-cyan-300/60 focus:outline-none focus:ring-1 focus:ring-cyan-300/60 resize-none"></textarea>
                        </div>
                        <div class="pt-2">
                            <button type="submit"
                                class="inline-flex w-full items-center justify-center rounded-full bg-cyan-300 px-7 py-3.5 text-xs font-semibold uppercase tracking-[0.18em] text-slate-950 transition hover:bg-cyan-200">
                                Enviar mensagem
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection