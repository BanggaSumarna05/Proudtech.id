<x-app-layout>
    <x-slot name="header">Statistics Management</x-slot>

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
                <h3 class="text-lg font-bold text-white">Agency Impact Metrics</h3>
                <p class="text-sm text-gray-500">Manage the counter numbers shown on the homepage.</p>
            </div>
            <a href="{{ route('admin.stats.create') }}"
                class="group flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold transition-all active:scale-95 shadow-lg shadow-blue-500/20">
                <i class="fas fa-plus group-hover:rotate-90 transition-transform"></i>
                Add New Statistic
            </a>
        </div>

        <div class="bg-[#161923] rounded-3xl border border-white/5 overflow-hidden shadow-xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/[0.02] border-b border-white/5">
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Order
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Metric
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Label
                            </th>
                            <th
                                class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em] text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse ($stats as $stat)
                            <tr class="hover:bg-white/[0.01] transition-colors">
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white/5 text-gray-400 text-xs font-bold border border-white/5">
                                        {{ str_pad($stat->order, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-2xl font-black text-blue-500">{{ $stat->number }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="text-sm font-bold text-white uppercase tracking-widest">{{ $stat->label }}</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('admin.stats.edit', $stat) }}"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 hover:bg-blue-600 hover:text-white transition-all border border-blue-500/10"
                                            title="Edit">
                                            <i class="fas fa-edit text-xs"></i>
                                        </a>
                                        <form action="{{ route('admin.stats.destroy', $stat) }}" method="POST"
                                            class="inline-block" onsubmit="return confirm('Delete this statistic?')">
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
                                        <p class="text-gray-500 font-medium">No statistics listed yet.</p>
                                        <a href="{{ route('admin.stats.create') }}"
                                            class="text-blue-500 hover:underline text-sm font-bold">Add your first
                                            statistic</a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($stats->hasPages())
                <div class="p-6 border-t border-white/5 bg-white/[0.01]">
                    {{ $stats->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
