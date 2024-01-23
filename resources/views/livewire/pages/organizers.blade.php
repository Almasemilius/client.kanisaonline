<div class="space-y-5">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center gap-3 md:gap-5">
            <div class="border-r pr-5">
                <h1 class="page-title">Organizers</h1>
            </div>
            <nav class="w-full flex justify-between items-center">
                <ol class="inline-flex items-center mb-3 md:space-x-1 text-xs text-neutral-500 [&_.active-breadcrumb]:text-neutral-600 [&_.active-breadcrumb]:font-medium sm:mb-0">
                    <li class="flex items-center h-full">
                        <a href="#_" class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 rounded-md hover:text-neutral-900 hover:bg-neutral-100">
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
                        <a href="{{route('organizer.list')}}" class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">Organizers</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="#_" class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">
                            <span class="breadcrumb-text">Add Organizer</span>
                        </a>
                    </li>
                </ol>

            </nav>
        </div>
    </div>
    <form wire:submit.prevent="addOrganizer" class="w-full bg-white p-10">
        <h3 class="text-lg pb-5">Add Sponsor</h3>
        <div class="grid grid-cols-5 gap-10 ">
            <div class="col-span-2 space-y-1 w-full ">
                <div class="bg-gray-50 w-full h-80 flex justify-center items-center border border-dashed">
                    <div class="flex flex-col items-center space-y-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 stroke-gray-500" viewBox="0 0 24 24">
                            <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                <path d="M7 18a4.6 4.4 0 0 1 0-9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                                <path d="m9 15l3-3l3 3m-3-3v9" />
                            </g>
                        </svg>
                        <span class="text-center text-sm text-gray-600">Drop File To Upload <br> Or</span>
                        <label for="dropzone-file" class="primary-btn rounded-lg cursor-pointer">Browse Files</label>
                    </div>
                    <input id="dropzone-file" type="file" wire:model="logo" class="hidden" />


                </div>
                <div class="w-full flex items-end">
                    <x-error-message property='logo' />
                </div>
                <div class="w-full flex space-x-2 items-center rounded-md p-2 border bg-gray-50 justify-between">
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
            </div>
            <div class="col-span-3 space-y-5">
                <div class="input-group w-full">
                    <label for="name">Name <span class="required-label">*</span></label>
                    <input wire:model="organizer.name"  type="text" id="name" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Sponsors name">
                    <div class="w-full flex items-end">
                        <x-error-message property='organizer.name' />
                    </div>
                </div>
                <div class="input-group w-full">
                    <label for="phone">Phone <span class="required-label">*</span></label>
                    <input wire:model="organizer.phone" type="text" id="phone" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Sponsors name">
                    <div class="w-full flex items-end">
                        <x-error-message property='organizer.phone' />
                    </div>
                </div>
                <div class="input-group w-full">
                    <label for="email">Email <span class="required-label">*</span></label>
                    <input wire:model="organizer.email" type="text" id="email" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Sponsors name">
                    <div class="w-full flex items-end">
                        <x-error-message property='organizer.email' />
                    </div>
                </div>
                <div class="input-group w-full">
                    <label for="featured">Featured <span class="required-label">*</span></label>
                    <input wire:model="sponsor.featured" type="text" id="featured" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Sponsors name">
                    <div class="w-full flex items-end">
                        <x-error-message property='sponsor.name' />
                    </div>
                </div>
                <button type="submit" class="col-span-4 w-full flex justify-end">
                    <div>
                        <a class="w-52 primary-btn flex justify-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" />
                            </svg>
                            @if ($editMode)

                            <h3 class="breadcrumb-text">Update Organizer</h3>
                            @else
                            <h3 class="breadcrumb-text">Add Organizer</h3>
                            @endif
                        </a>
                    </div>
                </button>
            </div>
        </div>

    </form>


</div>