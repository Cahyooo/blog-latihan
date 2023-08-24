<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $arthor = User::firstWhere('username', request('author'));
            $title = ' by ' . $arthor->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            // "posts" =>  Post::all()
            "posts" =>  Post::latest()->filter(request(['search', 'category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            // "post" => Post::find($post)
            "post" => $post
        ]);
    }
}
