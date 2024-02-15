@extends('layouts.artistDash')

@section('content')
<div class="container mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($projects as $project)
        <a href="{{ route('projects.show', ['project' => $project->id]) }}" class="w-full">
            <div class="bg-white rounded-lg shadow-md p-4">
                <h2 class="text-lg font-semibold">{{ $project->title }}</h2>
                <p class="text-gray-600">{{ $project->description }}</p>
                <p class="text-gray-700 mt-2"><strong>Status:</strong> {{ $project->progress }}</p>
                <p class="text-gray-700">
                    <strong>Assigned:</strong>
                    @if($project->isAssigned())
                        Assigned
                    @else
                        Not Assigned
                    @endif
                </p>
                <form method="POST" action="{{ route('apply', ['project_id' => $project->id]) }}">
                    @csrf
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Apply</button>
                </form>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
