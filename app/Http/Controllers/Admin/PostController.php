<?
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function edit($PostId)
    {
        // Find the user by ID
        $posts = Post::findOrFail($PostID);
        // Return view with user data
        return view('admin.postsuser', compact('post'));
    }
    public function update(Request $request, $PostId)
    {
        $post = Post::find($PostId);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image_url = $request->input('image_url');
        $post->category = $request->input('category');
        $post->tags = $request->input('tags');
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($Postid)
    {
        $post = Post::find($PostId);
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
}
