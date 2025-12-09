<x-app>
    <x-slot name="sidebar">
        <ul class="space-y-4">
            <li><a href="#" class="text-white hover:text-gray-300">Dashboard</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Profile</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Setting</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Logout</a></li>
        </ul>
    </x-slot>
    <x-slot name="main">
        <div class="bg-blue-500 text-white py-16 px-8 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold">Welocme to Laravel 12</h1>
            <p class="text-xl mt-6">This is a simple example of Laravel 12.</p>
        </div>
    </x-slot>
</x-app>