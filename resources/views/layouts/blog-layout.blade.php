<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}" /> <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/8c0839d651.js" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/script.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('layouts.partials.nav')

    @session('status')
        <div
            class="bg-green-700 text-white rounded-lg p-4 max-w-lg mx-auto text-center shadow-lg absolute left-1/2 transform -translate-x-1/2 top-10 z-50">
            {{ $value }}
        </div>
    @endsession

    <main class="bg-gray-900 min-h-screen">
        <div
            class="container mx-auto grid  {{ request()->routeIs('welcome') ? 'grid-cols-[auto,1fr]' : 'grid-cols-[auto]' }} lg:grid-rows-[1fr] gap-6 p-5">
            @isset($sidebar)
                <aside id="sidebar"
                    class="hidden lg:flex flex-col bg-gray-800 text-gray-200 p-6 rounded-lg shadow-md h-full transition-all duration-300 ease-in-out w-64">
                    <div class="text-xl font-bold text-cyan-400 border-b border-cyan-400 pb-2 mb-4 truncate">Sidebar</div>
                    <div class="space-y-4 relative">
                        {{ $sidebar }}
                    </div>
                </aside>
            @endisset

            <section class="flex flex-col p-6 bg-gray-900 text-gray-100 rounded-lg">
                {{ $slot }}
            </section>
        </div>
    </main>

    <footer class="py-8 bg-gray-900 text-center text-sm text-gray-400">
        <div class="container mx-auto space-y-6">
            <!-- Links -->
            <nav class="flex flex-wrap justify-center gap-6">
                <a href="{{ route('welcome') }}" class="hover:text-cyan-400 transition">Inicio</a>
                <a href="{{ route('posts.index') }}" class="hover:text-cyan-400 transition">Blog</a>
                <a href="{{ route('nosotros') }}" class="hover:text-cyan-400 transition">Nosotros</a>
                <a href="{{ route('contacto') }}" class="hover:text-cyan-400 transition">Contacto</a>
            </nav>

            <!-- Redes Sociales -->
            <div class="flex justify-center gap-4">
                <a href="#" class="text-gray-400 hover:text-cyan-400 transition">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-cyan-400 transition">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-cyan-400 transition">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-cyan-400 transition">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

            <!-- Copyright -->
            <p class="text-xs text-gray-500">
                &copy; {{ date('Y') }} El Rincón Luminoso. Todos los derechos reservados.
            </p>
        </div>
    </footer>
</body>

</html>
