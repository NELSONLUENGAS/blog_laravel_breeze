{{-- @component('components.layout')
    <h1>Welcome</h1>
@endcomponent --}}

<x-blog-layout meta-title="Home | [Welcome]" meta-description="The home page">
    <section class="bg-gray-900 text-white py-12">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-cyan-400">
                Welcome
            </h1>
            <p class="mt-2 text-lg text-gray-300">
                A place where you can find the best content and resources.
            </p>
        </div>
    </section>

    <div class="container mx-auto px-4 py-12 grid grid-cols-1 lg:grid-cols-4 gap-8">
        <div class="col-span-3 space-y-6">
            <p class="text-xl text-gray-700">
                Welcome to our blog! Explore our latest posts, discover new topics, and enjoy the knowledge shared here.
            </p>

        </div>

        <x-slot:sidebar>
            <div class="absolute top-1 right-0 z-10">
                <button id="sidebarToggle" class="text-white hover:text-cyan-400">
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>

            <div id="sidebarContent" class="space-y-6">
                <h3 id="sidebarTitle" class="text-2xl font-semibold text-cyan-400 mb-4">Sidebar</h3>

                <nav>
                    <ul class="space-y-4">
                        <!-- Sección 1 -->
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-home text-cyan-400"></i>
                            <span class="text-gray-300">Home</span>
                        </li>

                        <!-- Sección 2 -->
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-blog text-cyan-400"></i>
                            <span class="text-gray-300">Blog</span>
                        </li>

                        <!-- Sección 3 -->
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-users text-cyan-400"></i>
                            <span class="text-gray-300">Team</span>
                        </li>

                        <!-- Sección 4 -->
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-cogs text-cyan-400"></i>
                            <span class="text-gray-300">Settings</span>
                        </li>
                    </ul>
                </nav>
            </div>
        </x-slot:sidebar>
    </div>
</x-blog-layout>
