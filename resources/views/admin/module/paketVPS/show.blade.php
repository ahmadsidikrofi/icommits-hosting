@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="/css/toastr.css">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/o61nnuwogclhd3z601n2k0zh479m9kbnsivauhaxrlu4jco0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
        </script>
    <script>
        $(document).ready(function() {
            $('#artikel').DataTable();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/toastr.js"></script>
    <script>
        @if (Session::has('editVPS'))
        toastr.success('Edit VPS berhasil dilakukan')
        @endif
        @if (Session::has('addVPS'))
        toastr.success('VPS berhasil ditambah')
        @endif
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.delete-confirm').click(function (e) {
            var vps = $(this).attr('data-slug');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "VPS akan dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#11111',
                confirmButtonText: 'Hapus Sekarang!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/admin/delete/paket-vps/'+vps+''
                    Swal.fire(
                    'Sukses Terhapus!',
                    'VPS berhasil dihapus',
                    'BERHASIL'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    {
                        Swal.fire(
                        'Gajadi',
                        'VPS masih ada disini',
                        'error'
                        )
                    }
                }
            })
        });
    </script>
@endsection

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Paket Hosting VPS</h4>
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
                    <a href="">Paket VPS</a>
                </li>
            </ul>

        </div>
        <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="col-sm-8">
                        <div class="card-title">Paket VPS Hosting</div>
                    </div>
                    <div class="col mt-3">
                        <a class="btn btn-primary text-white float-right" href="/admin/create/paket-vps">Tambah Paket Web Hosting</a>
                    </div>
                </div>
            </div>
            <h5 class="p-2 mx-3 bg-warning text-dark fw-bold rounded w-50 mt-3"> Mohon hapus paket VPS yang sudah tidak
                memiliki menu yaa, biar ga lemot😍
            </h5>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table responsive-3 table-hover" id="artikel">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Paket</th>
                                <th>Deskripsi</th>
                                <th>Harga Paket</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ( $paketVPS as $paket )
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $paket->nama_paket }}</td>
                                <td>{{ $paket->deskripsi_paket }}</td>
                                <td>{{ $paket->harga_paket }}</td>
                                <td>
                                    <a title="Edit" data-toggle="modal" data-target="#edit{{ $paket->id }}" href="#" class="btn btn-outline-warning text-dark btn-sm">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="/admin/delete/paket-vps/{{ $paket->slug }}" type="submit" class="btn btn-danger btn-sm delete-confirm" data-slug="{{ $paket->slug }}"data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <div class="modal fade" id="edit{{ $paket->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modalSayaLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg border-0" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <h5 class="modal-title" id="modalSayaLabel">Edit Paket Web Hosting</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/admin/edit/paket-vps/{{ $paket->slug }}/store" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="durasi">Durasi Paket</label>
                                                    <div class="input-group mb-3">
                                                        <select class="get-durasi form-control" name="durasi" id="durasi">
                                                            <option @if ($paket->durasi === "jam") selected @endif>Jam</option>
                                                            <option @if ($paket->durasi === "bulan") selected @endif>Bulan</option>
                                                        </select>
                                                    </div>
                                                    <label>Nama Paket</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ $paket->nama_paket }}"
                                                        name="nama_paket" autocomplete='off' class="form-control
                                                        @error('nama_paket') is-invalid @enderror"
                                                        required>
                                                        @error('nama_paket')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <label>Deskripsi Paket</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="deskripsi_paket" class="form-control" value="{{ $paket->deskripsi_paket }}">
                                                    </div>
                                                    <label>Harga Paket</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="harga_paket" class="form-control" value="{{ $paket->harga_paket }}">
                                                    </div>
                                                    <label>Paket Unggulan</label>
                                                    <div class="input-group mb-3">
                                                        <textarea name="paket_unggulan" id="paket_unggulan" autocomplete='off'
                                                            class="form-control @error('paket_unggulan') is-invalid @enderror" cols="30" rows="8">{{ $paket->paket_unggulan }}</textarea>
                                                        @error('paket_unggulan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="row">
                                                            <div class="col">
                                                                <center>
                                                                    <span id="edit"></span>
                                                                </center>
                                                            </div>
                                                            <div class="col">
                                                                <img id="pedit" src="" alt=""
                                                                    class="rounded img-fluid float-right" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-warning text-white">Simpan
                                                Perubahan</button>
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
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
@endsection
