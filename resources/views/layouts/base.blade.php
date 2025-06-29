<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'SmartTask' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Navbar -->
    <nav class="bg-white shadow px-6 py-4 mb-6">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <a href="/dashboard" class="text-xl font-bold text-blue-600">SmartTask</a>
            <div class="space-x-4">
                <a href="/tasks" class="text-gray-700 hover:text-blue-600">Tasks</a>
                <a href="/profile" class="text-gray-700 hover:text-blue-600">Profile</a>
                <a href="{{ route('profile.edit') }}" class="...">Profile</a>

                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="max-w-5xl mx-auto px-4">
        @yield('content')
    </main>

</body>
</html>