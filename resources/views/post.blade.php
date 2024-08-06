@extends('layouts.main')

@section('container')
    {{-- <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <p class="card-text">{{ $post['body'] }}</p>
            <p class="card-text"><small class="text-body-secondary">Author: {{ $post['author'] }}</small></p>
        </div>
    </div> --}}


    <div class="bgblue mb-3">
        <div class="card-post">
            <div class="img rounded-4">
                <img src="/asset/{{ $post['img'] }}" class="card-img-top w-1 h-1" alt="...">
            </div>
            <div class="body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['body'] }}</p>
                <p class="card-text"><small>Author: {{ $post['author'] }}</small></p>
            </div>
        </div>
    </div>

    <a href="/blog" type="button" class="btn btn-primary">Back</a>
@endsection
