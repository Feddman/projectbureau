<?php

namespace App\Http\Livewire\Projects\Tabs;

use Livewire\Component;

class Overzicht extends Component
{
    public $project;
    public function render()
    {
        return view('livewire.projects.tabs.overzicht');
    }
}
