<x-app-layout>
    <x-slot name="header">Dashboard</x-slot>

    <div class="space-y-10">
        <!-- Welcome Header -->
        <div
            class="relative overflow-hidden p-8 rounded-[2rem] bg-gradient-to-br from-blue-600 to-indigo-800 shadow-2xl shadow-blue-500/20">
            <div class="relative z-10">
                <h3 class="text-3xl font-extrabold text-white mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h3>
                <p class="text-blue-100 font-medium">Here's what's happening with Proud Tech today.</p>
            </div>
            <!-- Decorative circles -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-blue-400/10 rounded-full translate-y-1/2 -translate-x-1/2">
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
                class="p-6 rounded-3xl bg-[#161923] border border-white/5 hover:border-blue-500/30 transition-all duration-300 group">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-400 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-layer-group text-xl"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Services</span>
                </div>
                <div class="flex items-end justify-between">
                    <span class="text-4xl font-black text-white">{{ $stats['services'] }}</span>
                    <span class="text-xs text-green-400 font-bold bg-green-400/10 px-2 py-1 rounded-lg">Active</span>
                </div>
            </div>

            <div
                class="p-6 rounded-3xl bg-[#161923] border border-white/5 hover:border-indigo-500/30 transition-all duration-300 group">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-project-diagram text-xl"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Projects</span>
                </div>
                <div class="flex items-end justify-between">
                    <span class="text-4xl font-black text-white">{{ $stats['projects'] }}</span>
                    <span class="text-xs text-blue-400 font-bold bg-blue-400/10 px-2 py-1 rounded-lg">Total</span>
                </div>
            </div>

            <div
                class="p-6 rounded-3xl bg-[#161923] border border-white/5 hover:border-green-500/30 transition-all duration-300 group">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-green-500/10 text-green-400 flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-check-circle text-xl"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Published</span>
                </div>
                <div class="flex items-end justify-between">
                    <span class="text-4xl font-black text-white">{{ $stats['published'] }}</span>
                    <span class="text-xs text-green-400 font-bold bg-green-400/10 px-2 py-1 rounded-lg">Live</span>
                </div>
            </div>

            <div
                class="p-6 rounded-3xl bg-[#161923] border border-white/5 hover:border-yellow-500/30 transition-all duration-300 group">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-yellow-500/10 text-yellow-400 flex items-center justify-center group-hover:bg-yellow-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-comment-dots text-xl"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Feedback</span>
                </div>
                <div class="flex items-end justify-between">
                    <span class="text-4xl font-black text-white">{{ $stats['testimonials'] }}</span>
                    <span class="text-xs text-yellow-400 font-bold bg-yellow-400/10 px-2 py-1 rounded-lg">Reviews</span>
                </div>
            </div>
        </div>

        <!-- Quick Access -->
        <div class="bg-[#161923] rounded-[2.5rem] border border-white/5 p-8 lg:p-12 overflow-hidden relative">
            <div class="relative z-10 flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8">
                <div class="max-w-md">
                    <h4 class="text-2xl font-black text-white mb-4 italic leading-tight">Fast-track your agency
                        operations.</h4>
                    <p class="text-gray-400 font-medium">Manage your portfolio, update services, and tweak system
                        settings in one click.</p>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full lg:w-auto">
                    <a href="{{ route('admin.projects.create') }}"
                        class="flex items-center justify-center gap-3 px-6 py-4 bg-white text-gray-900 rounded-2xl font-bold hover:bg-gray-100 transition-all active:scale-95 shadow-xl shadow-white/5">
                        <i class="fas fa-plus"></i> New Project
                    </a>
                    <a href="{{ route('admin.services.index') }}"
                        class="flex items-center justify-center gap-3 px-6 py-4 bg-blue-600 text-white rounded-2xl font-bold hover:bg-blue-700 transition-all active:scale-95 shadow-xl shadow-blue-500/20">
                        Manage Services
                    </a>
                </div>
            </div>
            <!-- Decorative background text -->
            <div
                class="absolute -bottom-10 -right-10 text-[120px] font-black text-white/[0.02] select-none pointer-events-none tracking-tighter italic">
                PROUD
            </div>
        </div>
    </div>
</x-app-layout>
