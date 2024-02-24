<?php

namespace App\Livewire\Pages;

use App\Models\Publication;
use Livewire\Component;
use Livewire\WithPagination;

class PublicationManagement extends Component
{
    use WithPagination;

    public $itemCount = 6;
    public $searchQuery;
  
    public function render()
    {
        $publications = Publication::query();

        if($this->searchQuery){
            $publications->where('title','like',"%$this->searchQuery%");
        }
        $publications = $publications->paginate($this->itemCount ? $this->itemCount : 6);
        return view('livewire.pages.publication-management', compact('publications'));
    }
}
