<?php

namespace App\Livewire\Pages;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventManagement extends Component
{
    use WithPagination;

    public $itemCount = 6;
    public $searchQuery;
  
    public function render()
    {
        $events = Event::query();

        if($this->searchQuery){
            $events->where('title','like',"%$this->searchQuery%");
        }
        // $creadcrumb = $this->pushBreadcrumbs('events-management', route('events.management'));
        $events = $events->paginate($this->itemCount ? $this->itemCount : 6);
        return view('livewire.pages.event-management', compact('events'));
    }
}
