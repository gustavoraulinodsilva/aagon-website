<footer class="w-full border-t border-[#2D2D2D] bg-[#121212] pt-16 pb-12 text-[#A1A1AA]">
    <div class="mx-auto max-w-360 px-6 md:px-16">
        <div class="grid grid-cols-12 gap-y-10 md:gap-8">
            <div class="col-span-12 md:col-span-4 space-y-4">
                <div class="text-2xl font-bold tracking-tighter text-[#F5F5F5]">AAGON</div>
                <p class="text-sm max-w-sm leading-relaxed text-[#A1A1AA]">
                    Technology built to solve real problems.
                </p>
            </div>
            <div class="col-span-6 md:col-span-2 space-y-4">
                <div class="font-mono text-xs uppercase tracking-wider text-[#F5F5F5] border-b border-[#2D2D2D] pb-2">
                    Sitemap
                </div>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-[#0055FF] transition-colors">About</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-[#0055FF] transition-colors">Services</a></li>
                    <li><a href="{{ route('projects') }}" class="hover:text-[#0055FF] transition-colors">Projects</a></li>
                    <li><a href="{{ route('team') }}" class="hover:text-[#0055FF] transition-colors">Team</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-[#0055FF] transition-colors">Contact</a></li>
                </ul>
            </div>
            <div class="col-span-6 md:col-span-3 space-y-4">
                <div class="font-mono text-xs uppercase tracking-wider text-[#F5F5F5] border-b border-[#2D2D2D] pb-2">
                    Inquiries
                </div>
                <ul class="space-y-2.5 text-sm">
                    <li>
                        <a href="mailto:contato@aagon.dev" class="font-mono text-xs text-[#A1A1AA] hover:text-[#0055FF] transition-colors">
                            contato@aagon.dev
                        </a>
                    </li>
                    <li class="text-xs text-[#A1A1AA]">Caxias do Sul, RS — Brasil</li>
                </ul>
            </div>
            <div class="col-span-12 md:col-span-3 space-y-4">
                <div class="font-mono text-xs uppercase tracking-wider text-[#F5F5F5] border-b border-[#2D2D2D] pb-2">
                    Connect
                </div>
                <ul class="space-y-2.5 text-sm">
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 hover:text-[#0055FF] transition-colors">
                            <span>LinkedIn</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 hover:text-[#0055FF] transition-colors">
                            <span>GitHub</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-16 pt-8 border-t border-[#2D2D2D] flex flex-col md:flex-row justify-between items-center gap-4 font-mono text-xs">
            <div>
                &copy; {{ date('Y') }} AAGON Technology &amp; Digital Engineering.
            </div>
            <div class="flex flex-wrap gap-6">
                <a href="#" class="hover:text-[#0055FF] transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-[#0055FF] transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-[#0055FF] transition-colors">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>