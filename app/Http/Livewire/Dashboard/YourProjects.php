<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class YourProjects extends Component
{
    public $projects;

    public function mount() {
        $this->projects = auth()->user()->projects;
    }

    public function render()
    {
        return view('livewire.dashboard.your-projects');
    }

}
