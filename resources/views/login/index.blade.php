@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            
            {{-- Alert registration success --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  
            @endif
            
            {{-- Alert registration failed --}}
            @if (session()->has('LoginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('LoginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  
            @endif

            <main class="form-signin mt-5">
                <img class="mb-4 d-block mx-auto" src="img/logo-tellme.jpeg" alt="" width="120">
                <h1 class="h3 mb-3 fw-normal text-center">LOGIN</h1>
                <form action="/login" method="POST">

                    @csrf
                    
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <small class="d-block mt-2 text-center">Belum punya akun? <a href="/register">Create account here!</a></small>
            </main>
        </div>
    </div>

@endsection