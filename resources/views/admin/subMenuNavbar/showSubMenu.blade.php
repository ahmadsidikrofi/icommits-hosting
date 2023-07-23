@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assets/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#submenu').DataTable();
        });
    </script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection

@section('ckeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Sub Menu</h4>
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
                    <a href="/admin/menu">Menu</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Data Sub Menu</a>
                </li>
            </ul>

        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="card-title mb-2">Sub Menu dari {{ $menuNavbar->nama_menu }}</div>
                        {{ $menuNavbar->id }}
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#tambahSubMenu">Tambah SubMenu</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table responsive-3 display nowrap" id="submenu">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Link</th>
                                <th>Aksi</th>
                                <th>Urutan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($ShowSubMenu as $subMenu)
                                <tr>
                                    <td data-header="No">{{ $no++ }}</td>
                                    <td data-header="Nama SubMenu">{{ $subMenu->nama_sub_menu }}</td>
                                    <td>{{ $subMenu->deskripsi }}</td>
                                    <td data-header="Isi Konten">
                                        {{ $subMenu->link }}
                                    </td>
                                    <td>
                                        <form action="submenu/{{ $subMenu->id }}/destroy" method="post">
                                            @csrf
                                            <a href="submenu/{{ $subMenu->id }}/edit" class="btn btn-sm btn-warning text-white" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="submenu/urutan/{{ $subMenu->id }}/atas" method="post">
                                            @csrf
                                            @if ($subMenu->urutan != 1)
                                                <button type="submit" class="btn btn-primary btn-sm"><i
                                                        class="fa-solid fa-arrow-up"></i></button>
                                            @endif
                                        </form>
                                        {{-- <form action="submenu/urutan/{{ $subMenu->id }}/bawah" method="post">
                                            @csrf
                                            @if ($subMenu->urutan != $submenuCount)
                                                <button type="submit" class="btn btn-info btn-sm"><i
                                                        class="fa-solid fa-arrow-down"></i></button>
                                            @endif
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>








<div class="modal fade" id="tambahSubMenu" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg border-0" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSayaLabel">Tambah Data Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/submenu/create/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama SubMenu</label>
                        <div class="input-group">
                            <input type="hidden" name="id_menu_navbar" value="{{ $menuNavbar->id }}">
                            <input type="text" placeholder="Masukkan Nama SubMenu"
                                name="nama_sub_menu" autocomplete='off'
                                class="form-control @error('nama_sub_menu') is-invalid @enderror" required>
                            @error('nama_sub_menu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <div class="input-group ">
                            <input type="text" value="{{ old('deskripsi') }}" placeholder="Masukkan deskripsi"
                                name="deskripsi" autocomplete='off'
                                class="form-control @error('deskripsi') is-invalid @enderror" required>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <div class="input-group ">
                            <input type="text" placeholder="Masukkan link"
                                name="link" autocomplete='off'
                                class="form-control @error('link') is-invalid @enderror" required>
                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Icon</label>
                        <div class="input-group ">
                            <input type="file" placeholder="Beri icon"
                                name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label>Menu</label>
                        <div class="input-group ">
                            <select name="id_menu" required class="form-control" @error('id_menu') is-invalid @enderror>
                                <option value="">-- Pilih Menu --</option>
                                @foreach ($menu as $item)
                                    @if ($item->id_konten === 0)
                                        <option value="{{ $item->id }}">
                                            {{ $item->nama }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('id_menu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
