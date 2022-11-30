<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class YourGroups extends Component
{
    public $groups;

    public function mount() {
        $this->groups = auth()->user()->groups;
    }

    public function render()
    {
        return view('livewire.dashboard.your-groups');
    }

}
