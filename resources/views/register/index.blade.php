@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
          <h1 class="h3 mb-3 fw-normal text-center">Create an Account</h1>
            <form action="/register" method="post">
                @csrf
              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="John Doe" name="name" value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="JohnDoe22" name="username" value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="johndoe@example.com" name="email" value="{{ old('email') }}">
                <label for="email">Email Address</label>
                @error('email')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="Password" placeholder="Password">
                <label for="Password">Password</label>
                @error('password')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3 text-decoration-none">Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection