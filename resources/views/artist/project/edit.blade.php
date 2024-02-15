@extends('layouts.artistDash')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Edit Project</h1>
    <form method="POST" action="{{ route('projects.update', ['project' => $project->id]) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block mb-1 text-sm font-semibold text-gray-600">Title</label>
            <input type="text" id="title" name="title" value="{{ $project->title }}"
                class="w-full px-4 py-2 text-sm border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
        </div>

        <div class="mb-4">
            <label for="description" class="block mb-1 text-sm font-semibold text-gray-600">Description</label>
            <textarea id="description" name="description"
                class="w-full px-4 py-2 text-sm border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">{{ $project->description }}</textarea>
        </div>

        <div class="mb-4">
            <label for="start_date" class="block mb-1 text-sm font-semibold text-gray-600">Start Date</label>
            <input type="date" id="start_date" name="start_date" value="{{ $project->start_date }}"
                class="w-full px-4 py-2 text-sm border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
        </div>

        <div class="mb-4">
            <label for="end_date" class="block mb-1 text-sm font-semibold text-gray-600">End Date</label>
            <input type="date" id="end_date" name="end_date" value="{{ $project->end_date }}"
                class="w-full px-4 py-2 text-sm border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
        </div>

        <!-- Add more fields as needed -->

        <div class="mt-6">
            <button type="submit"
                class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Update
                Project</button>
        </div>
    </form>
</div>
@endsection
