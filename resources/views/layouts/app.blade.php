
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SmartTask</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="font-sans antialiased">
    @include('layouts.navigation')

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>