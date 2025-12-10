@extends('layouts.tailwind-app')

@section('content')
    <div class="max-w-5xl mx-auto space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-semibold text-gray-800">{{ $literature->title }}</h1>
                @if($literature->author)
                    <p class="text-gray-600">by {{ $literature->author }}</p>
                @endif
                @if($literature->rating)
                    <span class="inline-block mt-2 px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">Rating: {{ number_format($literature->rating, 1) }}</span>
                @endif
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('literatures.edit', $literature) }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Edit</a>
                <form action="{{ route('literatures.destroy', $literature) }}" method="POST" onsubmit="return confirm('Delete this literature?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-100 text-red-600 rounded-md hover:bg-red-200 transition">Delete</button>
                </form>
                <a href="{{ route('literatures.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100 transition">Back</a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow overflow-hidden">
            @if($literature->cover)
                <img src="{{ $literature->cover }}" alt="{{ $literature->title }} cover" class="w-full h-80 object-cover">
            @endif

            <div class="p-6 space-y-5">
                @if($literature->description)
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">Description</h2>
                        <p class="text-gray-600 leading-relaxed">{{ $literature->description }}</p>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                    <div><span class="font-medium text-gray-700">Edition:</span> {{ $literature->year_edition ?? '—' }}</div>
                    <div><span class="font-medium text-gray-700">Bookmarks:</span> {{ number_format($literature->total_bookmarked ?? 0) }}</div>
                    <div><span class="font-medium text-gray-700">Licensing Type:</span> {{ $literature->licensing_type ?? '—' }}</div>
                    <div><span class="font-medium text-gray-700">Community ID:</span> {{ $literature->community_id ?? '—' }}</div>
                </div>

                @if($literature->tags)
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">Tags</h2>
                        <div class="flex flex-wrap gap-2 mt-2">
                            @foreach($literature->tags as $tag)
                                <span class="inline-block px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">
                                    {{ is_array($tag) && isset($tag['name']) ? $tag['name'] : (is_string($tag) ? $tag : 'Tag') }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($literature->copy_types)
                    <div class="space-y-2">
                        <h2 class="text-lg font-semibold text-gray-800">Copy Types</h2>
                        <ul class="space-y-3 list-disc list-inside text-gray-600">
                            @foreach($literature->copy_types as $key => $copy)
                                @php
                                    $label = is_string($key) ? $key : ($copy['type'] ?? 'Unknown');
                                    $description = $copy['description'] ?? null;
                                    $sources = isset($copy['sources']) && is_array($copy['sources']) ? $copy['sources'] : [];
                                @endphp
                                <li>
                                    <span class="font-medium text-gray-700">{{ $label }}</span>
                                    @if($description)
                                        <p class="text-xs text-gray-500">{{ $description }}</p>
                                    @endif

                                    @if($sources)
                                        <ul class="mt-2 space-y-1 list-disc list-inside text-xs text-gray-500">
                                            @foreach($sources as $source)
                                                @php
                                                    $sourceName = is_array($source) ? ($source['name'] ?? 'Source') : $source;
                                                    $sourceUrl = is_array($source) ? ($source['url'] ?? null) : null;
                                                @endphp
                                                <li>
                                                    {{ $sourceName }}
                                                    @if($sourceUrl)
                                                        – <a href="{{ $sourceUrl }}" target="_blank" class="text-blue-600 hover:underline">{{ $sourceUrl }}</a>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($literature->sources)
                    <div class="space-y-2">
                        <h2 class="text-lg font-semibold text-gray-800">Sources</h2>
                        <ul class="space-y-1 list-disc list-inside text-gray-600">
                            @foreach($literature->sources as $source)
                                <li>
                                    {{ $source['name'] ?? 'Source' }}
                                    @if(!empty($source['url']))
                                        – <a href="{{ $source['url'] }}" target="_blank" class="text-blue-600 hover:underline">{{ $source['url'] }}</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($literature->twitter_embeds)
                    <div class="space-y-2">
                        <h2 class="text-lg font-semibold text-gray-800">Twitter Embeds</h2>
                        <ul class="space-y-1 list-disc list-inside text-gray-600">
                            @foreach($literature->twitter_embeds as $embed)
                                @php
                                    $embedUrl = is_array($embed) ? ($embed['embed_url'] ?? null) : (is_string($embed) ? $embed : null);
                                    $label = is_array($embed) ? ($embed['keyword'] ?? $embedUrl ?? 'Embed') : $embedUrl;
                                @endphp
                                @if($embedUrl)
                                    <li><a href="{{ $embedUrl }}" target="_blank" class="text-blue-600 hover:underline">{{ $label }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($literature->related_posts)
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">Related Posts</h2>
                        <div class="flex flex-wrap gap-2 mt-2 text-sm text-gray-600">
                            @foreach($literature->related_posts as $postId)
                                <span class="inline-flex items-center px-2 py-1 bg-gray-100 rounded">#{{ $postId }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
