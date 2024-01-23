@props(
    [
    'value'    
    ]
)
<div class="relative w-32">
    <button @click="selectOpen=!selectOpen" :class="{ 'focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400' : !selectOpen }" class="relative min-h-[38px] flex items-center justify-between w-full py-2 pl-3 pr-10 text-left bg-white border rounded-md shadow-sm cursor-default border-neutral-200/70 focus:outline-none  text-sm">
        <span class="truncate">{{$value}}</span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24">
                <path d="M12 14.379q-.162 0-.298-.053q-.137-.053-.267-.184L7.046 9.754q-.14-.14-.15-.344q-.01-.204.15-.364t.354-.16q.194 0 .354.16L12 13.292l4.246-4.246q.14-.14.344-.15q.204-.01.364.15t.16.354q0 .194-.16.354l-4.389 4.388q-.13.131-.267.184q-.136.053-.298.053" />
            </svg>
        </span>
    </button>

</div>