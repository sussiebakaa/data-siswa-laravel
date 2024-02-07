@extends('layout.main')

@section('content')
<h1> Ini adalah About saya </h1>
    <img src="{{ $foto }}" alt="Foto Vania" width="200">
    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>

@endsection