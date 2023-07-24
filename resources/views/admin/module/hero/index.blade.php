@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
    <script>
        new DataTable('#hero');
    </script>
@endsection

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Hero</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/admin/dashboard">
                        <i class="fa-solid fa-house-chimney"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/module">Module</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Hero</a>
                </li>
            </ul>

        </div>
        <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="col-sm-8">
                        <div class="card-title"> Kumpulan Hero </div>
                    </div>
                    <div class="col mt-3">
                        <a class="btn btn-info text-white float-right" href="/admin/kategori-hero">
                            Kategori Hero</a>
                    </div>
                    <div class="col mt-3">
                        <a class="btn btn-primary text-white float-right" href="{{ route('hero.create') }}">Tambah Hero</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table display nowrap" id="hero">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title Hero</th>
                                <th>Link Button</th>
                                <th>Background Hero</th>
                                <th>Right Hero</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                                @foreach ($hero as $item)
                                        <tr>
                                            <td data-header="No">{{ $no++ }}</td>
                                            <td data-header="Judul Hero"> {{ $item->title_hero }}</td>
                                            <td data-header="Link"> {{ $item->link_button}} </td>
                                            <td data-header="Background Hero"> {{ $item->image_background}} </td>
                                            <td data-header="Right Hero"> {{ $item->image_right}} </td>
                                            <td>
                                                <form action="{{ route('hero.destroy', $item->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('hero.edit', $item->id) }}"
                                                        class="btn btn-sm btn-warning text-white" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i
                                                            class="fa-solid fa-pen-to-square"></i> </a>
                                                    <button type="submit" class="btn btn-danger btn-sm delete-confirm"
                                                        data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                                            class="fa-solid fa-trash"></i></button>
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

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg border-0" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSayaLabel">Tambah Data Hero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <div class="input-group ">
                                <input type="text" value="" placeholder="Masukkan Judul artikel"
                                    name="judul" autocomplete='off'
                                    class="form-control @error('judul') is-invalid @enderror" required>
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kategori Artikel</label>
                            <div class="input-group ">

                                <select name="id_kategori_artikel" required class="form-control"
                                    @error('id_kategori_artikel') is-invalid @enderror>
                                    <option value="">-- Pilih Kategori Artikel --</option>
                                        <option value="">
                                            
                                        </option>
                                </select>
                                @error('id_kategori_artikel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Teks</label>
                            <textarea name="teks" id="ckeditor" autocomplete='off' class="form-control @error('teks') is-invalid @enderror"
                                cols="30" rows="8">{{ old('teks') }}</textarea>
                            @error('teks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Upload File Gambar</label>
                            <div class="custom-file mb-3">
                                <input type="file" id="file" name="gambar"
                                    class="custom-file-input @error('gambar') is-invalid @enderror" accept="image/*"
                                    onchange="tampilkanPreview(this,'preview')" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <img id="preview" src="" alt="" class="rounded img-fluid" />
                            @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary text-white">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
