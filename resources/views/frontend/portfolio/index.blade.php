<x-frontend-layout>
    <section class="pt-8 md:pt-14 pb-20 md:pb-40 relative overflow-hidden">
        <!-- Background Decor -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_50%_0%,rgba(139,92,246,0.05),transparent_50%)]">
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10 relative z-10 text-center mb-12 sm:mb-16 md:mb-24">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 mb-6 sm:mb-8">
                <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-400">Portofolio Proyek</span>
            </div>
            <h1 data-aos="fade-up"
                class="text-4xl sm:text-6xl md:text-8xl lg:text-9xl font-black text-white mb-6 sm:mb-10 tracking-tighter leading-[0.9] uppercase">
                Proyek <span class="text-gradient">Kami.</span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="200"
                class="text-base sm:text-xl md:text-2xl text-slate-400 font-medium leading-relaxed max-w-2xl mx-auto px-2">
                Kumpulan proyek nyata yang sudah kami kerjakan bersama berbagai bisnis di Indonesia.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-10 relative z-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 lg:gap-8">
                @foreach ($projects as $index => $project)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                        class="group relative rounded-[2rem] sm:rounded-[2.5rem] overflow-hidden bg-slate-900 border border-white/5 transition-all duration-700 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-1">
                        <!-- Thumbnail -->
                        <div class="aspect-[16/10] overflow-hidden relative">
                            @if ($project->thumbnail)
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($project->thumbnail) }}"
                                    alt="{{ $project->title }}"
                                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-[1.5s]">
                            @else
                                <div class="absolute inset-0 bg-slate-800 flex items-center justify-center">
                                    <i class="fas fa-image text-slate-600 text-4xl"></i>
                                </div>
                            @endif
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent">
                            </div>
                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-3 py-1 rounded-full glass border border-white/10 text-[9px] font-black uppercase tracking-widest text-blue-400">
                                    {{ $project->type == 'client' ? 'Client' : 'R&D' }}
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 sm:p-8">
                            <h2
                                class="text-lg sm:text-xl font-black text-white mb-2 sm:mb-3 uppercase tracking-tight group-hover:text-blue-400 transition-colors line-clamp-2">
                                {{ $project->title }}</h2>
                            @if ($project->tech_stack)
                                <div class="flex flex-wrap gap-1.5 mb-4 sm:mb-6">
                                    @foreach (array_slice((array) $project->tech_stack, 0, 3) as $tech)
                                        <span
                                            class="px-2 py-1 rounded-lg text-[9px] font-black uppercase tracking-widest text-slate-500 glass border border-white/5">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                            <a href="{{ route('portfolio.show', $project->slug) }}"
                                class="inline-flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.2em] text-blue-400 hover:text-white transition-all">
                                Lihat Proyek <i class="fas fa-arrow-right text-[8px]"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
