<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class MemberList extends Component
{
    public function render()
    {
        $users = User::where('role','member')->paginate(6);

        return view('livewire.member-list', compact('users'));
    }
}
