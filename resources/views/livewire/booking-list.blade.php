@php
@endphp
<div class="space-y-5">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center gap-5">
            <div class="border-r pr-5">
                <h1 class="page-title">Bookings</h1>
            </div>
            <nav class="w-full flex justify-between">
                <ol class="inline-flex items-center mb-3 md:space-x-1 text-xs text-neutral-500 [&_.active-breadcrumb]:text-neutral-600 [&_.active-breadcrumb]:font-medium sm:mb-0">
                    <li class="flex items-center h-full">
                        <a href="{{route('dashboard')}}" class="inline-flex items-center px-2 py-1.5 space-x-1.5 rounded-md hover:text-neutral-900 hover:bg-neutral-100">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6986 3.68267C12.7492 2.77246 11.2512 2.77244 10.3018 3.68263L4.20402 9.52838C3.43486 10.2658 3 11.2852 3 12.3507V19C3 20.1046 3.89543 21 5 21H8.04559C8.59787 21 9.04559 20.5523 9.04559 20V13.4547C9.04559 13.2034 9.24925 13 9.5 13H14.5456C14.7963 13 15 13.2034 15 13.4547V20C15 20.5523 15.4477 21 16 21H19C20.1046 21 21 20.1046 21 19V12.3507C21 11.2851 20.5652 10.2658 19.796 9.52838L13.6986 3.68267Z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="{{route('events.management')}}" class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">Bookings</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="{{route('booking.list')}}" class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">Booking List</span>
                        </a>
                    </li>

                </ol>
                
            </nav>
        </div>
    </div>
    <div class="w-full  bg-white rounded-sm p-5">
        <div class="w-full flex justify-between">
            <div class="flex items-center gap-5 ">
                <select wire:model.live="itemCount" name="" id="" class="counter">
                    <option value="6">6</option>
                    <option value="12">12</option>
                    <option value="24">24</option>
                </select>
                @if ($bookings->count() > 0)
                <span>Showing {{ $bookings->firstItem() }} to {{ $bookings->lastItem() }} of {{ $bookings->total() }} entries</span>
                @endif
            </div>
            <form>
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input wire:model.live.debounce.500ms="searchQuery" type="search" id="default-search" class="block w-72 p-4 pl-10 text-sm input-field placeholder:text-gray-300" placeholder="Search" required>
                </div>
            </form>
        </div>
        <div class="my-5">
            <hr>
        </div>
        <div>
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-neutral-200">
                                <thead>
                                    <tr class="text-neutral-500">
                                        <th class="px-1 w-5 py-3 text-xs font-medium text-left uppercase">
                                            <input type="checkbox" name="" id="" disabled>
                                        </th>
                                        <th class="px-3 py-3 w-10 text-xs font-medium text-left uppercase">BookingID</th>
                                        <th class="px-3 py-3 text-xs font-medium text-left uppercase w-40">Event
                                        </th>
                                        <th class="px-2 py-3 text-xs font-medium text-left uppercase">Ticket</th>
                                        <th class="px-3 py-3 text-xs font-medium text-left uppercase">Customer</th>
                                        <th class="px-3 py-3 text-xs font-medium text-left uppercase">Sent Via</th>
                                        <th class="px-3 py-3 text-xs font-medium text-center uppercase">Scanned</th>
                                        <th class="px-3 py-3 text-xs font-medium text-center uppercase">Status</th>
                                        <th class="px-3 py-3 text-xs font-medium text-center uppercase">Date</th>
                                        <th class="px-3 py-3 text-xs font-medium text-center uppercase">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-neutral-200">
                                    @foreach ($bookings as $booking)
                                    <tr class="text-neutral-800">
                                        <td>
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">{{$booking->id}}
                                        </td>
                                        <td class="px-3 py-4 text-sm whitespace-nowrap text-primary">{{$booking->order->event->title}}</td>
                                        <td class="px-2 py-4 text-sm whitespace-nowrap">{{$booking->ticket->title}}</td>
                                        <td class="px-3 py-4 text-sm whitespace-nowrap">{{$booking->order?->billing?->name}}</td>
                                        <td class=" text-sm whitespace-nowrap">
                                            <a href="#" class="px-3 py-3 bg-black rounded-md text-white ">Manage</a>
                                        </td>
                                        <td class=" text-sm whitespace-nowrap">
                                            <select name="" id="" class="appearance-none h-10 bg-primary border-none text-white px-8 py-2 rounded-md">
                                                <option value="">Active</option>
                                            </select>
                                        </td>
                                        <td class="text-sm whitespace-nowrap">
                                            <select name="" id="" class="h-10 bg-primary border-none text-white px-8 py-2 rounded-md stroke-white border-white fill-white">
                                                <option value="">Yes</option>
                                            </select>
                                        </td>
                                        <td class="text-sm whitespace-nowrap">
                                            <select name="" id="" class="h-10 bg-primary border-none text-white px-8 py-2 rounded-md stroke-white border-white fill-white">
                                                <option value="">Yes</option>
                                            </select>
                                        </td>
                                        <td class="text-sm whitespace-nowrap">
                                            <select name="" id="" class="h-10 bg-primary border-none text-white px-8 py-2 rounded-md stroke-white border-white fill-white">
                                                <option value="">Yes</option>
                                            </select>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        {{$bookings->links()}}
    </div>
</div>