@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $single_post['title'] }}</h2>
        <h5>Author : {{ $single_post['author'] }}</h5>
        <p>{{ $single_post['body'] }}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection