@extends('layout.main')

@section('content')
<h1>New data student</h1>
<div class="col-lg-6">
    <form method="post" action="/student/add">
        @csrf
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" class="form-control" required id="nis" name="nis" value="{{ old('nis') }}">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" required id="nama" name="nama" value="{{ old('nama') }}">
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            {{-- <input type="text" class="form-control" required id="kelas" name="kelas" value="{{ old('kelas') }}"> --}}
            <select class="form-select" name="kelas_id" id="">
                @foreach ($kelas as $kelases)
                <option name="kelas_id" value="{{$kelases -> id}}">{{ $kelases->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" required id="alamat" name="alamat" value="{{ old('alamat') }}">
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" required id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
        </div>

        <button type="submit" class="btn btn-primary"> Add </button>
    </form>
</div>

@endsection