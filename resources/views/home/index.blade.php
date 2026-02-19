<x-frontend-layout>
    <!-- Hero Section -->
    <section class="relative min-h-[100vh] flex items-center overflow-hidden">
        <!-- Background Accents -->
        <div
            class="absolute top-0 right-0 w-[60%] h-[60%] bg-blue-600/[0.03] rounded-full blur-[150px] -translate-y-1/2 translate-x-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[50%] h-[50%] bg-indigo-600/[0.03] rounded-full blur-[150px] translate-y-1/2 -translate-x-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-32 relative z-10">
            <div class="flex flex-col items-center text-center">
                <div
                    class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full glass border border-white/10 mb-10 animate-fade-in shadow-2xl shadow-blue-500/10">
                    <div class="flex -space-x-2">
                        @for ($i = 0; $i < 3; $i++)
                            <div
                                class="w-6 h-6 rounded-full border-2 border-slate-900 bg-slate-800 flex items-center justify-center overflow-hidden">
                                <img src="https://i.pravatar.cc/100?u={{ $i }}"
                                    class="w-full h-full object-cover grayscale">
                            </div>
                        @endfor
                    </div>
                    <div class="h-4 w-px bg-white/10"></div>
                    <div class="flex items-center gap-2">
                        <div class="flex text-yellow-500 text-[10px]">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-300">Dipercaya 50+
                            Bisnis Terverifikasi</span>
                    </div>
                </div>

                <h1
                    class="text-4xl sm:text-7xl md:text-8xl lg:text-9xl font-black text-white mb-10 tracking-tighter leading-[0.9] uppercase max-w-5xl">
                    Membangun <br>
                    <span class="text-gradient">Brand Digital</span> <br>
                    <span class="text-white/40">Yang Menghasilkan.</span>
                </h1>

                <p class="max-w-3xl text-slate-400 text-base md:text-2xl font-medium leading-relaxed mb-16 animate-fade-in"
                    style="animation-delay: 0.2s;">
                    Kami membantu bisnis berkembang melalui <span class="text-white">website premium</span>,
                    <span class="text-white">sistem digital</span>, dan <span class="text-white">branding</span> siap
                    scale
                    yang dirancang untuk dominasi pasar.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 animate-fade-in" style="animation-delay: 0.4s;">
                    <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya tertarik dengan Audit Website GRATIS.') }}"
                        class="px-10 py-5 sm:px-12 sm:py-7 bg-white text-black rounded-2xl font-black text-[10px] sm:text-xs uppercase tracking-[0.2em] transform transition-all hover:scale-105 active:scale-95 shadow-2xl shadow-white/10 hover:shadow-white/20">
                        🔥 Audit Website GRATIS
                    </a>
                    <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya ingin diskusi proyek selama 30 menit.') }}"
                        target="_blank"
                        class="px-10 py-5 sm:px-12 sm:py-7 glass border border-white/10 text-white rounded-2xl font-black text-[10px] sm:text-xs uppercase tracking-[0.2em] transform transition-all hover:bg-white/[0.08] hover:scale-105 active:scale-95 shadow-xl">
                        💬 Diskusi Proyek 30 Menit
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 opacity-30">
            <span class="text-[10px] uppercase font-black tracking-[0.5em] text-white">Gulir</span>
            <div class="w-px h-12 bg-gradient-to-b from-white to-transparent"></div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="py-20 md:py-40 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="text-center mb-24">
                <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-[10px] mb-6">Filosofi Kerja</h2>
                <h3 class="text-3xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none">
                    Kenapa <span class="text-gradient">Proud Tech?</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ([['icon' => 'fas fa-chart-line', 'title' => 'Fokus Hasil', 'desc' => 'Kami tidak hanya membangun fitur; kami membangun mesin pertumbuhan yang meningkatkan ROI Anda.'], ['icon' => 'fas fa-shield-alt', 'title' => 'Keamanan Sistem', 'desc' => 'Arsitektur kelas dunia yang memastikan data Anda aman dan performa sistem tetap stabil 24/7.'], ['icon' => 'fas fa-handshake', 'title' => 'Partner Strategis', 'desc' => 'Kami adalah ekstensi dari tim Anda, fokus pada inovasi jangka panjang untuk skalabilitas bisnis.']] as $item)
                    <div
                        class="p-8 md:p-10 rounded-[2.5rem] glass border border-white/5 hover:border-blue-500/30 transition-all duration-500 group">
                        <div
                            class="w-14 h-14 rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-500 mb-8 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                            <i class="{{ $item['icon'] }} text-xl"></i>
                        </div>
                        <h4 class="text-xl font-black text-white mb-4 uppercase tracking-tight">{{ $item['title'] }}
                        </h4>
                        <p class="text-slate-500 leading-relaxed text-sm group-hover:text-slate-400 transition-colors">
                            {{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 md:py-24 border-y border-white/[0.05] bg-slate-950/50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 lg:gap-8">
                @foreach ([['num' => '75+', 'label' => 'Implementasi Global'], ['num' => '99%', 'label' => 'Waktu Aktif Sistem'], ['num' => '12', 'label' => 'Spesialis Inti'], ['num' => '24/7', 'label' => 'Pengawasan Teknis']] as $stat)
                    <div class="group text-center lg:text-left">
                        <p
                            class="text-4xl md:text-5xl font-black text-white mb-2 group-hover:text-blue-500 transition-colors duration-500">
                            {{ $stat['num'] }}</p>
                        <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-600">{{ $stat['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 md:py-40 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex flex-col lg:flex-row justify-between items-end gap-10 mb-24">
                <div class="max-w-2xl">
                    <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-[10px] md:text-xs mb-6">
                        Solusi Berbasis Hasil</h2>
                    <h3 class="text-3xl md:text-6xl font-black text-white tracking-tighter leading-none uppercase">
                        Merekayasa <span class="text-gradient">Pertumbuhan.</span>
                    </h3>
                </div>
                <a href="{{ route('services.index') }}"
                    class="group flex items-center gap-4 py-4 px-8 glass border border-white/5 rounded-2xl transition-all hover:bg-white/[0.03]">
                    <span class="text-xs font-black uppercase tracking-[0.2em] text-white">Matriks Layanan</span>
                    <i class="fas fa-chevron-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div
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
                            <h4 class="text-2xl font-black text-white mb-4 uppercase tracking-tight">
                                @if (Str::contains(strtolower($service->title), 'web'))
                                    Website yang Menjual
                                @elseif(Str::contains(strtolower($service->title), ['brand', 'desain']))
                                    Brand yang Dipercaya
                                @else
                                    Sistem Digital Efisien
                                @endif
                            </h4>
                            <p
                                class="text-slate-500 leading-relaxed text-sm mb-10 group-hover:text-slate-300 transition-colors">
                                {{ Str::limit($service->description, 100) }}
                            </p>
                            <a href="{{ route('services.show', $service->slug) }}"
                                class="inline-flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.2em] text-indigo-400 hover:text-white transition-all">
                                Lihat Contoh Proyek <i class="fas fa-chevron-right text-[8px] ml-1"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="py-24 md:py-40 bg-[#020617]/50 border-y border-white/5 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row justify-between items-end gap-10 mb-24">
                <div class="max-w-2xl">
                    <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-[10px] mb-6">Arsip Keunggulan
                    </h2>
                    <h3 class="text-3xl md:text-7xl font-black text-white tracking-tighter uppercase leading-none">
                        Bukti <span class="text-gradient">Nyata.</span>
                    </h3>
                </div>
                <a href="{{ route('portfolio.index') }}"
                    class="group flex items-center gap-4 py-4 px-8 glass border border-white/5 rounded-2xl transition-all hover:bg-white/[0.05]">
                    <span class="text-xs font-black uppercase tracking-[0.2em] text-white">Eksplorasi Arsip</span>
                    <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                @foreach ($projects as $project)
                    <div
                        class="group relative rounded-[3rem] overflow-hidden bg-slate-900 border border-white/5 transition-all duration-700 hover:shadow-2xl hover:shadow-blue-500/10">
                        <div class="aspect-[16/10] overflow-hidden relative">
                            @if ($project->thumbnail)
                                <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}"
                                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-[1.5s]">
                            @endif
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent">
                            </div>

                            <div class="absolute top-8 left-8">
                                <span
                                    class="px-4 py-1.5 rounded-full glass border border-white/10 text-[9px] font-black uppercase tracking-widest text-blue-400">
                                    {{ $project->type == 'client' ? 'Diterapkan' : 'Riset & Pengembangan' }}
                                </span>
                            </div>
                        </div>

                        <div class="p-12 relative">
                            <h4
                                class="text-2xl md:text-4xl font-black text-white mb-6 uppercase tracking-tight group-hover:text-blue-400 transition-colors">
                                {{ $project->title }}</h4>

                            <div class="grid grid-cols-3 gap-6 mb-10">
                                <div>
                                    <p class="text-[8px] font-black text-slate-600 uppercase tracking-widest mb-1">
                                        Masalah</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase truncate">Inisiasi Digital
                                    </p>
                                </div>
                                <div>
                                    <p class="text-[8px] font-black text-slate-600 uppercase tracking-widest mb-1">
                                        Solusi</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase truncate">Rekayasa Kustom
                                    </p>
                                </div>
                                <div>
                                    <p class="text-[8px] font-black text-slate-600 uppercase tracking-widest mb-1">
                                        Hasil</p>
                                    <p class="text-[10px] text-blue-400 font-black uppercase truncate">High Impact</p>
                                </div>
                            </div>

                            <a href="{{ route('portfolio.show', $project->slug) }}"
                                class="inline-flex items-center gap-4 py-4 px-8 rounded-2xl glass border border-white/5 text-[10px] font-black uppercase tracking-[0.2em] text-white hover:bg-blue-600 hover:border-blue-400 transition-all">
                                Lihat Evolusi Proyek <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 md:py-40 relative border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="text-center mb-24">
                <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-[10px] mb-6">Testimoni Klien</h2>
                <h3 class="text-3xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none">
                    Kepercayaan <span class="italic font-serif normal-case text-slate-500 tracking-normal">Skala
                        Global.</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($testimonials as $testimonial)
                    <div
                        class="p-12 rounded-[2.5rem] glass border border-white/[0.05] flex flex-col items-center text-center group hover:border-blue-500/30 transition-all duration-500 shadow-2xl shadow-black/40">
                        <div
                            class="flex gap-1 text-yellow-500 mb-8 transform group-hover:scale-110 transition-transform">
                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                <i class="fas fa-star text-[10px]"></i>
                            @endfor
                        </div>
                        <blockquote class="text-lg md:text-xl text-slate-300 font-medium leading-relaxed mb-12 italic">
                            "{{ $testimonial->message }}"
                        </blockquote>
                        <div class="mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-800 border border-white/10 flex items-center justify-center mb-4 mx-auto overflow-hidden">
                                <img src="https://i.pravatar.cc/100?u={{ $testimonial->id }}"
                                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                            </div>
                            <p class="text-white font-black uppercase tracking-widest text-[10px] mb-1">
                                {{ $testimonial->name }}</p>
                            <p class="text-[9px] font-black uppercase tracking-[0.2em] text-slate-600">
                                {{ $testimonial->position }}
                                {{ $testimonial->company ? '— ' . $testimonial->company : '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final Call to Action -->
    <section class="py-24 md:py-48 relative overflow-hidden">
        <div class="absolute inset-0 bg-blue-600/10 pointer-events-none"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-blue-600/10 rounded-full blur-[160px] animate-pulse">
        </div>

        <div class="max-w-5xl mx-auto px-6 relative z-10 text-center">
            <h2 class="text-4xl md:text-8xl font-black text-white mb-10 tracking-tighter leading-[0.9] uppercase">
                Siap Membangun <br> <span class="text-gradient">Sistem Digital</span> <br> <span
                    class="text-white/20">Yang Serius?</span>
            </h2>
            <p class="text-lg md:text-2xl text-slate-400 font-medium mb-16 max-w-2xl mx-auto">
                Jangan biarkan kompetitor memimpin. Mulai rekayasa sistem Anda sekarang dengan bantuan ahli kami.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya ingin mulai konsultasi sekarang.') }}"
                    target="_blank"
                    class="px-16 py-8 bg-white text-black rounded-2xl font-black text-xs uppercase tracking-[0.3em] shadow-2xl shadow-white/10 hover:scale-105 active:scale-95 transition-all">
                    🔥 Mulai Konsultasi Sekarang
                </a>
            </div>
        </div>
    </section>
</x-frontend-layout>
