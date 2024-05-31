@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Penulis
                    <a href="{{route('penulis.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nama Penulis</label>
                        <input type="text" class="form-control @error('nama_penulis') is-invalid @enderror"
                            name="nama_penulis" value="{{$penulis->nama_penulis}}" disabled>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" class="form-control @error('jk') is-invalid @enderror"
                            name="jk" value="{{$penulis->jk}}" disabled>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror"
                            name="ttl" value="{{$penulis->ttl}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
