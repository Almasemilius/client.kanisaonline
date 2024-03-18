<div class="w-full justify-between p-5">
    <div class=" bg-white p-3 md:pb-10">
        <div class="md:px-20 md:pt-10">
            <h2 class="text-base md:text-lg font-droidBold text-black">Add Report</h2>
            <p class="py-3 md:py-5 text-xs md:text-sm">Please fill out the following details accurately. Mandatory fields are marked with an asterisk (*)</p>
        </div>
        <div x-data="app()" x-cloak class="md:w-full">
            <div class="md:px-10 flex  pb-10 w-10/12 ml-9">
                <div class="w-14">
                    <span class="wizard-number" :class="{'text-primary border-primary' : (step === 1 || step === 2  || step === 3 || step === 4)}">
                        1
                    </span>
                    <span class="wizard-label" :class="{'text-primary' : (step === 1 || step === 2 || step === 3 || step === 4)}">Select Service/Event</span>
                </div>
                <div class="wizard-devider flex-1" :class="{'bg-primary' : (step === 2 || step === 3 || step === 4), 'bg-fading' : step !== 2}">
                </div>
                <div class="w-16">
                    <span class="wizard-number" :class="{'text-primary border-primary' : (step === 2 || step === 3 || step === 4)}">
                        2
                    </span>
                    <span class="wizard-label" :class="{'text-primary' : (step === 2 || step === 3 || step === 4)}">Attendance</span>
                </div>
                <div class="wizard-devider flex-1" :class="{'bg-primary' : ( step === 3 || step === 4), 'bg-fading' : step !== 3}">
                </div>
                <div class="w-16">
                    <span class="wizard-number" :class="{'text-primary border-primary' : (step === 3 || step === 4)}">
                        3
                    </span>
                    <span class="wizard-label" :class="{'text-primary' : (step === 3 || step === 4)}">Offerings</span>
                </div>
                <div class="wizard-devider flex-1" :class="{'bg-primary' : ( step === 3 || step === 4), 'bg-fading' : step !== 3}">
                </div>
                <div class="w-16">
                    <span class="wizard-number" :class="{'text-primary border-primary' : (step === 3 || step === 4)}">
                        3
                    </span>
                    <span class="wizard-label" :class="{'text-primary' : (step === 3 || step === 4)}">Sales & Expenses</span>
                </div>
                <div class="wizard-devider flex-1" :class="{'bg-primary' : ( step === 3 || step === 4), 'bg-fading' : step !== 3}">
                </div>
                <div class="w-16">
                    <span class="wizard-number" :class="{'text-primary border-primary' : (step === 3 || step === 4)}">
                        3
                    </span>
                    <span class="wizard-label" :class="{'text-primary' : (step === 3 || step === 4)}">Others</span>
                </div>
            </div>
            <div x-show.transition.in="step === 1" class="w-10/12 ml-9 ">
                <div class="w-full md:px-14  md:gap-16">

                    <div class="col-span-6 w-full flex flex-col space-y-5">
                        <div class="">
                            <div class="church-input-group">
                                <label for="service_type" class=" input-label">Select Service/Event: <span class="text-primary">*</span></label>
                                <select wire:model='event' name="service_type" id="service_type" class="input-field-wizard bg-background h-10">
                                    <option value="">Select Service/Event</option>
                                    @foreach ($events as $event)
                                        
                                     <option value="{{'event-'.$event->id}}">{{$event->name}}</option>
                                    @endforeach
                                    @foreach ($services as $service)
                                        
                                     <option value="{{'service-'.$service->id}}">{{$service->name}}</option>
                                    @endforeach
                                    <!-- <option value="Confession">Confession</option>
                                    <option value="Consultation">Consultation</option> -->
                                </select>
                            </div>
                            <div class="error-div">
                                @error('report.service') <span class="error">{{ $message }}</span> @enderror
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
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Men:</label>
                        <input wire:model='report.men' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Women:</label>
                        <input wire:model='report.women' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Children:</label>
                        <input wire:model='report.children' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Guests:</label>
                        <input wire:model='report.guests' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Online:</label>
                        <input wire:model='report.online' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>

                    <div class=" w-full flex space-x-10 pt-5 justify-end col-span-3">
                        <a href="#" class="btn text-secondary border border-secondary">
                            Discard</a>
                        <button wire:click="firstStep" class="btn text-white bg-secondary">Continue</button>
                        <!-- <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button> -->
                    </div>
                </div>
            </div>
            
            <div x-show.transition.in="step === 4" class="w-10/12 ml-9 ">
                <!-- <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10"> -->
                <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10">
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Deliverance:</label>
                        <input wire:model='report.deliverance' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Filled With Holy Spirit:</label>
                        <input wire:model='report.filled_with_holy_spirit' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Baptism:</label>
                        <input wire:model='report.baptism' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>

                    <div class=" w-full flex space-x-10 pt-5 justify-end col-span-3">
                        <a href="#" class="btn text-secondary border border-secondary">
                            Discard</a>
                        <button wire:click="firstStep" class="btn text-white bg-secondary">Continue</button>
                        <!-- <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button> -->
                    </div>
                </div>
            </div>
            <div x-show.transition.in="step === 3" class="w-10/12 ml-9 ">
                <!-- <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10"> -->
                <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10">
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Offerings:</label>
                        <input wire:model='report.offerings' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Tithet:</label>
                        <input wire:model='report.tithe' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Special Offering:</label>
                        <input wire:model='report.special_offerings' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Others:</label>
                        <input wire:model='report.others' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>

                    <div class=" w-full flex space-x-10 pt-5 justify-end col-span-3">
                        <a href="#" class="btn text-secondary border border-secondary">
                            Discard</a>
                        <button wire:click="firstStep" class="btn text-white bg-secondary">Continue</button>
                        <!-- <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button> -->
                    </div>
                </div>
            </div>
            <div x-show.transition.in="step === 5" class="w-10/12 ml-9 ">
                <!-- <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10"> -->
                <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10">
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Expenses:</label>
                        <input wire:model='report.expenses' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Sales:</label>
                        <input wire:model='report.sales' type="number" min=0 class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>

                    <div class=" w-full flex space-x-10 pt-5 justify-end col-span-3">
                        <a href="#" class="btn text-secondary border border-secondary">
                            Discard</a>
                        <button wire:click="firstStep" class="btn text-white bg-secondary">Continue</button>
                        <!-- <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button> -->
                    </div>
                </div>
            </div>
            <div x-show.transition.in="step === 6" class="w-10/12 ml-9 ">
                <!-- <div class="w-full grid grid-cols-3 md:px-14 gap-5 md:gap-10"> -->
                <div class="w-full grid grid-cols-2 md:px-14 gap-5 md:gap-10">
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">Start Date & Time:</label>
                        <input wire:model='report.start_date' type="date" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-2 md:col-span-1">
                        <label for="name" class="input-label">End Date & Time:</label>
                        <input wire:model='report.end_date' type="date" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>

                    <div class=" w-full flex space-x-10 pt-5 justify-end col-span-3">
                        <a href="#" class="btn text-secondary border border-secondary">
                            Discard</a>
                        <button wire:click="addReport" class="btn text-white bg-secondary">Continue</button>
                        <!-- <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button> -->
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