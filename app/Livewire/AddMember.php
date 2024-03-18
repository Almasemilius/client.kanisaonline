<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;

class AddMember extends Component
{

    public $from;
    public $to;
    public $difference;
    public $date;
    public $month;
    public $year;
    public User $user;

    protected $rules = [
        'user.name' => 'required',
        'user.email' => 'required',
        'user.phone' => 'required',
        'user.gender' => 'required',
        'user.citizenship' => 'required',
        'user.language' => 'required',
        'user.email_verified_at' => 'required',
        'user.password' => 'required',
        'user.image_url' => 'required',
        'user.marital_status' => 'required',
        'user.spouse_name' => 'required',
        'user.number_of_children' => 'required',
        'user.new_user' => 'required',
        'user.date_of_birth' => 'required',
        'user.education_level' => 'required',
        'user.employment_status' => 'required',
        'user.region' => 'required',
        'user.district' => 'required',
        'user.ward' => 'required',
        'user.postal_code' => 'required',
        'user.street_name' => 'required',
        'user.water_baptist' => 'required',
        'user.holy_ghost_baptism' => 'required',
        'user.salvation_status' => 'required',
        'user.fellowship_group' => 'required',
        'user.home_cell' => 'required',
        'user.service_group' => 'required',
        'user.role' => 'required',
    ];

    function mount()
    {
        $this->user = new User();
        $this->to = today();
        $this->from = today()->subYears(80);

        $this->difference = $this->from->diffInYears($this->to);
    }

    function addUser() {
        // $this->validate();
        // dd($this->errors);
        $this->user->password =  Hash::make(Str::random(8));
        $this->user->save();

        return redirect()->route('list.members');
    }



    function firstStep()
    {
        $this->dispatch('next');
    }

    public function render()
    {
        return view('livewire.add-member');
    }
}
