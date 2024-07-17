@extends('layouts.app')

@section('title', $settings->SiteTitle ?? 'Default Title')

@section('content')
    <!-- Carousel -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/pic1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/pic2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/pic3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Konten aplikasi web akan ditambahkan di sini -->
    <div class="hero-section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                <h1>Selamat Datang di Kawan-Kawan Store</h1> 
 	                <p>Ingin merubah Gaya penampilan Anda? Kami Punya Solusinya.</p> 
                 <a href="#" class="btn btn-primary btn-lg">Cari Tahu Lebih Lanjut</a> 
                </div>
            </div>
        </div>
    </div>
@endsection
