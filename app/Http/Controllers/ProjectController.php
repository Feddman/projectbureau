<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProjectController extends Controller
{

    public function __construct() {
        $this->middleware(['role:admin'])->except(['index', 'show', 'propose']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function review()
    {
        $projects = Project::all();
        return view('projects.review.index', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function review_show($id)
    {
        $project = Project::findOrFail($id);
        $customers = \App\Models\Customer::all();
        return view('projects.review.show', [
            'project' => $project,
            'customers' => $customers
        ]);
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
            'type_id'      => $request->type,
            'description'   => $request->description,
            'info_docent' => $request->info_docent,
            'customer_id' => $request->customer_id ?? $customer->id,
            'notes' => $request->notes
        ]);

        if($request->tags) {
            $project->tags()->sync($request->tags);
        }

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
        $customers = \App\Models\Customer::all();
        return view('projects.edit', compact('project', 'customers'));
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
        if (!$request->customer_id) {
            if (isset($request->contact_name)) {
                $customer = \App\Models\Customer::create([
                    'contact_name' => $request->contact_name,
                    'contact_email' => $request->contact_email,
                    'contact_phone' => $request->contact_phone
                ]);
            }
        }

        $project->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'type_id'      => $request->type,
            'description'   => $request->description,
            'info_docent' => $request->info_docent,
            'customer_id' => $request->customer_id ?? $customer->id,
            'notes' => $request->notes
        ]);

        if ($request->tags) {
            $project->tags()->sync($request->tags);
        }

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $project->addMedia($file)->usingFileName(\Str::random(20) . '' . $project->id . '.' . $file->getClientOriginalExtension())->toMediaCollection('project_attachments');
            }
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('message', 'Project succesvol verwijderd.');
    }

    public function downloadMedia($id) {
        $media = Media::find($id);
        return response()->download($media->getPath(), $media->file_name);
    }
}
