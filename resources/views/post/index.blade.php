@extends('template')

@section('content')
<a href="{{ route('post.create')}}" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Produk</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">Isi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->judul}}</td>
            <td>{{ $item->produk->nama_produk}}</td>
            <td>{{ $item->created_at}}</td>
            <td>{{ $item->isi}}</td>
            <td>
                <a href="{{route('post.edit', $item->id)}}" class="btn btn-primary">Edit</a>        
            </td> 
                <form action="{{route('post.destroy', $item->id)}}" method="post">
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