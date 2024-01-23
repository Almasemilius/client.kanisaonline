<?php

use Livewire\Volt\Component;

new class extends Component
{
    public function logout(): void
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-white border border-gray-200 h-16">
    <!-- Primary Navigation Menu -->

    <div class="px-4 sm:px-6">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <span>Welcome Back, {{auth()->user()->name}}!</span>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger" class="">
                        <div class="flex items-center gap-5">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-1 bg-gray-100 rounded-full" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m9.25 22l-.4-3.2q-.325-.125-.613-.3t-.562-.375L4.7 19.375l-2.75-4.75l2.575-1.95Q4.5 12.5 4.5 12.337v-.674q0-.163.025-.338L1.95 9.375l2.75-4.75l2.975 1.25q.275-.2.575-.375t.6-.3l.4-3.2h5.5l.4 3.2q.325.125.613.3t.562.375l2.975-1.25l2.75 4.75l-2.575 1.95q.025.175.025.338v.674q0 .163-.05.338l2.575 1.95l-2.75 4.75l-2.95-1.25q-.275.2-.575.375t-.6.3l-.4 3.2h-5.5Zm2.8-6.5q1.45 0 2.475-1.025T15.55 12q0-1.45-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12q0 1.45 1.012 2.475T12.05 15.5Zm0-2q-.625 0-1.063-.438T10.55 12q0-.625.438-1.063t1.062-.437q.625 0 1.063.438T13.55 12q0 .625-.438 1.063t-1.062.437ZM12 12Zm-1 8h1.975l.35-2.65q.775-.2 1.438-.588t1.212-.937l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12q0-.4-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587L11 20Z" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-none stroke-black stroke-2 h-7 w-7 p-1 bg-gray-100 rounded-full" viewBox="0 0 24 24">
                                    <path d="M4 19v-2h2v-7q0-2.075 1.25-3.688T10.5 4.2v-.7q0-.625.438-1.063T12 2q.625 0 1.063.438T13.5 3.5v.7q2 .5 3.25 2.113T18 10v7h2v2H4Zm8 3q-.825 0-1.413-.588T10 20h4q0 .825-.588 1.413T12 22Z" />
                                </svg>
                            </div>
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <!-- <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div> -->
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 rounded-full fill-black" viewBox="0 0 24 24">
                                        <path d="M5.85 17.1q1.275-.975 2.85-1.538T12 15q1.725 0 3.3.563t2.85 1.537q.875-1.025 1.363-2.325T20 12q0-3.325-2.337-5.663T12 4Q8.675 4 6.337 6.337T4 12q0 1.475.488 2.775T5.85 17.1ZM12 13q-1.475 0-2.488-1.012T8.5 9.5q0-1.475 1.012-2.488T12 6q1.475 0 2.488 1.012T15.5 9.5q0 1.475-1.012 2.488T12 13Zm0 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q1.325 0 2.5-.388t2.15-1.112q-.975-.725-2.15-1.113T12 17q-1.325 0-2.5.388T7.35 18.5q.975.725 2.15 1.113T12 20Zm0-9q.65 0 1.075-.425T13.5 9.5q0-.65-.425-1.075T12 8q-.65 0-1.075.425T10.5 9.5q0 .65.425 1.075T12 11Zm0-1.5Zm0 9Z" />
                                    </svg>
                                </div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>

                        </div>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-left">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden" style="z-index: 9999;">
        <!-- <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> -->

        <!-- Responsive Settings Options -->
        <div class="pt-4 bg-white pb-1 border-t border-gray-200 absolute inset-x-0 h-screen z-50">
            <div class="w-full px-5 flex flex-col justify-center items-center mt-3 space-y-3 z-50">
                <ul class=" space-y-10  ">
                    <li class="w-full p-2 @if (Route::is('dashboard'))
            text-primary 
          @endif">

                        <a href="{{route('dashboard')}}" class="@if (Route::is('dashboard'))
              text-primary
            @endif">Dashboard</a>
                    </li>
                    <li class="w-full p-2 @if (Route::is('dashboard') or Route::is('add.denomination') or Route::is('dashboard') or Route::is('view.denomination'))
            text-primary 
          @endif">

                        <a href="{{route('dashboard')}}" class="@if (Route::is('dashboard') or Route::is('add.denomination') or Route::is('dashboard'))
              text-primary
            @endif">Organizers</a>
                    </li>
                    <li x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('dashboard') or Route::is('dashboard') or Route::is('add.church') or Route::is('add.user') or Route::is('view.church') or Route::is('view.user'))
            text-primary @endif">

                            <a @click="isOpen = !isOpen" class="@if (Route::is('dashboard') or Route::is('dashboard') or Route::is('add.church') or Route::is('add.user') or Route::is('view.church') or Route::is('view.user'))
              text-primary
            @endif">Events</a>
                        </div>

                        <div x-show="isOpen" class="flex flex-col  text-gray-300 pl-3  ">
                            <a href="{{route('dashboard')}}" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('dashboard'))
              text-primary
            @endif">Bookings</a>
                            <a href="{{route('dashboard')}}" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('dashboard'))
              text-primary
            @endif">Users</a>
                        </div>
                    </li>
                    <li x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('dashboard'))
            text-primary @endif">

                            <a href="#">Coupons</a>
                        </div>
                    </li>
                    <li x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('dashboard') or Route::is('dashboard') or Route::is('dashboard'))
            text-primary @endif">

                            <a @click="isOpen = !isOpen" class="@if (Route::is('dashboard') or Route::is('dashboard') or Route::is('dashboard'))
              text-primary
            @endif">Settings</a>
                        </div>
                        <div x-show="isOpen" class="flex flex-col  text-gray-300 pl-3  ">
                            <a href="{{route('dashboard')}}" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('dashboard'))
              text-primary
            @endif">General Settings</a>
                            <a href="{{route('dashboard')}}" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('dashboard'))
              text-primary
            @endif">System Configurations</a>
                            <a href="{{route('dashboard')}}" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('dashboard'))
              text-primary
            @endif">Notification Settings</a>
                        </div>
                    </li>
                    <li wire:click="logout" x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('dashboard'))
            text-primary @endif">

                            <a href="#">Logout</a>
                        </div>
                    </li>
                </ul>

                <!-- Authentication -->
                <!-- <button wire:click="logout" class="w-full text-left">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link> -->
                </button>
            </div>
        </div>
    </div>
</nav>