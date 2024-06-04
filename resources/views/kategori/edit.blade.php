@extends('template')
@section('content')
<form action="{{ route('kategori.update', $data->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nama_kategori" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control @error ('nama_kategori') is-invalid @enderror" name="nama_kategori" placeholder="nama_kategori" value="{{ $data->nama_kategori }}">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
</form>
@endsection