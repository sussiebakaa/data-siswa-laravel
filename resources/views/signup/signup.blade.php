@extends('layout.main')

@section('content')

<div class="d-flex align-items-center justify-content-center vh-50">
    <div class="text-center">
    <h1 class="h3 mb-3 fw-normal">Sign up to your account</h1><form class="form-signin">
 
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
        <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault"> Remember me</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
    <a href="/login">Already have an account ? Login</a>

</form>
    </div>
</div> 


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


@endsection