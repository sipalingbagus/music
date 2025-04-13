<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URMusic</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #121212; /* Dark theme */
            color: white;
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .sidebar {
            background-color: #1db954; /* Spotify Green */
            min-height: 100vh;
            padding: 20px 10px;
            position: fixed;
            width: 240px;
        }
        .sidebar a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: rgb(57, 138, 85);
        }
        .main-content {
            margin-left: 240px;
            padding: 20px;
            flex-grow: 1; /* Ensures content takes remaining height */
        }
        .card {
            background-color: #181818;
            color: white;
            border: none;
            border-radius: 10px;
        }
        .btn-green {
            background-color: #1db954;
            color: white;
        }
        .btn-green:hover {
            background-color: #1ed760;
        }
        .footer {
            background-color: #181818;
            color: white;
            padding: 15px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 10;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
        }
        .social-icons a {
            font-size: 1.5rem;
            margin-right: 15px;
            color: white;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #1db954; /* Spotify Green */
        }
        .profile-card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('preferensi') }}">Preferensi Musik</a>
            <a href="{{ route('favorit') }}">Lagu Favorit</a>
            <a href="{{ route('riwayat') }}">Riwayat Rekomendasi</a>
            <a href="{{ route('explore') }}">Jelajahi Musik</a>
            <a href="{{ route('whatsnew') }}">What's New</a>
            <a href="{{ route('profile') }}">Profile</a>
            @auth
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-green w-100 mt-3">Logout</button>
                </form>
            @endauth
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">URMusic</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('whatsnew') }}">What's New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <p class="mb-0">© 2025 URMusic. All rights reserved.</p>
            </div>
            <div class="social-icons">
                <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
