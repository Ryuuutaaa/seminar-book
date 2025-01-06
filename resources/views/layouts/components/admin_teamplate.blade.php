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
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="bg-dark text-white p-3" style="min-width: 250px;">
            <h3 class="text-center py-3 border-bottom">Admin Panel</h3>
            <ul class="nav flex-column mt-4">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Manajement event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Manajemen Peserta Event</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div id="content-wrapper" class="d-flex flex-column w-100">
            <!-- Top Bar -->
            <nav class="navbar navbar-expand navbar-light bg-light shadow-sm">
                <div class="container">
                    <span class="navbar-brand">Admin Dashboard</span>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle" alt="Admin Profile" class="rounded-circle"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Header Cards -->
            <header class="container mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Event</h5>
                                <p class="card-text fs-4">10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Peserta</h5>
                                <p class="card-text fs-4">90</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

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
