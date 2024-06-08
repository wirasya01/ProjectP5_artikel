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
                    <div class="card-header">
                        Data Artikel
                        <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-primary" style="float: right">ADD</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="section">
                                <h2 class="title text-center">ARTIKEL</h2>
                                <div class="row justify-content-center">
                                    @php $no = 1; @endphp
                                    @foreach ($artikel as $item)
                                        <div class="col-md-4">
                                            <div class="card card-plain card-blog">
                                                <div class="card-header card-header-image">
                                                    <a href="">
                                                        <img src="{{ asset('/images/artikel/' . $item->cover) }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-category">
                                                        <a href=""
                                                            class="text-dark">{{ $item->kategori->nama_kategori }}</a>
                                                    </h6>
                                                    <h4 class="card-title">
                                                        <a href="">{{ $item->judul }}</a>
                                                    </h4>
                                                    <p class="card-description">
                                                        {{ $item->pembahasan }}
                                                        <a
                                                            href="https://material-blog-pro-laravel.creative-tim.com/article/the-10-biggest-street-style-trends-of-2019">
                                                            Read More
                                                        </a>
                                                    </p>
                                                    <p class="author">
                                                        by
                                                        <a
                                                            href="https://material-blog-pro-laravel.creative-tim.com/author/admin-guy">
                                                            <b>{{ $item->penulis->nama_penulis }}</b>
                                                        </a>
                                                    </p>
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
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
