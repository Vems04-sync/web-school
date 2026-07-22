<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v=2">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}?v=2">

    <title>{{ isset($title) ? $title . ' - SMA AL-ISLAMI' : 'SMA AL-ISLAMI - Unggul, Islami, Profesional' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome 6 (Social Media & Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        @keyframes softPulse {
            0%, 100% { opacity: 0.35; transform: scale(0.95); }
            50% { opacity: 1; transform: scale(1.05); }
        }
        .animate-soft-pulse {
            animation: softPulse 1.6s ease-in-out infinite;
        }
        @keyframes loaderBar {
            0% { width: 0%; }
            50% { width: 70%; }
            100% { width: 100%; }
        }
        .animate-loader-bar {
            animation: loaderBar 1.2s ease-in-out infinite;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    <!-- Page Loading Screen -->
    <div id="page-loader" class="fixed inset-0 z-[9999] bg-slate-900/15 backdrop-blur-md flex flex-col items-center justify-center transition-opacity duration-500 ease-out">
        <div class="relative flex flex-col items-center text-center">
            <!-- Glow effect -->
            <div class="absolute w-40 h-40 bg-emerald-100/70 rounded-full blur-2xl animate-pulse"></div>
            
            <!-- Logo Sekolah Berkedip Soft -->
            <img src="{{ Storage::url('SMA AL-ISLAMI.png') }}" alt="Loading SMA AL-ISLAMI" class="w-32 h-32 object-contain relative z-10 animate-soft-pulse drop-shadow-md">
            
            <p class="mt-4 text-xs font-bold uppercase tracking-[0.25em] text-emerald-800 animate-soft-pulse">SMA AL-ISLAMI</p>
            
            <!-- Loading Progress Bar -->
            <div class="w-28 h-1 bg-emerald-100 rounded-full mt-3 overflow-hidden">
                <div class="h-full bg-emerald-600 rounded-full animate-loader-bar"></div>
            </div>
        </div>
    </div>

    <div class="min-h-screen flex flex-col">
        <!-- Navigation Component -->
        <x-navbar />

        <!-- Page Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer Component -->
        <x-footer />
    </div>

    <!-- Script Page Loader -->
    <script>
        function hidePageLoader() {
            const loader = document.getElementById('page-loader');
            if (loader && !loader.classList.contains('opacity-0')) {
                loader.classList.add('opacity-0');
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500);
            }
        }

        window.addEventListener('load', function() {
            hidePageLoader();
        });

        // Safety fallback timeout
        setTimeout(function() {
            hidePageLoader();
        }, 1200);
    </script>
</body>
</html>
