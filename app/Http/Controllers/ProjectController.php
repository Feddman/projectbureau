<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty(request()->get('s'))){
            $projects = Project::where('name', 'LIKE', '%' . request()->get('s') . '%')->get();
        } else {
            $projects = Project::all();
        }
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = \App\Models\Customer::all();
        return view('projects.create', [
            'customers' => $customers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->customer_id) {
            if(isset($request->contact_name)) {
                $customer = \App\Models\Customer::create([
                    'contact_name' => $request->contact_name,
                    'contact_email' => $request->contact_email,
                    'contact_phone' => $request->contact_phone
                ]);

            }
        }

        $project = Project::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'type'      => $request->type,
            'description'   => $request->description,
            'info_docent' => $request->info_docent,
            'customer_id' => $request->customer_id ?? $customer->id,
            'notes' => $request->notes
        ]);

        if($request->hasFile('files')) {
            foreach($request->file('files') as $file) {
                $project->addMedia($file)->usingFileName(\Str::random(20) . '' . $project->id . '.' . $file->getClientOriginalExtension())->toMediaCollection('project_attachments');
            }
        }

        return redirect()->route('projects.index')->with('message', 'Project succesvol aangemaakt.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function downloadMedia($id) {
        $media = Media::find($id);
        return response()->download($media->getPath(), $media->file_name);
    }
}
