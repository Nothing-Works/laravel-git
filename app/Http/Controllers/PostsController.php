<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'blog', 'show']);
    }

    public function index(Posts $posts)
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function blog(Posts $posts)
    {
        // $posts=$posts->all();
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.blog', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        auth()->user()->publish(new Post(request(['title', 'body'])));
        flash('post done')->success();
        flash('post done important')->success()->important();
       // flash()->overlay('You are now a Laracasts member!', 'Yay');
        flash('Message')->overlay();

        return redirect('/blog');
    }
}
