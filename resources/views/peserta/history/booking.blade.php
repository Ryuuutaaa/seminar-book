<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Booking Seminar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section>
            <div class="container mx-auto px-4">
                <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden flex">
                    <div class="w-1/3">
                        <img src="{{ Storage::url($seminar->image) }}" alt="{{ $seminar->nama_seminar }}"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-2/3 p-6">
                        <h3 class="text-3xl font-bold text-white">{{ $seminar->nama_seminar }}</h3>
                        <h4 class="text-xl text-white mt-2">By: {{ $seminar->narasumber }}</h4>
                        <h4 class="text-xl text-white mt-2">Jumlah kursi yang tersedia : {{ $seminar->jumlah_kursi }}
                        </h4>
                        <h4 class="text-xl text-white mt-2"><strong>Date:</strong>
                            {{ \Carbon\Carbon::parse($seminar->tanggal)->format('d M Y') }}</h4>

                        <form action="{{ route('peserta.history.confirmBooking', $seminar->id) }}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <label for="booking_kursi"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Jumlah kursi yang ingin di booking
                                </label>
                                <input type="number" name="booking_kursi" id="booking_kursi"
                                    class="block w-full mt-1 border-gray-300 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                    required min="1" max="{{ $seminar->jumlah_kursi }}">
                            </div>

                            <div class="mt-4 flex justify-end">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Confirm Booking
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
