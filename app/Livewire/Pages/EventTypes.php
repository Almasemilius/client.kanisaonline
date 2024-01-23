<?php

namespace App\Livewire\Pages;

use App\Models\EventType;
use Livewire\Component;

class EventTypes extends Component
{
    public EventType $eventType;
    public $editMode = false;

    protected $rules = [
        'eventType.name' => 'required|unique:event_types,name',
    ];

    function mount($eventType = null) {
        if($eventType){
            $this->eventType = $eventType;
            $this->editMode = true;
        }else{
            $this->eventType = new EventType();
        }
    }

    function addEventType() {
        // dd($this->eventType);
        $this->validate();
        $this->eventType->save();
        $this->editMode = false;
        $this->eventType = new EventType();

        return redirect()->route('event.type.list');
    }
    public function render()
    {
        return view('livewire.pages.event-types');
    }
}
