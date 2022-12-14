<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Models\Post;
// use App\Models\User;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('posts/{post:slug}',[PostController::class, 'show']);

//Halaman Menampilkan Seluruh Kategori
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'All Post Categories',
        'categories' => Category::all()
    ]);
});


// //Category Routes
// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'posts' => $category->posts->load('user', 'category'),
//         // 'category' => $category->name
//     ]);
// });

// //Author Routes
// Route::get('/authors/{user:username}', function(User $user) {
//     return view('posts', [
//         'title' => "Post by Author : $user->name",
//         'posts' => $user->posts->load('user', 'category') //Lazy Eager Load untuk mengatasi N+1 Problem menggunakan 'load()'
//     ]);
// });

//Login View
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//Logout
Route::post('/logout', [LoginController::class, 'logout']);

//Register View
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Dashboard View
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

//Route untuk fetch slug
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

//Route Dashboard Post Resource
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//Route Admin
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');

