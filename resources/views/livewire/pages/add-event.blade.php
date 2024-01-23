<div class="space-y-5">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center gap-5">
            <div class="border-r pr-5">
                <h1 class="text-2xl font-semibold truncate">Add Events</h1>
            </div>
            <nav class="w-full flex justify-between">
                <ol class="inline-flex items-center mb-3 space-x-1 text-sm text-neutral-500 [&_.active-breadcrumb]:text-neutral-600 [&_.active-breadcrumb]:font-medium sm:mb-0">
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

                            <span>Events Management</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="#_" class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span>Add Event</span>
                        </a>
                    </li>

                </ol>

            </nav>
        </div>
    </div>
    <div class="w-full grid grid-cols-4 gap-3">
        <div class="col-span-3 space-y-2">
            <div class=" bg-white py-5 px-10 space-y-5">
                <h3>General information</h3>

                <div class="">
                    <span class="text-sm">Event Banner<span class="required-label">*</span></span>
                </div>
                <!-- Image Upload -->
                <div>
                    <label x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" wire:ignore for="dropzone-file" class="flex flex-col items-center justify-center w-full h-48 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-blue-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-red-500 p-2 bg-gray-200 rounded-md" viewBox="0 0 16 16">
                                <path d="M7 2.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71l-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z" />
                            </svg>
                            <p class="mb-2 text-sm text-black">Drop your image Here, or <span class="text-blue-700">Browse</span></p>
                            <p class="text-xs text-gray-600">Supported Formats PNG or JPEG</p>
                        </div>
                        <input wire:model="thumbnail" id="dropzone-file" type="file" class="hidden" />
                    </label>
                    <div class="w-full flex items-end">
                        <x-error-message property='thumbnail' />
                    </div>
                </div>
                <!-- Progres Indicator -->
                <div class="w-full flex space-x-2 items-center rounded-sm p-2 border bg-gray-50 justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-yellow-500" viewBox="0 0 24 24">
                        <path d="M13.17 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8.83c0-.53-.21-1.04-.59-1.41l-4.83-4.83c-.37-.38-.88-.59-1.41-.59zM16 15c0 2.34-2.01 4.21-4.39 3.98C9.53 18.78 8 16.92 8 14.83V9.64c0-1.31.94-2.5 2.24-2.63A2.5 2.5 0 0 1 13 9.5V14c0 .55-.45 1-1 1s-1-.45-1-1V9.5c0-.28-.22-.5-.5-.5s-.5.22-.5.5v5.39c0 1 .68 1.92 1.66 2.08A2 2 0 0 0 14 15v-3c0-.55.45-1 1-1s1 .45 1 1v3zm-2-8V4l4 4h-3c-.55 0-1-.45-1-1z" />
                    </svg>
                    <div x-show="isUploading" class="w-full">
                        <progress max="100" x-bind:value="progress" class="w-full h-0.5"></progress>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-primary" :class="{'hidden' : isUploading == false}" viewBox="0 0 24 24">
                        <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17L12 13.41L8.41 17L7 15.59L10.59 12L7 8.41L8.41 7L12 10.59L15.59 7L17 8.41L13.41 12L17 15.59z" />
                    </svg>
                    <!-- Upload Prograss Indicator -->
                </div>

                <div class="grid grid-cols-4 gap-10">
                    <div class="input-group">
                        <label for="organizer">Organizer<span class="required-label">*</span></label>
                        <select wire:model="event.organizer_id" class="w-full input-field" name="organizer" id="organizer">
                            <option value=""></option>
                            @foreach ($organizers as $organizer)
                            <option value="{{$organizer->id}}">{{$organizer->name}}</option>
                            @endforeach
                        </select>
                        <div class="w-full flex items-end">
                            <x-error-message property='event.organizer_id' />
                        </div>
                    </div>
                    <div class="col-span-3 input-group">
                        <label for="title">Title <span class="required-label">*</span></label>
                        <input wire:model="event.title" type="text" id="title" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Event Title">
                        <div class="w-full flex items-end">
                            <x-error-message property='event.title' />
                        </div>
                    </div>
                    <div class="col-span-2 input-group">
                        <label for="organizer">Type<span class="required-label">*</span></label>
                        <select wire:model="event.event_type_id" class="w-full input-field" name="organizer" id="organizer">
                            <option value=""></option>
                            @foreach ($eventTypes as $type)
                            <option value="{{$type->id}}" class="">{{$type->name}}</option>
                            @endforeach
                        </select>
                        <div class="w-full flex items-end">
                            <x-error-message property='event.event_type_id' />
                        </div>
                    </div>
                    <div class="col-span-2 input-group">
                        <label for="organizer">Category<span class="required-label">*</span></label>
                        <select wire:model="event.category_id" class="w-full input-field" name="organizer" id="organizer">
                            <option value=""></option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" class="">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <div class="w-full flex items-end">
                            <x-error-message property='event.category_id' />
                        </div>
                    </div>
                    <div wire:ignore class="col-span-4 input-group">
                        <label for="organizer">Description</label>
                        <textarea wire:model='description' id="description" data-description="@this"></textarea>
                    </div>
                    <div class="col-span-4 input-group">
                        <label for="organizer">More Information Link</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-3 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M10.5 20H2a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h1V3l2.03-.4a3 3 0 0 1 5.94 0L13 3v1h1a2 2 0 0 1 2 2v1h-2V6h-1v1H3V6H2v12h5v2h3.5zM8 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm2 4h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2zm0 2v8h8v-8h-8z" />
                                </svg>
                            </div>
                            <input wire:model="event.more_info_link" type="search" id="default-search" class="input-field w-full placeholder:text-gray-300" placeholder="Paste your link here" required>
                        </div>
                        <div class="w-full flex items-end">
                            <x-error-message property='event.more_info_link' />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div x-data="{ 
                    activeAccordion: '', 
                    setActiveAccordion(id) { 
                                this.activeAccordion = (this.activeAccordion == id) ? '' : id 
                            } 
                        }" class="relative w-full max-full mx-auto text-base space-y-2">

                    <div x-data="{ id: $id('accordion') }" :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }" class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
                        <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                            <span>Refund Policy</span>
                            <div :class="{ 'rotate-90': activeAccordion==id }" class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                                <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                                </div>
                                <div :class="{ 'rotate-90': activeAccordion==id }" class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                                </div>
                            </div>
                        </button>
                        <div wire:ignore x-show="activeAccordion==id" x-collapse x-cloak>
                            <div class="px-10 py-5 input-group">
                                <label for="organizer">Refund Policy</label>
                                <div id="refund" data-refund="@this"></div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ id: $id('accordion') }" :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }" class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
                        <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                            <span>Sponsors</span>
                            <div :class="{ 'rotate-90': activeAccordion==id }" class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                                <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                                </div>
                                <div :class="{ 'rotate-90': activeAccordion==id }" class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                                </div>
                            </div>
                        </button>
                        <div wire:ignore x-show="activeAccordion==id" x-collapse x-cloak>
                            <div class="px-10 py-5">
                                <div class="w-full">
                                    <select wire:model='selectedSponsors' multiple x-data="multiselect">
                                        @foreach ($sponsors as $sponsor)
                                        <option value="{{$sponsor->id}}">{{$sponsor->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-3">
            <div class="w-full bg-white p-5">
                <div class="space-y-5">
                    <h3>Adress Information</h3>
                    <div class="input-group">
                        <label for="organizer">Address<span class="required-label">*</span></label>
                        <textarea wire:model="event.venue_address" type="text" placeholder="Type your message here." class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
                    </div>
                    <div class="w-full flex items-end">
                        <x-error-message property='event.venue_address' />
                    </div>
                    <div class="input-group">
                        <label for="organizer">Longitude</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-3 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M10.5 20H2a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h1V3l2.03-.4a3 3 0 0 1 5.94 0L13 3v1h1a2 2 0 0 1 2 2v1h-2V6h-1v1H3V6H2v12h5v2h3.5zM8 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm2 4h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2zm0 2v8h8v-8h-8z" />
                                </svg>
                            </div>
                            <input wire:model="event.longitude" type="text" id="default-search" class="input-field w-full placeholder:text-gray-300" placeholder="Longitude" required>
                        </div>
                        <div class="w-full flex items-end">
                            <x-error-message property='event.longitude' />
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="organizer">Latitude</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-3 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M10.5 20H2a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h1V3l2.03-.4a3 3 0 0 1 5.94 0L13 3v1h1a2 2 0 0 1 2 2v1h-2V6h-1v1H3V6H2v12h5v2h3.5zM8 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm2 4h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2zm0 2v8h8v-8h-8z" />
                                </svg>
                            </div>
                            <input wire:model="event.latitude" type="text" id="default-search" class="input-field w-full placeholder:text-gray-300" placeholder="Latitude" required>
                            <div class="w-full flex items-end">
                                <x-error-message property='event.latitude' />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white p-5">
                <div class="space-y-5">
                    <h3>Date Information</h3>
                    <div class="input-group">
                        <label for="organizer">Timezone<span class="required-label">*</span></label>
                        <select wire:model="event.timezone" class="w-full input-field" name="organizer" id="organizer">
                            <option value="">Select Timezone</option>
                            <option value="UTC-12:00">UTC-12:00</option>
                            <option value="UTC-11:00">UTC-11:00</option>
                            <option value="UTC-10:00">UTC-10:00</option>
                            <option value="UTC-9:00">UTC-9:00</option>
                            <option value="UTC-8:00">UTC-8:00</option>
                            <option value="UTC-7:00">UTC-7:00</option>
                            <option value="UTC-6:00">UTC-6:00</option>
                            <option value="UTC-4:00">UTC-4:00</option>
                            <option value="UTC-3:00">UTC-3:00</option>
                            <option value="UTC-2:00">UTC-2:00</option>
                            <option value="UTC-1:00">UTC-1:00</option>
                            <option value="UTC">UTC</option>
                            <option value="UTC+1:00">UTC+1:00</option>
                            <option value="UTC+2:00">UTC+2:00</option>
                            <option value="UTC+3:00">UTC+3:00</option>
                            <option value="UTC+4:00">UTC+4:00</option>
                            <option value="UTC+5:00">UTC+5:00</option>
                            <option value="UTC+6:00">UTC+6:00</option>
                            <option value="UTC+7:00">UTC+7:00</option>
                            <option value="UTC+8:00">UTC+8:00</option>
                            <option value="UTC+9:00">UTC+9:00</option>
                            <option value="UTC+10:00">UTC+10:00</option>
                            <option value="UTC+11:00">UTC+11:00</option>
                            <option value="UTC+12:00">UTC+12:00</option>
                            <option value="UTC+14:00">UTC+14:00</option>
                        </select>
                        <div class="w-full flex items-end">
                            <x-error-message property='event.timezone' />
                        </div>
                    </div>
                    <!-- <div class="input-group">
                        <label for="organizer">Address<span class="required-label">*</span></label>
                        <textarea type="text" placeholder="Type your message here." class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
                    </div> -->
                    <div class="input-group">
                        <label for="organizer">Start date<span class="required-label">*</span></label>
                        <div class="w-full flex">
                            <!-- <x-date-picker /> -->
                            <input wire:model="startDate" type="date" id="default-search" class="border-gray-200 bg-gray-50 text-xs border-r-0 w-full placeholder:text-gray-300" placeholder="Longitude" required>
                            <input wire:model="startTime" type="time" id="default-search" class="border-gray-200 bg-gray-50 text-xs  w-full placeholder:text-gray-300" placeholder="Longitude" required>
                        </div>
                        <div class="w-full flex items-end">
                            <x-error-message property='startDate' />
                            <x-error-message property='startTime' />
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="organizer">End date</label>
                        <div class="w-full flex">
                            <!-- <x-date-picker /> -->
                            <input wire:model="endDate" type="date" id="default-search" class="border-gray-200 bg-gray-50 text-xs border-r-0 w-full placeholder:text-gray-300" placeholder="Longitude" required>
                            <input wire:model="endTime" type="time" id="default-search" class="border-gray-200 bg-gray-50 text-xs  w-full placeholder:text-gray-300" placeholder="Longitude" required>
                        </div>
                        <div class="w-full flex items-end">
                            <x-error-message property='endDate' />
                            <x-error-message property='endTime' />
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <button wire:click="addEvent" class="w-full flex justify-center primary-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" />
                    </svg>
                    <span>Add Event</span>
                </button>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    // console.log('changed')
                    let description = $('#description').data('description')
                    console.log(editor.getData())
                    @this.set('description', editor.getData())
                    // eval(description).set('state.description', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#refund'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    // console.log('changed')
                    let refund = $('#refund').data('refund')
                    console.log(editor.getData())
                    @this.set('refund', editor.getData())
                    // eval(refund).set('state.refund', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });

        document.addEventListener("alpine:init", () => {
            Alpine.data("multiselect", () => ({
                style: {
                    wrapper: "w-full relative",
                    select: "border w-full border-gray-300 rounded-lg py-2 px-2 text-sm flex gap-2 items-center cursor-pointer bg-white",
                    menuWrapper: "w-full rounded-lg py-1.5 text-sm mt-1 shadow-lg absolute bg-white z-10",
                    menu: "max-h-52 overflow-y-auto",
                    textList: "overflow-x-hidden text-ellipsis grow whitespace-nowrap",
                    trigger: "px-2 py-2 rounded bg-neutral-100",
                    badge: "py-1.5 px-3 rounded-full bg-neutral-100",
                    search: "px-3 py-2 w-full border-0 border-b-2 border-neutral-100 pb-3 outline-0 mb-1",
                    optionGroupTitle: "px-3 py-2 text-neutral-400 uppercase font-bold text-xs sticky top-0 bg-white",
                    clearSearchBtn: "absolute p-3 right-0 top-1 text-neutral-600",
                    label: "hover:bg-neutral-50 cursor-pointer flex py-2 px-3"
                },
                icons: {
                    times: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4"><g xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-width="2"><path d="M6 18L18 6M18 18L6 6"/></g></svg>',
                    arrowDown: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4"><path xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-width="2" d="M5 10l7 7 7-7"/></svg>'
                },
                init() {
                    const style = this.style;
                    const originalSelect = this.$el;
                    originalSelect.classList.add("hidden");
                    const wrapper = document.createElement("div");
                    wrapper.className = style.wrapper;
                    wrapper.setAttribute("x-data", "newSelect");
                    const newSelect = document.createElement("div");
                    newSelect.className = style.select;
                    newSelect.setAttribute("x-bind", "selectTrigger");
                    const textList = document.createElement("span");
                    textList.className = style.textList;
                    const triggerBtn = document.createElement("button");
                    triggerBtn.className = style.trigger;
                    triggerBtn.innerHTML = this.icons.arrowDown;
                    const countBadge = document.createElement("span");
                    countBadge.className = style.badge;
                    countBadge.setAttribute("x-bind", "countBadge");
                    newSelect.append(textList);
                    newSelect.append(countBadge);
                    newSelect.append(triggerBtn);
                    const menuWrapper = document.createElement("div");
                    menuWrapper.className = style.menuWrapper;
                    menuWrapper.setAttribute("x-bind", "selectMenu");
                    const menu = document.createElement("div");
                    menu.className = style.menu;
                    const search = document.createElement("input");
                    search.className = style.search;
                    search.setAttribute("x-bind", "search");
                    search.setAttribute("placeholder", "filter");
                    const clearSearchBtn = document.createElement("button");
                    clearSearchBtn.className = style.clearSearchBtn;
                    clearSearchBtn.setAttribute("x-bind", "clearSearchBtn");
                    clearSearchBtn.innerHTML = this.icons.times;
                    menuWrapper.append(search);
                    menuWrapper.append(menu);
                    menuWrapper.append(clearSearchBtn);
                    originalSelect.parentNode.insertBefore(
                        wrapper,
                        originalSelect.nextSibling
                    );
                    const itemGroups = originalSelect.querySelectorAll("optgroup");
                    if (itemGroups.length > 0) {
                        itemGroups.forEach((itemGroup) => processItems(itemGroup));
                    } else {
                        processItems(originalSelect);
                    }

                    function processItems(parent) {
                        const items = parent.querySelectorAll("option");
                        const subMenu = document.createElement("ul");
                        const groupName = parent.getAttribute("label") || null;
                        if (groupName) {
                            const groupTitle = document.createElement("h5");
                            groupTitle.className = style.optionGroupTitle;
                            groupTitle.innerText = groupName;
                            groupTitle.setAttribute("x-bind", "groupTitle");
                            menu.appendChild(groupTitle);
                        }
                        items.forEach((item) => {
                            const li = document.createElement("li");
                            li.setAttribute("x-bind", "listItem");

                            const checkBox = document.createElement("input");
                            checkBox.classList.add("mr-3", "mt-1");
                            checkBox.type = "checkbox";
                            checkBox.value = item.value;
                            checkBox.id = originalSelect.name + "_" + item.value;
                            const label = document.createElement("label");
                            label.className = style.label;
                            label.setAttribute("for", checkBox.id);
                            label.innerText = item.innerText;
                            checkBox.setAttribute("x-bind", "checkBox");
                            if (item.hasAttribute("selected")) {
                                checkBox.checked = true;
                            }
                            label.prepend(checkBox);
                            li.append(label);
                            subMenu.appendChild(li);
                        });
                        menu.appendChild(subMenu);
                    }

                    // function handleSelection(event) {
                    //     const selectedOptions = Array.from(event.target.selectedOptions);
                    //     const selectedItems = selectedOptions.map(option => option.value);
                    //     const sponsorIds = selectedItems.map(id => parseInt(id));

                    //     // Update the selectedSponsors property using Alpine's `.sync` method
                    //     this.selectedItems = selectedItems;
                    //     this.sponsorIds = sponsorIds;
                    //     @this.set('selectedSponsors', this.sponsorIds);
                    // }


                    wrapper.appendChild(newSelect);
                    wrapper.appendChild(menuWrapper);
                    Alpine.data("newSelect", () => ({
                        open: false,
                        showCountBadge: false,
                        items: [],
                        selectedItems: [],
                        filterBy: "",
                        init() {
                            this.regenerateTextItems();
                        },
                        regenerateTextItems() {
                            this.selectedItems = [];
                            this.items.forEach((item) => {
                                const checkbox = item.querySelector("input[type=checkbox]");
                                const text = item.querySelector("label").innerText;
                                if (checkbox.checked) {
                                    this.selectedItems.push(text);
                                }
                            });
                            // @this.set('selectedSponsors',selectedItems)
                            console.log(this.selectedItems)
                            if (this.selectedItems.length > 1) {
                                this.showCountBadge = true;
                                @this.set('selectedSponsors', this.selectedItems)
                                // console.log(selectedItems)
                            } else {
                                this.showCountBadge = false;
                            }
                            if (this.selectedItems.length === 0) {
                                textList.innerHTML = '<span class="text-neutral-400">select</span>';
                            } else {
                                textList.innerText = this.selectedItems.join(", ");
                            }
                        },
                        selectTrigger: {
                            ["@click"]() {
                                this.open = !this.open;

                                if (this.open) {
                                    this.$nextTick(() =>
                                        this.$root.querySelector("input[x-bind=search]").focus()
                                    );
                                }
                            }
                        },
                        selectMenu: {
                            ["x-show"]() {
                                return this.open;
                            },
                            ["x-transition"]() {},
                            ["@keydown.escape.window"]() {
                                this.open = false;
                            },
                            ["@click.away"]() {
                                this.open = false;
                            },
                            ["x-init"]() {
                                this.items = this.$el.querySelectorAll("li");
                                this.regenerateTextItems();
                            }
                        },
                        checkBox: {
                            ["@change"]() {
                                const checkBox = this.$el;

                                if (checkBox.checked) {
                                    originalSelect
                                        .querySelector("option[value='" + checkBox.value + "']")
                                        .setAttribute("selected", true);
                                } else {
                                    originalSelect
                                        .querySelector("option[value='" + checkBox.value + "']")
                                        .removeAttribute("selected");
                                }
                                this.regenerateTextItems();
                            }
                        },
                        countBadge: {
                            ["x-show"]() {
                                return this.showCountBadge;
                            },
                            ["x-text"]() {
                                return this.selectedItems.length;
                            }
                        },
                        search: {
                            ["@keydown.escape.stop"]() {
                                this.filterBy = "";
                                this.$el.blur();
                            },
                            ["@keyup"]() {
                                this.filterBy = this.$el.value;
                            },
                            ["x-model"]() {
                                return this.filterBy;
                            }
                        },
                        clearSearchBtn: {
                            ["@click"]() {
                                this.filterBy = "";
                            },
                            ["x-show"]() {
                                return this.filterBy.length > 0;
                            }
                        },
                        listItem: {
                            ["x-show"]() {
                                return (
                                    this.filterBy === "" ||
                                    this.$el.innerText
                                    .toLowerCase()
                                    .startsWith(this.filterBy.toLowerCase())
                                );
                            }
                        },
                        groupTitle: {
                            ["x-show"]() {
                                if (this.filterBy === "") return true;

                                let atLeastOneItemIsShown = false;

                                this.$el.nextElementSibling
                                    .querySelectorAll("li")
                                    .forEach((item) => {
                                        console.log(this.filterBy);
                                        if (
                                            item.innerText
                                            .toLowerCase()
                                            .startsWith(this.filterBy.toLowerCase())
                                        )
                                            atLeastOneItemIsShown = true;
                                    });
                                return atLeastOneItemIsShown;
                            }
                        }
                    }));
                }
            }));
        });
    </script>

</div>