@extends('dashboard.layout.main')

@section('content')
    <h1>Hello {{ auth()->user()->name }}👋 </h1>
    <p>This is a home dashboard page</p>

    <a href="https://i.pinimg.com/originals/50/bc/ab/50bcab5b4fa20afcd38f8067894cb21f.gif">
        <img src="https://i.pinimg.com/originals/50/bc/ab/50bcab5b4fa20afcd38f8067894cb21f.gif" alt="Description of the image">
    </a>
@endsection
