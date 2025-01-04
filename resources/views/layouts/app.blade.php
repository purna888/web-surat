{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex flex-col">
            @include('layouts.topbar')  <!-- Topbar -->

            <div class="flex flex-1">
                @include('layouts.sidebar')  <!-- Sidebar -->

                <!-- Main Content Section -->
                <main class="flex-1 p-6 ml-64"> <!-- Added ml-64 to push content to the right of sidebar -->
                    @isset($header)
                        <header class="bg-white shadow mb-6">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset

                    <div class="content">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html> --}}
