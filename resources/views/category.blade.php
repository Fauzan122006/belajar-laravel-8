@extends('layouts.main')

@section('container')
    <h1>Category : {{ $category }}</h1>
    <div class="row row-cols-2">
        @foreach ($posts as $post)
            <div class="post-card col">
                <a style="text-decoration: none; color:black" href="/blog/{{ $post->slug }}">
                    <img class="avatar" src="/asset/rpl3.png">
                    <p class="title">{{ $post->title }}</p>
                    <span class="datetime">3 min to read</span>
                    <img class="image-preview" src="/asset/{{ $post->img }}">
                </a>
            </div>
        @endforeach
    </div>
@endsection
