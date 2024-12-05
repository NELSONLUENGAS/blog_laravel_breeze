<header class="bg-gray-900 p-3 w-full fixed top-0 z-10 relative">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('welcome') }}" class="text-2xl font-bold text-cyan-400">
            El Rincón Luminoso
        </a>

        <!-- Menu Desktop -->
        <nav class="hidden md:flex gap-6">
            <ul class="flex gap-4 text-gray-200">
                <li>
                    <a class="hover:text-cyan-400 transition {{ request()->routeIs('welcome') ? 'text-cyan-400' : '' }}"
                        href="{{ route('welcome') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a class="hover:text-cyan-400 transition {{ request()->routeIs('posts.*') ? 'text-cyan-400' : '' }}"
                        href="{{ route('posts.index') }}">
                        Blog
                    </a>
                </li>
                <li>
                    <a class="hover:text-cyan-400 transition {{ request()->routeIs('nosotros') ? 'text-cyan-400' : '' }}"
                        href="{{ route('nosotros') }}">
                        Nosotros
                    </a>
                </li>
                <li>
                    <a class="hover:text-cyan-400 transition {{ request()->routeIs('contacto') ? 'text-cyan-400' : '' }}"
                        href="{{ route('contacto') }}">
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Menu Toggle (Mobile) -->
        <button class="block md:hidden text-cyan-400 hover:text-cyan-300" id="menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Mobile Menu -->
        <nav class="absolute top-[100%] left-0 w-full bg-gray-900 shadow-lg hidden flex-col items-center gap-4 p-4 md:hidden"
            id="mobile-menu">
            <ul class="flex flex-col gap-4 text-gray-200">
                <li>
                    <a class="hover:text-cyan-400 transition {{ request()->routeIs('welcome') ? 'text-cyan-400' : '' }}"
                        href="{{ route('welcome') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a class="hover:text-cyan-400 transition {{ request()->routeIs('posts.*') ? 'text-cyan-400' : '' }}"
                        href="{{ route('posts.index') }}">
                        Blog
                    </a>
                </li>
                <li>
                    <a class="hover:text-cyan-400 transition {{ request()->routeIs('nosotros') ? 'text-cyan-400' : '' }}"
                        href="{{ route('nosotros') }}">
                        Nosotros
                    </a>
                </li>
                <li>
                    <a class="hover:text-cyan-400 transition {{ request()->routeIs('contacto') ? 'text-cyan-400' : '' }}"
                        href="{{ route('contacto') }}">
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
