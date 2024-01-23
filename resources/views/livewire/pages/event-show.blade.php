@php
use Carbon\Carbon;
@endphp
<div class="min-h-screen bg-gray-100">
    <div class="bg-primary h-48 w-full">
        <div class="w-full px-10 lg:container gap-10">
            <h1 class="pt-32 text-3xl font-semibold text-white">{{$event->title}}</h1>
        </div>
    </div>
    <div class="w-full px-5 lg:container py-10 space-y-5">
        <div class="flex gap-5">
            <div class="flex flex-col w-20">
                <div class="w-full px-3 lg:px-0 h-8 flex items-center justify-center text-white bg-primary">
                    <span>{{Carbon::make($event->start_date_time)->format('M')}}</span>
                </div>
                <div class="w-full h-8 flex items-center justify-center text-black font-semibold bg-gray-100">
                    <span>{{Carbon::make($event->start_date_time)->format('d')}}</span>
                </div>
            </div>
            <div class="w-full ">
                <h3 class="w-full text-xl lg:text-3xl font-bold">
                    {{$event->title}}
                </h3>
                <div class="w-full hidden lg:flex lg:gap-10 divide-x-2 py-2">
                    <div class="flex items-center gap-1">
                        <svg xmlns=" http://www.w3.org/2000/svg" class="event-view-svg" viewBox="0 0 24 24">
                            <path
                                d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z" />
                        </svg>

                        <span class="event-view-label">{{Carbon::make($event->start_date_time)->format('D, jS M
                            Y')}}</span>
                    </div>
                    <div class="flex items-center gap-1 px-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h-8 lg:h-5 w-8 lg:w-5 fill-primary rounded"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 20c4.4 0 8-3.6 8-8s-3.6-8-8-8s-8 3.6-8 8s3.6 8 8 8m0-18c5.5 0 10 4.5 10 10s-4.5 10-10 10S2 17.5 2 12S6.5 2 12 2m5 9.5V13h-6V7h1.5v4.5H17Z" />
                        </svg>
                        <span class="event-view-label">{{Carbon::make($event->start_date_time)->format('H:i A')}}</span>
                    </div>
                    <div class="flex items-center gap-1 px-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="event-view-svg" viewBox="0 0 24 24">
                            <path
                                d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.438 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125ZM12 12q.825 0 1.413-.587T14 10q0-.825-.588-1.413T12 8q-.825 0-1.413.588T10 10q0 .825.588 1.413T12 12Z" />
                        </svg>

                        <span class="event-view-label">{{$event->venue_address}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex lg:hidden lg:gap-10 divide-x-2">
            <div class="event-view-ribbon-container">
                <svg xmlns=" http://www.w3.org/2000/svg" class="event-view-svg" viewBox="0 0 24 24">
                    <path
                        d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z" />
                </svg>

                <span class="event-view-label">{{Carbon::make($event->start_date_time)->format('D, jS M Y')}}</span>
            </div>
            <div class="event-view-ribbon-container">
                <svg xmlns="http://www.w3.org/2000/svg" class="event-view-svg" viewBox="0 0 24 24">
                    <path
                        d="M12 20c4.4 0 8-3.6 8-8s-3.6-8-8-8s-8 3.6-8 8s3.6 8 8 8m0-18c5.5 0 10 4.5 10 10s-4.5 10-10 10S2 17.5 2 12S6.5 2 12 2m5 9.5V13h-6V7h1.5v4.5H17Z" />
                </svg>
                <span class="event-view-label truncate">{{Carbon::make($event->start_date_time)->format('H:i
                    A')}}</span>
            </div>
            <div class="event-view-ribbon-container">
                <svg xmlns="http://www.w3.org/2000/svg" class="event-view-svg" viewBox="0 0 24 24">
                    <path
                        d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.438 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125ZM12 12q.825 0 1.413-.587T14 10q0-.825-.588-1.413T12 8q-.825 0-1.413.588T10 10q0 .825.588 1.413T12 12Z" />
                </svg>

                <span class="event-view-label">{{$event->venue_address}}</span>
            </div>
        </div>
        <div class="h-72 lg:h-[500px] overflow-hidden bg-black">
            <img src="{{asset('storage/events/'.$event->thumbnail_url)}}" alt="" class="object-cover h-full w-full">
        </div>
        <div class="w-full flex flex-col-reverse lg:flex-row gap-3">
            <div class="w-full lg:w-8/12">
                <div class="text-primary">
                    <h3>{{$event->category->name}}</h3>
                </div>
                <div class="">
                    <h1 class="header-text">Description</h1>
                    <div class="space-y-5">
                        <p>
                            {!!$event->description!!}
                        </p>
                    </div>
                </div>
                <div wire:ignore class="w-full">
                    <h1 class="header-text">Map</h1>

                    <div class="w-full h-52 lg:h-96">
                        <div id="map" class="h-full w-full"></div>

                    </div>
                </div>
                <div class="py-10">
                    <h1 class="header-text">Partners & Sponsors</h1>
                    <div class="grid grid-cols-4 gap-5">
                        @foreach ($event->sponsor as $sponsor )
                        <div class="w-full flex items-start h-32 overflow-hidden">
                            <img src="{{asset('storage/sponsors/'.$sponsor->logo_url)}}" alt="" class="w-full h-full object-cover">
                        </div>
                        @endforeach
                    </div>

                </div>
                <div class="">
                    <h1 class="header-text">Return Policy</h1>
                    <p>
                        {!!$event->refund_policy!!}
                    </p>

                </div>
            </div>
            <div class="w-full lg:w-4/12 lg:px-5 relative -top-28 ">
                <div class="w-full bg-white p-5">
                    <h1 class="sub-header-text">Event Starts In</h1>
                    <div class="w-full my-3">
                        <hr>
                    </div>
                    <div class="grid grid-cols-4 gap-5">
                        <div class="flex flex-col items-center gap-1">
                            <div
                                class="p-2 h-12 w-12 flex items-center justify-center rounded-full border text-primary">
                                {{$remainingDays}}
                            </div>
                            <span class="time-counter">Days</span>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <div class="p-2 h-12 w-12 flex items-center justify-center rounded-full border">
                                {{$remainingHours}}
                            </div>
                            <span class="time-counter">Hours</span>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <div class="p-2 h-12 w-12 flex items-center justify-center rounded-full border">
                                {{$remainingMinutes}}
                            </div>
                            <span class="time-counter">Minutes</span>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <div class="p-2 h-12 w-12 flex items-center justify-center rounded-full border">
                                {{$remainingSeconds}}
                            </div>
                            <span class="time-counter">Seconds</span>
                        </div>
                    </div>
                    <div class="py-10">
                        <h1 class="sub-header-text">Organized By</h1>
                        <div class="w-full my-3">
                            <hr>
                        </div>
                        <div class="flex items-center gap-3 py-5">
                            <img src="{{asset('storage/organizers/'.$event->organizer->logo_url)}}" alt=""
                                class="object-cover h-10 w-10 rounded-full">
                            <span class="text-sm text-primary font-semibold">{{$event->organizer->name}}</span>
                        </div>
                        <div class="flex items-center gap-5 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-primary" viewBox="0 0 24 24">
                                <path
                                    d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88c2.11-2.69 5-7 5-9.88c0-2.76-2.24-5-5-5zm0 7.5a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z"
                                    opacity=".3" />
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" />
                                <circle cx="12" cy="9" r="2.5" fill="white" />
                            </svg>
                            <span class="text-sm">{{$event->venue_address}}</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <hr>
                    </div>
                    <div class="py-5">
                        <select name="" id="" class="input-field w-full">
                            <option value=""></option>
                        </select>
                    </div>
                    <div>
                        <h1 class="sub-header-text">Select Tickets</h1>
                        <div class="w-full my-3">
                            <hr>
                        </div>
                        <div class="py-5 space-y-5">
                            @foreach ($tickets as $key=>$ticket)

                            <div class="flex justify-between bg-gray-50 border rounded p-3">
                                <div class="flex flex-col space-y-1">
                                    <span class="text-sm">{{$ticket['title']}}</span>
                                    <span class="text-xs">Tsh {{$ticket['price']}}/-</span>
                                </div>
                                <div class="flex items-center">
                                    <button wire:click='decrement({{$key}})'
                                        class="counter-button border border-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19 12.998H5v-2h14z" />
                                        </svg>
                                    </button>
                                    <input wire:model='tickets.{{$key}}.quantity' type="text"
                                        value="{{$ticket['quantity']}}"
                                        class="counter-button w-10 text-xs border-y border-x-0 border-y-gray-300 focus:border-y focus:border-gray-300  focus:ring-0">
                                    <button wire:click='increment({{$key}})'
                                        class="counter-button border border-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2v-6Z" />
                                        </svg>
                                    </button>
                                </div>

                            </div>
                            @endforeach
                            <div class="border border-dashed w-full my-5"></div>
                            <div class="w-full flex justify-between items-center font-semibold">
                                <span class="text-sm">Total Price:</span>
                                <span>Tsh {{number_format($totalAmount)}}</span>
                            </div>
                            @error('tickets')
                            <li class="text-red-600">Please Select Ticket</li>
                            @enderror
                            <div class="w-full pt-10">
                                <button wire:click='bookEvent' class="primary-btn w-full flex justify-center rounded">
                                    Book Now
                                </button>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
        <hr>

        <div class="space-y-5">
            <h1 class="header-text">Related Events</h1>
            <div class="grid lg:grid-cols-3 gap-14 px-5">
                @foreach ($events as $event)
                <div
                    class="w-full wrounded-lg overflow-hidden border border-neutral-200/60 bg-gray-50 text-neutral-700 shadow-sm">
                    <div class="relative z-0">
                        <img src="{{asset('storage/events/'.$event->thumbnail_url)}}" class="w-full h-52" />
                    </div>
                    <div class="event-ribbon">
                        <div class="event-ribbon-item">
                            <svg xmlns=" http://www.w3.org/2000/svg" class="event-svg" viewBox="0 0 24 24">
                                <path
                                    d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z" />
                            </svg>
                            <span class="text-xs">{{Carbon::make($event->start_date_time)->format('d
                                M')}}</span>
                        </div>
                        <div class="event-ribbon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="event-svg" viewBox="0 0 512 512">
                                <path
                                    d="M128 48v122.8h.2l-.2.2 85.3 85-85.3 85.2.2.2h-.2V464h256V341.4h-.2l.2-.2-85.3-85.2 85.3-85-.2-.2h.2V48H128zm213.3 303.9v71.5H170.7v-71.5l85.3-85.2 85.3 85.2zM256 245.4l-85.3-85.2V87.6h170.7v72.5L256 245.4z" />
                            </svg>
                            <span class="text-xs">{{
                                $event->end_date_time == 'null' ? 'Null' :
                                Carbon::make($event->start_date_time)->diff(Carbon::make($event->end_date_time))->h.
                                ' H '
                                .Carbon::make($event->start_date_time)->diff(Carbon::make($event->end_date_time))->m
                                .' Min'
                                }}</span>
                        </div>
                        <div class="event-ribbon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="event-svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2zm4.2 14.2L11 13V7h1.5v5.2l4.5 2.7l-.8 1.3z" />
                            </svg>
                            <span class="text-xs">{{Carbon::make($event->start_date_time)->format('H:i A')}}</span>
                        </div>
                    </div>
                    <div class="px-5 -mt-5 space-y-3">
                        <span class="text-xs py-3 text-primary font-semibold">{{$event->organizer->name}}</span>

                        <h2 class="mb-2 text-base font-bold leading-snug tracking-tight">{{$event->title}}</h2>
                        <p class="mb-5 text-neutral-300 text-xs">{!!$event->description!!}</p>
                    </div>
                    <div class="m-5 border border-dashed border-gray-300">

                    </div>
                    <div class="w-full flex justify-between items-center px-5 pb-5">
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-primary" viewBox="0 0 24 24">
                                <path
                                    d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88c2.11-2.69 5-7 5-9.88c0-2.76-2.24-5-5-5zm0 7.5a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z"
                                    opacity=".3" />
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" />
                                <circle cx="12" cy="9" r="2.5" fill="white" />
                            </svg>
                            <span class="text-xs w-40">{{$event->venue_address}}</span>
                        </div>
                        <span class="text-xs text-primary">
                            Free
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
    </script>
    <script>
        
        function initMap() {
         // Specify the location
         const location = { lat: {{$event->latitude}}, lng: {{$this->longitude}} };
   
         // Create a map object and specify the DOM element for display.
         const map = new google.maps.Map(document.getElementById("map"), {
           center: location,
           zoom: 15, // Adjust the zoom level as needed
         });
   
         // Add a marker for the specified location
         new google.maps.Marker({
           position: location,
           map: map,
           title: "TymTalk",
         });
       }
    </script>

</div>