@extends('layout.master')

@section('title', 'Aagon — Tecnologia que transforma')

@section('content')
    {{-- HERO SECTION --}}
    <section class="py-24 max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold tracking-tight text-white mb-6">
            Tecnologia que transforma <br>
            <span class="text-indigo-500">complexidade em soluções.</span>
        </h1>
        <p class="text-lg text-slate-400 max-w-2xl mx-auto mb-8">
            Desenvolvemos produtos e sistemas digitais sob medida para empresas.
        </p>
        <div class="flex justify-center gap-4">
            <a href="#" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium px-6 py-3 rounded-lg transition">
                Conheça a Aagon
            </a>
            <a href="#" class="border border-slate-700 hover:bg-slate-800 text-slate-300 font-medium px-6 py-3 rounded-lg transition">
                Fale conosco
            </a>
        </div>
    </section>
@endsection