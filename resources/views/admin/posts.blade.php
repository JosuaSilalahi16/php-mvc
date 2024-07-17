@extends('layouts.admin')

@section('title', 'Admin Manage Posts')

@section('content')
<div class="col-md-9">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Manage Posts</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">This is the page where you can manage posts.</p>
                    <!-- Form to manage posts -->
                    @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">Image URL</label>
                    <input type="file" class="form-control" id="image_url" name="image_url">
                    <small id="imageHelp" class="form-text text-muted">Upload an image for your site.</small>
                </div>
                <div class="mb-3">
                            <label for="category" class="formlabel">Category</label>
                            <select class="form-select" id="category"name="category" required>
                                <option selected disabled>Select Category</option>
                                <option value="news">News</option>
                                <option value="updates">Updates</option>
                                <option value="events">Events</option>
                            </select>
                        </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <input type="text" class="form-control" id="tags" name="tags">
                    <small id="tagsHelp" class="form-text text-muted">Separate tags with commas (,)</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                    <hr>
                    <!-- Table to display post data -->
                    <div class="mt-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lorem Ipsum</td>
                                    <td>post1.jpg</td>
                                    <td>News</td>
                                    <td>tag1, tag2</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows for additional posts -->
                            </tbody>
                        </table>
                    </div>
                    <!-- Additional content can be placed here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
