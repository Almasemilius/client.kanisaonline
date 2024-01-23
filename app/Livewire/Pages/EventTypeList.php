<?php

namespace App\Livewire\Pages;

use App\Models\EventType;
use Livewire\Component;

class EventTypeList extends Component
{
    public $itemCount;
    public function render()
    {
        $eventTypes = EventType::query();
        $eventTypes = $eventTypes->paginate($this->itemCount ? $this->itemCount : 6);
        return view('livewire.pages.event-type-list', compact('eventTypes'));
    }
}
