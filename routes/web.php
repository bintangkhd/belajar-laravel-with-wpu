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


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Title of First Post",
            "slug" => "title-of-first-post",
            "author" => "Bintang",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi nesciunt aut autem consectetur id incidunt deserunt obcaecati perspiciatis eius, eum nostrum placeat voluptates at dolorem maiores dolore delectus sapiente explicabo dignissimos a? Non odio deleniti eius nisi sunt error, dolores ipsa optio consectetur reiciendis, fugiat expedita eveniet minima unde adipisci, veniam aliquam officiis quaerat aliquid! Provident eius, rerum consequuntur aliquam quas explicabo qui! Sequi cumque, officiis velit blanditiis sit eius explicabo unde possimus id quos eligendi assumenda quaerat, rerum dolorem?"
        ],
        [
            "title" => "Title of Second Post",
            "slug" => "title-of-second-post",
            "author" => "Komet",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia vero, tempore assumenda possimus recusandae provident eos illum, deleniti eligendi quas cupiditate, dicta modi rem veniam laudantium! Maiores porro dolores officiis atque, laboriosam beatae placeat pariatur fugiat, eum dignissimos magnam? A corrupti reprehenderit atque dolores labore, ducimus fugit voluptatibus tempora cum possimus optio ea id eius. Reprehenderit autem dolorum libero aut quos sunt explicabo cum, quod et veritatis consectetur, repudiandae vel ab perspiciatis maiores velit perferendis totam nostrum nobis. Itaque quod qui ex aperiam iste quidem voluptas odio est quam. Nihil ut perspiciatis doloribus natus pariatur voluptas sint velit tenetur, voluptate corporis, alias eligendi odit at reiciendis cum ullam illo incidunt necessitatibus veniam suscipit expedita, et eos harum. Vitae, eligendi ad."
        ]
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]); 
});

//Halaman Single Post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "Title of First Post",
            "slug" => "title-of-first-post",
            "author" => "Bintang",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi nesciunt aut autem consectetur id incidunt deserunt obcaecati perspiciatis eius, eum nostrum placeat voluptates at dolorem maiores dolore delectus sapiente explicabo dignissimos a? Non odio deleniti eius nisi sunt error, dolores ipsa optio consectetur reiciendis, fugiat expedita eveniet minima unde adipisci, veniam aliquam officiis quaerat aliquid! Provident eius, rerum consequuntur aliquam quas explicabo qui! Sequi cumque, officiis velit blanditiis sit eius explicabo unde possimus id quos eligendi assumenda quaerat, rerum dolorem?"
        ],
        [
            "title" => "Title of Second Post",
            "slug" => "title-of-second-post",
            "author" => "Komet",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia vero, tempore assumenda possimus recusandae provident eos illum, deleniti eligendi quas cupiditate, dicta modi rem veniam laudantium! Maiores porro dolores officiis atque, laboriosam beatae placeat pariatur fugiat, eum dignissimos magnam? A corrupti reprehenderit atque dolores labore, ducimus fugit voluptatibus tempora cum possimus optio ea id eius. Reprehenderit autem dolorum libero aut quos sunt explicabo cum, quod et veritatis consectetur, repudiandae vel ab perspiciatis maiores velit perferendis totam nostrum nobis. Itaque quod qui ex aperiam iste quidem voluptas odio est quam. Nihil ut perspiciatis doloribus natus pariatur voluptas sint velit tenetur, voluptate corporis, alias eligendi odit at reiciendis cum ullam illo incidunt necessitatibus veniam suscipit expedita, et eos harum. Vitae, eligendi ad."
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $single_post) {
        if ($single_post['slug'] === $slug) {
            $new_post = $single_post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "single_post" => $new_post
    ]);
});
