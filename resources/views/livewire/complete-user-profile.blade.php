<div class="w-2/6 h-4/5 bg-white m-auto  rounded-md overflow-hidden">
    @switch($step)
        @case(1)
            @livewire('profile.reset-password')
        @break

        @case(2)
            
        @break

    @default

    @endswitch
</div>