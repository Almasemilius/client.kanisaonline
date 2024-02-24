<?php

namespace App\Livewire\Pages;

use App\Models\Publication;
use Livewire\Component;

class ViewPublication extends Component
{
    public Publication $publication;
    function mount(Publication $publication) {
        $this->publication = $publication;
    }
    public function render()
    {
        // dd($this->publication);
        return view('livewire.pages.view-publication');
    }
}
