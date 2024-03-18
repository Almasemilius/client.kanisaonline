<div class="w-full">
    <div class="w-full grid grid-cols-4">
        <div>
            <span class="font-semibold">Instagram:</span>
        </div>
        <div class="col-span-3 w-full flex">
            <button class="border px-3">
                <span>http://</span>
            </button>
            <input type="text" class="w-full border border-gray-200 bg-gray-100">
        </div>
        <div class="py-5 w-full col-span-4">
            <hr>
        </div>
        <div>
            <span class="font-semibold">Twitter/X:</span>
        </div>
        <div class="col-span-3 w-full flex">
            <button class="border px-3">
                <span>http://</span>
            </button>
            <input type="text" class="w-full border border-gray-200 bg-gray-100">
        </div>
        <div class="py-5 w-full col-span-4">
            <hr>
        </div>
        <div>
            <span class="font-semibold">Youtube:</span>
        </div>
        <div class="col-span-3 w-full flex">
            <button class="border px-3">
                <span>http://</span>
            </button>
            <input type="text" class="w-full border border-gray-200 bg-gray-100">
        </div>
        <div class="py-5 w-full col-span-4">
            <hr>
        </div>
        <div>
            <span class="font-semibold">Facebook:</span>
        </div>
        <div class="col-span-3 w-full flex">
            <button class="border px-3">
                <span>http://</span>
            </button>
            <input type="text" class="w-full border border-gray-200 bg-gray-100">
        </div>
        <div class="py-5 w-full col-span-4">
            <hr>
        </div>
        <div>
            <span class="font-semibold">Whatsapp:</span>
        </div>
        <div class="col-span-3 w-full flex">
            <button class="border px-3">
                <span>http://</span>
            </button>
            <input type="text" class="w-full border border-gray-200 bg-gray-100">
        </div>
    </div>
    <div class=" w-full flex space-x-10 pt-5 justify-end col-span-3">
        <a href="#" class="btn text-secondary border border-secondary">
            Discard</a>
        <button wire:click="addUser" class="btn text-white bg-secondary">Continue</button>
        <!-- <button x-on:next.window="step++" class="hidden btn text-white bg-secondary">Continue</button> -->
    </div>
</div>