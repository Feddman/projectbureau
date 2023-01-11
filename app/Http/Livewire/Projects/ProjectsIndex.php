<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsIndex extends Component
{
    public $projects;
    public $filterType;

    public function updatedFilterType()
    {
        $this->projects = Project::when($this->filterType, function($query){
            return $query->where('type_id', $this->filterType);
        })->get();
    }

    public function render()
    {
        return view('livewire.projects.projects-index');
    }
}
