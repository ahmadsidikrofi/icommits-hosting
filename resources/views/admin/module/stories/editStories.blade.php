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
                    <a href="/admin/stories-section">Daftar Stories</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Edit Stories Halaman</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Stories</h4>
            </div>
            <div class="card-body">
                <form action="/admin/edit/stories/store/{{ $editStories->slug }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Section Name</label>
                        <div class="input-group mb-3">
                            <input type="text" name="section_title" value="{{ $editStories->section_title }}" class="form-control @error('section_title') is-invalid @enderror">
                            @error('section_title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <label>Stories Title</label>
                        <div class="input-group mb-3">
                            <input type="text" name="stories_title" value="{{ $editStories->stories_title }}" class="form-control @error('stories_title') is-invalid @enderror" required maxlength="40">
                            @error('stories_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Kategori Stories</label>
                        <select name="kategori" id="kategori" class="form-control mb-4">
                            <option disabled selected>
                                @foreach ( $editStories->kategori as $kategori )
                                    <p class="text-secondary">Kategori Saat ini : {{ $kategori->nama_kategori }}</p>
                                @endforeach
                            </option>
                            @foreach ( $kategoriStories as $kategori )
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                        <label>Deskripsi Stories</label>
                        <div class="input-group mb-3"> <input type="text" name="deskripsi" value="{{ $editStories->deskripsi }}" class="form-control
                        @error('deskripsi') is-invalid @enderror"
                                required>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Konten Stories</label>
                        <textarea name="isi_stories" id="isi_stories" cols="30" rows="10">{{ $editStories->isi_stories }}</textarea>
                        <label for="image" class="mt-4">Stories Image</label>
                        <div class="row">
                            <div class="col-sm-6 mx-auto d-flex justify-content-center p-3 rounded">
                                <img src="/image/blog/{{ $editStories->image }}" class="img-fluid rounded-4 shadow " height="20" width="200" alt="">
                            </div>
                        </div>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-secondary text-white mx-auto">Bikin Stories</button>
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
