<?php

namespace App\Livewire\Pages;

use App\Models\Organizer;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Symfony\Contracts\Service\Attribute\Required;

class Organizers extends Component
{
    use WithFileUploads;
    public Organizer $organizer;
    public $logo;
    public $editMode;

    protected function rules() {
        return [
            'organizer.name' => ['Required',Rule::unique('organizers','name')->ignore($this->organizer)],
            // 'organizer.name' => 'required|unique:organizers,name',
            'organizer.phone' => 'required',
            'organizer.email' => 'required|email',
            'logo' => 'required|image'
        ];
    }

    function mount($organizer = null)
    {
        $organizer ? $this->organizer = $organizer : $this->organizer = new Organizer();
    }

    function addOrganizer()
    {
        $this->validate();

        $extension = $this->logo->getClientOriginalExtension();
        $fileName = Str::slug($this->organizer->name) . '.' . $extension;
        $this->logo->storeAs('public/organizers', $fileName);
        $this->organizer->logo_url = $fileName;
        $this->organizer->save();
        $this->organizer =  new Organizer();
        $this->logo = null;
        return redirect()->route('organizer.list');
    }

    public function render()
    {
        return view('livewire.pages.organizers');
    }
}
