@extends('partials.admin')

@section('js')
    <script src="{{ asset('assets/admin/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('content')
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
                    <a href="/admin/promo">Daftar Promo</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Tambah Promo</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Promo</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Card Mini Title</label>
                        <div class="input-group ">
                            <input type="text" placeholder="Insert Mini Title"
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
                            <input type="text" placeholder="Insert Title"
                                name="title_card" class="form-control @error('title_card') is-invalid @enderror"
                                required>
                            @error('title_card')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Get Promo (Optional)</label>
                        <div class="input-group ">
                            <input type="text" placeholder="Ex: Get Now!"
                                name="link_promo" class="form-control @error('link_promo') is-invalid @enderror">
                            @error('link_promo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Choose Navbar's Menu</label>
                        <div class="input-group ">
                            <div class="col">
                                <select class="form-control menu-navbar" name="menu_navbar" id="menu_navbar">
                                    <option disabled selected> -- Please Choose -- </option>
                                    @foreach ( $menuNavbar as $menu )
                                        @if ($menu->tipe_menu === "link")
                                            <option value="{{ $menu->id }}">{{ $menu->nama_menu }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            @error('menu_navbar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Choose Navbar's SubMenu</label>
                        <div class="input-group ">
                            <div class="col">
                                <select class="form-control menu_submenu" name="submenu_navbar" id="submenu_navbar">
                                    <option disabled selected> -- Please Choose -- </option>
                                    @foreach ($subMenuNavbar as $subMenu)
                                        <option value="{{ $subMenu->id }}" data-slug="{{ $subMenu->slug }}">{{ $subMenu->nama_sub_menu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('submenu_navbar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Expired At</label>
                        <input type="datetime-local"
                        name="expired_at" class="form-control @error('expired_at') is-invalid @enderror">
                        @error('expired_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <div class="input-group ">
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary text-white">
                            Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Fungsi untuk mengisi nilai slug_navbar saat subMenuNavbar dipilih
            $('#submenu_navbar').change(function() {
                const selectedSubmenu = $(this).find(':selected').val();
                const selectedSubmenuSlug = $(this).find(':selected').data('slug');
                $('#slug_navbar').val(selectedSubmenuSlug);
            });
        });
    </script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <script>
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
    </script>

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
