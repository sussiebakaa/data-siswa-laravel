@extends('layout.main')

@section('content')

<div class="d-flex align-items-center justify-content-center vh-50">
  <form class="w-30 d-flex flex-column" action="/Signup/store" method="POST">
    @csrf
    <div class="text-center">
      <h1 class="h3 mb-3 fw-normal">Signup</h1>
    </div>
    <div class="form-floating mt-1">
      <input class="form-control" id="floatingUsername" placeholder="username" name="name">
      <label for="floatingUsername">Username</label>
    </div>
    <div class="form-floating mt-1">
      <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email">
      <label for="floatingEmail">Email</label>
    </div>
    <div class="form-floating mt-1">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2" style="margin-top: 10px" type="submit">Signup</button>
    <p style="margin-top: 10px; text-align: center; font-size: 13px">Already have an account? <a href="/Login/signin" style="color: rgb(0, 89, 255); text-decoration: underline;">Login</a></p>
  </form>
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

@endsection
