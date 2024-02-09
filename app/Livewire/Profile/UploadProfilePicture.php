<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadProfilePicture extends Component
{
    use WithFileUploads;
    public $profileImage;

    protected $rules = [
        'profileImage' => 'nullable|image|mimes:jpg,png,jpeg'
    ];

    function uploadImage() {
        if($this->profileImage){
            $extension = $this->profileImage->getClientOriginalExtension();
            $this->profileImage->storeAs(path: 'profiles', name: auth()->user()->email.'.'.$extension);

            $this->dispatch('next-step',3);
        }
    }

    public function render()
    {
        return view('livewire.profile.upload-profile-picture');
    }
}
