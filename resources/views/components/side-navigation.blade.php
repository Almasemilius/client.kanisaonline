<div x-data="{ 
    activeAccordion: '', 
    setActiveAccordion(id) { 
        this.activeAccordion = (this.activeAccordion == id) ? '' : id 
    } 
}" class="w-[18vw] hidden bg-white h-screen overflow-hidden md:flex flex-col  py-5 2xl:gap-1 ">
    <div class="w-full flex flex-col items-center">
        <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1698643093/tymtalk/Logo_xy5tj9.png" alt="" class="h-10 2xl:h-12">
        <span class="text-[10px] 2xl:text-xs text-center">Sales Management Dashboard</span>
    </div>
    <ul class="flex flex-col px-3 py-3 2xl:p-5 gap-5">
        <li>
            <span class="px-3 text-sm 2xl:text-xs">MAIN MENU</span>
        </li>
        <x-side-nav-link label="Dashboard" route="dashboard" icon='<svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg fill-none stroke-2" viewBox="0 0 24 24">
        <path d="M4 19v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-3q-.425 0-.713-.288T14 20v-5q0-.425-.288-.713T13 14h-2q-.425 0-.713.288T10 15v5q0 .425-.288.713T9 21H6q-.825 0-1.413-.588T4 19Z" />
    </svg>' />

    </ul>
    <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
        <div class="side-nav-group fill-gray-400 text-gray-400 @if (Route::is('event.types') or Route::is('event.categories') or Route::is('events.management') or Route::is('categories.management') or Route::is('event.type.list') or  Route::is('add.event') or Route::is('ticket.management') or Route::is('add.ticket')) bg-blue-100 text-primary fill-primary
        
        @endif">
            <div class="flex items-center gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg" viewBox="0 0 24 24">
                    <path d="M18 16.184v-1.851c0-1.93-1.57-3.5-3.5-3.5c-.827 0-1.5-.673-1.5-1.5V7.816A2.997 2.997 0 0 0 15 5c0-1.654-1.346-3-3-3S9 3.346 9 5c0 1.302.839 2.401 2 2.815v1.518c0 .827-.673 1.5-1.5 1.5c-1.93 0-3.5 1.57-3.5 3.5v1.851A2.997 2.997 0 0 0 4 19c0 1.654 1.346 3 3 3s3-1.346 3-3a2.997 2.997 0 0 0-2-2.816v-1.851c0-.827.673-1.5 1.5-1.5c.979 0 1.864-.407 2.5-1.058a3.487 3.487 0 0 0 2.5 1.058c.827 0 1.5.673 1.5 1.5v1.851A2.997 2.997 0 0 0 14 19c0 1.654 1.346 3 3 3s3-1.346 3-3a2.997 2.997 0 0 0-2-2.816zM7 20a1.001 1.001 0 0 1 0-2a1.001 1.001 0 0 1 0 2zm5-16a1.001 1.001 0 1 1-1 1c0-.551.448-1 1-1zm5 16a1.001 1.001 0 0 1 0-2a1.001 1.001 0 0 1 0 2z" />
                </svg>
                <span class="">Events</span>
            </div>
            <svg class="w-5 h-5 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </div>
        <div x-show="activeAccordion==id" x-collapse x-cloak>
            <div class=" nav-options-container">
                <ul class="nav-options">
                    <li>
                        <a href="{{route('event.type.list')}}">Events Types</a>
                    </li>
                    <li>
                        <a href="{{route('categories.management')}}">Events Categories</a>
                    </li>
                    <li>
                        <a href="{{route('events.management')}}">Events Management</a>
                    </li>
                </ul>
            </div>
        </div>
    </ul>
    <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
        <div class="side-nav-group fill-gray-400 text-gray-400 @if (Route::is('organizers') or Route::is('organizer.list') or Route::is('partner.management') or Route::is('add.partner')) bg-blue-100 text-primary fill-primary
        
        @endif">
            <div class="flex items-center gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg  " viewBox="0 0 24 24">
                    <path d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z" />
                </svg>
                <span class="">Organizers</span>
            </div>
            <svg class="w-5 h-5 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </div>
        <div x-show="activeAccordion==id" x-collapse x-cloak>
            <div class=" nav-options-container">
                <ul class="nav-options">
                    <li>
                        <a href="{{route('organizer.list')}}">Organizers List</a>
                    </li>
                    <li>
                        <a href="{{route('partner.management')}}">Partners & Sponsors</a>
                    </li>
                </ul>
            </div>
        </div>
    </ul>

    <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
        <div class="side-nav-group fill-gray-400 text-gray-400  @if (Route::is('booking.list') ) bg-blue-100 text-primary fill-primary @endif">
            <div class="flex items-center gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg " viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Zm11-4v2m0 10v2m0-8v2" />
                </svg>

                <span class="">Bookings</span>
            </div>
            <svg class="w-5 h-5 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </div>
        <div x-show="activeAccordion==id" x-collapse x-cloak>
            <div class="nav-options-container">
                <ul class="nav-options">
                    <li>
                        <a href="{{route('booking.list')}}">Booking List</a>
                    </li>
                    <li>Order List</li>
                </ul>
            </div>
        </div>
    </ul>
    <ul x-data="{ id: $id('accordion') }" @click="setActiveAccordion(id)" class="w-full px-5 py-1 2xl:p-3 gap-5">
        <div class="side-nav-group fill-gray-400 text-gray-400 ">
            <div class="flex items-center gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg" viewBox="0 0 24 24">
                    <path d="M13 1v2.5h-2V1h2Zm8.414 2.5L15 9.914L13.586 8.5L20 2.086L21.414 3.5ZM4 2.086l11.968 11.968a4.001 4.001 0 0 1 4.86 6.274a4 4 0 0 1-6.274-4.86L12 12.914l-2.554 2.554a4.002 4.002 0 0 1-6.274 4.86a4 4 0 0 1 4.86-6.274l2.554-2.554l-8-8L4 2.086ZM13 5v2.5h-2V5h2ZM7.414 16.086a2 2 0 1 0-2.828 2.828a2 2 0 0 0 2.828-2.828Zm12 0a2 2 0 1 0-2.828 2.828a2 2 0 0 0 2.828-2.828Z" />
                </svg>

                <span class="">Coupons</span>
            </div>
            <svg class="w-5 h-5 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
    <span class="uppercase px-5 py-1">Help & setting</span>
    <ul class="px-5 py-3 space-y-1">
        <x-side-nav-link label="Settings" icon='<svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg" viewBox="0 0 24 24"><path fill="currentColor" d="M13.875 22h-3.75q-.375 0-.65-.25t-.325-.625l-.3-2.325q-.325-.125-.613-.3t-.562-.375l-2.175.9q-.35.125-.7.025t-.55-.425L2.4 15.4q-.2-.325-.125-.7t.375-.6l1.875-1.425Q4.5 12.5 4.5 12.337v-.674q0-.163.025-.338L2.65 9.9q-.3-.225-.375-.6t.125-.7l1.85-3.225q.175-.35.537-.438t.713.038l2.175.9q.275-.2.575-.375t.6-.3l.3-2.325q.05-.375.325-.625t.65-.25h3.75q.375 0 .65.25t.325.625l.3 2.325q.325.125.613.3t.562.375l2.175-.9q.35-.125.7-.025t.55.425L21.6 8.6q.2.325.125.7t-.375.6l-1.875 1.425q.025.175.025.338v.674q0 .163-.05.338l1.875 1.425q.3.225.375.6t-.125.7l-1.85 3.2q-.2.325-.563.438t-.712-.013l-2.125-.9q-.275.2-.575.375t-.6.3l-.3 2.325q-.05.375-.325.625t-.65.25Zm-1.825-6.5q1.45 0 2.475-1.025T15.55 12q0-1.45-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12q0 1.45 1.012 2.475T12.05 15.5Zm0-2q-.625 0-1.063-.438T10.55 12q0-.625.438-1.063t1.062-.437q.625 0 1.063.438T13.55 12q0 .625-.438 1.063t-1.062.437ZM12 12Zm-1 8h1.975l.35-2.65q.775-.2 1.438-.588t1.212-.937l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12q0-.4-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587L11 20Z"/></svg>' />
        <x-side-nav-link label="Logout" icon='<svg xmlns="http://www.w3.org/2000/svg" class="side-nav-svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"><path d="M9.002 7c.012-2.175.109-3.353.877-4.121C10.758 2 12.172 2 15 2h1c2.829 0 4.243 0 5.122.879C22 3.757 22 5.172 22 8v8c0 2.828 0 4.243-.878 5.121C20.242 22 18.829 22 16 22h-1c-2.828 0-4.242 0-5.121-.879c-.768-.768-.865-1.946-.877-4.121"/><path stroke-linejoin="round" d="M15 12H2m0 0l3.5-3M2 12l3.5 3"/></g></svg>' />
    </ul>
</div>