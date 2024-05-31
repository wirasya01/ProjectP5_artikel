@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Data Artikel
                        <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-reponsive">
                            <table class="table" id="table-baru">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>id_Penulis</th>
                                        <th>Cover</th>
                                        <th>Pembahasan</th>
                                        <th>Kategori_Id</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php $no = 1; @endphp
                                <tbody>
                                    @foreach ($artikel as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->id_penulis }}</td>
                                            <td align="center"><img src="{{ asset('/images/artikel/' . $item->cover) }}"
                                                    style="width: 100px;" alt="">
                                            </td>
                                            <td>{{ $item->pembahasan }}</td>
                                            <td>{{ $item->id_kategori }}</td>
                                            <td>
                                            <form action="{{ route('artikel.destroy', $item->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('artikel.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    Edit
                                                </a>
                                                <a href="{{ route('artikel.show', $item->id) }}"
                                                    class="btn btn-sm btn-warning">
                                                    Show
                                                </a>

                                                <button class="btn btn-sm btn-danger" type="submit"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    Delete
                                                </button>
                                            </form>
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
