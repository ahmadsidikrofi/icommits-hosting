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
                        <label>Section Title</label>
                        <div class="input-group mb-3">
                        @if ($readonlySectionTitle)
                            <input type="text" name="title_section" autocomplete='off' class="form-control" placeholder="Section telah terisi, lakukan pengeditan apabila ingin dirubah" readonly>
                        @else
                            <input type="text" name="title_section" autocomplete='off' class="form-control @error('title_section') is-invalid @enderror">
                            @error('title_section')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipe_menu">Section Mini Title</label>
                        <div class="input-group mb-3">
                            @if ($readonlySectionTitle)
                                <input type="text" name="mini_title_promo" autocomplete='off' class="form-control" placeholder="Section telah terisi, lakukan pengeditan apabila ingin dirubah" readonly>
                            @else
                                <input type="text" name="mini_title_promo" autocomplete='off' class="form-control @error('mini_title_promo') is-invalid @enderror">
                                @error('mini_title_promo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            @endif
                        </div>
                    </div>
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
                        <label>Deskripsi Promo</label>
                        <textarea name="deskripsi_promo" id="deskripsi_promo"
                            class="form-control @error('deskripsi_promo') is-invalid @enderror" cols="30" rows="8">{{ old('deskripsi_promo') }}</textarea>
                        @error('deskripsi_promo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Choose Navbar's Menu</label>
                        <div class="input-group ">
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
                    </div>
                    <div class="form-group">
                        <label>Choose Navbar's SubMenu</label>
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


    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
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
