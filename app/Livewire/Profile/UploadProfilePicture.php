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
        $user = auth()->user;
        if($this->profileImage){
            $extension = $this->profileImage->getClientOriginalExtension();
            $name = auth()->user()->email.'.'.$extension;
            $this->profileImage->storeAs(path: 'profiles', name: $name);
            $user->image_url = $name;
            $user->save();
            $this->dispatch('next-step',3);
        }
    }

    function nextStep() {
        $this->dispatch('next-step',3);
    }

    public function render()
    {
        return view('livewire.profile.upload-profile-picture');
    }
}
