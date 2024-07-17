@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
<div class="col-md-9">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Welcome, Admin!</h3>
        </div>
        <div class="card-body">
            <p class="card-text">This is your dashboard where you can manage the website content and settings.</p>
            <!-- Informasi tambahan -->
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Info:</h4>
                <p>Make sure to regularly update your website content to keep it fresh and engaging for your visitors.</p>
                <hr>
                <p class="mb-0">If you encounter any issues or need assistance, don't hesitate to contact our support team.</p>
            </div>
        </div>
    </div>
</div>
@endsection
