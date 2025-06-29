<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, {{ Auth::user()->name }} 👋
        </h2>
    </x-slot>

    <div class="py-12 max-w-5xl mx-auto">
        <div class="bg-white p-6 shadow rounded">
            <h3 class="text-lg font-bold mb-2">SmartTask Homepage</h3>
            <p class="mb-4">You're logged in. Click below to go to tasks.</p>
            <a href="{{ route('tasks.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Manage Tasks</a>
        </div>
    </div>
</x-app-layout>