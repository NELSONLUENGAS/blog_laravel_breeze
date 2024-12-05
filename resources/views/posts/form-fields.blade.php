<div class="mb-6">
    <label class="block text-gray-300 text-sm font-semibold mb-2" for="title">
        {{ __('Title') }}
    </label>
    <input
        class="block w-full px-4 py-2 text-white bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
        id="title" name="title" type="text" placeholder="Post Title" value="{{ old('title', $post->title) }}">
    @error('title')
        <p class="text-red-500 text-xs italic mt-2">
            {{ $message }}
        </p>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-300 text-sm font-semibold mb-2" for="content">
        {{ __('Content') }}
    </label>
    <textarea name="content" id="content" rows="6"
        class="block w-full px-4 py-2 text-white bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
        placeholder="Write your thoughts here...">{{ old('content', $post->content) }}</textarea>
    @error('content')
        <p class="text-red-500 text-xs italic mt-2">
            {{ $message }}
        </p>
    @enderror
</div>

<div class="mb-6">
    <label class="block text-gray-300 text-sm font-semibold mb-2" for="image">
        {{ __('Image URL') }}
    </label>
    <input
        class=" text-white block w-full px-4 py-2  bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
        id="image" name="image" type="text" placeholder="Post Image URL"
        value="{{ old('image_url', $post->image) }}">
    @error('image')
        <p class="text-red-500 text-xs italic mt-2">
            {{ $message }}
        </p>
    @enderror
</div>
