@extends('layouts.app')
@section('title', 'Contact - Kawan-Kawan Store')
@section('content')
<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="map-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9561927572154!2d98.6741061741615!3d3.597513696376614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c27e4e156f%3A0xe38d39cc24a23675!2sJl.%20Putri%20Merak%20Jingga%2C%20Kesawan%2C%20Kec.%20Medan%20Bar.%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1719579773668!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <h2>Hubungi Kami</h2>
                    <p>Jalan Merak Jingga No. 50,<br>Medan, Indonesia, Kode Pos: 12345</p> 
                    <p><i class="bi bi-telephone-fill"></i> +123 456 789</p>
                    <p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@perusahaanxyz.com">info@kawankawanstore.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
