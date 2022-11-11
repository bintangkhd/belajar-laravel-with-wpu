@extends('layouts.main')

@section('container')

    <div class="row justify-content-center text-center">
        <div class="col-lg-4">
            <main class="form-registration mt-5">
                <img class="mb-4" src="img/logo-tellme.jpeg" alt="" width="120">
                <h1 class="h3 mb-3 fw-normal">CREATE ACCOUNT</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="name" placeholder="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Create Account</button>
                </form>
                <small class="d-block mt-2">Sudah Punya Akun? <a href="/login">Login here!</a></small>
            </main>
        </div>
    </div>

@endsection