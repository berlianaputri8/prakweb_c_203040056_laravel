<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, sapiente nihil! Unde esse laudantium quae sit reiciendis dolore tempore nesciunt culpa corrupti! Necessitatibus unde, aliquid eligendi, ipsum quibusdam dicta aspernatur porro, illo obcaecati quam maxime nulla natus quaerat placeat totam architecto ab saepe quos? Odit totam consequuntur sunt sequi cupiditate quaerat tempora delectus nemo, animi distinctio alias ab incidunt sed exercitationem accusamus earum tempore dolores molestias amet. Impedit eligendi blanditiis aliquam, quasi enim dicta earum nihil rerum sequi inventore quo?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed nostrum velit similique inventore molestias repellendus laudantium sint, eos atque itaque est dolorum, repellat facere harum, deleniti totam sit voluptate eum rem eius quos cupiditate molestiae vitae! Ab fugiat, esse, repellendus ipsam aliquid maiores totam eius quidem omnis itaque doloribus necessitatibus! Quasi quam temporibus perspiciatis unde harum, pariatur maxime porro sed, impedit fugit dolore. Quas vitae dicta nisi ipsum architecto dignissimos, asperiores quisquam alias unde ab consequuntur laudantium beatae consectetur explicabo eligendi perferendis molestiae rerum quibusdam quaerat tempore odio suscipit magni vel! Quis, harum vero repellat reiciendis blanditiis modi consequuntur eos."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }
}
