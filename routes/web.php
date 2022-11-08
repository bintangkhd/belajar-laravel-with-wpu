<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
        "name" => "Bintang Khadafi",
        "desc" => "I am programmer!",
        "image" => "pasfoto_bintang.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

//Halaman Single Post
Route::get('posts/{post:slug}',[PostController::class, 'singlePost']);

//Halaman Menampilkan Seluruh Kategori
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'All Post Categories',
        'categories' => Category::all()
    ]);
});


//Category Routes
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

//Author Routes
Route::get('/authors/{user:username}', function(User $user) {
    return view('posts', [
        'title' => 'User Posts',
        'posts' => $user->posts
    ]);
});