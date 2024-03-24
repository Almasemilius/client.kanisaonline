@php
use Carbon\Carbon;
@endphp
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
    }" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="w-full h-screen space-y-5">
    <div class="w-full space-y-3">
        <div class="w-full bg-white p-10 space-y-10">
            <div class="w-full flex justify-between items-center">
                <h3 class="header-text">Members Report</h3>
                <button class="primary-btn-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11l-5 5Zm-6 4q-.825 0-1.413-.588T4 18v-3h2v3h12v-3h2v3q0 .825-.588 1.413T18 20H6Z" />
                    </svg>
                    <span>Download Report</span>
                </button>
            </div>
            <div x-ref="tabButtons" class="relative inline-grid items-center justify-center w-3/4 h-10 grid-cols-7 p-1 select-none">
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">General</button>
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Guests</button>
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Online</button>
                <!-- <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">New Converts</button> -->
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Baptized</button>
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">FHS</button>
            </div>

        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" wire:ignore x-cloak>
            <div class="bg-white w-full p-10">
                <div class="w-full flex justify-between">
                    <span>Total|</span>
                    <div>
                        <div class="flex items-center gap-3">
                            <span>Filter By</span>
                            <div class="w-40">
                                <select wire:model.live='member_group' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="w-40">
                                <select wire:model='' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <canvas id="generalChart" style="position: relative; height:70vh; width:70vw"></canvas>
            </div>
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            <div class="bg-white w-full p-10">
                <div class="w-full flex justify-between">
                    <span>Total|</span>
                    <div>
                        <div class="flex items-center gap-3">
                            <span>Filter By</span>
                            <div class="w-40">
                                <select wire:model.live='member_group' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="w-40">
                                <select wire:model='' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <canvas id="guestChart" style="position: relative; height:70vh; width:70vw"></canvas>
            </div>
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            <div class="bg-white w-full p-10">
                <div class="w-full flex justify-between">
                    <span>Total|</span>
                    <div>
                        <div class="flex items-center gap-3">
                            <span>Filter By</span>
                            <div class="w-40">
                                <select wire:model.live='member_group' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="w-40">
                                <select wire:model='' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <canvas id="onlineChart" style="position: relative; height:70vh; width:70vw"></canvas>
            </div>
        </div>
        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative w-full" x-cloak>
            <div class="bg-white w-full p-10">
                <div class="w-full flex justify-between">
                    <span>Total|</span>
                    <div>
                        <div class="flex items-center gap-3">
                            <span>Filter By</span>
                            <div class="w-40">
                                <select wire:model.live='member_group' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="w-40">
                                <select wire:model='' name="yearSelect" id="yearSelect" class="input-field-wizard bg-background h-10">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <canvas id="baptizedChart" style="position: relative; height:70vh; width:70vw"></canvas>
            </div>
        </div>

    </div>

    <div class="w-full  bg-white rounded-sm p-5">
        <div class="w-full flex justify-between">
            <div class="flex items-center gap-5 ">
                <select wire:model.live="itemCount" name="" id="" class="counter">
                    <option value="6">6</option>
                    <option value="12">12</option>
                    <option value="24">24</option>
                </select>

            </div>
            <form>
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input wire:model.live.debounce.500ms="searchQuery" type="search" id="default-search" class="block w-72 p-4 pl-10 text-sm input-field placeholder:text-gray-300" placeholder="Search" required>
                </div>
            </form>
        </div>
        <div class="my-5">
            <hr>
        </div>
        <div>
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-neutral-200">
                                <thead>
                                    <tr class="text-neutral-500">
                                        <th class="px-1 w-5 py-3 text-xs font-medium text-left uppercase">
                                            <input type="checkbox" name="" id="" disabled>
                                        </th>
                                        <th class="px-3 py-3 text-xs font-medium text-left uppercase">Photo</th>
                                        <th class="px-3 py-3 text-xs font-medium text-left uppercase w-40">Name & Email
                                        </th>
                                        <th class="px-2 py-3 text-xs font-medium text-left uppercase">Gender</th>
                                        <th class="px-2 py-3 text-xs font-medium text-left uppercase">Member ID</th>
                                        <th class="px-3 py-3 text-xs font-medium text-left uppercase">Role</th>
                                        <th class="px-3 py-3 text-xs font-medium text-left uppercase">Join Date</th>
                                        <th class="px-3 py-3 text-xs font-medium text-center uppercase">Mobile No</th>
                                        <th class="px-3 py-3 text-xs font-medium text-center uppercase">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-neutral-200">
                                    @forelse ($users as $user)
                                    <tr class="text-neutral-800">
                                        <td>
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                            <img src="{{asset('storage/users/'.$user->image_url)}}" class="object-cover h-10 w-10 rounded-full" alt="">
                                        </td>
                                        <td class="px-3 py-4 text-sm whitespace-nowrap">
                                            <div class="flex flex-col">
                                                <span>{{$user->name}}</span>
                                                <span>{{$user->email}}</span>
                                            </div>
                                        </td>
                                        <td class="px-2 py-4 text-sm whitespace-nowrap">{{$user->gender}}</td>
                                        <!-- <td class="px-3 py-4 text-sm whitespace-nowrap">{{$user->location}}</td> -->
                                        <td class="px-3 py-4 text-sm whitespace-nowrap">ABC123</td>
                                        <td class="px-2 py-4 text-sm whitespace-nowrap">
                                            @if($user->role == 'Staff')
                                            <span class="text-sm text-green-600 bg-green-200 p-2 rounded-full">
                                                {{$user->role}}
                                            </span>
                                            @elseif ($user->role == 'Member')
                                            <span class="text-sm text-red-600 bg-red-200 p-2 rounded-full">{{$user->role}}</span>
                                            @endif

                                        </td>
                                        <td class="px-3 py-4 text-sm whitespace-nowrap">
                                            <div>
                                                <span>{{Carbon::make($user->created_at)->format('d-m-Y') }}</span>
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm whitespace-nowrap">
                                            <div>
                                                <span>{{$user->phone}}</span>
                                            </div>
                                        </td>
                                        <!-- <td class="px-3 py-4 text-sm whitespace-nowrap">
                                            <div>
                                                <span>{{$user->phone}}</span> 
                                                
                                            </div>
                                        </td> -->

                                        <td class="px-5 py-4 text-sm font-medium text-right whitespace-nowrap flex gap-2">
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-primary p-2 bg-blue-100 h-8 w-8 rounded-full" viewBox="0 0 24 24">
                                                    <path d="M12 16q1.875 0 3.188-1.313T16.5 11.5q0-1.875-1.313-3.188T12 7q-1.875 0-3.188 1.313T7.5 11.5q0 1.875 1.313 3.188T12 16Zm0-1.8q-1.125 0-1.913-.788T9.3 11.5q0-1.125.788-1.913T12 8.8q1.125 0 1.913.788T14.7 11.5q0 1.125-.787 1.913T12 14.2Zm0 4.8q-3.35 0-6.113-1.8t-4.362-4.75q-.125-.225-.187-.462t-.063-.488q0-.25.063-.488t.187-.462q1.6-2.95 4.362-4.75T12 4q3.35 0 6.113 1.8t4.362 4.75q.125.225.188.463t.062.487q0 .25-.063.488t-.187.462q-1.6 2.95-4.362 4.75T12 19Z" />
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-secondary p-2 bg-orange-100 h-8 w-8 rounded-full fill-orange-700" viewBox="0 0 24 24">
                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75l1.83-1.83z" />
                                                </svg>

                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <!-- <td colspan="8">No Data</td> -->
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('generalChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: @json($attendendanceData)
                },
                options: {
                    scales: {
                        x: {
                            position: 'bottom' // This will move the x-axis labels to the bottom
                        }
                    }
                }
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('guestChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: @json($guestData)
                    //     datasets: [
                    //         {
                    //         label: 'My Dataset',
                    //         data: [65, 59, 80, 81, 56, 55, 40],
                    //         fill: false,
                    //         borderColor: 'rgb(75, 192, 192)',
                    //         tension: 0.1,
                    //     },
                    //         {
                    //         label: 'My Dataset',
                    //         data: [20, 14, 16, 21, 77, 30, 22],
                    //         fill: false,
                    //         borderColor: 'rgb(75, 221, 200)',
                    //         tension: 0.1,
                    //     },
                    //  ]
                },
                options: {
                    scales: {
                        x: {
                            position: 'bottom' // This will move the x-axis labels to the bottom
                        }
                    }
                }
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('onlineChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: @json($onlineData)
                },
                options: {
                    scales: {
                        x: {
                            position: 'bottom' // This will move the x-axis labels to the bottom
                        }
                    }
                }
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('baptizedChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: @json($baptismData)
                },
                options: {
                    scales: {
                        x: {
                            position: 'bottom' // This will move the x-axis labels to the bottom
                        }
                    }
                }
            });
        });
    </script>
</div>