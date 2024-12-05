<x-blog-layout meta-title="{{ $post->title }} | [Blog]" meta-description="{{ $post->content }}">
    <div class="max-w-3xl mx-auto px-4 py-8">
        <!-- Título del post -->
        <h1 class="text-4xl font-bold text-gray-300 mb-6 text-center">
            {{ $post->title }}
        </h1>

        <!-- Imagen destacada -->
        @if ($post->image)
            <div class="mb-6">
                <img src="{{ $post->image }}" alt="Image for {{ $post->title }}"
                    class="w-full h-64 object-cover rounded-lg shadow-lg">
            </div>
        @endif

        <!-- Contenido del post -->
        <div class="bg-gray-800 shadow-md rounded-lg p-6 mb-6">
            <p class="text-gray-300 text-lg leading-relaxed">
                {{ $post->content }}
            </p>
        </div>

        <!-- Información adicional: Fecha y Autor -->
        <div class="text-gray-500 text-sm mb-4">
            <p class="text-center">
                <span>{{ __('Posted on') }} {{ $post->created_at->format('M d, Y') }}</span>
                @if ($post->user)
                    <span class="ml-2">{{ __('by') }} {{ $post->user->name }}</span>
                @endif
            </p>
        </div>

        <!-- Botón para volver al blog -->
        <div class="mt-6 text-center">
            <a href="{{ route('posts.index') }}"
                class="inline-block bg-cyan-500 text-white px-6 py-3 rounded-md shadow hover:bg-cyan-600 transition duration-300">
                {{ __('Back to Blog') }}
            </a>
        </div>
    </div>
</x-blog-layout>
