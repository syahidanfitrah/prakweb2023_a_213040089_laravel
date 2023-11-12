<?php

use App\Http\Controllers\PostControler;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\User;
use Illuminate\Routing\Route as RoutingRoute;

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
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "active" => 'about',
        "name" => "Syahidan Fitrah",
        "email" => "syahidan@gmail.com",
        "image" => "esa.jpg"
    ]);
});


Route::get('/posts', [PostControler::class, 'index']);
Route::get('/posts/{post:slug}', [PostControler::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Posts By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });
//
// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });