<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-6">
                    Daftar Seminar
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($seminars as $seminar)
                        <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg overflow-hidden">
                            <img src="{{ Storage::url($seminar->image) }}" alt="{{ $seminar->nama_seminar }}"
                                class="w-full h-48 object-cover">

                            <div class="p-4">
                                <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-100">
                                    {{ $seminar->nama_seminar }}
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Kategori: {{ $seminar->category->kategori ?? 'Tidak ada kategori' }}
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Narasumber: {{ $seminar->narasumber }}
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Jumlah Kursi: {{ $seminar->jumlah_kursi }}
                                </p>

                                <div class="mt-4">
                                    <a href="{{ route('admin.seminar.show', $seminar->id) }}"
                                        class="text-blue-600 hover:underline dark:text-blue-400">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-700 dark:text-gray-300 col-span-3">
                            Tidak ada seminar untuk ditampilkan.
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
