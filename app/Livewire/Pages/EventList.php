<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\Event;
use Livewire\Component;

class EventList extends Component
{
    public $searchQuery;
    public $categoryId;
    public $date;
    public $category;
    function mount($searchQuery = null, $categoryId = null)
    {
        if ($searchQuery != null) {
            $this->searchQuery = $searchQuery;
        }

        if ($categoryId != null) {
            $this->categoryId = $categoryId;
        }
    }
    public function render()
    {

        $events = Event::query();

        $events->when($this->searchQuery, function ($query) {
            $query->where('title', 'like', "%$this->searchQuery%")
                ->orWhere('description', 'like', "%$this->searchQuery%");
        })->when($this->date, function ($query) {
            $query->whereDate('start_date_time', $this->date)
                ->orWhereDate('end_date_time', $this->date);
        })
            ->when($this->category, function ($query) {
                $query->where('category_id', $this->category);
            });

        $events = $events->paginate(3);
        $categories = Category::get();
        return view('livewire.pages.event-list', compact('events', 'categories'))->layout('layouts.default');
    }
}
