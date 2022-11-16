@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-end mb-2">
        <div class="col-md-6">
            <form action="/posts">
                
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                
                @if(request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search something here.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-info" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if($posts->count())
        {{-- Main Card Post --}}
        <div class="card mb-3">
            @if ($posts[0]->image)
                    <div style="max-height: 350px; max-width:1200px; overflow: hidden;" class="mx-auto">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->slug }}" class="img-fluid">
                    </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->slug }}">
            @endif

            <div class="card-body text-center">
                <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
                
                <h6>
                    <small class="text-muted">
                        Created By <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a>
                        in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> | {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </h6>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                
            </div>
        </div>
        {{-- End Main Card Post --}}
        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                                    {{ $post->category->name }}
                                </a>
                            </div>

                            @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->slug }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/400x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->slug }}">
                            @endif
                            
                            <div   div class="card-body">
                                <h6 class="card-title">{{ $post->title }}</h6>
                                <p>
                                    <small class="text-muted">
                                        Created By <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> | {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{ $posts->links() }}
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

@endsection