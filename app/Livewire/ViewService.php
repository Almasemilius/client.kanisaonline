<?php

namespace App\Livewire;

use App\Models\ChurchService;
use Livewire\Component;

class ViewService extends Component
{
    public ChurchService $service;
    function mount(ChurchService $churchService) {
        // dd($churchService);
        $this->service = $churchService;
    }
    public function render()
    {
        return view('livewire.view-service');
    }
}
