<x-frontend-layout>
    <section class="pt-8 md:pt-14 pb-16 md:pb-40 relative overflow-hidden">
        <!-- Background Accents -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_50%_0%,rgba(59,130,246,0.05),transparent_50%)]">
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10 relative z-10">
            <div class="relative z-10 text-center max-w-4xl mx-auto mb-12 sm:mb-16 md:mb-20">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 mb-6 sm:mb-8">
                    <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-400">Layanan Kami</span>
                </div>
                <h1 data-aos="fade-up"
                    class="text-4xl sm:text-6xl md:text-8xl lg:text-9xl font-black text-white mb-6 sm:mb-10 tracking-tighter leading-[0.9] uppercase">
                    Layanan <span class="text-gradient">Digital.</span>
                </h1>
                <p data-aos="fade-up" data-aos-delay="200"
                    class="text-base sm:text-xl md:text-2xl text-slate-400 font-medium leading-relaxed max-w-2xl mx-auto px-2">
                    Solusi nyata untuk bisnis yang ingin tumbuh secara online — dari website sampai sistem digital.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 lg:gap-8">
                @foreach ($services as $index => $service)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                        class="group relative p-7 sm:p-8 lg:p-12 rounded-[2rem] sm:rounded-[2.5rem] glass border border-white/5 hover:border-indigo-500/30 transition-all duration-700 overflow-hidden flex flex-col">
                        <div
                            class="absolute -top-10 -right-10 w-40 h-40 bg-indigo-600/10 rounded-full blur-[80px] group-hover:bg-indigo-600/20 transition-all duration-700">
                        </div>

                        <div class="relative z-10 flex flex-col flex-1">
                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-white/[0.03] border border-white/10 flex items-center justify-center mb-7 sm:mb-10 group-hover:bg-indigo-600 group-hover:border-indigo-400 group-hover:glow-blue transition-all duration-500 flex-shrink-0">
                                <i
                                    class="{{ Str::contains($service->icon, 'fa-') ? $service->icon : 'fas fa-' . ($service->icon ?? 'rocket') }} text-xl sm:text-2xl text-indigo-500 group-hover:text-white transition-colors"></i>
                            </div>
                            <h2
                                class="text-lg sm:text-xl lg:text-2xl font-black text-white mb-3 sm:mb-4 uppercase tracking-tight leading-tight">
                                {{ $service->title }}</h2>
                            <p
                                class="text-slate-500 leading-relaxed text-sm mb-7 sm:mb-10 group-hover:text-slate-300 transition-colors flex-1">
                                {{ Str::limit(strip_tags($service->description), 120) }}
                            </p>
                            <a href="{{ route('services.show', $service->slug) }}"
                                class="inline-flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.2em] text-indigo-400 hover:text-white transition-all mt-auto">
                                Pelajari Lebih Lanjut <i class="fas fa-chevron-right text-[8px] ml-1"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Custom Solutions CTA -->
    <section data-aos="zoom-in" class="py-12 sm:py-16 md:py-40 relative">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10">
            <div
                class="relative p-8 sm:p-12 lg:p-24 rounded-[2.5rem] sm:rounded-[3rem] bg-gradient-to-br from-blue-600 to-indigo-700 overflow-hidden shadow-2xl">
                <div class="absolute inset-0 bg-[#050505] opacity-20"></div>
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2">
                </div>

                <div class="relative z-10 text-center max-w-3xl mx-auto">
                    <h2
                        class="text-2xl sm:text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 sm:mb-10 tracking-tighter uppercase leading-[0.9]">
                        Ada Kebutuhan <br> <span class="text-blue-200/40">Khusus?</span></h2>
                    <p
                        class="text-base sm:text-lg md:text-2xl text-blue-100 font-medium mb-8 sm:mb-12 opacity-80 leading-relaxed">
                        Kami suka tantangan yang tidak biasa. Ceritakan kebutuhan kamu — kami bantu cari solusinya.
                    </p>
                    <a href="{{ \App\Models\Setting::whatsappUrl('Halo, saya ingin berkonsultasi mengenai solusi kustom untuk bisnis saya.') }}"
                        class="inline-block px-10 py-5 sm:px-12 sm:py-6 bg-white text-blue-600 rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:scale-105 active:scale-95 transition-all shadow-xl">
                        Mulai Konsultasi
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
