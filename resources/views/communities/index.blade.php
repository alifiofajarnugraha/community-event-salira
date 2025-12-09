@extends('layouts.tailwind-app')

@section('content')
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-6">
        <div class="flex items-center gap-3">
            <h1 class="text-2xl font-semibold text-gray-800">Communities</h1>
            <a href="{{ route('landing') }}" class="px-4 py-2 border border-gray-300 text-gray-600 rounded shadow-sm hover:bg-gray-100 transition">Landing Page</a>
        </div>
        <a href="{{ route('communities.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded shadow">Create Community</a>
    </div>

    @if(session('status'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('status') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($communities as $community)
            <div class="bg-white rounded-xl shadow overflow-hidden flex flex-col" style="border-top: 4px solid {{ $community->accent ?? '#E6F2FF' }}">
                <div class="h-40 bg-gray-200">
                    @if($community->cover)
                        <img src="{{ $community->cover }}" alt="{{ $community->name }} cover" class="w-full h-full object-cover">
                    @else
                        <div class="flex items-center justify-center h-full text-gray-400 text-sm">Belum ada cover</div>
                    @endif
                </div>
                <div class="p-5 flex flex-col gap-3 flex-1">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                @if($community->icon)
                                    <span class="w-6 h-6 bg-gray-100 rounded-full flex items-center justify-center text-xs">{{ $community->icon }}</span>
                                @endif
                                <h2 class="text-lg font-semibold text-gray-800">
                                    <a href="{{ route('communities.show', $community) }}" class="hover:text-blue-600 transition">{{ $community->name }}</a>
                                </h2>
                                @if($community->is_joined)
                                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Joined</span>
                                @endif
                            </div>
                            @if($community->subtitle)
                                <p class="text-sm text-gray-600 italic mb-1">{{ $community->subtitle }}</p>
                            @endif
                            @if($community->event_tag)
                                <span class="inline-block px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full mb-2">{{ $community->event_tag }}</span>
                            @endif
                        </div>
                        @if($community->members)
                            <div class="text-right">
                                <p class="text-sm font-medium text-gray-700">{{ $community->members }}</p>
                                <p class="text-xs text-gray-500">members</p>
                            </div>
                        @endif
                    </div>
                    
                    <p class="text-gray-600 text-sm flex-1">{{ $community->description ? \Illuminate\Support\Str::limit($community->description, 120) : 'Deskripsi belum tersedia.' }}</p>
                    
                    @if($community->tags && count($community->tags) > 0)
                        <div class="flex flex-wrap gap-1">
                            @foreach(array_slice($community->tags, 0, 3) as $tag)
                                <span class="inline-block px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">{{ $tag }}</span>
                            @endforeach
                            @if(count($community->tags) > 3)
                                <span class="text-xs text-gray-500">+{{ count($community->tags) - 3 }} more</span>
                            @endif
                        </div>
                    @endif

                    <div class="flex justify-between text-sm text-gray-500 mt-2">
                        @if($community->posts_today)
                            <span>{{ $community->posts_today }} posts today</span>
                        @endif
                        @if($community->location)
                            <span>📍 {{ \Illuminate\Support\Str::limit($community->location, 20) }}</span>
                        @endif
                    </div>

                    @if($community->statistics)
                        <div class="grid grid-cols-2 gap-2 text-xs text-gray-600 bg-gray-50 p-2 rounded">
                            <div>Posts: {{ $community->statistics['totalPosts'] ?? 0 }}</div>
                            <div>Growth: {{ $community->statistics['monthlyGrowth'] ?? 'N/A' }}</div>
                        </div>
                    @endif
                </div>
                <div class="px-5 pb-5 flex items-center gap-2">
                    <a href="{{ route('communities.show', $community) }}" class="px-4 py-2 bg-green-600 text-white text-sm rounded-lg hover:bg-green-700 transition">View</a>
                    <a href="{{ route('communities.edit', $community) }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">Edit</a>
                    <form action="{{ route('communities.destroy', $community) }}" method="POST" class="inline" onsubmit="return confirm('Delete this community?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-100 text-red-600 text-sm rounded-lg hover:bg-red-200 transition">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500 bg-white rounded-xl shadow p-8">No communities found.</div>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $communities->links() }}
    </div>
@endsection
