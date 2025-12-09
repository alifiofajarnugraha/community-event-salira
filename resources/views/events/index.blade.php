@extends('layouts.tailwind-app')

@section('content')
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-6">
        <div class="flex items-center gap-3">
            <h1 class="text-2xl font-semibold text-gray-800">Events</h1>
            <a href="{{ route('landing') }}" class="px-4 py-2 border border-gray-300 text-gray-600 rounded shadow-sm hover:bg-gray-100 transition">Landing Page</a>
        </div>
        <a href="{{ route('events.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded shadow">Create Event</a>
    </div>

    @if(session('status'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('status') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($events as $event)
            <div class="bg-white rounded-xl shadow overflow-hidden flex flex-col">
                <div class="h-40 bg-gray-200">
                    @if($event->image)
                        <img src="{{ $event->image }}" alt="{{ $event->title }} image" class="w-full h-full object-cover">
                    @else
                        <div class="flex items-center justify-center h-full text-gray-400 text-sm">Belum ada gambar</div>
                    @endif
                </div>
                <div class="p-5 flex flex-col gap-3 flex-1">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">
                            <a href="{{ route('events.show', $event) }}" class="hover:text-blue-600 transition">{{ $event->title }}</a>
                        </h2>
                        @if($event->subtitle)
                            <p class="text-sm text-gray-600 italic">{{ $event->subtitle }}</p>
                        @endif
                        <p class="text-sm text-gray-500">{{ optional($event->date)->format('d M Y H:i') }}</p>
                        @if($event->category)
                            <span class="inline-block px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full mt-1">{{ $event->category }}</span>
                        @endif
                    </div>
                    <p class="text-gray-600 text-sm flex-1">{{ $event->description ? \Illuminate\Support\Str::limit($event->description, 120) : 'Deskripsi belum tersedia.' }}</p>
                    <div class="text-sm text-gray-500">
                        <span class="font-medium text-gray-700">Lokasi:</span> {{ $event->location ?? 'Belum ditentukan' }}
                    </div>
                    @if($event->community_name)
                        <div class="text-sm text-gray-500">
                            <span class="font-medium text-gray-700">Komunitas:</span> {{ $event->community_name }}
                        </div>
                    @endif
                    @if($event->tags && count($event->tags) > 0)
                        <div class="flex flex-wrap gap-1 mt-2">
                            @foreach($event->tags as $tag)
                                <span class="inline-block px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="px-5 pb-5 flex items-center gap-2">
                    <a href="{{ route('events.show', $event) }}" class="px-4 py-2 bg-green-600 text-white text-sm rounded-lg hover:bg-green-700 transition">View</a>
                    <a href="{{ route('events.edit', $event) }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">Edit</a>
                    <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline" onsubmit="return confirm('Delete this event?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-100 text-red-600 text-sm rounded-lg hover:bg-red-200 transition">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500 bg-white rounded-xl shadow p-8">No events found.</div>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $events->links() }}
    </div>
@endsection
