<div x-data="{
        tabSelected: 1,
        tabId: $id('tabs'),
        tabButtonClicked(tabButton){
            this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
            this.tabRepositionMarker(tabButton);
        },
        tabRepositionMarker(tabButton){
            this.$refs.tabMarker.style.width=tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height=tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left=tabButton.offsetLeft + 'px';
        },
        tabContentActive(tabContent){
            return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
        },
        tabButtonActive(tabContent){
            const tabId = tabContent.id.split('-').slice(-1);
            return this.tabSelected == tabId;
        }
    }" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="w-full bg-white p-10">
    <!-- Tabs Start -->
    <div class="w-full md:grid grid-cols-5 gap-5">
        <div class="col-span-5 h-12">
            <div class="relative w-full">

                <div x-ref="tabButtons" class="relative inline-grid items-center justify-center w-full h-10 grid-cols-7 p-1 select-none">
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">My Profile</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Service Groups</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Roles & Security</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Church</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Leadership</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Branches</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Social Media</button>
                    <!-- <div x-ref="tabMarker" class="absolute left-0 z-10 w-1/2 h-full duration-300 ease-out" x-cloak>
                        <div class="w-full h-full bg-gray-100 rounded-md shadow-sm"></div>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
    <hr>
    <div class="relative flex items-center justify-center w-full p-5 ">

        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full ">
            <div class="w-full flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-lg font-semibold">Language</h3>
                    <p class="text-sm text-gray-400">Choose the language to be utilized throughout the entire system.</p>
                </div>
                <div class="">
                    <select wire:model="user.marital_status" class="dob-picker-select" name="" id="">
                        <option value="english">English</option>
                        <option value="swahili">Swahili</option>
                    </select>
                </div>
            </div>
            <div class="w-full py-3">
                <hr>
            </div>
            <div class="w-full flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-lg font-semibold">Minister Type</h3>
                    <p class="text-sm text-gray-400"> Educational levels defined will appear as selectable options for users during registration and when editing member profiles.</p>
                </div>
                <div class="">
                    <select wire:model="user.marital_status" class="dob-picker-select" name="" id="">
                        <option value="pastor">Pastor</option>
                    </select>
                </div>
            </div>
            <div class="w-full py-3">
                <hr>
            </div>
            <div class="w-full flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-lg font-semibold">Education Levels</h3>
                    <p class="text-sm text-gray-400">Educational levels defined will appear as selectable options for users during registration and when editing member profiles.</p>
                </div>
                <div class="h-full flex items-center">
                    <button class="bg-primary rounded-full px-3 py-1 text-white">Manage</button>
                </div>
            </div>
            <div class="w-full py-3">
                <hr>
            </div>
            <div class="w-full flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-lg font-semibold">Service Type</h3>
                    <p class="text-sm text-gray-400">Educational levels defined will appear as selectable options for users during registration and when editing member profiles.</p>
                </div>
                <div class="h-full flex items-center">
                    <button class="bg-primary rounded-full px-3 py-1 text-white">Manage</button>
                </div>
            </div>
            <div class="w-full py-3">
                <hr>
            </div>
            <div class="w-full flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-lg font-semibold">Publication Categories</h3>
                    <p class="text-sm text-gray-400">Educational levels defined will appear as selectable options for users during registration and when editing member profiles.</p>
                </div>
                <div class="h-full flex items-center">
                    <button class="bg-primary rounded-full px-3 py-1 text-white">Manage</button>
                </div>
            </div>
            <div class="w-full py-3">
                <hr>
            </div>
            <div class="w-full flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-lg font-semibold">Leadership Roles</h3>
                    <p class="text-sm text-gray-400">Educational levels defined will appear as selectable options for users during registration and when editing member profiles.</p>
                </div>
                <div class="h-full flex items-center">
                    <button class="bg-primary rounded-full px-3 py-1 text-white">Manage</button>
                </div>
            </div>
            <div class="w-full py-3">
                <hr>
            </div>
        </div>

        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            <div class="w-full grid grid-cols-3">
                <div class="w-full h-20 flex items-center">
                    <span>Fellowship Groups:</span>
                </div>
                <div class="w-full h-20 flex items-center gap-3">
                    <div class="h-10 w-10 bg-black rounded-full overflow-hidden"></div>
                    <span>Lorem</span>
                </div>
                <div class="w-full h-full flex justify-end items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                        <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                    </svg>
                </div>
                <div class="w-full flex items-end">

                </div>

            </div>
            <div class="w-full py-3">
                <hr>
            </div>
            <div class="w-full grid grid-cols-3">
                <div class="w-full h-20 flex items-center">
                    <span>Home Cells:</span>
                </div>
                <div class="w-full h-20 flex items-center gap-3">
                    <div class="h-10 w-10 bg-black rounded-full overflow-hidden"></div>
                    <span>Lorem</span>
                </div>
                <div class="w-full h-full flex justify-end items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                        <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                    </svg>
                </div>
                <div class="w-full flex items-end">

                </div>

            </div>
            <div class="w-full py-3">
                <hr>
            </div>
            <div class="w-full grid grid-cols-3">
                <div class="w-full h-20 flex items-center">
                    <span>Service Groups:</span>
                </div>
                <div class="w-full h-20 flex items-center gap-3">
                    <div class="h-10 w-10 bg-black rounded-full overflow-hidden"></div>
                    <span>Lorem</span>
                </div>
                <div class="w-full h-full flex justify-end items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                        <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                    </svg>
                </div>
                <div class="w-full flex items-end">

                </div>

            </div>
            <div class="w-full py-3">
                <hr>
            </div>
        </div>

        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            <div class="w-full grid grid-cols-3 ">
                <div class="w-full flex py-5">
                    <span class="text-sm text-gray-400 font-semibold">ROLES & SECURITY</span>
                </div>
                <div class="w-full ">
                    <div class="w-full flex items-center justify-between py-5">
                        <div>
                            <span class="font-semibold">Roles:</span>
                        </div>
                        <div>
                            <button class="text-sm py-1 px-3 bg-primary text-white rounded-full">Admin</button>
                        </div>
                    </div>
                    <div class="w-full flex items-center justify-between py-5">
                        <span class="font-semibold">Password:</span>
                        <button>....</button>
                    </div>
                </div>
                <div class="w-full flex flex-col items-center justify-between py-5 px-20">
                    <div class="w-full flex items-center justify-between gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                            <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                        </svg>
                    </div>
                    <div class="w-full flex items-center justify-between gap-3">
                        <span class="text-primary font-semibold">Reset</span>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            @livewire('pages.church-details')
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            @livewire('pages.leadership')
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            @livewire('pages.branches-list')
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            @livewire('social-media')
        </div>

    </div>
    <!-- Tabs Ends -->

</div>