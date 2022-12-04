<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Project extends Model implements HasMedia
{
    use HasFactory, HasTags,InteractsWithMedia;
    protected $table = 'projects';
    protected $guarded = [];


    public function groups() {
        return $this->belongsToMany(Group::class, 'group_project');
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
