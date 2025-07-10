<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - SmartTask</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Fixed asset paths -->
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}" defer></script>
</head>
<body class="bg-gradient-to-br from-indigo-500 to-purple-600 min-h-screen flex items-center justify-center font-sans antialiased">

    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Login to SmartTask</h2>

        @if (session('status'))
            <div class="mb-4 text-green-600 font-semibold text-sm text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input id="email" type="email" name="email" required autofocus
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-300" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input id="password" type="password" name="password" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-300" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
            </div>

            <!-- Forgot Password -->
            <div class="text-right">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
                    Login
                </button>
                <!-- Footer Links -->
<div class="flex justify-between text-sm mt-4">
    @if (Route::has('password.request'))
        <a class="text-indigo-600 hover:underline" href="{{ route('password.request') }}">
            Forgot password?
        </a>
    @endif

    @if (Route::has('register'))
        <a class="text-indigo-600 hover:underline" href="{{ route('register') }}">
            Create account
        </a>
    @endif
</div>
            </div>
        </form>
    </div>

</body>
</html>