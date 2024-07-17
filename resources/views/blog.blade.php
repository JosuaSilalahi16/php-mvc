@extends('layouts.app')
@section('title', 'Blog - Kawan-Kawan Store')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/'. $post->Image_url) }}" class="card-img-top" alt="Post Images">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->Title }}</h5>
                            <p class="card-text">{{ $post->Content }}</p>
                            <a href="{{ route('readmore', ['id' => $post->PostID]) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
