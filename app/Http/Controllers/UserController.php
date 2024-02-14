<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\UserCreatedMail;
use App\Models\Project;
use Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
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
        return view('admin.artist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        $password = Str::random(10);

        $user = User::create([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'password' => Hash::make($password),
        ]);


        Mail::to($user->email)->send(new UserCreatedMail($password));

        return redirect()->back()->with('success', 'User created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.artist.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    public function test(){
        echo 'hi';
    }
}
