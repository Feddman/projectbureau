<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsIndex extends Component
{
    public $projects;
    public $filter;

    public function updatedFilter()
    {
        $this->projects = Project::when($this->filter, function($query){
            return $query->where('type_id', $this->filter);
        })->get();
    }

    public function render()
    {
        return view('livewire.projects.projects-index');
    }
}
