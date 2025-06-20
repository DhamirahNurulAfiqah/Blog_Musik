<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <a href="{{ route('penulis.index') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Penulis</h3>
                            <p class="text-sm text-gray-700 dark:text-gray-300">Kelola data penulis</p>
                        </a>
                        <a href="{{ route('kategori.index') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Kategori</h3>
                            <p class="text-sm text-gray-700 dark:text-gray-300">Kelola kategori artikel</p>
                        </a>
                        <a href="{{ route('artikel.index') }}" class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Artikel</h3>
                            <p class="text-sm text-gray-700 dark:text-gray-300">Lihat & edit artikel</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>