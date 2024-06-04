@extends('template')

@section('content')
<a href="{{ route('produk.create')}}" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->nama_produk}}</td>
            <td>{{ $item->kategori->nama_kategori}}</td>
            <td>{{ $item->harga}}</td>
            <td><img src="{{ 'storage/'.$item->image}}" width="200" alt=""></td> 
            <td>
                <a href="{{route('produk.edit', $item->id)}}" class="btn btn-primary">Edit</a>        
            </td> 
                <form action="{{route('produk.destroy', $item->id)}}" method="post">
                    @csrf 
                    @method('delete') 
                    <td>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </td> 
                </form>
        </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection