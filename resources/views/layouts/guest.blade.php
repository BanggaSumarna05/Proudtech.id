<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Proud Tech') }} | Secure Auth</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #050505;
        }

        .text-gradient {
            background: linear-gradient(135deg, #60a5fa 0%, #818cf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>

<body class="antialiased text-gray-300">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative overflow-hidden">
        <!-- Background Decorative Glows -->
        <div
            class="absolute top-0 right-0 w-[50%] h-[50%] bg-blue-600/[0.05] rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[40%] h-[40%] bg-indigo-600/[0.05] rounded-full blur-[120px] translate-y-1/2 -translate-x-1/2">
        </div>

        <div class="relative z-10 mb-8">
            <a href="/" class="flex flex-col items-center">
                <span class="text-3xl font-black text-white tracking-tighter uppercase mb-2">Proud <span
                        class="text-gradient">Tech.</span></span>
                <span class="text-[10px] font-black uppercase tracking-[0.4em] text-gray-600">Access Terminal</span>
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-10 py-12 glass border border-white/10 shadow-2xl overflow-hidden sm:rounded-[2.5rem] relative z-10">
            {{ $slot }}
        </div>

        <div class="mt-8 text-center relative z-10">
            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-700">&copy; {{ date('Y') }} PROUD
                TECH LABS. ALL RIGHTS RESERVED.</p>
        </div>
    </div>
</body>

</html>
