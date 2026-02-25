<x-frontend-layout>
    <!-- Hero About -->
    <section class="py-24 md:py-48 relative overflow-hidden">
        <!-- Background Decor -->
        <div
            class="absolute top-0 right-0 w-[60%] h-[60%] bg-blue-600/[0.03] rounded-full blur-[150px] -translate-y-1/2 translate-x-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 mb-8">
                <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-400">Arsitek Digital</span>
            </div>
            <h1 data-aos="fade-up"
                class="text-4xl sm:text-7xl md:text-8xl lg:text-9xl font-black text-white mb-10 tracking-tighter leading-[0.9] uppercase">
                {!! \App\Models\Setting::get('about_hero_title', 'Asal-Usul <span class="text-gradient">Kami.</span>') !!}
            </h1>
            <p data-aos="fade-up" data-aos-delay="200"
                class="text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto font-medium leading-relaxed">
                {!! \App\Models\Setting::get(
                    'about_hero_subtitle',
                    'Membangun ekosistem digital presisi tinggi untuk bisnis yang menuntut keunggulan kompetitif di setiap piksel.',
                ) !!}
            </p>
        </div>
    </section>

    <!-- Core Narrative -->
    <section class="py-24 md:py-40 bg-[#080808] border-y border-white/[0.03]">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div data-aos="fade-right" class="lg:w-1/2 relative">
                    <div class="absolute -inset-4 bg-blue-600/10 rounded-[3rem] blur-2xl"></div>
                    <div class="relative rounded-[3rem] overflow-hidden border border-white/10 group">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800"
                            alt="The Lab"
                            class="w-full h-full object-cover grayscale transition-all duration-[1.5s] group-hover:grayscale-0 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent">
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" class="lg:w-1/2 space-y-12">
                    <h5 class="text-blue-500 font-black uppercase tracking-[0.4em] text-xs">
                        {{ \App\Models\Setting::get('about_narrative_title', 'Misi Kami') }}</h5>
                    <h2 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase leading-[0.9]">
                        {!! \App\Models\Setting::get(
                            'about_narrative_subtitle',
                            'Digerakkan oleh <span class="text-blue-500">Logika.</span> <br> Dipandu oleh <span class="italic font-serif normal-case text-slate-500">Seni.</span>',
                        ) !!}
                    </h2>
                    <p class="text-gray-400 text-lg md:text-xl font-medium leading-relaxed">
                        {!! \App\Models\Setting::get(
                            'about_narrative_content',
                            'Didirikan atas prinsip bahwa pengalaman digital haruslah semulus keindahannya. Kami beroperasi di persimpangan rekayasa performa tinggi dan estetika brand elit.',
                        ) !!}
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="space-y-4 group">
                            <h4
                                class="text-[10px] font-black text-blue-500 uppercase tracking-[0.3em] group-hover:translate-x-2 transition-transform">
                                {{ \App\Models\Setting::get('about_narrative_goal_title', 'Tujuan Fundamental') }}</h4>
                            <p class="text-sm font-bold text-gray-300 leading-relaxed uppercase tracking-tight">
                                {!! \App\Models\Setting::get(
                                    'about_narrative_goal_desc',
                                    'Membangun infrastruktur digital premium yang mempercepat evolusi perusahaan Anda.',
                                ) !!}
                            </p>
                        </div>
                        <div class="space-y-4 group">
                            <h4
                                class="text-[10px] font-black text-blue-500 uppercase tracking-[0.3em] group-hover:translate-x-2 transition-transform">
                                {{ \App\Models\Setting::get('about_narrative_target_title', 'Target Strategis') }}</h4>
                            <p class="text-sm font-bold text-gray-300 leading-relaxed uppercase tracking-tight">
                                {!! \App\Models\Setting::get(
                                    'about_narrative_target_desc',
                                    'Menjadi tolak ukur global untuk pengembangan perangkat lunak estetis berperforma tinggi.',
                                ) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Standards -->
    <section class="py-20 md:py-40 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="text-center mb-24">
                <h2 class="text-blue-500 font-black uppercase tracking-[0.4em] text-xs mb-6">
                    {{ \App\Models\Setting::get('about_standards_title', 'Protokol Kami') }}</h2>
                <h3 class="text-3xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none">
                    {!! \App\Models\Setting::get(
                        'about_standards_subtitle',
                        'Standar <span class="text-gradient">Inti Kami.</span>',
                    ) !!}
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($standards as $index => $standard)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                        class="p-12 rounded-[2.5rem] glass border border-white/[0.05] hover:border-{{ $standard->color }}-500/30 transition-all duration-700 group">
                        <div
                            class="w-16 h-16 rounded-2xl bg-{{ $standard->color }}-600/10 border border-{{ $standard->color }}-500/20 flex items-center justify-center text-{{ $standard->color }}-500 mb-10 group-hover:scale-110 transition-transform">
                            <i class="{{ $standard->icon }} text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-4 uppercase tracking-tight">
                            {{ $standard->title }}</h3>
                        <p
                            class="text-gray-500 text-sm leading-relaxed font-medium group-hover:text-gray-400 transition-colors">
                            {!! $standard->description !!}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
