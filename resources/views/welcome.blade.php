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
            <p class="text-lg mb-6">Join us for an unforgettable event filled with insights, networking, and growth
                opportunities.</p>
            <a href="#" class="bg-white text-blue-500 px-6 py-3 rounded font-bold hover:bg-gray-100">Explore
                Seminars</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Why Join Our Seminars?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg p-6 rounded">
                    <h3 class="text-xl font-bold mb-4">Expert Speakers</h3>
                    <p>Learn from the best in the industry with years of expertise and valuable insights.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded">
                    <h3 class="text-xl font-bold mb-4">Networking Opportunities</h3>
                    <p>Connect with like-minded individuals and grow your professional network.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded">
                    <h3 class="text-xl font-bold mb-4">Interactive Sessions</h3>
                    <p>Engage with hands-on activities and Q&A sessions to deepen your understanding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seminar Highlights -->
    <section class="py-20">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Upcoming Seminars</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Seminar Card 1 -->
                <div
                    class="bg-white shadow-md rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-xl">
                    <h3 class="text-xl font-bold mb-2">The Future of Technology</h3>
                    <p class="text-gray-700 mb-4">Join industry leaders to discuss groundbreaking innovations in
                        technology.</p>
                    <p class="text-gray-500 text-sm mb-4">Date: Jan 15, 2025</p>
                    <a href="#" class="text-blue-500 font-semibold hover:underline">Learn More</a>
                </div>
                <!-- Seminar Card 2 -->
                <div
                    class="bg-white shadow-md rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-xl">
                    <h3 class="text-xl font-bold mb-2">Sustainability and You</h3>
                    <p class="text-gray-700 mb-4">Explore how sustainability can shape a better future for everyone.</p>
                    <p class="text-gray-500 text-sm mb-4">Date: Feb 10, 2025</p>
                    <a href="#" class="text-blue-500 font-semibold hover:underline">Learn More</a>
                </div>
                <!-- Seminar Card 3 -->
                <div
                    class="bg-white shadow-md rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-xl">
                    <h3 class="text-xl font-bold mb-2">Leadership in the 21st Century</h3>
                    <p class="text-gray-700 mb-4">Enhance your leadership skills with insights from global leaders.</p>
                    <p class="text-gray-500 text-sm mb-4">Date: Mar 5, 2025</p>
                    <a href="#" class="text-blue-500 font-semibold hover:underline">Learn More</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 SeminarHub. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
                <a href="#" class="text-gray-400 hover:text-white">Contact Us</a>
            </div>
        </div>
    </footer>

</body>

</html>
