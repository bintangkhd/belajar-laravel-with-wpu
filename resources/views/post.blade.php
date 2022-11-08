@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $single_post->title }}</h2>
        <h6>Kategori : <a href="/categories/{{ $single_post->category->slug }}">{{ $single_post->category->name }}</a></h6>
        <h6>Author : KometKhd</h6>
        {!! $single_post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection