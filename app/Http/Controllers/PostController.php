<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index() {     

        $title = '';
        
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        
        if(request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' Created By ' . $user->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter((request(['search', 'category', 'user'])))->paginate(7)->withQueryString()
            // "posts" => Post::with(['user', 'category'])->latest()->get() //Eager Load untuk mengatasi N+1 Problem menggunakan 'with()'
        ]); 
    }

    public static function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
    
} 