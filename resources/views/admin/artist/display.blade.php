@extends('layouts.dash')

@section('content')
    <div class="col-span-5 row-span-3 bg-gray-200 p-6">
        <div class="mb-4">
            <h2 class="text-2xl font-semibold mb-4">User List</h2>
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-md" onclick="openCreateModal()">Add User</button>
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
                            <button onclick="openEditModal({{ $user->id }})" class="text-green-500 hover:text-green-700 mr-2">Edit</button>
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

    <div class="fixed z-10 inset-0 bg-black bg-opacity-50 hidden" id="modalOverlay"></div>

    <div class="fixed z-20 top-0 left-0 right-0 bottom-0 flex items-center justify-center hidden" id="createUserModal">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <div class="flex justify-end">
                    <button class="text-gray-600 hover:text-gray-800" onclick="closeModal('createUserModal')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <h2 class="text-2xl font-semibold mb-4">Create User</h2>
                <form action="{{ route('users.store') }}" method="POST">
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
    </div>

    <div class="fixed z-20 top-0 left-0 right-0 bottom-0 flex items-center justify-center hidden" id="editUserModal">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <div class="flex justify-end">
                    <button class="text-gray-600 hover:text-gray-800" onclick="closeModal('editUserModal')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <h2 class="text-2xl font-semibold mb-4">Edit User</h2>
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="firstname" class="block text-gray-700 font-medium mb-2">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="w-full border-gray-300 rounded-md px-4 py-2 focus:border-green-200 focus:outline-none" value="{{ $user->firstname }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="lastname" class="block text-gray-700 font-medium mb-2">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="w-full border-gray-300 rounded-md px-4 py-2 focus:border-green-200 focus:outline-none" value="{{ $user->lastname }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-md px-4 py-2 focus:border-green-200 focus:outline-none" value="{{ $user->email }}" required>
                    </div>
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">Update User</button>
                </form>
            </div>
        </div>
    </div>


    <style>
        #modalOverlay {
            transition: opacity 0.5s ease;
        }

        .modal.show + #modalOverlay {
            opacity: 1;
            pointer-events: auto;
        }

        .modal {
            align-items: center;
            justify-content: center;
        }

        .modal .bg-white {
            width: 400px;
            max-width: 90%;
            margin: auto;
        }
    </style>

    <script>
        var overlay = document.getElementById("modalOverlay");

        function openCreateModal() {
            var createUserModal = document.getElementById("createUserModal");
            openModal(createUserModal);
        }

        function openEditModal(userId) {
            var editUserModal = document.getElementById("editUserModal");
            openModal(editUserModal);
        }

        function openModal(modal) {
            modal.classList.remove("hidden");
            modal.classList.add("show");
            overlay.classList.remove("hidden");
        }

        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.classList.remove("show");
            modal.classList.add("hidden");
            overlay.classList.add("hidden");
        }
    </script>
@endsection
