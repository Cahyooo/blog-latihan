@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid" style="height: 400px;">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }} alt="{{ $post->category->name }}"
                        class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block mt-3 fs-2 mb-5">Back To Post</a>
            </div>
        </div>
    </div>
@endsection
