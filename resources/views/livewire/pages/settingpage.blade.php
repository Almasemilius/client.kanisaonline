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
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Denomination</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Churches</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Branches</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Branches</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Branches</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Branches</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Branches</button>
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
                        <option value="english">English</option>
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
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full">
                        <div class="overflow-hidden rounded-lg">
                            <table class="min-w-full ">
                                <thead class="bg-background">
                                    <tr class="text-neutral-500">
                                        <th class="t-head">Name</th>
                                        <th class="t-head">Denomination</th>
                                        <th class="t-head">Region</th>
                                        <th class="t-head">Contacts</th>
                                        <th class="t-head">Status</th>
                                        <th class="t-head">Action</th>
                                        <th class="t-head-action"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-neutral-200 bg-white">
                                    <span>Tab 2</span>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
            No Branches Yet
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
            No Branches Yet
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
            No Branches Yet
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
            No Branches Yet
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
            No Branches Yet
        </div>

    </div>
    <!-- Tabs Ends -->

</div>