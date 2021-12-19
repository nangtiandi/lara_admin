@extends('layouts.app')
@section('title') Sign Up @stop
@section('content')
    <div class="login">
        <img src="images/logos/logo.PNG" class="brand-logo d-block mx-auto mb-3 w-50" alt="">
        <div class="card">
            <div class="card-body ≈">
                <h4 class="text-center">Sing Up</h4>
                <p class="text-black-50 text-center">
                    Doesn’t have an account yet? <a href="{{route('login')}}">Sign In here</a>
                </p>
                <a href="#" class="btn btn-lg w-100 btn-outline-secondary">Sign In with google</a>

                <hr>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label text-start">User Name</label>
                        <input type="text" name="name" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-start">User Email</label>
                        <input type="email" name="email" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-start">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-start">Password</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg">
                    </div>
                    <button class="btn btn-primary w-100 btn-lg">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
