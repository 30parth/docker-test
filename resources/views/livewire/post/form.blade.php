<div class="max-w-2xl mx-auto py-8 px-4">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Create New Post</h1>
        <a href="/post" wire:navigate class="text-blue-600 hover:underline">&larr; Back to Posts</a>
    </div>

    <form wire:submit="submit" class="bg-white p-6 rounded-lg shadow border border-gray-100 space-y-6">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Post Title</label>
            <input type="text" id="title" wire:model="form.title" class="px-4 py-2 w-full border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500 shadow-sm" placeholder="Enter an engaging title">
            @error('form.title') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="body" class="block text-sm font-medium text-gray-700 mb-1">Post Content</label>
            <textarea id="body" wire:model="form.body" rows="6" class="px-4 py-2 w-full border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500 shadow-sm" placeholder="What's on your mind?"></textarea>
            @error('form.body') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700 transition">
                <span wire:loading.remove wire:target="submit">Save Post</span>
                <span wire:loading wire:target="submit">Saving...</span>
            </button>
        </div>
    </form>
</div>
