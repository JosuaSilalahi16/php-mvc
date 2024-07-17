<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Get all users
        $users = User::all();
        // Return view with users data
        return view('admin.users', compact('users'));
    }

    public function edit($UserID)
    {
        // Find the user by ID
        $user = User::findOrFail($UserID);
        // Return view with user data
        return view('admin.edituser', compact('user'));
    }

    public function update(Request $request, $UserID)
    {
        // Validation rules
        $validatedData = $request->validate([
            'Username' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:users,Email,' . $UserID . ',UserID',
            'Password' => 'nullable|string|min:8',
            'Role' => 'required|string'
        ]);

        // Find the user to update
        $user = User::findOrFail($UserID);

        // Update user data
        $user->Username = $validatedData['Username'];
        $user->Email = $validatedData['Email'];
        if ($validatedData['Password']) {
            $user->Password = $validatedData['Password']; // Tidak Menggunakan hashing
        }
        $user->Role = $validatedData['Role'];
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }
}
