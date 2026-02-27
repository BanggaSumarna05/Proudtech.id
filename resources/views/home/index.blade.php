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

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10 py-24 sm:py-32 relative z-10 w-full">
            <div class="flex flex-col items-center text-center">
                <div data-aos="fade-down"
                    class="inline-flex items-center gap-2 sm:gap-3 px-4 sm:px-5 py-2 sm:py-2.5 rounded-full glass border border-white/10 mb-8 sm:mb-10 shadow-2xl shadow-blue-500/10">
                    <div class="flex -space-x-2">
                        @for ($i = 0; $i < 3; $i++)
                            <div
                                class="w-5 h-5 sm:w-6 sm:h-6 rounded-full border-2 border-slate-900 bg-slate-800 flex items-center justify-center overflow-hidden">
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
                        <span
                            class="text-[9px] sm:text-[10px] font-black uppercase tracking-[0.15em] sm:tracking-[0.2em] text-slate-300">Dipercaya
                            50+
                            Bisnis di Indonesia</span>
                    </div>
                </div>

                <h1 data-aos="fade-up" data-aos-delay="200"
                    class="text-4xl sm:text-6xl md:text-8xl lg:text-9xl font-black text-white mb-8 sm:mb-10 tracking-tighter leading-[0.9] uppercase max-w-5xl">
                    {!! \App\Models\Setting::get(
                        'home_hero_title',
                        'Website yang Bikin <br> <span class="text-gradient">Bisnis Kamu</span> <br> <span class="text-white/40">Dipercaya & Ditelepon.</span>',
                    ) !!}
                </h1>

                <p data-aos="fade-up" data-aos-delay="400"
                    class="max-w-2xl sm:max-w-3xl text-slate-400 text-sm sm:text-base md:text-xl lg:text-2xl font-medium leading-relaxed mb-10 sm:mb-16 px-2">
                    {!! \App\Models\Setting::get(
                        'home_hero_subtitle',
                        'Banyak bisnis bagus tapi kalah di depan layar — calon pelanggan cari, tapi nggak percaya. Kami bantu kamu tampil <span class="text-white">lebih profesional</span>, <span class="text-white">lebih dipercaya</span>, dan <span class="text-white">lebih mudah dihubungi</span>.',
                    ) !!}
                </p>

                <div data-aos="fade-up" data-aos-delay="600"
                    class="flex flex-col sm:flex-row gap-3 sm:gap-6 w-full sm:w-auto">
                    <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya tertarik dengan Audit Website GRATIS.') }}"
                        class="px-8 py-4 sm:px-12 sm:py-7 bg-white text-black rounded-2xl font-black text-[10px] sm:text-xs uppercase tracking-[0.2em] transform transition-all hover:scale-105 active:scale-95 shadow-2xl shadow-white/10 hover:shadow-white/20 text-center">
                        {{ \App\Models\Setting::get('home_hero_cta_audit', '🔍 Cek Website Kamu — Gratis') }}
                    </a>
                    <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya ingin diskusi proyek selama 30 menit.') }}"
                        target="_blank"
                        class="px-8 py-4 sm:px-12 sm:py-7 glass border border-white/10 text-white rounded-2xl font-black text-[10px] sm:text-xs uppercase tracking-[0.2em] transform transition-all hover:bg-white/[0.08] hover:scale-105 active:scale-95 shadow-xl text-center">
                        {{ \App\Models\Setting::get('home_hero_cta_discuss', '💬 Ngobrol Dulu, Gratis') }}
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div
            class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 opacity-30 hidden sm:flex">
            <span class="text-[10px] uppercase font-black tracking-[0.5em] text-white">Gulir</span>
            <div class="w-px h-12 bg-gradient-to-b from-white to-transparent"></div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="py-16 sm:py-20 md:py-40 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10">
            <div class="text-center mb-12 sm:mb-16 md:mb-24">
                <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-[10px] mb-4 sm:mb-6">Kenapa Kami?
                </h2>
                <h3
                    class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-black text-white tracking-tighter uppercase leading-none">
                    Kami Ngerti <span class="text-gradient">Bisnis Kamu.</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 sm:gap-8">
                @foreach ($benefits as $index => $benefit)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                        class="p-6 sm:p-8 md:p-10 rounded-[2rem] sm:rounded-[2.5rem] glass border border-white/5 hover:border-blue-500/30 transition-all duration-500 group">
                        <div
                            class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-500 mb-6 sm:mb-8 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                            <i class="{{ $benefit->icon }} text-lg sm:text-xl"></i>
                        </div>
                        <h4 class="text-lg sm:text-xl font-black text-white mb-3 sm:mb-4 uppercase tracking-tight">
                            {{ $benefit->title }}
                        </h4>
                        <p class="text-slate-500 leading-relaxed text-sm group-hover:text-slate-400 transition-colors">
                            {!! $benefit->description !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 sm:py-16 md:py-24 border-y border-white/[0.05] bg-slate-950/50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 md:gap-12 lg:gap-8">
                @foreach ($stats as $index => $stat)
                    <div data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}" class="group text-center lg:text-left">
                        <p
                            class="text-3xl sm:text-4xl md:text-5xl font-black text-white mb-1 sm:mb-2 group-hover:text-blue-500 transition-colors duration-500">
                            {{ $stat->number }}</p>
                        <p class="text-[9px] sm:text-[10px] font-black uppercase tracking-[0.3em] text-slate-600">
                            {{ $stat->label }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 sm:py-20 md:py-40 relative">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10">
            <!-- Section Header -->
            <div
                class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-6 sm:gap-10 mb-12 sm:mb-16 md:mb-24">
                <div class="max-w-2xl">
                    <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-[10px] md:text-xs mb-4 sm:mb-6">
                        Apa yang Kami Kerjakan</h2>
                    <h3
                        class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-black text-white tracking-tighter leading-none uppercase">
                        Solusi yang <span class="text-gradient">Langsung Terasa.</span>
                    </h3>
                </div>
                <a href="{{ route('services.index') }}"
                    class="group inline-flex items-center gap-3 py-3 px-6 sm:py-4 sm:px-8 glass border border-white/5 rounded-2xl transition-all hover:bg-white/[0.03] flex-shrink-0">
                    <span class="text-xs font-black uppercase tracking-[0.2em] text-white">Lihat Semua Layanan</span>
                    <i class="fas fa-chevron-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 lg:gap-8">
                @foreach ($services as $index => $service)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                        class="group relative p-7 sm:p-8 lg:p-10 rounded-[2rem] sm:rounded-[2.5rem] glass border border-white/5 hover:border-indigo-500/30 transition-all duration-700 overflow-hidden flex flex-col">
                        <!-- Glow BG -->
                        <div
                            class="absolute -top-10 -right-10 w-40 h-40 bg-indigo-600/10 rounded-full blur-[80px] group-hover:bg-indigo-600/20 transition-all duration-700">
                        </div>

                        <div class="relative z-10 flex flex-col flex-1">
                            <!-- Icon -->
                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-white/[0.03] border border-white/10 flex items-center justify-center mb-7 sm:mb-8 group-hover:bg-indigo-600 group-hover:border-indigo-400 group-hover:glow-blue transition-all duration-500 flex-shrink-0">
                                <i
                                    class="{{ Str::contains($service->icon, 'fa-') ? $service->icon : 'fas fa-' . ($service->icon ?? 'rocket') }} text-xl sm:text-2xl text-indigo-500 group-hover:text-white transition-colors"></i>
                            </div>

                            <!-- Title -->
                            <h4
                                class="text-lg sm:text-xl lg:text-2xl font-black text-white mb-3 sm:mb-4 uppercase tracking-tight leading-tight">
                                {{ $service->title }}
                            </h4>

                            <!-- Description -->
                            <p
                                class="text-slate-500 leading-relaxed text-sm mb-7 sm:mb-8 group-hover:text-slate-300 transition-colors flex-1">
                                {{ Str::limit(strip_tags($service->description), 120) }}
                            </p>

                            <!-- CTA -->
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

    <!-- Case Studies Section -->
    <section class="py-16 sm:py-24 md:py-40 bg-[#020617]/50 border-y border-white/5 relative">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10">
            <div
                class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-6 sm:gap-10 mb-12 sm:mb-16 md:mb-24">
                <div class="max-w-2xl">
                    <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-[10px] mb-4 sm:mb-6">Proyek
                        Nyata</h2>
                    <h3
                        class="text-2xl sm:text-4xl md:text-6xl lg:text-7xl font-black text-white tracking-tighter uppercase leading-none">
                        Hasil yang Bisa <span class="text-gradient">Kamu Lihat.</span>
                    </h3>
                </div>
                <a href="{{ route('portfolio.index') }}"
                    class="group inline-flex items-center gap-4 py-3 px-6 sm:py-4 sm:px-8 glass border border-white/5 rounded-2xl transition-all hover:bg-white/[0.05] flex-shrink-0">
                    <span class="text-xs font-black uppercase tracking-[0.2em] text-white">Lihat Semua Proyek</span>
                    <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-10">
                @foreach ($projects as $index => $project)
                    <div data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}"
                        class="group relative rounded-[2rem] sm:rounded-[3rem] overflow-hidden bg-slate-900 border border-white/5 transition-all duration-700 hover:shadow-2xl hover:shadow-blue-500/10">
                        <div class="aspect-[16/10] overflow-hidden relative">
                            @if ($project->thumbnail)
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($project->thumbnail) }}"
                                    alt="{{ $project->title }}"
                                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-[1.5s]">
                            @endif
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent">
                            </div>

                            <div class="absolute top-5 left-5 sm:top-8 sm:left-8">
                                <span
                                    class="px-3 py-1 sm:px-4 sm:py-1.5 rounded-full glass border border-white/10 text-[9px] font-black uppercase tracking-widest text-blue-400">
                                    {{ $project->type == 'client' ? 'Diterapkan' : 'Riset & Pengembangan' }}
                                </span>
                            </div>
                        </div>

                        <div class="p-6 sm:p-8 md:p-12 relative">
                            <h4
                                class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-black text-white mb-4 sm:mb-6 uppercase tracking-tight group-hover:text-blue-400 transition-colors">
                                {{ $project->title }}</h4>

                            <div class="grid grid-cols-3 gap-3 sm:gap-6 mb-7 sm:mb-10">
                                <div>
                                    <p class="text-[8px] font-black text-slate-600 uppercase tracking-widest mb-1">
                                        Tantangan</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase truncate">Visibilitas &
                                        Kepercayaan
                                    </p>
                                </div>
                                <div>
                                    <p class="text-[8px] font-black text-slate-600 uppercase tracking-widest mb-1">
                                        Pendekatan</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase truncate">Website + Sistem
                                    </p>
                                </div>
                                <div>
                                    <p class="text-[8px] font-black text-slate-600 uppercase tracking-widest mb-1">
                                        Dampak</p>
                                    <p class="text-[10px] text-blue-400 font-black uppercase truncate">Klien Bertambah
                                    </p>
                                </div>
                            </div>

                            <a href="{{ route('portfolio.show', $project->slug) }}"
                                class="inline-flex items-center gap-3 sm:gap-4 py-3 px-6 sm:py-4 sm:px-8 rounded-2xl glass border border-white/5 text-[10px] font-black uppercase tracking-[0.2em] text-white hover:bg-blue-600 hover:border-blue-400 transition-all">
                                Lihat Detail Proyek <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 sm:py-24 md:py-40 relative border-b border-white/5">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10">
            <div class="text-center mb-12 sm:mb-16 md:mb-24">
                <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-[10px] mb-4 sm:mb-6">Kata Klien
                    Kami</h2>
                <h3
                    class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-black text-white tracking-tighter uppercase leading-none">
                    Mereka Sudah <span class="italic font-serif normal-case text-slate-500 tracking-normal">Merasakan
                        Manfaatnya.</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 sm:gap-8">
                @foreach ($testimonials as $index => $testimonial)
                    <div data-aos="flip-left" data-aos-delay="{{ $index * 150 }}"
                        class="p-7 sm:p-10 md:p-12 rounded-[2rem] sm:rounded-[2.5rem] glass border border-white/[0.05] flex flex-col items-center text-center group hover:border-blue-500/30 transition-all duration-500 shadow-2xl shadow-black/40">
                        <div
                            class="flex gap-1 text-yellow-500 mb-6 sm:mb-8 transform group-hover:scale-110 transition-transform">
                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                <i class="fas fa-star text-[10px]"></i>
                            @endfor
                        </div>
                        <blockquote
                            class="text-base sm:text-lg md:text-xl text-slate-300 font-medium leading-relaxed mb-8 sm:mb-12 italic">
                            "{!! $testimonial->message !!}"
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
    <section class="py-16 sm:py-24 md:py-48 relative overflow-hidden">
        <div class="absolute inset-0 bg-blue-600/10 pointer-events-none"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] sm:w-[600px] md:w-[800px] h-[400px] sm:h-[600px] md:h-[800px] bg-blue-600/10 rounded-full blur-[160px] animate-pulse">
        </div>

        <div class="max-w-5xl mx-auto px-5 sm:px-6 relative z-10 text-center">
            <h2
                class="text-3xl sm:text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 sm:mb-10 tracking-tighter leading-[0.9] uppercase">
                {!! \App\Models\Setting::get(
                    'home_cta_title',
                    'Website Kamu <br> <span class="text-gradient">Sudah Siap</span> <br> <span class="text-white/20">Terima Klien Baru?</span>',
                ) !!}
            </h2>
            <p class="text-base sm:text-lg md:text-2xl text-slate-400 font-medium mb-10 sm:mb-16 max-w-2xl mx-auto">
                {!! \App\Models\Setting::get(
                    'home_cta_subtitle',
                    'Mulai dari obrolan santai — kami bantu kamu tahu mana yang perlu diperbaiki, tanpa tekanan, tanpa janji kosong.',
                ) !!}
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
                <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya ingin mulai konsultasi sekarang.') }}"
                    target="_blank"
                    class="px-10 py-5 sm:px-16 sm:py-8 bg-white text-black rounded-2xl font-black text-xs uppercase tracking-[0.3em] shadow-2xl shadow-white/10 hover:scale-105 active:scale-95 transition-all text-center">
                    Konsultasi Gratis Sekarang →
                </a>
            </div>
        </div>
    </section>
</x-frontend-layout>
