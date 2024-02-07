@extends('layout.main')

@section('content')
<h1> Ini adalah Data Ekstrakulikuler </h1>

<table class="table container">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Nama Pembina</th>
        <th>Deskripsi</th>

    </tr>

    
    @foreach ($eskul as $key => $eskuls)
    <tr>
        <td>{{$eskuls["id"]}}</td>
        <td>{{$eskuls["nama"]}}</td>
        <td>{{$eskuls["nama_pembina"]}}</td>
        <td>{{$eskuls["deskripsi"]}}</td>

    </tr>
@endforeach
</table>



@endsection