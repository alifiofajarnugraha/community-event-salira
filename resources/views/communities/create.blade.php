@extends('layouts.tailwind-app')

@section('content')
    <div class="mb-6 flex flex-col md:flex-row md:items-start md:justify-between gap-4">
        <div class="space-y-2">
            <h1 class="text-3xl font-semibold text-gray-800">Create Community</h1>
            <p class="text-gray-600">Tambahkan komunitas baru beserta informasi singkatnya.</p>
        </div>
        <a href="{{ route('landing') }}" class="px-4 py-2 border border-gray-300 text-gray-600 rounded-lg hover:bg-gray-100 transition self-start">Landing Page</a>
    </div>

    <form action="{{ route('communities.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow p-6 md:p-8 space-y-6">
        @csrf
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Nama komunitas" required>
            @error('name')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Icon</label>
                <input type="text" name="icon" value="{{ old('icon') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="spark, code, leaf, etc.">
                @error('icon')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Accent Color</label>
                <input type="text" name="accent" value="{{ old('accent') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="#E6F2FF">
                @error('accent')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Tags</label>
            <input type="text" name="tags_input" value="{{ old('tags_input') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="#Tag1, #Tag2, #Tag3">
            <p class="text-sm text-gray-500">Pisahkan tags dengan koma</p>
            @error('tags_input')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Ceritakan fokus komunitas">{{ old('description') }}</textarea>
            @error('description')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Members Display</label>
                <input type="text" name="members" value="{{ old('members') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="21k">
                @error('members')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Posts Today</label>
                <input type="number" name="posts_today" value="{{ old('posts_today') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="42">
                @error('posts_today')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Member Count</label>
                <input type="number" name="member_count" value="{{ old('member_count') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="21000">
                @error('member_count')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Subtitle</label>
                <input type="text" name="subtitle" value="{{ old('subtitle') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Trending in Western Fiction">
                @error('subtitle')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Event Tag</label>
                <input type="text" name="event_tag" value="{{ old('event_tag') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="JUMP FEST 2025">
                @error('event_tag')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Cover Image URL</label>
            <input type="url" name="cover" value="{{ old('cover') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="https://images.unsplash.com/...">
            @error('cover')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" name="location" value="{{ old('location') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Jakarta Convention Center">
                @error('location')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Date</label>
                <input type="text" name="date" value="{{ old('date') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="13 August, 2025">
                @error('date')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Long Description</label>
            <textarea name="long_description" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Detailed description of the community">{{ old('long_description') }}</textarea>
            @error('long_description')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Rules</label>
            <input type="text" name="rules_input" value="{{ old('rules_input') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Rule1, Rule2, Rule3">
            <p class="text-sm text-gray-500">Pisahkan rules dengan koma</p>
            @error('rules_input')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="space-y-1">
            <label class="flex items-center">
                <input type="checkbox" name="is_joined" value="1" {{ old('is_joined') ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:border-blue-500 focus:ring-blue-500">
                <span class="ml-2 text-sm text-gray-700">Is Joined</span>
            </label>
            @error('is_joined')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="flex flex-col sm:flex-row sm:justify-end gap-3">
            <a href="{{ route('communities.index') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 text-center hover:bg-gray-100 transition">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">Save</button>
        </div>
    </form>
@endsection
