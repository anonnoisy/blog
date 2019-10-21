<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'nullable'
        ]);

        $tag = Tag::create($request->all());
        return redirect(route('tags.index'))->with([
            'success' => 'Berhasil membuat tag ' . $tag->name,
            'type' => 'primary'
        ]);

    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'nullable'
        ]);

        $tag = Tag::findOrFail($id);
        $tag->update($request->all());

        return redirect(route('tags.index'))->with([
            'success' => 'Berhasil mengedit tag ' . $tag->name,
            'type' => 'success'
        ]);
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->back()->with([
            'success' => 'Berhasil menghapus tag ' . $tag->name,
            'type' => 'danger'
        ]);
    }

}
