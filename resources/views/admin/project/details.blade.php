@extends('layouts.dash')

@section('content')
<div class="container mx-auto">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-xl font-bold mb-4">Project Details</h2>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Title:</p>
            <p class="text-gray-900">{{ $project->title }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Description:</p>
            <p class="text-gray-900">{{ $project->description }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Start Date:</p>
            <p class="text-gray-900">{{ $project->start_date }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">End Date:</p>
            <p class="text-gray-900">{{ $project->end_date }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Status:</p>
            <p class="text-gray-900">{{ $project->status }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Budget:</p>
            <p class="text-gray-900">{{ $project->budget }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Progress:</p>
            <p class="text-gray-900">{{ $project->progress }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Partner:</p>
            <p class="text-gray-900">{{ $project->partner->name ?? 'No partner assigned' }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold mb-2">Assigned Users:</p>
            <ul class="list-disc pl-4">
                @forelse ($project->users as $user)
                    <li class="text-gray-900">{{ $user->firstname }}</li>
                @empty
                    <li class="text-gray-900">No users assigned</li>
                @endforelse
            </ul>
        </div>
        <div class="flex">
            <a href="{{ route('admin.projects.edit', $project) }}"
                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                Edit
            </a>
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                    onclick="return confirm('Are you sure you want to delete this project?')">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
