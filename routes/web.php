<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;
//use App\Http\Controllers\Admin\PostsController;

// Route untuk halaman beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman tentang kami
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk halaman layanan
Route::get('/service', function () {
    return view('service');
})->name('service');

// Route untuk halaman blog
Route::get('/blog', [PostController::class, 'blog'])->name('blog');
Route::get('/readmore/{id}', [PostController::class, 'readMore'])->name('readmore');

// Route untuk halaman kontak
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk halaman admin
Route::prefix('admin')->middleware('auth')->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Manage Users
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');

    // Route untuk menampilkan form edit pengguna
    Route::get('/users/edit/{UserID}', [UserController::class, 'edit'])->name('admin.users.edituser');

    // Route untuk menyimpan pembaruan pengguna
    Route::put('/users/update/{UserID}', [UserController::class, 'update'])->name('admin.users.update');

    // Manage Posts
    Route::get('/posts', function () {
        return view('admin.posts');
    })->name('admin.posts');

    // Route untuk menampilkan form edit post
    //  Route::put('/posts/update/{PostID}', [PostsController::class, 'update'])->name('admin.posts.update');
    //Route::delete('/posts/{PostID}', [PostsController::class, 'destroy'])->name('posts.destroy');

    // Settings
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
});
