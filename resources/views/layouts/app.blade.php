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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="app" class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-screen-xl mx-auto p-4 flex items-center justify-between">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('images/thumbnail/logo_bnn.png')}}" class="h-10" alt="BNN Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BNN Kota Kediri</span>
            </a>
            <button type="button" class="inline-flex items-center p-2 text-gray-500 rounded-lg md:hidden hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false" data-collapse-toggle="navbar-default">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5h16a1 1 0 010 2H2a1 1 0 010-2zm0 4h16a1 1 0 010 2H2a1 1 0 010-2zm0 4h16a1 1 0 010 2H2a1 1 0 010-2z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:flex md:items-center md:w-auto" id="navbar-default">
                <ul class="flex flex-col md:flex-row md:space-x-6 rtl:space-x-reverse mt-4 md:mt-0 md:text-sm md:font-medium">
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item list-none">
                        <a class="nav-link text-gray-700 dark:text-white hover:text-blue-500" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @if (Route::has('register'))
                    <li class="nav-item list-none">
                        <a class="nav-link text-gray-700 dark:text-white hover:text-blue-500" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item list-none">
                        <a href="{{ route('logout') }}" class="nav-link text-red-600 dark:text-red-400 hover:text-red-800" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-6">
        @yield('content')
    </main>

    <footer class="w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
        <div class="text-center md:text-left md:w-auto">
            <span class="text-sm text-gray-500 dark:text-gray-400">© 2024
                <a href="#" class="hover:underline">Pelayanan dan Pengaduan BNN Kota Kediri</a>. All Rights Reserved.
            </span>
        </div>
        <ul class="flex flex-wrap items-center justify-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 md:mt-0 md:flex md:justify-end">
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
