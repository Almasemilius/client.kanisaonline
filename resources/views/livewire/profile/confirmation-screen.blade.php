<div class="w-full h-full flex flex-col justify-center items-center gap-5 px-5">


    <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 p-5 border-2 border-primary rounded-full fill-primary" viewBox="0 0 32 32">
            <path d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9z" />
        </svg>
    </div>
    <div class="w-full text-center">
        <h1 class="text-lg font-semibold text-center">Awesome!</h1>
        <p class="text-sm text-gray-400">You are ready to proceed to dashboard</p>
    </div>
    <div class="flex flex-col gap-4 w-full items-center">
        <button wire:click="goToDashboard" class="bg-primary text-center w-3/5 py-3 text-white rounded-full">Go to Dashboard</button>
    </div>
</div>