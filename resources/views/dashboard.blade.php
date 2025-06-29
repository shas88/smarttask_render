@extends('layouts.base')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Welcome, {{ Auth::user()->name }} 👋</h1>
        <p class="text-gray-600 mb-6">This is your SmartTask dashboard. Ready to get productive?</p>

        <div class="flex space-x-4">
            <a href="{{ route('tasks.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                📝 Manage Tasks
            </a>
            <a href="{{ route('profile.edit') }}" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800">
                👤 Edit Profile
            </a>
        </div>
    </div>
@endsection