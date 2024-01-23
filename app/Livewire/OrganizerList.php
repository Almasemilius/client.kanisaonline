<?php

namespace App\Livewire;

use App\Models\Organizer;
use Livewire\Component;

class OrganizerList extends Component
{
    public function render()
    {
        $organizers = Organizer::paginate();
        return view('livewire.organizer-list', compact('organizers'));
    }
}
