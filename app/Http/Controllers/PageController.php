<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        $recentNews = Blog::orderBy('created_at', 'desc')->take(3)->get();
        
        return view('index',compact( 'recentNews'));
    }

    public function about()
    {
        return view('about');
    }

    public function practiceAreas()
    {
        return view('practice-areas');
    }

   
    public function contact()
    {
        return view('contact');
    }

    public function team()
    {
        return view('team');
    }
}
