<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tabel Seminar') }}
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-10">
        @if (session('success'))
            <div class="mb-4 text-green-700 bg-green-100 border border-green-400 p-4 rounded-lg">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="mb-4 text-red-700 bg-red-100 border border-red-400 p-4 rounded-lg">
                {{ session('error') }}
            </div>
        @endif


        <a href="{{ route('admin.seminar.create') }}">
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                Seminar</button>
        </a>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama seminar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Narasumber
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Kursi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal seminar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seminars as $seminar)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            <img src="{{ Storage::url($seminar->image) }}" alt="{{ $seminar->nama_seminar }}"
                                class="w-16 h-16 object-cover">
                        </td>
                        <td class="px-6 py-4">
                            {{ $seminar->nama_seminar }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $seminar->category->kategori ?? 'Tidak ada kategori' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $seminar->narasumber }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $seminar->jumlah_kursi }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $seminar->tanggal_seminar }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.seminar.show', $seminar->id) }}"
                                class="text-green-600 hover:underline dark:text-green-500">Show</a> |

                            <a href="{{ route('admin.seminar.edit', $seminar->id) }}"
                                class="text-blue-600 hover:underline dark:text-blue-500">Edit</a> |

                            <form action="{{ route('admin.seminar.destroy', $seminar->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 hover:underline dark:text-red-500">Hapus</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
