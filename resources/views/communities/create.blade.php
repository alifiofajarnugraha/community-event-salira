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
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200" placeholder="Ceritakan fokus komunitas">{{ old('description') }}</textarea>
            @error('description')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="space-y-1">
            <label class="block text-sm font-medium text-gray-700">Logo</label>
            <input type="file" name="logo" class="w-full rounded-lg border border-dashed border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
            @error('logo')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-end gap-3">
            <a href="{{ route('communities.index') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 text-center hover:bg-gray-100 transition">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">Save</button>
        </div>
    </form>
@endsection
