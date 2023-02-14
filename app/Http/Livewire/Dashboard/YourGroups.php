<?php

namespace App\Http\Livewire\Dashboard;
use App\Models\User;

use Livewire\Component;
use Str;

class YourGroups extends Component
{
    public $groups;
    public $newGroup;

    public function mount() {
        $this->groups = auth()->user()->groups;

    }

    public function saveGroup() {


        $group = auth()->user()->groups()->create([
            'name' => $this->newGroup,
            'invitation_token' => Str::random(10),
            'creator_id' => auth()->user()->id,
        ]);

        $this->groups->push($group);
        $this->newGroup = '';

        session()->flash('message', 'Groep succesvol aangemaakt.');
    }


    public function render()
    {
        return view('livewire.dashboard.your-groups');
    }

}
