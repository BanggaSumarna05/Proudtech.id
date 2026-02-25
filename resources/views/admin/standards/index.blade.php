<x-app-layout>
    <x-slot name="header">Standards Management</x-slot>

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
                <h3 class="text-lg font-bold text-white">Quality Standards</h3>
                <p class="text-sm text-gray-500">Manage the "Our Standards" section on the About page.</p>
            </div>
            <a href="{{ route('admin.standards.create') }}"
                class="group flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold transition-all active:scale-95 shadow-lg shadow-blue-500/20">
                <i class="fas fa-plus group-hover:rotate-90 transition-transform"></i>
                Add New Standard
            </a>
        </div>

        <div class="bg-[#161923] rounded-3xl border border-white/5 overflow-hidden shadow-xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/[0.02] border-b border-white/5">
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Order
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">
                                Standard
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Color
                            </th>
                            <th
                                class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em] text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse($standards as $standard)
                            <tr class="hover:bg-white/[0.01] transition-colors">
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white/5 text-gray-400 text-xs font-bold border border-white/5">
                                        {{ str_pad($standard->order, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-{{ $standard->color }}-500/10 text-{{ $standard->color }}-400 flex items-center justify-center border border-{{ $standard->color }}-500/20">
                                            <i class="{{ $standard->icon }}"></i>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-white">{{ $standard->title }}</p>
                                            <p class="text-xs text-gray-500">
                                                {{ Str::limit($standard->description, 60) }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="text-xs font-bold uppercase text-{{ $standard->color }}-400">{{ $standard->color }}</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('admin.standards.edit', $standard) }}"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 hover:bg-blue-600 hover:text-white transition-all border border-blue-500/10"
                                            title="Edit">
                                            <i class="fas fa-edit text-xs"></i>
                                        </a>
                                        <form action="{{ route('admin.standards.destroy', $standard) }}" method="POST"
                                            class="inline-block" onsubmit="return confirm('Delete this standard?')">
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
                                <td colspan="4" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center gap-2">
                                        <i class="fas fa-inbox text-4xl text-gray-700 mb-2"></i>
                                        <p class="text-gray-500 font-medium">No standards listed yet.</p>
                                        <a href="{{ route('admin.standards.create') }}"
                                            class="text-blue-500 hover:underline text-sm font-bold">Add your first
                                            standard</a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($standards->hasPages())
                <div class="p-6 border-t border-white/5 bg-white/[0.01]">
                    {{ $standards->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
