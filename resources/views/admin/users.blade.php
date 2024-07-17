@extends('layouts.admin')

@section('title', 'Admin Manage Users')

@section('content')
<div class="col-md-9">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Manage Users</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->Username }}</td>
                            <td>{{ $user->Email }}</td>
                            <td>{{ $user->Role }}</td>
                            <td>
                                <a href="{{ route('admin.users.edituser', $user->UserID) }}" class="btn btn-sm btn-primary">Edit</a>
                                <!-- Add delete button if needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
