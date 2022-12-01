<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class ViewProject extends Component
{
    public $project;
    public $tabActive = 'overzicht';

    public function mount($project) {
        $this->project = $project;
    }

    public function setTabActive($tab) {
        $this->tabActive = $tab;
    }

    public function render()
    {
        return view('livewire.projects.view-project');
    }
}
