<x-frontend-layout>
    <section class="pt-8 md:pt-14 pb-16 md:pb-40 relative overflow-hidden">
        <!-- Background Decor -->
        <div
            class="absolute top-0 right-0 w-[40%] h-[40%] bg-blue-600/[0.03] rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10 relative z-10">
            <div class="flex flex-col lg:flex-row gap-12 sm:gap-16 lg:gap-20">
                <!-- Primary content -->
                <div class="lg:w-2/3">
                    <a href="{{ route('services.index') }}"
                        class="inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-[0.3em] text-gray-500 hover:text-white mb-8 sm:mb-10 md:mb-16 transition-all group">
                        <i class="fas fa-arrow-left group-hover:-translate-x-2 transition-transform"></i> Semua Layanan
                    </a>

                    <div data-aos="fade-right"
                        class="flex flex-col sm:flex-row items-start sm:items-center gap-6 sm:gap-8 mb-10 sm:mb-16">
                        <div
                            class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl sm:rounded-3xl bg-indigo-600/10 border border-indigo-500/20 flex items-center justify-center text-indigo-500 shadow-2xl shadow-indigo-500/10 flex-shrink-0">
                            <i
                                class="{{ Str::contains($service->icon, 'fa-') ? $service->icon : 'fas fa-' . ($service->icon ?? 'rocket') }} text-2xl sm:text-4xl"></i>
                        </div>
                        <div>
                            <h1
                                class="text-3xl sm:text-5xl md:text-7xl lg:text-8xl font-black text-white tracking-tighter leading-[0.9] uppercase">
                                {{ $service->title }}</h1>
                        </div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="200" class="space-y-8 sm:space-y-12">
                        <div
                            class="prose prose-invert prose-base sm:prose-lg max-w-none text-gray-400 leading-relaxed font-medium">
                            {!! $service->description !!}
                        </div>

                        <div
                            class="p-7 sm:p-8 md:p-12 rounded-[2rem] sm:rounded-[2.5rem] bg-[#0A0A0F] border border-white/[0.03] relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600/5 rounded-full blur-3xl"></div>

                            <h3 class="text-lg sm:text-xl font-black text-white mb-6 sm:mb-8 uppercase tracking-tight">
                                Yang Kamu Dapatkan</h3>
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                                @foreach (['Konsultasi & Strategi Awal', 'Desain Antarmuka Premium', 'Pengembangan Performa Tinggi', 'Quality Assurance Menyeluruh', 'Keamanan & Proteksi Data', 'Dukungan & Pemeliharaan'] as $feature)
                                    <li class="flex items-center gap-4 group">
                                        <div
                                            class="w-6 h-6 rounded-full bg-indigo-500/10 flex items-center justify-center text-indigo-500 group-hover:bg-indigo-500 group-hover:text-white transition-all flex-shrink-0">
                                            <i class="fas fa-check text-[10px]"></i>
                                        </div>
                                        <span
                                            class="text-sm font-bold text-slate-500 group-hover:text-slate-300 transition-colors">{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Secondary content -->
                <div class="lg:w-1/3">
                    <div class="lg:sticky lg:top-28 space-y-6 sm:space-y-10">
                        <!-- CTA Card -->
                        <div data-aos="fade-left" data-aos-delay="400"
                            class="relative p-8 sm:p-10 rounded-[2rem] sm:rounded-[2.5rem] bg-gradient-to-br from-blue-600 to-indigo-700 overflow-hidden shadow-2xl group">
                            <div
                                class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="relative z-10">
                                <h3
                                    class="text-xl sm:text-2xl font-black text-white mb-3 sm:mb-4 uppercase tracking-tight">
                                    Tertarik?
                                </h3>
                                <p
                                    class="text-blue-100 font-medium mb-7 sm:mb-10 opacity-80 leading-relaxed text-sm sm:text-base">
                                    Siap mewujudkan visi Anda? Spesialis kami siap membantu bisnis kamu berkembang.
                                </p>
                                <a href="{{ \App\Models\Setting::whatsappUrl('Halo, saya tertarik dengan layanan ' . $service->title) }}"
                                    class="block w-full py-4 sm:py-5 bg-white text-black rounded-2xl font-black text-xs uppercase tracking-[0.2em] text-center transform transition-all hover:scale-[1.02] active:scale-95 shadow-xl shadow-black/10">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>

                        <!-- Sidebar Navigation -->
                        <div
                            class="p-7 sm:p-10 rounded-[2rem] sm:rounded-[2.5rem] bg-[#0A0A0F] border border-white/[0.03]">
                            <h4 class="text-[10px] font-black text-gray-600 uppercase tracking-[0.3em] mb-6 sm:mb-10">
                                Layanan Lainnya</h4>
                            <div class="space-y-5 sm:space-y-6">
                                @foreach (\App\Models\Service::active()->where('id', '!=', $service->id)->take(3)->get() as $other)
                                    <a href="{{ route('services.show', $other->slug) }}"
                                        class="group flex items-center gap-4 sm:gap-5">
                                        <div
                                            class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center text-slate-500 group-hover:bg-indigo-600 group-hover:text-white group-hover:border-indigo-400 transition-all duration-500 flex-shrink-0">
                                            <i
                                                class="{{ Str::contains($other->icon, 'fa-') ? $other->icon : 'fas fa-' . ($other->icon ?? 'rocket') }} text-base sm:text-lg"></i>
                                        </div>
                                        <div>
                                            <p
                                                class="text-white font-bold group-hover:text-blue-400 transition-colors uppercase tracking-tight leading-none text-sm sm:text-base">
                                                {{ $other->title }}</p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
