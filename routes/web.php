<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home' , [
        'title' => 'Home Page',
        'active' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        'title' => 'About Me',
        'active' => 'About'
    ]);
});

//halaman post
Route::get('/posts', [PostController::class , 'index']);

//halaman single post
Route::get('/post/{post:slug}', [PostController::class , 'show']);

//halaman category
Route::get('/categories', [CategoryController::class , 'index']);