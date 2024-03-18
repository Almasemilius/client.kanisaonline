@php
    $members = App\Models\User::where('role','member')->count();
    $services = App\Models\ChurchService::count();
    $events = App\Models\ServiceEvent::count();
@endphp

<div>
    <div class="dashboard-card-container">
        <div class="dashboard-card ">
            <div class="flex gap-5">
                <svg xmlns=" http://www.w3.org/2000/svg" class="dashboard-svg fill-red-700 bg-red-200 rounded-full" viewBox="0 0 24 24">
                    <path d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z" />
                </svg>
                <div class="flex items-center">
                    <span class="dashboard-card-title">Members</span>
                </div>
            </div>
            <div class="pl-14 flex">
                <span class="dashboard-number">{{$members}}</span>

            </div>
        </div>
        <div class="dashboard-card ">
            <div class="flex gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="dashboard-svg fill-green-700 bg-green-200 rounded-full" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Zm11-4v2m0 10v2m0-8v2" />
                </svg>
                <div class="flex items-center">
                    <span class="dashboard-card-title">Services</span>
                </div>
            </div>
            <div class="pl-14 flex">
                <span class="dashboard-number">{{$services}}</span>
            </div>
        </div>
        <div class="dashboard-card ">
            <div class="flex gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="dashboard-svg fill-blue-700 bg-blue-200 rounded-full" viewBox="0 0 24 24">
                    <path d="M18 16.184v-1.851c0-1.93-1.57-3.5-3.5-3.5c-.827 0-1.5-.673-1.5-1.5V7.816A2.997 2.997 0 0 0 15 5c0-1.654-1.346-3-3-3S9 3.346 9 5c0 1.302.839 2.401 2 2.815v1.518c0 .827-.673 1.5-1.5 1.5c-1.93 0-3.5 1.57-3.5 3.5v1.851A2.997 2.997 0 0 0 4 19c0 1.654 1.346 3 3 3s3-1.346 3-3a2.997 2.997 0 0 0-2-2.816v-1.851c0-.827.673-1.5 1.5-1.5c.979 0 1.864-.407 2.5-1.058a3.487 3.487 0 0 0 2.5 1.058c.827 0 1.5.673 1.5 1.5v1.851A2.997 2.997 0 0 0 14 19c0 1.654 1.346 3 3 3s3-1.346 3-3a2.997 2.997 0 0 0-2-2.816zM7 20a1.001 1.001 0 0 1 0-2a1.001 1.001 0 0 1 0 2zm5-16a1.001 1.001 0 1 1-1 1c0-.551.448-1 1-1zm5 16a1.001 1.001 0 0 1 0-2a1.001 1.001 0 0 1 0 2z" />
                </svg>
                <div class="flex items-center">
                    <span class="dashboard-card-title">Groups</span>
                </div>
            </div>
            <div class="pl-14 flex">
                <span class="dashboard-number">0</span>

            </div>
        </div>
        <div class="dashboard-card ">
            <div class="flex gap-5">

                <svg class="dashboard-svg  bg-red-200 rounded-full" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect x="0.59082" width="11" height="12" fill="url(#pattern0)" />
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_2012_473" transform="matrix(0.00426136 0 0 0.00390625 -0.0454545 0)" />
                        </pattern>
                        <image id="image0_2012_473" width="256" height="256" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF8WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDAgNzkuMTYwNDUxLCAyMDE3LzA1LzA2LTAxOjA4OjIxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKE1hY2ludG9zaCkiIHhtcDpDcmVhdGVEYXRlPSIyMDIzLTEwLTIwVDEyOjI5OjQ4KzAzOjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMy0xMC0yMFQxMjozMDoxNiswMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMy0xMC0yMFQxMjozMDoxNiswMzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpiOTVlNzk2Ny00NjIwLTQ4MTktYjE3Zi01MzNkODNhOWVhYzciIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDpiYzJjNzE5YS03MGU1LTgyNGEtYTMwOS1hM2VlZDZkZmE5NGEiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4MmI3NGI4OC1kN2QxLTRkYzEtYTRjZS04M2JmZjNlY2QxZWIiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjgyYjc0Yjg4LWQ3ZDEtNGRjMS1hNGNlLTgzYmZmM2VjZDFlYiIgc3RFdnQ6d2hlbj0iMjAyMy0xMC0yMFQxMjoyOTo0OCswMzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDpiOTVlNzk2Ny00NjIwLTQ4MTktYjE3Zi01MzNkODNhOWVhYzciIHN0RXZ0OndoZW49IjIwMjMtMTAtMjBUMTI6MzA6MTYrMDM6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz769Zw5AAAMxElEQVR4Ae3Be6yfdWEH4Of9Wrm1hcqklptBQQpi6BiYTFEsrejM3KYiIggMY2RTUhGHdLoNBtEpoAjiQHGZYSAoAuo0SiYtRUBc7IZ1gi0MVCijXEQu5V7Ob/GPJY4AntPz/s77/s738zzNYDAQEXUqIqJaRURUq4iIahURUa0iIqpVRES1ioioVhER1SoiolpFRFSriIhqFRFRrSIiqlVERLWKiKhWERHVKiKiWkVEVKuIiGoVEVGtIiKqVUREtYqIqFYREdUqIqJaRURUq4iI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" />
                    </defs>
                </svg>
                <div class="flex items-center">
                    <span class="dashboard-card-title">Events</span>
                </div>
            </div>
            <div class="pl-14 flex">
                <span class="dashboard-number">{{$events}}</span>

            </div>
        </div>

    </div>

    <div class="w-full grid grid-cols-2 py-5 gap-5">
        <div class="bg-white w-full">
            <div class="w-full flex items-center justify-between p-5">
                <h1>Calendar</h1>
                <div class="flex gap-5 items-center ">
                    <div class="flex gap-1 items-center">
                        <div class="h-2 w-2 bg-red-600 rounded-full"></div>
                        <h3>Holy Mass</h3>
                    </div>
                    <div class="flex gap-1 items-center">
                        <div class="h-2 w-2 bg-green-600 rounded-full"></div>
                        <h3>Events</h3>
                    </div>
                    <div class="flex gap-1 items-center">
                        <div class="h-2 w-2 bg-blue-600 rounded-full"></div>
                        <h3>Consultation</h3>
                    </div>

                </div>
            </div>
            <div class="antialiased sans-serif">
                <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                

                        <div class="bg-white rounded-lg shadow overflow-hidden p-2 w-full">

                            <div class="flex items-center justify-between py-2 px-6 w-full">
                                <div>
                                    <span x-text="MONTH_NAMES[month]" class="text-sm font-bold text-gray-800"></span>
                                    <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                </div>
                                <div class="border rounded-lg px-1" style="padding-top: 2px;">
                                    <button type="button" class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center" :class="{'cursor-not-allowed opacity-25': month == 0 }" :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                        <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </button>
                                    <div class="border-r inline-flex h-6"></div>
                                    <button type="button" class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1" :class="{'cursor-not-allowed opacity-25': month == 11 }" :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                        <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="-mx-1 -mb-1">
                                <div class="flex flex-wrap" style="margin-bottom: -40px;">
                                    <template x-for="(day, index) in DAYS" :key="index">
                                        <div style="width: 12%" class="px-2 py-2">
                                            <div x-text="day" class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center"></div>
                                        </div>
                                    </template>
                                </div>

                                <div class="flex flex-wrap border-t border-l">
                                    <template x-for="blankday in blankdays">
                                        <div style="width: 12%; height: 80px" class="text-center text-sm border-r border-b px-4 pt-2"></div>
                                    </template>
                                    <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                        <div style="width: 12%; height: 80px" class="px-4 pt-2 border-r border-b relative">
                                            <div @click="showEventModal(date)" x-text="date" class="inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100" :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"></div>
                                            <div style="height: 80px;" class="overflow-y-auto mt-1">
                                                <!-- <div 
										class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
										x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
										x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

                                                <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                                    <div class="px-2 py-1 rounded-lg mt-1 overflow-hidden border" :class="{
												'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
												'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
												'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
												'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
												'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
											}">
                                                        <p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>

                    <!-- Modal -->
                    <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openEventModal">
                        <div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
                            <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer" x-on:click="openEventModal = !openEventModal">
                                <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                                </svg>
                            </div>

                            <div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block p-8">

                                <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Add Event Details</h2>

                                <div class="mb-4">
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event title</label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_title">
                                </div>

                                <div class="mb-4">
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event date</label>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_date" readonly>
                                </div>

                                <div class="inline-block w-64 mb-4">
                                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Select a theme</label>
                                    <div class="relative">
                                        <select @change="event_theme = $event.target.value;" x-model="event_theme" class="block appearance-none w-full bg-gray-200 border-2 border-gray-200 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-blue-500 text-gray-700">
                                            <template x-for="(theme, index) in themes">
                                                <option :value="theme.value" x-text="theme.label"></option>
                                            </template>

                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8 text-right">
                                    <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="openEventModal = !openEventModal">
                                        Cancel
                                    </button>
                                    <button type="button" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm" @click="addEvent()">
                                        Save Event
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->
                </div>

                <script>
                    const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                    const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

                    function app() {
                        return {
                            month: '',
                            year: '',
                            no_of_days: [],
                            blankdays: [],
                            days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                            events: [{
                                    event_date: new Date(2020, 3, 1),
                                    event_title: "April Fool's Day",
                                    event_theme: 'blue'
                                },

                                {
                                    event_date: new Date(2020, 3, 10),
                                    event_title: "Birthday",
                                    event_theme: 'red'
                                },

                                {
                                    event_date: new Date(2020, 3, 16),
                                    event_title: "Upcoming Event",
                                    event_theme: 'green'
                                }
                            ],
                            event_title: '',
                            event_date: '',
                            event_theme: 'blue',

                            themes: [{
                                    value: "blue",
                                    label: "Blue Theme"
                                },
                                {
                                    value: "red",
                                    label: "Red Theme"
                                },
                                {
                                    value: "yellow",
                                    label: "Yellow Theme"
                                },
                                {
                                    value: "green",
                                    label: "Green Theme"
                                },
                                {
                                    value: "purple",
                                    label: "Purple Theme"
                                }
                            ],

                            openEventModal: false,

                            initDate() {
                                let today = new Date();
                                this.month = today.getMonth();
                                this.year = today.getFullYear();
                                this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                            },

                            isToday(date) {
                                const today = new Date();
                                const d = new Date(this.year, this.month, date);

                                return today.toDateString() === d.toDateString() ? true : false;
                            },

                            showEventModal(date) {
                                // open the modal
                                this.openEventModal = true;
                                this.event_date = new Date(this.year, this.month, date).toDateString();
                            },

                            addEvent() {
                                if (this.event_title == '') {
                                    return;
                                }

                                this.events.push({
                                    event_date: this.event_date,
                                    event_title: this.event_title,
                                    event_theme: this.event_theme
                                });

                                console.log(this.events);

                                // clear the form data
                                this.event_title = '';
                                this.event_date = '';
                                this.event_theme = 'blue';

                                //close the modal
                                this.openEventModal = false;
                            },

                            getNoOfDays() {
                                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                                // find where to start calendar day of week
                                let dayOfWeek = new Date(this.year, this.month).getDay();
                                let blankdaysArray = [];
                                for (var i = 1; i <= dayOfWeek; i++) {
                                    blankdaysArray.push(i);
                                }

                                let daysArray = [];
                                for (var i = 1; i <= daysInMonth; i++) {
                                    daysArray.push(i);
                                }

                                this.blankdays = blankdaysArray;
                                this.no_of_days = daysArray;
                            }
                        }
                    }
                </script>
            </div>
        </div>
        <div class="w-full h-full bg-white">
        <div class="w-full flex items-center justify-between p-5">
                <h1>Notification</h1>
            </div>
        </div>
    </div>
</div>