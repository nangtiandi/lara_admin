@extends('layouts.app')
@section('title') Sign In @stop
@section('content')
    <div class="login">
        <img src="images/logos/logo.PNG" class="brand-logo d-block mx-auto mb-3 w-50" alt="">
        <div class="card">
            <div class="card-body ≈">
                <h4 class="text-center">Sing In</h4>
                <p class="text-black-50 text-center">
                    Doesn’t have an account yet? <a href="{{route('register')}}">Sign up here</a>
                </p>
                <a href="#" class="btn btn-lg w-100 btn-outline-secondary">Sign In with google</a>

                <hr>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label text-start">User Email</label>
                        <input type="email" class="form-control form-control-lg" name="email">
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-start">Password</label>
                        <input type="password" class="form-control form-control-lg" name="password">
                    </div>
                    <button class="btn btn-primary w-100 btn-lg">Sign In</button>
                </form>

            </div>
        </div>
    </div>
@endsection
