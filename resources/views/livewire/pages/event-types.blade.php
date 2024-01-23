<div class="space-y-5">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center gap-5">
            <div class="border-r pr-5">
                <h1 class="text-2xl font-semibold truncate page-title">Event Type</h1>
            </div>
            <nav class="w-full flex justify-between">
                <ol
                    class="inline-flex items-center mb-3 md:space-x-1 text-xs text-neutral-500 [&_.active-breadcrumb]:text-neutral-600 [&_.active-breadcrumb]:font-medium sm:mb-0">
                    <li class="flex items-center h-full">
                        <a href="{{route('dashboard')}}"
                            class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 rounded-md hover:text-neutral-900 hover:bg-neutral-100">
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
                        <a href="{{route('event.type.list')}}"
                            class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text truncate">Events</span>
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
                            class="inline-flex items-center md:px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">
                            <span class="breadcrumb-text truncate">Event Types</span>
                        </a>
                    </li>
                </ol>

            </nav>
        </div>
    </div>
    <div class="w-full bg-white px-5 md:px-10 py-5 space-y-5">
        <h1 class="font-semibold">Add Type</h1>
        <form wire:submit.prevent="addEventType" class="grid md:grid-cols-3 gap-5">
            <div class="md:col-span-2 input-group">
                <label for="title" class="input-label">Type <span class="required-label">*</span></label>
                <input wire:model="eventType.name" type="text" id="title"
                    class="input-field w-full placeholder:text-gray-300 py-3" placeholder="Enter Event Title">
            </div>
            <div class="w-full flex items-end">
                <button type="submit"
                    class="w-full flex justify-center items-center gap-3 bg-primary text-white px-5 py-3 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M12 5v14m-7-7h14" />
                    </svg>
                    @if ($editMode)
                    <span>Update Type</span>
                    @else
                    <span>Add Type</span>
                    @endif
                </button>
            </div>
            <div>
                <x-error-message property='eventType.name' />
            </div>

        </form>
    </div>

</div>