@php
    use Carbon\Carbon;
@endphp
<div class="space-y-5">
    <div>
        <a href="{{Route('list.service')}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 p-3 bg-white rounded-full" viewBox="0 0 24 24">
                <path fill="currentColor" d="m7.825 13l4.9 4.9q.3.3.288.7t-.313.7q-.3.275-.7.288t-.7-.288l-6.6-6.6q-.15-.15-.213-.325T4.426 12q0-.2.063-.375T4.7 11.3l6.6-6.6q.275-.275.688-.275t.712.275q.3.3.3.713t-.3.712L7.825 11H19q.425 0 .713.288T20 12q0 .425-.288.713T19 13z" />
            </svg>
        </a>
    </div>
    <div class="w-full bg-white">
        <div class="px-10 pt-10 grid grid-cols-4">
            <div class="w-full flex justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 bg-gray-100 stroke-none p-10 rounded-full" viewBox="0 0 24 24">
                    <path fill="black" d="M2 22v-8l4-1.775V9l5-2.5V5H9V3h2V1h2v2h2v2h-2v1.5L18 9v3.225L22 14v8h-9v-5h-2v5zm2-2h5v-5.1h6V20h5v-4.8l-4-1.8v-3.35L12 8l-4 2.05v3.35l-4 1.8zm8-6.5q.625 0 1.063-.437T13.5 12q0-.625-.437-1.062T12 10.5q-.625 0-1.062.438T10.5 12q0 .625.438 1.063T12 13.5m0 .5" />
                </svg>
            </div>
            <div class="col-span-2 w-full h-40 space-y-3">
                <div class="space-y-3">
                    <h3 class="text-lg font-bold">{{$service->name}}</h3>
                    <p class="text-gray-400">{{$service->type}}</p>
                </div>
                <div class="w-full">
                    <span class="text-green-600 text-sm bg-green-100 py-1 px-2 rounded-full">
                        Upcoming
                    </span>
                </div>
            </div>
            <div class="w-full h-40">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                        <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                    </svg>
                </div>
            </div>
        </div>
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
    }" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="w-full bg-white px-10 py-5 min-h-[40vh]">
            <!-- Tabs Start -->
            <div class="w-full md:grid grid-cols-5 gap-5">
                <div class="col-span-5 h-12">
                    <div class="relative w-full">

                        <div x-ref="tabButtons" class="relative inline-grid items-center justify-center w-full h-7 grid-cols-7 select-none py-1">
                            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-2 text-black border-red-500' : tabButtonActive($el) }" class="">Description</button>
                            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-2 text-black border-red-500' : tabButtonActive($el) }" class="">Participants</button>
                            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-2 text-black border-red-500' : tabButtonActive($el) }" class="">Time</button>
                            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-2 text-black border-red-500' : tabButtonActive($el) }" class="">Report</button>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="relative flex items-center justify-center w-full p-5 ">

                <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full ">
                    <div class="w-full text-sm">
                        {{$service->description}}
                    </div>
                </div>
            </div>

            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
                <div class="w-full bg-white space-y-5">
                    <div class="w-full flex">
                        <div class="w-1/4">
                            <span>Ministered By:</span>
                        </div>
                        <div class="w-1/4">
                            <span>Pastor Joseph Makonine</span>

                        </div>
                        <div class="w-1/4 flex justify-start items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full flex">
                        <div class="w-1/4">
                            <span>Target:</span>
                        </div>
                        <div class="w-1/4">
                            <span>All</span>

                        </div>

                    </div>
                    <div class="w-full flex">
                        <div class="w-1/4">
                            <span>Location:</span>
                        </div>
                        <div class="w-1/4">
                            <span>Church</span>

                        </div>
                    </div>

                </div>
            </div>

            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
                <div class="w-full bg-white space-y-5">
                    <div class="w-full flex">
                        <div class="w-1/4">
                            <span>Start Date | End Date:</span>
                        </div>
                        <div class="w-1/4">
                            <span>{{Carbon::make($service->start_date)->format('Y-m-d')}} | {{Carbon::make($service->end_date)->format('Y-m-d')}}</span>

                        </div>
                        <div class="w-1/4 flex justify-start items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                                <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full flex">
                        <div class="w-1/4">
                            <span>Start Time | End Time::</span>
                        </div>
                        <div class="w-1/4">
                            <span>{{Carbon::make($service->start_date)->format('H:i')}} | {{Carbon::make($service->end_date)->format('H:i')}}</span>

                        </div>

                    </div>
                    <div class="w-full flex">
                        <div class="w-1/4">
                            <span>Recurrence:</span>
                        </div>
                        <div class="w-1/4">
                            <span>Weekly</span>

                        </div>
                    </div>

                </div>
            </div>
            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            @if ($report = $service->report)
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
    </div>
</div>
</div>