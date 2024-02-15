<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hero architecture section">
    <title>Artsy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
        referrerpolicy="no-referrer">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .draggable {
            cursor: pointer;
            user-select: none;
        }

        .dragging {
            opacity: 0.5;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <div
        class="flex flex-col w-screen h-screen overflow-auto text-gray-700 bg-gradient-to-tr from-blue-200 via-indigo-200 to-pink-200">
        <div class="flex items-center flex-shrink-0 h-16 px-10 bg-white bg-opacity-75">
            <svg class="w-8 h-8 text-indigo-600 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
            <input
                class="flex items-center h-10 px-4 ml-10 text-sm bg-gray-200 rounded-full focus:outline-none focus:ring"
                type="search" placeholder="Search for anything…">
            <div class="ml-10">
                <a class="mx-2 text-sm font-semibold text-indigo-700" href="{{ route('projects.userProjects') }}">My
                    Projects</a>
                <a href="{{ route('projects.createdByUser') }}"
                    class="mx-2 text-sm font-semibold text-gray-600 hover:text-indigo-700">My Created Projects</a>
                <a class="mx-2 text-sm font-semibold text-gray-600 hover:text-indigo-700"
                    href="{{ route('projects.index') }}">Projects</a>
                <a class="mx-2 text-sm font-semibold text-gray-600 hover:text-indigo-700"
                    href="{{ route('partners.index') }}">Partners</a>
                <a id="createProjectBtn"
                    class="mx-2 text-sm font-semibold text-gray-600 hover:text-indigo-700 cursor-pointer"
                    href="{{ route('projects.create') }}">Create Project</a>
            </div>
            <button
                class="flex items-center justify-center w-8 h-8 ml-auto overflow-hidden rounded-full cursor-pointer">
                {{-- <img src="https://assets.codepen.io/5041378/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1600304177&width=512"
                    alt=""> --}}
            </button>
        </div>
        @yield('content')
    </div>
    <div id="projectModal" class="hidden fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-50">
        <div class="relative w-full max-w-lg p-8 mx-auto my-20 bg-white rounded-lg">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold">Project Details</h2>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M13.414 10l4.293-4.293a1 1 0 00-1.414-1.414L12 8.586l-4.293-4.293a1 1 0 00-1.414 1.414L10.586 10l-4.293 4.293a1 1 0 001.414 1.414L12 11.414l4.293 4.293a1 1 0 001.414-1.414L13.414 10z" />
                    </svg>
                </button>
            </div>
            <div id="projectDetails" class="text-sm">

            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const projects = document.querySelectorAll(".draggable");
            const columns = document.querySelectorAll(".flex-col");

            projects.forEach(project => {
                project.addEventListener("click", () => {
                    const projectId = project.dataset.id;
                    const projectTitle = project.querySelector("h4").textContent;
                    const projectDescription = project.querySelector("p").textContent;

                    const partnerName = project.dataset.partner;
                    const duration = project.dataset.duration;
                    const startDate = project.dataset.startDate;
                    const endDate = project.dataset.endDate;
                    const assignedUsers = project.dataset.assignedUsers;

                    const projectDetailsHTML = `
                        <h3 class="text-lg font-semibold">${projectTitle}</h3>
                        <p class="mt-2">${projectDescription}</p>
                        <p>Partner: ${partnerName}</p>
                        <p>Duration: ${duration}</p>
                        <p>Start Date: ${startDate}</p>
                        <p>End Date: ${endDate}</p>
                        <p>Assigned Users: ${assignedUsers}</p>
                        <!-- Add more project details here -->
                    `;

                    document.getElementById("projectDetails").innerHTML = projectDetailsHTML;
                    document.getElementById("projectModal").classList.remove("hidden");
                });
            });

            document.getElementById("closeModal").addEventListener("click", () => {
                document.getElementById("projectModal").classList.add("hidden");
            });

            projects.forEach(draggable => {
                draggable.addEventListener("dragstart", () => {
                    draggable.classList.add("dragging");
                });

                draggable.addEventListener("dragend", () => {
                    draggable.classList.remove("dragging");
                });
            });

            columns.forEach(column => {
                column.addEventListener("dragover", event => {
                    event.preventDefault();
                    const afterElement = getDragAfterElement(column, event.clientY);
                    const draggable = document.querySelector(".dragging");
                    if (afterElement == null) {
                        column.appendChild(draggable);
                    } else {
                        column.insertBefore(draggable, afterElement);
                    }
                });

                column.addEventListener("drop", event => {
                    const draggable = document.querySelector(".dragging");
                    const newStatus = column.id;
                    const projectId = draggable.dataset.id;

                    draggable.setAttribute("data-status", newStatus);
                    updateProjectStatus(projectId, newStatus);
                });
            });

            function getDragAfterElement(column, y) {
                const draggableElements = [...column.querySelectorAll(".draggable:not(.dragging)")];
                return draggableElements.reduce((closest, child) => {
                    const box = child.getBoundingClientRect();
                    const offset = y - box.top - box.height / 2;
                    if (offset < 0 && offset > closest.offset) {
                        return {
                            offset: offset,
                            element: child
                        };
                    } else {
                        return closest;
                    }
                }, {
                    offset: Number.NEGATIVE_INFINITY
                }).element;
            }

            function updateProjectStatus(projectId, newStatus) {
                const url = "projects/update-status";
                const data = {
                    projectId: projectId,
                    newStatus: newStatus
                };

                fetch(url, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Network response was not ok");
                        }
                        console.log("Project status updated successfully.");
                        const project = document.querySelector(`[data-id="${projectId}"]`);
                        project.dataset.status = newStatus;
                        const statusBadge = project.querySelector(".status-badge");
                        statusBadge.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(
                        1); 
                        statusBadge.classList.remove("bg-yellow-200", "bg-green-200", "bg-pink-200");
                        if (newStatus === 'pending') {
                            statusBadge.classList.add("bg-yellow-200");
                        } else if (newStatus === 'ongoing') {
                            statusBadge.classList.add("bg-green-200");
                        } else if (newStatus === 'completed') {
                            statusBadge.classList.add("bg-pink-200");
                        }
                    })
                    .catch(error => {
                        console.error("There was a problem updating the project status:", error);
                    });
            }


        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>
