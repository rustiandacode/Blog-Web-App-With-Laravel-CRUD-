<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home' , [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        'title' => 'About Me'
    ]);
});

//halaman post
Route::get('/post', [PostController::class , 'index']);

//halaman single post
Route::get('/post/{post:slug}', [PostController::class , 'show']);

//halaman category
Route::get('/categories', [CategoryController::class , 'index']);

//halaman detail category
Route::get('/categories/{category:slug}', [CategoryController::class , 'show']);

//halaman kategory berdasarkan user
Route::get('/categories/user/{user:username}', [UserController::class , 'index']);