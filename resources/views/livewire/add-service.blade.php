<div class="w-full justify-between p-5">
    <div class=" bg-white p-3 md:pb-10">
        <div class="md:px-20 md:pt-10">
            <h2 class="text-base md:text-lg font-droidBold text-black">Add Event</h2>
            <p class="py-3 md:py-5 text-xs md:text-sm">Please fill out the following details accurately. Mandatory fields are marked with an asterisk (*)</p>
        </div>
        <div x-data="app()" x-cloak class="md:w-full">
            <div class="md:px-10 flex  pb-10 w-10/12 ml-9">
                <div class="w-14">
                    <span class="wizard-number" :class="{'text-primary border-primary' : (step === 1 || step === 2  || step === 3 || step === 4)}">
                        1
                    </span>
                    <span class="wizard-label" :class="{'text-primary' : (step === 1 || step === 2 || step === 3 || step === 4)}">Basic
                        Details</span>
                </div>
                <div class="wizard-devider flex-1" :class="{'bg-primary' : (step === 2 || step === 3 || step === 4), 'bg-fading' : step !== 2}">
                </div>
                <div class="w-16">
                    <span class="wizard-number" :class="{'text-primary border-primary' : (step === 2 || step === 3 || step === 4)}">
                        2
                    </span>
                    <span class="wizard-label" :class="{'text-primary' : (step === 2 || step === 3 || step === 4)}">Adress</span>
                </div>
                <div class="wizard-devider flex-1" :class="{'bg-primary' : ( step === 3 || step === 4), 'bg-fading' : step !== 3}">
                </div>
                <div class="w-16">
                    <span class="wizard-number" :class="{'text-primary border-primary' : (step === 3 || step === 4)}">
                        3
                    </span>
                    <span class="wizard-label" :class="{'text-primary' : (step === 3 || step === 4)}">Adress</span>
                </div>
            </div>
            <div x-show.transition.in="step === 1" class="w-10/12 ml-9 ">
                <div class="w-full md:px-14 md:grid md:grid-cols-9 md:gap-16">
                    <div class="w-full space-y-3 md:col-span-3 md:space-y-5">
                        <div class="bg-fading w-full h-56  flex items-center justify-center rounded-md overflow-hidden">
                            @if ($image?->temporaryUrl())
                            <img src="{{ $image->temporaryUrl() }}" alt="" class="h-full w-full object-cover overflow-hidden">
                            @elseif ($image_url)
                            <img src="{{asset('storage/services/'.$service->image_url)}}" alt="" class="h-full w-full object-cover overflow-hidden">
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 fill-background" viewBox="0 0 512 512">
                                <path d="M457.6 140.2l-82.5-4-4.8-53.8c-1-11.3-11.1-19.2-22.9-18.3L51.5 88.4c-11.8 1-20.3 10.5-19.4 21.7l21.2 235.8c1 11.3 11.2 19.2 22.9 18.3l15-1.2-2.4 45.8c-.6 12.6 9.2 22.8 22.4 23.5L441.3 448c13.2.6 24.1-8.6 24.8-21.2L480 163.5c.6-12.5-9.3-22.7-22.4-23.3zm-354.9 5.3l-7.1 134.8L78.1 305 62 127v-.5-.5c1-5 4.4-9 9.6-9.4l261-21.4c5.2-.4 9.7 3 10.5 7.9 0 .2.3.2.3.4 0 .1.3.2.3.4l2.7 30.8-219-10.5c-13.2-.4-24.1 8.8-24.7 21.3zm334 236.9l-84.8-99.5-37.4 34.3-69.2-80.8-122.7 130.7L133 168v-.4c1-5.4 6.2-9.3 11.9-9l291.2 14c5.8.3 10.3 4.7 10.4 10.2 0 .2.3.3.3.5l-10.1 199.1z" />
                                <path d="M384 256c17.6 0 32-14.4 32-32s-14.3-32-32-32c-17.6 0-32 14.3-32 32s14.3 32 32 32z" />
                            </svg>
                            @endif
                        </div>
                        <label for="logo" class="w-full cursor-pointer h-14 border rounded-full border-secondary flex items-center justify-center border-dashed">
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-secondary" viewBox="0 0 512 512">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 367.79h76c55 0 100-29.21 100-83.6s-53-81.47-96-83.6c-8.89-85.06-71-136.8-144-136.8c-69 0-113.44 45.79-128 91.2c-60 5.7-112 43.88-112 106.4s54 106.4 120 106.4h56" />
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m320 255.79l-64-64l-64 64m64 192.42V207.79" />
                                </svg>
                                <div class="text-sm font-droidBold text-secondary ">
                                    Upload Image
                                </div>
                                <input wire:model='image' type="file" class="hidden" id="logo">
                            </div>
                        </label>
                        <div class="error-div">
                            @error('logo') <span class="error">{{ $message }}</span> @enderror

                        </div>
                    </div>
                    <div class="col-span-6 w-full flex flex-col space-y-5">
                        <div class="">
                            <div class="church-input-group">
                                <label for="name" class=" input-label">Name: <span class="text-primary">*</span></label>
                                <input wire:model='service.name' id="name" type="text" class="input-field-wizard bg-background h-10" placeholder="Enter Name">
                            </div>
                            <div class="error-div">
                                @error('service.name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="">
                            <div class="church-input-group">
                                <label for="service_type" class=" input-label">Service type: <span class="text-primary">*</span></label>
                                <select wire:model='service.type' name="service_type" id="service_type" class="input-field-wizard bg-background h-10">
                                    <option value="">Select Event Lead</option>
                                    <option value="Holy Mass">Holy mass</option>
                                    <option value="Confession">Confession</option>
                                    <option value="Consultation">Consultation</option>
                                </select>
                            </div>
                            <div class="error-div">
                                @error('service.type') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="">
                            <div class="church-input-group">
                                <label for="description" class="input-label">Description: <span class="text-primary">*</span></label>
                                <textarea wire:model='service.description' name="service_description" id="description" class="textarea-field-wizard bg-background h-20">
                                </textarea>
                            </div>
                            <div class="error-div">
                                @error('service.description') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class=" w-full flex space-x-10 pt-5 justify-end">
                            <a href="#" class="btn text-secondary border border-secondary">
                                Discard</a>
                            <button wire:click="firstStep" class="btn text-white bg-secondary">Continue</button>
                            <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
            <div x-show.transition.in="step === 2" class="w-10/12 ml-9 ">
                <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10">
                    <div class="church-input-group">
                        <label for="minister_type" class=" input-label">Ministered By: <span class="text-primary">*</span></label>
                        <select wire:model='service.minister_type' name="minister_type" id="minister_type" class="input-field-wizard bg-background h-10">
                            <option value="">Select Event Lead</option>
                            <option value="Joseph Makonine">Joseph Makonine</option>
                        </select>
                    </div>
                    <div class="church-input-group col-span-2">
                        <label for="minister_name" class="input-label">Minister Name:</label>
                        <input wire:model='service.minister_name' type="text" id="minister_name" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group">
                        <label for="target_type" class=" input-label">Target Type: <span class="text-primary">*</span></label>
                        <select wire:model='service.target_type' name="yearSelect" id="target_type" class="input-field-wizard bg-background h-10">
                            <option value="">Target Name</option>
                            <option value="test Minister">Test Minister</option>
                        </select>
                    </div>
                    <div class="church-input-group col-span-2">
                        <label for="target_name" class="input-label">Target Name:</label>
                        <input wire:model='service.target_name' name="target_name" id="target_name" type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-3">
                        <label for="location" class="input-label">Location:</label>
                        <input wire:model='service.location' type="text" name="location" id="location" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>

                    <div class=" w-full col-span-3 flex justify-end space-x-10 pt-5">
                        <a href="#" class="btn text-secondary border border-secondary">
                            Discard</a>
                        <!-- <button  class="btn text-white bg-secondary">Finish</button> -->
                        <button wire:click="firstStep" class="btn text-white bg-secondary">Continue</button>



                    </div>
                </div>
            </div>
            <div x-show.transition.in="step === 3" class="w-10/12 ml-9 ">
                <!-- <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10"> -->
                <div class="w-full grid grid-cols-2 md:px-14 gap-5 md:gap-10">
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="start_date" class="input-label">Start Date:</label>
                        <input wire:model='start_date' type="date" name="start_date" id="start_date" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="end_date" class="input-label">End Date:</label>
                        <input wire:model='end_date' id="end_date" name="end_date" type="date" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="start_time" class="input-label">Start Time:</label>
                        <input wire:model='start_time' name="start_time" id="start_time" type="time" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="end_time" class="input-label">End Time:</label>
                        <input wire:model='end_time' id="end_time" name="end_time" type="time" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2">
                        <label for="location" class=" input-label">Location:</label>
                        <input wire:model='event.location' id="location" name="location" type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>

                    <div class=" w-full col-span-2 flex justify-end space-x-10 pt-5">
                        <a href="#" class="btn text-secondary border border-secondary">
                            Discard</a>
                        <button wire:click="addService" class="btn text-white bg-secondary">Finish</button>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function app() {
        return {
            step: 1,

        }
    }
</script>
</div>