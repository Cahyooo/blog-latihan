@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        {!! $post->body !!}

    </article>

    <a href="/posts">Back To Post</a>
@endsection

{{-- 
    Post::create([
    'title' => 'Judul Ke Tiga',
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur ke tiga',
    'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti voluptas possimus, quas suscipit consequuntur quae atque dolorum. Dolores ipsam eveniet sunt molestiae distinctio ducimus voluptatibus obcaecati reiciendis ratione quisquam perferendis quia vel laborum error non officia, aliquid quae beatae molestias maxime et? Doloremque error veniam autem repellendus quod tenetur molestias qui illo laborum! Aliquid fuga excepturi ducimus incidunt? Necessitatibus illum aspernatur, consequuntur eveniet aperiam ut odio! Deleniti porro tenetur similique.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni ipsum pariatur totam voluptates modi consectetur iure iste, nisi sapiente culpa sed ipsam expedita officia, eum voluptas tempore molestiae neque reiciendis delectus enim molestias sint quia dignissimos nostrum! Animi, quibusdam. Veniam voluptas, cum mollitia nisi temporibus incidunt ex harum eum ea!</p>'
]) 
--}}