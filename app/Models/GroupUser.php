<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'group_user';
    protected $dates = ['deleted_at'];
    protected $guarded = [];
}
