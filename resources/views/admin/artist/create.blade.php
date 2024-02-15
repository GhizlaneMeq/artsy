@extends('layouts.dash')

@section('content')
    <div class="col-span-5 row-span-3 bg-gray-200 p-6">
        <h2 class="text-2xl font-semibold mb-4">Create User</h2>
        <form action="{{ route('admin.artists.store') }}" method="POST">
            @csrf
            <input type="hidden" name="role_id" value="2">
            <div class="mb-4">
                <label for="firstname" class="block text-gray-700 font-medium mb-2">First Name</label>
                <input type="text" name="firstname" id="firstname" class="w-full border-gray-300 rounded-md px-4 py-2 focus:border-green-200 focus:outline-none" required>
            </div>
            <div class="mb-4">
                <label for="lastname" class="block text-gray-700 font-medium mb-2">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="w-full border-gray-300 rounded-md px-4 py-2 focus:border-green-200 focus:outline-none" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-md px-4 py-2 focus:border-green-200 focus:outline-none" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">Create User</button>
        </form>
    </div>
    </div>
@endsection
