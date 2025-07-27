<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $latest = Post::with('category')
        ->where('status', 'published')
        ->orderBy('created_at', 'desc')
        ->paginate(12);

        $categories = Category::all(); // ambil semua kategori

        return view('pages.blog-home', compact('latest', 'categories'));
    }

    public function baca($slug)
    {
        $article = Post::where('slug', $slug)
            ->firstOrFail();
        $others = Post::where('slug', '!=', $slug)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('pages.blog-read', compact('article', 'others'));
    }
    
    public function beranda()
    {
        $latest = Post::with('category')
        ->where('status', 'published')
        ->orderBy('created_at', 'desc')
        ->paginate(3);

        $categories = Category::all(); // ambil semua kategori

        return view('home', compact('latest', 'categories'));
    }
}
