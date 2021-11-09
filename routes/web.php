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
    // return view('welcome');
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rizanoorfauzan",
        "email" => "Rizanoorfauzan1@gmail.com",
        "image" => "icons-testimonial-1.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizanoor",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet cumque, natus reprehenderit numquam eligendi at dolore, recusandae dicta obcaecati doloribus libero. Velit, necessitatibus blanditiis accusamus fugiat soluta quis officiis dolore, rem perspiciatis nostrum ex aspernatur quaerat? Id nesciunt atque commodi eaque doloremque, minus natus laborum quaerat consectetur repellat obcaecati impedit!",
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Alqis",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus maiores ab, ullam aut maxime corporis eligendi deserunt sit eaque porro dolorem sunt officia, possimus odit. Aspernatur reiciendis fuga harum minima, veniam in possimus nemo quaerat similique consectetur architecto sint placeat aliquid asperiores nam corrupti, officia quasi, omnis voluptas cum assumenda ratione necessitatibus esse. Sed esse repellendus soluta unde at temporibus aut labore, odio quia iure dolorum fuga possimus modi similique, voluptatem odit quisquam molestias perspiciatis eos ipsa corrupti perferendis tempore. Cupiditate, ad impedit officiis veniam ea eius provident pariatur, cumque fugit dolorum perferendis autem exercitationem, ratione iure dolorem ex temporibus!",
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman singel post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizanoor",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet cumque, natus reprehenderit numquam eligendi at dolore, recusandae dicta obcaecati doloribus libero. Velit, necessitatibus blanditiis accusamus fugiat soluta quis officiis dolore, rem perspiciatis nostrum ex aspernatur quaerat? Id nesciunt atque commodi eaque doloremque, minus natus laborum quaerat consectetur repellat obcaecati impedit!",
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Alqis",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus maiores ab, ullam aut maxime corporis eligendi deserunt sit eaque porro dolorem sunt officia, possimus odit. Aspernatur reiciendis fuga harum minima, veniam in possimus nemo quaerat similique consectetur architecto sint placeat aliquid asperiores nam corrupti, officia quasi, omnis voluptas cum assumenda ratione necessitatibus esse. Sed esse repellendus soluta unde at temporibus aut labore, odio quia iure dolorum fuga possimus modi similique, voluptatem odit quisquam molestias perspiciatis eos ipsa corrupti perferendis tempore. Cupiditate, ad impedit officiis veniam ea eius provident pariatur, cumque fugit dolorum perferendis autem exercitationem, ratione iure dolorem ex temporibus!",
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
