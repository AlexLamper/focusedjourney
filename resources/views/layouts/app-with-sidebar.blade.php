<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Focused Journey') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="flex-none w-64 p-6 bg-white border-r border-gray-200">
        <!-- Include your sidebar content here -->
        <h2 class="text-lg font-semibold mb-4">Sidebar</h2>
        <ul class="space-y-2">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-auto">
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="py-6 px-4">
            @yield('content')
        </main>
    </div>
</div>

<!-- Include your JavaScript files here -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
