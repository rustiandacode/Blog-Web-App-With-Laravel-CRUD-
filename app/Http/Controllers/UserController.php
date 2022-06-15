<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('posts', [
            'title' => 'Post by ' . $user->name,
            'active' => 'Blog',
            'posts' => $user->post->load(['category', 'user'])
        ]);
    }
}
