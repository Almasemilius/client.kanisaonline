<?php

namespace App\Livewire\Pages;

use App\Models\Sponsor;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AddPartner extends Component
{
    public $logo;
    public $editMode = false;
    public Sponsor $sponsor;
    use WithFileUploads;


    public function rules()
    {
        return [
            'sponsor.name' => ['required', Rule::unique('sponsors', 'name')->ignore($this->sponsor)],
        ];
    }


    function mount($sponsor = null)
    {
        if ($sponsor == null) {
            $this->sponsor = new Sponsor();
        } else {
            $this->sponsor = $sponsor;
            $this->editMode = true;
        }
    }

    public function addSponsor()
    {
        $this->validate();
        if ($this->editMode) {
            $this->validate([
                'logo' => 'image|nullable',

            ]);
        } else {
            $this->validate([
                'logo' => 'image|required',

            ]);
        }
        if ($this->logo) {
            $extension = $this->logo->getClientOriginalExtension();
            $fileName = Str::slug($this->sponsor->name) . '.' . $extension;
            $this->logo->storeAs('public/sponsors', $fileName);
            $this->sponsor->logo_url = $fileName;
        }
        $this->sponsor->save();
        $this->refreshSponsor();
        return redirect()->route('partner.management');
    }

    function refreshSponsor()
    {
        $this->logo = null;
        $this->sponsor = new Sponsor();
    }
    public function render()
    {
        return view('livewire.pages.add-partner');
    }
}
