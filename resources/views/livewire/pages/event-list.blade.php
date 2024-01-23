@php
use Carbon\Carbon;
@endphp
<div class="bg-gray-100">
    <div class="bg-primary h-48 w-full">
        <div class="w-full  grid grid-cols-6 container gap-10">
            <div class="col-span-2">

            </div>
            <div class="col-span-4 pt-32 text-3xl font-semibold text-white">
                <h1>Conferences</h1>
            </div>
        </div>
    </div>
    <div class="w-full grid grid-cols-12 container gap-5 py-10">
        <div class="col-span-3  ">
            <div class="bg-white p-5 space-y-5">
                <div class="flex w-full">
                    <input wire:model.live="searchQuery" type="text" class="w-10/12 border-gray-200 bg-gray-50 text-gray-700 rounded-l-md" placeholder="Search..">
                    <div class="w-2/12 bg-primary flex items-center justify-center rounded-r-md overflow-hidden">
                        <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                </div>
                <hr>
                <div class="w-full space-y-3">
                    <span class="font-semibold">Filter by date</span>
                    <div class="flex w-full">
                        <input wire:model.live='date' type="date" class="w-10/12 border-gray-200 bg-gray-50 text-gray-700 rounded-l-md" placeholder="Start-End Date">
                        <div class="w-2/12 bg-primary flex items-center justify-center rounded-r-md overflow-hidden">
                            <svg xmlns=" http://www.w3.org/2000/svg" class="w-5 h-5 fill-white" viewBox="0 0 24 24">
                                <path d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="w-full space-y-3">
                    <span class="font-semibold">Category</span>
                    <div class="flex w-full">
                        <select wire:model.live='category' name="" id="" class="input-field w-full">
                            <option value="">All</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <hr>
                <div class="w-full">
                    <div class="pb-5">
                        <span class="font-semibold">Category</span>

                    </div>
                    <x-check-box text="Free" />
                    <x-check-box text="Paid" />
                </div>
                <div class="w-full pt-5">
                    <input type="range" class="w-full">
                </div>
            </div>

        </div>
        <div class="col-span-9 space-y-3">
            <div class="bg-blue-100 w-full h-14 flex items-center gap-5 px-5">
                @foreach ($categories as $category)
                    <div class="border-r h-full flex items-center px-5">{{$category->name}}</div>
                @endforeach
            </div>
            @foreach ($events as $event )
            <div class="grid grid-cols-5 bg-white p-5 gap-5 rounded-md">
                <div class="col-span-3 w-full ">
                    <div class="flex items-center gap-3 py-5">
                        <img src="{{asset('storage/organizers/'.$event->organizer->logo_url)}}" alt="" class="object-cover h-10 w-10 rounded-full">
                        <span class="text-sm">{{$event->organizer->name}}</span>
                    </div>
                    <div class="grid grid-cols-12 gap-3">
                        <div class="col-span-1 flex justify-center">
                            <span>
                                <svg xmlns=" http://www.w3.org/2000/svg" class="w-5 h-5 fill-primary" viewBox="0 0 24 24">
                                    <path d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="col-span-11">
                            <h5 class="text-sm">{{Carbon::make($event->start_date_time)->format('d F Y')}}</h5>
                        </div>
                        <div class="col-span-1 flex justify-center">

                        </div>
                        <div class="col-span-11">
                            <h5 class="font-semibold">{{$event->title}}</h5>
                            <p class="text-sm text-gray-600">{!!$event->description!!}</p>
                        </div>
                        <div class="col-span-1 flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w- h- fill-primary" viewBox="0 0 24 24">
                                <path d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.438 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125ZM12 12q.825 0 1.413-.587T14 10q0-.825-.588-1.413T12 8q-.825 0-1.413.588T10 10q0 .825.588 1.413T12 12Z" />
                            </svg>
                        </div>
                        <div class="col-span-11">
                            <h5 class="text-sm font-semibold">Mlimani City</h5>
                        </div>
                        <div class="col-span-12 grid grid-cols-3 gap-5">
                            <div class="flex w-full  space-x-3">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 fill-primary stroke-primary" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-width="2" d="M4 6h16M7 10h13M4 14h16m-6 4h6" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="text-xs">Time</h5>
                                    <h3 class="text-xs truncate">{{Carbon::make($event->start_date_time)->format('H:iA') .' - ' .Carbon::make($event->end_date_time)->format('H:iA')}}</h3>
                                </div>
                            </div>
                            <div class="w-full flex flex-col items-center gap-1">
                                <div>
                                    <p class="text-xs">Entrance Fee</p>
                                </div>
                                <div>
                                    <h5 class="text-sm bg-blue-100 px-2 rounded-full">Free</h5>
                                </div>
                            </div>
                            <div class="w-full ">
                                <a href="{{route('event.show', $event->id)}}" class="flex items-center justify-center gap-3 bg-primary text-white py-2 rounded text-center">Register</a>
                            </div>

                        </div>
                    </div>
                </div>
                <img src="{{asset('storage/events/'.$event->thumbnail_url)}}" alt="" class="object-cover col-span-2 h-full rounded-md">

            </div>
            @endforeach
            <div>
                {{$events->links()}}
            </div>
        </div>
    </div>
</div>