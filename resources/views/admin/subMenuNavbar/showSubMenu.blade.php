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
                                    <td data-header="No">{{ $subMenu->id }}</td>
                                    <td data-header="Nama SubMenu">{{ $subMenu->nama_sub_menu }}</td>
                                    <td>{{ $subMenu->deskripsi }}</td>
                                    <td data-header="Isi Konten">
                                        {{ $subMenu->link }}
                                    </td>
                                    <td>
                                        <form action="submenu/{{ $subMenu->id }}/destroy" method="post">
                                            @csrf
                                            <a class="btn btn-sm btn-warning text-white" href="/admin/edit/menu-navbar/{{ $subMenu->slug }}" data-toggle="tooltip" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-toggle="tooltip" title="Hapus">
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
@include('admin.subMenuNavbar.modalTambahSubMenu')
@endsection
