@extends('header')
@section('content')

<main class="form-signin w-100 m-auto">
  <form>
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
      <label for="name">Name</label>
    </div>
    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="username" placeholder="Username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <small>Sudah Punya Akun? <a href="/login">Login Sekarang!</a></small>
  </form>
  <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
</main>



@endsection