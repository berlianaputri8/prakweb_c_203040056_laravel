<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Berliana Putri",
        "email" => "berlianaap@gmail.com",
        "image" => "berlian.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Berliana Putri",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, sapiente nihil! Unde esse laudantium quae sit reiciendis dolore tempore nesciunt culpa corrupti! Necessitatibus unde, aliquid eligendi, ipsum quibusdam dicta aspernatur porro, illo obcaecati quam maxime nulla natus quaerat placeat totam architecto ab saepe quos? Odit totam consequuntur sunt sequi cupiditate quaerat tempora delectus nemo, animi distinctio alias ab incidunt sed exercitationem accusamus earum tempore dolores molestias amet. Impedit eligendi blanditiis aliquam, quasi enim dicta earum nihil rerum sequi inventore quo?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Qisti Izatussyabani",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed nostrum velit similique inventore molestias repellendus laudantium sint, eos atque itaque est dolorum, repellat facere harum, deleniti totam sit voluptate eum rem eius quos cupiditate molestiae vitae! Ab fugiat, esse, repellendus ipsam aliquid maiores totam eius quidem omnis itaque doloribus necessitatibus! Quasi quam temporibus perspiciatis unde harum, pariatur maxime porro sed, impedit fugit dolore. Quas vitae dicta nisi ipsum architecto dignissimos, asperiores quisquam alias unde ab consequuntur laudantium beatae consectetur explicabo eligendi perferendis molestiae rerum quibusdam quaerat tempore odio suscipit magni vel! Quis, harum vero repellat reiciendis blanditiis modi consequuntur eos."
        ],
    ];

    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Berliana Putri",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, sapiente nihil! Unde esse laudantium quae sit reiciendis dolore tempore nesciunt culpa corrupti! Necessitatibus unde, aliquid eligendi, ipsum quibusdam dicta aspernatur porro, illo obcaecati quam maxime nulla natus quaerat placeat totam architecto ab saepe quos? Odit totam consequuntur sunt sequi cupiditate quaerat tempora delectus nemo, animi distinctio alias ab incidunt sed exercitationem accusamus earum tempore dolores molestias amet. Impedit eligendi blanditiis aliquam, quasi enim dicta earum nihil rerum sequi inventore quo?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Qisti Izatussyabani",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed nostrum velit similique inventore molestias repellendus laudantium sint, eos atque itaque est dolorum, repellat facere harum, deleniti totam sit voluptate eum rem eius quos cupiditate molestiae vitae! Ab fugiat, esse, repellendus ipsam aliquid maiores totam eius quidem omnis itaque doloribus necessitatibus! Quasi quam temporibus perspiciatis unde harum, pariatur maxime porro sed, impedit fugit dolore. Quas vitae dicta nisi ipsum architecto dignissimos, asperiores quisquam alias unde ab consequuntur laudantium beatae consectetur explicabo eligendi perferendis molestiae rerum quibusdam quaerat tempore odio suscipit magni vel! Quis, harum vero repellat reiciendis blanditiis modi consequuntur eos."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});