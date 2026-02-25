@include('admin.partials.summernote')

<div class="space-y-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="title" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Benefit
                Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $benefit->title ?? '') }}" required
                autofocus
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <div class="space-y-2">
            <label for="icon" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Icon
                (FontAwesome Class)</label>
            <div class="relative">
                <input type="text" id="icon" name="icon"
                    value="{{ old('icon', $benefit->icon ?? 'fas fa-rocket') }}" required
                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all pl-12">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                    <i id="icon-preview" class="{{ old('icon', $benefit->icon ?? 'fas fa-rocket') }}"></i>
                </div>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('icon')" />
        </div>
    </div>

    <div class="space-y-2">
        <label for="description"
            class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Description</label>
        <textarea id="description" name="description" rows="4" required
            class="summernote w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ old('description', $benefit->description ?? '') }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('description')" />
    </div>

    <div class="space-y-2">
        <label for="order" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Display
            Order</label>
        <input type="number" id="order" name="order" value="{{ old('order', $benefit->order ?? 0) }}" required
            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
        <x-input-error class="mt-2" :messages="$errors->get('order')" />
    </div>

    <script>
        document.getElementById('icon').addEventListener('input', function(e) {
            document.getElementById('icon-preview').className = e.target.value;
        });
    </script>
</div>
