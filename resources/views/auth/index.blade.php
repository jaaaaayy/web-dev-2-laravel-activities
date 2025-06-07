@extends('layout')

@section('title', 'Login')

@section('content')
  <div class="d-flex justify-content-center">
    <div class="container">
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="d-flex justify-content-center mt-5">
        <form action="{{ route('auth.login') }}" class="border p-3" method="POST" style="width: 400px">
          @csrf

          <h1>Login</h1>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
          </div>

          <button class="btn btn-primary mb-3 w-100">Login</button>
          <p class="text-center">Don't have an account? <a href="{{ route('auth.create') }}"
              class="link-offset-2">Register</a>
          </p>
        </form>
      </div>
    </div>
  </div>
@endsection