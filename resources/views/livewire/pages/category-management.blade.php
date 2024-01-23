@php
use Carbon\Carbon;
@endphp
<div class="space-y-5">
    <div class="w-full flex items-center">
        <div class="w-full flex items-center gap-5">
            <div class="border-r pr-5">
                <h1 class="page-title">Events</h1>
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
                        <a href="{{route('events.management')}}" class="inline-flex items-center px-2 py-1.5 space-x-1.5 font-normal rounded-md hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none">

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

                            <span class="breadcrumb-text">Categories</span>
                        </a>
                    </li>

                </ol>

            </nav>
        </div>
    </div>
    <div class="w-full  bg-white rounded-sm p-5">
        <div class="w-full flex justify-between">
            <div class="flex items-center gap-5">
                <div class="flex items-center gap-5 ">
                    <select wire:model.live="itemCount" name="" id="" class="counter">
                        <option value="6">6</option>
                        <option value="12">12</option>
                        <option value="24">24</option>
                    </select>
                    @if ($categories->count() > 0)
                    <span>Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }} of {{
                        $categories->total() }}
                        entries</span>
                    @endif
                </div>
            </div>
            <div>
                <a href="{{route('event.categories')}}" class=" primary-btn rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" />
                    </svg>
                    <span class="breadcrumb-text">Add Category</span>
                </a>
            </div>
        </div>
        <div class="my-5">
            <hr>
        </div>
        <div>
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full">
                        <div class="overflow-hidden">
                            <table class="min-w-full ">
                                <thead>
                                    <tr class="text-neutral-500">
                                        <!-- <th class="px-1 w-5 py-3 text-xs font-medium text-left uppercase">
                                            </th> -->
                                            <th class="px-5 py-3 w-60 text-xs font-medium text-left uppercase flex gap-5">
                                                <input type="checkbox" name="" id="" disabled>
                                                <span>Name</span>
                                            </th>
                                        <th class="px-5 py-3 text-xs font-medium text-left uppercase">
                                            Events Available
                                        </th>
                                        <th class="px-5 py-3 text-xs font-medium text-left uppercase">
                                            Featured
                                        </th>
                                        <th class="px-5 py-3 text-xs font-medium text-left uppercase">created On</th>
                                        <th class="px-5 py-3 text-xs font-medium text-center uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($categories as $category)

                                    <tr class="text-neutral-800 odd:bg-gray-100 w-full divide-x-2  divide-white ">
                                        <td class="flex gap-5 items-center px-5">
                                            <input type="checkbox" name="" id="">
                                            <img src="{{asset('storage/categories/'.$category->thumbnail_url)}}" class="h-10 w-10" alt="">
                                            <span>{{$category->name}}</span>
                                        </td>
                                        <!-- <td class="px-5 py-4 text-sm font-medium whitespace-nowrap flex gap-5"> -->
                                        </td>
                                        <td class="px-5 py-4 text-sm whitespace-nowrap">
                                            {{$category->event ? $category->event->count() : 0}}
                                        </td>
                                        <td class="px-5 py-4 text-sm whitespace-nowrap">
                                            <x-select-primary :value="$category->isFeatured" />
                                        </td>
                                        <td class="px-5 py-4 text-sm whitespace-nowrap">{{Carbon::make($category->created_at)->format('d M y')}}</td>
                                        <td class="px-5 py-4 text-sm font-medium text-right whitespace-nowrap flex justify-center gap-2">

                                            <a href="{{route('event.types',$category->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-secondary p-2 bg-orange-100 h-8 w-8 rounded-full fill-orange-700" viewBox="0 0 24 24">
                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75l1.83-1.83z" />
                                                </svg>
                                            </a>
                                            <a href="{{route('event.types',$category->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="p-2 bg-red-200 h-8 w-8 rounded-full fill-none stroke-red-700 stroke-2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>

                                            </a>
                                        </td>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            {{$categories->links()}}
        </div>
    </div>
</div>