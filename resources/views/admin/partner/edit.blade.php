@extends('layouts.dash')

@section('content')
    <div class="col-span-5 row-span-3 bg-gray-200 p-6">
        <h2 class="text-2xl font-semibold mb-4">Edit Partner</h2>
        <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2"> Name</label>
                <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md px-4 py-2 focus:border-green-200 focus:outline-none" value="{{ $partner->name }}" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-md px-4 py-2 focus:border-green-200 focus:outline-none" value="{{ $partner->email }}" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">Update partner</button>
        </form>
    </div>
@endsection
