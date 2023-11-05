<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostControler extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
    
        ]);
    }

    public function show($slug) {
        return view('post', [
            "title" => "Single Posts",
            "post" => Post::find($slug)
        ]);
    }
}
