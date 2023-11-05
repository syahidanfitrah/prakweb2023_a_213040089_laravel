<?php

use App\Http\Controllers\PostControler;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => "Syahidan Fitrah",
        "email" => "syahidan@gmail.com",
        "image" => "esa.jpg"
    ]);
});


Route::get('/posts', [PostControler::class, 'index']);

// Halaman single post
Route::get('/posts/{post:slug}', [PostControler::class, 'show']);