
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartTask</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="font-sans antialiased">
    @include('layouts.navigation')

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>