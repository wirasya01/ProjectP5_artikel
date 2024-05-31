@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data kategori
                    <a href="{{route('kategori.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">nama_kategori</label>
                        <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror"
                            name="kategori_id" value="{{$kategori->nama_kategori}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
