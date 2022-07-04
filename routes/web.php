<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home' , [
        'title' => 'Home Page',
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        'title' => 'About Me',
    ]);
});


Route::get('/login', [LoginController::class , 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class , 'authentication']);
Route::post('/logout', [LoginController::class , 'logout']);

Route::get('/register', [RegisterController::class , 'index']);
Route::post('/register', [RegisterController::class , 'store']);

Route::get('/dashboard', function()
{
    return view('dashboard.index', [
        'title' => 'dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkslug', [DashboardPostsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostsController::class)->middleware('auth');

Route::get('/posts', [PostController::class , 'index']);
Route::get('/post/{post:slug}', [PostController::class , 'show']);

Route::get('/categories', [CategoryController::class , 'index']);