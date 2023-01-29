<?php

namespace App\Http\Livewire\Messages;

use App\Models\Group;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class MessagesIndex extends Component
{
    public $groups;
    public $selectedGroup = ['id' => -1];
    
    public $selectedMessage = '';

    /**
     * Set the selected group
     * 
     * @param Group $group
     * @return void
     */
    public function selectGroup(Group $group): void
    {
        if ($this->selectedGroup['id'] == $group->id) {
            $this->selectedGroup = [
                'id' => -1
            ];
        }
        else {
            $this->selectedGroup = $group;
        }
    }

    /**
     * Check if the group is already selected.
     *
     * @param Group $group
     * @return bool
     */
    public function checkGroupAlreadySelected(Group $group): bool
    {
        if ($this->selectedGroup && $group->id == $this->selectedGroup['id']){
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Show the message selected by user.
     * 
     * @param Message $message
     * @return void
     */
    public function showMessage(Message $message): void
    {
        $this->selectedMessage = $message;
        $this->markAsRead($message);
    }

    /**
     * Mark unread message as read.
     * 
     * @param Message $message
     * @return void
     */
    public function markAsRead(Message $message): void
    {
        if (!$message->isReadByUser(auth()->id())) {
            $message->readByUsers()->attach([auth()->id() => [
                    'read_at' => now()
                ]
            ]);
        }
    }
    
    public function render()
    {
        return view('livewire.messages.messages-index');
    }
}
