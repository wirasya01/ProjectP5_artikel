@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    <div class="card-header">Data kategori
                        <a href="{{ route('artikel.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    name="judul">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Penulis</label>
                                <select class="form-control @error('id_penulis') is-invalid @enderror" name="id_penulis">
                                    <option value="">Pilih Penulis</option>
                                    @foreach ($penulis as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_penulis }}</option>
                                    @endforeach
                                </select>
                                @error('id_penulis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Cover</label>
                                <input type="file" name="cover"
                                    class="form-control @error('cover') is-invalid @enderror">
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Pembahasan</label>
                                <input type="text" class="form-control @error('pembahasan') is-invalid @enderror"
                                    name="pembahasan">
                                @error('pembahasan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Kategori</label>
                                <select class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('id_penulis')
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
