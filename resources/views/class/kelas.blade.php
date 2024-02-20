@extends('layout.main')

@section('content')
<h1>Kelas</h1>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success')}}
    </div>
@endif

<table class="table container">
    <tr>
        <th>ID</th>
        <th>Nama</th>
    </tr>

    
    @foreach ($class as $key => $classes)
    <tr>
        <td>{{$classes["id"]}}</td>
        <td>{{$classes["nama"]}}</td>
    </tr>
@endforeach
</table>



@endsection