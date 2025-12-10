@php
    $literature = $literature ?? null;
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="space-y-4">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title *</label>
            <input id="title" name="title" type="text" value="{{ old('title', $literature->title ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('title')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
            <input id="author" name="author" type="text" value="{{ old('author', $literature->author ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('author')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="cover" class="block text-sm font-medium text-gray-700">Cover URL</label>
            <input id="cover" name="cover" type="url" value="{{ old('cover', $literature->cover ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('cover')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="rating" class="block text-sm font-medium text-gray-700">Rating (0-5)</label>
            <input id="rating" name="rating" type="number" step="0.1" min="0" max="5" value="{{ old('rating', $literature->rating ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('rating')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('description', $literature->description ?? '') }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="space-y-4">
        <div>
            <label for="year_edition" class="block text-sm font-medium text-gray-700">Edition / Year</label>
            <input id="year_edition" name="year_edition" type="text" value="{{ old('year_edition', $literature->year_edition ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('year_edition')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="total_bookmarked" class="block text-sm font-medium text-gray-700">Total Bookmarked</label>
            <input id="total_bookmarked" name="total_bookmarked" type="number" min="0" value="{{ old('total_bookmarked', $literature->total_bookmarked ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('total_bookmarked')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="licensing_type" class="block text-sm font-medium text-gray-700">Licensing Type</label>
            <input id="licensing_type" name="licensing_type" type="text" value="{{ old('licensing_type', $literature->licensing_type ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('licensing_type')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="community_id" class="block text-sm font-medium text-gray-700">Community ID</label>
            <input id="community_id" name="community_id" type="text" value="{{ old('community_id', $literature->community_id ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('community_id')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="tags_input" class="block text-sm font-medium text-gray-700">Tags JSON</label>
            <textarea id="tags_input" name="tags_input" rows="3" placeholder='["design", "marketing"]' class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('tags_input', $literature?->tags ? json_encode($literature->tags) : '') }}</textarea>
            <p class="mt-1 text-xs text-gray-500">Provide valid JSON; leave blank to keep existing data.</p>
            @error('tags_input')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
    <div class="space-y-4">
        <div>
            <label for="copy_types_input" class="block text-sm font-medium text-gray-700">Copy Types JSON</label>
            <textarea id="copy_types_input" name="copy_types_input" rows="3" placeholder='[{"type": "pdf", "url": "https://"}]' class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('copy_types_input', $literature?->copy_types ? json_encode($literature->copy_types) : '') }}</textarea>
            <p class="mt-1 text-xs text-gray-500">Use JSON objects describing each copy type.</p>
            @error('copy_types_input')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="sources_input" class="block text-sm font-medium text-gray-700">Sources JSON</label>
            <textarea id="sources_input" name="sources_input" rows="3" placeholder='[{"name": "Source", "url": "https://"}]' class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('sources_input', $literature?->sources ? json_encode($literature->sources) : '') }}</textarea>
            @error('sources_input')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="space-y-4">
        <div>
            <label for="twitter_embeds_input" class="block text-sm font-medium text-gray-700">Twitter Embeds JSON</label>
            <textarea id="twitter_embeds_input" name="twitter_embeds_input" rows="3" placeholder='["https://twitter.com/...", "..."]' class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('twitter_embeds_input', $literature?->twitter_embeds ? json_encode($literature->twitter_embeds) : '') }}</textarea>
            @error('twitter_embeds_input')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="related_posts_input" class="block text-sm font-medium text-gray-700">Related Post IDs</label>
            <textarea id="related_posts_input" name="related_posts_input" rows="3" placeholder="1, 2, 3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('related_posts_input', $literature?->related_posts ? implode(', ', $literature->related_posts) : '') }}</textarea>
            <p class="mt-1 text-xs text-gray-500">Comma-separated list of post IDs.</p>
            @error('related_posts_input')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>

<div class="mt-6 flex items-center justify-end gap-3">
    <a href="{{ route('literatures.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100 transition">Cancel</a>
    <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700 transition">Save</button>
</div>
