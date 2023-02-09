<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsIndex extends Component
{
    public $projects;
    public $filterType;
    public $filterTags = [];
    public $filterPriority;

    public function updated()
    {
        $this->projects = Project::when($this->filterType, function($query){
            return $query->where('type_id', $this->filterType);
        })->when($this->filterPriority, function($query){
            return $query->where('priority', $this->filterPriority);
        })->when($this->filterTags, function($query) {
            return $query->withAnyTags($this->filterTags);
        })->get();
    }

    public function render()
    {
        return view('livewire.projects.projects-index');
    }
}
