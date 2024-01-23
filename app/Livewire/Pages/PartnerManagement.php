<?php

namespace App\Livewire\Pages;

use App\Models\Sponsor;
use Livewire\Component;
use Livewire\WithPagination;

class PartnerManagement extends Component
{
    use WithPagination;
    public $itemCount=12;
    
    public function render()
    {
        $partners = Sponsor::paginate($this->itemCount ? $this->itemCount : 12);
        return view('livewire.pages.partner-management', compact('partners'));
    }
}
