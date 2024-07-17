<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Settings</title>
    <!-- Referensi Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: 700;
        }
        .list-group-item {
            background-color: #fff;
            color: #333;
            border: none;
        }
        .list-group-item:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                Admin - Kawan-Kawan Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i> Manage Users
                    </a>
                    <a href="{{ route('admin.posts') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-edit"></i> Manage Posts
                    </a>
                    <a href="{{ route('admin.settings') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <!-- Bagian Footer -->
    <footer class="bg-dark text-light py-3 mt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                <img src="{{ asset('images/logo5.png') }}" alt="Kawan-Kawan Store" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h5>Kawan-Kawan Store</h5>
                    <p>Kami adalah store inovatif yang berfokus pada penjualan berbagai produk pakaian untuk memenuhi kebutuhan pelanggan kami.</p>
                </div>
                <div class="col-lg-3">
                    <h5>Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> Jalan Merak Jingga, Kota Medan,Sumatera Utara</li> 
                        <li><i class="bi bi-telephone-fill"></i> +123 456 789</li> 
                        <li><i class="bi bi-envelope-fill"></i> info@kawankawanstore.com</li> 
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <p class="text-center mb-0">Hak Cipta &copy; 2024 Kawan-Kawan Store. Semua Hak Dilindungi.</p>
        </div>
    </footer>
    <!-- Referensi Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
