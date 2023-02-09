<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GroupProject extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'group_project';
    protected $guarded = [];

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

  
}
