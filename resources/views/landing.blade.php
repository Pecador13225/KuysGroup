<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8">
                <span class="font-bold text-lg">MyApp</span>
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ url('/') }}" class="hover:text-blue-600">Home</a>
                <a href="{{ url('/about') }}" class="hover:text-blue-600">About</a>
                <a href="{{ url('/contact') }}" class="hover:text-blue-600">Contact</a>
            </div>

            <!-- Auth Buttons -->
            <div class="space-x-3">
                @guest
                    <a href="{{ route('login') }}" class="px-4 py-2 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm border rounded-lg hover:bg-gray-100">Register</a>
                @else
                    <span class="text-gray-700">Hi, {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-sm bg-red-600 text-white rounded-lg hover:bg-red-700">
                            Logout
                        </button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-inner mt-10">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center text-sm text-gray-600">
            <p>&copy; {{ date('Y') }} MyApp. All rights reserved.</p>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-600">Privacy Policy</a>
                <a href="#" class="hover:text-blue-600">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
