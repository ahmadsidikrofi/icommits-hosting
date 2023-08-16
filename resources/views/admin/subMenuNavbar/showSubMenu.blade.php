@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="/css/toastr.css">
@endsection

@section('js')
    <script src="{{ asset('assets/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#submenu').DataTable();
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
                    <a href="/admin/menu-navbar">Menu</a>
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
                                    <td data-header="No">{{ $no++ }}</td>
                                    <td data-header="Nama SubMenu">{{ $subMenu->nama_sub_menu }}</td>
                                    <td>{{ $subMenu->deskripsi }}</td>
                                    <td data-header="Isi Konten">
                                        {{ $subMenu->link }}
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-warning text-white" href="/admin/edit/submenu/{{ $subMenu->slug }}" data-toggle="tooltip" title="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="/admin/delete/submenu/{{ $subMenu->slug }}" class="btn btn-danger btn-sm delete-confirm" data-toggle="tooltip" title="Hapus" data-id="{{ $subMenu->slug }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/js/toastr.js"></script>
<script>
    @if (Session::has('addSubMenu'))
    toastr.success('SubMenu berhasil ditambah')
    @endif
    @if (Session::has('editSubMenu'))
        toastr.success('Edit sub-menu berhasil dilakukan')
    @endif
    @if (Session::has('error'))
        toastr.error('Data sub menu tidak ditemukan.')
    @endif
</script>
<script>
    $('.delete-confirm').click(function (e) {
        var SubmenuNavbar = $(this).attr('data-id');
        e.preventDefault()
        Swal.fire({
            title: 'Yakin Ingin Di Hapus?',
            text: "Menu akan dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#11111',
            confirmButtonText: 'Hapus Sekarang!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = '/admin/delete/submenu/'+SubmenuNavbar+''
                Swal.fire(
                'Sukses Terhapus!',
                'Menu berhasil dihapus',
                'BERHASIL'
                )
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                {
                    Swal.fire(
                    'Gajadi',
                    'Menu masih ada disini',
                    'error'
                    )
                }
            }
        })
    });
</script>
@include('admin.subMenuNavbar.modalTambahSubMenu')
@endsection
