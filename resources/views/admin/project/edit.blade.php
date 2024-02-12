@extends('layouts.dash')

@section('content')
<div class="container mx-auto">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-xl font-bold mb-4">Edit Project</h2>
        <form method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                <input type="file" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" onchange="previewImage(event)">
                <img id="imagePreview" src="{{ asset('storage/' . $project->image) }}" alt="Preview" style="max-width: 100%; margin-top: 10px;">
            </div>

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" value="{{ $project->title }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" rows="3">{{ $project->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
                <input type="date" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="start_date" name="start_date" value="{{ $project->start_date }}" required>
            </div>

            <div class="mb-4">
                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
                <input type="date" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="end_date" name="end_date" value="{{ $project->end_date }}" required>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                <select class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status" name="status" required>
                    <option value="accepted" {{ $project->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="not_accepted" {{ $project->status == 'not_accepted' ? 'selected' : '' }}>Not Accepted</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="budget" class="block text-gray-700 text-sm font-bold mb-2">Budget</label>
                <input type="number" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="budget" name="budget" value="{{ $project->budget }}" required>
            </div>

            <div class="mb-4">
                <label for="progress" class="block text-gray-700 text-sm font-bold mb-2">Progress</label>
                <select class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="progress" name="progress" required>
                    <option value="pending" {{ $project->progress == 'pending' ? 'selected' : '' }} selected>Pending</option>
                    <option value="ongoing" {{ $project->progress == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                    <option value="completed" {{ $project->progress == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="partner_id" class="block text-gray-700 text-sm font-bold mb-2">Partner</label>
                <select class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="partner_id" name="partner_id">
                    <option value="">Select Partner</option>
                    @foreach($partners as $partner)
                        <option value="{{ $partner->id }}" {{ $project->partner_id == $partner->id ? 'selected' : '' }}>
                            {{ $partner->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="artist_ids" class="block text-gray-700 text-sm font-bold mb-2">Artists</label>
                <select class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="artist_ids" name="artist_ids[]" multiple>
                    @foreach($users as $artist)
                        <option value="{{ $artist->id }}" {{ in_array($artist->id, $project->users->pluck('id')->toArray()) ? 'selected' : '' }}>
                            {{ $artist->firstname }}
                        </option>
                    @endforeach
                </select>
            </div>



            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Project</button>
        </form>
    </div>
</div>

<script>
    function previewImage(event) {
        var image = document.getElementById('imagePreview');
        image.src = URL.createObjectURL(event.target.files[0]);
        image.style.display = 'block';
    }

    $(document).ready(function() {
        $('#artist_ids').select2();
    });
</script>
@endsection
