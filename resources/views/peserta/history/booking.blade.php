<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Booking Seminar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section>
            <div class="container mx-auto px-4">
                <!-- Card layout with image on the left and content on the right -->
                <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden flex">
                    <!-- Image on the left -->
                    <div class="w-1/3">
                        <img src="{{ Storage::url($seminar->image) }}" alt="{{ $seminar->nama_seminar }}"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Seminar info on the right -->
                    <div class="w-2/3 p-6">
                        <h3 class="text-2xl font-bold text-white">{{ $seminar->nama_seminar }}</h3>
                        <p class="text-sm text-white mt-2">By: {{ $seminar->narasumber }}</p>
                        <p class="text-sm text-white mt-2"><strong>Date:</strong>
                            {{ \Carbon\Carbon::parse($seminar->tanggal)->format('d M Y') }}</p>

                        <div class="mt-80 flex justify-end ">
                            <a href="#">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Confirm Booking
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
