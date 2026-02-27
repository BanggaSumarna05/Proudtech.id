<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', \App\Models\Setting::get('company_name', config('app.name', 'Proud Tech'))) - @yield('tagline', \App\Models\Setting::get('company_tagline', 'Solusi Digital Premium'))</title>
    <meta name="description" content="@yield('meta_description', \App\Models\Setting::get('meta_description', 'Agensi digital spesialis pembangunan produk digital performa tinggi dan identitas brand premium.'))">
    <meta name="keywords"
        content="digital agency indonesia, jasa pembuatan website premium, software developer jakarta, agensi kreatif, pengembangan aplikasi web">
    <meta name="author" content="Proud Tech">
    <meta name="robots" content="index, follow">

    @php
        $logo = \App\Models\Setting::get('company_logo');
        $favicon = \App\Models\Setting::get('company_favicon');
    @endphp

    @if ($favicon)
        <link rel="icon" type="image/x-icon"
            href="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($favicon) }}">
    @endif

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', \App\Models\Setting::get('company_name', 'Proud Tech'))">
    <meta property="og:description" content="@yield('meta_description', \App\Models\Setting::get('meta_description', 'Membangun masa depan produk digital dengan presisi dan desain premium.'))">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', \App\Models\Setting::get('company_name', 'Proud Tech'))">
    <meta property="twitter:description" content="@yield('meta_description', \App\Models\Setting::get('meta_description', 'Membangun masa depan produk digital dengan presisi dan desain premium.'))">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Organization",
      "name": "{{ \App\Models\Setting::get('company_name', 'Proud Tech') }}",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logo.png') }}",
      "description": "{{ \App\Models\Setting::get('meta_description', 'Agensi digital spesialis pembangunan produk digital performa tinggi.') }}",
      "sameAs": [
        "{{ \App\Models\Setting::get('instagram', '#') }}",
        "{{ \App\Models\Setting::get('linkedin', '#') }}",
        "{{ \App\Models\Setting::get('github', '#') }}"
      ],
      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": "{{ \App\Models\Setting::get('whatsapp_number', '') }}",
        "contactType": "customer service",
        "email": "{{ \App\Models\Setting::get('company_email', '') }}",
        "areaServed": "ID",
        "availableLanguage": ["Indonesian", "English"]
      }
    }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .text-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #6366f1 50%, #a855f7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: gradient-shift 8s linear infinite;
        }

        @keyframes gradient-shift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .bg-mesh {
            background-image:
                radial-gradient(at 0% 0%, rgba(59, 130, 246, 0.1) 0, transparent 50%),
                radial-gradient(at 100% 100%, rgba(168, 85, 247, 0.1) 0, transparent 50%);
        }

        .nav-link-active::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, #3b82f6, #a855f7);
            border-radius: 99px;
        }

        .glow-blue {
            filter: drop-shadow(0 0 15px rgba(59, 130, 246, 0.3));
        }

        /* Custom Cursor */
        .cursor-follower {
            position: fixed;
            width: 40px;
            height: 40px;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.1s ease-out, opacity 0.3s ease;
            transform: translate(-50%, -50%);
            backdrop-filter: blur(4px);
        }

        .cursor-dot {
            position: fixed;
            width: 6px;
            height: 6px;
            background: #3b82f6;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 15px #3b82f6;
        }

        @media (max-width: 768px) {

            .cursor-follower,
            .cursor-dot {
                display: none;
            }
        }
    </style>
</head>

<body class="antialiased bg-[#020617] text-slate-300 min-h-screen selection:bg-blue-500/30 selection:text-white">
    <!-- Background System -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-[#020617]"></div>
        <div class="absolute top-0 right-[-10%] w-[60%] h-[60%] bg-blue-600/5 rounded-full blur-[120px] animate-pulse">
        </div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[50%] h-[50%] bg-indigo-600/5 rounded-full blur-[120px] animate-pulse"
            style="animation-delay: 1s;">
        </div>
        <div class="absolute top-[20%] left-[-5%] w-[30%] h-[30%] bg-purple-600/5 rounded-full blur-[120px] animate-pulse"
            style="animation-delay: 2s;"></div>
    </div>

    <!-- Navigation -->
    <nav x-data="{ mobileMenu: false }"
        class="fixed top-0 inset-x-0 z-50 border-b border-white/[0.05] transition-all duration-300"
        :class="{ 'glass shadow-2xl': true }">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        @if ($logo)
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($logo) }}"
                                alt="{{ \App\Models\Setting::get('company_name', 'Proud Tech') }}"
                                class="h-10 w-auto group-hover:scale-110 transition-transform duration-500 glow-blue">
                        @else
                            <div
                                class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/20 group-hover:scale-110 transition-all duration-500 group-hover:rotate-6">
                                <span class="text-white font-black text-xl uppercase tracking-tighter">P</span>
                            </div>
                        @endif
                        <span
                            class="text-xl font-black text-white tracking-tighter group-hover:text-blue-400 transition-colors uppercase">
                            Proud<span class="text-blue-500 group-hover:text-white transition-colors">Tech</span>
                        </span>
                    </a>
                </div>


                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-10">
                    <a href="{{ route('home') }}"
                        class="relative text-[10px] font-black uppercase tracking-[0.2em] hover:text-white transition-colors {{ request()->routeIs('home') ? 'text-white nav-link-active' : 'text-slate-500' }}">Beranda</a>
                    <a href="{{ route('services.index') }}"
                        class="relative text-[10px] font-black uppercase tracking-[0.2em] hover:text-white transition-colors {{ request()->routeIs('services.*') ? 'text-white nav-link-active' : 'text-slate-500' }}">Layanan</a>
                    <a href="{{ route('portfolio.index') }}"
                        class="relative text-[10px] font-black uppercase tracking-[0.2em] hover:text-white transition-colors {{ request()->routeIs('portfolio.*') ? 'text-white nav-link-active' : 'text-slate-500' }}">Portofolio</a>
                    <a href="{{ route('about') }}"
                        class="relative text-[10px] font-black uppercase tracking-[0.2em] hover:text-white transition-colors {{ request()->routeIs('about') ? 'text-white nav-link-active' : 'text-slate-500' }}">Profil</a>

                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 bg-white text-black hover:bg-slate-100 rounded-full text-[10px] font-black uppercase tracking-[0.2em] transition-all hover:scale-105 active:scale-95 shadow-xl shadow-white/5">
                        Mulai Proyek
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu" type="button"
                        class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-gray-400 hover:text-white transition-all">
                        <svg x-show="!mobileMenu" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M12 12h8M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenu" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-8"
            class="md:hidden fixed inset-x-0 top-20 glass border-t border-white/[0.05] p-8 space-y-8 shadow-2xl z-40 h-[calc(100vh-5rem)] overflow-y-auto"
            style="display: none;">
            <div class="flex flex-col space-y-6">
                <a href="{{ route('home') }}"
                    class="text-4xl font-black tracking-tighter uppercase {{ request()->routeIs('home') ? 'text-blue-500' : 'text-white' }}">Beranda</a>
                <a href="{{ route('services.index') }}"
                    class="text-4xl font-black tracking-tighter uppercase {{ request()->routeIs('services.*') ? 'text-blue-500' : 'text-white' }}">Layanan</a>
                <a href="{{ route('portfolio.index') }}"
                    class="text-4xl font-black tracking-tighter uppercase {{ request()->routeIs('portfolio.*') ? 'text-blue-500' : 'text-white' }}">Portofolio</a>
                <a href="{{ route('about') }}"
                    class="text-4xl font-black tracking-tighter uppercase {{ request()->routeIs('about') ? 'text-blue-500' : 'text-white' }}">Profil</a>

                <div class="pt-8 border-t border-white/5">
                    <a href="{{ route('contact') }}"
                        class="block w-full py-6 bg-white text-black rounded-2xl text-center font-black text-xs uppercase tracking-[0.2em] shadow-xl active:scale-95 transition-transform">
                        Mulai Proyek
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="relative z-10 pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-[#080808] border-t border-white/[0.05] py-20 md:pt-32 md:pb-12 relative overflow-hidden">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-24">
                <div class="lg:col-span-5">
                    <div class="flex items-center gap-3 mb-8">
                        @if ($logo = \App\Models\Setting::get('company_logo'))
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($logo) }}"
                                class="h-10 w-auto glow-blue">
                        @else
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center shadow-2xl shadow-blue-500/20">
                                <span class="text-white font-black text-2xl">P</span>
                            </div>
                        @endif
                        <span
                            class="text-3xl font-black text-white tracking-tighter uppercase">{{ \App\Models\Setting::get('company_name', 'Proud Tech') }}</span>
                    </div>
                    <p class="text-slate-500 text-lg leading-relaxed max-w-md mb-10">
                        {{ \App\Models\Setting::get('meta_description', 'Membangun masa depan produk digital dengan presisi, gairah, dan desain premium.') }}
                    </p>
                </div>
                <div class="lg:col-span-2">
                    <h4 class="text-white font-black uppercase tracking-widest text-[10px] mb-8">Eksplorasi</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('home') }}"
                                class="text-slate-500 hover:text-white transition-colors text-sm font-bold uppercase tracking-widest">Beranda</a>
                        </li>
                        <li><a href="{{ route('services.index') }}"
                                class="text-slate-500 hover:text-white transition-colors text-sm font-bold uppercase tracking-widest">Layanan</a>
                        </li>
                        <li><a href="{{ route('portfolio.index') }}"
                                class="text-slate-500 hover:text-white transition-colors text-sm font-bold uppercase tracking-widest">Portofolio</a>
                        </li>
                    </ul>
                </div>
                <div class="lg:col-span-2">
                    <h4 class="text-white font-black uppercase tracking-widest text-[10px] mb-8">Informasi</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('about') }}"
                                class="text-slate-500 hover:text-white transition-colors text-sm font-bold uppercase tracking-widest">Tentang</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                                class="text-slate-500 hover:text-white transition-colors text-sm font-bold uppercase tracking-widest">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="lg:col-span-3">
                    <h4 class="text-white font-black uppercase tracking-widest text-[10px] mb-8">Sosial</h4>
                    <div class="flex gap-6 mb-10">
                        @foreach ([['icon' => 'fab fa-instagram', 'key' => 'instagram'], ['icon' => 'fab fa-linkedin-in', 'key' => 'linkedin'], ['icon' => 'fab fa-github', 'key' => 'github']] as $social)
                            <a href="{{ \App\Models\Setting::get($social['key'], '#') }}"
                                class="text-slate-600 hover:text-white text-xl transition-all hover:scale-125">
                                <i class="{{ $social['icon'] }}"></i>
                            </a>
                        @endforeach
                    </div>
                    <h4 class="text-white font-black uppercase tracking-widest text-[10px] mb-8">Saluran Langsung</h4>
                    <div class="space-y-6">
                        <a href="mailto:{{ \App\Models\Setting::get('company_email', 'hello@proudtech.id') }}"
                            class="group flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <p
                                    class="text-[10px] font-bold text-gray-600 uppercase tracking-widest leading-none mb-1">
                                    Kirim Email</p>
                                <p class="text-white font-bold group-hover:text-blue-400 transition-colors">
                                    {{ \App\Models\Setting::get('company_email', 'hello@proudtech.id') }}</p>
                            </div>
                        </a>
                        <a href="{{ \App\Models\Setting::whatsappUrl() }}" class="group flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-2xl bg-green-500/10 flex items-center justify-center text-green-500 group-hover:bg-green-500 group-hover:text-white transition-all duration-300">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <p
                                    class="text-[10px] font-bold text-gray-600 uppercase tracking-widest leading-none mb-1">
                                    Hotline WhatsApp</p>
                                <p class="text-white font-bold group-hover:text-green-400 transition-colors">
                                    {{ \App\Models\Setting::get('whatsapp_number', '+62 812 3456 7890') }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="pt-12 border-t border-white/[0.05] flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-gray-600 text-xs font-medium">
                    &copy; {{ date('Y') }} {{ \App\Models\Setting::get('company_name', 'Proud Tech') }}.
                    Didesain dengan presisi.
                </p>
                <div class="flex gap-8">
                    <a href="#"
                        class="text-gray-600 hover:text-white text-[10px] font-bold uppercase tracking-widest transition-colors">Protokol
                        Privasi</a>
                    <a href="#"
                        class="text-gray-600 hover:text-white text-[10px] font-bold uppercase tracking-widest transition-colors">Ketentuan
                        Layanan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Action -->
    <a href="{{ \App\Models\Setting::whatsappUrl() }}" target="_blank" class="fixed bottom-10 right-10 z-50 group">
        <div
            class="absolute inset-0 bg-green-500 rounded-full blur-xl group-hover:blur-2xl opacity-40 group-hover:opacity-60 transition-all duration-500">
        </div>
        <div
            class="relative w-16 h-16 bg-green-500 rounded-full flex items-center justify-center shadow-2xl hover:scale-110 active:scale-95 transition-all duration-500">
            <i class="fab fa-whatsapp text-white text-3xl"></i>
            <span
                class="absolute right-full mr-6 py-3 px-6 glass border border-white/10 text-white rounded-2xl text-[10px] font-black uppercase tracking-[0.2em] whitespace-nowrap opacity-0 group-hover:opacity-100 transition-all duration-500 pointer-events-none translate-x-4 group-hover:translate-x-0">
                Hubungi Ahli Kami
            </span>
        </div>
    </a>
    <!-- Custom Cursor Elements -->
    <div class="cursor-dot"></div>
    <div class="cursor-follower"></div>

    <!-- AOS & Custom Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-out-expo'
        });

        // Custom Cursor Logic
        const dot = document.querySelector('.cursor-dot');
        const follower = document.querySelector('.cursor-follower');

        window.addEventListener('mousemove', (e) => {
            dot.style.left = e.clientX + 'px';
            dot.style.top = e.clientY + 'px';

            setTimeout(() => {
                follower.style.left = e.clientX + 'px';
                follower.style.top = e.clientY + 'px';
            }, 50);
        });

        // Hover Effect for links
        document.querySelectorAll('a, button').forEach(link => {
            link.addEventListener('mouseenter', () => {
                follower.style.transform = 'translate(-50%, -50%) scale(1.5)';
                follower.style.background = 'rgba(59, 130, 246, 0.2)';
            });
            link.addEventListener('mouseleave', () => {
                follower.style.transform = 'translate(-50%, -50%) scale(1)';
                follower.style.background = 'rgba(59, 130, 246, 0.1)';
            });
        });
    </script>
</body>

</html>
