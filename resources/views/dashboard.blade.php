@extends('layouts.app')

@section('content')
<div class="py-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- Welcome Header -->
        <div class="bg-white overflow-hidden shadow rounded-2xl p-6 mb-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">👋 Welcome back, {{ Auth::user()->name }}!</h2>
            <p class="text-gray-600">Manage your tasks and stay productive with SmartTask.</p>
        </div>

        <!-- Task Quick Actions -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
            <h3 class="text-xl font-semibold text-gray-800">Your Tasks</h3>
            <a href="{{ route('tasks.create') }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                ➕ Create New Task
            </a>
        </div>

        <!-- Task List Preview (optional) -->
        @if($tasks->count())
        <div class="bg-white shadow rounded-2xl p-4 space-y-4">
            @foreach ($tasks as $task)
                <div class="border-b border-gray-100 pb-3">
                    <h4 class="text-lg font-medium text-gray-800">{{ $task->title }}</h4>
                    <p class="text-sm text-gray-500">{{ $task->description }}</p>
                    <div class="text-xs text-gray-400 mt-1">Due: {{ $task->due_date ?? '—' }}</div>
                </div>
            @endforeach
        </div>
        @else
        <div class="bg-white shadow rounded-2xl p-6 text-center text-gray-600">
            You have no tasks yet. Click the button above to create one!
        </div>
        @endif

    </div>
</div>
@endsection