<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// bikin seeder untuk 3 buah table untuk memanggil modelnya
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
        // membuat seeder untuk model User
        User::create([
            'name' => 'Rizanoorfauzan',
            'username' => 'Riza',
            'email' => 'riza@gmail.com',
            'password' => bcrypt('1212121212') //angka acak yang akan tampil di table user kolom password
        ]);

        // membuat seeder user sebanyak 3 secara random untuk model User 
        User::factory(3)->create();

        // membuat seeder category untuk model Category
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


        // membuat seeder post sebanyak 20 untuk model Post
        Post::factory(20)->create();
    }
}
