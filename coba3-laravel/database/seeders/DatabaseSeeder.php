<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         

         user::create([
             'name' => 'Aimar',
             'username' => 'aimar',
             'email' => 'Aimar@gmail.com',
             'password' => bcrypt('12345')
         ]);

        // user::create([
        //     'name' => 'Asep',
        //     'email' => 'Asep@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();
        
         Category::create([
             'name' => 'Web programming',
             'slug' => 'web-programming'
         ]);

         Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

         Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        Post::factory(20)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet 
        //     consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est vero optio nostrum, aperiam,
        //      eaque corporis voluptatem autem nisi accusamus architecto facilis molestiae rem necessitatibus! 
        //      Fugiat iusto neque atque facere adipisci?'
        //      'category_id' => 1,
        //      'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet 
        //     consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est vero optio nostrum, aperiam,
        //      eaque corporis voluptatem autem nisi accusamus architecto facilis molestiae rem necessitatibus! 
        //      Fugiat iusto neque atque facere adipisci?'
        //      'category_id' => 1,
        //      'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Tiga',
        //     'slug' => 'judul-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet 
        //     consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est vero optio nostrum, aperiam,
        //      eaque corporis voluptatem autem nisi accusamus architecto facilis molestiae rem necessitatibus! 
        //      Fugiat iusto neque atque facere adipisci?'
        //      'category_id' => 2,
        //      'user_id' => 2
        // ]);
    }
}