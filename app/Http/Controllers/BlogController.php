<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $last_post = Post::find(1);
        $posts = Post::with('user')->paginate(10);
        return view('blog.index', compact('last_post', 'posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug);
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
