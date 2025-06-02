<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view('admin.content.post.index', ["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Post();
        $item->category_id = $request->category_id;
        $item->user_id = $request->user_id;
        $item->title = $request->title;
        $item->preview = $request->preview;
        $item->description = $request->description;
        $item->content = $request->content;
        $item->save();
        notify()->success('A new post has been created.');
        return redirect()->route("admin.order");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Post::find($id);
        return view("admin.content.post.edit", ["item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Post::find($id);
        $item->delete();
        return redirect()->route("admin.post");
    }
}
