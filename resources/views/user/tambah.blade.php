@extends('template')
@section('content')
<form action="{{ route('user.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Username</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <label for="role" class="form-label">Role</label>
    <div class="mb-3">
        <select class="form-select @error('role') is-invalid @enderror" name="role" aria-label="Default select example">
            <option selected disabled>Silahkan Pilih Role</option>
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
        </select>
        @error('role')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
</form>
@endsection
        