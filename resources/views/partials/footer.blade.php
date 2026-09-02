<footer class="w-full border-t border-[#2D2D2D] bg-[#121212] pt-16 pb-12 text-[#A1A1AA]">
    <div class="mx-auto max-w-360 px-6 md:px-16">
        <div class="grid grid-cols-12 gap-y-10 md:gap-8">
            <div class="col-span-12 md:col-span-4 space-y-4">
                <div class="text-2xl font-bold tracking-tighter text-[#F5F5F5]">AAGON</div>
                @if (isset($general['slogan']) && !empty($general['slogan']))
                    <p class="text-sm max-w-sm leading-relaxed text-[#A1A1AA]">
                        {{ $general['slogan'] }}
                    </p>
                @endif
            </div>
            <div class="col-span-6 md:col-span-2 space-y-4">
                <div class="font-mono text-xs uppercase tracking-wider text-[#F5F5F5] border-b border-[#2D2D2D] pb-2">
                    Páginas do site
                </div>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-[#0055FF] transition-colors">Sobre</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-[#0055FF] transition-colors">Serviços</a>
                    </li>
                    <li><a href="{{ route('projects') }}" class="hover:text-[#0055FF] transition-colors">Projetos</a>
                    </li>
                    <li><a href="{{ route('team') }}" class="hover:text-[#0055FF] transition-colors">Time</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-[#0055FF] transition-colors">Contato</a></li>
                </ul>
            </div>
            <div class="col-span-6 md:col-span-3 space-y-4">
                <div class="font-mono text-xs uppercase tracking-wider text-[#F5F5F5] border-b border-[#2D2D2D] pb-2">
                    Contato
                </div>
                <ul class="space-y-2.5 text-sm">
                    @if (isset($general['email']) && !empty($general['email']))
                        <li>
                            <a href="mailto:contato@aagon.dev"
                                class="font-mono text-xs text-[#A1A1AA] hover:text-[#0055FF] transition-colors">
                                {{ $general['email'] }}
                            </a>
                        </li>
                    @endif
                    @if (isset($general['location']) && !empty($general['location']))
                        <li class="text-xs text-[#A1A1AA]">{{ $general['location'] }}</li>
                    @endif
                </ul>
            </div>
            <div class="col-span-12 md:col-span-3 space-y-4">
                <div class="font-mono text-xs uppercase tracking-wider text-[#F5F5F5] border-b border-[#2D2D2D] pb-2">
                    Conecte-se conosco
                </div>
                <ul class="space-y-2.5 text-sm">
                    @if (isset($general['linkedin']) && !empty($general['linkedin']))
                        <li>
                            <a href="{{ $general['linkedin'] }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 hover:text-[#0055FF] transition-colors">
                                <span>LinkedIn</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </li>
                    @endif
                    @if (isset($general['facebook']) && !empty($general['facebook']))
                        <li>
                            <a href="{{ $general['facebook'] }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 hover:text-[#0055FF] transition-colors">
                                <span>Facebook</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </li>
                    @endif
                    @if (isset($general['instagram']) && !empty($general['instagram']))
                        <li>
                            <a href="{{ $general['instagram'] }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 hover:text-[#0055FF] transition-colors">
                                <span>Instagram</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </li>
                    @endif
                    @if (isset($general['twitter']) && !empty($general['twitter']))
                        <li>
                            <a href="{{ $general['twitter'] }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 hover:text-[#0055FF] transition-colors">
                                <span>Twitter</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div
            class="mt-16 pt-8 border-t border-[#2D2D2D] flex flex-col md:flex-row justify-between items-center gap-4 font-mono text-xs">
            <div>
                &copy; {{ date('Y') }} AAGON Technology &amp; Digital Engineering.
            </div>
            <div class="flex flex-wrap gap-6">
                @if (isset($general['privacy_policy_link']) && !empty($general['privacy_policy_link']))
                    <a href="{{ $general['privacy_policy_link'] }}"
                        class="hover:text-[#0055FF] transition-colors">Privacy Policy</a>
                @endif
                @if (isset($general['terms_of_service_link']) && !empty($general['terms_of_service_link']))
                    <a href="{{ $general['terms_of_service_link'] }}"
                        class="hover:text-[#0055FF] transition-colors">Terms of Service</a>
                @endif
                @if (isset($general['cookie_policy_link']) && !empty($general['cookie_policy_link']))
                    <a href="{{ $general['cookie_policy_link'] }}"
                        class="hover:text-[#0055FF] transition-colors">Cookie Policy</a>
                @endif
            </div>
        </div>
    </div>
</footer>
