@extends('auth.layouts.master')

@section('title', "Register | Tuku Buku")

@section('content')

<div class="row">
    <div class="col-md-12 mb-3">
        
        <h2>Register</h2>
        <p>Buat akun anda sebelum login ke aplikasi ini.</p>
        
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror"  name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <div class="mb-4">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="col-12">
            <div class="mb-4">
                <button type="submit" class="btn btn-primary w-100">SIGN UP</button>
            </div>
        </div>

    </form>
    
    
    
    {{-- <div class="col-12 mb-4">
        <div class="">
            <div class="seperator">
                <hr>
                <div class="seperator-text"> <span>Or continue with</span></div>
            </div>
        </div>
    </div>
    
    <div class="d-flex justify-content-center">
        <div class="mb-4">
            <a href="#">
                <button class="btn  btn-social-login w-100 ">
                    <img src="{{ asset('template-login') }}/src/assets/img/google-gmail.svg" alt="" class="img-fluid">
                    <span class="btn-text-inner">Google</span>
                </button>
            </a>
        </div>
    </div> --}}

    <div class="col-12">
        <div class="text-center">
            <p class="mb-0">Apakah anda sudah memiliki akun? <a href="{{ route('login') }}" class="text-warning">Sign In</a></p>
        </div>
    </div>
    
</div>

@endsection