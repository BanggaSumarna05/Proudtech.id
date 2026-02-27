<x-frontend-layout>
    <section class="pt-8 md:pt-14 pb-20 md:pb-40 relative overflow-hidden">
        <!-- Background Decor -->
        <div
            class="absolute top-0 right-0 w-[60%] h-[60%] bg-blue-600/[0.03] rounded-full blur-[150px] -translate-y-1/2 translate-x-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[50%] h-[50%] bg-indigo-600/[0.03] rounded-full blur-[150px] translate-y-1/2 -translate-x-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 lg:gap-32 items-center">
                <!-- Narrative -->
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 mb-8">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-400">Arsitek
                            Digital</span>
                    </div>
                    <h1 data-aos="fade-up"
                        class="text-4xl sm:text-7xl md:text-8xl lg:text-9xl font-black text-white mb-10 tracking-tighter leading-[0.9] uppercase">
                        {!! \App\Models\Setting::get('contact_hero_title', 'Mulai <span class="text-gradient">Koneksi.</span>') !!}
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200"
                        class="text-lg md:text-2xl text-slate-400 font-medium leading-relaxed mb-16">
                        {{ \App\Models\Setting::get('contact_hero_subtitle', 'Baik Anda sedang memperbesar kerajaan bisnis atau meluncurkan revolusi, spesialis kami siap membangun lintasan digital Anda.') }}
                    </p>

                    <div class="space-y-10">
                        <div data-aos="fade-right" data-aos-delay="400" class="flex items-center gap-8 group">
                            <div
                                class="w-16 h-16 rounded-2xl glass border border-white/10 flex items-center justify-center text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-gray-600 text-[10px] font-black uppercase tracking-[0.3em] mb-2">
                                    Surat Elektronik</h4>
                                <p class="text-white font-black text-xl uppercase tracking-tight">
                                    {{ \App\Models\Setting::get('company_email', 'hello@proudtech.id') }}
                                </p>
                            </div>
                        </div>
                        <div data-aos="fade-right" data-aos-delay="600" class="flex items-center gap-8 group">
                            <div
                                class="w-16 h-16 rounded-2xl glass border border-white/10 flex items-center justify-center text-green-500 group-hover:bg-green-600 group-hover:text-white transition-all duration-500">
                                <i class="fab fa-whatsapp text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-gray-600 text-[10px] font-black uppercase tracking-[0.3em] mb-2">
                                    Terminal Langsung</h4>
                                <p class="text-white font-black text-xl uppercase tracking-tight">
                                    {{ \App\Models\Setting::get('whatsapp_number', '+62 812 3456 7890') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interface Card -->
                <div data-aos="zoom-in" data-aos-delay="800"
                    class="relative p-12 lg:p-16 rounded-[3rem] glass border border-white/10 shadow-2xl overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-blue-600/10 rounded-full blur-3xl group-hover:bg-blue-600/20 transition-colors">
                    </div>

                    <h3 class="text-3xl font-black text-white mb-6 uppercase tracking-tight">
                        {{ \App\Models\Setting::get('contact_interface_title', 'Akses Prioritas') }}</h3>
                    <p class="text-gray-500 font-medium mb-12 leading-relaxed">
                        {{ \App\Models\Setting::get('contact_interface_subtitle', 'Lewati saluran tradisional. Terhubung langsung dengan arsitek utama kami untuk konsultasi strategis yang cepat.') }}
                    </p>

                    <div class="space-y-6">
                        <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya ingin mendiskusikan proyek baru.') }}"
                            class="flex items-center justify-center w-full py-6 bg-white text-black rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:scale-105 active:scale-95 transition-all shadow-xl">
                            Mulai Protokol <i class="fab fa-whatsapp ml-3 text-lg text-green-500"></i>
                        </a>
                        <p class="text-center text-[10px] font-black text-gray-700 uppercase tracking-widest">
                            {{ \App\Models\Setting::get('contact_reply_latency', 'Rata-rata latensi balasan: < 120 Menit') }}
                        </p>
                    </div>

                    <div class="mt-16 pt-12 border-t border-white/[0.05] text-center">
                        <h4 class="text-[9px] font-black text-gray-600 mb-8 uppercase tracking-[0.4em]">Ikuti Evolusi
                        </h4>
                        <div class="flex justify-center gap-10">
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
