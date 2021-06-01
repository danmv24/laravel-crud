<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('index', compact('posts'));
    }

    public function readPost($postId)
    {
        $post = Post::find($postId);

        return view('read', [
            'post' => $post
        ]);
    }

    public function getCreate()
    {
        return view('create');
    }

    public function createPost(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required|max:255',
            'description'=> 'required|max:1000',
            'text'=> 'required|max:4096'
        ]);

        $post = new Post([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'text' => $request->get('text'),
        ]);

        $post->save();

        return redirect()->route('index');
    }

    public function getUpdate($postId)
    {
        $post = Post::where('id', $postId)->first();

        return view('update', [
            'post' => $post
        ]);
    }

    public function updatePost(Request $request, $postId)
    {
        $this->validate($request, [
            'title'=> 'required|max:255',
            'description'=> 'required|max:1000',
            'text'=> 'required|max:4096'
        ]);

        $post = Post::find($postId);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->text = $request->text;

        $post->save();

        return redirect()->route('index');
    }

    public function deletePost($postId)
    {
        $post = Post::find($postId);
        $post->delete();

        return redirect()->back();
    }
}
