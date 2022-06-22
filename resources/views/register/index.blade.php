@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
              <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
              @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Your Name" required value="{{ old('name') }}" >
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="username" required value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $email }}
                </div>
                @enderror
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('pasword') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
              <small class="d-block text-center mt-3">Alrady Registered? <a href="/login">login</a></small>
            </form>
          </main>
    </div>
</div>

@endsection