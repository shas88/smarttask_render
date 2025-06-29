@extends('layouts.base')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">👤 Edit Profile</h2>

        {{-- Update Profile Form --}}
        <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
            @csrf
            @method('PATCH')

            <div>
                <label for="name" class="block font-medium text-gray-700 mb-1">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block font-medium text-gray-700 mb-1">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    💾 Save Changes
                </button>

                @if (session('status') === 'profile-updated')
                    <p class="text-green-600 ml-4">✅ Profile updated!</p>
                @endif
            </div>
        </form>

        {{-- Delete Account --}}
        <hr class="my-8">

        <form method="POST" action="{{ route('profile.destroy') }}"
              onsubmit="return confirm('Are you sure you want to delete your account?');">
            @csrf
            @method('DELETE')

            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                ❌ Delete Account
            </button>
        </form>
    </div>
@endsection