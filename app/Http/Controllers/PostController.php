<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::with(['user', 'category'])->latest()->get() //Eager Load untuk mengatasi N+1 Problem menggunakan 'with()'
        ]); 
    }

    public static function singlePost(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}