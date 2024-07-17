@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')
<div class="col-md-9">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Edit User</h3>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('admin.users.update', $user->UserID) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="UserID" value="{{ $user->UserID }}">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="Username" value="{{ $user->Username }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="Email" value="{{ $user->Email }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="Password">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" id="role" name="Role" value="{{ $user->Role }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
