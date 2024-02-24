<div x-data="{ 
    activeAccordion: '', 
    setActiveAccordion(id) { 
        this.activeAccordion = (this.activeAccordion == id) ? '' : id 
    } 
}" class="w-64 bg-primary h-[calc(100vh-64px)] flex flex-col justify-center border-r px-3">
    <div class="w-full flex flex-col items-center">
        <div class="pt-4 bg-white pb-1 border-t border-gray-200 absolute inset-x-0 h-screen">
            <!-- <div class="px-4">
                <div class="font-medium text-base text-gray-800" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div> -->

            <div class=" px-5 flex flex-col justify-center items-start mt-3 space-y-3">
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
            @endif">Users</a>
                    </li>
                    <li x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('list.church') or Route::is('list.user') or Route::is('add.church') or Route::is('add.user') or Route::is('view.church') or Route::is('view.user'))
            text-primary @endif">

                            <a @click="isOpen = !isOpen" class="@if (Route::is('list.church') or Route::is('list.user') or Route::is('add.church') or Route::is('add.user') or Route::is('view.church') or Route::is('view.user'))
              text-primary
            @endif">Publications</a>
                        </div>

                        <div x-show="isOpen" class="flex flex-col  text-gray-300 pl-3  ">
                            <a href="#" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('list.church'))
              text-primary
            @endif">Publications</a>
                            <a href="#" class="text-sm flex p-3 hover:text-primary font-droidBold @if (Route::is('list.user'))
              text-primary
            @endif">Users</a>
                        </div>
                    </li>
                    <li x-data="{ isOpen: false }" class="cursor-pointer ">
                        <div class="w-full p-2 @if (Route::is('reports'))
            text-primary @endif">

                            <a href="#">Notifications</a>
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