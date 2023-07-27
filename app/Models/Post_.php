<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "arthor" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim qui eos quisquam facere consectetur, suscipit laboriosam amet id tempore harum quidem labore dolore deleniti, ab, doloribus excepturi quos. Minima animi pariatur ea non ipsum alias laboriosam obcaecati inventore. Sed, doloremque similique nulla est perspiciatis illum magnam consequatur, ut consectetur esse quisquam accusamus tempore beatae voluptatum minima voluptatem. Quae, quidem voluptates quia laborum alias odit deserunt eos fuga repudiandae, reprehenderit delectus numquam nostrum laboriosam ipsa rem nihil temporibus. Nobis, tenetur! Aspernatur?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "arthor" => "Doddy Ferdyansah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, voluptatum sed? Id ratione explicabo quam dolorem quidem nihil magni voluptates, adipisci, voluptate, temporibus eos veritatis cupiditate perspiciatis omnis impedit ipsum. Fugit consequatur earum ex veniam ipsa magni tenetur maiores velit eaque impedit praesentium porro ducimus voluptatibus optio labore voluptates delectus eius deleniti eligendi nisi suscipit sed, facilis id dolor? Harum, ea sapiente adipisci repellendus minus sint, esse ipsum deserunt cumque aut explicabo pariatur officia vel optio expedita quos impedit nulla illo sunt. Iste et aut ad aliquid suscipit aperiam a est sint repellat vero voluptatibus, eum veniam consequatur necessitatibus soluta."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
