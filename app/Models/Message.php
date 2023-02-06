<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Message extends Model
{
    use HasFactory;

    protected $guarded=[];

    /**
     * Get the group the message was sent to.
     *
     * @return BelongsTo
     */
    public function group() {
        return $this->belongsTo(Group::class);
    }

    /**
     * Get all members of the message's group.
     *
     * @return mixed
     */
    public function recipients() {
        return $this->group->users();
    }

    /**
     * Get users that have read the message.
     *
     * @return BelongsToMany
     */
    public function readByUsers() {
        return $this->belongsToMany(User::class, MessageUser::class)->withPivot('read_at');
    }

    /**
     * Check if the message is read by a specified user.
     *
     * @param $user
     * @return bool
     */
    public function isReadByUser($user) {
        return $this->readByUsers()->where('user_id', $user)->exists();
    }

}
