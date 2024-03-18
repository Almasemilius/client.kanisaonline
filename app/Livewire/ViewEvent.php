<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\ServiceEvent;
use Livewire\Component;

class ViewEvent extends Component
{
    public ServiceEvent $event;

    function mount($churchEvent) {
        $this->event = ServiceEvent::find($churchEvent);
        // dd($this->event);
        // $this->event = $event;
    }
    public function render()
    {
        return view('livewire.view-event');
    }
}
