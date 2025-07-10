@extends('layouts.app')

@section('content')
<div class="py-10">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">📋 My Tasks</h1>
            <a href="{{ route('tasks.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                ➕ Add Task
            </a>
        </div>

        @if ($tasks->count())
            <div class="bg-white rounded-xl shadow divide-y">
                @foreach ($tasks as $task)
                    <div class="p-5 sm:flex sm:justify-between sm:items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">{{ $task->title }}</h3>
                            <p class="text-gray-600 text-sm mb-1">{{ $task->description }}</p>
                           <tr>
    <td>{{ $task->title }}</td>
    <td>{{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('M d, Y') : '-' }}</td>
    <td>
        @if ($task->is_completed)
            <span class="text-green-600 font-bold">✔ Completed</span>
        @else
            <span class="text-red-600 font-semibold">⏳ Pending</span>
        @endif
    </td>
</tr>
                            @if($task->due_date)
                                <p class="text-xs text-gray-400">📅 Due: {{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}</p>
                            @endif
                        </div>
                        <div class="mt-3 sm:mt-0 flex gap-2">
                            <a href="/tasks/{{ $task->id }}/edit"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">Edit</a>

                           <form action="/tasks/{{ $task->id }}" method="POST"
      onsubmit="return confirm('Delete this task?');">
    @csrf
    @method('DELETE')
    <button type="submit"
            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
        🗑️ Delete
    </button>
</form>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white p-6 rounded-lg shadow text-center text-gray-600">
                😞 No tasks found. Try adding one.
            </div>
        @endif
    </div>
</div>
@endsection