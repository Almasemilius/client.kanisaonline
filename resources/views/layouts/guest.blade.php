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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="h-screen md:grid grid-cols-2 relative">
    <div class="h-screen bg-primary flex flex-col justify-between md:bg-none bg-cover bg-no-repeat w-full">
    </div>
    <div class=" w-full h-screen hidden md:flex justify-center items-center ">
        <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1706049499/KanisaOnline/Left_Part_bta5fo.png" alt="" class="w-full h-screen object-cover">
    </div>

    <div class="absolute h-screen w-full flex inset-0">
        {{$slot}}
    </div>


</body>

</html>