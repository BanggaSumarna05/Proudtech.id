<div class="space-y-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="name" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Client
                Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $testimonial->name ?? '') }}" required
                autofocus
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="space-y-2">
            <label for="rating"
                class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Satisfaction Level</label>
            <div class="relative">
                <select id="rating" name="rating" required
                    class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 transition-all appearance-none cursor-pointer pr-10">
                    @foreach (range(5, 1) as $i)
                        <option value="{{ $i }}"
                            {{ old('rating', $testimonial->rating ?? 5) == $i ? 'selected' : '' }} class="bg-[#161923]">
                            {{ $i }} Stars —
                            {{ $i == 5 ? 'Exceptional' : ($i == 4 ? 'Great' : ($i == 3 ? 'Good' : 'Needs Work')) }}
                        </option>
                    @endforeach
                </select>
                <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-yellow-500">
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('rating')" />
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="company" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Affiliated
                Organization</label>
            <input type="text" id="company" name="company"
                value="{{ old('company', $testimonial->company ?? '') }}"
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
            <x-input-error class="mt-2" :messages="$errors->get('company')" />
        </div>

        <div class="space-y-2">
            <label for="position" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Job Title /
                Role</label>
            <input type="text" id="position" name="position"
                value="{{ old('position', $testimonial->position ?? '') }}"
                class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all">
            <x-input-error class="mt-2" :messages="$errors->get('position')" />
        </div>
    </div>

    <div class="space-y-2">
        <label for="message" class="text-[10px] font-bold text-gray-500 uppercase tracking-widest pl-1">Endorsement
            Message</label>
        <textarea id="message" name="message" rows="4" required
            class="w-full bg-white/[0.03] border-white/5 rounded-xl px-4 py-3 text-white focus:ring-blue-500 focus:border-blue-500 placeholder-gray-600 transition-all resize-none">{{ old('message', $testimonial->message ?? '') }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('message')" />
    </div>

    <div class="pt-4 border-t border-white/5">
        <label for="is_published" class="flex items-center gap-3 cursor-pointer group">
            <div class="relative">
                <input id="is_published" type="checkbox" name="is_published" value="1"
                    {{ old('is_published', $testimonial->is_published ?? true) ? 'checked' : '' }} class="sr-only peer">
                <div
                    class="w-11 h-6 bg-gray-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-gray-400 after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600 peer-checked:after:bg-white">
                </div>
            </div>
            <span class="text-sm font-bold text-gray-400 group-hover:text-white transition-colors">Visible to
                prospective clients on website</span>
        </label>
        <x-input-error class="mt-2" :messages="$errors->get('is_published')" />
    </div>
</div>
