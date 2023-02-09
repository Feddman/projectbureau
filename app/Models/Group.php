<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'groups';
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function projects() {
        return $this->belongsToMany(Project::class, 'group_project')->withPivot('id', 'trello_link', 'github_link', 'deleted_at');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'group_user');
    }

    public function creator(){
        $this->belongsTo(User::class,'creator_id');
    }


}
