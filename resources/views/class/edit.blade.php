@extends('layout.main')

@section('content')

<h1>New data class</h1>
<div class="col-lg-6">
<form method="post" action="/class/submit/{{$class->id}}">
    @csrf
<div class="mb-3">
    <label for="nama" class="form-label">Kelas</label>
    <input type="text" class="form-control" required id="nama" name="nama" value="{{ old('nama', $class->nama ) }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection