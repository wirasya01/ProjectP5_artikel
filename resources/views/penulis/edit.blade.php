@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data penulis
                        <a href="{{ route('penulis.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('penulis.update', $penulis->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="mb-2">
                                <label for="">Nama penulis</label>
                                <input type="text" class="form-control @error('nama_penulis') is-invalid @enderror"
                                    name="nama_penulis">
                                @error('nama_penulis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Jenis Kelamin</label>
                                <input type="option" class="form-control @error('jk') is-invalid @enderror"
                                    name="jk">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Tempat Tanggal Lahir</label>
                                <input type="date" class="form-control @error('ttl') is-invalid @enderror"
                                    name="ttl">
                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
