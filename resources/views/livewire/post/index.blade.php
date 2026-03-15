<div class="max-w-4xl mx-auto py-8 px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Latest Posts</h1>
        <a href="/post/create" wire:navigate class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Create Post</a>
    </div>

    <div class="space-y-4">
        @forelse ($this->posts as $post)
            <div class="p-6 bg-white rounded-lg shadow-sm border border-gray-100">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $post->title }}</h2>
                <p class="text-gray-600">{{ $post->body }}</p>
            </div>
        @empty
            <div class="p-6 bg-gray-50 rounded-lg text-center text-gray-500">
                <p>No posts found. Start writing!</p>
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $this->posts->links() }}
    </div>
</div>
