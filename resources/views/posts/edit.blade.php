<x-app-layout meta-title="Update Post | [Blog]" meta-description="Update your post quickly">
    <div class="max-w-3xl w-full mx-auto flex flex-col items-center px-4 py-8">
        <!-- Título del post -->
        <h1 class="text-4xl font-bold text-gray-300 mb-6 text-center">
            {{ __('Update Post') }}
        </h1>

        <div class="w-full max-w-lg">
            <form action="{{ route('posts.update', $post) }}" method="POST"
                class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf @method('PATCH')
                @include('posts.form-fields')
                <div class="flex items-center justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"
                        type="submit">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
