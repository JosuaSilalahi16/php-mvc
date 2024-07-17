<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostController extends Controller
{
    public function blog()
    {
        $posts = Post::all(); // Ambil semua data post
        return view('blog', compact('posts'));
    }

    public function readMore($id)
    {
        try {
            // Ambil data post berdasarkan ID
            $post = Post::findOrFail($id);
            // Kemudian tampilkan view readmore.blade.php dengan data $post
            return view('readmore', compact('post'));
        } catch (ModelNotFoundException $e) {
            // Handle jika post tidak ditemukan
            abort(404);
        }
    }
}
