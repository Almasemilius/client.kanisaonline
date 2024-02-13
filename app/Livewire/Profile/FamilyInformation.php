<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class FamilyInformation extends Component
{
    public User $user;

    public function rules() {
        return [
            'user.number_of_children' => 'nullable',
            'user.spouse_name' => 'nullable',
            'user.marital_status' => 'nullable',
        ];
    }

    function mount() {
        $this->user = auth()->user();
    }

    function saveFamilyInformation() {
        $this->validate();
        $this->user->save();
        $this->nextStep();
    }

    function nextStep() {
        $this->dispatch('next-step',5);
    }

    public function render()
    {
        return view('livewire.profile.family-information');
    }
}
