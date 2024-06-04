@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Artikel
                        <a href="{{ route('artikel.index') }}" class="btn btn-sm btn-primary" style="float: right">Return</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                value="{{ $artikel->judul }}" disabled>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Nama Penulis</label>
                            <input type="text" class="form-control @error('nama_penulis') is-invalid @enderror"
                                name="nama_penulis" value="{{ $artikel->penulis->nama_penulis }}" disabled>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Cover</label>
                            <div class="mb-2">
                                <img src="{{ asset('images/artikel/' . $artikel->cover) }}" alt="" style="width: 200px;">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Pembahasan</label>
                            <input type="text" class="form-control @error('pembahasan') is-invalid @enderror"
                                name="pembahasan" value="{{ $artikel->pembahasan }}" disabled>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Kategori</label>
                            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror"
                                name="nama_kategori" value="{{ $artikel->kategori->nama_kategori }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
