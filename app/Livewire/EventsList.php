<?php

namespace App\Livewire;

use App\Models\ServiceEvent;
use Livewire\Component;

class EventsList extends Component
{

    public ServiceEvent $event;

    function mount($event=null) {
        if($event){
            $this->event = $event;
        }
    }

    public function render()
    {
        $events = ServiceEvent::query();

        $events = $events->paginate(10);
        return view('livewire.events-list', compact('events'));
    }
}
