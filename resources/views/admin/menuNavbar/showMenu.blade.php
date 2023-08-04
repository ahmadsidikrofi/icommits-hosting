@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
@endsection

@section('js')
    <script src="{{ asset('assets/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#menu').DataTable();
        });
    </script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Menu</h4>
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
                    <a href="">Data Menu</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="card-title">Data Menu</div>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary text-white float-right" data-toggle="modal" data-target="#tambahMenu">
                            <span class="fw-bold">Tambah Menu</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table responsive-3" id="menu">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tipe Menu</th>
                                <th>Aksi</th>
                                <th>Urutan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($menuNavbar as $menu)
                                <tr>
                                    <td data-header="No">{{ $no++ }}</td>
                                    <td data-header="Nama Menu">{{ $menu->nama_menu }}</td>
                                    <td data-header="Isi Konten">
                                        @if ($menu->tipe_menu === "sub_menu")
                                            <p>Sub Menu</p>
                                        @else
                                            <p>Link</p>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="#" method="post">
                                            @method('delete')
                                            @csrf
                                            @if ($menu->tipe_menu === "link")
                                                <a class="btn btn-sm btn-warning text-white"
                                                    title="Edit" data-toggle="modal" data-target="#editMenu{{ $menu->id }}"><i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            @elseif ($menu->tipe_menu === "sub_menu")
                                                <a href="/admin/sub-menu-navbar/{{ $menu->slug }}" class="btn btn-sm btn-success text-white"
                                                    title="Edit"><i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            @endif
                                            <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-toggle="tooltip" title="Hapus">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        {{-- /admin/urutan/{{ $menu->id }}/atas --}}
                                        <form action="#" method="post">
                                            @csrf
                                            @if ($menu->urutan != 1)
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa-solid fa-arrow-up" title="atas"></i>
                                                </button>
                                            @endif
                                        </form>
                                        {{-- <form action="#" method="post">
                                            @csrf
                                            @if ($menu->urutan != $menuCount)
                                                <button type="submit" class="btn btn-info btn-sm"><i
                                                        class="fa-solid fa-arrow-down"></i></button>
                                            @endif
                                        </form> --}}
                                    </td>
                                </tr>
                                <div class="modal fade" id="editMenu{{ $menu->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalSayaLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg border-0" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalSayaLabel">Buat Menu Navbar Baru</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/admin/edit/menu-navbar/{{ $menu->id }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        @if ($menu->tipe_menu === "link")
                                                        <label>Nama Menu</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="nama_menu" autocomplete='off' class="form-control
                                                            @error('nama_menu') is-invalid @enderror" value="{{ $menu->nama_menu }}" required maxlength="30">
                                                            @error('nama_menu')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <hr>
                                                        <label>Link Navbar</label>
                                                        <select class="form-control" name="link" id="link">
                                                            <option @if ($menu->link == '/hosting-unlimited/' . $menu->slug) selected @endif value="/hosting-unlimited" >Hosting Unlimited</option>
                                                            <option @if ($menu->link == '/promoKeren/' . $menu->slug) selected @endif value="/promoKeren">Promo</option>
                                                            <option @if ($menu->link == '/domain/' . $menu->slug) selected @endif value="/domain">Domain</option>
                                                        </select>
                                                        @endif

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-warning text-white">Simpan Perubahan</button>
                                                    </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.menuNavbar.modalMenu')

@endsection
