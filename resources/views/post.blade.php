@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <h6 class="mb-3">
                    Created By <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                    in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
                </h6>
                
                <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->slug }}" class="img-fluid">
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                
                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>


@endsection