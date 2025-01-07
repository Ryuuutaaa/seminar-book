<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body,
        html {
            height: 100%;
        }

        #sidebar-wrapper {
            height: 100vh;
            /* Full height */
        }

        #content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
    </style>
    <!-- CSS (inline atau dalam file terpisah) -->
    <style>
        #sidebar-wrapper .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            /* Efek hover untuk highlight */
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="text-white p-4"
            style="min-width: 250px; background: #9b4d96; box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);">
            <h3 class="text-center py-3 border-bottom" style="font-weight: bold;">Admin</h3>
            <ul class="nav flex-column mt-4">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold my-2 d-flex align-items-center"
                        href="{{ route('admin.root') }}" style="transition: background-color 0.3s;">
                        <i class="bi bi-house-door-fill me-2" style="font-size: 1.25rem;"></i>
                        Dashboard
                    </a>
                </li>
                <!-- Manajement Event -->
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold my-2 d-flex align-items-center"
                        href="{{ route('admin.manajement-event.root') }}" style="transition: background-color 0.3s;">
                        <i class="bi bi-calendar-event-fill me-2" style="font-size: 1.25rem;"></i>
                        Manajement Event
                    </a>
                </li>

                <!-- Validasi tiket peserta -->
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold my-2 d-flex align-items-center"
                        href="{{ route('admin.manajement-event.root') }}" style="transition: background-color 0.3s;">
                        <i class="bi bi-ticket-fill me-2" style="font-size: 1.25rem;"></i>
                        Validasi tiket
                    </a>
                </li>

                <!-- Manajement Category Event -->
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold my-2 d-flex align-items-center"
                        href="{{ route('admin.manajement-category.root') }}" style="transition: background-color 0.3s;">
                        <i class="bi bi-archive-fill me-2" style="font-size: 1.25rem;"></i>
                        Manajement Category Event
                    </a>
                </li>
                <!-- Manajement Peserta Event -->
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold my-2 d-flex align-items-center"
                        href="{{ route('admin.manajement-peserta.root') }}" style="transition: background-color 0.3s;">
                        <i class="bi bi-people-fill me-2" style="font-size: 1.25rem;"></i>
                        Manajement Peserta Event
                    </a>
                </li>
            </ul>
        </div>
        <div id="content-wrapper" class="d-flex flex-column w-100">
            <!-- Top Bar -->
            <nav class="navbar navbar-expand navbar-light bg-light shadow-sm">
                <div class="container">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle" alt="Admin Profile" style="font-size: 30px;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Dashboard Content -->
            <main class="container my-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap Bundle JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
