<div class="space-y-5">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center gap-5">
            <div class="border-r pr-5">
                <h1 class="page-title">Event Category</h1>
            </div>
            <nav class="w-full flex justify-between">
                <ol class="inline-flex items-center mb-3 md:space-x-1 text-xs text-neutral-500 [&_.active-breadcrumb]:text-neutral-600 [&_.active-breadcrumb]:font-medium sm:mb-0">
                    <li class="flex items-center h-full">
                        <a href="{{route('dashboard')}}" class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 rounded-md hover:text-neutral-900 hover:bg-neutral-100">
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
                        <a href="#_" class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text truncate">Events Management</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="{{route('categories.management')}}" class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">
                            <span class="breadcrumb-text truncate">Categories</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="#_" class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">
                            <span class="breadcrumb-text truncate">Add Category</span>
                        </a>
                    </li>
                </ol>

            </nav>
        </div>
    </div>
    <form wire:submit.prevent="addEventCategory" class="w-full bg-white px-5 md:px-10 py-5 grid md:grid-cols-3 gap-5">
        <div class="space-y-1">
            <!-- Image Upload -->
            <div class="col-span-2  space-y-3">
                <div class="">
                    <span class="input-label">Artwork<span class="required-label">*</span></span>
                </div>
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-48 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-blue-50">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-red-500 p-2 bg-gray-200 rounded-md" viewBox="0 0 16 16">
                            <path d="M7 2.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71l-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z" />
                        </svg>
                        <p class="mb-2 text-sm text-black">Drop your image Here, or <span class="text-blue-700">Browse</span></p>
                        <p class="text-xs text-gray-600">Supported Formats PNG or JPEG</p>
                    </div>
                    <input id="dropzone-file" type="file" wire:model="thumbnail" class="hidden" />
                </label>
            </div>
            <div class="col-span-2 w-full flex items-end">
                <x-error-message property='thumbnail' />
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
        <div class="col-span-2 space-y-5">
            <div>
                <div class="input-group">
                    <label for="title" class="input-label">Category <span class="required-label">*</span></label>
                    <input wire:model="eventCategory.name" type="text" id="title" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Event Title">
                </div>
                <div class="w-full flex items-end">
                    <x-error-message property='eventCategory.name' />
                </div>
            </div>
            <div>
                <div class="input-group">
                    <label for="title" class="input-label">Is Featured <span class="required-label">*</span></label>
                    <select wire:model="eventCategory.isFeatured" class="w-full input-field" name="organizer" id="organizer">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="w-full flex items-end">
                    <x-error-message property='eventCategory.isFeatured' />
                </div>
            </div>
        </div>
        <div></div>
        <div class="col-span-2">
            <div>

            </div>
            <div class="w-full md:flex md:items-end md:justify-end ">
                <button type="submit" class="w-1/2 md:w-1/3 flex justify-center primary-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" />
                    </svg>
                    <span>Add Category</span>
                </button>
            </div>
        </div>


    </form>

</div>