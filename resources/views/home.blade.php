@extends('layout.master')

@section('title', 'Aagon — Tecnologia que transforma')

@section('content')
    <section class="relative isolate -mt-20 min-h-screen overflow-hidden pt-32 md:-mt-24 md:pt-40">
        <video
            class="absolute inset-0 -z-30 h-full w-full object-cover"
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            aria-hidden="true"
        >
            <source src="{{ asset('images/videos/aagon-hero.mp4') }}" type="video/mp4">
        </video>

        <div class="absolute inset-0 -z-20 bg-slate-950/70"></div>
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_18%_22%,rgba(34,211,238,0.28),transparent_45%),radial-gradient(circle_at_84%_80%,rgba(245,158,11,0.22),transparent_42%)]"></div>

        <div class="mx-auto flex min-h-[calc(100vh-4rem)] w-full max-w-7xl items-end px-6 pb-16 md:items-center md:px-8 md:pb-20">
            <div class="max-w-3xl space-y-8">
                <p class="inline-flex rounded-full border border-cyan-200/30 bg-cyan-200/10 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[0.22em] text-cyan-100">
                    Aagon Corporate Website
                </p>

                <h1 class="text-4xl font-semibold leading-tight tracking-tight text-white sm:text-5xl md:text-6xl">
                    Tecnologia que transforma
                    <span class="text-cyan-200">complexidade em solucoes reais.</span>
                </h1>

                <p class="max-w-2xl text-base leading-relaxed text-slate-200/90 sm:text-lg">
                    Desenvolvemos produtos e sistemas digitais sob medida para empresas que precisam escalar com seguranca, performance e clareza de negocio.
                </p>

                <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                    <a href="#" class="inline-flex items-center justify-center rounded-full bg-cyan-300 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-950 transition hover:bg-cyan-200">
                        Conheca a Aagon
                    </a>
                    <a href="#" class="inline-flex items-center justify-center rounded-full border border-slate-200/30 bg-slate-950/35 px-7 py-3 text-sm font-semibold uppercase tracking-[0.14em] text-slate-100 transition hover:border-cyan-200/50 hover:text-cyan-100">
                        Fale conosco
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection