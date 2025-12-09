@extends('layouts.tailwind-app')

@section('content')
    <div class="mb-6 flex flex-col md:flex-row md:items-start md:justify-between gap-4">
        <div class="space-y-2">
            <h1 class="text-3xl font-semibold text-gray-800">{{ $event->title }}</h1>
            @if($event->subtitle)
                <p class="text-xl text-gray-600">{{ $event->subtitle }}</p>
            @endif
        </div>
        <div class="flex gap-2">
            <a href="{{ route('events.edit', $event) }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Edit</a>
            <a href="{{ route('events.index') }}" class="px-4 py-2 border border-gray-300 text-gray-600 rounded-lg hover:bg-gray-100 transition">Back to Events</a>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow p-6 md:p-8 space-y-6">
        @if($event->image)
            <div class="mb-6">
                <img src="{{ $event->image }}" alt="{{ $event->title }}" class="w-full h-64 object-cover rounded-lg">
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div>
                    <h3 class="font-semibold text-gray-800">Date & Time</h3>
                    <p class="text-gray-600">{{ $event->date ? $event->date->format('M d, Y \a\t H:i') : 'Not set' }}</p>
                </div>

                @if($event->location)
                    <div>
                        <h3 class="font-semibold text-gray-800">Location</h3>
                        <p class="text-gray-600">{{ $event->location }}</p>
                    </div>
                @endif

                @if($event->category)
                    <div>
                        <h3 class="font-semibold text-gray-800">Category</h3>
                        <p class="text-gray-600">{{ $event->category }}</p>
                    </div>
                @endif

                @if($event->community_name)
                    <div>
                        <h3 class="font-semibold text-gray-800">Community</h3>
                        <p class="text-gray-600">{{ $event->community_name }}</p>
                        @if($event->community_id)
                            <p class="text-sm text-gray-500">ID: {{ $event->community_id }}</p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="space-y-4">
                @if($event->tags && count($event->tags) > 0)
                    <div>
                        <h3 class="font-semibold text-gray-800">Tags</h3>
                        <div class="flex flex-wrap gap-2 mt-2">
                            @foreach($event->tags as $tag)
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>

        @if($event->description)
            <div class="border-t pt-6">
                <h3 class="font-semibold text-gray-800 mb-3">Description</h3>
                <div class="prose max-w-none text-gray-600">
                    {!! nl2br(e($event->description)) !!}
                </div>
            </div>
        @endif

        <div class="border-t pt-6 flex justify-between items-center">
            <div class="text-sm text-gray-500">
                Created: {{ $event->created_at->format('M d, Y') }}
                @if($event->updated_at != $event->created_at)
                    | Updated: {{ $event->updated_at->format('M d, Y') }}
                @endif
            </div>
            
            <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this event?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-100 text-red-600 text-sm rounded-lg hover:bg-red-200 transition">Delete Event</button>
            </form>
        </div>
    </div>
@endsection