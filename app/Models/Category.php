<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // kebalikannya dari $fillable
    // mengabaikan kolom id pada table user
    protected $guarded = ['id'];

    // table category berelasi dengan tabel Post
    // karena satu category bisa memiliki banyak post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
