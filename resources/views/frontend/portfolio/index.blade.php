<x-frontend-layout>
    <section class="py-32 md:py-48 relative overflow-hidden">
        <!-- Background Decor -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_50%_0%,rgba(139,92,246,0.05),transparent_50%)]">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 text-center mb-32">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 mb-8">
                <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-400">Vault Eksklusif</span>
            </div>
            <h1 data-aos="fade-up"
                class="text-4xl sm:text-7xl md:text-8xl lg:text-9xl font-black text-white mb-10 tracking-tighter leading-[0.9] uppercase">
                Artefak <span class="text-gradient">Digital.</span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="200"
                class="text-xl md:text-2xl text-slate-400 font-medium leading-relaxed max-w-3xl mx-auto">
                Koleksi sistem berdaya tinggi dan identitas brand yang memimpin industri.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @foreach ($projects as $index => $project)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 150 }}"
                        class="group relative bg-[#0A0A0F] rounded-[3rem] overflow-hidden border border-white/[0.03] hover:border-blue-500/30 transition-all duration-700">
                        <!-- Image Container -->
                        <div class="aspect-[16/10] overflow-hidden relative">
                            @if ($project->thumbnail)
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($project->thumbnail) }}"
                                    alt="{{ $project->title }}"
                                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-[1.5s] opacity-40 group-hover:opacity-100">
                            @else
                                <div
                                    class="w-full h-full bg-[#050505] flex items-center justify-center text-gray-800 font-black tracking-tighter italic">
                                    PROUD TECH
                                </div>
                            @endif
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#0A0A0F] via-transparent to-transparent opacity-80 transition-opacity">
                            </div>

                            <div class="absolute top-8 left-8 flex items-center gap-3">
                                <span
                                    class="px-4 py-1.5 rounded-full glass border border-white/10 text-[10px] font-black uppercase tracking-widest text-blue-400">
                                    {{ $project->type == 'client' ? 'Produksi' : 'Lab' }}
                                </span>
                            </div>

                            <a href="{{ route('portfolio.show', $project->slug) }}"
                                class="absolute top-8 right-8 w-14 h-14 rounded-full glass border border-white/10 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                <i class="fas fa-arrow-right -rotate-45"></i>
                            </a>
                        </div>

                        <!-- Content -->
                        <div class="p-12">
                            <h2
                                class="text-3xl font-black text-white mb-4 uppercase tracking-tight group-hover:text-blue-400 transition-colors">
                                {{ $project->title }}
                            </h2>
                            <p class="text-gray-500 leading-relaxed text-sm mb-10 line-clamp-2">
                                {{ $project->overview }}
                            </p>

                            <div class="pt-8 border-t border-white/[0.03] flex items-center justify-between">
                                <div class="flex flex-wrap gap-3">
                                    @if (is_array($project->tech_stack))
                                        @foreach (array_slice($project->tech_stack, 0, 3) as $tech)
                                            <span
                                                class="text-[9px] font-black uppercase tracking-widest text-gray-600 px-3 py-1 bg-white/[0.02] border border-white/5 rounded-lg">{{ $tech }}</span>
                                        @endforeach
                                        @if (count($project->tech_stack) > 3)
                                            <span
                                                class="text-[9px] font-black uppercase tracking-widest text-gray-800">+{{ count($project->tech_stack) - 3 }}</span>
                                        @endif
                                    @endif
                                </div>
                                <span
                                    class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-500 group-hover:text-white transition-colors">
                                    {{ $project->client_name ?? 'Rahasia' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-32 flex justify-center">
                {{ $projects->links('pagination::tailwind') }}
            </div>
        </div>
    </section>
</x-frontend-layout>
