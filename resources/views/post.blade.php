@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        <p>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

    </article>

    <a href="/posts" class="d-block mt-3">Back To Post</a>
@endsection

{{-- 
    Post::create([
    'title' => 'Judul Ke Tiga',
    'category_id' => 3,
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, exceptur Pertama',
    'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Quisquam exercitationem quidem adipisci recusandae blanditiis dolore cupiditate explicabo porro assumenda doloribus, eligendi ea consequatur nemo enim vitae officia commodi dicta soluta quam impedit amet! Quis ipsum ad obcaecati voluptate eligendi eaque tenetur veritatis reiciendis, aperiam</p><p>doloribus unde enim odit natus harum ea, dolorem vel tempore nemo deleniti veniam nulla facere aliquid. Iure, cupiditate ducimus expedita, unde eaque deleniti tempora, accusamus nemo esse quidem laboriosam voluptates cumque vel laudantium. Quae, quod non!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde assumenda perferendis, tenetur repellat quia dolore ullam labore ea perspiciatis, expedita eum aliquam a reprehenderit saepe quos quidem voluptatum aut iure!</p>'
]) 
--}}

{{-- 
    Category::create([
    'name' => 'Personal',
    'slug'=> 'personal'
])

--}}
