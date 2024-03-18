<div class="w-full justify-between p-5">
    <div class=" bg-white p-3 md:pb-10">
        <div class="md:px-20 md:pt-10">
            <h2 class="text-base md:text-lg font-droidBold text-black">Add Member</h2>
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
            <div x-show.transition.in="step === 1" class="w-full ml-9 ">
                <div class="w-11/12 md:px-14 md:grid md:grid-cols-9 md:gap-10">
                    <div class="w-full space-y-3 md:col-span-3 md:space-y-5">
                        <div class="bg-fading w-full h-56  flex items-center justify-center rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 fill-background" viewBox="0 0 512 512">
                                <path d="M457.6 140.2l-82.5-4-4.8-53.8c-1-11.3-11.1-19.2-22.9-18.3L51.5 88.4c-11.8 1-20.3 10.5-19.4 21.7l21.2 235.8c1 11.3 11.2 19.2 22.9 18.3l15-1.2-2.4 45.8c-.6 12.6 9.2 22.8 22.4 23.5L441.3 448c13.2.6 24.1-8.6 24.8-21.2L480 163.5c.6-12.5-9.3-22.7-22.4-23.3zm-354.9 5.3l-7.1 134.8L78.1 305 62 127v-.5-.5c1-5 4.4-9 9.6-9.4l261-21.4c5.2-.4 9.7 3 10.5 7.9 0 .2.3.2.3.4 0 .1.3.2.3.4l2.7 30.8-219-10.5c-13.2-.4-24.1 8.8-24.7 21.3zm334 236.9l-84.8-99.5-37.4 34.3-69.2-80.8-122.7 130.7L133 168v-.4c1-5.4 6.2-9.3 11.9-9l291.2 14c5.8.3 10.3 4.7 10.4 10.2 0 .2.3.3.3.5l-10.1 199.1z" />
                                <path d="M384 256c17.6 0 32-14.4 32-32s-14.3-32-32-32c-17.6 0-32 14.3-32 32s14.3 32 32 32z" />
                            </svg>
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
                    <div class="col-span-6 grid grid-cols-4 w-full gap-5">
                        <div class="col-span-3">
                            <div class="church-input-group">
                                <label for="name" class=" input-label">Name: <span class="text-primary">*</span></label>
                                <input wire:model='user.name' type="text" class="input-field-wizard bg-background h-10" placeholder="Enter Name">
                            </div>
                            <div class="error-div">
                                @error('user.name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="">
                            <div class="church-input-group">
                                <label for="contact_person" class=" input-label">Gender: <span class="text-primary">*</span></label>
                                <select wire:model='user.gender' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="error-div">
                                @error('user.gender') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="church-input-group">
                                <label for="user.citizenship" class=" input-label">Citizenship: <span class="text-primary">*</span></label>
                                <select wire:model='user.citizenship' name="user.citizenship" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="Tanzanian">Tanzanian</option>
                                    <option value="Kenyan">Kenyan</option>
                                </select>
                            </div>
                            <div class="error-div">
                                @error('user.citizenship') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="church-input-group">
                                <label for="user.language" class=" input-label">Language: <span class="text-primary">*</span></label>
                                <select wire:model='user.language' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">Language</option>
                                    <option value="English">English</option>
                                    <option value="Swahili">Swahili</option>
                                </select>
                            </div>
                            <div class="error-div">
                                @error('user.language') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="church-input-group">
                                <label for="user.phone" class=" input-label">Phone: <span class="text-primary">*</span></label>
                                <input wire:model='user.phone' name="user.phone" type="text" class="input-field-wizard bg-background h-10" placeholder="Enter Phone">

                            </div>
                            <div class="error-div">
                                @error('user.phone') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="church-input-group">
                                <label for="user.email" class=" input-label">Email: <span class="text-primary">*</span></label>
                                <input wire:model='user.email' name="user.phone" type="text" class="input-field-wizard bg-background h-10" placeholder="Enter Name">
                            </div>
                            <div class="error-div">
                                @error('user.email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="church-input-group">
                                <label for="user.date_of_birth" class=" input-label">Date of birth: <span class="text-primary">*</span></label>
                                <div class="flex gap-3">
                                    <select wire:model="date" class="input-field-wizard bg-background h-10" name="" id="">
                                        <option value="">Date</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select wire:model="month" name="" id="" class="input-field-wizard bg-background h-10">
                                        <option value="">Month</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="error-div">
                                @error('event.minister') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="church-input-group">
                                <label for="contact_person" class=" input-label text-white"> .</label>
                                <select wire:model="year" name="" id="" class="input-field-wizard bg-background h-10">
                                    <option value="">Year</option>
                                    @for ($i = (int)$from->format('Y') ; $i <= (int) $to->format('Y') ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="error-div">
                                @error('event.minister') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class=" w-full col-span-4 flex space-x-10 pt-5 justify-end">
                            <a href="#" class="btn text-secondary border border-secondary">
                                Discard</a>
                            <button wire:click="firstStep" class="btn text-white bg-secondary">Continue</button>
                            <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
            <div x-show.transition.in="step === 2" class="w-10/12 ml-9 ">
                <div class="w-full grid grid-cols-4 md:px-14 gap-5 md:gap-10">
                    <div class="church-input-group col-span-2 ">
                        <label for="name" class="input-label">Region:</label>
                        <input wire:model='user.region' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-2 ">
                        <label for="name" class="input-label">District:</label>
                        <input wire:model='user.district' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 ">
                        <label for="name" class="input-label">Ward:</label>
                        <input wire:model='user.ward' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-2 ">
                        <label for="name" class="input-label">Postal Code:</label>
                        <input wire:model='user.postal_code' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-4 ">
                        <label for="name" class="input-label">Street name:</label>
                        <textarea name="" id="" wire:model="user.street_name" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-20"></textarea>
                        <!-- <input wire:model='end_time' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10"> -->
                    </div>

                    <div class=" w-full flex space-x-10 pt-5 justify-end col-span-4">
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
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Marital Status:</label>
                        <input wire:model='user.marital_status' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Spouse name:</label>
                        <input wire:model='user.spouse_name' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Number if children:</label>
                        <input wire:model='user_number_of_children' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
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
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Education Level:</label>
                        <select wire:model="user.education_level" class="input-field-wizard bg-background h-10" name="" id="">
                            <option value=""></option>
                            <option value="Primary Level Education">Primary Level Education</option>
                            <option value="Secondary Level Education">Secondary Level Education</option>
                            <option value="Advanced Secondary Level Education">Advanced Secondary Level Education</option>
                            <option value="Certificate Level Education">Certificate Level Education</option>
                            <option value="Diploma Level Education">Diploma Level Education</option>
                            <option value="Bachelor Degree">Bachelor's Degree</option>
                            <option value="Master Degree">Master's Degree</option>
                            <option value="PhD Degree">PhD Degree</option>
                        </select>
                    </div>
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Employment Status:</label>
                        <select wire:model="user.employment_status" class="input-field-wizard bg-background h-10" name="" id="">
                            <option value=""></option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Self Employed">Self Employed</option>
                            <option value="Part-time Employed">Part-time Employed</option>
                            <option value="Full-time Employed">Full-time Employed</option>
                        </select>
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
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Water Baptism:</label>
                        <!-- <input wire:model='user.water_baptist' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10"> -->
                        <select wire:model="user.water_baptist" class="input-field-wizard bg-background h-10" name="" id="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>

                    </div>
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Holy Ghost Baptism:</label>
                        <!-- <input wire:model='user.holy_ghost_baptism' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10"> -->
                        <select wire:model="user.holy_ghost_baptism" class="input-field-wizard bg-background h-10" name="" id="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Salvation Status:</label>
                        <select wire:model="user.salvation_status" class="input-field-wizard bg-background h-10" name="" id="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
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
                <div class="w-full grid grid-cols-4 md:px-14 gap-5 md:gap-10">
                    <div class="church-input-group col-span-2">
                        <label for="name" class="input-label">Home Cell:</label>
                        <input wire:model='user.home_cell' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">

                    </div>
                    <div class="church-input-group col-span-2">
                        <label for="name" class="input-label">Fellowship Group:</label>
                        <input wire:model='user.fellowship_group' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class="church-input-group col-span-3">
                        <label for="name" class="input-label">Service Groups:</label>
                        <input wire:model='user.service_group' type="text" class="rounded-full w-full border-none  px-5 active:ring-0 focus:ring-0 text-black font-droidBold text-xs bg-background h-10">
                    </div>
                    <div class=" col-span-1 flex items-end">
                        <button class="border border-primary text-primary rounded-full p-2 font-bold">Add Groups</button>
                    </div>

                    <div class=" w-full flex space-x-10 pt-5 justify-end col-span-4">
                        <a href="#" class="btn text-secondary border border-secondary">
                            Discard</a>
                        <button wire:click="firstStep" class="btn text-white bg-secondary">Continue</button>
                        <!-- <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button> -->
                    </div>
                </div>
            </div>
            <div x-show.transition.in="step === 7" class="w-10/12 ml-9 py-10">
                <div class="w-full">
                    <div class="space-y-3">
                        <h1 class="text-lg font-bold">Password</h1>
                        <hr>
                        <div class="space-y-3">
                            <p class="text-sm w-1/2 bg-primary bg-opacity-10 text-primary p-2 rounded-lg">The default password has been set, but the user will need to first reset the default password
                                to a new one of their own preference. The default password is user’s registered
                                PHONE NUMBER</p>
                        </div>
                    </div>
                    <div class="space-y-3 py-10">
                        <h1 class="text-lg font-bold">Assign Role</h1>
                        <hr>
                        <div class="w-40">
                            <div class="church-input-group">
                                <label for="contact_person" class=" input-label">Role: <span class="text-primary">*</span></label>
                                <select wire:model='user.role' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10 w-5">
                                    <option value="">Role</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Member">Member</option>
                                </select>
                            </div>
                            <div class="error-div">
                                @error('user.role') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class=" w-full flex space-x-10 pt-5 justify-end col-span-3">
                            <a href="#" class="btn text-secondary border border-secondary">
                                Discard</a>
                            <button wire:click="addUser" class="btn text-white bg-secondary">Continue</button>
                            <!-- <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button> -->
                        </div>
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