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
            <h1 class="text-4xl font-bold mb-4">Selamat datang</h1>
            <p class="text-lg">Membuat generasi emas dengan seminar nasional dan internasional dengan narasumber yang
                berpengalaman dalam bidangnya.</p>
        </div>
    </section>

    <!-- Seminar Cards -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Upcoming Seminars</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($seminars as $seminar)
                    <div
                        class="bg-white shadow-md rounded-lg overflow-hidden transition-all hover:scale-110 hover:cursor-pointer ">
                        <img src="{{ Storage::url($seminar->image) }}" alt="{{ $seminar->nama_seminar }}"
                            class="w-full h-75">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">{{ $seminar->nama_seminar }}</h3>
                            <p class="text-sm text-gray-600 mb-2">By: {{ $seminar->narasumber }}</p>
                            <p class="text-sm text-gray-800 mb-4">{{ $seminar->deskripsi }}</p>
                            <p class="text-sm text-gray-600 mb-2"><strong>Date:</strong>
                                {{ \Carbon\Carbon::parse($seminar->tanggal_seminar)->format('d M Y') }}</p>
                            <p class="text-sm text-gray-600 mb-4"><strong>Seats:</strong> {{ $seminar->jumlah_kursi }}
                            </p>
                            <a href="{{ route('login') }}"
                                class="block bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-600">Join
                                Seminar</a>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-600">No seminars available at the moment. Please check back later!</p>
                @endforelse
            </div>
        </div>
    </section>
</body>

</html>
