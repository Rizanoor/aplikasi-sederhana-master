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
        // User::create([
        //     'name' => 'Rizanoorfauzan',
        //     'email' => 'riza@gmail.com',
        //     'password' => bcrypt('1212')
        // ]);

        // User::create([
        //     'name' => 'Alqis',
        //     'email' => 'alqis@gmail.com',
        //     'password' => bcrypt('1212')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);



        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ducimus quod quaerat assumenda nisi beatae culpa placeat sunt aspernatur veritatis soluta doloribus odit commodi nulla quo quam quos perspiciatis accusantium minus? Tempora voluptatum error facilis, similique sed illum optio!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ducimus quod quaerat assumenda nisi beatae culpa placeat sunt aspernatur veritatis soluta doloribus odit commodi nulla quo quam quos perspiciatis accusantium minus? Tempora voluptatum error facilis, similique sed illum optio!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ducimus quod quaerat assumenda nisi beatae culpa placeat sunt aspernatur veritatis soluta doloribus odit commodi nulla quo quam quos perspiciatis accusantium minus? Tempora voluptatum error facilis, similique sed illum optio!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ducimus quod quaerat assumenda nisi beatae culpa placeat sunt aspernatur veritatis soluta doloribus odit commodi nulla quo quam quos perspiciatis accusantium minus? Tempora voluptatum error facilis, similique sed illum optio!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
