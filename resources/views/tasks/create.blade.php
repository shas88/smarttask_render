@extends('layouts.base')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">➕ Create a New Task</h2>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block font-medium text-gray-700 mb-1">Title</label>
                <input type="text" name="title" id="title" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="description" class="block font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                💾 Save Task
            </button>
        </form>
    </div>
@endsection