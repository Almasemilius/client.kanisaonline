<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ResetPassword extends Component
{
    #[Rule(['required','min:8'])]
    public $password;
    public User $user;

    function mount() {
        $this->user = auth()->user();
        // dd($this->user);
    }


    function changePassword() {
       
        if(preg_match('/\d/', $this->password) && preg_match('/[^a-zA-Z0-9\s]/', $this->password)){
            $this->user->password = $this->password;
            $this->user->save();
            $this->dispatch('')
        }


    }

    public function render()
    {
        return view('livewire.profile.reset-password');
    }
}
