<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Proud Tech') }} Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="h-full antialiased font-sans text-gray-200">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen">
        <!-- Mobile Sidebar Overlay -->
        <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-40 bg-gray-950/80 backdrop-blur-sm lg:hidden"
            @click="sidebarOpen = false"></div>

        <!-- Sidebar -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-50 w-72 bg-[#0F111A] border-r border-white/5 transition-transform duration-300 ease-in-out lg:translate-x-0">
            <div class="flex flex-col h-full">
                <!-- Logo Area -->
                <div class="flex items-center gap-3 px-6 h-20 border-b border-white/5">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/20">
                        <span class="text-white font-bold text-xl text-shadow">P</span>
                    </div>
                    <div>
                        <h1 class="text-white font-extrabold tracking-tight">Proud Tech</h1>
                        <p class="text-[10px] text-blue-400 font-bold uppercase tracking-widest">Admin Control</p>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto custom-scrollbar">
                    <x-responsive-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')"
                        class="!bg-transparent !border-none !p-0">
                        <div
                            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                            <i class="fas fa-th-large w-5"></i>
                            <span class="font-semibold text-sm">Dashboard</span>
                        </div>
                    </x-responsive-nav-link>

                    <div class="pt-4 pb-2 px-4">
                        <span class="text-[10px] font-bold text-gray-600 uppercase tracking-[0.2em]">Management</span>
                    </div>

                    <x-responsive-nav-link href="{{ route('admin.services.index') }}" :active="request()->routeIs('admin.services.*')"
                        class="!bg-transparent !border-none !p-0">
                        <div
                            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.services.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                            <i class="fas fa-layer-group w-5"></i>
                            <span class="font-semibold text-sm">Services</span>
                        </div>
                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('admin.projects.index') }}" :active="request()->routeIs('admin.projects.*')"
                        class="!bg-transparent !border-none !p-0">
                        <div
                            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.projects.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                            <i class="fas fa-project-diagram w-5"></i>
                            <span class="font-semibold text-sm">Projects</span>
                        </div>
                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('admin.testimonials.index') }}" :active="request()->routeIs('admin.testimonials.*')"
                        class="!bg-transparent !border-none !p-0">
                        <div
                            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.testimonials.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                            <i class="fas fa-comment-dots w-5"></i>
                            <span class="font-semibold text-sm">Testimonials</span>
                        </div>
                    </x-responsive-nav-link>

                    <div class="pt-4 pb-2 px-4">
                        <span class="text-[10px] font-bold text-gray-600 uppercase tracking-[0.2em]">System</span>
                    </div>

                    <x-responsive-nav-link href="{{ route('admin.settings.index') }}" :active="request()->routeIs('admin.settings.*')"
                        class="!bg-transparent !border-none !p-0">
                        <div
                            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.settings.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                            <i class="fas fa-cog w-5"></i>
                            <span class="font-semibold text-sm">Settings</span>
                        </div>
                    </x-responsive-nav-link>

                    <a href="{{ route('home') }}" target="_blank"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-400 hover:bg-white/5 hover:text-white transition-all duration-300">
                        <i class="fas fa-external-link-alt w-5"></i>
                        <span class="font-semibold text-sm">Visit Website</span>
                    </a>
                </nav>

                <!-- User Profile / Logout -->
                <div class="p-4 border-t border-white/5 bg-gray-950/30">
                    <div class="flex items-center gap-3 px-2 mb-4">
                        <div
                            class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <p class="text-sm font-bold text-white truncate">{{ Auth::user()->name }}</p>
                            <p class="text-[10px] text-gray-500 truncate">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center gap-3 px-4 py-2 rounded-lg text-sm font-medium text-red-400 hover:bg-red-400/10 transition-colors">
                            <i class="fas fa-sign-out-alt"></i>
                            Sign Out
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Workspace -->
        <div class="lg:pl-72 flex flex-col min-h-screen">
            <!-- Top Header -->
            <header
                class="h-20 bg-gray-900/50 backdrop-blur-xl border-b border-white/5 sticky top-0 z-30 flex items-center justify-between px-6 lg:px-10">
                <div class="flex items-center gap-4">
                    <button @click="sidebarOpen = true"
                        class="lg:hidden p-2 text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h2 class="text-xl font-bold text-white">
                        {{ $header ?? 'Dashboard' }}
                    </h2>
                </div>

                <div class="flex items-center gap-6">
                    <!-- Notifications/Alerts can go here -->
                    <div class="hidden sm:flex text-right flex-col">
                        <span
                            class="text-xs text-gray-500 font-bold uppercase tracking-wider">{{ date('D, d M Y') }}</span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6 lg:p-10">
                <div class="animate-fade-in">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>
