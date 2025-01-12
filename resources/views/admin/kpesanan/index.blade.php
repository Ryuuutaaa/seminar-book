<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Konfirmasi Pesanan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section>
            <div class="container mx-auto px-4 space-y-8">
                @if (session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-500 text-white p-4 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                @forelse ($transactions as $transaction)
                    <div
                        class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden flex flex-col lg:flex-row items-center">
                        <!-- Image -->
                        <div class="w-full lg:w-64 h-56 lg:h-auto">
                            <img src="{{ Storage::url($transaction->seminar->image) }}"
                                alt="{{ $transaction->seminar->nama_seminar }}" class="w-full h-full object-cover">
                        </div>

                        <!-- Info -->
                        <div class="w-full lg:w-2/3 p-6">
                            <div class="flex flex-col lg:flex-row lg:justify-between">
                                <!-- Details -->
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                                        {{ $transaction->seminar->nama_seminar }}
                                    </h3>
                                    <p class="text-lg text-gray-700 dark:text-gray-300 mt-1">
                                        By: <span class="font-medium">{{ $transaction->seminar->narasumber }}</span>
                                    </p>
                                    <p class="text-md text-gray-600= dark:text-gray-400 mt-1 font-bold">
                                        User: <span class="font-medium text-white">{{ $transaction->user->name }}</span>
                                    </p>
                                    <p class="text-md text-gray-600 dark:text-gray-400 mt-1">
                                        Seats booked: <span class="font-medium">{{ $transaction->kursi }}</span>
                                    </p>
                                    <p class="text-md text-gray-600 dark:text-gray-400 mt-1">
                                        Status: <span class="font-medium">{{ ucfirst($transaction->status) }}</span>
                                    </p>
                                </div>

                                <!-- Actions -->
                                <div class="mt-4 lg:mt-0 lg:self-center">
                                    <form action="{{ route('admin.konfrimasiPesanan.update', $transaction->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')

                                        <button type="submit" name="status" value="berhasil"
                                            onclick="confirm('apakah kamu yakin ingin menerima booking ini?')"
                                            class="px-4 py-2 text-sm font-semibold rounded-full bg-green-500 text-white hover:bg-green-600">
                                            Terima
                                        </button>
                                        <button type="submit" name="status" value="gagal"
                                            onclick="confirm('apakah kamu yakin ingin menolak booking ini?')"
                                            class="px-4 py-2 text-sm font-semibold rounded-full bg-red-500 text-white hover:bg-red-600">
                                            Tolak
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-gray-700 dark:text-gray-300">
                        <p class="text-lg">No transactions found.</p>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
</x-app-layout>
