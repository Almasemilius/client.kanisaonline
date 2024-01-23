<div x-data="{ id: $id('accordion') }" class="cursor-pointer group bg-blue-50 rounded-md" >
    <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none">
        <span class="text-primary font-semibold">{{$ticket['title']}}</span>
        <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </button>
    <div x-show="activeAccordion==id" x-collapse x-cloak>
        <div class="w-full p-4 pt-0 grid grid-cols-2 gap-5">
            @foreach (json_decode($ticket['required_data_guide']) as $key=>$data)
            <div class="input-group">
                <label for="organizer">{{$data}} <span class="required-label">*</span></label>
                <div class="relative">
                    <input type="text" wire:model="atendees.{{$i}}.{{$data}}" class="input-field w-full placeholder:text-gray-300" placeholder="" required=true>
                </div>
            </div>
            @endforeach
            <div class="w-full flex justify-end col-span-2">
                <button wire:click="addTicket" class="primary-btn rounded-md">Save</button>
            </div>
            <x-error-message property='mismatch' />

        </div>
    </div>
</div>