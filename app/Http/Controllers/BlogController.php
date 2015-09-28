<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.post', compact('post'));
    }

    public function about()
    {

    }

    public function contact()
    {

    }

    public function author()
    {

    }
}
