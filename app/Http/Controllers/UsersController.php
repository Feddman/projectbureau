<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupProject;
use App\Models\User;
use App\Models\GroupUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class UsersController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(9);
        return view('users.index',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all()->first();
        return view('users.edit',[
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $url = URL::current();
        $parts = Explode('/', $url);
        $id = $parts[count($parts) - 1];

        $user = User::all()->where('id', $id)->first();

        $user->name =  $request->input('name');
        $user->email =  $request->input('email');
        $user->save();
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $url = URL::current();
        $parts = Explode('/', $url);
        $id = $parts[count($parts) - 1];

        $getgroup = Group::all()->where('creator_id', $id);
        foreach($getgroup as $group){
            $group_project = GroupProject::where('group_id', $group->id);
            $group_project->delete();
        }        


        $groupuser = GroupUser::where('user_id', $id);
        $groupuser->delete();
        

        $group = Group::where('creator_id', $id);
        $group->delete();

        $user = User::where('id', $id);
        $user->delete();
        return redirect('users');
    }
}
