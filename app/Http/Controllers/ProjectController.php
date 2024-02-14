<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $projects = Project::with('partner', 'users')->get();
    return view('admin.project.index', compact('projects'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partners = Partner::doesntHave('projects')->get();
        $users = User::all();
        return view('admin.project.create', compact('partners', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project=Project::create($request->all());
        if ($request->has('artist_ids')) {
            $project->users()->attach($request->input('artist_ids'));
        }
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project->load('partner', 'users');

        return view('admin.project.details', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $users = User::all();
        $partners = Partner::all();

        return view('admin.project.edit', compact('project', 'users', 'partners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        if ($request->has('artist_ids')) {
            $project->users()->sync($request->input('artist_ids'));
        } else {
            $project->users()->detach();
        }

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }


}
