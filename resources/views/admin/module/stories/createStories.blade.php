@extends('partials.admin')

@section('js')
    <script src="{{ asset('assets/admin/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/o61nnuwogclhd3z601n2k0zh479m9kbnsivauhaxrlu4jco0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
            <h4 class="page-title">Stories Section</h4>
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
                    <a href="/admin/services-section">Daftar Stories</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Tambah Halaman</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Stories</h4>
            </div>
            <div class="card-body">
                <form action="/admin/create/stories/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Section Name</label>
                        <div class="input-group mb-3">
                            @if ($readonlySectionTitle)
                                <input type="text" name="section_title" class="form-control" placeholder="Section telah terisi, lakukan pengeditan apabila ingin dirubah" readonly>
                            @else
                                <input type="text" name="section_title" autocomplete='off' class="form-control @error('section_title') is-invalid @enderror">
                                @error('section_title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                                </span> @enderror
                            @endif
                        </div>
                        <label>Stories Title</label>
                        <div class="input-group mb-3">
                            <input type="text" name="stories_title" autocomplete='off' maxlength="40"
                                class="form-control
                        @error('stories_title') is-invalid @enderror"
                                required>
                            @error('stories_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Kategori Stories</label>
                        <select name="kategori" id="kategori" class="form-control mb-4">
                            <option disabled selected>-- Pilih Kategori Stories --</option>
                            @foreach ( $kategori as $kategori )
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                        <label>Deskripsi Stories</label>
                        <div class="input-group mb-3">
                            <input type="text" name="deskripsi" autocomplete='off'
                                class="form-control
                        @error('deskripsi') is-invalid @enderror"
                                required>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Konten Stories</label>
                        <textarea name="isi_stories" id="isi_stories" cols="30" rows="10">Konten dari Stories dapat dibuat disini</textarea>
                        <label for="image" class="mt-4">Stories Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mx-end">
                        <button type="submit" class="btn btn-secondary text-white">Tambah Kategori</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.menu-navbar').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.menu_submenu').select2();
        });
    </script>
@endsection
