@props(
[
'text',
]
)
<div class="flex w-full mb-6">
    <div class="flex items-center h-5">
        <input name="custom-checkbox" id="custom-checkbox" type="checkbox" class="hidden peer" required>
        <label for="custom-checkbox" class="peer-checked:[&_svg]:scale-100 text-sm font-medium text-neutral-600 peer-checked:text-blue-600 [&_svg]:scale-0 peer-checked:[&_.custom-checkbox]:border-blue-500 peer-checked:[&_.custom-checkbox]:bg-blue-500 select-none flex items-center space-x-2">
            <span class="flex items-center justify-center w-5 h-5 border-2 rounded custom-checkbox text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3 text-white duration-300 ease-out">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
            </span>
            <span>{{$text}}</span>
        </label>
    </div>
</div>