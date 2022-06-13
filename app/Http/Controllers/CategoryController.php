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
            'categories' => Category::all(),
            'users' => User::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('posts', [
            'title' => 'Categories',
            'posts' => $category->post->load(['user','category'])
        ]);
    }
}
