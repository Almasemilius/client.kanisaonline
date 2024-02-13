<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class ConfirmationScreen extends Component
{
    function goToDashboard() {
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.profile.confirmation-screen');
    }
}
