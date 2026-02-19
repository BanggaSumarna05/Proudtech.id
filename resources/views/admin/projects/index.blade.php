<x-app-layout>
    <x-slot name="header">Portfolio Management</x-slot>

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
                <h3 class="text-lg font-bold text-white">Project List</h3>
                <p class="text-sm text-gray-500">Exhibit Proud Tech's finest digital creations.</p>
            </div>
            <a href="{{ route('admin.projects.create') }}"
                class="group flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold transition-all active:scale-95 shadow-lg shadow-blue-500/20">
                <i class="fas fa-plus group-hover:rotate-90 transition-transform"></i>
                New Project
            </a>
        </div>

        <div class="bg-[#161923] rounded-3xl border border-white/5 overflow-hidden shadow-xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/[0.02] border-b border-white/5">
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Project
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">
                                Category</th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">
                                Visibility</th>
                            <th
                                class="px-6 py-4 text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em] text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse($projects as $project)
                            <tr class="hover:bg-white/[0.01] transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="relative w-24 h-14 rounded-lg overflow-hidden border border-white/5 bg-gray-900 flex-shrink-0">
                                            @if ($project->thumbnail)
                                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                                    alt="{{ $project->title }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center">
                                                    <i class="fas fa-image text-gray-800 text-xl"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-white">{{ $project->title }}</p>
                                            <p class="text-[10px] font-bold text-blue-500 uppercase tracking-widest">
                                                {{ $project->slug }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-md bg-white/5 text-gray-400 text-[10px] font-bold uppercase tracking-wider border border-white/5 italic">
                                        {{ $project->type }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    @if ($project->is_published)
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-[10px] font-bold border border-green-500/20">
                                            <span class="w-1 h-1 rounded-full bg-green-400"></span>
                                            Published
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-500/10 text-gray-400 text-[10px] font-bold border border-white/5">
                                            <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                                            Draft
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('portfolio.show', $project) }}" target="_blank"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg bg-white/5 text-gray-400 hover:bg-white/10 hover:text-white transition-all border border-white/5"
                                            title="View Public Page">
                                            <i class="fas fa-external-link-alt text-xs"></i>
                                        </a>
                                        <a href="{{ route('admin.projects.edit', $project) }}"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 hover:bg-blue-600 hover:text-white transition-all border border-blue-500/10"
                                            title="Edit">
                                            <i class="fas fa-edit text-xs"></i>
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                            class="inline-block"
                                            onsubmit="return confirm('Delete this project forever?')">
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
                                <td colspan="4" class="px-6 py-12 text-center text-gray-500">
                                    No projects found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($projects->hasPages())
                <div class="p-6 border-t border-white/5">
                    {{ $projects->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
