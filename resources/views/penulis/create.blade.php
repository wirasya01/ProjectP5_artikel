@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Penulis
                    <a href="{{route('penulis.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('penulis.store')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Penulis</label>
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
                            <select name="jk"
                                class="form-control select @error('jk') is-invalid @enderror">
                                <option value="">Jenis Kelamin</option>
                                <option value="1">Laki Laki</option>
                                <option value="0">Perempuan</option>
                            </select>
                            @error('jk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">TTL</label>
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
