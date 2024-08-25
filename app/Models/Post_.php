<?php

namespace App\Models;



class Post_ 
{
  private static $blog_posts = [
        [
            "title" => "Judul Blog 1",
            "slug" => "judul-blog-pertama",
            "img" => "rpl3.png",
            "author" => "Fauzan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi maxime incidunt repellendus consequatur repellat qui perferendis facilis autem, distinctio possimus alias? Minus, eligendi error neque ratione quo exercitationem rerum repellat adipisci nobis, recusandae animi sequi praesentium optio voluptatibus? Saepe maxime necessitatibus, quod odit, numquam assumenda quaerat explicabo sequi earum, in tempore animi debitis enim veniam? Ipsam ipsa error odio perferendis quas qui sunt rem officiis vero eligendi mollitia nostrum, ad commodi unde iure nobis fugiat voluptatibus? Ducimus soluta dicta voluptate."
        ],
    
        [
            "title" => "Judul Blog 2",
            "slug" => "judul-blog-kedua",
            "img" => "blog-post.jpg",
            "author" => "Moh Fauzan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi maxime incidunt repellendus consequatur repellat qui perferendis facilis autem, distinctio possimus alias? Minus, eligendi error neque ratione quo exercitationem rerum repellat adipisci nobis, recusandae animi sequi praesentium optio voluptatibus? Saepe maxime necessitatibus, quod odit, numquam assumenda quaerat explicabo sequi earum, in tempore animi debitis enim veniam? Ipsam ipsa error odio perferendis quas qui sunt rem officiis vero eligendi mollitia nostrum, ad commodi unde iure nobis fugiat voluptatibus? Ducimus soluta dicta voluptate."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
