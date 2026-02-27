<x-frontend-layout>
    <section class="pt-8 md:pt-14 pb-16 md:pb-40 relative overflow-hidden">
        <!-- Background Decor -->
        <div
            class="absolute top-0 right-0 w-[60%] h-[60%] bg-blue-600/[0.03] rounded-full blur-[150px] -translate-y-1/2 translate-x-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[50%] h-[50%] bg-indigo-600/[0.03] rounded-full blur-[150px] translate-y-1/2 -translate-x-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 sm:gap-16 lg:gap-32 items-center">
                <!-- Narrative -->
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 mb-6 sm:mb-8">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-400">Hubungi Kami</span>
                    </div>
                    <h1 data-aos="fade-up"
                        class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-black text-white mb-6 sm:mb-10 tracking-tighter leading-[0.9] uppercase">
                        {!! \App\Models\Setting::get('contact_hero_title', 'Mulai <span class="text-gradient">Koneksi.</span>') !!}
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200"
                        class="text-base sm:text-lg md:text-xl text-slate-400 font-medium leading-relaxed mb-10 sm:mb-16">
                        {{ \App\Models\Setting::get('contact_hero_subtitle', 'Baik Anda sedang memperbesar kerajaan bisnis atau meluncurkan revolusi, spesialis kami siap membangun lintasan digital Anda.') }}
                    </p>

                    <div class="space-y-6 sm:space-y-10">
                        <div data-aos="fade-right" data-aos-delay="400" class="flex items-center gap-6 sm:gap-8 group">
                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl glass border border-white/10 flex items-center justify-center text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 flex-shrink-0">
                                <i class="fas fa-envelope text-lg sm:text-xl"></i>
                            </div>
                            <div>
                                <h4
                                    class="text-gray-600 text-[10px] font-black uppercase tracking-[0.3em] mb-1 sm:mb-2">
                                    Email</h4>
                                <p
                                    class="text-white font-black text-base sm:text-xl uppercase tracking-tight break-all">
                                    {{ \App\Models\Setting::get('company_email', 'hello@proudtech.id') }}
                                </p>
                            </div>
                        </div>
                        <div data-aos="fade-right" data-aos-delay="600" class="flex items-center gap-6 sm:gap-8 group">
                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl glass border border-white/10 flex items-center justify-center text-green-500 group-hover:bg-green-600 group-hover:text-white transition-all duration-500 flex-shrink-0">
                                <i class="fab fa-whatsapp text-xl sm:text-2xl"></i>
                            </div>
                            <div>
                                <h4
                                    class="text-gray-600 text-[10px] font-black uppercase tracking-[0.3em] mb-1 sm:mb-2">
                                    WhatsApp</h4>
                                <p class="text-white font-black text-base sm:text-xl uppercase tracking-tight">
                                    {{ \App\Models\Setting::get('whatsapp_number', '+62 812 3456 7890') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interface Card -->
                <div data-aos="zoom-in" data-aos-delay="800"
                    class="relative p-8 sm:p-12 lg:p-16 rounded-[2.5rem] sm:rounded-[3rem] glass border border-white/10 shadow-2xl overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-blue-600/10 rounded-full blur-3xl group-hover:bg-blue-600/20 transition-colors">
                    </div>

                    <h3 class="text-2xl sm:text-3xl font-black text-white mb-4 sm:mb-6 uppercase tracking-tight">
                        {{ \App\Models\Setting::get('contact_interface_title', 'Akses Prioritas') }}</h3>
                    <p class="text-gray-500 font-medium mb-8 sm:mb-12 leading-relaxed text-sm sm:text-base">
                        {{ \App\Models\Setting::get('contact_interface_subtitle', 'Lewati saluran tradisional. Terhubung langsung dengan arsitek utama kami untuk konsultasi strategis yang cepat.') }}
                    </p>

                    <div class="space-y-4 sm:space-y-6">
                        <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya ingin mendiskusikan proyek baru.') }}"
                            class="flex items-center justify-center w-full py-5 sm:py-6 bg-white text-black rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:scale-105 active:scale-95 transition-all shadow-xl">
                            Mulai WhatsApp <i class="fab fa-whatsapp ml-3 text-lg text-green-500"></i>
                        </a>
                        <p class="text-center text-[10px] font-black text-gray-700 uppercase tracking-widest">
                            {{ \App\Models\Setting::get('contact_reply_latency', 'Rata-rata balasan: < 120 Menit') }}
                        </p>
                    </div>

                    <div class="mt-10 sm:mt-16 pt-8 sm:pt-12 border-t border-white/[0.05] text-center">
                        <h4 class="text-[9px] font-black text-gray-600 mb-6 sm:mb-8 uppercase tracking-[0.4em]">Ikuti
                            Kami
                        </h4>
                        <div class="flex justify-center gap-8 sm:gap-10">
                            @foreach ([['icon' => 'fab fa-instagram', 'key' => 'instagram'], ['icon' => 'fab fa-linkedin-in', 'key' => 'linkedin'], ['icon' => 'fab fa-github', 'key' => 'github']] as $social)
                                <a href="{{ \App\Models\Setting::get($social['key'], '#') }}"
                                    class="text-gray-500 hover:text-blue-500 text-xl transition-all hover:scale-125">
                                    <i class="{{ $social['icon'] }}"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
