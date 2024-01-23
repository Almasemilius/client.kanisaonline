<?php

namespace App\Livewire\Pages;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class EventShow extends Component
{
    public Event $event;
    public $remainingDays;
    public $remainingHours;
    public $remainingMinutes;
    public $remainingSeconds;
    public $totalAmount = 0;
    public $longitude = 0;
    public array $tickets = [];
    function mount(Event $event)
    {
        $this->event = $event;
        $eventDate = Carbon::make($this->event->start_date_time);
        $this->remainingDays = $eventDate->format('d');
        $this->remainingHours = $eventDate->format('h');
        $this->remainingMinutes = $eventDate->format('i');
        $this->remainingSeconds = $eventDate->format('s');

        $this->tickets = $this->event->tickets->map(function ($ticket) {
            $ticket['quantity'] = 0;
            return $ticket;
        })->toArray();
    }

    function bookEvent()
    {
        foreach ($this->tickets as $key => $ticket) {
            if ($ticket['quantity'] <= 0) {
                unset($this->tickets[$key]);
            }
        }
        $this->validate([
            'tickets' => 'required',
        ]);
        Session(['tickets' => $this->tickets]);
        return redirect()->route('booking.show', $this->event->id);
    }

    public function increment($index)
    {
        // $this->tickets;
        $this->tickets[$index]['quantity']++;
        // $ticket['amount'] = $ticket['quantity'] * $ticket['price'];
        $this->tickets[$index]['amount'] =  $this->tickets[$index]['quantity'] * $this->tickets[$index]['price'];
        $this->totalAmount +=  $this->tickets[$index]['price'];
    }

    public function decrement($index)
    {
        // $this->tickets;
        if ($this->tickets[$index]['quantity'] >= 1) {
            $this->tickets[$index]['quantity']--;
            $this->tickets[$index]['amount'] =  $this->tickets[$index]['quantity'] * $this->tickets[$index]['price'];
            $this->totalAmount -=  $this->tickets[$index]['amount'];
        }
    }

    public function render()
    {
        $events = Event::where('category_id', $this->event->category_id)->where('id', '!=' , $this->event->id)->paginate(3);
        return view('livewire.pages.event-show', compact('events'))->layout('layouts.default');
    }
}
