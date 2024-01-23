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
    <div wire:ignore x-show="activeAccordion==id" x-collapse x-cloak>
        <div class="px-10 py-3 input-group">
            <h1>Refund Policy</h1>
            <!-- <div id="refund" data-refund="@this"></div> -->
            <div class="grid grid-cols-2 gap-10">
                <div class="w-full space-y-5">
                    <label for="organizer">Sales End date<span class="required-label">*</span></label>
                    <div class="space-y-1">
                        <label wire:ignore for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-48 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-blue-50">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 fill-red-500 p-2 bg-gray-200 rounded-md" viewBox="0 0 16 16">
                                    <path
                                        d="M7 2.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71l-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z" />
                                </svg>
                                <p class="mb-2 text-sm text-black">Drop your image Here, or <span
                                        class="text-blue-700">Browse</span></p>
                                <p class="text-xs text-gray-600">Supported Formats PNG or JPEG</p>
                            </div>
                            <input wire:model="thumbnail" id="dropzone-file" type="file" class="hidden" />
                        </label>
                        <div class="w-full flex items-end">
                            <x-error-message property='thumbnail' />
                        </div>
                        <div class="w-full h-10 bg-black">

                        </div>
                    </div>
                </div>
                <div class="w-full space-y-3 py-5">
                    <div class="space-y-5">
                        <div class="col-span-3 input-group">
                            <label for="title">Title <span class="required-label">*</span></label>
                            <input wire:model="event.title" type="text" id="title"
                                class="input-field w-full placeholder:text-gray-300" placeholder="Enter Event Title">
                            <div class="w-full flex items-end">
                                <x-error-message property='event.title' />
                            </div>
                        </div>
                        <div class="col-span-3 input-group">
                            <label for="title">Title <span class="required-label">*</span></label>
                            <input wire:model="event.title" type="text" id="title"
                                class="input-field w-full placeholder:text-gray-300" placeholder="Enter Event Title">
                            <div class="w-full flex items-end">
                                <x-error-message property='event.title' />
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <hr>
            <div class="w-full h-20">
                <h1>Refund Policy</h1>
                <div class="w-full">
                    <select multiple x-data="multiselect">
                        @foreach($extraFields as $field)
                        <option value="{{$field->id}}">{{$field->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>
    </div>
</div>