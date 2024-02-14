@extends('layouts.dash')

@section('content')
<div class="container mx-auto">
    <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            <h2 class="text-lg font-semibold mb-4 text-blue-600">Recent Users</h2>
            @foreach($recentUsers as $user)
                <div class="mb-2">
                    <div class="bg-blue-100 p-4 rounded">
                        <span class="font-bold">{{ $user->name }}</span><br>
                        {{ $user->email }}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            <h2 class="text-lg font-semibold mb-4 text-purple-600">Recent Partners</h2>
            @foreach($recentPartners as $partner)
                <div class="mb-2">
                    <div class="bg-purple-100 p-4 rounded">
                        <span class="font-bold">{{ $partner->name }}</span><br>
                        {{ $partner->email }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Second Row: Projects in Tables -->
    <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            <h2 class="text-lg font-semibold mb-4 text-fuchsia-600">Projects with Partners</h2>
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="bg-fuchsia-200">Title</th>
                        <th class="bg-fuchsia-200">Partner</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projectsWithPartners as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->partner->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            <h2 class="text-lg font-semibold mb-4 text-fuchsia-600">Projects without Partners</h2>
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="bg-fuchsia-200">Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projectsWithoutPartners as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
</div>
@endsection
