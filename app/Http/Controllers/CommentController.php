<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $data = $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment'        => 'required|string',
        ]);

        $post->comments()->create($data);

        return redirect()
            ->route('posts.show', $post)
            ->with('success', 'Your comment was posted!');
    }
}
