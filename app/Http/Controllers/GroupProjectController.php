<?php

namespace App\Http\Controllers;

use App\Models\GroupProject;
use Illuminate\Http\Request;

class GroupProjectController extends Controller
{

    public function undoSoftDelete(GroupProject $gpId){
        // $gpId->restore();
        // return redirect()->route('projects.show', $gpId->project_id);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\GroupProject  $groupProject
     * @return \Illuminate\Http\Response
     */
    public function show(GroupProject $groupProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupProject  $groupProject
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupProject $groupProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GroupProject  $groupProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $gpId)
    {
        GroupProject::withTrashed()
        ->where('id', $gpId)
        ->restore();
        $project_id = $request->project_id;
        // $groupP = GroupProject::findOrFail($gpId);
        // dd($groupP);
        return redirect()->route('projects.show', $project_id);

        // dd($gp);
        // return redirect()->route('projects.show', $gp->project_id);

        // $request->validate([
        //     //
        // ]);
        // $group_project = GroupProject::findOrFail($gpId);
        // dd($gpId);
        // $gpId->group_id = $request->group_id ;
        // $gpId->project_id = $request->project_id;
        // $gpId->deleted_at = NULL;
        // $gpId->save();

        // return redirect()->route('projects.show', $gpId->project_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupProject  $groupProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupProject $groupProject)
    {
        GroupProject::destroy($groupProject->id);
        return redirect()->route('projects.show', $groupProject->project_id);
    }
}
