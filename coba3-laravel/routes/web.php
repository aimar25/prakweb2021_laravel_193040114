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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aimar Shacher A. K",
        "email" => "aimarsak@gmail.com",
        "img" => "cimay.png"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});