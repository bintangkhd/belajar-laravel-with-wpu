@extends('layouts.main')

@section('container')
    <article class="mb-3">
        <h2>{{ $post->title }}</h2>
        <h6>Kategori : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
        <h6>Author : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a></h6>
        {!! $post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection