<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->with('user')->latest()->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function post($slug)
    {
        $post = $this->post->where('slug', $slug)->first();
        if (!$post) {
            abort(404);
        }
        return view('blog.post', compact('post'));
    }

    public function about()
    {
        return view('blog.about');
    }

    public function contact()
    {
        return view('blog.contact');
    }

    public function author()
    {

    }
}
