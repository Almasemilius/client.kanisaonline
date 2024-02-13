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

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 h-16" style="z-index: 9999;">
    <!-- Primary Navigation Menu -->
    <div class=" mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex space-x-10 items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="flex gap-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                    <g fill="currentColor">
                                        <path d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10Z" opacity=".5" />
                                        <path d="M16.807 19.011A8.46 8.46 0 0 1 12 20.5a8.46 8.46 0 0 1-4.807-1.489c-.604-.415-.862-1.205-.51-1.848C7.41 15.83 8.91 15 12 15c3.09 0 4.59.83 5.318 2.163c.35.643.093 1.433-.511 1.848ZM12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" />
                                    </g>
                                </svg>
                                <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            </div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
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
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden" style="z-index: 9999;">
        <!-- <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> -->

        <!-- Responsive Settings Options -->
        <div class="pt-4 bg-white pb-1 border-t border-gray-200 absolute inset-x-0 h-screen z-50">
            <!-- <div class="px-4">
                <div class="font-medium text-base text-gray-800" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div> -->

            <div class="w-full px-5 flex flex-col justify-center items-start mt-3 space-y-3 z-50">
                <ul class=" space-y-10  ">
                    <li class="w-full p-2 @if (Route::is('dashboard'))
            text-primary 
          @endif">

                        <a href="#" class="@if (Route::is('dashboard'))
              text-primary
            @endif">Home</a>
                    </li>
                    <li class="w-full p-2 @if (Route::is('denomination.list') or Route::is('add.denomination') or Route::is('denomination.list') or Route::is('view.denomination'))
            text-primary 
          @endif">

                        <a href="#" class="@if (Route::is('denomination.list') or Route::is('add.denomination') or Route::is('denomination.list'))
              text-primary
            @endif">Denomination</a>
                    </li>
                    <li x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('list.church') or Route::is('list.user') or Route::is('add.church') or Route::is('add.user') or Route::is('view.church') or Route::is('view.user'))
            text-primary @endif">

                            <a @click="isOpen = !isOpen" class="@if (Route::is('list.church') or Route::is('list.user') or Route::is('add.church') or Route::is('add.user') or Route::is('view.church') or Route::is('view.user'))
              text-primary
            @endif">Churches</a>
                        </div>

                        <div x-show="isOpen" class="flex flex-col  text-gray-300 pl-3  ">
                            <a href="#" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('list.church'))
              text-primary
            @endif">Church List</a>
                            <a href="#" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('list.user'))
              text-primary
            @endif">Users</a>
                        </div>
                    </li>
                    <li x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('reports'))
            text-primary @endif">

                            <a href="#">Reports</a>
                        </div>
                    </li>
                    <li x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('general.setting') or Route::is('system.configuration') or Route::is('notification.setting'))
            text-primary @endif">

                            <a @click="isOpen = !isOpen" class="@if (Route::is('general.setting') or Route::is('system.configuration') or Route::is('notification.setting'))
              text-primary
            @endif">Settings</a>
                        </div>
                        <div x-show="isOpen" class="flex flex-col  text-gray-300 pl-3  ">
                            <a href="#" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('general.setting'))
              text-primary
            @endif">General Settings</a>
                            <a href="#" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('system.configuration'))
              text-primary
            @endif">System Configurations</a>
                            <a href="#" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('notification.setting'))
              text-primary
            @endif">Notification Settings</a>
                        </div>
                    </li>
                    <li wire:click="logout" x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('reports'))
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