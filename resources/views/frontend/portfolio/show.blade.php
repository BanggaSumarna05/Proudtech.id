<x-frontend-layout>
    <section class="py-20 md:py-40 relative overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-[50%] h-96 bg-blue-600/[0.02] blur-[150px]"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-24 md:py-40 relative z-10">
            <a href="{{ route('portfolio.index') }}"
                class="inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-[0.3em] text-gray-500 hover:text-white mb-16 transition-all group">
                <i class="fas fa-arrow-left group-hover:-translate-x-2 transition-transform"></i> Basis Data Arsip
            </a>

            <header class="mb-24">
                <div class="flex items-center gap-4 mb-8">
                    <span
                        class="px-4 py-1.5 rounded-full glass border border-white/10 text-[10px] font-black uppercase tracking-widest text-blue-400">
                        {{ $project->type == 'client' ? 'Studi Kasus Produksi' : 'Prototipe Lab' }}
                    </span>
                    <span class="text-gray-800">/</span>
                    <span
                        class="text-[10px] font-black uppercase tracking-widest text-gray-500">{{ $project->client_name ?? 'Proud Tech Digital' }}</span>
                </div>
                <h1
                    class="text-5xl md:text-8xl lg:text-9xl font-black text-white mb-10 tracking-tighter leading-[0.9] uppercase">
                    {{ $project->title }}</h1>
                <p class="text-xl md:text-2xl text-gray-400 max-w-4xl font-medium leading-relaxed">
                    {{ $project->overview }}</p>
            </header>

            <!-- Main Feature Image -->
            <div class="mb-32 rounded-[3rem] overflow-hidden bg-[#0A0A0F] border border-white/5 shadow-2xl group">
                @if ($project->thumbnail)
                    <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($project->thumbnail) }}"
                        alt="{{ $project->title }}"
                        class="w-full h-auto object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-1000">
                @else
                    <div
                        class="aspect-video w-full flex items-center justify-center text-gray-800 font-black tracking-tighter italic text-4xl">
                        PROUD TECH
                    </div>
                @endif
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-20">
                <!-- Project Narrative -->
                <div class="lg:col-span-2 space-y-24">
                    <section class="relative">
                        <div class="absolute -left-10 top-0 text-7xl font-black text-white/[0.02] select-none">01</div>
                        <h2 class="text-2xl font-black text-white mb-10 uppercase tracking-tight">Tujuan Proyek</h2>
                        <div class="prose prose-invert prose-lg max-w-none text-gray-400 leading-relaxed font-medium">
                            {!! $project->description !!}
                        </div>
                    </section>

                    @if (is_array($project->features) && count($project->features) > 0)
                        <section class="relative">
                            <div class="absolute -left-10 top-0 text-7xl font-black text-white/[0.02] select-none">02
                            </div>
                            <h2 class="text-2xl font-black text-white mb-10 uppercase tracking-tight">Arsitektur Teknis
                            </h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach ($project->features as $feature)
                                    <div
                                        class="p-8 rounded-3xl bg-[#0A0A0F] border border-white/[0.03] flex items-start gap-5 group hover:border-blue-500/30 transition-all">
                                        <div
                                            class="w-2 h-2 rounded-full bg-blue-500 mt-2 shadow-[0_0_10px_rgba(59,130,246,0.5)]">
                                        </div>
                                        <span
                                            class="text-gray-400 font-bold text-sm tracking-tight leading-relaxed">{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif

                    @if ($project->images->count() > 0)
                        <section class="relative">
                            <div class="absolute -left-10 top-0 text-7xl font-black text-white/[0.02] select-none">03
                            </div>
                            <h2 class="text-2xl font-black text-white mb-10 uppercase tracking-tight">Antarmuka Visual
                            </h2>
                            <div class="grid grid-cols-1 gap-12">
                                @foreach ($project->images as $image)
                                    <div
                                        class="rounded-[2.5rem] overflow-hidden border border-white/5 bg-[#050505] shadow-2xl">
                                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($image->image_path) }}"
                                            alt="Project Artifact"
                                            class="w-full h-auto object-cover opacity-90 hover:opacity-100 transition-opacity duration-700">
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                </div>

                <!-- Sidebar Specifications -->
                <div class="space-y-12">
                    <div class="p-10 rounded-[2.5rem] bg-[#0A0A0F] border border-white/[0.03] sticky top-32">
                        <h3 class="text-[10px] font-black text-gray-600 uppercase tracking-[0.3em] mb-12">Inti Proyek
                        </h3>

                        <div class="space-y-10 mb-12">
                            <div>
                                <h4 class="text-[9px] font-black text-blue-500 uppercase tracking-[0.2em] mb-3">Entitas
                                    Klien</h4>
                                <p class="text-white font-bold uppercase tracking-tight">
                                    {{ $project->client_name ?? 'Rahasia' }}</p>
                            </div>
                            <div>
                                <h4 class="text-[9px] font-black text-blue-500 uppercase tracking-[0.2em] mb-3">Sektor
                                </h4>
                                <p class="text-white font-bold uppercase tracking-tight">Transformasi Digital</p>
                            </div>
                            <div>
                                <h4 class="text-[9px] font-black text-blue-500 uppercase tracking-[0.2em] mb-3">Matriks
                                    Teknologi</h4>
                                <div class="flex flex-wrap gap-2 mt-4">
                                    @if (is_array($project->tech_stack))
                                        @foreach ($project->tech_stack as $tech)
                                            <span
                                                class="px-3 py-1 bg-white/[0.03] border border-white/5 text-[9px] font-black text-gray-500 uppercase rounded-lg tracking-widest">{{ $tech }}</span>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if ($project->project_url)
                            <div class="pt-10 border-t border-white/[0.03]">
                                <a href="{{ $project->project_url }}" target="_blank"
                                    class="flex items-center justify-center py-5 bg-white text-black rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:scale-105 active:scale-95 transition-all shadow-xl">
                                    Protokol Langsung <i class="fas fa-external-link-alt ml-3 text-[10px]"></i>
                                </a>
                            </div>
                        @endif

                        <div class="mt-12 p-8 rounded-3xl bg-blue-600/10 border border-blue-500/20">
                            <p class="text-xs font-bold text-blue-400 mb-6 leading-relaxed">Tertarik dengan pola
                                arsitektural serupa?</p>
                            <a href="{{ \App\Models\Setting::whatsappUrl('Halo, saya tertarik dengan proyek seperti ' . $project->title) }}"
                                class="inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-[0.2em] text-white hover:text-blue-300 transition-colors">
                                Mulai Konsultasi <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </article>
</x-frontend-layout>
