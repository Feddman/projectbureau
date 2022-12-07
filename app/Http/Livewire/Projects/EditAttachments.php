<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class EditAttachments extends Component
{
    public $project;

    public function render()
    {
        return view('livewire.projects.edit-attachments');
    }

    public function deleteImage($id) {
        $images = $this->project->getMedia('project_attachments');
        $image = $images->where('id', $id)->first();
        $image->delete();
        $this->project = Project::find($this->project->id); // crazy refresh technique, need refactor ASAP...
        // flash message
        session()->flash('message', 'Image deleted successfully.');
    }
}
