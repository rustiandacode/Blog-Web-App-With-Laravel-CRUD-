<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/post', [PostController::class , 'index']);

Route::get('/post/{post:slug}', [PostController::class , 'show']);

Route::get('/categories', [CategoryController::class , 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class , 'show']);