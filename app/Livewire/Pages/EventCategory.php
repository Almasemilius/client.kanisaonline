<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EventCategory extends Component
{
    use WithFileUploads;
    public $thumbnail;
    public Category $eventCategory;

    protected $rules = [
        'eventCategory.name' => 'required|unique:categories,name',
        'eventCategory.isFeatured' => 'nullable',
        'thumbnail' => 'required|image',

    ];

    function mount() {
        $this->eventCategory = new Category();
        $this->eventCategory->isFeatured = "No";
    }

    function addEventCategory() {
        $this->validate();
        $extension = $this->thumbnail->getClientOriginalExtension();
        $fileName = Str::slug($this->eventCategory->name) .'.'. $extension;
        $this->thumbnail->storeAs('public/categories', $fileName);
        $this->eventCategory->thumbnail_url = $fileName;
        $this->eventCategory->save();
        $this->eventCategory = new Category();
        $this->thumbnail = null;
        return redirect()->route('categories.management');

    }

    public function render()
    {
        return view('livewire.pages.event-category');
    }
}
