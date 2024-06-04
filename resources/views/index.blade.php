@extends('template')

@section('content')
<div class="row">
    @foreach ($data as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $item->produk->nama_produk}}</h6>
                    <p class="card-text">{{ $item->isi}}</p>
                    <p class="card-text"><small class="text-muted">Tanggal Dibuat: {{ $item->created_at}}</small></p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
