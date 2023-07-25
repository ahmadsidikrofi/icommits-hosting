@extends('partials.admin')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Hero</h4>
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
                    <a href="/admin/module/hero/index">Hero</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Edit Hero</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title col-sm-10">Edit Data Hero</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data">
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
                        <label>Title Hero</label>
                        <div class="input-group ">
                            <input type="text" value="{{ $hero->title_hero }}" placeholder="Masukkan Title Hero"
                                name="title_hero" autocomplete='off' class="form-control @error('title_hero') is-invalid @enderror"
                                required>
                            @error('title_hero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mini Title</label>
                        <div class="input-group ">
                            <input type="text" value="{{ $hero->mini_title }}" placeholder="Masukkan Mini Title"
                                name="mini_title" autocomplete='off' class="form-control @error('mini_title') is-invalid @enderror"
                                required>
                            @error('mini_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>

                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" autocomplete='off' class="form-control @error('deskripsi') is-invalid @enderror"
                            cols="30" rows="8">{{ $hero->deskripsi }}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Background Hero</label>
                        <input class="form-control" type="text" id="formFile" name="image_background"
                        value="{{ $hero->image_background }}">
                        <div class="custom-file mb-3">
                            <input type="file" id="file" name="image_background"
                                class="custom-file-input @error('image_background') is-invalid @enderror" accept="image/*"
                                onchange="tampilkanPreview(this,'preview')" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose
                                file</label>
                        </div>
                        @error('image_background')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-warning text-white"><i class="fa fa-save mr-1"></i>
                            Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <script>
        function tampilkanPreview(image_background, idpreview) {
            var gb = image_background.files;
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
                    document.getElementById("panah").innerHTML =
                        "<br><img src='{{ asset('images/arrow.png') }}' width='90'>";
                    reader.readAsDataURL(gbPreview);
                } else {
                    alert("file yang anda upload tidak sesuai. Khusus mengunakan image.");
                }

            }
        }
    </script>
@endsection
