<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        $validate = $request->validate([
            'name'=>"required|string|max:255",
            'email' => 'required|email|max:255',
            'content' => 'required|string'

        ]);

        $news = Blog::where('slug', $slug)->firstOrFail();

        $comments = new Comment();
        $comments->blogs_id = $news->id;
        $comments->name = $validate['name'];
        $comments->email = $validate['email'];
        $comments->content = $validate['content'];
        $comments->save();

        return redirect()->route('news.show', $slug)->with('success', 'Comment added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
       
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->delete();
        return redirect()->route('news.show', $comment->news->slug)
                     ->with('success', 'Comment deleted!');
    }
}
