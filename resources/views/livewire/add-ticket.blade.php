@php
@endphp
<div class="space-y-5">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center gap-5">
            <div class="border-r pr-5">
                <h1 class="page-title">Events</h1>
            </div>
            <nav class="w-full flex justify-between">
                <ol
                    class="inline-flex items-center mb-3 md:space-x-1 text-xs text-neutral-500 [&_.active-breadcrumb]:text-neutral-600 [&_.active-breadcrumb]:font-medium sm:mb-0">
                    <li class="flex items-center h-full">
                        <a href="{{route('dashboard')}}"
                            class="inline-flex items-center px-2 py-1.5 space-x-1.5 rounded-md hover:text-neutral-900 hover:bg-neutral-100">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.6986 3.68267C12.7492 2.77246 11.2512 2.77244 10.3018 3.68263L4.20402 9.52838C3.43486 10.2658 3 11.2852 3 12.3507V19C3 20.1046 3.89543 21 5 21H8.04559C8.59787 21 9.04559 20.5523 9.04559 20V13.4547C9.04559 13.2034 9.24925 13 9.5 13H14.5456C14.7963 13 15 13.2034 15 13.4547V20C15 20.5523 15.4477 21 16 21H19C20.1046 21 21 20.1046 21 19V12.3507C21 11.2851 20.5652 10.2658 19.796 9.52838L13.6986 3.68267Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="{{route('events.management')}}"
                            class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">Events Management</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="#_"
                            class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">{{$event->title}}</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="{{route('ticket.management',$event->id)}}"
                            class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">Tickets</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="#_"
                            class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">Add Ticket</span>
                        </a>
                    </li>

                </ol>

            </nav>
        </div>
    </div>
    <div class="w-full grid grid-cols-12 gap-3">
        <div x-data="{ 
            activeAccordion: '', 
            setActiveAccordion(id) { 
                        this.activeAccordion = (this.activeAccordion == id) ? '' : id 
                    } 
                }" class="col-span-8 space-y-2">
            <div class=" bg-white py-5 px-10 space-y-5">
                <h3>Pricing information</h3>
                <div class="grid grid-cols-2 gap-5">
                    <div class="relative">
                        <input wire:model.live='freeValue' type="checkbox" id="alpine-checkbox" value=""
                            class="hidden peer" required="">
                        <label for="alpine-checkbox"
                            class="inline-flex items-center transition-all duration-300 justify-between w-full p-1 bg-gray-50 border-2 rounded-lg cursor-pointer group border-neutral-200/70 text-neutral-600 peer-checked:border-blue-600 peer-checked:text-neutral-900 peer-checked:bg-blue-50/50 hover:text-neutral-900">

                            <div class="w-full flex  justify-around items-center px-20">
                                <div class="w-full text-lg text-gray-300 transition-all duration-300 @if ($freeValue)
                                text-primary
                            @endif">Free</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-g transition-all duration-300  @if ($freeValue) fill-primary @else fill-gray-300
                                
                                @endif" viewBox="0 0 24 24">
                                    <path
                                        d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275q-.275.275-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7q-.275-.275-.7-.275t-.7.275L10.6 13.8ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                                </svg>
                            </div>
                        </label>
                    </div>
                    <div class="relative">
                        <input wire:model.live='paidValue' type="checkbox" id="paid" value="" class="hidden peer"
                            required="">
                        <label for="paid"
                            class="inline-flex items-center justify-between transition-all duration-300 w-full p-1 bg-gray-50 border-2 rounded-lg cursor-pointer group border-neutral-200/70  text-neutral-600 peer-checked:border-blue-600 peer-checked:text-neutral-900 peer-checked:bg-blue-50/50 hover:text-neutral-900">

                            <div class="w-full flex  justify-around items-center px-20">
                                <div class="w-full text-lg text-gray-300 transition-all duration-300 @if ($paidValue)
                                    text-primary
                                @endif">Paid</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-g transition-all duration-300 @if ($paidValue) fill-primary @else fill-gray-300
                                
                            @endif" viewBox="0 0 24 24">
                                    <path
                                        d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275q-.275.275-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7q-.275-.275-.7-.275t-.7.275L10.6 13.8ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                                </svg>
                            </div>
                        </label>
                    </div>

                </div>

                <div class="space-y-10">
                    <div class="space-y-2">
                        <label for="title" class="font-semibold">Price <span class="required-label">*</span></label>
                        <div class="w-full flex" class="">
                            <select wire:model='ticket.currency_code' @if($freeValue) disabled @endif name="" id=""
                                class="border-gray-200 bg-gray-50 text-gray-700 rounded-l-sm">
                                {{-- <option value="">...</option> --}}
                                @foreach ($currencies as $currency)
                                <option value="{{$currency->code}}">{{$currency->name}}</option>
                                @endforeach
                            </select>
                            <input wire:model='ticket.price' @if($freeValue) disabled @endif type="number"
                                class="w-full border-gray-200 bg-gray-50 text-gray-700 rounded-r-sm">
                        </div>
                        <div class="w-full flex items-end">
                            <x-error-message property='ticket.price' />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="title" class="font-semibold">Availability <span
                                class="required-label">*</span></label>
                        <div class="w-full flex" class="">
                            <select wire:model.live='ticket.availability' name="" id=""
                                class="border-gray-200 bg-gray-50 text-gray-700 rounded-l-sm">
                                <option value="Limited">Limited</option>
                                <option value="Unlimited">Unlimited</option>
                            </select>
                            <input wire:model='ticket.units_available' @if($ticket->availability == 'Unlimited')
                            disabled @endif type="number" class="w-full border-gray-200 bg-gray-50 text-gray-700
                            rounded-r-sm">
                        </div>
                        <div class="w-full flex items-end">
                            <x-error-message property='ticket.units_available' />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="title" class="font-semibold">Tickets Per Customer</label>
                        <div class="w-full flex" class="">
                            <select wire:model.live='ticket.availability_per_customer' name="" id=""
                                class="border-gray-200 bg-gray-50 text-gray-700 rounded-l-sm">
                                <option value="Limited">Limited</option>
                                <option value="Unlimited">Unlimited</option>
                            </select>
                            <input wire:model='ticket.units_per_customer' @if($ticket->availability_per_customer ==
                            'Unlimited') disabled @endif type="number" class="w-full border-gray-200 bg-gray-50
                            text-gray-700 rounded-r-sm">
                        </div>
                    </div>
                    <div class="w-full flex justify-between">
                        <div class="input-group">
                            <label for="organizer">Sales Start date<span class="required-label">*</span></label>
                            <div class="w-full flex">
                                <!-- <x-date-picker /> -->
                                <input wire:model="saleStartDate" type="date" id="default-search"
                                    class="border-gray-200 bg-gray-50 text-sm border-r-0 w-full p-3 placeholder:text-gray-300 rounded-l-sm"
                                    placeholder="Longitude" required>
                                <input wire:model="saleStartTime" type="time" id="default-search"
                                    class="border-gray-200 bg-gray-50 text-xs p-3 w-full placeholder:text-gray-300 rounded-r-sm"
                                    placeholder="Longitude" required>
                            </div>
                            <div class="w-full flex items-end">
                                <x-error-message property='saleStartDate' />
                                <x-error-message property='saleStartTime' />
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="organizer">Sales End date<span class="required-label">*</span></label>
                            <div class="w-full flex">
                                <!-- <x-date-picker /> -->
                                <input wire:model="saleEndDate" type="date" id="default-search"
                                    class="border-gray-200 bg-gray-50 text-sm border-r-0 w-full p-3 placeholder:text-gray-300 rounded-l-sm"
                                    placeholder="Longitude" required>
                                <input wire:model="saleEndTime" type="time" id="default-search"
                                    class="border-gray-200 bg-gray-50 text-xs p-3 w-full placeholder:text-gray-300 rounded-r-sm"
                                    placeholder="Longitude" required>
                            </div>
                            <div class="w-full flex items-end">
                                <x-error-message property='saleEndDate' />
                                <x-error-message property='saleEndTime' />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }"
                :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }"
                class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
                <button @click="setActiveAccordion(id)"
                    class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                    <span>Ticket Template</span>
                    <div :class="{ 'rotate-90': activeAccordion==id }"
                        class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                        <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                        </div>
                        <div :class="{ 'rotate-90': activeAccordion==id }"
                            class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                        </div>
                    </div>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="px-10 py-3 input-group">
                        <h1>Ticket Tempelate</h1>
                        <div class="grid grid-cols-2 gap-10">
                            <div class="w-full space-y-5">
                                <label for="organizer">Artwork<span class="required-label">*</span></label>
                                <div class="space-y-1">
                                    <label wire:ignore for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-48 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-blue-50">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-10 w-10 fill-red-500 p-2 bg-gray-200 rounded-md"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M7 2.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71l-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z" />
                                            </svg>
                                            <p class="mb-2 text-sm text-black">Drop your image Here, or <span
                                                    class="text-blue-700">Browse</span></p>
                                            <p class="text-xs text-gray-600">Supported Formats PNG or JPEG</p>
                                        </div>
                                        <input wire:model="artwork" id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                    <div class="w-full flex items-end">
                                        <x-error-message property='artwork' />
                                    </div>
                                    <div
                                        class="w-full flex space-x-2 items-center rounded-sm p-2 border bg-gray-50 justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-yellow-500"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M13.17 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8.83c0-.53-.21-1.04-.59-1.41l-4.83-4.83c-.37-.38-.88-.59-1.41-.59zM16 15c0 2.34-2.01 4.21-4.39 3.98C9.53 18.78 8 16.92 8 14.83V9.64c0-1.31.94-2.5 2.24-2.63A2.5 2.5 0 0 1 13 9.5V14c0 .55-.45 1-1 1s-1-.45-1-1V9.5c0-.28-.22-.5-.5-.5s-.5.22-.5.5v5.39c0 1 .68 1.92 1.66 2.08A2 2 0 0 0 14 15v-3c0-.55.45-1 1-1s1 .45 1 1v3zm-2-8V4l4 4h-3c-.55 0-1-.45-1-1z" />
                                        </svg>
                                        <div x-show="isUploading" class="w-full">
                                            <progress max="100" x-bind:value="progress" class="w-full h-0.5"></progress>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-primary"
                                            :class="{'hidden' : isUploading == false}" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17L12 13.41L8.41 17L7 15.59L10.59 12L7 8.41L8.41 7L12 10.59L15.59 7L17 8.41L13.41 12L17 15.59z" />
                                        </svg>
                                        <!-- Upload Prograss Indicator -->
                                    </div>
                                </div>
                            </div>
                            <div class="w-full space-y-3 py-5">
                                <div class="space-y-5">
                                    <div class="col-span-3 input-group">
                                        <label for="wisth">width <span class="required-label">*</span></label>
                                        <input wire:model="ticket.width" type="text" id="wisth"
                                            class="input-field w-full placeholder:text-gray-300" placeholder="Width">
                                        <div class="w-full flex items-end">
                                            <x-error-message property='ticket.width' />
                                        </div>
                                    </div>
                                    <div class="col-span-3 input-group">
                                        <label for="height">Height <span class="required-label">*</span></label>
                                        <input wire:model="ticket.height" type="text" id="height"
                                            class="input-field w-full placeholder:text-gray-300" placeholder="Height">
                                        <div class="w-full flex items-end">
                                            <x-error-message property='ticket.height' />
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <hr>
                        <div wire:ignore class="w-full h-20">
                            <h1>Add Field</h1>
                            <div class="w-full ">
                                <select multiple x-data="extraField" class="bg-gray-200">
                                    @foreach($extraFields as $field)
                                    <option value="{{$field->name}}">{{$field->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        @foreach ($printData as $index=>$field)
                        <div x-data="{ 
               activeAccordion: '', 
               setActiveAccordion(id) { 
                   this.activeAccordion = (this.activeAccordion == id) ? '' : id 
               } 
                }" class="relative w-full overflow-hidden text-sm font-normal bg-blue-50  divide-y divide-gray-200 rounded-md">
                            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group w-full">
                                <button @click="setActiveAccordion(id)"
                                    class="flex items-center justify-between w-full p-4 text-left select-none">
                                    <span>{{$field}}</span>
                                    <svg class="w-4 h-4 duration-200 ease-out"
                                        :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </button>
                                <div x-show="activeAccordion==id" x-collapse x-cloak class="w-full">

                                    <form wire:submit.prevent="addPrintData({{$field}})"
                                        class="w-full p-4 pt-0 opacity-70 grid grid-cols-2 gap-5">
                                        <div class="input-group">
                                            <label for="size.{{$index}}">Size <span
                                                    class="required-label">*</span></label>
                                            <div class="relative">
                                                <input wire:model="requiredPrinting.{{$index}}.size" type="text"
                                                    id="size.{{$index}}"
                                                    class="input-field w-full placeholder:text-gray-300"
                                                    placeholder="Size" required>
                                                <div class="w-full flex items-end">
                                                    <x-error-message property='event.latitude' />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="organizer">Font Type</label>
                                            <select class="w-full input-field" name="organizer" id="organizer">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                            <div class="w-full flex items-end">
                                                <x-error-message property='event.organizer_id' />
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="organizer">Cursor X <span
                                                    class="required-label">*</span></label>
                                            <div class="relative">
                                                <input wire:model="requiredPrinting.{{$index}}.cursor_x" type="text"
                                                    id="default-search"
                                                    class="input-field w-full placeholder:text-gray-300"
                                                    placeholder="Cursor X" required>
                                                <div class="w-full flex items-end">
                                                    <x-error-message property='event.latitude' />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="organizer">Cursor Y <span
                                                    class="required-label">*</span></label>
                                            <div class="relative">
                                                <input wire:model="requiredPrinting.{{$index}}.cursor_y" type="text"
                                                    id="default-search"
                                                    class="input-field w-full placeholder:text-gray-300"
                                                    placeholder="Cursor Y" required>
                                                <div class="w-full flex items-end">
                                                    <x-error-message property='event.latitude' />
                                                </div>
                                            </div>
                                        </div>
                                        <div></div>
                                        <div class="w-full flex justify-end">
                                            <button type="submit" class="primary-btn rounded-md">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }"
                :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }"
                class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
                <button @click="setActiveAccordion(id)"
                    class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                    <span>Discount Information</span>
                    <div :class="{ 'rotate-90': activeAccordion==id }"
                        class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                        <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                        </div>
                        <div :class="{ 'rotate-90': activeAccordion==id }"
                            class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                        </div>
                    </div>
                </button>
                {{-- Pricing Information --}}
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="px-10 py-3 input-group">
                        <h3>Discount Status</h3>
                        {{-- Ticket Type Group --}}
                        <div class="grid grid-cols-2 gap-5">
                            <div class="relative">
                                <input wire:model.live='disabledDiscount' type="checkbox" id="discountDisabled" value=""
                                    class="hidden peer" required="">
                                <label for="discountDisabled"
                                    class="inline-flex items-center transition-all duration-300 justify-between w-full p-1 bg-gray-50 border-2 rounded-lg cursor-pointer group border-neutral-200/70 text-neutral-600 peer-checked:border-blue-600 peer-checked:text-neutral-900 peer-checked:bg-blue-50/50 hover:text-neutral-900">

                                    <div class="w-full flex  justify-around items-center px-20">
                                        <div class="w-full text-lg text-gray-300 transition-all duration-300 @if ($disabledDiscount)
                                        text-primary
                                    @endif">Disable</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-g transition-all duration-300  @if ($disabledDiscount) fill-primary @else fill-gray-300
                                        
                                        @endif" viewBox="0 0 24 24">
                                            <path
                                                d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275q-.275.275-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7q-.275-.275-.7-.275t-.7.275L10.6 13.8ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="relative">
                                <input wire:model.live='enabledDiscount' type="checkbox" id="discountEnabled" value=""
                                    class="hidden peer" required="">
                                <label for="discountEnabled"
                                    class="inline-flex items-center justify-between transition-all duration-300 w-full p-1 bg-gray-50 border-2 rounded-lg cursor-pointer group border-neutral-200/70  text-neutral-600 peer-checked:border-blue-600 peer-checked:text-neutral-900 peer-checked:bg-blue-50/50 hover:text-neutral-900">

                                    <div class="w-full flex  justify-around items-center px-20">
                                        <div class="w-full text-lg text-gray-300 transition-all duration-300 @if ($enabledDiscount)
                                            text-primary
                                        @endif">Enable</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-g transition-all duration-300 @if ($enabledDiscount) fill-primary @else fill-gray-300
                                        
                                    @endif" viewBox="0 0 24 24">
                                            <path
                                                d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275q-.275.275-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7q-.275-.275-.7-.275t-.7.275L10.6 13.8ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="col-span-2 input-group">
                                <label for="organizer">Discount Type<span class="required-label">*</span></label>
                                <select @if ($disabledDiscount) disabled @endif wire:model="ticket.ebd_type"
                                    class="w-full input-field" name="organizer" id="organizer">
                                    <option value="Percentage">Percentage</option>
                                    <option value="Amount">Amount</option>
                                </select>
                                <div class="w-full flex items-end">
                                    <x-error-message property='ticket.ebd_type' />
                                </div>
                            </div>
                            <div class="col-span-2 input-group">
                                <label for="organizer">Amount<span class="required-label">*</span></label>
                                <input @if ($disabledDiscount) disabled @endif wire:model="ticket.ebd_amount"
                                    type="text" id="title" class="input-field w-full placeholder:text-gray-300"
                                    placeholder="Enter Name">
                                <div class="w-full flex items-end">
                                    <x-error-message property='ticket.ebd_amount' />
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="organizer">Discount Start date<span class="required-label">*</span></label>
                                <div class="w-full flex">
                                    <!-- <x-date-picker /> -->
                                    <input @if ($disabledDiscount) disabled @endif wire:model="ebdStartDate" type="date"
                                        id="default-search"
                                        class="border-gray-200 bg-gray-50 text-sm border-r-0 w-full p-3 placeholder:text-gray-300 rounded-l-sm"
                                        required>
                                    <input @if ($disabledDiscount) disabled @endif wire:model="ebdStartTime" type="time"
                                        id="default-search"
                                        class="border-gray-200 bg-gray-50 text-xs p-3 w-full placeholder:text-gray-300 rounded-r-sm"
                                        required>
                                </div>
                                <div class="w-full flex items-end">
                                    <x-error-message property='ebdStartDate' />
                                    <x-error-message property='ebdStartTime' />
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="organizer">Discount End date<span class="required-label">*</span></label>
                                <div class="w-full flex">
                                    <!-- <x-date-picker /> -->
                                    <input @if ($disabledDiscount) disabled @endif wire:model="ebdEndDate" type="date"
                                        id="default-search"
                                        class="border-gray-200 bg-gray-50 text-sm border-r-0 w-full p-3 placeholder:text-gray-300 rounded-l-sm"
                                        required>
                                    <input @if ($disabledDiscount) disabled @endif wire:model="ebdEndTime" type="time"
                                        id="default-search"
                                        class="border-gray-200 bg-gray-50 text-xs p-3 w-full placeholder:text-gray-300 rounded-r-sm"
                                        required>
                                </div>
                                <div class="w-full flex items-end">
                                    <x-error-message property='ebdEndDate' />
                                    <x-error-message property='ebdEndDate' />
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-4 space-y-5">
            <div x-data="{ 
                activeAccordion: '', 
                setActiveAccordion(id) { 
                            this.activeAccordion = (this.activeAccordion == id) ? '' : id 
                        } 
                    }" class=" bg-white py-5 px-10 space-y-5">
                <h3>General information</h3>
                <div class="input-group">
                    <label for="title">Title <span class="required-label">*</span></label>
                    <input wire:model="ticket.title" type="text" id="title"
                        class="input-field w-full placeholder:text-gray-300" placeholder="Enter Name">
                    <div class="w-full flex items-end">
                        <x-error-message property='ticket.title' />
                    </div>
                </div>
                <div class="input-group">
                    <label for="title">Description</label>
                    <textarea wire:model="ticket.description" cols="20" type="text" id="title"
                        class="input-field w-full placeholder:text-gray-300" placeholder="Enter Name"></textarea>
                    <div class="w-full flex items-end">
                        <x-error-message property='ticket.decription' />
                    </div>
                </div>
                <div wire:ignore class="w-full h-20">
                    <h1>Required Data</h1>
                    <div class="w-full">
                        <select multiple x-data="reqData">
                            @foreach($extraFields as $field)
                            <option value="{{$field->id}}">{{$field->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

            </div>
            <div class="">
                <button wire:click="addTicket" class="w-full flex justify-center primary-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M12 5v14m-7-7h14" />
                    </svg>
                    <span>Add Ticket</span>
                </button>
            </div>
            @if ($errors)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("extraField", () => ({
                style: {
                    wrap: "w-full relative",
                    select: "border w-full border-gray-300 rounded-lg py-2 px-2 text-sm flex gap-2 items-center cursor-pointer bg-gray-100",
                    menuwraper: "w-full rounded-lg py-1.5 text-sm mt-1 shadow-lg absolute bg-white z-10",
                    men: "max-h-52 overflow-y-auto",
                    selItems: "overflow-x-hidden text-ellipsis grow whitespace-nowrap",
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
                    const orSl = this.$el;
                    orSl.classList.add("hidden");
                    const wrap = document.createElement("div");
                    wrap.className = style.wrap;
                    wrap.setAttribute("x-data", "newSel");
                    const newSel = document.createElement("div");
                    newSel.className = style.select;
                    newSel.setAttribute("x-bind", "selectTrigger");
                    const selItems = document.createElement("span");
                    selItems.className = style.selItems;
                    const triggerButton = document.createElement("button");
                    triggerButton.className = style.trigger;
                    triggerButton.innerHTML = this.icons.arrowDown;
                    const countBdg = document.createElement("span");
                    countBdg.className = style.badge;
                    countBdg.setAttribute("x-bind", "countBdg");
                    newSel.append(selItems);
                    newSel.append(countBdg);
                    newSel.append(triggerButton);
                    const menuwraper = document.createElement("div");
                    menuwraper.className = style.menuwraper;
                    menuwraper.setAttribute("x-bind", "selectMenu");
                    const men = document.createElement("div");
                    men.className = style.men;
                    const search = document.createElement("input");
                    search.className = style.search;
                    search.setAttribute("x-bind", "search");
                    search.setAttribute("placeholder", "filter");
                    const clearSearchBtn = document.createElement("button");
                    clearSearchBtn.className = style.clearSearchBtn;
                    clearSearchBtn.setAttribute("x-bind", "clearSearchBtn");
                    clearSearchBtn.innerHTML = this.icons.times;
                    menuwraper.append(search);
                    menuwraper.append(men);
                    menuwraper.append(clearSearchBtn);
                    orSl.parentNode.insertBefore(
                        wrap,
                        orSl.nextSibling
                    );
                    const itemGroups = orSl.querySelectorAll("optgroup");
                    if (itemGroups.length > 0) {
                        itemGroups.forEach((itemGroup) => processItems(itemGroup));
                    } else {
                        processItems(orSl);
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
                            men.appendChild(groupTitle);
                        }
                        items.forEach((item) => {
                            const li = document.createElement("li");
                            li.setAttribute("x-bind", "listItem");

                            const checkBox = document.createElement("input");
                            checkBox.classList.add("mr-3", "mt-1");
                            checkBox.type = "checkbox";
                            checkBox.value = item.value;
                            checkBox.id = orSl.name + "_" + item.value;
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
                        men.appendChild(subMenu);
                    }

                    wrap.appendChild(newSel);
                    wrap.appendChild(menuwraper);
                    Alpine.data("newSel", () => ({
                        open: false,
                        showCountBdg: false,
                        items: [],
                        itemsSelected: [],
                        filterBy: "",
                        init() {
                            this.regenerateTextItems();
                        },
                        regenerateTextItems() {
                            this.itemsSelected = [];
                            this.items.forEach((item) => {
                                const checkbox = item.querySelector("input[type=checkbox]");
                                const text = item.querySelector("label").innerText;
                                if (checkbox.checked) {
                                    this.itemsSelected.push(text);
                                }
                            });
                            // @this.set('selectedSponsors',itemsSelected)
                            console.log(this.itemsSelected)
                            if (this.itemsSelected.length > 1) {
                                this.showCountBdg = true;
                                // console.log(itemsSelected)
                            } else {
                                this.showCountBdg = false;
                            }
                            if (this.itemsSelected.length === 0) {
                                selItems.innerHTML = '<span class="text-neutral-400">select</span>';
                            } else {
                                @this.set('printData', this.itemsSelected)

                                selItems.innerText = this.itemsSelected.join(", ");
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
                                    orSl
                                        .querySelector("option[value='" + checkBox.value + "']")
                                        .setAttribute("selected", true);
                                } else {
                                    orSl
                                        .querySelector("option[value='" + checkBox.value + "']")
                                        .removeAttribute("selected");
                                }
                                this.regenerateTextItems();
                            }
                        },
                        countBdg: {
                            ["x-show"]() {
                                return this.showCountBdg;
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
        document.addEventListener("alpine:init", () => {
            Alpine.data("reqData", () => ({
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
                                // console.log(selectedItems)
                            } else {
                                this.showCountBadge = false;
                            }
                            if (this.selectedItems.length === 0) {
                                textList.innerHTML = '<span class="text-neutral-400">select</span>';
                            } else {
                                @this.set('requiredData', this.selectedItems)
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