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
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />

        <!-- Page Content -->
        <main class="flex bg-background">
            <div class="w-64 bg-primary h-[calc(100vh-64px)] flex flex-col justify-center border-r px-3">
                <ul class="space-y-16  ">
                    <li class="w-full">
                        <a class="text-primary font-semibold ">
                            <button class="navigation-button">Home</button>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation-link">
                            <button class="">Users</button>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation-link">
                            <button class="">Services</button>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation-link">
                            <button class="">Publications</button>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation-link">
                            <button class="">Notifications</button>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="navigation-link">
                            <button class="">Settings</button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full p-10 h-[calc(100vh-64px)]  overflow-y-auto">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>