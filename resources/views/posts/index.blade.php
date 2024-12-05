<x-blog-layout meta-title="Blog | [Blog]" meta-description="The blog page">
    <section class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8 text-gray-800 dark:text-gray-200">Blog</h1>

        @auth
            <div class="py-3 flex justify-center">
                <a class="rounded bg-lime-500 p-3 text-center w-full max-w-xs text-white font-semibold hover:bg-lime-600 transition-colors duration-300"
                    href="{{ route('posts.create') }}">
                    Crear Post
                </a>
            </div>
        @endauth

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach ($posts as $post)
                <div
                    class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <a href="{{ route('posts.show', $post->id) }}" class="block p-4">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2">
                            {{ $post->title }}
                        </h2>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            {{ Str::limit($post->content, 100) }}
                        </p>
                    </a>

                    @auth
                        <div class="flex">
                            <a href="{{ route('posts.edit', $post) }}"
                                class="flex-1 bg-blue-700 text-white text-center py-2 rounded-bl hover:bg-blue-800 transition-colors duration-300">
                                {{ __('Edit') }}
                            </a>
                            <form action="{{ route('posts.destroy', $post) }}" method="post" class="flex-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full bg-red-600 text-white text-center py-2 rounded-br hover:bg-red-700 transition-colors duration-300">
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        </div>
                    @endauth

                </div>
            @endforeach
        </div>
    </section>
</x-blog-layout>
