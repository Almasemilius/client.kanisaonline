<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    public function render()
    {
        $users = User::where('role','staff')->paginate(6);
        return view('livewire.list-users',compact('users'));
    }
}
