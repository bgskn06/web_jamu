@extends('template')

@section('content')
<a href="{{ route('user.create')}}" class="btn btn-primary">Tanbah User</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama User</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->name}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->role}}</td>
            <td>
                <a href="{{route('user.edit', $item->id)}}" class="btn btn-primary">Edit</a>        
            </td> 
            <form action="{{route('user.destroy', $item->id)}}" method="post">
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