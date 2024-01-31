<?php

namespace App\Livewire;

use Livewire\Component;

class CompleteUserProfile extends Component
{
    public $step = 1;
    public function render()
    {
        return view('livewire.complete-user-profile')->layout('layouts.guest');
    }
}
