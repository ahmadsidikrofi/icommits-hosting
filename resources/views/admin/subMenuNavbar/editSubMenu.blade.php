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
            <h4 class="page-title">Edit Sub Menu</h4>
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
                    <a href="">Edit Data Sub Menu</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Paket Web Hosting Unlimited</h4>
            </div>
            <div class="card-body">
                <form action="/admin/edit/menu-navbar/{{ $subMenu->slug }}/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_sub_menu">Nama sub menu</label>
                        <div class="input-group">
                            <input type="text" value="{{ $subMenu->nama_sub_menu }}" placeholder="Masukkan nama sub menu"
                                name="nama_sub_menu" autocomplete='off' class="form-control @error('nama_sub_menu') is-invalid @enderror"
                                required>
                            @error('nama_sub_menu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <div class="input-group">
                            <input type="text" value="{{ $subMenu->deskripsi }}" placeholder="Masukkan deskripsi submenu"
                                name="deskripsi" autocomplete='off' class="form-control @error('deskripsi') is-invalid @enderror"
                                required>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" class="form-control" value="{{ $subMenu->link }}"
                         placeholder="Tulis link disini yang akan dituju">
                    </div>
                    <div class="form-group">
                        <label>Logo Sub Menu</label>
                        <input class="form-control" type="file" value="{{ $subMenu->image }}">
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
    {{-- <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script> --}}

    {{-- <script>
        function tampilkanPreview(gambar, idpreview) {
            var gb = gambar.files;
            for (var i = 0; i < gb.length; i++) {
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview = document.getElementById(idpreview);
                var reader = new FileReader();

                if (gbPreview.type.match(imageType)) {
                    preview.file = gbPreview;
                    reader.onload = (function(element) {
                        return function(e) {
                            element.src = e.target.result;
                        };
                    })(preview);
                    reader.readAsDataURL(gbPreview);
                } else {
                    alert("file yang anda upload tidak sesuai. Khusus mengunakan image.");
                }

            }
        }
    </script> --}}
    <script>
        $(document).ready(function() {
            $('.get-durasi').select2();
        });
    </script>
@endsection


{{-- <form action="/admin/submenu/edit/store" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label>Nama SubMenu</label>
        <div class="input-group">
            <input type="text" placeholder="Masukkan Nama SubMenu"
                name="nama_sub_menu" autocomplete='off'
                class="form-control @error('nama_sub_menu') is-invalid @enderror" required
                value="{{ $subMenu->nama_sub_menu }}">
                @error('nama_sub_menu')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <div class="input-group ">
            <input type="text" value="{{ old('deskripsi') }}" placeholder="Masukkan deskripsi"
                name="deskripsi" autocomplete='off'
                class="form-control @error('deskripsi') is-invalid @enderror" required>
            @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Link</label>
        <div class="input-group ">
            <input type="text" placeholder="Masukkan link"
                name="link" autocomplete='off'
                class="form-control @error('link') is-invalid @enderror" required>
            @error('link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Icon</label>
        <div class="input-group ">
            <input type="file" placeholder="Beri icon"
                name="image" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary text-white">Simpan</button>
    </div>
</form> --}}
