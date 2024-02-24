<x-app-layout>
    <div class="w-full bg-white p-10 space-y-5">
        <h2 class="text-lg font-bold">My Profile</h2>
        <hr>
        <div class="w-full grid grid-cols-4">
            <div class="w-full h-52  flex">
                <div class="h-40 w-40 rounded-full bg-red-200">

                </div>
            </div>
            <div class="w-full flex flex-col gap-2">
                <span>Name:</span>
                <span>Gender:</span>
                <span>Nationality:</span>
                <span>Language:</span>
                <span>Status:</span>
            </div>
            <div class="w-full flex flex-col gap-2">
                <span>{{auth()->user()->name}}</span>
                <span>Male</span>
                <span>Tanzanian</span>
                <span>English</span>
                <span>Active</span>
            </div>
            <div class="w-full h-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                    <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                </svg>
            </div>
        </div>
        <hr>
        <div class="w-full grid grid-cols-4">
            <div class="w-full h-52  flex ">
                <h4 class="text-xs text-gray-400 font-semibold">SPIRITUAL INFORMATION</h4>
            </div>
            <div class="w-full flex flex-col gap-2">
                <span>Holy Ghost Baptism:</span>
                <span>Water Baptism:</span>
                <span>Salvation Status:</span>
            </div>
            <div class="w-full flex flex-col gap-2">
                <span>{{auth()->user()->name}}</span>
                <span>Male</span>
                <span>Tanzanian</span>
                <span>English</span>
                <span>Active</span>
            </div>
            <div class="w-full h-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                    <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                </svg>
            </div>
        </div>
        <hr>
        <div class="w-full grid grid-cols-4">
            <div class="w-full h-52  flex ">
                <h4 class="text-xs text-gray-400 font-semibold">MEMBER INFORMATION</h4>
            </div>
            <div class="w-full flex flex-col gap-2">
                <span>Date of Birth:</span>
                <span>Education:</span>
                <span>Employment Status:</span>
                <span>Marital Status:</span>
                <span>Name of Spouse:</span>
                <span>Children:</span>
            </div>
            <div class="w-full flex flex-col gap-2">
                <span>{{auth()->user()->name}}</span>
                <span>Male</span>
                <span>Tanzanian</span>
                <span>English</span>
                <span>Active</span>
            </div>
            <div class="w-full h-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                    <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                </svg>
            </div>
        </div>
        <hr>
        <div class="w-full grid grid-cols-4">
            <div class="w-full  flex ">
                <h4 class="text-xs text-gray-400 font-semibold">CONTACTS INFORMATION</h4>
            </div>
            <div class="w-full flex flex-col gap-2">
                <span>Address:</span>
                <span>Phone:</span>
                <span>Email:</span>
            </div>
            <div class="w-full flex flex-col gap-2">
                <span>{{auth()->user()->name}}</span>
                <span>Male</span>
                <span>Tanzanian</span>
            </div>
            <div class="w-full h-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 p-2 border border-primary rounded-full fill-primary" viewBox="0 0 24 24">
                    <path d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Z" />
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>