@extends('partials.admin')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/o61nnuwogclhd3z601n2k0zh479m9kbnsivauhaxrlu4jco0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Promo</h4>
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
                    <a href="/admin/promo">Promo</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Edit Promo</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title col-sm-10">Edit Data Promo</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        @if ( $menuNavbar && $menuNavbar->tipe_menu === "link")
                            <h4 class="fw-bold">Menu saat ini: {{ $menuNavbar->nama_menu }}</h4>
                        @else
                            <h4 class="fw-bold">Menu saat ini: {{ $subMenuNavbar->nama_sub_menu }}</h4>
                        @endif
                    </div>
                    @if ( $promo->title_promo < 1 )
                    <div class="form-group">
                        <label>Judul Section</label>
                        <p class="text-danger fw-bold">Section Title dan Mini Title telah terisi, lakukan pengeditan pada promo pertama apabila ingin dirubah</p>
                    </div>
                    <div class="form-group">
                        <label>Card Mini Title</label>
                        <div class="input-group ">
                            <input type="text" value="{{ $promo->mini_title_card }}" placeholder="Insert Mini Title"
                                name="mini_title_card" class="form-control @error('mini_title_card') is-invalid @enderror"
                                required>
                            @error('mini_title_card')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Card Title</label>
                        <div class="input-group ">
                            <input type="text" value="{{ $promo->title_promo }}" placeholder="Insert Title"
                                name="title_promo" class="form-control @error('title_promo') is-invalid @enderror"
                                required>
                            @error('title_promo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Get Promo (Optional)</label>
                        <div class="input-group ">
                            <input type="text" value="{{ $promo->link_promo }}" placeholder="Ex: Get Now!"
                                name="link_promo" class="form-control @error('link_promo') is-invalid @enderror">
                            @error('link_promo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Promo</label>
                        <textarea name="deskripsi_promo" id="deskripsi_promo"
                            class="form-control @error('deskripsi_promo') is-invalid @enderror" cols="30" rows="8">{{ $promo->deskripsi_promo }}</textarea>
                        @error('deskripsi_promo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Expired At</label>
                        <input type="datetime-local" value="{{ $promo->expired_at }}" placeholder="Ex: Get Now!"
                        name="expired_at" class="form-control @error('expired_at') is-invalid @enderror">
                        @error('expired_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <div class="row">
                            <div class="col-sm-6 mx-auto d-flex justify-content-center p-3 rounded">
                                <img src="/image/{{ $promo->image }}" class="img-fluid rounded-4 shadow " height="20" width="200" alt="">
                            </div>
                            <input type="file" class="form-control" name="image">
                        </div>
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @else
                        <div class="form-group">
                            <label>Section Title</label>
                            <div class="input-group ">
                                <input type="text" value="{{ $promo->title_section }}" placeholder="Insert Title"
                                    name="title_section" class="form-control @error('title_section') is-invalid @enderror">
                                @error('title_section')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Section Mini Title</label>
                            <div class="input-group ">
                                <input type="text" value="{{ $promo->mini_title_promo }}" placeholder="Insert Mini Title"
                                    name="mini_title_promo"  class="form-control @error('mini_title_promo') is-invalid @enderror">
                                @error('mini_title_promo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Card Mini Title</label>
                            <div class="input-group ">
                                <input type="text" value="{{ $promo->mini_title_card }}" placeholder="Insert Mini Title"
                                    name="mini_title_card" class="form-control @error('mini_title_card') is-invalid @enderror"
                                    required>
                                @error('mini_title_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Card Title</label>
                            <div class="input-group ">
                                <input type="text" value="{{ $promo->title_promo }}" placeholder="Insert Title"
                                    name="title_promo" class="form-control @error('title_promo') is-invalid @enderror"
                                    required>
                                @error('title_promo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Get Promo (Optional)</label>
                            <div class="input-group ">
                                <input type="text" value="{{ $promo->link_promo }}" placeholder="Ex: Get Now!"
                                    name="link_promo" class="form-control @error('link_promo') is-invalid @enderror">
                                @error('link_promo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Expired At</label>
                            <input type="datetime-local" value="{{ $promo->expired_at }}" placeholder="Ex: Get Now!"
                            name="expired_at" class="form-control @error('expired_at') is-invalid @enderror">
                            @error('expired_at')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="row">
                                <div class="col-sm-6 mx-auto d-flex justify-content-center p-3 rounded">
                                    <img src="/image/{{ $promo->image }}" class="img-fluid rounded-4 shadow " height="20" width="200" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mx-auto">
                                    <div> class="custom-file mb-3">
                                        <input type="file" id="file" name="image"
                                            class="custom-file-input @error('image') is-invalid @enderror" accept="image/*"
                                            onchange="tampilkanPreview(this,'preview')" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif
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
