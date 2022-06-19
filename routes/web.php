<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

//halaman login
Route::get('/login', [LoginController::class , 'index']);

//halaman register
Route::get('/register', [RegisterController::class , 'index']);

//menangkap data masuk untuk register
Route::post('/register', [RegisterController::class , 'store']);

//halaman post
Route::get('/posts', [PostController::class , 'index']);

//halaman single post
Route::get('/post/{post:slug}', [PostController::class , 'show']);

//halaman category
Route::get('/categories', [CategoryController::class , 'index']);