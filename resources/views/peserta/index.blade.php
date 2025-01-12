<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section>
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold mb-6 text-white">Upcoming Seminars</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($seminars as $seminar)
                        <div
                            class="bg-gray-800 shadow-md rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                            <img src="{{ Storage::url($seminar->image) }}" alt="{{ $seminar->nama_seminar }}"
                                class="w-full h-75 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-bold mb-2 text-white">{{ $seminar->nama_seminar }}</h3>
                                <p class="text-sm text-white mb-2">By: {{ $seminar->narasumber }}</p>
                                <p class="text-sm text-white mb-2"><strong>Date:</strong>
                                    {{ \Carbon\Carbon::parse($seminar->tanggal)->format('d M Y') }}
                                </p>
                                {{-- <a href="{{ route('seminar.detail', $seminar->id) }}"
                                    class="text-blue-500 hover:text-blue-700 text-sm font-semibold">
                                    View Details
                                </a> --}}
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-300">No seminars available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
