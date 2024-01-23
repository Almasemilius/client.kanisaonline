<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;

class BookingList extends Component
{
    public function render()
    {
        $bookings = Booking::paginate(6);
        return view('livewire.booking-list', compact('bookings'));
    }
}
