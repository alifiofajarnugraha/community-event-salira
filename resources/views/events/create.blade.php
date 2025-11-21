@extends('layouts.tailwind-app')

@section('content')
    <div class="mb-6 space-y-2">
        <h1 class="text-3xl font-semibold text-gray-800">Create Event</h1>
        <p class="text-gray-600">Lengkapi informasi berikut untuk menambahkan event baru.</p>
    </div>

    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow p-6 md:p-8 space-y-6">
        @csrf
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Nama event" required>
            @error('title')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Ceritakan event yang akan berlangsung">{{ old('description') }}</textarea>
            @error('description')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="location" value="{{ old('location') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Lokasi penyelenggaraan">
            @error('location')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Start Date</label>
                <input type="datetime-local" name="start_date" value="{{ old('start_date') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                @error('start_date')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">End Date</label>
                <input type="datetime-local" name="end_date" value="{{ old('end_date') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                @error('end_date')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" class="w-full rounded-lg border border-dashed border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
            @error('image')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-end gap-3">
            <a href="{{ route('events.index') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 text-center hover:bg-gray-100 transition">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">Save</button>
        </div>
    </form>
@endsection
