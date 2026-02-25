<div class="space-y-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="number" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Metric Value
                (e.g. 75+)</label>
            <input type="text" id="number" name="number" value="{{ old('number', $stat->number ?? '') }}" required
                autofocus
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
            <x-input-error class="mt-2" :messages="$errors->get('number')" />
        </div>

        <div class="space-y-2">
            <label for="label" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Metric
                Label</label>
            <input type="text" id="label" name="label" value="{{ old('label', $stat->label ?? '') }}" required
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
            <x-input-error class="mt-2" :messages="$errors->get('label')" />
        </div>
    </div>

    <div class="space-y-2">
        <label for="order" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Display
            Order</label>
        <input type="number" id="order" name="order" value="{{ old('order', $stat->order ?? 0) }}" required
            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
        <x-input-error class="mt-2" :messages="$errors->get('order')" />
    </div>
</div>
