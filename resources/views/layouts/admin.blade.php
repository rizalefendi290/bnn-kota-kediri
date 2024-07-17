<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="app" class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        @include('partials.sidebar')
    </nav>

    <main class="py-6">
        @yield('content')
    </main>

    <footer
        class="w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
        <div class="text-center md:text-left md:w-auto">
            <span class="text-sm text-gray-500 dark:text-gray-400">© 2024
                <a href="#" class="hover:underline">Pelayanan dan Pengaduan BNN Kota Kediri</a>. All Rights
                Reserved.
            </span>
        </div>
        <ul
            class="flex flex-wrap items-center justify-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 md:mt-0 md:flex md:justify-end">
            <li class="me-4 md:me-6">
                <a href="https://kedirikota.bnn.go.id/" class="hover:underline">Kunjungi web resmi kami</a>
            </li>
            <li>
                <a href="https://kedirikota.bnn.go.id/kontak/" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>

    <!-- Flowbite -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
