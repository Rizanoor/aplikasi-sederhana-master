<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use GuzzleHttp\Middleware;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home' //tidak di pakai karena sudah ada request active di sidebar
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about', //tidak di pakai karena sudah ada request active di sidebar
        "name" => "Rizanoorfauzan",
        "email" => "Rizanoorfauzan1@gmail.com",
        "image" => "icons-testimonial-1.png"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories', //tidak di pakai karena sudah ada request active di sidebar
        'categories' => Category::all()
    ]);
});

// hanya boleh di akses halaman login hanya guest
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// hanya boleh di akses halaman register hanya guest
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::Post('/register', [RegisterController::class, 'store']);

// hanya boleh di akses ketika orang sudah login
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

// dashboard yang hanya bisa di akses oleh auth
Route::resource('/dashboard/posts', DashboardPostController::class)
    ->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)
    ->except('show')
    ->middleware('admin');
