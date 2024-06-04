 @extends('layout.layout')
 @section('content')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-10">
                 <div class="card">
                     <div class="card-header">Edit Artikel
                         <a href="{{ route('artikel.index') }}" class="btn btn-sm btn-primary" style="float: right">Return</a>
                     </div>
                     <div class="card-body">
                         <form action="{{ route('artikel.update', $artikel->id) }}" method="post"
                             enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                             <div class="row">
                                 <div class="col">
                                     <div class="mb-2">
                                         <label for="judul">Judul</label>
                                         <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                             name="judul" value="{{ old('judul', $artikel->judul) }}">
                                         @error('judul')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                     </div>
                                     <div class="mb-2">
                                         <label for="id_penulis">Penulis</label>
                                         <select name="id_penulis"
                                             class="form-control @error('id_penulis') is-invalid @enderror">
                                             <option value="">Pilih Penulis</option>
                                             @foreach ($penulis as $data)
                                                 <option value="{{ $data->id }}"
                                                     {{ $data->id == $artikel->id_penulis ? 'selected' : '' }}>
                                                     {{ $data->nama_penulis }}</option>
                                             @endforeach
                                         </select>
                                         @error('id_penulis')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="mb-2">

                                     <label for="cover">Cover</label>
                                     @if ($artikel->cover)
                                         <p><img src="{{ asset('images/artikel/' . $artikel->cover) }}" alt="Cover"
                                                 width="100px"></p>
                                     @endif
                                     <input type="file" name="cover"
                                         class="form-control @error('cover') is-invalid @enderror">
                                     @error('cover')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror

                                 </div>
                             </div>
                             <div class="mb-2">
                                 <label for="pembahasan">Pembahasan</label>
                                 <input type="text" class="form-control @error('pembahasan') is-invalid @enderror"
                                     name="pembahasan" value="{{ old('pembahasan', $artikel->pembahasan) }}">
                                 @error('pembahasan')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                             <div class="mb-2">
                                 <label for="id_penulis">Kategori</label>
                                 <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror">
                                     <option value="">Pilih kategori</option>
                                     @foreach ($kategori as $data)
                                         <option value="{{ $data->id }}"
                                             {{ $data->id == $artikel->id_kategori }}>
                                             {{ $data->nama_kategori }}</option>
                                     @endforeach
                                 </select>
                                 @error('id_penulis')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>

                             <div class="mb-2">
                                 <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
