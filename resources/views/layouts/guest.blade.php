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

        <!-- <div class="w-full h-[56px] px-5 lg:px-10 space-y-5 ">
            <div>
                <hr class="" />
            </div>
            <div class=" text-center">
                <span class="text-gray-400 md:text-description text-xs md:text-sm text-center">2023 © Tymtalk Corporation Ltd</span>
            </div>
        </div> -->
    </div>
    <div class=" w-full h-screen hidden md:flex justify-center items-center ">
        <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1706049499/KanisaOnline/Left_Part_bta5fo.png" alt="" class="w-full h-screen object-cover">
    </div>
    <div class="absolute h-screen w-full flex inset-0">
        <div class="w-3/5 h-4/5 bg-white m-auto grid grid-cols-2">
            <div class="p-10">
                <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1706051141/KanisaOnline/logo_jbdbax.png" alt="" class="h-14">
                <div class="w-full space-y-1 lg:space-y-5 lg:py-1">
                    <h1 class="text-base font-semibold text-black pt-10">
                        Welcome to our Church Management System!</span>
                    </h1>
                </div>
                <div class="py-5">
                    <hr>
                </div>

                <div class="w-full space-y-1 2xl:space-y-2">
                    <label for="email" class="login-label ">
                        Username or Email
                    </label>
                    <div class="w-full relative">
                        <input wire:model="email" id="email" name="email" autofocus class="login-input-field" type="email" name="email" id="email" autoComplete="false" required />
                        <div class="svg-container">
                            <svg stroke-width="1.5" viewBox="0 0 24 24" class="login-svg" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 9L12 12.5L17 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2 17V7C2 5.89543 2.89543 5 4 5H20C21.1046 5 22 5.89543 22 7V17C22 18.1046 21.1046 19 20 19H4C2.89543 19 2 18.1046 2 17Z" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="w-full space-y-2 ">
                    <div class="w-full relative">
                        <input wire:model="password" id="password" class="login-input-field" type="password" name="password" autoComplete="false" required />
                        <div class="svg-container">
                            <span>kjnkjnkjn</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="login-svg" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464C22 4.93 22 7.286 22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z" />
                                    <path d="M11 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Z" />
                                    <path stroke-linecap="round" d="M11 12h4.5m0 0H17a1 1 0 0 1 1 1v1m-2.5-2v1.5" />
                                </g>
                            </svg>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    </div>
                </div>
                <div class="w-full flex justify-center items-center">
                    <h5 class=" text-black lg:text-description text-sm">
                        Forgot Password?
                        <a href="/reset-password" class="text-secondary">
                            Get Help
                        </a>
                    </h5>
                </div>
                <div class="w-full py-5">
                    <button type="submit" class="w-full bg-primary py-2 2xl:py-3 rounded-full text-white text-lg">
                        Login
                    </button>
                </div>

            </div>
        </div>

    </div>


</body>

</html>