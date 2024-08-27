@extends('layouts.main')

@section('container')
    <h1 class="mb-5">categories Post</h1>
    <div class="row row-cols-2">
        @foreach ($categories as $category)
            <div class="post-card col">
                <a style="text-decoration: none; color:black" href="/categories/{{ $category->slug }}">
                    <p class="title">{{ $category->name }}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection
