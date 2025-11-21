@extends('layouts.tailwind-app')

@section('content')
    <div class="bg-white rounded-xl shadow p-8 text-center">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Event & Community Service</h1>
        <p class="text-gray-600 mb-8">Kelola event dan komunitas Anda dengan cepat melalui API dan UI yang sederhana namun efektif.</p>
        <div class="flex flex-col md:flex-row items-center justify-center gap-4">
            <a href="{{ route('events.index') }}" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                Kelola Event
            </a>
            <a href="{{ route('communities.index') }}" class="inline-flex items-center justify-center px-6 py-3 bg-gray-200 text-gray-800 rounded-lg shadow hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition">
                Kelola Community
            </a>
        </div>
    </div>
@endsection
