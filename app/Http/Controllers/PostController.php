<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index(){
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all() 
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "Single Pos",
            "post" => Post::find($slug),
        ]);
    }
}
