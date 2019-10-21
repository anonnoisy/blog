<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('tag')->orderBy('created_at', 'DESC')->paginate(10);
        return view('blogs.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $date = date('F d, Y', strtotime($post->created_at));
        return view('blogs.show', compact('post', 'date'));
    }
}
