@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assets/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#keuntungan').DataTable();
        });
    </script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Pertanyaan  </h4>
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
                        <a class="btn btn-primary text-white float-right" data-toggle="modal" data-target="#tambahPertanyaan" href="{{ route('qna.create') }}">Tambah Pertanyaan</a>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($pertanyaan as $item)
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="input-group">
                        @if (optional($item->menu_navbar)->tipe_menu === "link")
                        <h4 class="fw-bold">Menu Saat Ini: {{ optional($item->menu_navbar)->nama_menu }}</h4>
                        @else
                        <h4 class="fw-bold">Menu Saat Ini: {{ optional($item->submenu_navbar)->nama_sub_menu }}</h4>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Pertanyaan</label>
                    <div class="input-group ">
                        <input type="text" value="{{ $item->pertanyaan }}"
                        name="pertanyaan" autocomplete='off'
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
                        <input type="text"  value="{{ $item->jawaban }}" name="jawaban" class="form-control @error('jawaban') is-invalid @enderror readonly" readonly>
                        @error('jawaban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <form action="{{ route('qna.destroy', $item->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <a href="{{ route('qna.edit', $item->id) }}"
                            class="btn btn-sm btn-warning text-white" data-toggle="tooltip"
                            data-placement="top" title="Edit"><i
                                class="fa-solid fa-pen-to-square"></i> </a>
                        <button type="submit" class="btn btn-danger btn-sm delete-confirm"
                            data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach      
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <!-- Skrip inisialisasi Select2 -->

    <script>
        $(document).ready(function() {
            $('.kategori').select2();
        });
    </script>

@include('admin.module.qna.create')
@endsection
