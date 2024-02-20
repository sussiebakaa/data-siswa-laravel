@extends('layout.main')

@section('content')

@if(session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger col-lg-12" role="alert">
        {{ session('error') }}
    </div>
@endif


<div class="d-flex align-items-center justify-content-center vh-50">
    <form class="w-70 d-flex flex-column" action="/Login/auth" method="POST">
        @csrf
        <div class="text-center">
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <div class="form-floating mt-1">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mt-1">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" style="margin-top: 10px" type="submit">Login</button>
            <p style="margin-top: 10px; text-align: center; font-size: 13px">Don't have an account? <a href="/Signup/signup" style="color: rgb(0, 89, 255); text-decoration: underline;">Signup</a></p>
        </div>
    </form>
</div> 

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

@endsection
