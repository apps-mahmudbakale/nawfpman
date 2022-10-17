<?php

namespace App\Http\Livewire;

use App\Models\Member;
use App\Models\Vendor;
use Livewire\Component;

class Members extends Base
{
    public $sortBy = 'firstname';
    public function render()
    {
        if ($this->search) {
            $members = Member::query()
                ->where('firstname', 'like', '%' . $this->search . '%')
                ->orWhere('lastname', 'like', '%'. $this->search . '%')
                ->orWhere('phone', 'like', '%'. $this->search . '%')
                ->orWhere('email', 'like', '%'. $this->search . '%')
                ->orWhere('state', 'like', '%'. $this->search . '%')
                ->orWhere('lga', 'like', '%'. $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.members',
                ['members' => $members]
            );
        } else {
            $members = Member::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.members',
                ['members' => $members]
            );
        }
    }
}
