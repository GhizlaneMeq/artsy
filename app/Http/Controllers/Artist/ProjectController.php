<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('artist.project.display', compact('completedProjects', 'ongoingProjects', 'pendingProjects', 'completedProjectsCount', 'ongoingProjectsCount', 'pendingProjectsCount', 'projects'));
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

        $mediaItems = $project->getMedia();

        return view('artist.project.details', compact('project', 'mediaItems'));
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
        $projectId = 13;
        $newStatus = 'completed';

        $user = auth()->user();
        $user->projects()->updateExistingPivot($projectId, ['progress' => $newStatus]);

        return view('welcome');
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

        $pendingProjects = $user->projects()->wherePivot('progress', 'pending')->get();
        $ongoingProjects = $user->projects()->wherePivot('progress', 'ongoing')->get();
        $completedProjects = $user->projects()->wherePivot('progress', 'completed')->get();

        $completedProjectsCount = $completedProjects->count();
        $ongoingProjectsCount = $ongoingProjects->count();
        $pendingProjectsCount = $pendingProjects->count();


        return view('artist.index', compact('completedProjects', 'ongoingProjects', 'pendingProjects', 'completedProjectsCount', 'ongoingProjectsCount', 'pendingProjectsCount'));
    }
}
