<!-- resources/views/readmore.blade.php -->
@extends('layouts.app')
@section('title', $post->Title)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="blog-post">
                <img src="{{ asset('images/' . $post->Image_url) }}" class="d-block w-100" alt="Post Image">
                <h2 class="post-title">{{ $post->Title }}</h2>
                <p class="post-content">{{ $post->Content }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
