<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Seminar') }}
        </h2>
    </x-slot>

    <div class="p-12">
        <div class="max-w-4xl mx-auto">
            <!-- Card Container -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                <!-- Gambar Seminar -->
                <div class="relative">
                    <img src="{{ Storage::url($seminar->image) }}" alt="{{ $seminar->nama_seminar }}"
                        class="w-full h-64 object-cover">
                </div>

                <!-- Konten Seminar -->
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">
                        {{ $seminar->nama_seminar }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        <span class="font-semibold">Kategori:</span>
                        {{ $seminar->category->kategori ?? 'Tidak ada kategori' }}
                    </p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        <span class="font-semibold">Narasumber:</span>
                        {{ $seminar->narasumber }}
                    </p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        <span class="font-semibold">Jumlah Kursi:</span>
                        {{ $seminar->jumlah_kursi }}
                    </p>
                    <p class="mt-4 text-gray-700 dark:text-gray-300 leading-relaxed">
                        <span class="font-semibold">Deskripsi:</span><br>
                        {{ $seminar->deskripsi ?? 'Tidak ada deskripsi.' }}
                    </p>
                </div>

                <!-- Aksi -->
                <div
                    class="p-6 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 flex justify-between">
                    <a href="{{ route('admin.seminar.index') }}"
                        class="px-4 py-2 text-sm font-medium text-gray-600 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600">
                        Kembali
                    </a>
                    <div>
                        <a href="{{ route('admin.seminar.edit', $seminar->id) }}"
                            class="mr-3 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:ring focus:ring-blue-300">
                            Edit
                        </a>
                        <form action="{{ route('admin.seminar.destroy', $seminar->id) }}" method="POST"
                            class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:ring focus:ring-red-300">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
