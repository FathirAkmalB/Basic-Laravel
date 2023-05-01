<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Route::get('/', function(){
// return view('layouting.main');
// });

Route::get('/', function () {
    return view('home', [
    "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "username" => "Fathir",
        "picture" => 'fathir.jpg'
    ]);
});


Route::controller(PostController::class)->group( function (){

    Route::get('/posts', 'index');  //Get the posts
    Route::get('posts/{slug}',  'show'); //Show the posts

});


