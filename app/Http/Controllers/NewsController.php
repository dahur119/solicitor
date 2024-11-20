<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Blog;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsItems = Blog::paginate(6);
        return view('news', compact('newsItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug|max:255',
            'message' => 'required|string',
            'author' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/news'), $imageName);

        // Create a new blog entry
        Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'message' => $request->message,
            'author' => $request->author,
            'tagline' => $request->tagline,
            'image' => $imageName,
        ]);

        return redirect()->route('news.create')->with('success', 'News item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $newsItem = Blog::where('slug', $slug)->firstOrFail();
        $comments = $newsItem->comments; // Assuming a relationship exists
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('news-single', compact('newsItem', 'comments', 'recentPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $news = Blog::where('slug', $slug)->firstOrFail();
        return view('edit-news', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'message' => 'required|string',
            'author' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload if new image is provided
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/news'), $imageName);

            if ($blog->image && file_exists(public_path('images/news/' . $blog->image))) {
                unlink(public_path('images/news/' . $blog->image));
            }

            $blog->image = $imageName;
        }

        $blog->update($request->only(['title', 'slug', 'message', 'author', 'tagline']));

        return redirect()->route('news.show', $blog->slug)->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete associated image
        if ($blog->image && file_exists(public_path('images/news/' . $blog->image))) {
            unlink(public_path('images/news/' . $blog->image));
        }

        $blog->delete();

        return redirect()->route('/')->with('success', 'News item deleted successfully.');
    }
}
