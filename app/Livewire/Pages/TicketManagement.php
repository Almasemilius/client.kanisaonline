<?php

namespace App\Livewire\Pages;

use App\Models\Event;
use App\Models\Ticket;
use Livewire\Component;

class TicketManagement extends Component
{
    public Event $event;
    function mount(Event $event)
    {
        $this->event = $event;
    }
    public function render()
    {
        $tickets = Ticket::where('event_id', $this->event->id)->paginate(10);
        return view('livewire.pages.ticket-management', compact('tickets'));
    }
}
