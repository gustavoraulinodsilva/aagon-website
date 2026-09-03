<section class="{{ $cta_section_class ?? 'bg-transparent' }} py-24">
    <div class="max-w-360 mx-auto px-6 md:px-16">
        <div class="reveal p-10 md:p-16 bg-[#1A1A1A] border border-[#2D2D2D] rounded flex flex-col md:flex-row items-start md:items-center justify-between gap-8 opacity-0 transition duration-700"
            data-reveal>
            <div class="space-y-3 max-w-2xl">
                @if (isset($general['cta_tag']) && !empty($general['cta_tag']))
                    <p class="font-mono text-xs uppercase tracking-widest text-[#0055FF]">{{ $general['cta_tag'] }}</p>
                @endif
                @if (isset($general['cta_title']) && !empty($general['cta_title']))
                    <h2 class="text-3xl md:text-5xl font-semibold tracking-tight text-[#F5F5F5]">
                        {{ $general['cta_title'] }}</h2>
                @endif
                <p class="text-sm md:text-base text-[#A1A1AA] leading-relaxed">
                    @if (isset($general['cta_description']) && !empty($general['cta_description']))
                        {{ $general['cta_description'] }}
                    @endif
                </p>
            </div>
            @if (isset($general['cta_btn_link']) && !empty($general['cta_btn_link']))
                <a href="{{ $general['cta_btn_link'] }}"
                    class="px-8 py-4 bg-[#0055FF] text-white rounded font-mono text-xs uppercase tracking-wider font-medium hover:bg-opacity-90 transition-all shrink-0">
                    {{ $general['cta_btn_label'] }}
                </a>
            @endif
        </div>
    </div>
</section>
