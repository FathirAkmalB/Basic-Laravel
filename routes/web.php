<?php

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



Route::get('/posts', function () {
    return view('posts', [
        "title" => "Blog",
        "posts" => Post::all() 
    ]);
});


Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Posts 1",
            "slug" => "judul-post-pertama",
            "author" => "Mushashi Kishimoto",
            "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe hic corporis nulla placeat minima incidunt neque ipsa assumenda consectetur laborum expedita libero sed cupiditate et aliquam laboriosam blanditiis accusantium, ipsam maiores obcaecati modi! Unde velit expedita illo aperiam laudantium perspiciatis? Labore sapiente quibusdam aspernatur vero adipisci ratione cum eum magni quas? Porro, tenetur! Ad tenetur atque saepe non fugit accusantium ipsa ullam quod qui ipsum molestiae deleniti iure explicabo perferendis cum libero commodi id eveniet, sapiente eos nisi velit! At cum delectus ad, voluptatum optio natus magni exercitationem ratione et excepturi libero, dignissimos cupiditate praesentium quo accusantium. In, nemo quibusdam.",

        ],
        [
            "title" => "Judul Posts 2",
            "slug" => "judul-post-kedua",
            "author" => "Eren Yeagers",
            "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe hic corporis nulla placeat minima incidunt neque ipsa assumenda consectetur laborum expedita libero sed cupiditate et aliquam laboriosam blanditiis accusantium, ipsam maiores obcaecati modi! Unde velit expedita illo aperiam laudantium perspiciatis? Labore sapiente quibusdam aspernatur vero adipisci ratione cum eum magni quas? Porro, tenetur! Ad tenetur atque saepe non fugit accusantium ipsa ullam quod qui ipsum molestiae deleniti iure explicabo perferendis cum libero commodi id eveniet, sapiente eos nisi velit! At cum delectus ad, voluptatum optio natus magni exercitationem ratione et excepturi libero, dignissimos cupiditate praesentium quo accusantium. In, nemo quibusdam.",

        ],
    ];

   

    return view('post', [
        "title" => "Single Pos",
        "post" => Post::find($slug),
    ]);
});
