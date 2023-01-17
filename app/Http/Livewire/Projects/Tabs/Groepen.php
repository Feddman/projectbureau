<?php

namespace App\Http\Livewire\Projects\Tabs;

use App\Models\Group;
use Livewire\Component;

class Groepen extends Component
{
    public $project;
    public $groups;
    public $groupSelected;

    public function mount() {
        $this->groups = $this->project->groups;
    }

    public function selectGroup($id) {
        $this->groupSelected = $id;
    }

    public function saveGroup() {
        $group = Group::find($this->groupSelected);
        $this->project->groups()->attach($group);
        $this->project->groups = $this->project->groups()->get();
    }

    public function render()
    {
        return view('livewire.projects.tabs.groepen');
    }
}
