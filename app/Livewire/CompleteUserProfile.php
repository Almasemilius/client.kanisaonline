<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class CompleteUserProfile extends Component
{
    public $step = 1;

    #[On('next-step')]
    function nextStep($step) {
        // dd($step);
        $this->step =$step;
    }

    public function render()
    {
        return view('livewire.complete-user-profile')->layout('layouts.guest');
    }
}
