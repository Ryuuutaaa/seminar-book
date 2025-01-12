<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">SeminarHub</a>
            <div class="flex space-x-4">
                <a href="{{ route('login') }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</a>
                <a href="{{ route('register') }}"
                    class="bg-gray-100 text-blue-500 border border-blue-500 px-4 py-2 rounded hover:bg-blue-100">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to the Ultimate Seminar Experience</h1>
            <p class="text-lg mb-6">Discover and join seminars that inspire, educate, and connect.</p>
            <a href="#seminars" class="bg-white text-blue-500 px-6 py-3 rounded hover:bg-gray-100">Explore Seminars</a>
        </div>
    </section>

    <!-- Seminar Cards Section -->
    <section id="seminars" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Upcoming Seminars</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($seminars as $seminar)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="{{ $seminar->image }}" alt="{{ $seminar->nama_seminar }}"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold mb-2">{{ $seminar->nama_seminar }}</h3>
                            <p class="text-gray-600 mb-4">{{ $seminar->deskripsi }}</p>
                            <p class="text-gray-800 font-semibold mb-2">Narasumber : {{ $seminar->narasumber }}</p>
                            <p class="text-gray-800 font-semibold mb-4">Jumlah Kuris: {{ $seminar->jumlah_kursi }}</p>
                            <p class="text-gray-800 font-semibold mb-4">Tanggal seminar: <span
                                    class="font-bold">{{ $seminar->tanggal_seminar }}</span>
                            </p>

                            {{-- <a href="{{ route('seminars.show', $seminar->id) }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($seminars->isEmpty())
                <p class="text-center text-gray-600 mt-10">No seminars available at the moment. Please check back later.
                </p>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 SeminarHub. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
