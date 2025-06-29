@extends('layouts.base')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">📝 My Tasks</h2>
            <a href="{{ route('tasks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                ➕ New Task
            </a>
        </div>

        @if(session('success'))
            <div class="text-green-600 mb-4">{{ session('success') }}</div>
        @endif

        @forelse($tasks as $task)
            <div class="border border-gray-200 rounded p-4 mb-4 shadow-sm bg-gray-50">
                <h3 class="text-lg font-bold text-gray-900">{{ $task->title }}</h3>
                <p class="text-gray-700">{{ $task->description }}</p>
                <div class="mt-3 space-x-3">
                    <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:underline">✏️ Edit</a>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">
                            🗑️ Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-500">You have no tasks yet.</p>
        @endforelse
    </div>
@endsection