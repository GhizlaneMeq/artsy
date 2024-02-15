<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $completedProjects = $user->projects()->wherePivot('progress', 'completed')->get();
        $ongoingProjects = $user->projects()->wherePivot('progress', 'ongoing')->get();
        $pendingProjects = $user->projects()->wherePivot('progress', 'pending')->get();

        $completedProjectsCount = $completedProjects->count();
        $ongoingProjectsCount = $ongoingProjects->count();
        $pendingProjectsCount = $pendingProjects->count();

        return view('artist.project.display', compact('completedProjects', 'ongoingProjects', 'pendingProjects', 'completedProjectsCount', 'ongoingProjectsCount', 'pendingProjectsCount'));
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

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $project->addMedia(storage_path('app/public/' . $imagePath))->toMediaCollection();
        }

        if (isset($request['artist_ids'])) {
            $project->users()->attach($request['artist_ids']);
        }
        return redirect()->route('projects.userProjects')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project->load('partner', 'users');

        /* $mediaItems = $project->getMedia(); */

        return view('artist.project.details', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('artist.project.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {


        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request)
    {
        $projectId = $request->input('projectId');
        $newStatus = $request->input('newStatus');

        if (!in_array($newStatus, ['pending', 'ongoing', 'completed'])) {
            return response()->json(['error' => 'Invalid status.'], 400);
        }

        $user = Auth::user();
        $user->projects()->updateExistingPivot($projectId, ['progress' => $newStatus]);

        return response()->json(['message' => 'Project status updated successfully.'], 200);
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully.');
    }

    public function userProjects()
    {
        $user = auth()->user();

        $pendingProjects = $user->projects()->wherePivot('progress', 'pending')->get();
        $ongoingProjects = $user->projects()->wherePivot('progress', 'ongoing')->get();
        $completedProjects = $user->projects()->wherePivot('progress', 'completed')->get();

        $completedProjectsCount = $completedProjects->count();
        $ongoingProjectsCount = $ongoingProjects->count();
        $pendingProjectsCount = $pendingProjects->count();


        return view('artist.index', compact('completedProjects', 'ongoingProjects', 'pendingProjects', 'completedProjectsCount', 'ongoingProjectsCount', 'pendingProjectsCount'));
    }

    public function apply(Request $request, $projectId)
    {
        $user = auth()->user();

        $project = Project::findOrFail($projectId);
        $project->users()->attach($user->id, ['progress' => 'pending']);

        return redirect()->route('projects.userProjects')->with('success', 'You have successfully applied to the project.');
    }

    public function userCreatedProjects()
    {
        $user = Auth::user();
        $createdProjects = $user->projects()->get();
        return view('artist.project.created', compact('createdProjects'));
    }
}
