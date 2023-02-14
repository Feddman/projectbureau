<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Message;
use App\Models\Project;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function __construct() {
        $this->middleware(['role:admin'])->except(['index']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = [];
        
        if (auth()->user()->hasRole('admin')) {
            $groups = Group::whereHas('messages')->get();
        }
        else {
            $groups = auth()->user()->groups;
        }
        
        return view('messages.index', [
            'groups' => $groups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = auth()->user()->groups;
        return view('messages.create', [
            'groups' => $groups
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
        $messages = Message::create([
            'subject' => $request->subject,
            'group_id'      => $request->group_id,
            'message'   => $request->message,
        ]);

        return redirect()->route('messages.index');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
