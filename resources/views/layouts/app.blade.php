<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tymtalk') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full flex">
            <x-side-navigation />
            <div class="w-full md:w-[82vw]">
                <livewire:layout.navigation />
                <main class="h-[calc(100vh-128px)] overflow-y-auto p-5 bg-gray-100">
                    {{ $slot }}
                </main>
                <div class="w-full flex items-center px-10 h-16 bg-white">
                    <span class="text-gray-400 md:text-description text-xs md:text-sm text-center">2023 © Tymtalk Corporation Ltd</span>

                </div>

            </div>
        </div>


    </div>
</body>

</html>