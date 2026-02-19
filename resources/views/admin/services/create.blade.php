<x-app-layout>
    <x-slot name="header">Add New Service</x-slot>

    <div class="max-w-3xl mx-auto">
        <div class="bg-[#161923] rounded-3xl border border-white/5 p-8 shadow-xl">
            <div class="flex items-center gap-4 mb-8">
                <div
                    class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center border border-blue-500/20">
                    <i class="fas fa-plus"></i>
                </div>
                <div>
                    <h4 class="text-white font-bold">New Service Blueprint</h4>
                    <p class="text-xs text-gray-500">Define a new technical solution for Proud Tech.</p>
                </div>
            </div>

            <form method="POST" action="{{ route('admin.services.store') }}" class="space-y-8">
                @csrf
                @include('admin.services.partials.form')

                <div class="flex items-center justify-end gap-4 pt-4 border-t border-white/5">
                    <a href="{{ route('admin.services.index') }}"
                        class="px-6 py-3 text-sm font-bold text-gray-500 hover:text-white transition-colors">
                        Discard
                    </a>
                    <button type="submit"
                        class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold transition-all active:scale-95 shadow-lg shadow-blue-500/20">
                        Deploy Service
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
