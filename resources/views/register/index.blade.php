@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
          <h1 class="h3 mb-3 fw-normal text-center">Create an Account</h1>
            <form>
              <div class="form-floating">
                <input type="text" class="form-control rounded-top" id="name" placeholder="John Doe" name="name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="JohnDoe22" name="username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="johndoe@example.com" name="email">
                <label for="email">Email Address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="Password" placeholder="Password">
                <label for="Password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3 text-decoration-none">Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection