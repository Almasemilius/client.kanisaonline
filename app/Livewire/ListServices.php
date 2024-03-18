<?php

namespace App\Livewire;

use App\Models\ChurchService;
use Livewire\Component;

class ListServices extends Component
{
    public function render()
    {
        $services = ChurchService::query();

        $services = $services->paginate(6);
        return view('livewire.list-services',compact('services'));
    }
}
