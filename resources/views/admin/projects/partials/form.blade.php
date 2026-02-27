@include('admin.partials.summernote')

<div class="space-y-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="title" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Project
                Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $project->title ?? '') }}" required
                autofocus
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <div class="space-y-2">
            <label for="type" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Project
                Category</label>
            <select id="type" name="type" required
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 transition-all appearance-none cursor-pointer">
                <option value="client" {{ old('type', $project->type ?? '') == 'client' ? 'selected' : '' }}
                    class="bg-[#161923]">Client Production</option>
                <option value="internal" {{ old('type', $project->type ?? '') == 'internal' ? 'selected' : '' }}
                    class="bg-[#161923]">Internal / R&D Project</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('type')" />
        </div>
    </div>

    <div class="space-y-2">
        <label for="overview" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">One-liner
            Overview</label>
        <input type="text" id="overview" name="overview" value="{{ old('overview', $project->overview ?? '') }}"
            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
        <p class="text-[10px] text-gray-600 pl-1 mt-1 italic">Brief summary for index cards.</p>
        <x-input-error class="mt-2" :messages="$errors->get('overview')" />
    </div>

    <div class="space-y-2">
        <label for="description" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Detailed
            Case Study</label>
        <textarea id="description" name="description" rows="6"
            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ old('description', $project->description ?? '') }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('description')" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="features" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Core
                Features (one per line)</label>
            <textarea id="features" name="features" rows="4"
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ old('features', isset($project) && is_array($project->features) ? implode("\n", $project->features) : '') }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('features')" />
        </div>

        <div class="space-y-2">
            <label for="tech_stack" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Technical
                Stack (one per line)</label>
            <textarea id="tech_stack" name="tech_stack" rows="4"
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ old('tech_stack', isset($project) && is_array($project->tech_stack) ? implode("\n", $project->tech_stack) : '') }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('tech_stack')" />
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-white/5">
        <div class="space-y-6">
            <div class="space-y-2">
                <label for="client_name"
                    class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Partner / Client
                    Name</label>
                <input id="client_name" name="client_name" type="text"
                    value="{{ old('client_name', $project->client_name ?? '') }}"
                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                <x-input-error class="mt-2" :messages="$errors->get('client_name')" />
            </div>

            <div class="space-y-2">
                <label for="project_url" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Live
                    URL (optional)</label>
                <input id="project_url" name="project_url" type="url"
                    value="{{ old('project_url', $project->project_url ?? '') }}" placeholder="https://..."
                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                <x-input-error class="mt-2" :messages="$errors->get('project_url')" />
            </div>
        </div>

        <div class="space-y-6">
            <div class="space-y-2">
                <label for="thumbnail" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Hero
                    Thumbnail</label>
                <div class="relative group">
                    <div
                        class="flex items-center justify-center w-full min-h-[140px] px-6 py-4 border-2 border-dashed border-white/10 rounded-2xl bg-white/[0.02] hover:bg-white/[0.04] transition-all cursor-pointer">
                        <div class="text-center">
                            @if (isset($project) && $project->thumbnail)
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($project->thumbnail) }}"
                                    class="h-16 mx-auto rounded-lg mb-2 shadow-lg">
                                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-tight">Change Current
                                    Hero</p>
                            @else
                                <i
                                    class="fas fa-cloud-upload-alt text-2xl text-gray-700 mb-2 group-hover:text-blue-500 transition-colors"></i>
                                <p class="text-xs text-gray-500 font-medium">Select a high-quality cover image.</p>
                            @endif
                        </div>
                        <input id="thumbnail" name="thumbnail" type="file"
                            class="absolute inset-0 opacity-0 cursor-pointer" />
                    </div>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
            </div>
        </div>
    </div>

    <div class="space-y-4 pt-6 mt-6 border-t border-white/5">
        <label for="images" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Project
            Gallery</label>
        <div class="relative group">
            <div
                class="flex flex-col items-center justify-center p-8 border-2 border-dashed border-white/10 rounded-3xl bg-white/[0.01] hover:bg-white/[0.02] transition-all cursor-pointer">
                <i class="fas fa-images text-3xl text-gray-800 mb-3 group-hover:text-blue-500 transition-colors"></i>
                <p class="text-sm text-gray-500 font-medium">Click to upload multiple snapshots of your work.</p>
                <input id="images" name="images[]" type="file" multiple
                    class="absolute inset-0 opacity-0 cursor-pointer" />
            </div>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('images.*')" />

        @if (isset($project) && $project->images->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 py-4">
                @foreach ($project->images as $img)
                    <div
                        class="relative group/img aspect-video rounded-xl overflow-hidden border border-white/5 shadow-2xl">
                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($img->image_path) }}"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-red-600/60 opacity-0 group-hover/img:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
                            <button type="button"
                                onclick="if(confirm('Purge this image?')) document.getElementById('delete-img-{{ $img->id }}').submit();"
                                class="w-10 h-10 rounded-full bg-white text-red-600 flex items-center justify-center shadow-lg active:scale-95 transform transition-transform">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="pt-6 border-t border-white/5">
        <label for="is_published" class="flex items-center gap-3 cursor-pointer group">
            <div class="relative">
                <input id="is_published" type="checkbox" name="is_published" value="1"
                    {{ old('is_published', $project->is_published ?? true) ? 'checked' : '' }} class="sr-only peer">
                <div
                    class="w-11 h-6 bg-gray-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-gray-400 after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600 peer-checked:after:bg-white">
                </div>
            </div>
            <span class="text-sm font-bold text-gray-400 group-hover:text-white transition-colors">Make project visible
                to public visitors</span>
        </label>
        <x-input-error class="mt-2" :messages="$errors->get('is_published')" />
    </div>
</div>
