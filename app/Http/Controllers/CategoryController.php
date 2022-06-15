<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Categories',
            'active' => 'Categories',
            'categories' => Category::with(['post'])->get(),
            'users' => User::with(['post'])->get()
        ]);
    }

    public function show(Category $category)
    {
        return view('posts', [
            'title' => 'Categories',
            'active' => 'Blog',
            'posts' => $category->post->load(['user','category'])
        ]);
    }
}
