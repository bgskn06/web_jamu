@extends('template')
@section('content')
<form action="{{ route('produk.update', $data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nama_produk" class="form-label">Nama Produk</label>
        <input type="text" class="form-control @error ('nama_produk') is-invalid @enderror" name="nama_produk" placeholder="Nama Produk" value="{{ $data->nama_produk }}">
    </div>
    <label for="kategori" class="form-label">Kategori</label>
    <div>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="kategori_id">
            @foreach ($kategori as $item)
                <option value="{{$item->id}}" @selected($data->kategori_id == $item->id)>{{$item->nama_kategori}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control @error ('harga') is-invalid @enderror" name="harga" placeholder="Harga" value="{{ $data->harga }}">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Upload Gambar</label>
        <input class="form-control" type="file" name="image" id="formFile">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
</form>
@endsection