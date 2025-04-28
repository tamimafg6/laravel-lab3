<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::get('/posts', [PostController::class, 'index'])
     ->name('posts.index');

Route::get('/posts/{post}', [PostController::class, 'show'])
     ->name('posts.show');

Route::post('/posts/{post}/comments', [CommentController::class, 'store'])
     ->name('comments.store');
