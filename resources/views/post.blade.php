@extends('layouts.main')

@section('container')
    <article class="mb-3">
        <h2>{{ $single_post->title }}</h2>
        <h6>Kategori : <a href="/categories/{{ $single_post->category->slug }}">{{ $single_post->category->name }}</a></h6>
        <h6>Author : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $single_post->user->name }}</a></h6>
        {!! $single_post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection