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
                            <div class="card-title">Pertanyaan</div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <form action="{{ route('qna.update', $pertanyaan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            @if ( $menuNavbar && $menuNavbar->tipe_menu === "link")
                                <h4 class="fw-bold">Menu saat ini: {{ $menuNavbar->nama_menu }}</h4>
                            @else
                                <h4 class="fw-bold">Menu saat ini: {{ $subMenuNavbar->nama_sub_menu }}</h4>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Pertanyaan</label>
                            <div class="input-group ">
                                <input type="text" value="{{ $pertanyaan->pertanyaan }}" placeholder="Masukkan pertanyaan"
                                    name="pertanyaan" autocomplete='off'
                                    class="form-control @error('pertanyaan') is-invalid @enderror">
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
                                <textarea name="jawaban" class="form-control @error('jawaban') is-invalid @enderror">{{ $pertanyaan->jawaban }}</textarea>
                                @error('jawaban')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
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

@endsection
