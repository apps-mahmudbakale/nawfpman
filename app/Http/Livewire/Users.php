<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Base
{
    public $sortBy = 'firstname';
    public function render()
    {
        if ($this->search) {
            $users = User::query()
                ->where('firstname', 'like', '%' . $this->search . '%')
                ->Orwhere('lastname', 'like', '%' . $this->search . '%')
                ->Orwhere('phone', 'like', '%' . $this->search . '%')
                ->Orwhere('email', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.users',
                ['users' => $users]
            );
        } else {
            $users = User::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.users',
                ['users' => $users]
            );
        }
    }
}
