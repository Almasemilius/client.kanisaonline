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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />
        <main class="flex bg-background">
            <div x-data="{ 
    activeAccordion: '', 
    setActiveAccordion(id) { 
        this.activeAccordion = (this.activeAccordion == id) ? '' : id 
    } 
}" class="w-80 hidden bg-primary h-screen overflow-hidden md:flex flex-col  py-10 gap-5 ">
                <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
                    <div class="side-nav-group fill-gray-400 text-gray-400 @if (Route::is('event.types') or Route::is('event.categories') or Route::is('events.management') or Route::is('categories.management') or Route::is('event.type.list') or  Route::is('add.event') or Route::is('ticket.management') or Route::is('add.ticket')) bg-blue-100 text-primary fill-primary
        
        @endif">
                        <a href="{{Route('dashboard')}}" class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg stroke-white" viewBox="0 0 24 24">
                                <path d="M6 19h3.692v-5.077q0-.343.233-.575q.232-.233.575-.233h3q.343 0 .575.233q.233.232.233.575V19H18v-8.692q0-.154-.067-.28q-.068-.124-.183-.22L12.365 5.75q-.153-.135-.365-.135t-.365.135L6.25 9.808q-.115.096-.183.22q-.067.126-.067.28zm-1 0v-8.692q0-.384.172-.727q.171-.343.474-.566l5.385-4.077q.422-.323.966-.323q.543 0 .972.323l5.385 4.077q.303.223.474.566q.172.343.172.727V19q0 .402-.299.701q-.3.299-.701.299h-3.885q-.343 0-.575-.232q-.232-.232-.232-.576v-5.077h-2.616v5.077q0 .344-.232.576q-.232.232-.575.232H6q-.402 0-.701-.299Q5 19.401 5 19m7-6.712" />
                            </svg>
                            <span class="text-white font-semibold">Home</span>
                        </a>

                    </div>
                </ul>
                <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
                    <div class="side-nav-group fill-gray-400 text-gray-400 @if (Route::is('organizers') or Route::is('organizer.list') or Route::is('partner.management') or Route::is('add.partner')) bg-blue-100 text-primary fill-primary
        
        @endif">
                        <div class="flex items-center gap-5">

                            <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg stroke-white" viewBox="0 0 256 256">
                                <path fill="white" d="M244.8 150.4a8 8 0 0 1-11.2-1.6A51.6 51.6 0 0 0 192 128a8 8 0 0 1-7.37-4.89a8 8 0 0 1 0-6.22A8 8 0 0 1 192 112a24 24 0 1 0-23.24-30a8 8 0 1 1-15.5-4A40 40 0 1 1 219 117.51a67.94 67.94 0 0 1 27.43 21.68a8 8 0 0 1-1.63 11.21M190.92 212a8 8 0 1 1-13.84 8a57 57 0 0 0-98.16 0a8 8 0 1 1-13.84-8a72.06 72.06 0 0 1 33.74-29.92a48 48 0 1 1 58.36 0A72.06 72.06 0 0 1 190.92 212M128 176a32 32 0 1 0-32-32a32 32 0 0 0 32 32m-56-56a8 8 0 0 0-8-8a24 24 0 1 1 23.24-30a8 8 0 1 0 15.5-4A40 40 0 1 0 37 117.51a67.94 67.94 0 0 0-27.4 21.68a8 8 0 1 0 12.8 9.61A51.6 51.6 0 0 1 64 128a8 8 0 0 0 8-8" />
                            </svg>

                            <span class="text-white font-semibold">Users</span>
                        </div>
                        <svg class="w-5 h-5 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                    <div x-show="activeAccordion==id" x-collapse x-cloak>
                        <div class=" nav-options-container">
                            <ul class="nav-options">
                                <li>
                                    <a href="#">Pastors</a>
                                </li>
                                <li>
                                    <a href="{{Route('list.users')}}">Staffs</a>
                                </li>
                                <li>
                                    <a href="{{Route('list.members')}}">Members</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </ul>
                <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
                    <div class="side-nav-group fill-gray-400 text-gray-400 @if (Route::is('organizers') or Route::is('organizer.list') or Route::is('partner.management') or Route::is('add.partner')) bg-blue-100 text-primary fill-primary
        
        @endif">
                        <div class="flex items-center gap-5">

                            <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg stroke-none" viewBox="0 0 24 24">
                                <path fill="white" d="M2 22v-8l4-1.775V9l5-2.5V5H9V3h2V1h2v2h2v2h-2v1.5L18 9v3.225L22 14v8h-9v-5h-2v5zm2-2h5v-5.1h6V20h5v-4.8l-4-1.8v-3.35L12 8l-4 2.05v3.35l-4 1.8zm8-6.5q.625 0 1.063-.437T13.5 12q0-.625-.437-1.062T12 10.5q-.625 0-1.062.438T10.5 12q0 .625.438 1.063T12 13.5m0 .5" />
                            </svg>
                            <span class="text-white font-semibold">Services</span>
                        </div>
                        <svg class="w-5 h-5 duration-200 ease-out " :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                    <div x-show="activeAccordion==id" x-collapse x-cloak>
                        <div class=" nav-options-container">
                            <ul class="nav-options">
                                <li>
                                    <a href="{{Route('list.service')}}">Services</a>
                                </li>
                                <li>
                                    <a href="{{Route('events.list')}}">Events</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </ul>

                <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
                    <div class="side-nav-group fill-gray-400 text-gray-400  @if (Route::is('booking.list') or Route::is('orders.list') ) bg-blue-100 text-primary fill-primary @endif">
                        <div class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg stroke-white " viewBox="0 0 14 14">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 .5H1.5a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1V8m-11 2.5h11M3.5 3h2m-2 2.5h1" />
                                    <path d="m8.994 7.506l-3 .54l.5-3.04l4.23-4.21a1 1 0 0 1 1.42 0l1.06 1.06a.998.998 0 0 1 0 1.42z" />
                                </g>
                            </svg>

                            <span class="text-white font-semibold">Publications</span>
                        </div>
                        <svg class="w-5 h-5 duration-200 ease-out stroke-white" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                    <div x-show="activeAccordion==id" x-collapse x-cloak>
                        <div class="nav-options-container">
                            <ul class="nav-options">
                                <li>
                                    <a href="{{route('publication.management')}}" class="text-white font-semibold">Sermon List</a>
                                </li>
                                <li>
                                    <a href="{{route('add.publication')}}" class="text-white font-semibold">Publish Sermon</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </ul>
                <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
                    <div class="side-nav-group fill-gray-400 text-gray-400 ">
                        <div class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg stroke-white" viewBox="0 0 24 24">
                                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" />
                                    <path d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2m0 12v-5m3 5v-1m3 1v-3" />
                                </g>
                            </svg>
                            <span class="text-white font-semibold">Reports</span>
                        </div>
                        <svg class="w-5 h-5 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                    <div x-show="activeAccordion==id" x-collapse x-cloak>
                        <div class="nav-options-container">
                            <ul class="nav-options">
                                <li>
                                    <a href="{{Route('member.report')}}">Members Report</a>
                                </li>
                                <li>
                                    <a href="{{Route('events.list')}}">Attendance Report</a>
                                </li>
                                <li>
                                    <a href="{{Route('events.list')}}">Financial Report</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </ul>
                <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
                    <div class="side-nav-group fill-gray-400 text-gray-400 ">
                        <div class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg stroke-white" viewBox="0 0 24 24">
                                <path fill="white" d="M5 19q-.425 0-.712-.288T4 18q0-.425.288-.712T5 17h1v-7q0-2.075 1.25-3.687T10.5 4.2v-.7q0-.625.438-1.062T12 2q.625 0 1.063.438T13.5 3.5v.7q2 .5 3.25 2.113T18 10v7h1q.425 0 .713.288T20 18q0 .425-.288.713T19 19zm7 3q-.825 0-1.412-.587T10 20h4q0 .825-.587 1.413T12 22" />
                            </svg>
                            <span class="text-white font-semibold">Notifications</span>
                        </div>
                        <svg class="w-5 h-5 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                    <div x-show="activeAccordion==id" x-collapse x-cloak>
                        <div class="nav-options-container">
                            <ul class="nav-options">
                                <li>Booking List</li>
                                <li>Order List</li>
                            </ul>
                        </div>
                    </div>
                </ul>
                <a href="{{route('setting')}}" class="w-full px-5 py-1 2xl:p-3 gap-5">
                    <div class="side-nav-group fill-gray-400 text-gray-400 ">
                        <div class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg stroke-none" viewBox="0 0 24 24">
                                <path fill="white" d="M13.875 22h-3.75q-.375 0-.65-.25t-.325-.625l-.3-2.325q-.325-.125-.613-.3t-.562-.375l-2.175.9q-.35.125-.7.025t-.55-.425L2.4 15.4q-.2-.325-.125-.7t.375-.6l1.875-1.425Q4.5 12.5 4.5 12.337v-.674q0-.163.025-.338L2.65 9.9q-.3-.225-.375-.6t.125-.7l1.85-3.225q.175-.35.537-.438t.713.038l2.175.9q.275-.2.575-.375t.6-.3l.3-2.325q.05-.375.325-.625t.65-.25h3.75q.375 0 .65.25t.325.625l.3 2.325q.325.125.613.3t.562.375l2.175-.9q.35-.125.7-.025t.55.425L21.6 8.6q.2.325.125.7t-.375.6l-1.875 1.425q.025.175.025.338v.674q0 .163-.05.338l1.875 1.425q.3.225.375.6t-.125.7l-1.85 3.2q-.2.325-.563.438t-.712-.013l-2.125-.9q-.275.2-.575.375t-.6.3l-.3 2.325q-.05.375-.325.625t-.65.25Zm-1.825-6.5q1.45 0 2.475-1.025T15.55 12q0-1.45-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12q0 1.45 1.012 2.475T12.05 15.5Zm0-2q-.625 0-1.063-.438T10.55 12q0-.625.438-1.063t1.062-.437q.625 0 1.063.438T13.55 12q0 .625-.438 1.063t-1.062.437ZM12 12Zm-1 8h1.975l.35-2.65q.775-.2 1.438-.588t1.212-.937l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12q0-.4-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587L11 20Z" />
                            </svg>
                            <span class="text-white font-semibold">Settings</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- <div class="w-64 bg-primary h-[calc(100vh-64px)] flex flex-col justify-center border-r px-3">
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
            </div> -->
            <div class="w-full p-10 h-[calc(100vh-64px)]  overflow-y-auto">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>