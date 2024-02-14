@extends('layouts.artistDash')

@section('content')
<div class="px-10 mt-6">
    <h1 class="text-2xl font-bold">Artist Project Board</h1>
</div>
<div class="flex flex-grow px-10 mt-4 space-x-6 overflow-auto">

    <div class="flex flex-col flex-shrink-0 w-72" id="pending-column">
        <div class="flex items-center flex-shrink-0 h-10 px-2">
            <span class="block text-sm font-semibold">Pending</span>
            <span
                class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-white rounded bg-yellow-500">{{ $pendingProjectsCount }}</span>
        </div>
        <div class="flex flex-col pb-2 overflow-auto">
            @foreach ($pendingProjects as $project)
                <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 draggable"
                    draggable="true" data-id="{{ $project->id }}" data-status="pending">
                    <span
                        class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-200 rounded-full">Pending</span>
                    <h4 class="mt-3 text-sm font-medium">{{ $project->title }}</h4>
                    <p class="text-sm">{{ $project->description }}</p>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">{{ $project->start_date }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="flex flex-col flex-shrink-0 w-72" id="ongoing-column">
        <div class="flex items-center flex-shrink-0 h-10 px-2">
            <span class="block text-sm font-semibold">Ongoing</span>
            <span
                class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-white rounded bg-green-500">{{ $ongoingProjectsCount }}</span>
        </div>
        <div class="flex flex-col pb-2 overflow-auto">
            @foreach ($ongoingProjects as $project)
                <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 draggable"
                    draggable="true">
                    <span
                        class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-200 rounded-full">Ongoing</span>
                    <h4 class="mt-3 text-sm font-medium">{{ $project->title }}</h4>
                    <p class="text-sm">{{ $project->description }}</p>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">{{ $project->start_date }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="flex flex-col flex-shrink-0 w-72" id="completed-column">
        <div class="flex items-center flex-shrink-0 h-10 px-2">
            <span class="block text-sm font-semibold">Completed</span>
            <span
                class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-white rounded bg-pink-500">{{ $completedProjectsCount }}</span>
        </div>
        <div class="flex flex-col pb-2 overflow-auto">
            @foreach ($completedProjects as $project)
                <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 draggable"
                    draggable="true">
                    <span
                        class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-200 rounded-full">Completed</span>
                    <h4 class="mt-3 text-sm font-medium">{{ $project->title }}</h4>
                    <p class="text-sm">{{ $project->description }}</p>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">{{ $project->start_date }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</div>
@endsection
