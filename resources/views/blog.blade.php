@extends('layouts.main')

@section('container')
    <div class="row row-cols-2">

        @foreach ($posts as $post)
            {{-- <div class="card col me-3" style="width: 18rem;">
                <a style="text-decoration: none; color:black" href="/blog/{{ $post['slug'] }}">
                    <img src="/asset/{{ $post['img'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>{{ $post['title'] }}</h4>
                        <p class="card-text" style="max-height: 100px; overflow:hidden">{{ $post['body'] }}</p>
                    </div>
                </a>
            </div> --}}

            <div class="post-card col">
                <a style="text-decoration: none; color:black" href="/blog/{{ $post['slug'] }}">
                    <img class="avatar" src="/asset/rpl3.png">
                    <p class="title">{{ $post['title'] }}</p>
                    <span class="datetime">3 min to read</span>
                    <img class="image-preview" src="/asset/{{ $post['img'] }}">
                </a>
            </div>
        @endforeach
    </div>
@endsection
