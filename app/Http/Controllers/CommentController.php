<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::get();
        return view("admin.content.comment.index",["comments"=>$comments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comments = Comment::get();
        return view("admin.content.comment.create", ["comments"=>$comments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $comment = new Comment();
        $comment->name = $request->content;
        $comment->save();
        return redirect()->route("admin.comment");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Comment::find($id);
        return view("admin.content.comment.edit", ["item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Comment::find($id);
        $item->delete();
        return redirect()->route("admin.comment");
    }
}
