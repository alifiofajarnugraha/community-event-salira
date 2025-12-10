@extends('layouts.tailwind-app')

@section('content')
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-6">
        <div class="flex items-center gap-3">
            <h1 class="text-2xl font-semibold text-gray-800">Literature</h1>
            <a href="{{ route('landing') }}" class="px-4 py-2 border border-gray-300 text-gray-600 rounded shadow-sm hover:bg-gray-100 transition">Landing Page</a>
        </div>
        <a href="{{ route('literatures.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded shadow hover:bg-blue-700 transition">Create Literature</a>
    </div>

    @if(session('status'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('status') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($literatures as $literature)
            <div class="bg-white rounded-xl shadow overflow-hidden flex flex-col">
                <div class="h-48 bg-gray-200">
                    @if($literature->cover)
                        <img src="{{ $literature->cover }}" alt="{{ $literature->title }} cover" class="w-full h-full object-cover">
                    @else
                        <div class="flex items-center justify-center h-full text-gray-400 text-sm">No cover available</div>
                    @endif
                </div>
                <div class="p-5 flex flex-col gap-3 flex-1">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">
                            <a href="{{ route('literatures.show', $literature) }}" class="hover:text-blue-600 transition">{{ $literature->title }}</a>
                        </h2>
                        @if($literature->author)
                            <p class="text-sm text-gray-600">by {{ $literature->author }}</p>
                        @endif
                        @if($literature->rating)
                            <span class="inline-block px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full mt-1">Rating: {{ number_format($literature->rating, 1) }}</span>
                        @endif
                    </div>
                    <p class="text-gray-600 text-sm flex-1">{{ $literature->description ? \Illuminate\Support\Str::limit($literature->description, 120) : 'No description yet.' }}</p>
                    <div class="text-sm text-gray-500">
                        <span class="font-medium text-gray-700">Edition:</span> {{ $literature->year_edition ?? 'N/A' }}
                    </div>
                    <div class="text-sm text-gray-500">
                        <span class="font-medium text-gray-700">Bookmarked:</span> {{ number_format($literature->total_bookmarked ?? 0) }}
                    </div>
                    @if($literature->tags && count($literature->tags) > 0)
                        <div class="flex flex-wrap gap-1 mt-2">
                            @foreach($literature->tags as $tag)
                                <span class="inline-block px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">
                                    {{ is_array($tag) && isset($tag['name']) ? $tag['name'] : (is_string($tag) ? $tag : 'Tag') }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="px-5 pb-5 flex items-center gap-2">
                    <a href="{{ route('literatures.show', $literature) }}" class="px-4 py-2 bg-green-600 text-white text-sm rounded-lg hover:bg-green-700 transition">View</a>
                    <a href="{{ route('literatures.edit', $literature) }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">Edit</a>
                    <form action="{{ route('literatures.destroy', $literature) }}" method="POST" class="inline" onsubmit="return confirm('Delete this literature?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-100 text-red-600 text-sm rounded-lg hover:bg-red-200 transition">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500 bg-white rounded-xl shadow p-8">No literatures found.</div>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $literatures->links() }}
    </div>
@endsection
