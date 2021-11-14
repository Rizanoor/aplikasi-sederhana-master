<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class post
{
    private static $blog_posts =
    [
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
