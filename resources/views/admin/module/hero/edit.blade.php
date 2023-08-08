@extends('partials.admin')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/deleteBackgroundHero.css">

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
                    <a href="/admin/hero">Hero</a>
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
                        <label>Get Started (Optional)</label>
                        <div class="input-group ">
                            <input type="text"value="{{ $hero->link_button }}" placeholder="cth:Dapatkan Sekarang"
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
                        <label>Backround Image</label>
                        <div class="row mb-5">
                            <div class="col-lg-4 mx-auto">
                                <div class="card-body">
                                    <div class="img-wrap">
                                        <span class="close">
                                            <a href="/admin/hero/remove/background-hero/{{ $hero->slug }}">
                                                <i class="fa-solid fa-trash" style="font-size: 1rem; color: rgba(255, 255, 255, 0.644);"></i>
                                            </a>
                                        </span>
                                        @if ($hero->image_background)
                                            <img src="/image/hero/{{ $hero->image_background }}" alt="avatar"
                                                class="rounded img-fluid shadow-lg" height="20" width="200"
                                                id="image_preview">
                                        @else
                                            <img src="/image/hero/hero-default.jpg" alt="avatar"
                                            class="rounded img-fluid shadow-lg" height="20" width="200"
                                            id="image_preview">
                                        @endif
                                    </div>
                                    <div class="mt-3">
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
                                        <span class="close">
                                            <a href="/admin/hero/remove/background-hero-right/{{ $hero->slug }}">
                                                <i class="fa-solid fa-trash" style="font-size: 1rem; color: rgba(255, 255, 255, 0.644);"></i>
                                            </a>
                                        </span>
                                        @if ($hero->image_right)
                                            <img src="/image/hero/{{ $hero->image_right }}" alt="avatar"
                                                class="rounded img-fluid shadow-lg" height="20" width="300"
                                                id="heroRight_preview">
                                        @else
                                            <img src="/image/hero/hero-right.png" alt="avatar"
                                            class="rounded img-fluid shadow-lg" height="20" width="200"
                                            id="heroRight_preview">
                                        @endif
                                    </div>
                                    <div class="mt-3">
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
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-warning text-white"><i class="fa fa-save mr-1"></i>
                            Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

@endsection
