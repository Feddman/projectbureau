<?php

namespace App\Http\Livewire\Projects;

use App\Models\GroupProject;
use Livewire\Component;


class Links extends Component
{
    public $project;
    public $group;

    public $trello_link = '';
    public $github_link = '';

    protected $rules = [
        'group.pivot.trello_link' => 'nullable|url',
        'group.pivot.github_link' => 'nullable|url'
    ];

    public function mount($project, $group) {
        $this->project = $project;
        $this->group = $group;
    }

    public function save() {
        $this->validate();
        GroupProject::where('group_id', $this->group->id)->where('project_id', $this->project->id)->update([
            'trello_link' => $this->group->pivot['trello_link'],
            'github_link' => $this->group->pivot['github_link']
        ]);
        session()->flash('message', 'Links opgeslagen');
        
    }




    public function render()
    {
        return view('livewire.projects.links');
    }
}
