<?php

namespace App\Livewire\Booking;

use Livewire\Component;

class BookingTickets extends Component
{
    public $ticket;
    public $i;
    public $trackId;
    public array $atendees = array();

    function addTicket()
    {
        $nonNullArray = array_filter($this->atendees[$this->i], function($element) {
            return ($element != null && trim($element) != "");
        });
        if(count(json_decode($this->ticket['required_data_guide'])) !== count($nonNullArray)){
            $this->addError('mismatch','Please Fill all the records');
        }
        $atendees = array_map(function($atendee){
            $atendee['ticketId'] = $this->ticket['id'];
            return $atendee;
        },$this->atendees);
        $this->dispatch('update-atendees', atendee: $atendees, position:(int)($this->i.$this->trackId), index:$this->i);
    }

    public function render()
    {
        return view('livewire.booking.booking-tickets');
    }
}
