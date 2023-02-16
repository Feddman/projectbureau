<?php

namespace App\Http\Livewire\Projects\Tabs;

use App\Models\Group;
use App\Mail\meldingSend;
use App\Models\GroupUser;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class Groepen extends Component
{
    public $project;
    public $groups;
    public $groupSelected;

    public function mount() {
        $this->groups = $this->project->groups;
    }

    public function selectGroup($id) {
        $this->groupSelected = $id;
    }

    public function saveGroup() {
        $group = Group::find($this->groupSelected);

        $groupusers = GroupUser::all()->where('group_id', $group->id);

        $url = URL::previous();
        $parts = Explode('/', $url);
        $id = $parts[count($parts) - 1];

        $project = Project::where('id',$id)->first();

        foreach($groupusers as $groupuser){
            if($groupuser->user_id != null){
                $user = User::all()->where('id', $groupuser->user_id)->first();

                session()->put('projectnaam', $project->name);
                session()->put('groepnaam', $group->name);
                session()->put('username', $user->name);
                session()->put('useremail', $user->email);

                $Email = $user->email;

                Mail::to($Email)->send(new meldingSend);
            }
        }

        // $this->project->groups()->attach($group);
        // $this->project->groups = $this->project->groups()->get();

    }

    public function render()
    {
        return view('livewire.projects.tabs.groepen');
    }
}
