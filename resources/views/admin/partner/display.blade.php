@extends('layouts.dash')

@section('content')
    <div class="col-span-5 row-span-3 bg-gray-200 p-6">
        <div class="mb-4">
            <h2 class="text-2xl font-semibold mb-4">Partners List</h2>
            <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Add Artist</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">First Name</th>
                        <th class="px-4 py-2">Last Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->id }}</td>
                        <td class="border px-4 py-2">{{ $user->firstname }}</td>
                        <td class="border px-4 py-2">{{ $user->lastname }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('users.show', $user->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Details</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="text-green-500 hover:text-green-700 mr-2">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
