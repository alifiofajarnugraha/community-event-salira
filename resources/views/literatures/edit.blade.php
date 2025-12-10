@extends('layouts.tailwind-app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">Edit Literature</h1>
                <p class="text-sm text-gray-500">Update details for {{ $literature->title }}.</p>
            </div>
            <a href="{{ route('literatures.show', $literature) }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100 transition">View</a>
        </div>

        <form action="{{ route('literatures.update', $literature) }}" method="POST" class="bg-white rounded-xl shadow p-6 space-y-6">
            @csrf
            @method('PUT')
            @include('literatures._form', ['literature' => $literature])
        </form>
    </div>
@endsection
