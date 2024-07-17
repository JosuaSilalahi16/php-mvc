<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WEB PROFILE - Kawan-Kawan Store')</title>
    <!-- Referensi Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <img src="{{ asset('images/logo5.png') }}" alt="" width="50" height="50"> 
            <a class="navbar-brand" href="#">Kawan-Kawan Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse animate__animated animate__fadeInRight" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mb-5 mt-5">
        @yield('content')
    </div>

    <!-- Bagian Footer --> 
<footer class="bg-dark text-light py-4 mt-auto">
    <div class="container"> 
        <div class="row align-items-center"> 
            <div class="col-lg-3"> 
                <img src="{{ asset('images/logo5.png') }}" alt="Kawan-Kawan Store" class="img-fluid">
            </div> 
            <div class="col-lg-6"> 
                <h5 class="h6">Kawan-Kawan Store</h5> 
                <p class="mb-1">Kami adalah store inovatif yang berfokus pada penjualan berbagai produk pakaian untuk memenuhi kebutuhan pelanggan kami.</p>
            </div> 
            <div class="col-lg-3">
                <h5 class="h6">Hubungi Kami</h5>
                <ul class="list-unstyled"> 
                    <li><i class="bi bi-geo-alt-fill"></i> Jalan Merak Jingga, Kota Medan,Sumatera Utara</li> 
                    <li><i class="bi bi-telephone-fill"></i> +123 456 789</li> 
                    <li><i class="bi bi-envelope-fill"></i> info@kawankawanstore.com</li> 
                </ul> 
            </div> 
        </div> 
        <hr class="my-2"> 
        <p class="text-center mb-0">Hak Cipta &copy; 2024 Kawan-Kawan Store. Semua Hak Dilindungi.</p> 
    </div> 
</footer> 


    <!-- Referensi Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
