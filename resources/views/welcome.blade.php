<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Voting System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file.exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
            </style>
        @endif
    </head>
    <body class="bg-blue-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 flex flex-col min-h-screen">
        <header class="w-full bg-blue-600 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-5h2v5h-2zm0-7V7h2v2.5h-2z"/>
                    </svg>
                    <span class="text-lg font-bold">Online Voting System</span>
                </div>
                <nav class="space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hover:underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="hover:underline border border-white px-3 py-1 rounded">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="hover:underline border border-white px-3 py-1 rounded ml-4">Register</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </div>
        </header>
        <div class="flex-grow flex items-center justify-center">
            <main class="container mx-auto flex flex-col lg:flex-row items-center p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden max-w-4xl">
                <div class="lg:w-1/2 p-6">
                    <h1 class="text-4xl font-bold mb-4 text-blue-600">{{ __("Why do we use it?") }}</h1>
                    <p class="mb-4 text-lg">{{ __("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.") }}</p>
                    <a href="{{ route('elections.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">{{ __("Get started") }}</a>
                </div>
                <div class="lg:w-1/2 p-6 flex items-center justify-center">
                    <svg class="w-3/4 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="currentColor">
                        <path d="M32 2C15.43 2 2 15.43 2 32s13.43 30 30 30 30-13.43 30-30S48.57 2 32 2zm0 56C17.67 58 6 46.33 6 32S17.67 6 32 6s26 11.67 26 26-11.67 26-26 26zm-4-36h8v8h-8zm0 12h8v8h-8z"/>
                    </svg>
                </div>
            </main>
        </div>
        <footer class="w-full bg-blue-600 text-white p-4 text-center">
            &copy; 2025 Online Voting System
        </footer>
    </body>
</html>