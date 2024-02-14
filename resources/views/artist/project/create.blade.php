@extends('layouts.artistDash')

@section('content')
    <div class="flex items-center justify-center min-h-screen px-4 py-12">
        <div class="w-full max-w-md">
            <h2 class="text-2xl font-bold mb-8 text-center">Create a New Project</h2>
            <form action="{{ route('projects.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title"
                        class="form-input mt-1 block w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="form-textarea mt-1 block w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                        <input type="date" name="start_date" id="start_date"
                            class="form-input mt-1 block w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                        <input type="date" name="end_date" id="end_date"
                            class="form-input mt-1 block w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>
                <input type="hidden" name="status" value="not_accepted">
                <div>
                    <label for="budget" class="block text-sm font-medium text-gray-700">Budget</label>
                    <input type="number" name="budget" id="budget" step="0.01"
                        class="form-input mt-1 block w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="partner" class="block text-sm font-medium text-gray-700">Partner</label>
                    <select
                        class="form-select border mt-1 block w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        id="partner_id" name="partner_id">
                        <option value="">Select Partner</option>
                        @foreach ($partners as $partner)
                            <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="artists" class="block text-sm font-medium text-gray-700">Artists</label>
                    <select
                        class="form-multiselect border mt-1 block w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        id="artist_ids" name="artist_ids[]" multiple>
                        @foreach ($users as $artist)
                            <option value="{{ $artist->id }}">{{ $artist->firstname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
