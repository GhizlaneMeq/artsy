@extends('layouts.dash')

@section('content')
<div style="">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        @foreach ($projects as $project)
        <div class="flex justify-center">
            <div class="max-w-sm w-full lg:max-w-full lg:flex flex-1">
                <div
                    class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <p class="text-sm text-gray-600 flex items-center">
                            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                            </svg>
                            {{$project->getStatus() }}
                        </p>
                        <div class="text-gray-900 font-bold text-xl mb-2">{{ $project->title }}</div>
                        <p class="text-gray-700 text-base">{{ $project->description }}</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="/img/jonathan.jpg"
                            alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">{{ $project->partner->name }}</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('projects.show', $project) }}"
                            class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
