<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
// softdeletes
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model implements HasMedia
{
    use HasFactory, HasTags,InteractsWithMedia, SoftDeletes;
    protected $table = 'projects';
    protected $guarded = [];


    public function groups() {
        return $this->belongsToMany(Group::class, 'group_project')->withPivot('trello_link', 'github_link');
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function type() {
        return $this->belongsTo(ProjectType::class, 'type_id');
    }
}
