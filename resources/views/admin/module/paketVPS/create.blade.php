@extends('partials.admin')

@section('js')
    <script src="{{ asset('assets/admin/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.css') }}">
    <script src="https://cdn.tiny.cloud/1/o61nnuwogclhd3z601n2k0zh479m9kbnsivauhaxrlu4jco0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endsection

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tambah Paket VPS Hosting</h4>
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
                    <a href="/admin/paket-vps">Paket VPS Hosting</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Tambah Paket VPS Hosting</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Paket VPS Hosting</h4>
            </div>
            <div class="card-body">
                <form action="/admin/create/paket-vps/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="durasi">Durasi Paket</label>
                        <div class="input-group mb-3">
                            <select class="form-control get-durasi" name="durasi" id="durasi">
                                <option value="jam">Jam</option>
                                <option value="bulan">Bulan</option>
                            </select>
                        </div>
                        <label>Nama Paket</label>
                        <div class="input-group">
                            <input type="text" value="{{ old('nama_paket') }}" placeholder="Masukkan nama paket"
                                name="nama_paket" autocomplete='off' class="form-control @error('nama_paket') is-invalid @enderror"
                                required>
                            @error('nama_paket')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Paket</label>
                        <input type="text" name="deskripsi_paket" class="form-control"
                         placeholder="Tulis deskripsi paket disini, jangan panjang-panjang yaa">
                    </div>
                    <div class="form-group">
                        <label>Harga Paket</label>
                        <input type="text" name="harga_paket" class="form-control"
                         placeholder="Buat harga paketnya">
                    </div>
                    <div class="form-group">
                        <label>Paket Unggulan</label>
                        <textarea name="paket_unggulan" id="paket_unggulan"
                            class="form-control @error('paket_unggulan') is-invalid @enderror" cols="30" rows="8">{{ old('paket_unggulan') }}</textarea>
                        @error('paket_unggulan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary text-white">
                            Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.get-durasi').select2();
        });
    </script>
@endsection
