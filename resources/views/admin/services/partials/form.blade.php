@include('admin.partials.summernote')

<div class="space-y-6">
    <div class="space-y-2">
        <label for="title" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Service
            Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $service->title ?? '') }}" required
            autofocus
            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>

    <div class="space-y-2">
        <label for="description" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Detailed
            Description</label>
        <textarea id="description" name="description" rows="4" required
            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ old('description', $service->description ?? '') }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('description')" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="icon" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">FontAwesome
                Icon Class</label>
            <div class="relative">
                <input type="text" id="icon" name="icon"
                    value="{{ old('icon', $service->icon ?? 'fas fa-rocket') }}"
                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500">
                    <i id="icon-preview" class="{{ old('icon', $service->icon ?? 'fas fa-rocket') }}"></i>
                </div>
            </div>
            <p class="text-[10px] text-gray-600 pl-1 mt-1">Example: fas fa-code, fab fa-laravel</p>
            <x-input-error class="mt-2" :messages="$errors->get('icon')" />
        </div>

        <div class="space-y-2">
            <label for="order" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Display
                Order</label>
            <input type="number" id="order" name="order" value="{{ old('order', $service->order ?? 0) }}"
                min="0"
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
            <x-input-error class="mt-2" :messages="$errors->get('order')" />
        </div>
    </div>

    <div class="pt-4">
        <label for="is_active" class="flex items-center gap-3 cursor-pointer group">
            <div class="relative">
                <input id="is_active" type="checkbox" name="is_active" value="1"
                    {{ old('is_active', $service->is_active ?? true) ? 'checked' : '' }} class="sr-only peer">
                <div
                    class="w-11 h-6 bg-gray-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-gray-400 after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600 peer-checked:after:bg-white">
                </div>
            </div>
            <span class="text-sm font-bold text-gray-400 group-hover:text-white transition-colors">Published & Visible
                on Website</span>
        </label>
        <x-input-error class="mt-2" :messages="$errors->get('is_active')" />
    </div>
</div>

<script>
    document.getElementById('icon')?.addEventListener('input', function(e) {
        const preview = document.getElementById('icon-preview');
        if (preview) {
            preview.className = e.target.value;
        }
    });
</script>
