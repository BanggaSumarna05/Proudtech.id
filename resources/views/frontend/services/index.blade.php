<x-frontend-layout>
    <section class="py-20 md:py-48 relative overflow-hidden">
        <!-- Background Accents -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_50%_0%,rgba(59,130,246,0.05),transparent_50%)]">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10">
            <div class="relative z-10 text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 mb-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-400">Matriks
                        Ekosistem</span>
                </div>
                <h1 data-aos="fade-up"
                    class="text-4xl sm:text-7xl md:text-8xl lg:text-9xl font-black text-white mb-10 tracking-tighter leading-[0.9] uppercase">
                    Matriks <span class="text-gradient">Layanan.</span>
                </h1>
                <p data-aos="fade-up" data-aos-delay="200"
                    class="text-xl md:text-2xl text-slate-400 font-medium leading-relaxed max-w-2xl mx-auto">
                    Arsitektur rekayasa digital yang dirancang untuk skala, keamanan, dan dominasi pasar.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $index => $service)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                        class="group relative p-12 rounded-[2.5rem] glass border border-white/5 hover:border-indigo-500/30 transition-all duration-700 overflow-hidden">
                        <div
                            class="absolute -top-10 -right-10 w-40 h-40 bg-indigo-600/10 rounded-full blur-[80px] group-hover:bg-indigo-600/20 transition-all duration-700">
                        </div>

                        <div class="relative z-10">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/10 flex items-center justify-center mb-10 group-hover:bg-indigo-600 group-hover:border-indigo-400 group-hover:glow-blue transition-all duration-500">
                                <i
                                    class="{{ Str::contains($service->icon, 'fa-') ? $service->icon : 'fas fa-' . ($service->icon ?? 'rocket') }} text-2xl text-indigo-500 group-hover:text-white transition-colors"></i>
                            </div>
                            <h2 class="text-2xl font-black text-white mb-4 uppercase tracking-tight">
                                {{ $service->title }}</h2>
                            <p
                                class="text-slate-500 leading-relaxed text-sm mb-10 group-hover:text-slate-300 transition-colors">
                                {{ $service->description }}
                            </p>
                            <a href="{{ route('services.show', $service->slug) }}"
                                class="inline-flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.2em] text-indigo-400 hover:text-white transition-all">
                                Detail Protokol <i class="fas fa-chevron-right text-[8px] ml-1"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Custom Solutions CTA -->
    <section data-aos="zoom-in" class="py-20 md:py-40 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div
                class="relative p-12 lg:p-24 rounded-[3rem] bg-gradient-to-br from-blue-600 to-indigo-700 overflow-hidden shadow-2xl">
                <div class="absolute inset-0 bg-[#050505] opacity-20"></div>
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2">
                </div>

                <div class="relative z-10 text-center max-w-3xl mx-auto">
                    <h2
                        class="text-3xl md:text-7xl font-black text-white mb-10 tracking-tighter uppercase leading-[0.9]">
                        Kebutuhan <br> <span class="text-blue-200/40">Khusus?</span></h2>
                    <p class="text-lg md:text-2xl text-blue-100 font-medium mb-12 opacity-80">
                        Kami berkembang dalam tantangan teknis yang kompleks. Mari rancang solusi kustom yang
                        membangun warisan bisnis Anda.
                    </p>
                    <a href="{{ \App\Models\Setting::whatsappUrl('Halo, saya ingin berkonsultasi mengenai solusi kustom untuk bisnis saya.') }}"
                        class="inline-block px-12 py-6 bg-white text-blue-600 rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:scale-105 active:scale-95 transition-all shadow-xl">
                        Mulai Konsultasi
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
