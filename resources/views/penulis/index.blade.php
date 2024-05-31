@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Data Penulis</h5>
                            <a href="{{ route('penulis.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="table-baru">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nama Penulis</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($penulis as $item)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $item->nama_penulis }}</td>
                                            <td>{{ $item->jk }}</td>
                                            <td>{{ $item->ttl }}</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('penulis.edit', $item->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                    <a href="{{ route('penulis.show', $item->id) }}" class="btn btn-sm btn-warning">Show</a>
                                                    <form action="{{ route('penulis.destroy', $item->id) }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
