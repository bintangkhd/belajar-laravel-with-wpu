@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $single_post->title }}</h2>
        {!! $single_post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection