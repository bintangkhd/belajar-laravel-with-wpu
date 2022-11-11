@extends('layouts.main')

@section('container')

    <div class="row justify-content-center text-center">
        <div class="col-lg-4">
            <main class="form-signin mt-5">
                <img class="mb-4" src="img/logo-tellme.jpeg" alt="" width="120">
                <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
                <form>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <small class="d-block mt-2">Belum punya akun? <a href="/register">Create account here!</a></small>
            </main>
        </div>
    </div>

@endsection