<?php

namespace App\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ConfirmationScreen extends Component
{
    function goToDashboard() {
        $user = Auth::user();
        $user->new_user = false;
        $user->save();
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.profile.confirmation-screen');
    }
}
