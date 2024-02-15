@extends('layouts.dash')

@section('content')
<div class="overflow-x-auto">
    <div class="bg-white shadow-md rounded my-6">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Partner</th>
                    <th class="px-4 py-2">Assigned Users</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project )

                <tr>
                    <td class="border px-4 py-2">{{ $project->getStatus()}}</td>
                    <td class="border px-4 py-2">{{ $project->title }}</td>
                    <td class="border px-4 py-2">{{ $project->description }}</td>
                    <td class="border px-4 py-2">{{ $project->partner->name }}</td>
                    <td class="border px-4 py-2">
                        <ul>
                            @foreach($project->users as $user)
                            <li>{{$user->firstname}} {{ $user->lastname}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="border px-4 py-2">
                        @if($project->status !== 'accept')
                        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="accept">
                            <button onclick="acceptProject({{ $project->id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Accept</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<script>
    function acceptProject(projectId) {
    $.ajax({
        url: '/admin/projects/' + projectId + '/status',
        type: 'PATCH',
        data: { status: 'accepted' },
        success: function(response) {
            location.reload();
        },
        error: function(xhr, status, error) {
            console.error(error);
            alert('An error occurred while accepting the project.');
        }
    });
}

</script>
@endsection
