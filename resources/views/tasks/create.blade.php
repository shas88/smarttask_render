@extends('layouts.app')

@section('content')
<div class="py-10">
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md p-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">📝 Create New Task</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc pl-6 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('tasks.store') }}" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Task Title</label>
                <input type="text" name="title" id="title" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" rows="3"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <div>
                <label for="due_date" class="block text-sm font-medium text-gray-700 mb-1">Due Date</label>
                <input type="date" name="due_date" id="due_date"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>



<!-- Completed Checkbox -->
<div class="mb-4">
    <label>
        <input type="checkbox" name="is_completed" {{ old('is_completed', $task->is_completed ?? false) ? 'checked' : '' }}>
        Mark as Completed
    </label>
</div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-md">
                    Create Task
                </button>
            </div>
        </form>
    </div>
</div>
@endsection