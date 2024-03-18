@php
use Carbon\Carbon;
@endphp
<div class="space-y-5">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center gap-5">
            <div class="border-r pr-5">
                <h1 class="page-title">Staffs</h1>
            </div>
            <nav class="w-full flex justify-between">
                <ol class="inline-flex items-center mb-3 md:space-x-1 text-xs text-neutral-500 [&_.active-breadcrumb]:text-neutral-600 [&_.active-breadcrumb]:font-medium sm:mb-0">
                    <li class="flex items-center h-full">
                        <a href="{{route('dashboard')}}" class="inline-flex items-center px-2 py-1.5 space-x-1.5 rounded-md hover:text-neutral-900 hover:bg-neutral-100">
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
                        <a href="{{route('publication.management')}}" class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">Events Management</span>
                        </a>
                    </li>
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="none">
                            <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <li>
                        <a href="#_" class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

                            <span class="breadcrumb-text">All</span>
                        </a>
                    </li>

                </ol>
                <div>
                    <a href="{{route('add.member')}}" class=" primary-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" />
                        </svg>
                        <span class="breadcrumb-text">Add Staff</span>
                    </a>
                </div>
            </nav>
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
                                            <span class="text-sm text-red-600">{{$user->role}}</span>
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
                                            <a href="{{Route('view.event')}}">
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
                                        <td colspan="8">No Data</td>
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
    <div>
        <span>{{$users->links()}}</span>
    </div>
</div>