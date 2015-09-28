<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $last_post = Post::with('user')->latest()->take(1)->get();
        return view('blog.index');
    }

    public function post()
    {

    }

    public function about()
    {

    }

    public function contact()
    {

    }
}
