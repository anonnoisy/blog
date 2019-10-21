<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::with('tag')->orderBy('created_at', 'DESC')->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        $tags = Tag::orderBy('name', 'ASC')->get();
        return view('admin.blog.create', compact('tags'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $image = Storage::url($post->image);
        return view('admin.blog.show', compact('post', 'image'));
    }

    public function store(Request $request)
    {

        $file = $request->file('image');
        $name = time();
        $extension = $file->getClientOriginalExtension();
        $newName = $name . '.' . $extension;
        $path = Storage::putFileAs('public', $request->image, $newName);

        $this->validate($request, [
            'title'     => 'required|min:10',
            'subtitle'  => 'required|min:10',
            'tag_id'    => 'required|exists:tags,id',
            'section'   => 'required|min:50'
        ]);

        $post = Post::create([
            'image'     => $newName,
            'title'     => $request->title,
            'subtitle'  => $request->subtitle,
            'tag_id'    => $request->tag_id,
            'section'   => $request->section
        ]);

        return redirect(route('posts.index'))->with(['success' => 'Berhasil menambahkan ' . $post->title]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:10',
            'subtitle' => 'required|min:10',
            'section' => 'required|min:50'
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect(route('posts.index'))->with(['success' => 'Berhasil merubah ' . $post->title ]);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->with(['success' => 'Berhasil menghapus ' . $post->title ]);
    }

}
