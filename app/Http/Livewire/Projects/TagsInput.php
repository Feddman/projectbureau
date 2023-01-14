<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;
use Spatie\Tags\Tag;

class TagsInput extends Component
{
    public $projectTags = [];

    public function mount($project = [])
    {
        if ($project) {
            $this->projectTags = $this->formatTags($project->tags);
        }
        $this->allTags = $this->formatTags(Tag::all());
    }
    
    public function formatTags($tags)
    {
        return $tags->map(function ($tag) {
            return ['id' => $tag->id, 'text' => $tag->name];
        })->toArray();
    }
    
    public function render()
    {
        return view('livewire.projects.tags-input');
    }
}
