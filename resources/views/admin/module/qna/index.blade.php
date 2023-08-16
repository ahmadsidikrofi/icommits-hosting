@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="/css/toastr.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.all.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
@endsection

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Pertanyaan </h4>
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
                    <a href="">Pertanyaan</a>
                </li>
            </ul>

        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="card-title"> Kumpulan Pertanyaan </div>
                    </div>
                    <div class="col mt-3">
                        <a class="btn btn-primary text-white float-right" data-toggle="modal"
                            data-target="#tambahPertanyaan" href="{{ route('qna.create') }}">Tambah Pertanyaan</a>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($pertanyaan as $item)
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group">
                            @if (optional($item->menu_navbar)->tipe_menu === 'link')
                                <h4 class="fw-bold">Menu Saat Ini: {{ optional($item->menu_navbar)->nama_menu }}</h4>
                            @else
                                <h4 class="fw-bold">Menu Saat Ini: {{ optional($item->submenu_navbar)->nama_sub_menu }}</h4>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pertanyaan</label>
                        <div class="input-group ">
                            <input type="text" value="{{ $item->pertanyaan }}" name="pertanyaan" autocomplete='off'
                                class="form-control @error('pertanyaan') is-invalid @enderror" readonly>
                            @error('pertanyaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jawaban</label>
                        <div class="input-group ">
                            <input type="text" value="{{ $item->jawaban }}" name="jawaban"
                                class="form-control @error('jawaban') is-invalid @enderror readonly" readonly>
                            @error('jawaban')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col">
                        <a href="{{ route('qna.edit', $item->id) }}"
                            class="btn btn-sm btn-warning text-white" data-toggle="tooltip"
                            data-placement="top" title="Edit"><i
                                class="fa-solid fa-pen-to-square"></i> </a>
                        <a href="/admin/hapus/tanya/{{ $item->id }}" type="submit" class="btn btn-danger btn-sm delete-confirm"
                            data-toggle="tooltip" data-placement="top" title="Hapus" data-id="{{ $item->id }}"><i
                                class="fa-solid fa-trash"></i></a>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/toastr.js"></script>
    <script>
    @if (Session::has('addTanya'))
        toastr.success('QnA berhasil ditambah')
    @endif
    </script>
    <script>
    @if (Session::has('editTanya'))
        toastr.success('Edit QnA berhasil dilakukan')
    @endif
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.delete-confirm').click(function (e) {
            var pertanyaan = $(this).attr('data-id');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Pertanyaan akan dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#11111',
                confirmButtonText: 'Hapus Sekarang!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/admin/hapus/tanya/' + pertanyaan + ''
                    Swal.fire(
                        'Sukses Terhapus!',
                        'Pertanyaan berhasil dihapus',
                        'success'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    {
                        Swal.fire(
                        'Gajadi',
                        'Pertanyaan masih ada disini',
                        'error'
                        )
                    }
                }
            })
        });
    </script>


@include('admin.module.qna.create')
@endsection
