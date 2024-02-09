<div class="w-full h-full flex flex-col justify-center items-center gap-5">

    <div class="w-full text-center">
        <h1 class="text-lg font-semibold text-center">Upload Profile Picture</h1>
        <p class="text-sm text-gray-400">Please take a moment to change your password for security.</p>
    </div>
    <div class="w-36 h-36 flex justify-center items-center bg-gray-50 rounded-full relative ">
        @if ($profileImage?->temporaryUrl())
        <img src="{{ $profileImage->temporaryUrl() }}" alt="" class="h-36 w-36 object-cover overflow-hidden rounded-full">
        @else
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4" />
        </svg>
        @endif
        <label for="profile" class="absolute bottom-1 right-1 ">

            <svg xmlns="http://www.w3.org/2000/svg" class=" bg-red-600 rounded-full stroke-white p-2 h-10 w-10" viewBox="0 0 24 24">
                <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M7 18a4.6 4.4 0 0 1 0-9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                    <path d="m9 15l3-3l3 3m-3-3v9" />
                </g>
            </svg>
        </label>
        <input wire:model="profileImage" type="file" class="hidden" name="profile" id="profile">
    </div>
    <div class="flex flex-col gap-4 w-full items-center">
        <a href="#" class="text-primary text-center">Skip</a>
        <button wire:click="uploadImage" class="bg-primary text-center w-3/5 py-3 text-white rounded-full">Save</button>
    </div>

</div>