@extends('layouts.tailwind-app')

@section('content')
    <div class="mb-6 space-y-2">
        <h1 class="text-3xl font-semibold text-gray-800">Edit Community</h1>
        <p class="text-gray-600">Perbarui profil komunitas dan unggah logo terbaru.</p>
    </div>

    <form action="{{ route('communities.update', $community) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow p-6 md:p-8 space-y-6">
        @csrf
        @method('PUT')
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name', $community->name) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
            @error('name')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">{{ old('description', $community->description) }}</textarea>
            @error('description')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-2">
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Logo</label>
                <input type="file" name="logo" class="w-full rounded-lg border border-dashed border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                @error('logo')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            @if($community->logo)
                <div class="flex items-center gap-4 rounded-lg bg-gray-50 p-3">
                    <img src="{{ asset('storage/'.$community->logo) }}" alt="Current logo" class="h-16 w-16 object-cover rounded">
                    <div class="text-sm text-gray-600">
                        <p class="font-medium text-gray-700">Logo saat ini</p>
                        <p>{{ $community->logo }}</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-end gap-3">
            <a href="{{ route('communities.index') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 text-center hover:bg-gray-100 transition">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
@endsection
