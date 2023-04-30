<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{

    private static $blog_posts = [
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

    public static function all(){
        return self::$blog_posts;
    }

}
