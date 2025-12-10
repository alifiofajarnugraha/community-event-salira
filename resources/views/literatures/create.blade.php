@extends('layouts.tailwind-app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">Create Literature</h1>
                <p class="text-sm text-gray-500">Register a new resource for the community library.</p>
            </div>
            <a href="{{ route('literatures.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100 transition">Back</a>
        </div>

        <form action="{{ route('literatures.store') }}" method="POST" class="bg-white rounded-xl shadow p-6 space-y-6">
            @csrf
            @include('literatures._form')
        </form>
    </div>
@endsection
