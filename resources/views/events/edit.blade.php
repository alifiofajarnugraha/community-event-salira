@extends('layouts.tailwind-app')

@section('content')
    <div class="mb-6 flex flex-col md:flex-row md:items-start md:justify-between gap-4">
        <div class="space-y-2">
            <h1 class="text-3xl font-semibold text-gray-800">Edit Event</h1>
            <p class="text-gray-600">Perbarui detail event dan unggah gambar baru bila diperlukan.</p>
        </div>
        <a href="{{ route('landing') }}" class="px-4 py-2 border border-gray-300 text-gray-600 rounded-lg hover:bg-gray-100 transition self-start">Landing Page</a>
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
            <label class="block text-sm font-medium text-gray-700">Subtitle</label>
            <input type="text" name="subtitle" value="{{ old('subtitle', $event->subtitle) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Subtitle event">
            @error('subtitle')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Community ID</label>
                <input type="text" name="community_id" value="{{ old('community_id', $event->community_id) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="ID komunitas">
                @error('community_id')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Community Name</label>
                <input type="text" name="community_name" value="{{ old('community_name', $event->community_name) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Nama komunitas">
                @error('community_name')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Date</label>
            <input type="datetime-local" name="date" value="{{ old('date', optional($event->date)->format('Y-m-d\TH:i')) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
            @error('date')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="location" value="{{ old('location', $event->location) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
            @error('location')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Image URL</label>
            <input type="url" name="image" value="{{ old('image', $event->image) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="https://example.com/image.jpg">
            @error('image')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">{{ old('description', $event->description) }}</textarea>
            @error('description')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" name="category" value="{{ old('category', $event->category) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Kategori event">
            @error('category')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Tags</label>
            <input type="text" name="tags_input" value="{{ old('tags_input', is_array($event->tags) ? implode(', ', $event->tags) : '') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Tag1, Tag2, Tag3">
            <p class="text-sm text-gray-500">Pisahkan tags dengan koma</p>
            @error('tags')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-end gap-3">
            <a href="{{ route('events.index') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 text-center hover:bg-gray-100 transition">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
        </div>
    </form>
@endsection
