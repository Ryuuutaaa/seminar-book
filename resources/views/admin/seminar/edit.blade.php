<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Seminar') }}
        </h2>
    </x-slot>

    <div class="p-6 bg-white dark:bg-gray-800 shadow rounded-lg">
        <form action="{{ route('admin.seminar.update', $seminar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Seminar -->
            <div class="mb-4">
                <label for="nama_seminar" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Nama Seminar
                </label>
                <input type="text" name="nama_seminar" id="nama_seminar" value="{{ $seminar->nama_seminar }}"
                    class="block w-full mt-1 border-gray-300 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Kategori -->
            <div class="mb-4">
                <label for="kategori_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Kategori
                </label>
                <select name="kategori_id" id="kategori_id"
                    class="block w-full mt-1 border-gray-300 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $seminar->kategori_id == $category->id ? 'selected' : '' }}>
                            {{ $category->kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Narasumber -->
            <div class="mb-4">
                <label for="narasumber" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Narasumber
                </label>
                <input type="text" name="narasumber" id="narasumber" value="{{ $seminar->narasumber }}"
                    class="block w-full mt-1 border-gray-300 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Deskripsi
                </label>
                <textarea name="deskripsi" id="deskripsi" rows="4"
                    class="block w-full mt-1 border-gray-300 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ $seminar->deskripsi }}</textarea>
            </div>

            <!-- Jumlah Kursi -->
            <div class="mb-4">
                <label for="jumlah_kursi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Jumlah Kursi
                </label>
                <input type="number" name="jumlah_kursi" id="jumlah_kursi" value="{{ $seminar->jumlah_kursi }}"
                    class="block w-full mt-1 border-gray-300 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Tanggal seminar -->
            <div class="mb-4">
                <label for="tanggal_seminar" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Tanggal seminar
                </label>
                <input type="date" name="tanggal_seminar" id="tanggal_seminar"
                    value="{{ $seminar->tanggal_seminar }}"
                    class="block w-full mt-1 border-gray-300 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>


            <!-- Gambar -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Gambar
                </label>
                <input type="file" name="image" id="image"
                    class="block w-full mt-1 border-gray-300 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @if ($seminar->image)
                    <img src="{{ asset('storage/' . $seminar->image) }}" alt="{{ $seminar->nama_seminar }}"
                        class="mt-2 w-32 rounded-md shadow">
                @endif
            </div>

            <!-- Tombol Submit -->
            <div class="mt-6">
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded shadow hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
