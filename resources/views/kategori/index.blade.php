@extends('template')

@section('content')
<div class="d-flex">
    <form class="d-flex align-items-center" action="{{ route('kategori.store')}}" method="POST"> 
        @csrf
        <input class="form-control" type="text" name="nama_kategori" id="formFile" placeholder="Tambah Kategori">
        <button class="btn btn-success ml-4 h-100">Tambah</button>
    </form>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->nama_kategori}}</td>
            <td>{{ $item->created_at}}</td>
            <td>
                <a href="{{route('kategori.edit', $item->id)}}" class="btn btn-primary">Edit</a>        
            </td> 
            <form action="{{route('kategori.destroy', $item->id)}}" method="post">
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