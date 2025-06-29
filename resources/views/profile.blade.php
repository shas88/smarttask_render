@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>👤 Your Profile</h1>

        @if ($user)
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Member Since:</strong> {{ $user->created_at->format('d M Y') }}</p>
        @else
            <p>No user found.</p>
        @endif

        <a href="{{ route('tasks.index') }}">← Back to Tasks</a>
    </div>
@endsection