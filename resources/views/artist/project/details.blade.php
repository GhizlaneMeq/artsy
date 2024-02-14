@extends('layouts.artistDash')

@section('content')
<div class="px-10 mt-6">
    <h1 class="text-2xl font-bold">Project Details</h1>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-10 mt-4">
    <div class="bg-white shadow-md rounded p-4">
        <h2 class="text-xl font-bold">{{ $project->title }}</h2>
        <p class="text-gray-600">{{ $project->description }}</p>
        <p class="text-gray-600">Start Date: {{ $project->start_date }}</p>
        <p class="text-gray-600">End Date: {{ $project->end_date }}</p>
        <p class="text-gray-600">Status: {{ $project->status }}</p>
        <p class="text-gray-600">Budget: {{ $project->budget }}</p>
        <p class="text-gray-600">Progress: {{ $project->progress }}</p>
    </div>
    <div class="bg-white shadow-md rounded p-4">
        <h2 class="text-xl font-bold">Partner</h2>
        @if ($project->partner)
            <a href="{{ route('partners.show', $project->partner->id) }}" class="text-blue-500 hover:underline">
                {{ $project->partner->name }}
            </a>
        @else
            <p class="text-gray-600">Not Assigned</p>
        @endif
    </div>
</div>

<div class="px-10 mt-6">
    <h2 class="text-xl font-bold">Assigned Artists</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-10 mt-4">
    @forelse ($project->users as $artist)
        <div class="bg-white shadow-md rounded p-4">
            <h3 class="text-lg font-semibold">
                <a href="/* route('artists.show', $artist->id)  */" class="text-blue-500 hover:underline">
                    {{ $artist->firstname }} {{ $artist->lastname }}
                </a>
            </h3>
            <p class="text-gray-600">Email: {{ $artist->email }}</p>
        </div>
    @empty
        <div class="bg-white shadow-md rounded p-4">
            <p class="text-gray-600">No artists assigned to this project</p>
        </div>
    @endforelse
</div>
@endsection
