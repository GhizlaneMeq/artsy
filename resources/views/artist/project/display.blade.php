<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Artsy</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-white dark:bg-gray-900">
    <header class="bg-white/90 dark:bg-gray-900/80 backdrop-blur shadow-2xl shadow-gray-600/5 border-b border-gray-100 dark:border-gray-800">
        <nav class="container mx-auto px-6 md:px-12 lg:px-6 flex items-center justify-between py-3">
            <div class="flex items-center justify-between">
                <a href="#" aria-label="logo">
                    <svg class="h-9 text-primary dark:text-primaryLight" viewBox="0 0 942 272" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                    </svg>
                </a>
                <label for="hbr" class="block lg:hidden cursor-pointer">
                </label>
            </div>
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#" class="transition hover:text-primary dark:hover:text-primaryLight">Home</a>
                <a href="#" class="transition hover:text-primary dark:hover:text-primaryLight font-bold">Projects</a>
                <a href="#" class="transition hover:text-primary dark:hover:text-primaryLight">Partners</a>
                <a href="#"
                    class="px-6 py-2 border border-gray-200 dark:bg-gray-800 dark:border-gray-700 rounded-full transition duration-300 hover:border-cyan-400 hover:shadow-lg hover:shadow-cyan-600/20 dark:hover:border-cyan-300/30">
                    <span class="font-semibold text-primary dark:text-primaryLight">Sign Up</span>
                </a>
            </div>
        </nav>
    </header>

    <div class="container mx-auto mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 shadow-md hover:shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/600" alt="Project 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-300 mb-2">Project Title</h3>
                    <p class="text-gray-600 dark:text-gray-400">Description of the project goes here.</p>
                    <a href="#" class="block text-center mt-4 bg-primary text-white py-2 px-4 rounded-lg hover:bg-primaryDark">Learn More</a>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md hover:shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/600" alt="Project 2" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-300 mb-2">Project Title</h3>
                    <p class="text-gray-600 dark:text-gray-400">Description of the project goes here.</p>
                    <a href="#" class="block text-center mt-4 bg-primary text-white py-2 px-4 rounded-lg hover:bg-primaryDark">Learn More</a>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md hover:shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/600" alt="Project 3" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-300 mb-2">Project Title</h3>
                    <p class="text-gray-600 dark:text-gray-400">Description of the project goes here.</p>
                    <a href="#" class="block text-center mt-4 bg-primary text-white py-2 px-4 rounded-lg hover:bg-primaryDark">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
