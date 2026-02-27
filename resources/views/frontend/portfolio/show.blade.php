<x-frontend-layout>
    <section class="pt-4 md:pt-8 pb-16 md:pb-40 relative overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-[50%] h-96 bg-blue-600/[0.02] blur-[150px]"></div>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10 pt-8 sm:pt-10 md:pt-14 pb-16 md:pb-32 relative z-10">
            <a href="{{ route('portfolio.index') }}"
                class="inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-[0.3em] text-gray-500 hover:text-white mb-10 sm:mb-14 md:mb-16 transition-all group">
                <i class="fas fa-arrow-left group-hover:-translate-x-2 transition-transform"></i> Semua Proyek
            </a>

            <header class="mb-12 sm:mb-16 md:mb-24">
                <!-- Tags -->
                <div class="flex flex-wrap gap-2 sm:gap-3 mb-6 sm:mb-10">
                    @if ($project->type)
                        <span
                            class="px-4 py-1.5 rounded-full glass border border-white/10 text-[9px] font-black uppercase tracking-widest text-blue-400">
                            {{ $project->type == 'client' ? 'Client Project' : 'R&D' }}
                        </span>
                    @endif
                    @if ($project->tech_stack)
                        @foreach ((array) $project->tech_stack as $tech)
                            <span
                                class="px-4 py-1.5 rounded-full glass border border-white/5 text-[9px] font-black uppercase tracking-widest text-slate-500">
                                {{ $tech }}
                            </span>
                        @endforeach
                    @endif
                </div>

                <h1 data-aos="fade-up"
                    class="text-3xl sm:text-5xl md:text-7xl lg:text-8xl font-black text-white mb-4 sm:mb-8 tracking-tighter uppercase leading-[0.9]">
                    {{ $project->title }}
                </h1>

                @if ($project->description)
                    <p class="text-base sm:text-xl text-slate-400 max-w-3xl font-medium leading-relaxed">
                        {{ Str::limit(strip_tags($project->description), 200) }}
                    </p>
                @endif
            </header>

            <!-- Main Feature Image -->
            <div
                class="mb-16 sm:mb-20 md:mb-32 rounded-[2rem] sm:rounded-[3rem] overflow-hidden bg-[#0A0A0F] border border-white/5 shadow-2xl group">
                @if ($project->thumbnail)
                    <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($project->thumbnail) }}"
                        alt="{{ $project->title }}"
                        class="w-full h-auto object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-1000">
                @else
                    <div class="aspect-[16/9] bg-slate-900 flex items-center justify-center">
                        <i class="fas fa-image text-slate-700 text-5xl"></i>
                    </div>
                @endif
            </div>

            @if ($project->images->count() > 0)
                <div class="mb-12 sm:mb-16 md:mb-24">
                    <h2 class="text-xs font-black text-slate-600 uppercase tracking-[0.4em] mb-8 sm:mb-12 md:mb-16">
                        Galeri Proyek</h2>
                    <div class="space-y-8 sm:space-y-12 md:space-y-16">
                        @foreach ($project->images as $image)
                            <div
                                class="rounded-[2rem] sm:rounded-[2.5rem] overflow-hidden border border-white/5 bg-[#050505] shadow-2xl">
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($image->image_path) }}"
                                    alt="Project Artifact"
                                    class="w-full h-auto object-cover opacity-90 hover:opacity-100 transition-opacity duration-700">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Navigation -->
            <div
                class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 pt-8 sm:pt-12 border-t border-white/5">
                <a href="{{ route('portfolio.index') }}"
                    class="group inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 hover:text-white transition-all">
                    <i class="fas fa-arrow-left group-hover:-translate-x-2 transition-transform"></i> Kembali ke Semua
                    Proyek
                </a>
                <a href="{{ \App\Models\Setting::whatsappUrl('Halo Proud Tech! Saya tertarik membuat proyek serupa dengan ' . $project->title) }}"
                    class="inline-flex items-center gap-4 py-4 px-7 sm:py-4 sm:px-8 rounded-2xl glass border border-white/10 text-[10px] font-black uppercase tracking-[0.2em] text-white hover:bg-blue-600 hover:border-blue-400 transition-all">
                    Buat Proyek Serupa <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
</x-frontend-layout>
