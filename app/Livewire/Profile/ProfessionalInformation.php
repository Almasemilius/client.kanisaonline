<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class ProfessionalInformation extends Component
{
    public User $user;

    public function rules() {
        return [
            'user.education_level' => 'nullable',
            'user.employment_status' => 'nullable',
        ];
    }

    function mount() {
        $this->user = auth()->user();
    }
    function saveProfessionalInformation() {
        $this->validate();
        $this->user->save();
        $this->nextStep();
    }

    function nextStep()
    {
        $this->dispatch('next-step', 6);
    }

    public function render()
    {
        return view('livewire.profile.professional-information');
    }
}
