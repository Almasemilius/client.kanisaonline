<?php

namespace App\Livewire\Profile;

use Carbon\Carbon;
use Livewire\Component;

class UpdateDateOfBirth extends Component
{
    public $from;
    public $to;
    public $difference;
    public $date;
    public $month;
    public $year;

    function mount() {
        $this->to = today();
        $this->from = today()->subYears(80);

        $this->difference = $this->from->diffInYears($this->to);
    }

    function saveDateOfBirth() {
        $date = Carbon::createFromDate($this->year,$this->month,$this->date);
        $user = auth()->user();
        $user->date_of_birth = $date;
        $user->save();
        $this->nextStep();
    }

    function nextStep() {
        $this->dispatch('next-step',4);
    }

    public function render()
    {
        // dd($from->format('Y'));

        return view('livewire.profile.update-date-of-birth');
    }
}
