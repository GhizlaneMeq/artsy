@extends('layouts.artistDash')

@section('content')
<div class="px-10 mt-6">
    <h1 class="text-2xl font-bold">Partners and Their Projects</h1>
</div>
<div class="px-10 mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach ($partners as $partner)
        <div class="bg-white shadow-md rounded p-4">
            <a href="{{ route('partners.show', $partner->id) }}" class="text-blue-500 hover:underline">
                <h2 class="text-xl font-bold">{{ $partner->name }}</h2>
            </a>
            <p class="text-gray-600">{{ $partner->description }}</p>
            <div class="mt-4">
                <h3 class="text-lg font-semibold">Projects:</h3>
                <ul class="list-disc list-inside">
                    @forelse ($partner->projects as $project)
                        <li>
                            <a href="{{ route('projects.show', $project->id) }}" class="text-blue-500 hover:underline">{{ $project->title }}</a>
                        </li>
                    @empty
                        <li>No projects available</li>
                    @endforelse
                </ul>
            </div>
        </div>
    @endforeach
</div>
@endsection
