<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $guarded = [];

    public function projects() {
        return $this->belongsToMany(Project::class, 'group_project');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'group_user');
    }
}
