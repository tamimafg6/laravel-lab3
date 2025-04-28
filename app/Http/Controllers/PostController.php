<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function index()
    {
        $posts = Post::with('author')->latest()->get();

        return view('posts.index', compact('posts'));
    }

   
    public function show(Post $post)
    {
        $post->load('author', 'comments');

        return view('posts.show', compact('post'));
    }
}
