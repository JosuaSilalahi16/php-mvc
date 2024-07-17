@extends('layouts.admin')

@section('title', 'Admin Settings')

@section('content')
<div class="col-md-9">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Settings</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">This is the page where you can manage settings.</p>
                    <!-- Form to manage settings -->
                    <form>
                        <div class="mb-3">
                            <label for="siteTitle" class="formlabel">Site Title</label>
                            <input type="text" class="form-control"id="siteTitle" name="siteTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="siteDescription" class="formlabel">Site Description</label>
                            <textarea class="form-control" id="siteDescription" name="siteDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="siteLogo" class="form-label">Site Logo</label>
                            <input type="file" class="form-control"id="siteLogo" name="siteLogo">
                            <small id="logoHelp" class="form-text textmuted">Upload a logo for your site.</small>
                        </div>
                        <div class="mb-3">
                            <label for="siteFavicon" class="formlabel">Site Favicon</label>
                            <input type="file" class="form-control" id="siteFavicon" name="siteFavicon">
                            <small id="faviconHelp" class="form-text text-muted">Upload a favicon for your site.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </form>
                    <!-- Additional content can be placed here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection