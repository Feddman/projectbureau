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
        return $this->belongsToMany(Project::class, 'group_project')->withPivot('trello_link', 'github_link');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'group_user');
    }

    public function creator(){
        $this->belongsTo(User::class,'creator_id');
    }

    public function messages() {
        return $this->hasMany(Message::class);
    }
}
