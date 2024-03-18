@php
use Carbon\Carbon;
@endphp
<div class="space-y-5">
    <div>
        <a href="{{Route('events.list')}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 p-3 bg-white rounded-full" viewBox="0 0 24 24">
                <path fill="currentColor" d="m7.825 13l4.9 4.9q.3.3.288.7t-.313.7q-.3.275-.7.288t-.7-.288l-6.6-6.6q-.15-.15-.213-.325T4.426 12q0-.2.063-.375T4.7 11.3l6.6-6.6q.275-.275.688-.275t.712.275q.3.3.3.713t-.3.712L7.825 11H19q.425 0 .713.288T20 12q0 .425-.288.713T19 13z" />
            </svg>
        </a>
    </div>
    <div class="w-full h-60 bg-white">
        <div x-data="{
        tabSelected: 1,
        tabId: $id('tabs'),
        tabButtonClicked(tabButton){
            this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
            this.tabRepositionMarker(tabButton);
        },
        tabRepositionMarker(tabButton){
            this.$refs.tabMarker.style.width=tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height=tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left=tabButton.offsetLeft + 'px';
        },
        tabContentActive(tabContent){
            return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
        },
        tabButtonActive(tabContent){
            const tabId = tabContent.id.split('-').slice(-1);
            return this.tabSelected == tabId;
        }
    }" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="w-full bg-white p-10">
            <!-- Tabs Start -->
            <div class="w-1/2 md:grid grid-cols-5 gap-5">
                <div class="col-span-5 h-12">
                    <div class="relative w-full">

                        <div x-ref="tabButtons" class="relative inline-grid items-center justify-center w-full h-7 grid-cols-7 select-none py-1">
                            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-2 text-black border-red-500' : tabButtonActive($el) }" class="">Details</button>
                            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-2 text-black border-red-500' : tabButtonActive($el) }" class="">Report</button>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="relative flex items-center justify-center w-full p-5 ">

                <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full ">
                    <div class="w-full grid grid-cols-3 gap-10 ">
                        <div class="w-full space-y-5">
                            <div class="w-full h-80 rounded-md overflow-hidden">
                                <img src="{{asset('storage/events/'.$event->image_url)}}" class="object-cover h-full w-full" alt="">

                            </div>
                            <label for="logo" class="w-full cursor-pointer h-14 border rounded-full border-secondary flex items-center justify-center border-dashed">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-secondary" viewBox="0 0 512 512">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 367.79h76c55 0 100-29.21 100-83.6s-53-81.47-96-83.6c-8.89-85.06-71-136.8-144-136.8c-69 0-113.44 45.79-128 91.2c-60 5.7-112 43.88-112 106.4s54 106.4 120 106.4h56" />
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m320 255.79l-64-64l-64 64m64 192.42V207.79" />
                                    </svg>
                                    <div class="text-sm font-droidBold text-secondary ">
                                        Change Image
                                    </div>
                                    <input wire:model='image' type="file" class="hidden" id="logo">
                                </div>
                            </label>
                            <div class="error-div">
                                @error('logo') <span class="error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="w-full col-span-2 space-y-3">
                            <div class="w-full flex">
                                <h3 class="w-11/12 text-3xl font-bold">
                                    {{$event->name}}
                                </h3>
                                <div class="w-1/12 flex justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                        <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full">
                                <span class="text-green-600 text-sm bg-green-100 py-1 px-2 rounded-full">
                                    Upcoming
                                </span>
                            </div>
                            <div>
                                <p class="text-gray-500">
                                    {{$event->description}}
                                </p>
                            </div>
                            <div class="">
                                <div>
                                    <h3 class="font-bold">Minister</h3>
                                    <h3 class="font-extralight">{{$event->minister}}</h3>
                                </div>
                            </div>
                            <div class="">
                                <div class="w-full flex justify-between">
                                    <div class="flex-1">
                                        <h3 class="font-bold">Date & Time</h3>
                                        <span>{{Carbon::make($event->start_date)->format('Y-m-d') .' '.Carbon::make($event->start_date)->format('H:i')}} <b> to </b> {{Carbon::make($event->end_date)->format('Y-m-d').' '.Carbon::make($event->end_date)->format('H:i')}}</span>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                            <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <span class="text-green-600 bg-green-100 text-sm py-1 px-2 rounded-full">
                                    Weekly
                                </span>
                            </div>
                            <div class="">
                                <div>
                                    <h3 class="font-bold">Location</h3>
                                    <h3>{{$event->location}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
                @if ($report = $event->report)
                <div class="w-full bg-white space-y-5">
                    <div class="w-full grid grid-cols-4">
                        <div class="w-full flex">
                            <h4 class="text-xs text-gray-400 font-semibold">ATTENDNCE</h4>

                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>Men:</span>
                            <span>Women:</span>
                            <span>Children:</span>
                            <span>Guest:</span>
                            <span>Online:</span>
                            <span>Total:</span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>{{$report->men}}</span>
                            <span>{{$report->women}}</span>
                            <span>{{$report->children}}</span>
                            <span>{{$report->guest}}</span>
                            <span>{{$report->online}}</span>
                            <span>{{$report->men+$report->women+$report->children+$report->guest+$report->online}}</span>
                        </div>
                        <div class="w-full h-full flex justify-center items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                            </svg>
                        </div>
                    </div>
                    <hr>
                    <div class="w-full grid grid-cols-4">
                        <div class="w-full   flex ">
                            <h4 class="text-xs text-gray-400 font-semibold">ACTIVITY</h4>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>Deliverance:</span>
                            <span>Filled with Holy Spirit:</span>
                            <span>Baptism:</span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>{{$report->deliverance}}</span>
                            <span>{{$report->filled_with_holy_spirit}}</span>
                            <span>{{$report->baptism}}</span>
                        </div>
                        <div class="w-full h-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                            </svg>
                        </div>
                    </div>
                    <hr>
                    <div class="w-full grid grid-cols-4">
                        <div class="w-full flex ">
                            <h4 class="text-xs text-gray-400 font-semibold">OFFERINGS</h4>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>Offerings:</span>
                            <span>Tithe:</span>
                            <span>Special Offering:</span>
                            <span>Others:</span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>{{number_format($report->offerings)}}</span>
                            <span>{{number_format($report->tithe)}}</span>
                            <span>{{number_format($report->special_offerings)}}</span>
                            <span>{{number_format($report->others)}}</span>
                        </div>
                        <div class="w-full h-full flex justify-center items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                            </svg>
                        </div>
                    </div>
                    <hr>
                    <div class="w-full grid grid-cols-4">
                        <div class="w-full  flex ">
                            <h4 class="text-xs text-gray-400 font-semibold">SALES & EXPENSES</h4>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>Expenses:</span>
                            <span>Sales:</span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>{{number_format($report->sales)}}</span>
                            <span>{{number_format($report->expenses)}}</span>
                        </div>
                        <div class="w-full h-full flex justify-center items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                            </svg>
                        </div>
                    </div>
                    <hr>
                    <div class="w-full grid grid-cols-4">
                        <div class="w-full  flex ">
                            <h4 class="text-xs text-gray-400 font-semibold">OTHERS</h4>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>Duration:</span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span>{{Carbon::make($report->end_date)->diffForHumans(Carbon::make($report->start_date))}}</span>
                        </div>
                        <div class="w-full h-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                @else
                <div class="w-full flex h-full justify-center">
                    <a href="{{Route('add.report')}}" class="p-2 bg-gray-200 flex items-center rounded-full gap-2 text-primary font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 p-1 bg-primary rounded-full" viewBox="0 0 24 24">
                            <path fill="white" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                        </svg>
                        Add Report
                    </a>
                </div>
                @endif
            </div>

        </div>
        <!-- Tabs Ends -->

    </div>
</div>
</div>