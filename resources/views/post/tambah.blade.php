@extends('template')
@section('content')
<form action="{{ route('post.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control @error ('judul') is-invalid @enderror" name="judul" placeholder="judul" value="{{ old('judul') }}">
    </div>
    <label for="produk" class="form-label">Produk</label>
    <div>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="produk_id">
            @foreach ($produk as $item)
                <option value="{{$item->id}}">{{$item->nama_produk}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="isi" class="form-label">Isi</label>
        <input type="textarea" class="form-control @error ('isi') is-invalid @enderror" name="isi" placeholder="isi" value="{{ old('isi') }}">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
</form>
@endsection