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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Rizanoorfauzan",
        "email" => "Rizanoorfauzan1@gmail.com",
        "image" => "icons-testimonial-1.png"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});