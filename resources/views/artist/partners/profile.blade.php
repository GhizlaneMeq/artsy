@extends('layouts.artistDash')

@section('content')
<div class="px-10 mt-6">
    <h1 class="text-2xl font-bold">Partner Profile</h1>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-10 mt-4">
    <div class="col-span-2 bg-white shadow-md rounded p-4">
        <div class="bg-white shadow-md rounded p-4">
            <h2 class="text-xl font-bold">{{ $partner->first_name }} {{ $partner->last_name }}</h2>
            <p class="text-gray-600">Email: {{ $partner->email }}</p>
            <p class="text-gray-600">Phone: {{ $partner->phone }}</p>
        </div>
        <div class="bg-white shadow-md rounded p-4">
            <img src="{{ asset($partner->picture) }}" alt="{{ $partner->first_name }} {{ $partner->last_name }}" class="w-40 h-40 mx-auto rounded-full">
        </div>
    </div>
    <div class="col-span-1 bg-white shadow-md rounded p-4">
        <h2 class="text-xl font-bold">Projects by {{ $partner->name }}</h2>
        <ul class="list-disc list-inside">
            @forelse ($projects as $project)
                <li><a href="{{ route('projects.show', $project->id) }}" class="text-blue-500 hover:underline">{{ $project->title }}</a></li>
            @empty
                <li>No projects found for this partner</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection
