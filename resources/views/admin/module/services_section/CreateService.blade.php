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
            <h4 class="page-title">Service Section</h4>
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
                    <a href="/admin/services-section">Daftar Service</a>
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
                <h4 class="card-title">Tambah Data Service</h4>
            </div>
            <div class="card-body">
                <form action="/admin/create/service/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Section Name</label>
                        <div class="input-group mb-3">
                            @if ($readonlySectionTitle)
                                <input type="text" name="section_title" autocomplete='off' class="form-control" placeholder="Section telah terisi, lakukan pengeditan apabila ingin dirubah" readonly>
                            @else
                                <input type="text" name="section_title" autocomplete='off' class="form-control @error('section_title') is-invalid @enderror">
                                @error('section_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            @endif
                        </div>
                        <label>Service Name</label>
                        <div class="input-group mb-3">
                            <input type="text" name="services_title" autocomplete='off'
                                class="form-control
                        @error('services_title') is-invalid @enderror"
                                required>
                            @error('services_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Service Description</label>
                        <div class="input-group mb-3">
                            <input type="text" name="services_deskripsi" autocomplete='off' maxlength="66"
                                class="form-control
                        @error('services_deskripsi') is-invalid @enderror"
                                required>
                            @error('services_deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Service Price</label>
                        <div class="input-group mb-3">
                            <input type="text" name="services_price" autocomplete='off'
                                class="form-control
                        @error('services_price') is-invalid @enderror"
                                required>
                            @error('services_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>Choose Navbar Menu</label>
                        <div class="input-group mb-4">
                            <div class="col">
                                <select class="form-control menu_navbar" name="menu_navbar" id="menu_navbar">
                                    <option disabled selected> -- Please Choose -- </option>
                                    <option value="Tidak jadi"> -- Tidak jadi -- </option>
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

                        <label>Choose Navbar SubMenu</label>
                        <div class="input-group ">
                            <div class="col">
                                <select class="form-control menu_submenu" name="submenu_navbar" id="submenu_navbar">
                                    <option disabled selected> -- Please Choose -- </option>
                                    <option value="Tidak jadi"> -- Tidak jadi -- </option>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-warning text-white">Simpan Perubahan</button>
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

    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.menu-navbar').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.menu_submenu').select2();
        });
    </script> --}}

    <script>
        const menuNavbarSelect = document.getElementById('menu_navbar');
        const submenuNavbarSelect = document.getElementById('submenu_navbar');

        menuNavbarSelect.addEventListener('change', function () {
            submenuNavbarSelect.disabled = this.value !== ''; // Jika memilih menu, submenu menjadi disabled
            if (this.value === 'Tidak jadi') {
                submenuNavbarSelect.disabled = false;
            }
        });

        submenuNavbarSelect.addEventListener('change', function () {
            menuNavbarSelect.disabled = this.value !== '';
            if (this.value === 'Tidak jadi') {
                menuNavbarSelect.disabled = false;
            }
        });
    </script>
@endsection
