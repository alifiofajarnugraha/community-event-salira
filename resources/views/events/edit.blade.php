@extends('layouts.tailwind-app')

@section('content')
    <div class="mb-6 space-y-2">
        <h1 class="text-3xl font-semibold text-gray-800">Edit Event</h1>
        <p class="text-gray-600">Perbarui detail event dan unggah gambar baru bila diperlukan.</p>
    </div>

    <form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow p-6 md:p-8 space-y-6">
        @csrf
        @method('PUT')
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" value="{{ old('title', $event->title) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
            @error('title')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">{{ old('description', $event->description) }}</textarea>
            @error('description')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="location" value="{{ old('location', $event->location) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
            @error('location')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Start Date</label>
                <input type="datetime-local" name="start_date" value="{{ old('start_date', optional($event->start_date)->format('Y-m-d\TH:i')) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                @error('start_date')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">End Date</label>
                <input type="datetime-local" name="end_date" value="{{ old('end_date', optional($event->end_date)->format('Y-m-d\TH:i')) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                @error('end_date')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
        </div>
        <div class="space-y-2">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" class="w-full rounded-lg border border-dashed border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                @error('image')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            @if($event->image)
                <div class="flex items-center gap-4 rounded-lg bg-gray-50 p-3">
                    <img src="{{ asset('storage/'.$event->image) }}" alt="Current image" class="h-16 w-16 object-cover rounded">
                    <div class="text-sm text-gray-600">
                        <p class="font-medium text-gray-700">File saat ini</p>
                        <p>{{ $event->image }}</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-end gap-3">
            <a href="{{ route('events.index') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 text-center hover:bg-gray-100 transition">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
@endsection
