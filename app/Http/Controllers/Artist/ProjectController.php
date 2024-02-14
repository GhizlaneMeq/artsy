<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
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
        $projects = Project::all();

        $completedProjects = $projects->where('progress', 'completed');
        $ongoingProjects = $projects->where('progress', 'ongoing');
        $pendingProjects = $projects->where('progress', 'pending');

        $completedProjectsCount = $completedProjects->count();
        $ongoingProjectsCount = $ongoingProjects->count();
        $pendingProjectsCount = $pendingProjects->count();

        return view('artist.index', compact('completedProjects', 'ongoingProjects', 'pendingProjects', 'completedProjectsCount', 'ongoingProjectsCount', 'pendingProjectsCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partners = Partner::all();
        $users = User::all();
        return view('artist.project.create', compact('users', 'partners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project->load('partner', 'users');
        return view('artist.project.details', compact('project', ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request)
    {
        $projectId = $request->input('projectId');
        $newprogress = $request->input('newprogress');

        $project = Project::findOrFail($projectId);

        $project->progress = $newprogress;
        $project->save();

        return response()->json(['message' => 'Project progress updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userProjects()
    {
        $user = auth()->user();
        $projects = $user->projects;

        $completedProjects = $projects->where('progress', 'completed');
        $ongoingProjects = $projects->where('progress', 'ongoing');
        $pendingProjects = $projects->where('progress', 'pending');

        $completedProjectsCount = $completedProjects->count();
        $ongoingProjectsCount = $ongoingProjects->count();
        $pendingProjectsCount = $pendingProjects->count();

        return view('artist.index', compact('completedProjects', 'ongoingProjects', 'pendingProjects', 'completedProjectsCount', 'ongoingProjectsCount', 'pendingProjectsCount'));
    }

}
