<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Kategori') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('success'))
                    <div class="mb-4 text-green-700 bg-green-100 border border-green-400 p-4 rounded-lg">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="mb-4 text-red-700 bg-red-100 border border-red-400 p-4 rounded-lg">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('admin.kategori.update', $kategori->id) }}">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="kategori" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Nama Kategori
                            </label>
                            <input type="text" name="kategori" id="kategori"
                                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                value="{{ $kategori->kategori }}" required>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                Simpan
                            </button>
                            <a href="{{ route('admin.kategori.index') }}"
                                class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
