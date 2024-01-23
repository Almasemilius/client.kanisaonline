<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;

class CategoryManagement extends Component
{
    public $itemCount;

    public function render()
    {
        $categories = Category::query();
        $categories = $categories->paginate($this->itemCount ? $this->itemCount : 6);
        return view('livewire.pages.category-management', compact('categories'));
    }
}
