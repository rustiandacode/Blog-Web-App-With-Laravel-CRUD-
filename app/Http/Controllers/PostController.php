<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All Post',
            'active' => 'Blog',
            'posts' => Post::latest()->filter(request(['search', 'category', 'user']))->get()
        ]);
    }
    
    public function show (Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'active' => 'Blog',
            'post' => $post->load(['user','category'])
        ]);
    }
    
}
