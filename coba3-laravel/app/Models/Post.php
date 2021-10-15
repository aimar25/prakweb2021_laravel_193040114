<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Aimar Boss",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed qui corporis quia explicabo cumque esse, 
        amet vitae asperiores odio deleniti blanditiis aperiam tempora, nemo officiis ipsum modi hic. 
        Adipisci enim perferendis amet quis doloribus esse odit nihil minus exercitationem quia vero repellat magni consectetur nulla ipsa, 
        tempore id? Impedit beatae neque iusto eligendi aspernatur, incidunt, dolor recusandae necessitatibus quibusdam totam expedita! Similique,
         illo doloremque provident eveniet praesentium possimus porro corrupti hic repudiandae qui quidem expedita! Ab mollitia at laborum nisi?"
    ],
    [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Cimayy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error amet voluptatem aperiam sed veniam fugiat facere iure itaque 
            consectetur voluptatibus dolore nobis pariatur, voluptates maxime repellat, dolores libero, ab magnam dolorem nam. Saepe mollitia 
            repellat odit, ab dolores deserunt laboriosam odio nobis natus a deleniti magnam qui. Voluptate molestiae nihil similique veritatis 
            odio ab doloribus rem nesciunt quas iusto, consectetur reiciendis enim culpa laboriosam sed ut expedita tenetur adipisci nulla. 
            Sequi quia libero magnam adipisci dolores sint maiores architecto natus magni non quos alias, ex repellendus ad repellat officiis. 
            Pariatur harum quasi aspernatur commodi voluptas ab soluta ratione, beatae velit."
        
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = self::all();
        return $posts->firstWhere('slug', $slug);
    }
}
