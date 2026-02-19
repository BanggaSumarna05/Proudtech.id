<x-app-layout>
    <x-slot name="header">Testimonials Management</x-slot>

    <div class="space-y-6">
        @if (session('success'))
            <div
                class="p-4 rounded-2xl bg-green-500/10 border border-green-500/50 text-green-400 flex items-center gap-3 animate-fade-in">
                <i class="fas fa-check-circle"></i>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h3 class="text-lg font-bold text-white">Client Feedback</h3>
                <p class="text-sm text-gray-500">Curate and showcase what clients say about Proud Tech.</p>
            </div>
            <a href="{{ route('admin.testimonials.create') }}"
                class="group flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold transition-all active:scale-95 shadow-lg shadow-blue-500/20">
                <i class="fas fa-plus group-hover:rotate-90 transition-transform"></i>
                Add Testimonial
            </a>
        </div>

        <div class="bg-[#161923] rounded-3xl border border-white/5 overflow-hidden shadow-xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/[0.02] border-b border-white/5">
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Client
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">
                                Feedback</th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Rating
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">
                                Visibility</th>
                            <th
                                class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em] text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse($testimonials as $testimonial)
                            <tr class="hover:bg-white/[0.01] transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-9 h-9 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-400 font-bold border border-blue-500/20 capitalize">
                                            {{ substr($testimonial->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-white leading-none mb-1">
                                                {{ $testimonial->name }}</p>
                                            <p class="text-[10px] text-gray-500">{{ $testimonial->position }}
                                                {{ $testimonial->company ? '@ ' . $testimonial->company : '' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-xs text-gray-400 max-w-xs leading-relaxed italic">
                                    "{{ Str::limit($testimonial->message, 80) }}"
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-1 text-[10px] text-yellow-500">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i
                                                class="fas fa-star {{ $i <= $testimonial->rating ? 'text-yellow-500' : 'text-gray-800' }}"></i>
                                        @endfor
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    @if ($testimonial->is_published)
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-[10px] font-bold border border-green-500/20">
                                            <span class="w-1 h-1 rounded-full bg-green-400"></span>
                                            Published
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-500/10 text-gray-400 text-[10px] font-bold border border-white/5">
                                            <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                                            Hidden
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('admin.testimonials.edit', $testimonial) }}"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 hover:bg-blue-600 hover:text-white transition-all border border-blue-500/10"
                                            title="Edit">
                                            <i class="fas fa-edit text-xs"></i>
                                        </a>
                                        <form action="{{ route('admin.testimonials.destroy', $testimonial) }}"
                                            method="POST" class="inline-block"
                                            onsubmit="return confirm('Remove this testimonial?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="w-9 h-9 flex items-center justify-center rounded-lg bg-red-500/10 text-red-400 hover:bg-red-600 hover:text-white transition-all border border-red-500/10"
                                                title="Delete">
                                                <i class="fas fa-trash text-xs"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-gray-500">No testimonials found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($testimonials->hasPages())
                <div class="p-6 border-t border-white/5">
                    {{ $testimonials->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
