@extends('partials.admin')

@section('js')
    <script src="{{ asset('assets/admin/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="/css/toastr.css">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('content')
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
                    <a href="/admin/hero">Daftar Hero</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Tambah Hero</a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Hero</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Hero's Title</label>
                        <div class="input-group ">
                            <input type="text" placeholder="Insert Hero's Title"
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
                            <input type="text" placeholder="Insert Mini Title"
                                name="mini_title" class="form-control @error('mini_title') is-invalid @enderror"
                                required>
                            @error('mini_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Get Started (Optional)</label>
                        <div class="input-group ">
                            <input type="text" placeholder="Ex: Get Now!"
                                name="link_button" class="form-control @error('link_button') is-invalid @enderror"
                                required>
                            @error('link_button')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Choose Menu's Navbar</label>
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
                        <label>Description</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                            cols="30" rows="8" placeholder="Insert Description"></textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Backround Image</label>
                        <div class="row mb-5">
                            <div class="col-lg-4 mx-auto">
                                <div class="card-body">
                                    <div class="img-wrap">
                                        <img src="https://kodfun.github.io/Reels/ImagePreview/choose.png" alt="avatar"
                                        class="img-fluid shadow-lg rounded" height="20" width="200"
                                        id="image_preview">
                                    </div>
                                    <div class="mt-3 mx-4">
                                        <label for="image" class="btn btn-dark text-light"><i class="fa-solid fa-upload"></i> Pilih gambar</label>
                                        <input type="file" name="image_background" class="form-control" id="image"
                                            style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('image_background')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Right Hero</label>
                        <div class="row mb-5">
                            <div class="col-lg-4 mx-auto">
                                <div class="card-body">
                                    <div class="img-wrap">
                                        <img src="https://kodfun.github.io/Reels/ImagePreview/choose.png" alt="avatar"
                                        class="img-fluid shadow-lg rounded" height="20" width="200"
                                        id="heroRight_preview">
                                    </div>
                                    <div class="mt-3 mx-4">
                                        <label for="image_right" class="btn btn-dark text-light"><i class="fa-solid fa-upload"></i> Pilih gambar</label>
                                        <input type="file" name="image_right" class="form-control" id="image_right"
                                            style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('image_right')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label>Background Hero</label>
                        <div class="input-group ">
                            <input type="file" name="image_background" class="form-control @error('image_background') is-invalid @enderror">
                                @error('image_background')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Right Hero</label>
                        <div class="input-group ">
                            <input type="file" name="image_right" class="form-control @error('image_right') is-invalid @enderror">
                                @error('image_right')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary text-white">
                            Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        // Update Hero Image Background
        $(document).ready(function () {
            // image preview
            $('#image').change(function() {
                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#image_preview').attr('src', e.target.result);
                    $('#image_preview').width(200);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });

        // Update Hero Right Background
        $(document).ready(function () {
            // image preview
            $('#image_right').change(function() {
                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#heroRight_preview').attr('src', e.target.result);
                    $('#heroRight_preview').width(200);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });

    </script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/toastr.js"></script>
    <script>
    @if (Session::has('addHero'))
        toastr.success('Hero berhasil ditambah')
    @endif
    </script>


@endsection
