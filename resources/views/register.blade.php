@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
              <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
              @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Your Name">
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
              <small class="d-block text-center mt-3">Alrady Registered? <a href="/login">login</a></small>
            </form>
          </main>
    </div>
</div>

@endsection