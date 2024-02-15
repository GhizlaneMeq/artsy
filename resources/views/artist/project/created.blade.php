@extends('layouts.artistDash')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-4">Projects Created by You</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($createdProjects as $project)
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-lg font-semibold">{{ $project->title }}</h2>
            <p class="text-gray-600">{{ $project->description }}</p>
            <p class="text-gray-700 mt-2"><strong>Status:</strong> {{ $project->progress }}</p>
            <p class="text-gray-700">
                <strong>Accepted:</strong>
                @if($project->accepted)
                    Accepted
                @else
                    Not Accepted
                @endif
            </p>
            <div class="mt-4 flex justify-between">
                <a href="{{ route('projects.show', ['project' => $project->id]) }}" class="btn btn-primary">View Details</a>
                <a href="{{ route('projects.edit', ['project' => $project->id]) }}" class="btn btn-secondary">Edit</a>
                <form method="POST" action="{{ route('projects.destroy', ['project' => $project->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
