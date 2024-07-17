<!-- Blade Template for Editing a Post (e.g., resources/views/posts/edit.blade.php) -->
@extends('layouts.admin')

@section('title', 'Edit Post')
@section('content')
<div class="col-md-9">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Edit Post</h3>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('admin.posts.edit', $post->PostId) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="PostID" value="{{ $post->PostID }}">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" required>{{ $post->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="image_url" name="image_url" value="{{ $post->image_url }}">
                    <small id="imageUrlHelp" class="form-text text-muted">Enter the URL of the image.</small>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="News" {{ $post->category == 'News' ? 'selected' : '' }}>News</option>
                        <option value="Updates" {{ $post->category == 'Updates' ? 'selected' : '' }}>Updates</option>
                        <!-- Add more categories as needed -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <input type="text" class="form-control" id="tags" name="tags" value="{{ $post->tags }}">
                    <small id="tagsHelp" class="form-text text-muted">Separate tags with commas (,)</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
