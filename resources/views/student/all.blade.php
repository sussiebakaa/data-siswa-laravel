@extends('layout.main')

@section('content')
<h1> Student </h1>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success')}}
    </div>
@endif

<table class="table container">
    <tr>
        <th>ID</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Action</th>
    </tr>
    @foreach ($students as $key => $student)
    <tr>
        <td>{{$student["id"]}}</td>
        <td>{{$student["nis"]}}</td>
        <td>{{$student["nama"]}}</td>
        <td>{{$student->kelas->nama}}</td>
        <td>
            <a type="button" class="btn btn-outline-success" href="/student/detail/{{$student['id']}}">Detail</a>

        </td>
    </tr>
    @endforeach
</table>

@endsection
