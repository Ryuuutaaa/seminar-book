<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tabel Peserta') }}
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


        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Peserta
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email Peserta
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>

                </tr>
            </thead>
            <tbody>
                @if ($users->count() != 0)
                    @foreach ($users as $user)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->name }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->email }}
                            </th>
                            <td class="px-6 py-4 text-right flex justify-start">
                                <form action="{{ route('admin.peserta.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="nonactive">
                                    <button type="submit"
                                        onclick="if(confirm('Apakah yakin ingin menonaktifkan akun ini?')){}"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Nonaktifkan</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center">
                            Tidak ada data
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>

</x-app-layout>
